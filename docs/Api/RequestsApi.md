# LeadspediaApi\RequestsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requestsgetAlldo**](RequestsApi.md#requestsgetalldo) | **GET** /requests/getAll.do | Get All

# **requestsgetAlldo**
> requestsgetAlldo($date, $affiliate_id, $campaign_id, $disposition_id)

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

$apiInstance = new LeadspediaApi\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime("2013-10-20"); // \DateTime | 
$affiliate_id = 56; // int | 
$campaign_id = 56; // int | 
$disposition_id = 56; // int | 

try {
    $apiInstance->requestsgetAlldo($date, $affiliate_id, $campaign_id, $disposition_id);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**|  |
 **affiliate_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **disposition_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

