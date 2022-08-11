# Leadspedia\UsersApi

All URIs are relative to https://api.leadspedia.com/core/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersgetAlldo()**](UsersApi.md#usersgetAlldo) | **GET** /users/getAll.do | Get All


## `usersgetAlldo()`

```php
usersgetAlldo($role, $status, $search, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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


$apiInstance = new Leadspedia\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 56; // int
$status = 'status_example'; // string
$search = 'search_example'; // string
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->usersgetAlldo($role, $status, $search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **search** | **string**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
