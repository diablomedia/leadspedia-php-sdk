# Leadspedia\LeadsApi

All URIs are relative to https://api.leadspedia.com/core/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsapproveReturndo()**](LeadsApi.md#leadsapproveReturndo) | **POST** /leads/approveReturn.do | Approve Return
[**leadsgetAlldo()**](LeadsApi.md#leadsgetAlldo) | **GET** /leads/getAll.do | Get All
[**leadsgetDelivereddo()**](LeadsApi.md#leadsgetDelivereddo) | **GET** /leads/getDelivered.do | Get Delivered
[**leadsgetLeadDatado()**](LeadsApi.md#leadsgetLeadDatado) | **GET** /leads/getLeadData.do | Get Lead Data
[**leadsgetLeadInfodo()**](LeadsApi.md#leadsgetLeadInfodo) | **GET** /leads/getLeadInfo.do | Get Lead Info
[**leadsgetPostsdo()**](LeadsApi.md#leadsgetPostsdo) | **GET** /leads/getPosts.do | Get Posts
[**leadsgetQueuedo()**](LeadsApi.md#leadsgetQueuedo) | **GET** /leads/getQueue.do | Get Queue
[**leadsgetReturnsdo()**](LeadsApi.md#leadsgetReturnsdo) | **GET** /leads/getReturns.do | Get Returns
[**leadsgetReviewdo()**](LeadsApi.md#leadsgetReviewdo) | **GET** /leads/getReview.do | Get Review
[**leadsgetScrubbeddo()**](LeadsApi.md#leadsgetScrubbeddo) | **GET** /leads/getScrubbed.do | Get Scrubbed
[**leadsgetSolddo()**](LeadsApi.md#leadsgetSolddo) | **GET** /leads/getSold.do | Get Sold
[**leadsgetTrashdo()**](LeadsApi.md#leadsgetTrashdo) | **GET** /leads/getTrash.do | Get Trash
[**leadsrejectReturndo()**](LeadsApi.md#leadsrejectReturndo) | **POST** /leads/rejectReturn.do | Reject Return
[**leadsrequestReturndo()**](LeadsApi.md#leadsrequestReturndo) | **POST** /leads/requestReturn.do | Request Return
[**leadsreturnLeadFromAllContractsdo()**](LeadsApi.md#leadsreturnLeadFromAllContractsdo) | **POST** /leads/returnLeadFromAllContracts.do | Return Lead From All Contracts
[**leadsreturnLeaddo()**](LeadsApi.md#leadsreturnLeaddo) | **POST** /leads/returnLead.do | Return Lead
[**leadsreviewApprovedo()**](LeadsApi.md#leadsreviewApprovedo) | **POST** /leads/reviewApprove.do | Review Approve
[**leadsreviewRejectdo()**](LeadsApi.md#leadsreviewRejectdo) | **POST** /leads/reviewReject.do | Review Reject
[**leadsscrubLeaddo()**](LeadsApi.md#leadsscrubLeaddo) | **POST** /leads/scrubLead.do | Scrub Lead
[**leadsunreturnLeaddo()**](LeadsApi.md#leadsunreturnLeaddo) | **POST** /leads/unreturnLead.do | Unreturn Lead
[**leadsupdateLeadSoldPricedo()**](LeadsApi.md#leadsupdateLeadSoldPricedo) | **POST** /leads/updateLeadSoldPrice.do | Update Lead Sold Price
[**leadsupdateLeadStatusdo()**](LeadsApi.md#leadsupdateLeadStatusdo) | **POST** /leads/updateLeadStatus.do | Update Lead Status
[**leadsupdateLeaddo()**](LeadsApi.md#leadsupdateLeaddo) | **POST** /leads/updateLead.do | Update Lead
[**leadsupdatePayoutdo()**](LeadsApi.md#leadsupdatePayoutdo) | **POST** /leads/updatePayout.do | Update Payout


## `leadsapproveReturndo()`

```php
leadsapproveReturndo($leadID, $contractID): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string
$contractID = 56; // int

try {
    $result = $apiInstance->leadsapproveReturndo($leadID, $contractID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsapproveReturndo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **contractID** | **int**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetAlldo()`

```php
leadsgetAlldo($fromDate, $campaignID, $affiliateID, $verticalID, $paid, $scrubbed, $toDate, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$paid = 'paid_example'; // string
$scrubbed = 'scrubbed_example'; // string
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->leadsgetAlldo($fromDate, $campaignID, $affiliateID, $verticalID, $paid, $scrubbed, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetDelivereddo()`

```php
leadsgetDelivereddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$leadID = 'leadID_example'; // string
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$returned = 'returned_example'; // string
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->leadsgetDelivereddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetDelivereddo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetLeadDatado()`

```php
leadsgetLeadDatado($leadID): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$leadID = 'leadID_example'; // string

try {
    $result = $apiInstance->leadsgetLeadDatado($leadID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetLeadDatado: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |

### Return type

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetLeadInfodo()`

```php
leadsgetLeadInfodo($leadID): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$leadID = 'leadID_example'; // string

try {
    $result = $apiInstance->leadsgetLeadInfodo($leadID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetLeadInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |

### Return type

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetPostsdo()`

```php
leadsgetPostsdo($date, $contractID, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

Get Posts

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
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$contractID = 56; // int
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->leadsgetPostsdo($date, $contractID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetPostsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**|  |
 **contractID** | **int**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetQueuedo()`

```php
leadsgetQueuedo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->leadsgetQueuedo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetQueuedo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetReturnsdo()`

```php
leadsgetReturnsdo($fromDate, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $status, $returnReasonID, $toDate, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$status = 'status_example'; // string
$returnReasonID = 56; // int
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->leadsgetReturnsdo($fromDate, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $status, $returnReasonID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetReturnsdo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetReviewdo()`

```php
leadsgetReviewdo($leadID, $campaignID, $affiliateID, $verticalID, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$leadID = 'leadID_example'; // string
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->leadsgetReviewdo($leadID, $campaignID, $affiliateID, $verticalID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetReviewdo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetScrubbeddo()`

```php
leadsgetScrubbeddo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->leadsgetScrubbeddo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetScrubbeddo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetSolddo()`

```php
leadsgetSolddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$leadID = 'leadID_example'; // string
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$returned = 'returned_example'; // string
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->leadsgetSolddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetSolddo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsgetTrashdo()`

```php
leadsgetTrashdo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

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
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$leadID = 'leadID_example'; // string
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->leadsgetTrashdo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetTrashdo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\VerticalsgetAlldo200Response**](../Model/VerticalsgetAlldo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsrejectReturndo()`

```php
leadsrejectReturndo($leadID, $contractID, $rejectReasonID): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string
$contractID = 56; // int
$rejectReasonID = 56; // int

try {
    $result = $apiInstance->leadsrejectReturndo($leadID, $contractID, $rejectReasonID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsrejectReturndo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **contractID** | **int**|  |
 **rejectReasonID** | **int**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsrequestReturndo()`

```php
leadsrequestReturndo($leadID, $contractID, $returnReasonID, $returnNotes): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string
$contractID = 56; // int
$returnReasonID = 56; // int
$returnNotes = 'returnNotes_example'; // string

try {
    $result = $apiInstance->leadsrequestReturndo($leadID, $contractID, $returnReasonID, $returnNotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsrequestReturndo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **contractID** | **int**|  |
 **returnReasonID** | **int**|  |
 **returnNotes** | **string**|  | [optional]

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsreturnLeadFromAllContractsdo()`

```php
leadsreturnLeadFromAllContractsdo($leadID, $returnReasonID, $scrub, $replaceReturns): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string
$returnReasonID = 56; // int
$scrub = 'scrub_example'; // string
$replaceReturns = 'replaceReturns_example'; // string

try {
    $result = $apiInstance->leadsreturnLeadFromAllContractsdo($leadID, $returnReasonID, $scrub, $replaceReturns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreturnLeadFromAllContractsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **returnReasonID** | **int**|  |
 **scrub** | **string**|  | [optional]
 **replaceReturns** | **string**|  | [optional]

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsreturnLeaddo()`

```php
leadsreturnLeaddo($leadID, $contractID, $returnReasonID, $scrub, $replaceReturns): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string
$contractID = 56; // int
$returnReasonID = 56; // int
$scrub = 'scrub_example'; // string
$replaceReturns = 'replaceReturns_example'; // string

try {
    $result = $apiInstance->leadsreturnLeaddo($leadID, $contractID, $returnReasonID, $scrub, $replaceReturns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreturnLeaddo: ', $e->getMessage(), PHP_EOL;
}
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

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsreviewApprovedo()`

```php
leadsreviewApprovedo($leadID, $leadAcceptReasonID, $leadAcceptReason): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string
$leadAcceptReasonID = 56; // int
$leadAcceptReason = 'leadAcceptReason_example'; // string

try {
    $result = $apiInstance->leadsreviewApprovedo($leadID, $leadAcceptReasonID, $leadAcceptReason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreviewApprovedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **leadAcceptReasonID** | **int**|  |
 **leadAcceptReason** | **string**|  | [optional]

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsreviewRejectdo()`

```php
leadsreviewRejectdo($leadID, $leadRejectReasonID, $leadRejectReason): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string
$leadRejectReasonID = 56; // int
$leadRejectReason = 'leadRejectReason_example'; // string

try {
    $result = $apiInstance->leadsreviewRejectdo($leadID, $leadRejectReasonID, $leadRejectReason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreviewRejectdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **leadRejectReasonID** | **int**|  |
 **leadRejectReason** | **string**|  | [optional]

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsscrubLeaddo()`

```php
leadsscrubLeaddo($leadID, $scrubReasonID): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string
$scrubReasonID = 56; // int

try {
    $result = $apiInstance->leadsscrubLeaddo($leadID, $scrubReasonID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsscrubLeaddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **scrubReasonID** | **int**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsunreturnLeaddo()`

```php
leadsunreturnLeaddo($leadID, $contractID, $rejectReasonID): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string
$contractID = 56; // int
$rejectReasonID = 56; // int

try {
    $result = $apiInstance->leadsunreturnLeaddo($leadID, $contractID, $rejectReasonID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsunreturnLeaddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **contractID** | **int**|  |
 **rejectReasonID** | **int**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsupdateLeadSoldPricedo()`

```php
leadsupdateLeadSoldPricedo($soldID, $leadID, $contractID, $price): \Leadspedia\Model\Affiliatescreatedo200Response
```

Update Lead Sold Price

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
$soldID = 56; // int
$leadID = 'leadID_example'; // string
$contractID = 56; // int
$price = 3.4; // float

try {
    $result = $apiInstance->leadsupdateLeadSoldPricedo($soldID, $leadID, $contractID, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsupdateLeadSoldPricedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **soldID** | **int**|  |
 **leadID** | **string**|  |
 **contractID** | **int**|  |
 **price** | **float**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsupdateLeadStatusdo()`

```php
leadsupdateLeadStatusdo($leadID, $status, $disposition): \Leadspedia\Model\Affiliatescreatedo200Response
```

Update Lead Status

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
$leadID = 'leadID_example'; // string
$status = 'status_example'; // string
$disposition = 'disposition_example'; // string

try {
    $result = $apiInstance->leadsupdateLeadStatusdo($leadID, $status, $disposition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsupdateLeadStatusdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **status** | **string**|  | [optional]
 **disposition** | **string**|  | [optional]

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsupdateLeaddo()`

```php
leadsupdateLeaddo($leadID): \Leadspedia\Model\Affiliatescreatedo200Response
```

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
$leadID = 'leadID_example'; // string

try {
    $result = $apiInstance->leadsupdateLeaddo($leadID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsupdateLeaddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leadsupdatePayoutdo()`

```php
leadsupdatePayoutdo($leadID, $payout): \Leadspedia\Model\Affiliatescreatedo200Response
```

Update Payout

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
$leadID = 'leadID_example'; // string
$payout = 3.4; // float

try {
    $result = $apiInstance->leadsupdatePayoutdo($leadID, $payout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsupdatePayoutdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leadID** | **string**|  |
 **payout** | **float**|  |

### Return type

[**\Leadspedia\Model\Affiliatescreatedo200Response**](../Model/Affiliatescreatedo200Response.md)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
