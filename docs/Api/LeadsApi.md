# LeadspediaApi\LeadsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsapproveReturndo**](LeadsApi.md#leadsapprovereturndo) | **POST** /leads/approveReturn.do | Approve Return
[**leadsgetAlldo**](LeadsApi.md#leadsgetalldo) | **GET** /leads/getAll.do | Get All
[**leadsgetLeadDatado**](LeadsApi.md#leadsgetleaddatado) | **GET** /leads/getLeadData.do | Get Lead Data
[**leadsgetLeadInfodo**](LeadsApi.md#leadsgetleadinfodo) | **GET** /leads/getLeadInfo.do | Get Lead Info
[**leadsgetQueuedo**](LeadsApi.md#leadsgetqueuedo) | **GET** /leads/getQueue.do | Get Queue
[**leadsgetReturnsdo**](LeadsApi.md#leadsgetreturnsdo) | **GET** /leads/getReturns.do | Get Returns
[**leadsgetReviewdo**](LeadsApi.md#leadsgetreviewdo) | **GET** /leads/getReview.do | Get Review
[**leadsgetScrubbeddo**](LeadsApi.md#leadsgetscrubbeddo) | **GET** /leads/getScrubbed.do | Get Scrubbed
[**leadsgetSolddo**](LeadsApi.md#leadsgetsolddo) | **GET** /leads/getSold.do | Get Sold
[**leadsgetTrashdo**](LeadsApi.md#leadsgettrashdo) | **GET** /leads/getTrash.do | Get Trash
[**leadsrejectReturndo**](LeadsApi.md#leadsrejectreturndo) | **POST** /leads/rejectReturn.do | Reject Return
[**leadsrequestReturndo**](LeadsApi.md#leadsrequestreturndo) | **POST** /leads/requestReturn.do | Request Return
[**leadsreturnLeadFromAllContractsdo**](LeadsApi.md#leadsreturnleadfromallcontractsdo) | **POST** /leads/returnLeadFromAllContracts.do | Return Lead From All Contracts
[**leadsreturnLeaddo**](LeadsApi.md#leadsreturnleaddo) | **POST** /leads/returnLead.do | Return Lead
[**leadsreviewApprovedo**](LeadsApi.md#leadsreviewapprovedo) | **POST** /leads/reviewApprove.do | Review Approve
[**leadsreviewRejectdo**](LeadsApi.md#leadsreviewrejectdo) | **POST** /leads/reviewReject.do | Review Reject
[**leadsscrubLeaddo**](LeadsApi.md#leadsscrubleaddo) | **POST** /leads/scrubLead.do | Scrub Lead
[**leadsupdateLeaddo**](LeadsApi.md#leadsupdateleaddo) | **POST** /leads/updateLead.do | Update Lead

# **leadsapproveReturndo**
> leadsapproveReturndo($lead_id, $contract_id)

Approve Return

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 
$contract_id = 56; // int | 

try {
    $apiInstance->leadsapproveReturndo($lead_id, $contract_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsapproveReturndo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **contract_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsgetAlldo**
> leadsgetAlldo($from_date, $campaign_id, $affiliate_id, $vertical_id, $paid, $scrubbed, $to_date, $start, $limit)

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$vertical_id = 56; // int | 
$paid = "paid_example"; // string | 
$scrubbed = "scrubbed_example"; // string | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->leadsgetAlldo($from_date, $campaign_id, $affiliate_id, $vertical_id, $paid, $scrubbed, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **campaign_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
 **paid** | **string**|  | [optional]
 **scrubbed** | **string**|  | [optional]
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

# **leadsgetLeadDatado**
> leadsgetLeadDatado($lead_id)

Get Lead Data

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 

try {
    $apiInstance->leadsgetLeadDatado($lead_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetLeadDatado: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsgetLeadInfodo**
> leadsgetLeadInfodo($lead_id)

Get Lead Info

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 

try {
    $apiInstance->leadsgetLeadInfodo($lead_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetLeadInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsgetQueuedo**
> leadsgetQueuedo($from_date, $campaign_id, $affiliate_id, $vertical_id, $to_date, $start, $limit)

Get Queue

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$vertical_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->leadsgetQueuedo($from_date, $campaign_id, $affiliate_id, $vertical_id, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetQueuedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **campaign_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
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

# **leadsgetReturnsdo**
> leadsgetReturnsdo($from_date, $campaign_id, $affiliate_id, $vertical_id, $advertiser_id, $contract_id, $status, $return_reason_id, $to_date, $start, $limit)

Get Returns

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$vertical_id = 56; // int | 
$advertiser_id = 56; // int | 
$contract_id = 56; // int | 
$status = "status_example"; // string | 
$return_reason_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->leadsgetReturnsdo($from_date, $campaign_id, $affiliate_id, $vertical_id, $advertiser_id, $contract_id, $status, $return_reason_id, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetReturnsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **campaign_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **contract_id** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **return_reason_id** | **int**|  | [optional]
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

# **leadsgetReviewdo**
> leadsgetReviewdo($lead_id, $campaign_id, $affiliate_id, $vertical_id, $start, $limit)

Get Review

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$vertical_id = 56; // int | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->leadsgetReviewdo($lead_id, $campaign_id, $affiliate_id, $vertical_id, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetReviewdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
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

# **leadsgetScrubbeddo**
> leadsgetScrubbeddo($from_date, $campaign_id, $affiliate_id, $vertical_id, $to_date, $start, $limit)

Get Scrubbed

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$vertical_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->leadsgetScrubbeddo($from_date, $campaign_id, $affiliate_id, $vertical_id, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetScrubbeddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **campaign_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
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

# **leadsgetSolddo**
> object leadsgetSolddo($from_date, $lead_id, $campaign_id, $affiliate_id, $vertical_id, $advertiser_id, $contract_id, $returned, $to_date, $start, $limit)

Get Sold

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$lead_id = "lead_id_example"; // string | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$vertical_id = 56; // int | 
$advertiser_id = 56; // int | 
$contract_id = 56; // int | 
$returned = "returned_example"; // string | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->leadsgetSolddo($from_date, $lead_id, $campaign_id, $affiliate_id, $vertical_id, $advertiser_id, $contract_id, $returned, $to_date, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetSolddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **lead_id** | **string**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
 **contract_id** | **int**|  | [optional]
 **returned** | **string**|  | [optional]
 **to_date** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsgetTrashdo**
> leadsgetTrashdo($from_date, $lead_id, $campaign_id, $affiliate_id, $vertical_id, $to_date, $start, $limit)

Get Trash

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20"); // \DateTime | 
$lead_id = "lead_id_example"; // string | 
$campaign_id = 56; // int | 
$affiliate_id = 56; // int | 
$vertical_id = 56; // int | 
$to_date = new \DateTime("2013-10-20"); // \DateTime | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->leadsgetTrashdo($from_date, $lead_id, $campaign_id, $affiliate_id, $vertical_id, $to_date, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetTrashdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**|  |
 **lead_id** | **string**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **vertical_id** | **int**|  | [optional]
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

# **leadsrejectReturndo**
> leadsrejectReturndo($lead_id, $contract_id, $reject_reason_id)

Reject Return

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 
$contract_id = 56; // int | 
$reject_reason_id = 56; // int | 

try {
    $apiInstance->leadsrejectReturndo($lead_id, $contract_id, $reject_reason_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsrejectReturndo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **contract_id** | **int**|  |
 **reject_reason_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsrequestReturndo**
> leadsrequestReturndo($lead_id, $contract_id, $return_reason_id, $return_notes)

Request Return

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 
$contract_id = 56; // int | 
$return_reason_id = 56; // int | 
$return_notes = "return_notes_example"; // string | 

try {
    $apiInstance->leadsrequestReturndo($lead_id, $contract_id, $return_reason_id, $return_notes);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsrequestReturndo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **contract_id** | **int**|  |
 **return_reason_id** | **int**|  |
 **return_notes** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsreturnLeadFromAllContractsdo**
> leadsreturnLeadFromAllContractsdo($lead_id, $return_reason_id, $scrub, $replace_returns)

Return Lead From All Contracts

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 
$return_reason_id = 56; // int | 
$scrub = "scrub_example"; // string | 
$replace_returns = "replace_returns_example"; // string | 

try {
    $apiInstance->leadsreturnLeadFromAllContractsdo($lead_id, $return_reason_id, $scrub, $replace_returns);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreturnLeadFromAllContractsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **return_reason_id** | **int**|  |
 **scrub** | **string**|  | [optional]
 **replace_returns** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsreturnLeaddo**
> leadsreturnLeaddo($lead_id, $contract_id, $return_reason_id, $scrub, $replace_returns)

Return Lead

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 
$contract_id = 56; // int | 
$return_reason_id = 56; // int | 
$scrub = "scrub_example"; // string | 
$replace_returns = "replace_returns_example"; // string | 

try {
    $apiInstance->leadsreturnLeaddo($lead_id, $contract_id, $return_reason_id, $scrub, $replace_returns);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreturnLeaddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **contract_id** | **int**|  |
 **return_reason_id** | **int**|  |
 **scrub** | **string**|  | [optional]
 **replace_returns** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsreviewApprovedo**
> leadsreviewApprovedo($lead_id, $lead_accept_reason_id, $lead_accept_reason)

Review Approve

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 
$lead_accept_reason_id = 56; // int | 
$lead_accept_reason = "lead_accept_reason_example"; // string | 

try {
    $apiInstance->leadsreviewApprovedo($lead_id, $lead_accept_reason_id, $lead_accept_reason);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreviewApprovedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_accept_reason_id** | **int**|  |
 **lead_accept_reason** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsreviewRejectdo**
> leadsreviewRejectdo($lead_id, $lead_reject_reason_id, $lead_reject_reason)

Review Reject

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 
$lead_reject_reason_id = 56; // int | 
$lead_reject_reason = "lead_reject_reason_example"; // string | 

try {
    $apiInstance->leadsreviewRejectdo($lead_id, $lead_reject_reason_id, $lead_reject_reason);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreviewRejectdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **lead_reject_reason_id** | **int**|  |
 **lead_reject_reason** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsscrubLeaddo**
> leadsscrubLeaddo($lead_id, $scrub_reason_id)

Scrub Lead

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 
$scrub_reason_id = 56; // int | 

try {
    $apiInstance->leadsscrubLeaddo($lead_id, $scrub_reason_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsscrubLeaddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |
 **scrub_reason_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsupdateLeaddo**
> leadsupdateLeaddo($lead_id)

Update Lead

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

$apiInstance = new LeadspediaApi\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = "lead_id_example"; // string | 

try {
    $apiInstance->leadsupdateLeaddo($lead_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsupdateLeaddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

