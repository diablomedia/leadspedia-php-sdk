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
    }

    protected function tearDown(): void
    {
        foreach (['schema/openapi.json', 'schema/api-docs.json', 'scripts/convertor.php'] as $path) {
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

    private function outputPath(): string
    {
        return $this->temporaryDirectory . '/schema/openapi.json';
    }

    private function runConverter(array $source): array
    {
        file_put_contents($this->temporaryDirectory . '/schema/api-docs.json', json_encode($source, JSON_THROW_ON_ERROR));
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
