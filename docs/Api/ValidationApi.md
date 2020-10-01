# Leadspedia\ValidationApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validationvalidateZipCodedo**](ValidationApi.md#validationvalidateZipCodedo) | **POST** /validation/validateZipCode.do | Validate Zip Code



## validationvalidateZipCodedo

> \Leadspedia\Model\InlineResponse200 validationvalidateZipCodedo($apiKey, $apiSecret, $zipCode)

Validate Zip Code

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


$apiInstance = new Leadspedia\Api\ValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = 'apiKey_example'; // string | 
$apiSecret = 'apiSecret_example'; // string | 
$zipCode = 'zipCode_example'; // string | 

try {
    $result = $apiInstance->validationvalidateZipCodedo($apiKey, $apiSecret, $zipCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationApi->validationvalidateZipCodedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiSecret** | **string**|  |
 **zipCode** | **string**|  |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

