# LeadspediaApi\InboundcallsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inboundCallsgetAlldo**](InboundcallsApi.md#inboundcallsgetalldo) | **GET** /inboundCalls/getAll.do | Get All
[**inboundCallsgetInProgressdo**](InboundcallsApi.md#inboundcallsgetinprogressdo) | **GET** /inboundCalls/getInProgress.do | Get Calls In Progress
[**inboundCallsgetNumbersdo**](InboundcallsApi.md#inboundcallsgetnumbersdo) | **GET** /inboundCalls/getNumbers.do | Get Numbers
[**inboundCallsgetReturneddo**](InboundcallsApi.md#inboundcallsgetreturneddo) | **GET** /inboundCalls/getReturned.do | Get Returned Calls
[**inboundCallsgetScrubbeddo**](InboundcallsApi.md#inboundcallsgetscrubbeddo) | **GET** /inboundCalls/getScrubbed.do | Get Scrubbed Calls
[**inboundCallsgetTransferreddo**](InboundcallsApi.md#inboundcallsgettransferreddo) | **GET** /inboundCalls/getTransferred.do | Get Transferred Calls

# **inboundCallsgetAlldo**
> inboundCallsgetAlldo($from_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $to_date, $start, $limit)

Get All

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\InboundcallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$caller_id = "caller_id_example"; // string | 
$affiliate_id = 56; // int | 
$campaign_id = 56; // int | 
$advertiser_id = 56; // int | 
$contract_id = 56; // int | 
$vertical_id = 56; // int | 
$offer_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->inboundCallsgetAlldo($from_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling InboundcallsApi->inboundCallsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **caller_id** | **string**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **contract_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
 **offer_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundCallsgetInProgressdo**
> inboundCallsgetInProgressdo($from_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $to_date, $start, $limit)

Get Calls In Progress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\InboundcallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$caller_id = "caller_id_example"; // string | 
$affiliate_id = 56; // int | 
$campaign_id = 56; // int | 
$advertiser_id = 56; // int | 
$contract_id = 56; // int | 
$vertical_id = 56; // int | 
$offer_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->inboundCallsgetInProgressdo($from_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling InboundcallsApi->inboundCallsgetInProgressdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **caller_id** | **string**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **contract_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
 **offer_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundCallsgetNumbersdo**
> inboundCallsgetNumbersdo($search, $start, $limit)

Get Numbers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\InboundcallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->inboundCallsgetNumbersdo($search, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling InboundcallsApi->inboundCallsgetNumbersdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**|  | [optional]
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundCallsgetReturneddo**
> inboundCallsgetReturneddo($from_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $to_date, $start, $limit)

Get Returned Calls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\InboundcallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$caller_id = "caller_id_example"; // string | 
$affiliate_id = 56; // int | 
$campaign_id = 56; // int | 
$advertiser_id = 56; // int | 
$contract_id = 56; // int | 
$vertical_id = 56; // int | 
$offer_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->inboundCallsgetReturneddo($from_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling InboundcallsApi->inboundCallsgetReturneddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **caller_id** | **string**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **contract_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
 **offer_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundCallsgetScrubbeddo**
> inboundCallsgetScrubbeddo($to_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $from_date, $start, $limit)

Get Scrubbed Calls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\InboundcallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$caller_id = "caller_id_example"; // string | 
$affiliate_id = 56; // int | 
$campaign_id = 56; // int | 
$advertiser_id = 56; // int | 
$contract_id = 56; // int | 
$vertical_id = 56; // int | 
$offer_id = 56; // int | 
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->inboundCallsgetScrubbeddo($to_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $from_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling InboundcallsApi->inboundCallsgetScrubbeddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_date** | **\DateTime**|  |
 **caller_id** | **string**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **contract_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
 **offer_id** | **int**|  | [optional]
 **from_date** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundCallsgetTransferreddo**
> inboundCallsgetTransferreddo($from_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $to_date, $start, $limit)

Get Transferred Calls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\InboundcallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$caller_id = "caller_id_example"; // string | 
$affiliate_id = 56; // int | 
$campaign_id = 56; // int | 
$advertiser_id = 56; // int | 
$contract_id = 56; // int | 
$vertical_id = 56; // int | 
$offer_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->inboundCallsgetTransferreddo($from_date, $caller_id, $affiliate_id, $campaign_id, $advertiser_id, $contract_id, $vertical_id, $offer_id, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling InboundcallsApi->inboundCallsgetTransferreddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **caller_id** | **string**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **contract_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
 **offer_id** | **int**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

