<?php

declare(strict_types=1);

namespace Leadspedia\Test\Scripts;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use stdClass;

final class ConvertorTest extends TestCase
{
    private string $temporaryDirectory;

    protected function setUp(): void
    {
        $this->temporaryDirectory = sys_get_temp_dir() . '/leadspedia-convertor-' . bin2hex(random_bytes(8));
        mkdir($this->temporaryDirectory . '/scripts', 0o700, true);
        mkdir($this->temporaryDirectory . '/schema', 0o700, true);
        copy(__DIR__ . '/../../scripts/convertor.php', $this->temporaryDirectory . '/scripts/convertor.php');
        copy(__DIR__ . '/../../schema/compatibility.json', $this->temporaryDirectory . '/schema/compatibility.json');
    }

    protected function tearDown(): void
    {
        foreach (['schema/openapi.json', 'schema/api-docs.json', 'schema/compatibility.json', 'scripts/convertor.php'] as $path) {
            $file = $this->temporaryDirectory . '/' . $path;
            if (is_file($file)) {
                unlink($file);
            }
        }
        rmdir($this->temporaryDirectory . '/schema');
        rmdir($this->temporaryDirectory . '/scripts');
        rmdir($this->temporaryDirectory);
    }

    public static function provideFallbackResponses(): iterable
    {
        yield 'GET includes response and data objects' => ['get', [
            'description' => '',
            'schema'      => [
                'type'       => 'object',
                'properties' => [
                    'success'  => ['type' => 'boolean'],
                    'message'  => ['type' => 'string'],
                    'response' => ['type' => 'object'],
                    'data'     => ['type' => 'object'],
                ],
            ],
        ]];
        yield 'POST includes success and message' => ['post', [
            'description' => 'post-response',
            'schema'      => [
                'type'       => 'object',
                'properties' => [
                    'success' => ['type' => 'boolean'],
                    'message' => ['type' => 'string'],
                ],
            ],
        ]];
        yield 'other methods have no invented schema' => ['delete', ['description' => '']];
    }

    public function testCompatibilityKeepsAmountsDecimalAndIdentifiersInteger(): void
    {
        $source                                                                        = self::officialSource();
        $operation                                                                     = $source['paths']['/core/v2/widgets/delete.do']['post'];
        $operation['parameters'][]                                                     = ['name' => 'amount', 'in' => 'query', 'required' => true, 'schema' => ['type' => 'integer']];
        $source['paths']['/core/v2/leadDistributionContracts/adjustCredit.do']['post'] = $operation;
        $output                                                                        = $this->convert($source);
        $parameters                                                                    = array_column($output['paths']['/leadDistributionContracts/adjustCredit.do']['post']['parameters'], null, 'name');

        self::assertSame('number', $parameters['amount']['type']);
        self::assertTrue($parameters['amount']['required']);
        self::assertSame('integer', $parameters['widgetID']['type']);
    }

    public function testCompatibilityOrdersExistingParametersBeforeNewOnesWithoutRestoringRemovedFields(): void
    {
        $source                  = self::officialSource();
        $operation               = $source['paths']['/core/v2/widgets/getAll.do']['get'];
        $operation['parameters'] = [];
        foreach (['search', 'status', 'advertiserID', 'newFilter'] as $name) {
            $operation['parameters'][] = ['name' => $name, 'in' => 'query', 'schema' => ['type' => 'string']];
        }
        $source['paths']['/core/v2/advertisers/getAll.do']['get'] = $operation;
        $output                                                   = $this->convert($source);

        self::assertSame(['advertiserID', 'status', 'search', 'newFilter'], array_column($output['paths']['/advertisers/getAll.do']['get']['parameters'], 'name'));
    }

    public function testCompatibilityPreservesExplicitUpstreamDateFormats(): void
    {
        $source                                                                                    = self::officialSource();
        $source['paths']['/core/v2/widgets/getAll.do']['get']['parameters'][2]['schema']['format'] = 'date-time';
        $output                                                                                    = $this->convert($source);

        self::assertSame('date-time', $output['paths']['/widgets/getAll.do']['get']['parameters'][2]['format']);
    }

    public function testCompatibilityRejectsUnexpectedNonNumericAmountTypes(): void
    {
        $source                                                                        = self::officialSource();
        $operation                                                                     = $source['paths']['/core/v2/widgets/delete.do']['post'];
        $operation['parameters'][]                                                     = ['name' => 'amount', 'in' => 'query', 'schema' => ['type' => 'string']];
        $source['paths']['/core/v2/leadDistributionContracts/adjustCredit.do']['post'] = $operation;
        $result                                                                        = $this->runConverter($source);

        self::assertNotSame(0, $result['status']);
        self::assertStringContainsString('Review numeric compatibility override', (string) $result['stderr']);
        self::assertFileDoesNotExist($this->outputPath());
    }

    public function testCorrectsDeliveredLeadsWithoutChangingOtherSoldPaths(): void
    {
        $output = $this->convert(self::source([
            self::endpoint('/leads/getSold.do', 'Get Sold'),
            self::endpoint('/leads/getSold.do', 'Get Delivered'),
            self::endpoint('/widgets/getSold.do', 'Get Delivered'),
        ]));

        self::assertSame([
            '/leads/getSold.do', '/leads/getDelivered.do', '/widgets/getSold.do',
        ], array_keys($output['paths']));
        self::assertSame('Get Sold', $output['paths']['/leads/getSold.do']['get']['summary']);
        self::assertSame('leadsgetDelivereddo', $output['paths']['/leads/getDelivered.do']['get']['operationId']);
        self::assertSame('Get Delivered', $output['paths']['/leads/getDelivered.do']['get']['summary']);
        self::assertSame('widgetsgetSolddo', $output['paths']['/widgets/getSold.do']['get']['operationId']);
    }

    public function testGroupsOperationsByPathAndPreservesConsumes(): void
    {
        $endpoint             = self::endpoint('/widgets/create.do', 'Create Widget', 'post');
        $endpoint['consumes'] = ['application/x-www-form-urlencoded'];
        $output               = $this->convert(self::source([$endpoint]));
        $operation            = $output['paths']['/widgets/create.do']['post'];

        self::assertSame(['widgets'], $operation['tags']);
        self::assertSame('widgetscreatedo', $operation['operationId']);
        self::assertSame('Create Widget', $operation['summary']);
        self::assertFalse($operation['deprecated']);
        self::assertSame(['application/x-www-form-urlencoded'], $operation['consumes']);
        self::assertSame(['application/json'], $operation['produces']);
    }

    public function testInvalidJsonFailsWithoutWritingOutput(): void
    {
        $result = $this->runConverter('{broken');

        self::assertNotSame(0, $result['status']);
        self::assertStringContainsString('JsonException', (string) $result['stderr']);
        self::assertFileDoesNotExist($this->outputPath());
    }

    public function testMapsDocumentMetadataAndAuthentication(): void
    {
        $output = $this->convert(self::source([
            self::endpoint('/widgets/getAll.do', 'List Widgets'),
        ]));

        self::assertSame('2.0', $output['swagger']);
        self::assertSame('v2.0', $output['info']['version']);
        self::assertSame('Converter Fixture API', $output['info']['title']);
        self::assertSame('api.example.test', $output['host']);
        self::assertSame('/core/v2', $output['basePath']);
        self::assertSame(['https'], $output['schemes']);
        self::assertSame(['application/json'], $output['consumes']);
        self::assertSame(['application/json'], $output['produces']);
        self::assertSame([
            'apiKey0' => ['type' => 'apiKey', 'in' => 'query', 'name' => 'api_key'],
            'apiKey1' => ['type' => 'apiKey', 'in' => 'query', 'name' => 'api_secret'],
        ], $output['securityDefinitions']);
        self::assertSame([['apiKey0' => []], ['apiKey1' => []]], $output['security']);

        $document = json_decode(file_get_contents($this->outputPath()), false, 512, JSON_THROW_ON_ERROR);
        self::assertInstanceOf(stdClass::class, $document->info->contact);
        self::assertInstanceOf(stdClass::class, $document->definitions);
        self::assertInstanceOf(stdClass::class, $document->responses);
        self::assertInstanceOf(stdClass::class, $document->parameters);
    }

    public function testMapsQueryTypesRequiredFlagsFormatsEnumsAndFalsyDefaults(): void
    {
        $endpoint = self::endpoint('/widgets/getAll.do', querySchema: [
            'type'       => 'object',
            'properties' => [
                'widgetID' => ['type' => ['integer', 'null'], 'default' => 0],
                'status'   => ['type' => 'string', 'enum' => ['Active', 'Pending'], 'default' => 'Active'],
                'enabled'  => ['type' => 'boolean', 'default' => false],
                'fromDate' => ['type' => 'string', 'format' => 'date'],
            ],
            'required' => ['widgetID', 'status'],
        ]);
        $output = $this->convert(self::source([$endpoint]));

        self::assertSame([
            [
                'name' => 'widgetID', 'in' => 'query', 'required' => true,
                'type' => 'integer', 'description' => '', 'format' => '', 'default' => 0,
            ],
            [
                'name' => 'status', 'in' => 'query', 'required' => true,
                'type' => 'string', 'description' => '', 'format' => '', 'default' => 'Active',
                'enum' => ['Active', 'Pending'],
            ],
            [
                'name' => 'enabled', 'in' => 'query', 'required' => false,
                'type' => 'boolean', 'description' => '', 'format' => '', 'default' => false,
            ],
            [
                'name' => 'fromDate', 'in' => 'query', 'required' => false,
                'type' => 'string', 'description' => '', 'format' => 'date', 'default' => '',
            ],
        ], $output['paths']['/widgets/getAll.do']['get']['parameters']);
    }

    public function testOfficialDocumentDoesNotSilentlyDropRequestBodies(): void
    {
        $source                                                               = self::officialSource();
        $source['paths']['/core/v2/widgets/delete.do']['post']['requestBody'] = ['content' => []];
        $result                                                               = $this->runConverter($source);

        self::assertNotSame(0, $result['status']);
        self::assertStringContainsString('Request bodies need explicit conversion', (string) $result['stderr']);
        self::assertFileDoesNotExist($this->outputPath());
    }

    public function testOfficialDocumentKeepsOnlyCorePathsAndExistingSdkNames(): void
    {
        $output = $this->convert(self::officialSource());

        self::assertSame(['/widgets/getAll.do', '/widgets/delete.do'], array_keys($output['paths']));
        self::assertSame('/core/v2', $output['basePath']);
        self::assertSame('api.example.test', $output['host']);
        self::assertSame('Official Fixture API', $output['info']['title']);
        self::assertSame('current', $output['info']['version']);
        self::assertSame('Published contract', $output['info']['description']);
        $operation = $output['paths']['/widgets/getAll.do']['get'];
        self::assertSame(['widgets'], $operation['tags']);
        self::assertSame('widgetsgetAlldo', $operation['operationId']);
        self::assertSame('Get All', $operation['summary']);
        self::assertSame(['basicAuth' => ['type' => 'basic']], $output['securityDefinitions']);
        self::assertSame([['basicAuth' => []]], $operation['security']);
    }

    public function testOfficialDocumentPreservesDocumentedJsonResponseSchemas(): void
    {
        $source                                                                 = self::officialSource();
        $schema                                                                 = ['type' => 'object', 'properties' => ['count' => ['type' => 'integer']]];
        $source['paths']['/core/v2/widgets/getAll.do']['get']['responses'][200] = [
            'description' => 'Documented response',
            'content'     => ['application/json' => ['schema' => $schema]],
        ];
        $output = $this->convert($source);

        self::assertSame(['description' => 'Documented response', 'schema' => $schema], $output['paths']['/widgets/getAll.do']['get']['responses'][200]);
    }

    public function testOfficialDocumentPreservesParameterSchemasAndDescriptions(): void
    {
        $output     = $this->convert(self::officialSource());
        $parameters = $output['paths']['/widgets/getAll.do']['get']['parameters'];

        self::assertSame(['widgetID', 'status', 'fromDate'], array_column($parameters, 'name'));
        self::assertSame('integer', $parameters[0]['type']);
        self::assertTrue($parameters[0]['required']);
        self::assertSame('Widget identifier', $parameters[0]['description']);
        self::assertSame(0, $parameters[0]['default']);
        self::assertSame(['Active', 'Paused'], $parameters[1]['enum']);
        self::assertSame('Active', $parameters[1]['default']);
        self::assertFalse($parameters[1]['required']);
        self::assertSame('YYYY-MM-DD', $parameters[2]['x-matching-pattern']);
        self::assertSame('date', $parameters[2]['format']);
        self::assertArrayNotHasKey('default', $parameters[2]);
    }

    public function testOfficialDocumentRejectsMissingCorePaths(): void
    {
        $source = self::officialSource();
        unset($source['paths']['/core/v2/widgets/getAll.do'], $source['paths']['/core/v2/widgets/delete.do']);
        $result = $this->runConverter($source);

        self::assertNotSame(0, $result['status']);
        self::assertStringContainsString('contains no Core API paths', (string) $result['stderr']);
        self::assertFileDoesNotExist($this->outputPath());
    }

    public function testOfficialDocumentSuppliesStableFallbackModelsWithoutLosingDefaultResponse(): void
    {
        $output = $this->convert(self::officialSource());

        foreach (['getAll' => ['get', 'inline_response_200_1'], 'delete' => ['post', 'inline_response_200']] as $action => [$method, $model]) {
            $responses = $output['paths']['/widgets/' . $action . '.do'][$method]['responses'];
            self::assertSame(['description' => 'Response'], $responses['default']);
            self::assertSame(['$ref' => '#/definitions/' . $model], $responses[200]['schema']);
        }
        self::assertSame(['success', 'message'], array_keys($output['definitions']['inline_response_200']['properties']));
        self::assertSame(['success', 'message', 'response', 'data'], array_keys($output['definitions']['inline_response_200_1']['properties']));
    }

    public function testPreservesDocumentedResponses(): void
    {
        $responses = [
            201 => ['description' => 'Created', 'schema' => ['type' => 'string']],
            400 => ['description' => 'Invalid widget'],
        ];
        $endpoint = self::endpoint('/widgets/create.do', method: 'post', responses: $responses);
        $output   = $this->convert(self::source([$endpoint]));

        self::assertSame($responses, $output['paths']['/widgets/create.do']['post']['responses']);
    }

    public function testQueryParametersAreOptionalWhenRequiredIsAbsent(): void
    {
        $endpoint = self::endpoint('/widgets/getAll.do', querySchema: [
            'type'       => 'object',
            'properties' => ['search' => ['type' => 'string']],
        ]);
        $output    = $this->convert(self::source([$endpoint]));
        $parameter = $output['paths']['/widgets/getAll.do']['get']['parameters'][0];

        self::assertSame('search', $parameter['name']);
        self::assertFalse($parameter['required']);
        self::assertSame('', $parameter['default']);
        self::assertArrayNotHasKey('enum', $parameter);
    }

    public function testRejectsDuplicatePathsWithoutWritingOutput(): void
    {
        $result = $this->runConverter(self::source([
            self::endpoint('/widgets/getAll.do', 'First'),
            self::endpoint('/widgets/getAll.do', 'Duplicate'),
        ]));

        self::assertNotSame(0, $result['status']);
        self::assertStringContainsString('Duplicate path: /widgets/getAll.do', (string) $result['stderr']);
        self::assertSame('', $result['stdout']);
        self::assertFileDoesNotExist($this->outputPath());
    }

    public function testReproducesTheCheckedInOpenApiSchema(): void
    {
        $source   = json_decode(file_get_contents(__DIR__ . '/../../schema/api-docs.json'), true, 512, JSON_THROW_ON_ERROR);
        $expected = json_decode(file_get_contents(__DIR__ . '/../../schema/openapi.json'), true, 512, JSON_THROW_ON_ERROR);

        self::assertSame($expected, $this->convert($source));
    }

    #[DataProvider('provideFallbackResponses')]
    public function testSynthesizesMissingResponses(string $method, array $response): void
    {
        $output = $this->convert(self::source([
            self::endpoint('/widgets/example.do', method: $method),
        ]));

        self::assertSame([200 => $response], $output['paths']['/widgets/example.do'][$method]['responses']);
    }

    private function convert(array $source): array
    {
        $result = $this->runConverter($source);
        self::assertSame(0, $result['status'], $result['stderr']);
        self::assertSame('', $result['stdout']);
        self::assertSame('', $result['stderr']);
        self::assertFileExists($this->outputPath());

        return json_decode(file_get_contents($this->outputPath()), true, 512, JSON_THROW_ON_ERROR);
    }

    private static function endpoint(
        string $path,
        string $name = 'Example',
        string $method = 'get',
        array $querySchema = ['type' => 'object', 'properties' => [], 'required' => []],
        array $responses = [],
    ): array {
        return [
            'name'      => $name,
            'consumes'  => ['application/json'],
            'responses' => $responses,
            'request'   => [
                'path'        => $path,
                'method'      => $method,
                'pathParams'  => '{"type":"object","properties":{},"required":[]}',
                'queryString' => json_encode($querySchema, JSON_THROW_ON_ERROR),
            ],
        ];
    }

    private static function officialSource(): array
    {
        return json_decode(file_get_contents(__DIR__ . '/../Fixtures/convertor/official-openapi.json'), true, 512, JSON_THROW_ON_ERROR);
    }

    private function outputPath(): string
    {
        return $this->temporaryDirectory . '/schema/openapi.json';
    }

    private function runConverter(array|string $source): array
    {
        file_put_contents($this->temporaryDirectory . '/schema/api-docs.json', is_string($source) ? $source : json_encode($source, JSON_THROW_ON_ERROR));
        $process = proc_open([
            PHP_BINARY,
            '-d', 'display_errors=stderr',
            '-d', 'log_errors=0',
            '-d', 'error_reporting=E_ALL',
            $this->temporaryDirectory . '/scripts/convertor.php',
        ], [0 => ['pipe', 'r'], 1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes, $this->temporaryDirectory);
        if (!is_resource($process)) {
            throw new RuntimeException('Unable to start the converter process.');
        }
        fclose($pipes[0]);
        $stdout = stream_get_contents($pipes[1]);
        $stderr = stream_get_contents($pipes[2]);
        fclose($pipes[1]);
        fclose($pipes[2]);

        return ['status' => proc_close($process), 'stdout' => $stdout, 'stderr' => $stderr];
    }

    private static function source(array $endpoints): array
    {
        $source                           = json_decode(file_get_contents(__DIR__ . '/../Fixtures/convertor/api-docs.json'), true, 512, JSON_THROW_ON_ERROR);
        $source['resources']['endpoints'] = $endpoints;
        return $source;
    }
}
