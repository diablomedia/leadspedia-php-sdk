# Leadspedia\LeadsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsapproveReturndo**](LeadsApi.md#leadsapproveReturndo) | **POST** /leads/approveReturn.do | Approve Return
[**leadsgetAlldo**](LeadsApi.md#leadsgetAlldo) | **GET** /leads/getAll.do | Get All
[**leadsgetDelivereddo**](LeadsApi.md#leadsgetDelivereddo) | **GET** /leads/getDelivered.do | Get Delivered
[**leadsgetLeadDatado**](LeadsApi.md#leadsgetLeadDatado) | **GET** /leads/getLeadData.do | Get Lead Data
[**leadsgetLeadInfodo**](LeadsApi.md#leadsgetLeadInfodo) | **GET** /leads/getLeadInfo.do | Get Lead Info
[**leadsgetQueuedo**](LeadsApi.md#leadsgetQueuedo) | **GET** /leads/getQueue.do | Get Queue
[**leadsgetReturnsdo**](LeadsApi.md#leadsgetReturnsdo) | **GET** /leads/getReturns.do | Get Returns
[**leadsgetReviewdo**](LeadsApi.md#leadsgetReviewdo) | **GET** /leads/getReview.do | Get Review
[**leadsgetScrubbeddo**](LeadsApi.md#leadsgetScrubbeddo) | **GET** /leads/getScrubbed.do | Get Scrubbed
[**leadsgetSolddo**](LeadsApi.md#leadsgetSolddo) | **GET** /leads/getSold.do | Get Sold
[**leadsgetTrashdo**](LeadsApi.md#leadsgetTrashdo) | **GET** /leads/getTrash.do | Get Trash
[**leadsrejectReturndo**](LeadsApi.md#leadsrejectReturndo) | **POST** /leads/rejectReturn.do | Reject Return
[**leadsrequestReturndo**](LeadsApi.md#leadsrequestReturndo) | **POST** /leads/requestReturn.do | Request Return
[**leadsreturnLeadFromAllContractsdo**](LeadsApi.md#leadsreturnLeadFromAllContractsdo) | **POST** /leads/returnLeadFromAllContracts.do | Return Lead From All Contracts
[**leadsreturnLeaddo**](LeadsApi.md#leadsreturnLeaddo) | **POST** /leads/returnLead.do | Return Lead
[**leadsreviewApprovedo**](LeadsApi.md#leadsreviewApprovedo) | **POST** /leads/reviewApprove.do | Review Approve
[**leadsreviewRejectdo**](LeadsApi.md#leadsreviewRejectdo) | **POST** /leads/reviewReject.do | Review Reject
[**leadsscrubLeaddo**](LeadsApi.md#leadsscrubLeaddo) | **POST** /leads/scrubLead.do | Scrub Lead
[**leadsunreturnLeaddo**](LeadsApi.md#leadsunreturnLeaddo) | **POST** /leads/unreturnLead.do | Unreturn Lead
[**leadsupdateLeaddo**](LeadsApi.md#leadsupdateLeaddo) | **POST** /leads/updateLead.do | Update Lead



## leadsapproveReturndo

> leadsapproveReturndo($leadID, $contractID)

Approve Return

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$contractID = 56; // int | 

try {
    $apiInstance->leadsapproveReturndo($leadID, $contractID);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsapproveReturndo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **contractID** | **int**|  |

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetAlldo

> \Leadspedia\Model\InlineResponse200 leadsgetAlldo($fromDate, $campaignID, $affiliateID, $verticalID, $paid, $scrubbed, $toDate, $start, $limit)

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$verticalID = 56; // int | 
$paid = 'paid_example'; // string | 
$scrubbed = 'scrubbed_example'; // string | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->leadsgetAlldo($fromDate, $campaignID, $affiliateID, $verticalID, $paid, $scrubbed, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **paid** | **string**|  | [optional]
 **scrubbed** | **string**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetDelivereddo

> \Leadspedia\Model\InlineResponse200 leadsgetDelivereddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit)

Get Delivered

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$leadID = 'leadID_example'; // string | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$verticalID = 56; // int | 
$advertiserID = 56; // int | 
$contractID = 56; // int | 
$returned = 'returned_example'; // string | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->leadsgetDelivereddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetDelivereddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **leadID** | **string**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **contractID** | **int**|  | [optional]
 **returned** | **string**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetLeadDatado

> \Leadspedia\Model\InlineResponse200 leadsgetLeadDatado($leadID)

Get Lead Data

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 

try {
    $result = $apiInstance->leadsgetLeadDatado($leadID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetLeadDatado: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetLeadInfodo

> \Leadspedia\Model\InlineResponse200 leadsgetLeadInfodo($leadID)

Get Lead Info

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 

try {
    $result = $apiInstance->leadsgetLeadInfodo($leadID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetLeadInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetQueuedo

> \Leadspedia\Model\InlineResponse200 leadsgetQueuedo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit)

Get Queue

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$verticalID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->leadsgetQueuedo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetQueuedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetReturnsdo

> \Leadspedia\Model\InlineResponse200 leadsgetReturnsdo($fromDate, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $status, $returnReasonID, $toDate, $start, $limit)

Get Returns

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$verticalID = 56; // int | 
$advertiserID = 56; // int | 
$contractID = 56; // int | 
$status = 'status_example'; // string | 
$returnReasonID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->leadsgetReturnsdo($fromDate, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $status, $returnReasonID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetReturnsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **contractID** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **returnReasonID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetReviewdo

> \Leadspedia\Model\InlineResponse200 leadsgetReviewdo($leadID, $campaignID, $affiliateID, $verticalID, $start, $limit)

Get Review

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$verticalID = 56; // int | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->leadsgetReviewdo($leadID, $campaignID, $affiliateID, $verticalID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetReviewdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetScrubbeddo

> \Leadspedia\Model\InlineResponse200 leadsgetScrubbeddo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit)

Get Scrubbed

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$verticalID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->leadsgetScrubbeddo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetScrubbeddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetSolddo

> \Leadspedia\Model\InlineResponse200 leadsgetSolddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit)

Get Sold

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$leadID = 'leadID_example'; // string | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$verticalID = 56; // int | 
$advertiserID = 56; // int | 
$contractID = 56; // int | 
$returned = 'returned_example'; // string | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->leadsgetSolddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetSolddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **leadID** | **string**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **contractID** | **int**|  | [optional]
 **returned** | **string**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsgetTrashdo

> \Leadspedia\Model\InlineResponse200 leadsgetTrashdo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit)

Get Trash

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$leadID = 'leadID_example'; // string | 
$campaignID = 56; // int | 
$affiliateID = 56; // int | 
$verticalID = 56; // int | 
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->leadsgetTrashdo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetTrashdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fromDate** | **\DateTime**|  |
 **leadID** | **string**|  | [optional]
 **campaignID** | **int**|  | [optional]
 **affiliateID** | **int**|  | [optional]
 **verticalID** | **int**|  | [optional]
 **toDate** | **\DateTime**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsrejectReturndo

> leadsrejectReturndo($leadID, $contractID, $rejectReasonID)

Reject Return

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$contractID = 56; // int | 
$rejectReasonID = 56; // int | 

try {
    $apiInstance->leadsrejectReturndo($leadID, $contractID, $rejectReasonID);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsrejectReturndo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **contractID** | **int**|  |
 **rejectReasonID** | **int**|  |

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsrequestReturndo

> leadsrequestReturndo($leadID, $contractID, $returnReasonID, $returnNotes)

Request Return

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$contractID = 56; // int | 
$returnReasonID = 56; // int | 
$returnNotes = 'returnNotes_example'; // string | 

try {
    $apiInstance->leadsrequestReturndo($leadID, $contractID, $returnReasonID, $returnNotes);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsrequestReturndo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **contractID** | **int**|  |
 **returnReasonID** | **int**|  |
 **returnNotes** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsreturnLeadFromAllContractsdo

> leadsreturnLeadFromAllContractsdo($leadID, $returnReasonID, $scrub, $replaceReturns)

Return Lead From All Contracts

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$returnReasonID = 56; // int | 
$scrub = 'scrub_example'; // string | 
$replaceReturns = 'replaceReturns_example'; // string | 

try {
    $apiInstance->leadsreturnLeadFromAllContractsdo($leadID, $returnReasonID, $scrub, $replaceReturns);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreturnLeadFromAllContractsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **returnReasonID** | **int**|  |
 **scrub** | **string**|  | [optional]
 **replaceReturns** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsreturnLeaddo

> leadsreturnLeaddo($leadID, $contractID, $returnReasonID, $scrub, $replaceReturns)

Return Lead

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$contractID = 56; // int | 
$returnReasonID = 56; // int | 
$scrub = 'scrub_example'; // string | 
$replaceReturns = 'replaceReturns_example'; // string | 

try {
    $apiInstance->leadsreturnLeaddo($leadID, $contractID, $returnReasonID, $scrub, $replaceReturns);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreturnLeaddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **contractID** | **int**|  |
 **returnReasonID** | **int**|  |
 **scrub** | **string**|  | [optional]
 **replaceReturns** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsreviewApprovedo

> leadsreviewApprovedo($leadID, $leadAcceptReasonID, $leadAcceptReason)

Review Approve

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$leadAcceptReasonID = 56; // int | 
$leadAcceptReason = 'leadAcceptReason_example'; // string | 

try {
    $apiInstance->leadsreviewApprovedo($leadID, $leadAcceptReasonID, $leadAcceptReason);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreviewApprovedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **leadAcceptReasonID** | **int**|  |
 **leadAcceptReason** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsreviewRejectdo

> leadsreviewRejectdo($leadID, $leadRejectReasonID, $leadRejectReason)

Review Reject

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$leadRejectReasonID = 56; // int | 
$leadRejectReason = 'leadRejectReason_example'; // string | 

try {
    $apiInstance->leadsreviewRejectdo($leadID, $leadRejectReasonID, $leadRejectReason);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreviewRejectdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **leadRejectReasonID** | **int**|  |
 **leadRejectReason** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsscrubLeaddo

> leadsscrubLeaddo($leadID, $scrubReasonID)

Scrub Lead

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$scrubReasonID = 56; // int | 

try {
    $apiInstance->leadsscrubLeaddo($leadID, $scrubReasonID);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsscrubLeaddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **scrubReasonID** | **int**|  |

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsunreturnLeaddo

> leadsunreturnLeaddo($leadID, $contractID, $rejectReasonID)

Unreturn Lead

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 
$contractID = 56; // int | 
$rejectReasonID = 56; // int | 

try {
    $apiInstance->leadsunreturnLeaddo($leadID, $contractID, $rejectReasonID);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsunreturnLeaddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **contractID** | **int**|  |
 **rejectReasonID** | **int**|  |

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## leadsupdateLeaddo

> leadsupdateLeaddo($leadID)

Update Lead

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


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | 

try {
    $apiInstance->leadsupdateLeaddo($leadID);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsupdateLeaddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

