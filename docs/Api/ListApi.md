# Leadspedia\ListApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listgetAlldo**](ListApi.md#listgetAlldo) | **GET** /list/getAll.do | Get All



## listgetAlldo

> object listgetAlldo($type, $advertiserID, $verticalID)

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


$apiInstance = new Leadspedia\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | 
$advertiserID = 56; // int | 
$verticalID = 56; // int | 

try {
    $result = $apiInstance->listgetAlldo($type, $advertiserID, $verticalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]

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

