<?php

declare(strict_types=1);

namespace Leadspedia\Test\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Response;
use Leadspedia\Api\AdvertisersApi;
use Leadspedia\ApiException;
use Leadspedia\Configuration;
use Leadspedia\Model\InlineResponse200;
use Leadspedia\Model\InlineResponse2001;
use PHPUnit\Framework\TestCase;

final class GeneratedClientCompatibilityTest extends TestCase
{
    public function testClientErrorPreservesResponseMetadata(): void
    {
        $body    = '{"success":false,"message":"Invalid advertiser"}';
        $handler = HandlerStack::create(new MockHandler([
            new Response(400, ['X-Test' => 'error'], $body),
        ]));
        $api = new AdvertisersApi(new Client(['handler' => $handler]));

        try {
            $api->advertisersdeletedo(42);
            self::fail('Expected an API exception for the error response.');
        } catch (ApiException $exception) {
            self::assertSame(400, $exception->getCode());
            self::assertSame(['error'], $exception->getResponseHeaders()['X-Test']);
            self::assertSame($body, $exception->getResponseBody());
        }
    }

    public function testInformationResponseUsesTheExistingModelName(): void
    {
        $handler = HandlerStack::create(new MockHandler([
            new Response(200, [], '{"success":true,"data":{"advertiserID":42}}'),
        ]));
        $api = new AdvertisersApi(new Client(['handler' => $handler]));

        $result = $api->advertisersgetInfodo(42);

        self::assertInstanceOf(InlineResponse2001::class, $result);
        self::assertTrue($result->getSuccess());
        self::assertSame(['advertiserID' => 42], $result->getData());
    }

    public function testRequestIncludesAuthenticationAndDeserializesResponse(): void
    {
        $history = [];
        $handler = HandlerStack::create(new MockHandler([
            new Response(200, [], '{"success":true,"message":"Deleted"}'),
        ]));
        $handler->push(Middleware::history($history));
        $configuration = (new Configuration())
            ->setUsername('test-key')
            ->setPassword('test-secret');
        $api = new AdvertisersApi(
            client: new Client(['handler' => $handler]),
            config: $configuration,
            hostIndex: 0,
        );

        $result = $api->advertisersdeletedo(advertiserID: 42);

        self::assertInstanceOf(InlineResponse200::class, $result);
        self::assertTrue($result->getSuccess());
        self::assertSame('Deleted', $result->getMessage());
        self::assertCount(1, $history);
        $request = $history[0]['request'];
        self::assertSame('POST', $request->getMethod());
        self::assertSame('/core/v2/advertisers/delete.do', $request->getUri()->getPath());
        $query = Query::parse($request->getUri()->getQuery());
        self::assertSame('42', $query['advertiserID']);
        self::assertSame('Basic ' . base64_encode('test-key:test-secret'), $request->getHeaderLine('Authorization'));
        self::assertArrayNotHasKey('api_key', $query);
        self::assertArrayNotHasKey('api_secret', $query);
    }
}
