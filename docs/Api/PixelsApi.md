# LeadspediaApi\PixelsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pixelsgetAlldo**](PixelsApi.md#pixelsgetalldo) | **GET** /pixels/getAll.do | Get All

# **pixelsgetAlldo**
> pixelsgetAlldo($affiliate_id, $campaign_id, $disposition_id, $from_date, $to_date)

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

$apiInstance = new LeadspediaApi\Api\PixelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 56; // int | 
$campaign_id = 56; // int | 
$disposition_id = 56; // int | 
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->pixelsgetAlldo($affiliate_id, $campaign_id, $disposition_id, $from_date, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling PixelsApi->pixelsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **disposition_id** | **int**|  | [optional]
 **from_date** | **\DateTime**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

