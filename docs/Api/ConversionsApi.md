# LeadspediaApi\ConversionsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversionsgetAlldo**](ConversionsApi.md#conversionsgetalldo) | **GET** /conversions/getAll.do | Get All

# **conversionsgetAlldo**
> conversionsgetAlldo($from_date, $vertical_id, $offer_id, $affiliate_id, $campaign_id, $advertiser_id, $status, $show_goal, $show_non_goal, $show_throttled, $show_non_throttled, $show_test, $show_non_test, $to_date, $start, $limit)

Get All

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');// Configure API key authorization: api_secret
$config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKey('api_secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LeadspediaApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_secret', 'Bearer');

$apiInstance = new LeadspediaApi\Api\ConversionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$vertical_id = 56; // int | 
$offer_id = 56; // int | 
$affiliate_id = 56; // int | 
$campaign_id = 56; // int | 
$advertiser_id = 56; // int | 
$status = "status_example"; // string | 
$show_goal = "show_goal_example"; // string | 
$show_non_goal = "show_non_goal_example"; // string | 
$show_throttled = "show_throttled_example"; // string | 
$show_non_throttled = "show_non_throttled_example"; // string | 
$show_test = "show_test_example"; // string | 
$show_non_test = "show_non_test_example"; // string | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->conversionsgetAlldo($from_date, $vertical_id, $offer_id, $affiliate_id, $campaign_id, $advertiser_id, $status, $show_goal, $show_non_goal, $show_throttled, $show_non_throttled, $show_test, $show_non_test, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling ConversionsApi->conversionsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **vertical_id** | **int**|  | [optional]
 **offer_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **show_goal** | **string**|  | [optional]
 **show_non_goal** | **string**|  | [optional]
 **show_throttled** | **string**|  | [optional]
 **show_non_throttled** | **string**|  | [optional]
 **show_test** | **string**|  | [optional]
 **show_non_test** | **string**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

