# Leadspedia\ConversionsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**conversionsgetAlldo()**](ConversionsApi.md#conversionsgetAlldo) | **GET** /conversions/getAll.do | Get All Conversions |


## `conversionsgetAlldo()`

```php
conversionsgetAlldo($fromDate, $toDate, $verticalID, $affiliateID, $campaignID, $advertiserID, $offerID, $status, $showTest, $showNonTest, $showThrottled, $showNonThrottled, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get All Conversions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int
$affiliateID = 56; // int
$campaignID = 56; // int
$advertiserID = 56; // int
$offerID = 56; // int
$status = 'status_example'; // string
$showTest = 'showTest_example'; // string
$showNonTest = 'showNonTest_example'; // string
$showThrottled = 'showThrottled_example'; // string
$showNonThrottled = 'showNonThrottled_example'; // string
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->conversionsgetAlldo($fromDate, $toDate, $verticalID, $affiliateID, $campaignID, $advertiserID, $offerID, $status, $showTest, $showNonTest, $showThrottled, $showNonThrottled, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->conversionsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |
| **showTest** | **string**|  | [optional] |
| **showNonTest** | **string**|  | [optional] |
| **showThrottled** | **string**|  | [optional] |
| **showNonThrottled** | **string**|  | [optional] |
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
