# Leadspedia\InboundCallsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inboundCallsgetAlldo**](InboundCallsApi.md#inboundCallsgetAlldo) | **GET** /inboundCalls/getAll.do | Get All
[**inboundCallsgetInProgressdo**](InboundCallsApi.md#inboundCallsgetInProgressdo) | **GET** /inboundCalls/getInProgress.do | Get Calls In Progress
[**inboundCallsgetNumbersdo**](InboundCallsApi.md#inboundCallsgetNumbersdo) | **GET** /inboundCalls/getNumbers.do | Get Numbers
[**inboundCallsgetReturneddo**](InboundCallsApi.md#inboundCallsgetReturneddo) | **GET** /inboundCalls/getReturned.do | Get Returned Calls
[**inboundCallsgetScrubbeddo**](InboundCallsApi.md#inboundCallsgetScrubbeddo) | **GET** /inboundCalls/getScrubbed.do | Get Scrubbed Calls
[**inboundCallsgetTransferreddo**](InboundCallsApi.md#inboundCallsgetTransferreddo) | **GET** /inboundCalls/getTransferred.do | Get Transferred Calls



## inboundCallsgetAlldo

> object inboundCallsgetAlldo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit)

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$callerID = 'callerID_example'; // string | 
$affiliateID = 56; // int | 
$campaignID = 56; // int | 
$advertiserID = 56; // int | 
$contractID = 56; // int | 
$verticalID = 56; // int | 
$offerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->inboundCallsgetAlldo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **callerID** | **string**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **contractID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **offerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## inboundCallsgetInProgressdo

> object inboundCallsgetInProgressdo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit)

Get Calls In Progress

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$callerID = 'callerID_example'; // string | 
$affiliateID = 56; // int | 
$campaignID = 56; // int | 
$advertiserID = 56; // int | 
$contractID = 56; // int | 
$verticalID = 56; // int | 
$offerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->inboundCallsgetInProgressdo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetInProgressdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **callerID** | **string**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **contractID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **offerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## inboundCallsgetNumbersdo

> object inboundCallsgetNumbersdo($search, $start, $limit)

Get Numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->inboundCallsgetNumbersdo($search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetNumbersdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## inboundCallsgetReturneddo

> object inboundCallsgetReturneddo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit)

Get Returned Calls

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$callerID = 'callerID_example'; // string | 
$affiliateID = 56; // int | 
$campaignID = 56; // int | 
$advertiserID = 56; // int | 
$contractID = 56; // int | 
$verticalID = 56; // int | 
$offerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->inboundCallsgetReturneddo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetReturneddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **callerID** | **string**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **contractID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **offerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## inboundCallsgetScrubbeddo

> object inboundCallsgetScrubbeddo($toDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $fromDate, $start, $limit)

Get Scrubbed Calls

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$callerID = 'callerID_example'; // string | 
$affiliateID = 56; // int | 
$campaignID = 56; // int | 
$advertiserID = 56; // int | 
$contractID = 56; // int | 
$verticalID = 56; // int | 
$offerID = 56; // int | 
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->inboundCallsgetScrubbeddo($toDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $fromDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetScrubbeddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **toDate** | **\DateTime**|  |
 **callerID** | **string**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **contractID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **offerID** | **int**|  | [optional]
 **fromDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## inboundCallsgetTransferreddo

> object inboundCallsgetTransferreddo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit)

Get Transferred Calls

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey0
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure API key authorization: apiKey1
$config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Leadspedia\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');


$apiInstance = new Leadspedia\Api\InboundCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$callerID = 'callerID_example'; // string | 
$affiliateID = 56; // int | 
$campaignID = 56; // int | 
$advertiserID = 56; // int | 
$contractID = 56; // int | 
$verticalID = 56; // int | 
$offerID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->inboundCallsgetTransferreddo($fromDate, $callerID, $affiliateID, $campaignID, $advertiserID, $contractID, $verticalID, $offerID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundCallsApi->inboundCallsgetTransferreddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **callerID** | **string**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **contractID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **offerID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

