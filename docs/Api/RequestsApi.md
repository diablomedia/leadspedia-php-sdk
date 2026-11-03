# Leadspedia\RequestsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**requestsgetAlldo()**](RequestsApi.md#requestsgetAlldo) | **GET** /requests/getAll.do | Get All |


## `requestsgetAlldo()`

```php
requestsgetAlldo($date, $affiliateID, $campaignID, $dispositionID): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 'date_example'; // string
$affiliateID = 56; // int
$campaignID = 56; // int
$dispositionID = 56; // int

try {
    $result = $apiInstance->requestsgetAlldo($date, $affiliateID, $campaignID, $dispositionID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **string**|  | |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **dispositionID** | **int**|  | [optional] |

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
