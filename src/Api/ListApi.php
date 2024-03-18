<?php
/**
 * ListApi
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
 * ListApi Class Doc Comment
 *
 * @category Class
 * @package  Leadspedia
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListApi
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
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
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
     * Operation listgetAlldo
     *
     * Get All
     *
     * @param  string $type type (optional)
     * @param  int $advertiserID advertiserID (optional)
     * @param  int $verticalID verticalID (optional)
     *
     * @throws \Leadspedia\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Leadspedia\Model\InlineResponse2001
     */
    public function listgetAlldo($type = null, $advertiserID = null, $verticalID = null)
    {
        [$response] = $this->listgetAlldoWithHttpInfo($type, $advertiserID, $verticalID);
        return $response;
    }

    /**
     * Operation listgetAlldoAsync
     *
     * Get All
     *
     * @param  string $type (optional)
     * @param  int $advertiserID (optional)
     * @param  int $verticalID (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listgetAlldoAsync($type = null, $advertiserID = null, $verticalID = null)
    {
        return $this->listgetAlldoAsyncWithHttpInfo($type, $advertiserID, $verticalID)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listgetAlldoAsyncWithHttpInfo
     *
     * Get All
     *
     * @param  string $type (optional)
     * @param  int $advertiserID (optional)
     * @param  int $verticalID (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listgetAlldoAsyncWithHttpInfo($type = null, $advertiserID = null, $verticalID = null)
    {
        $returnType = '\Leadspedia\Model\InlineResponse2001';
        $request    = $this->listgetAlldoRequest($type, $advertiserID, $verticalID);

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
     * Operation listgetAlldoWithHttpInfo
     *
     * Get All
     *
     * @param  string $type (optional)
     * @param  int $advertiserID (optional)
     * @param  int $verticalID (optional)
     *
     * @throws \Leadspedia\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Leadspedia\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function listgetAlldoWithHttpInfo($type = null, $advertiserID = null, $verticalID = null)
    {
        $request = $this->listgetAlldoRequest($type, $advertiserID, $verticalID);

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
                    if ('\Leadspedia\Model\InlineResponse2001' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Leadspedia\Model\InlineResponse2001', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType   = '\Leadspedia\Model\InlineResponse2001';
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
                        '\Leadspedia\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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

    /**
     * Create request for operation 'listgetAlldo'
     *
     * @param  string $type (optional)
     * @param  int $advertiserID (optional)
     * @param  int $verticalID (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listgetAlldoRequest($type = null, $advertiserID = null, $verticalID = null)
    {
        $resourcePath = '/list/getAll.do';
        $formParams   = [];
        $queryParams  = [];
        $headerParams = [];
        $httpBody     = '';
        $multipart    = false;

        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
        }
        // query params
        if ($advertiserID !== null) {
            $queryParams['advertiserID'] = ObjectSerializer::toQueryValue($advertiserID);
        }
        // query params
        if ($verticalID !== null) {
            $queryParams['verticalID'] = ObjectSerializer::toQueryValue($verticalID);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
}
