# Leadspedia\PixelsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pixelsgetAlldo**](PixelsApi.md#pixelsgetAlldo) | **GET** /pixels/getAll.do | Get All



## pixelsgetAlldo

> object pixelsgetAlldo($affiliateID, $campaignID, $dispositionID, $fromDate, $toDate)

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


$apiInstance = new Leadspedia\Api\PixelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int | 
$campaignID = 56; // int | 
$dispositionID = 56; // int | 
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->pixelsgetAlldo($affiliateID, $campaignID, $dispositionID, $fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PixelsApi->pixelsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliateID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **dispositionID** | **int**|  | [optional]
 **fromDate** | **\DateTime**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

