<?php

declare(strict_types=1);

namespace Leadspedia\Test\Api;

use DateTime;
use DateTimeImmutable;
use DateTimeZone;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Response;
use Leadspedia\Api\AdvertisersApi;
use Leadspedia\Api\LeadDistributionContractsApi;
use Leadspedia\Api\LeadsApi;
use Leadspedia\ApiException;
use Leadspedia\Configuration;
use Leadspedia\Model\InlineResponse200;
use Leadspedia\Model\InlineResponse2001;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use ReflectionMethod;

final class GeneratedClientCompatibilityTest extends TestCase
{
    public static function provideOperationSuffixes(): iterable
    {
        foreach (['', 'WithHttpInfo', 'Async', 'AsyncWithHttpInfo'] as $suffix) {
            yield $suffix ?: 'synchronous' => [$suffix];
        }
    }

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

    #[DataProvider('provideOperationSuffixes')]
    public function testDateParametersAcceptImmutableDatesAndStrings(string $suffix): void
    {
        $request = $this->requestFor(LeadsApi::class, 'leadsgetSolddo' . $suffix, [
            'fromDate' => new DateTimeImmutable('2026-11-01 15:00:00', new DateTimeZone('UTC')),
            'toDate'   => '2026-11-02',
        ]);
        $query = Query::parse($request->getUri()->getQuery());

        self::assertSame('2026-11-01', $query['fromDate']);
        self::assertSame('2026-11-02', $query['toDate']);
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

    #[DataProvider('provideOperationSuffixes')]
    public function testLegacyAdvertiserPositionalFilters(string $suffix): void
    {
        $request = $this->requestFor(AdvertisersApi::class, 'advertisersgetAlldo' . $suffix, [
            42, 'Corporate', 17, 'Active', 'Yes', 'No', 'Legacy advertiser', 20, 50,
        ]);

        self::assertSame([
            'advertiserID' => '42', 'advertiserType' => 'Corporate', 'accountManagerID' => '17',
            'status'       => 'Active', 'isCreditEnabled' => 'Yes', 'hasCreditCardOnFile' => 'No',
            'search'       => 'Legacy advertiser', 'start' => '20', 'limit' => '50',
        ], Query::parse($request->getUri()->getQuery()));
    }

    #[DataProvider('provideOperationSuffixes')]
    public function testLegacyCreditArgumentsRetainFractionalAmounts(string $suffix): void
    {
        $request = $this->requestFor(LeadDistributionContractsApi::class, 'leadDistributionContractsadjustCreditdo' . $suffix, [
            42, 'Credit', 12.5, 'No', 'No', 'Legacy adjustment', 'Yes', 2.5, 1.25,
        ]);

        self::assertSame([
            'contractID'               => '42', 'type' => 'Credit', 'amount' => '12.5', 'charge' => 'No',
            'generateInvoice'          => 'No', 'note' => 'Legacy adjustment', 'transactionFee' => 'Yes',
            'transactionFeePercentage' => '2.5', 'transactionFeeAmount' => '1.25',
        ], Query::parse($request->getUri()->getQuery()));
    }

    #[DataProvider('provideOperationSuffixes')]
    public function testLegacyLeadDatesAndPositionalFilters(string $suffix): void
    {
        // DateTime subclasses, including Safe\DateTime, retain the same support.
        $fromDate = new class ('2026-11-01 15:30:00', new DateTimeZone('America/Denver')) extends DateTime {};
        $toDate   = new DateTime('2026-11-02 18:00:00', new DateTimeZone('America/Denver'));
        $request  = $this->requestFor(LeadsApi::class, 'leadsgetSolddo' . $suffix, [
            $fromDate, 'lead-42', 101, 102, 103, 104, 105, 'No', $toDate, 20, 50,
        ]);

        self::assertSame([
            'fromDate'    => '2026-11-01', 'leadID' => 'lead-42', 'campaignID' => '101',
            'affiliateID' => '102', 'verticalID' => '103', 'advertiserID' => '104',
            'contractID'  => '105', 'returned' => 'No', 'toDate' => '2026-11-02',
            'start'       => '20', 'limit' => '50',
        ], Query::parse($request->getUri()->getQuery()));
        self::assertSame('2026-11-01 15:30:00', $fromDate->format('Y-m-d H:i:s'));
    }

    public function testLegacyPhpDocAcceptsDecimalAmountsAndDateObjects(): void
    {
        foreach (['', 'WithHttpInfo', 'Async', 'AsyncWithHttpInfo', 'Request'] as $suffix) {
            $credit = new ReflectionMethod(LeadDistributionContractsApi::class, 'leadDistributionContractsadjustCreditdo' . $suffix);
            self::assertMatchesRegularExpression('/@param\s+float\s+\$amount\b/', $credit->getDocComment());
            $leads = new ReflectionMethod(LeadsApi::class, 'leadsgetSolddo' . $suffix);
            foreach (['fromDate', 'toDate'] as $parameter) {
                self::assertSame(1, preg_match('/@param\s+(\S+)\s+\$' . $parameter . '\b/', $leads->getDocComment(), $matches));
                $types = explode('|', $matches[1]);
                self::assertContains('string', $types);
                self::assertContains('\\DateTimeInterface', $types);
            }
        }
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

    private function requestFor(string $apiClass, string $method, array $arguments): RequestInterface
    {
        $history = [];
        $handler = HandlerStack::create(new MockHandler([new Response(200, [], '{"success":true}')]));
        $handler->push(Middleware::history($history));
        $api    = new $apiClass(new Client(['handler' => $handler]));
        $result = $api->$method(...$arguments);
        if ($result instanceof PromiseInterface) {
            $result->wait();
        }
        self::assertCount(1, $history);
        return $history[0]['request'];
    }
}
