# Leadspedia\DncApi

All URIs are relative to https://api.leadspedia.com/core/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dncadddo()**](DncApi.md#dncadddo) | **POST** /dnc/add.do | Add to DNC List
[**dnccheckdo()**](DncApi.md#dnccheckdo) | **POST** /dnc/check.do | Check DNC List


## `dncadddo()`

```php
dncadddo($verticalID, $phoneNumber, $emailAddress): \Leadspedia\Model\Affiliatescreatedo200Response
```

Add to DNC List

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


$apiInstance = new Leadspedia\Api\DncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$phoneNumber = 'phoneNumber_example'; // string
$emailAddress = 'emailAddress_example'; // string

try {
    $result = $apiInstance->dncadddo($verticalID, $phoneNumber, $emailAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DncApi->dncadddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verticalID** | **int**|  |
 **phoneNumber** | **string**|  | [optional]
 **emailAddress** | **string**|  | [optional]

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dnccheckdo()`

```php
dnccheckdo($verticalID, $phoneNumber, $emailAddress): \Leadspedia\Model\Affiliatescreatedo200Response
```

Check DNC List

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


$apiInstance = new Leadspedia\Api\DncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$phoneNumber = 'phoneNumber_example'; // string
$emailAddress = 'emailAddress_example'; // string

try {
    $result = $apiInstance->dnccheckdo($verticalID, $phoneNumber, $emailAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DncApi->dnccheckdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verticalID** | **int**|  |
 **phoneNumber** | **string**|  | [optional]
 **emailAddress** | **string**|  | [optional]

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
