# Leadspedia\RequestsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requestsgetAlldo**](RequestsApi.md#requestsgetAlldo) | **GET** /requests/getAll.do | Get All



## requestsgetAlldo

> object requestsgetAlldo($date, $affiliateID, $campaignID, $dispositionID)

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


$apiInstance = new Leadspedia\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$affiliateID = 56; // int | 
$campaignID = 56; // int | 
$dispositionID = 56; // int | 

try {
    $result = $apiInstance->requestsgetAlldo($date, $affiliateID, $campaignID, $dispositionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**|  |
 **affiliateID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **dispositionID** | **int**|  | [optional]

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

