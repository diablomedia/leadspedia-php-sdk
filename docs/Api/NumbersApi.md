# Leadspedia\NumbersApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**numbersgetAvailabledo()**](NumbersApi.md#numbersgetAvailabledo) | **GET** /numbers/getAvailable.do | Get Available |


## `numbersgetAvailabledo()`

```php
numbersgetAvailabledo($start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\NumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->numbersgetAvailabledo($start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumbersApi->numbersgetAvailabledo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| Offset of the first row to return. | [optional] [default to 0] |
| **limit** | **int**| Maximum number of rows to return. Cannot be greater than 1000. | [optional] [default to 100] |

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
