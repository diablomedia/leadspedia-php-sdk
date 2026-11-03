# Leadspedia\DeliveryMethodsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deliveryMethodsgetAlldo()**](DeliveryMethodsApi.md#deliveryMethodsgetAlldo) | **GET** /deliveryMethods/getAll.do | Get All |


## `deliveryMethodsgetAlldo()`

```php
deliveryMethodsgetAlldo($verticalID, $deliveryMethodType): \Leadspedia\Model\InlineResponse2001
```

Get All

Retrieves all Delivery Methods from your Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\DeliveryMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$deliveryMethodType = 'deliveryMethodType_example'; // string

try {
    $result = $apiInstance->deliveryMethodsgetAlldo($verticalID, $deliveryMethodType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryMethodsApi->deliveryMethodsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | [optional] |
| **deliveryMethodType** | **string**|  | [optional] |

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
