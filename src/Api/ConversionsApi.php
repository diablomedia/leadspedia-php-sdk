<?php
/**
 * ConversionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Leadspedia
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LeadsPedia API Reference
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v2.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Leadspedia\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Leadspedia\ApiException;
use Leadspedia\Configuration;
use Leadspedia\HeaderSelector;
use Leadspedia\ObjectSerializer;

/**
 * ConversionsApi Class Doc Comment
 *
 * @category Class
 * @package  Leadspedia
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client         = $client ?: new Client();
        $this->config         = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex      = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index): void
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation conversionsgetAlldo
     *
     * Get All
     *
     * @param  \DateTime $fromDate fromDate (required)
     * @param  int $verticalID verticalID (optional)
     * @param  int $offerID offerID (optional)
     * @param  int $affiliateID affiliateID (optional)
     * @param  int $campaignID campaignID (optional)
     * @param  int $advertiserID advertiserID (optional)
     * @param  string $status status (optional)
     * @param  string $showGoal showGoal (optional)
     * @param  string $showNonGoal showNonGoal (optional)
     * @param  string $showThrottled showThrottled (optional)
     * @param  string $showNonThrottled showNonThrottled (optional)
     * @param  string $showTest showTest (optional)
     * @param  string $showNonTest showNonTest (optional)
     * @param  \DateTime $toDate toDate (optional)
     * @param  int $start start (optional, default to 0)
     * @param  int $limit limit (optional, default to 100)
     *
     * @throws \Leadspedia\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function conversionsgetAlldo($fromDate, $verticalID = null, $offerID = null, $affiliateID = null, $campaignID = null, $advertiserID = null, $status = null, $showGoal = null, $showNonGoal = null, $showThrottled = null, $showNonThrottled = null, $showTest = null, $showNonTest = null, $toDate = null, $start = 0, $limit = 100)
    {
        list($response) = $this->conversionsgetAlldoWithHttpInfo($fromDate, $verticalID, $offerID, $affiliateID, $campaignID, $advertiserID, $status, $showGoal, $showNonGoal, $showThrottled, $showNonThrottled, $showTest, $showNonTest, $toDate, $start, $limit);
        return $response;
    }

    /**
     * Operation conversionsgetAlldoWithHttpInfo
     *
     * Get All
     *
     * @param  \DateTime $fromDate (required)
     * @param  int $verticalID (optional)
     * @param  int $offerID (optional)
     * @param  int $affiliateID (optional)
     * @param  int $campaignID (optional)
     * @param  int $advertiserID (optional)
     * @param  string $status (optional)
     * @param  string $showGoal (optional)
     * @param  string $showNonGoal (optional)
     * @param  string $showThrottled (optional)
     * @param  string $showNonThrottled (optional)
     * @param  string $showTest (optional)
     * @param  string $showNonTest (optional)
     * @param  \DateTime $toDate (optional)
     * @param  int $start (optional, default to 0)
     * @param  int $limit (optional, default to 100)
     *
     * @throws \Leadspedia\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function conversionsgetAlldoWithHttpInfo($fromDate, $verticalID = null, $offerID = null, $affiliateID = null, $campaignID = null, $advertiserID = null, $status = null, $showGoal = null, $showNonGoal = null, $showThrottled = null, $showNonThrottled = null, $showTest = null, $showNonTest = null, $toDate = null, $start = 0, $limit = 100)
    {
        $request = $this->conversionsgetAlldoRequest($fromDate, $verticalID, $offerID, $affiliateID, $campaignID, $advertiserID, $status, $showGoal, $showNonGoal, $showThrottled, $showNonThrottled, $showTest, $showNonTest, $toDate, $start, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch ($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType   = 'object';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation conversionsgetAlldoAsync
     *
     * Get All
     *
     * @param  \DateTime $fromDate (required)
     * @param  int $verticalID (optional)
     * @param  int $offerID (optional)
     * @param  int $affiliateID (optional)
     * @param  int $campaignID (optional)
     * @param  int $advertiserID (optional)
     * @param  string $status (optional)
     * @param  string $showGoal (optional)
     * @param  string $showNonGoal (optional)
     * @param  string $showThrottled (optional)
     * @param  string $showNonThrottled (optional)
     * @param  string $showTest (optional)
     * @param  string $showNonTest (optional)
     * @param  \DateTime $toDate (optional)
     * @param  int $start (optional, default to 0)
     * @param  int $limit (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conversionsgetAlldoAsync($fromDate, $verticalID = null, $offerID = null, $affiliateID = null, $campaignID = null, $advertiserID = null, $status = null, $showGoal = null, $showNonGoal = null, $showThrottled = null, $showNonThrottled = null, $showTest = null, $showNonTest = null, $toDate = null, $start = 0, $limit = 100)
    {
        return $this->conversionsgetAlldoAsyncWithHttpInfo($fromDate, $verticalID, $offerID, $affiliateID, $campaignID, $advertiserID, $status, $showGoal, $showNonGoal, $showThrottled, $showNonThrottled, $showTest, $showNonTest, $toDate, $start, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation conversionsgetAlldoAsyncWithHttpInfo
     *
     * Get All
     *
     * @param  \DateTime $fromDate (required)
     * @param  int $verticalID (optional)
     * @param  int $offerID (optional)
     * @param  int $affiliateID (optional)
     * @param  int $campaignID (optional)
     * @param  int $advertiserID (optional)
     * @param  string $status (optional)
     * @param  string $showGoal (optional)
     * @param  string $showNonGoal (optional)
     * @param  string $showThrottled (optional)
     * @param  string $showNonThrottled (optional)
     * @param  string $showTest (optional)
     * @param  string $showNonTest (optional)
     * @param  \DateTime $toDate (optional)
     * @param  int $start (optional, default to 0)
     * @param  int $limit (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conversionsgetAlldoAsyncWithHttpInfo($fromDate, $verticalID = null, $offerID = null, $affiliateID = null, $campaignID = null, $advertiserID = null, $status = null, $showGoal = null, $showNonGoal = null, $showThrottled = null, $showNonThrottled = null, $showTest = null, $showNonTest = null, $toDate = null, $start = 0, $limit = 100)
    {
        $returnType = 'object';
        $request    = $this->conversionsgetAlldoRequest($fromDate, $verticalID, $offerID, $affiliateID, $campaignID, $advertiserID, $status, $showGoal, $showNonGoal, $showThrottled, $showNonThrottled, $showTest, $showNonTest, $toDate, $start, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception): void {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'conversionsgetAlldo'
     *
     * @param  \DateTime $fromDate (required)
     * @param  int $verticalID (optional)
     * @param  int $offerID (optional)
     * @param  int $affiliateID (optional)
     * @param  int $campaignID (optional)
     * @param  int $advertiserID (optional)
     * @param  string $status (optional)
     * @param  string $showGoal (optional)
     * @param  string $showNonGoal (optional)
     * @param  string $showThrottled (optional)
     * @param  string $showNonThrottled (optional)
     * @param  string $showTest (optional)
     * @param  string $showNonTest (optional)
     * @param  \DateTime $toDate (optional)
     * @param  int $start (optional, default to 0)
     * @param  int $limit (optional, default to 100)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function conversionsgetAlldoRequest($fromDate, $verticalID = null, $offerID = null, $affiliateID = null, $campaignID = null, $advertiserID = null, $status = null, $showGoal = null, $showNonGoal = null, $showThrottled = null, $showNonThrottled = null, $showTest = null, $showNonTest = null, $toDate = null, $start = 0, $limit = 100)
    {
        // verify the required parameter 'fromDate' is set
        if ($fromDate === null || (is_array($fromDate) && count($fromDate) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fromDate when calling conversionsgetAlldo'
            );
        }

        $resourcePath = '/conversions/getAll.do';
        $formParams   = [];
        $queryParams  = [];
        $headerParams = [];
        $httpBody     = '';
        $multipart    = false;

        // query params
        if ($verticalID !== null) {
            $queryParams['verticalID'] = ObjectSerializer::toQueryValue($verticalID);
        }
        // query params
        if ($offerID !== null) {
            $queryParams['offerID'] = ObjectSerializer::toQueryValue($offerID);
        }
        // query params
        if ($affiliateID !== null) {
            $queryParams['affiliateID'] = ObjectSerializer::toQueryValue($affiliateID);
        }
        // query params
        if ($campaignID !== null) {
            $queryParams['campaignID'] = ObjectSerializer::toQueryValue($campaignID);
        }
        // query params
        if ($advertiserID !== null) {
            $queryParams['advertiserID'] = ObjectSerializer::toQueryValue($advertiserID);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($showGoal !== null) {
            $queryParams['showGoal'] = ObjectSerializer::toQueryValue($showGoal);
        }
        // query params
        if ($showNonGoal !== null) {
            $queryParams['showNonGoal'] = ObjectSerializer::toQueryValue($showNonGoal);
        }
        // query params
        if ($showThrottled !== null) {
            $queryParams['showThrottled'] = ObjectSerializer::toQueryValue($showThrottled);
        }
        // query params
        if ($showNonThrottled !== null) {
            $queryParams['showNonThrottled'] = ObjectSerializer::toQueryValue($showNonThrottled);
        }
        // query params
        if ($showTest !== null) {
            $queryParams['showTest'] = ObjectSerializer::toQueryValue($showTest);
        }
        // query params
        if ($showNonTest !== null) {
            $queryParams['showNonTest'] = ObjectSerializer::toQueryValue($showNonTest);
        }
        // query params
        if ($fromDate !== null) {
            $queryParams['fromDate'] = ObjectSerializer::toQueryValue($fromDate);
        }
        // query params
        if ($toDate !== null) {
            $queryParams['toDate'] = ObjectSerializer::toQueryValue($toDate);
        }
        // query params
        if ($start !== null) {
            $queryParams['start'] = ObjectSerializer::toQueryValue($start);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name'     => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('api_key');
        if ($apiKey !== null) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('api_secret');
        if ($apiKey !== null) {
            $queryParams['api_secret'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
