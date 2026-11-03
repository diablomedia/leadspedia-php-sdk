# Leadspedia\InboundCallsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inboundCallsgetAlldo()**](InboundCallsApi.md#inboundCallsgetAlldo) | **GET** /inboundCalls/getAll.do | Get All |
| [**inboundCallsgetCallIntegrationsLogdo()**](InboundCallsApi.md#inboundCallsgetCallIntegrationsLogdo) | **GET** /inboundCalls/getCallIntegrationsLog.do | Get Call Integrations Log |
| [**inboundCallsgetInProgressdo()**](InboundCallsApi.md#inboundCallsgetInProgressdo) | **GET** /inboundCalls/getInProgress.do | Get Calls In Progress |
| [**inboundCallsgetNumbersdo()**](InboundCallsApi.md#inboundCallsgetNumbersdo) | **GET** /inboundCalls/getNumbers.do | Get All |
| [**inboundCallsgetOneStepPingTreeLogdo()**](InboundCallsApi.md#inboundCallsgetOneStepPingTreeLogdo) | **GET** /inboundCalls/getOneStepPingTreeLog.do | Get One Step Ping Tree Log |
| [**inboundCallsgetRecordingURLdo()**](InboundCallsApi.md#inboundCallsgetRecordingURLdo) | **GET** /inboundCalls/getRecordingURL.do | Get Call Recording URL |
| [**inboundCallsgetReturneddo()**](InboundCallsApi.md#inboundCallsgetReturneddo) | **GET** /inboundCalls/getReturned.do | Get Returned Calls |
| [**inboundCallsgetScrubbeddo()**](InboundCallsApi.md#inboundCallsgetScrubbeddo) | **GET** /inboundCalls/getScrubbed.do | Get Scrubbed Calls |
| [**inboundCallsgetTransferreddo()**](InboundCallsApi.md#inboundCallsgetTransferreddo) | **GET** /inboundCalls/getTransferred.do | Get Transferred Calls |


## `inboundCallsgetAlldo()`

```php
inboundCallsgetAlldo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$callerID = 56; // int
$affiliateID = 56; // int
$campaignID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$verticalID = 56; // int
$offerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->inboundCallsgetAlldo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **callerID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundCallsgetCallIntegrationsLogdo()`

```php
inboundCallsgetCallIntegrationsLogdo($date, $verticalID, $advertiserID, $contractID, $affiliateID, $campaignID, $offerID, $accept, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Call Integrations Log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$affiliateID = 56; // int
$campaignID = 56; // int
$offerID = 56; // int
$accept = 'accept_example'; // string
$start = 56; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->inboundCallsgetCallIntegrationsLogdo($date, $verticalID, $advertiserID, $contractID, $affiliateID, $campaignID, $offerID, $accept, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetCallIntegrationsLogdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundCallsgetInProgressdo()`

```php
inboundCallsgetInProgressdo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Calls In Progress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$callerID = 'callerID_example'; // string
$affiliateID = 56; // int
$campaignID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$verticalID = 56; // int
$offerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->inboundCallsgetInProgressdo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetInProgressdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **callerID** | **string**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundCallsgetNumbersdo()`

```php
inboundCallsgetNumbersdo($search, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->inboundCallsgetNumbersdo($search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetNumbersdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundCallsgetOneStepPingTreeLogdo()`

```php
inboundCallsgetOneStepPingTreeLogdo($date, $verticalID, $affiliateID, $campaignID, $offerID, $pingID, $accept, $transfer, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get One Step Ping Tree Log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$affiliateID = 56; // int
$campaignID = 56; // int
$offerID = 56; // int
$pingID = 'pingID_example'; // string
$accept = 'accept_example'; // string
$transfer = 'transfer_example'; // string
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->inboundCallsgetOneStepPingTreeLogdo($date, $verticalID, $affiliateID, $campaignID, $offerID, $pingID, $accept, $transfer, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetOneStepPingTreeLogdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **\DateTime**|  | |
| **verticalID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **pingID** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **transfer** | **string**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundCallsgetRecordingURLdo()`

```php
inboundCallsgetRecordingURLdo($callUUID): \Leadspedia\Model\InlineResponse2001
```

Get Call Recording URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callUUID = 'callUUID_example'; // string

try {
    $result = $apiInstance->inboundCallsgetRecordingURLdo($callUUID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetRecordingURLdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **callUUID** | **string**|  | |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundCallsgetReturneddo()`

```php
inboundCallsgetReturneddo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Returned Calls

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$callerID = 'callerID_example'; // string
$affiliateID = 56; // int
$campaignID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$verticalID = 56; // int
$offerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->inboundCallsgetReturneddo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetReturneddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **callerID** | **string**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundCallsgetScrubbeddo()`

```php
inboundCallsgetScrubbeddo($fromDate, $toDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Scrubbed Calls

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$callerID = 'callerID_example'; // string
$affiliateID = 56; // int
$campaignID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$verticalID = 56; // int
$offerID = 56; // int
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->inboundCallsgetScrubbeddo($fromDate, $toDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetScrubbeddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **toDate** | **\DateTime**|  | [optional] |
| **callerID** | **string**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inboundCallsgetTransferreddo()`

```php
inboundCallsgetTransferreddo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Transferred Calls

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$callerID = 'callerID_example'; // string
$affiliateID = 56; // int
$campaignID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$verticalID = 56; // int
$offerID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->inboundCallsgetTransferreddo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetTransferreddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **callerID** | **string**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
