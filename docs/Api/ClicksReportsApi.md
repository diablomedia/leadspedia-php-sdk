# Leadspedia\ClicksReportsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clicksReportsgetClicksByCampaignsReportdo()**](ClicksReportsApi.md#clicksReportsgetClicksByCampaignsReportdo) | **GET** /clicksReports/getClicksByCampaignsReport.do | Clicks by Campaigns |


## `clicksReportsgetClicksByCampaignsReportdo()`

```php
clicksReportsgetClicksByCampaignsReportdo($fromDate, $toDate, $verticalID, $affiliateID, $offerID, $payoutModel, $verticalGroupID, $affiliateAccountManagerID): \Leadspedia\Model\InlineResponse2001
```

Clicks by Campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\ClicksReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 'fromDate_example'; // string
$toDate = 'toDate_example'; // string
$verticalID = 56; // int
$affiliateID = 56; // int
$offerID = 56; // int
$payoutModel = 'payoutModel_example'; // string
$verticalGroupID = 56; // int
$affiliateAccountManagerID = 56; // int

try {
    $result = $apiInstance->clicksReportsgetClicksByCampaignsReportdo($fromDate, $toDate, $verticalID, $affiliateID, $offerID, $payoutModel, $verticalGroupID, $affiliateAccountManagerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClicksReportsApi->clicksReportsgetClicksByCampaignsReportdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**|  | |
| **toDate** | **string**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **payoutModel** | **string**|  | [optional] |
| **verticalGroupID** | **int**|  | [optional] |
| **affiliateAccountManagerID** | **int**|  | [optional] |

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
