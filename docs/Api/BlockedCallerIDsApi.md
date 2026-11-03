# Leadspedia\BlockedCallerIDsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blockedCallerIDsadddo()**](BlockedCallerIDsApi.md#blockedCallerIDsadddo) | **POST** /blockedCallerIDs/add.do | Block Caller ID |


## `blockedCallerIDsadddo()`

```php
blockedCallerIDsadddo($phoneNumber, $note): \Leadspedia\Model\InlineResponse200
```

Block Caller ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\BlockedCallerIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneNumber = 'phoneNumber_example'; // string
$note = 'note_example'; // string

try {
    $result = $apiInstance->blockedCallerIDsadddo($phoneNumber, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockedCallerIDsApi->blockedCallerIDsadddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phoneNumber** | **string**|  | |
| **note** | **string**|  | [optional] |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
