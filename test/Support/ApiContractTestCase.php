<?php

declare(strict_types=1);

namespace Leadspedia\Test\Support;

use DateTimeInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Response;
use InvalidArgumentException;
use Leadspedia\ApiException;
use Leadspedia\Configuration;
use Leadspedia\Model\ModelInterface;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

abstract class ApiContractTestCase extends TestCase
{
    private const CREDENTIALS = ['api_key' => 'contract-key', 'api_secret' => 'contract-secret'];

    private static ?array $operations = null;

    protected function assertOperationContract(string $apiClass, string $operationId, array $parameterNames): void
    {
        $operation  = self::operations()[$operationId];
        $parameters = array_column($operation['parameters'] ?? [], null, 'name');
        self::assertEqualsCanonicalizing(array_keys($parameters), array_values($parameterNames));
        $arguments         = [];
        $expectedQuery     = [];
        $requiredArguments = [];
        $requiredQuery     = [];
        foreach ($parameterNames as $phpName => $wireName) {
            $parameter = $parameters[$wireName];
            self::assertSame('query', $parameter['in'], 'Extend the contract helper for new parameter locations.');
            $value                       = self::CREDENTIALS[$wireName] ?? ContractValues::forSchema($parameter);
            $arguments[$phpName]         = $value;
            $expectedQuery[$wireName]    = $value instanceof DateTimeInterface ? $value->format('Y-m-d') : (string) $value;
            $requiredArguments[$phpName] = ($parameter['required'] ?? false) ? $value : null;
            if ($parameter['required'] ?? false) {
                $requiredQuery[$wireName] = $expectedQuery[$wireName];
            }
        }

        $payload = [];
        foreach ($operation['responses']['200']['schema']['properties'] as $name => $property) {
            $payload[$name] = ContractValues::forSchema($property);
        }
        $body      = json_encode($payload, JSON_THROW_ON_ERROR);
        $errorBody = '{"success":false,"message":"Contract error"}';
        $mock      = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json', 'X-Contract' => 'success'], $body),
            new Response(200, ['Content-Type' => 'application/json'], $body),
            new Response(400, ['X-Contract' => 'error'], $errorBody),
            new Response(500, ['X-Contract' => 'error'], $errorBody),
        ]);
        $history = [];
        $handler = HandlerStack::create($mock);
        $handler->push(Middleware::history($history));
        $configuration = (new Configuration())
            ->setHost('https://example.test/core/v2')
            ->setUsername(self::CREDENTIALS['api_key'])
            ->setPassword(self::CREDENTIALS['api_secret']);
        $api = new $apiClass(new Client(['handler' => $handler]), $configuration);

        [$result, $status, $headers] = $api->{$operationId . 'WithHttpInfo'}(...$arguments);
        self::assertSame(200, $status);
        self::assertSame(['success'], $headers['X-Contract']);
        self::assertInstanceOf(ModelInterface::class, $result);
        self::assertSame($payload, json_decode(json_encode($result, JSON_THROW_ON_ERROR), true, 512, JSON_THROW_ON_ERROR));
        self::assertCount(1, $history);
        $this->assertRequest($history[0]['request'], $operation, $expectedQuery);

        $minimalResult = $api->$operationId(...$requiredArguments);
        self::assertEquals($result, $minimalResult);
        self::assertCount(2, $history);
        $this->assertRequest($history[1]['request'], $operation, $requiredQuery);

        foreach ([400, 500] as $errorStatus) {
            try {
                $api->$operationId(...$arguments);
                self::fail('Expected ApiException for HTTP ' . $errorStatus);
            } catch (ApiException $exception) {
                self::assertSame($errorStatus, $exception->getCode());
                self::assertSame($errorBody, $exception->getResponseBody());
                self::assertSame(['error'], $exception->getResponseHeaders()['X-Contract']);
            }
        }

        foreach ($parameterNames as $phpName => $wireName) {
            if (!($parameters[$wireName]['required'] ?? false)) {
                continue;
            }
            $invalidArguments           = $arguments;
            $invalidArguments[$phpName] = null;
            try {
                $api->$operationId(...$invalidArguments);
                self::fail('Expected rejection of missing required parameter ' . $wireName);
            } catch (InvalidArgumentException $exception) {
                self::assertStringContainsString($phpName, $exception->getMessage());
            }
        }
        self::assertCount(4, $history, 'Required parameter validation must happen before HTTP transport.');

        foreach (['Async', 'AsyncWithHttpInfo'] as $suffix) {
            $mock->append(new Response(200, ['X-Contract' => 'async'], $body));
            $promise = $api->{$operationId . $suffix}(...$arguments);
            self::assertInstanceOf(PromiseInterface::class, $promise);
            $asyncResult = $promise->wait();
            if ($suffix === 'AsyncWithHttpInfo') {
                [$asyncResult, $status, $headers] = $asyncResult;
                self::assertSame(200, $status);
                self::assertSame(['async'], $headers['X-Contract']);
            }
            self::assertEquals($result, $asyncResult);
            $this->assertRequest($history[array_key_last($history)]['request'], $operation, $expectedQuery);
        }

        foreach (['', 'WithHttpInfo', 'Async', 'AsyncWithHttpInfo'] as $suffix) {
            foreach (['{broken', ''] as $invalidBody) {
                $mock->append(new Response(200, ['Content-Type' => 'application/json', 'X-Contract' => 'invalid-json'], $invalidBody));
                try {
                    $response = $api->{$operationId . $suffix}(...$arguments);
                    if (str_starts_with($suffix, 'Async')) {
                        self::assertInstanceOf(PromiseInterface::class, $response);
                        $response->wait();
                    }
                    self::fail('Expected ApiException for invalid JSON from ' . $operationId . $suffix);
                } catch (ApiException $exception) {
                    self::assertSame(200, $exception->getCode());
                    self::assertSame($invalidBody, $exception->getResponseBody());
                    self::assertSame(['invalid-json'], $exception->getResponseHeaders()['X-Contract']);
                    self::assertStringContainsString('Error JSON decoding server response', $exception->getMessage());
                    self::assertStringContainsString((string) $history[array_key_last($history)]['request']->getUri(), $exception->getMessage());
                }
            }
        }
    }

    private function assertRequest(RequestInterface $request, array $operation, array $parameters): void
    {
        self::assertSame(strtoupper($operation['method']), $request->getMethod());
        self::assertSame('https', $request->getUri()->getScheme());
        self::assertSame('example.test', $request->getUri()->getHost());
        self::assertSame('/core/v2' . $operation['path'], $request->getUri()->getPath());
        self::assertSame('Basic ' . base64_encode(self::CREDENTIALS['api_key'] . ':' . self::CREDENTIALS['api_secret']), $request->getHeaderLine('Authorization'));
        $expected = $parameters;
        $actual   = Query::parse($request->getUri()->getQuery());
        ksort($expected);
        ksort($actual);
        self::assertSame($expected, $actual);
    }

    private static function operations(): array
    {
        if (self::$operations !== null) {
            return self::$operations;
        }
        $spec             = json_decode(file_get_contents(__DIR__ . '/../../schema/openapi.json'), true, 512, JSON_THROW_ON_ERROR);
        self::$operations = [];
        foreach ($spec['paths'] as $path => $methods) {
            foreach ($methods as $method => $operation) {
                if (!isset($operation['operationId'])) {
                    continue;
                }
                $schema = $operation['responses']['200']['schema'];
                if (isset($schema['$ref'])) {
                    $name                                    = basename($schema['$ref']);
                    $operation['responses']['200']['schema'] = $spec['definitions'][$name];
                }
                self::$operations[$operation['operationId']] = $operation + ['method' => $method, 'path' => $path];
            }
        }
        return self::$operations;
    }
}
