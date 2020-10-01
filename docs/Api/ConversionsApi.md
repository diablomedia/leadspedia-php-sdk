# Leadspedia\ConversionsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversionsgetAlldo**](ConversionsApi.md#conversionsgetAlldo) | **GET** /conversions/getAll.do | Get All



## conversionsgetAlldo

> \Leadspedia\Model\InlineResponse2001 conversionsgetAlldo($fromDate, $verticalID, $offerID, $affiliateID, $campaignID, $advertiserID, $status, $showGoal, $showNonGoal, $showThrottled, $showNonThrottled, $showTest, $showNonTest, $toDate, $start, $limit)

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


$apiInstance = new Leadspedia\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$verticalID = 56; // int | 
$offerID = 56; // int | 
$affiliateID = 56; // int | 
$campaignID = 56; // int | 
$advertiserID = 56; // int | 
$status = 'status_example'; // string | 
$showGoal = 'showGoal_example'; // string | 
$showNonGoal = 'showNonGoal_example'; // string | 
$showThrottled = 'showThrottled_example'; // string | 
$showNonThrottled = 'showNonThrottled_example'; // string | 
$showTest = 'showTest_example'; // string | 
$showNonTest = 'showNonTest_example'; // string | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->conversionsgetAlldo($fromDate, $verticalID, $offerID, $affiliateID, $campaignID, $advertiserID, $status, $showGoal, $showNonGoal, $showThrottled, $showNonThrottled, $showTest, $showNonTest, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->conversionsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **verticalID** | **int**|  | [optional]
 **offerID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **showGoal** | **string**|  | [optional]
 **showNonGoal** | **string**|  | [optional]
 **showThrottled** | **string**|  | [optional]
 **showNonThrottled** | **string**|  | [optional]
 **showTest** | **string**|  | [optional]
 **showNonTest** | **string**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

