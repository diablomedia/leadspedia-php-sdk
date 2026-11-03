# Leadspedia\ListApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listgetAlldo()**](ListApi.md#listgetAlldo) | **GET** /list/getAll.do | Get All |


## `listgetAlldo()`

```php
listgetAlldo($type, $advertiserID, $verticalID): \Leadspedia\Model\InlineResponse2001
```

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string
$advertiserID = 56; // int | Can be passed to retrieve advertiser specific return reasons
$verticalID = 56; // int | Can be passed to retrieve vertical specific return reasons

try {
    $result = $apiInstance->listgetAlldo($type, $advertiserID, $verticalID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | [optional] |
| **advertiserID** | **int**| Can be passed to retrieve advertiser specific return reasons | [optional] |
| **verticalID** | **int**| Can be passed to retrieve vertical specific return reasons | [optional] |

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
