# Leadspedia\LeadsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**leadsapproveReturndo()**](LeadsApi.md#leadsapproveReturndo) | **POST** /leads/approveReturn.do | Approve Return Request |
| [**leadsdeleteDatado()**](LeadsApi.md#leadsdeleteDatado) | **POST** /leads/deleteData.do | Delete Data |
| [**leadsgetAlldo()**](LeadsApi.md#leadsgetAlldo) | **GET** /leads/getAll.do | Get All |
| [**leadsgetDelivereddo()**](LeadsApi.md#leadsgetDelivereddo) | **GET** /leads/getDelivered.do | Get Delivered |
| [**leadsgetLeadDatado()**](LeadsApi.md#leadsgetLeadDatado) | **GET** /leads/getLeadData.do | Get Lead Data |
| [**leadsgetLeadInfodo()**](LeadsApi.md#leadsgetLeadInfodo) | **GET** /leads/getLeadInfo.do | Get Lead Info |
| [**leadsgetPostbackdo()**](LeadsApi.md#leadsgetPostbackdo) | **GET** /leads/getPostback.do | Get Postback |
| [**leadsgetPostsdo()**](LeadsApi.md#leadsgetPostsdo) | **GET** /leads/getPosts.do | Get Posts |
| [**leadsgetQueuedo()**](LeadsApi.md#leadsgetQueuedo) | **GET** /leads/getQueue.do | Get Queue |
| [**leadsgetReturnsdo()**](LeadsApi.md#leadsgetReturnsdo) | **GET** /leads/getReturns.do | Get Returns |
| [**leadsgetReviewdo()**](LeadsApi.md#leadsgetReviewdo) | **GET** /leads/getReview.do | Get Review |
| [**leadsgetScrubbeddo()**](LeadsApi.md#leadsgetScrubbeddo) | **GET** /leads/getScrubbed.do | Get Scrubbed |
| [**leadsgetSolddo()**](LeadsApi.md#leadsgetSolddo) | **GET** /leads/getSold.do | Get Sold |
| [**leadsgetTrashdo()**](LeadsApi.md#leadsgetTrashdo) | **GET** /leads/getTrash.do | Get Trash |
| [**leadsrejectReturndo()**](LeadsApi.md#leadsrejectReturndo) | **POST** /leads/rejectReturn.do | Reject Return Request |
| [**leadsrequestReturndo()**](LeadsApi.md#leadsrequestReturndo) | **POST** /leads/requestReturn.do | Request Return |
| [**leadsreturnLeadFromAllContractsdo()**](LeadsApi.md#leadsreturnLeadFromAllContractsdo) | **POST** /leads/returnLeadFromAllContracts.do | Return Lead From All Contracts |
| [**leadsreturnLeaddo()**](LeadsApi.md#leadsreturnLeaddo) | **POST** /leads/returnLead.do | Return Lead |
| [**leadsreviewApprovedo()**](LeadsApi.md#leadsreviewApprovedo) | **POST** /leads/reviewApprove.do | Review Approve |
| [**leadsreviewRejectdo()**](LeadsApi.md#leadsreviewRejectdo) | **POST** /leads/reviewReject.do | Review Reject |
| [**leadsscrubLeaddo()**](LeadsApi.md#leadsscrubLeaddo) | **POST** /leads/scrubLead.do | Scrub Lead |
| [**leadsunreturnLeaddo()**](LeadsApi.md#leadsunreturnLeaddo) | **POST** /leads/unreturnLead.do | Unreturn Lead |
| [**leadsunscrubLeaddo()**](LeadsApi.md#leadsunscrubLeaddo) | **POST** /leads/unscrubLead.do | Unscrub Lead |
| [**leadsupdateLeadSoldPricedo()**](LeadsApi.md#leadsupdateLeadSoldPricedo) | **POST** /leads/updateLeadSoldPrice.do | Update Lead Sold Price |
| [**leadsupdateLeadStatusdo()**](LeadsApi.md#leadsupdateLeadStatusdo) | **POST** /leads/updateLeadStatus.do | Update Lead Status |
| [**leadsupdateLeaddo()**](LeadsApi.md#leadsupdateLeaddo) | **POST** /leads/updateLead.do | Update Lead Data |
| [**leadsupdatePayoutdo()**](LeadsApi.md#leadsupdatePayoutdo) | **POST** /leads/updatePayout.do | Update Payout |


## `leadsapproveReturndo()`

```php
leadsapproveReturndo($leadID, $contractID): \Leadspedia\Model\InlineResponse200
```

Approve Return Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **contractID** | **int**|  | |

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

## `leadsdeleteDatado()`

```php
leadsdeleteDatado($leadID): \Leadspedia\Model\InlineResponse200
```

Delete Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string

try {
    $result = $apiInstance->leadsdeleteDatado($leadID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsdeleteDatado: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |

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

## `leadsgetAlldo()`

```php
leadsgetAlldo($fromDate, $campaignID, $affiliateID, $verticalID, $paid, $scrubbed, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get All

Get All Leads

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$paid = 'paid_example'; // string
$scrubbed = 'scrubbed_example'; // string
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetAlldo($fromDate, $campaignID, $affiliateID, $verticalID, $paid, $scrubbed, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **paid** | **string**|  | [optional] |
| **scrubbed** | **string**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
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

## `leadsgetDelivereddo()`

```php
leadsgetDelivereddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Delivered

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$leadID = 'leadID_example'; // string
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$returned = 'returned_example'; // string
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetDelivereddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetDelivereddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | [optional] |
| **leadID** | **string**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **returned** | **string**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
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

## `leadsgetLeadDatado()`

```php
leadsgetLeadDatado($leadID): \Leadspedia\Model\InlineResponse2001
```

Get Lead Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |

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

## `leadsgetLeadInfodo()`

```php
leadsgetLeadInfodo($leadID): \Leadspedia\Model\InlineResponse2001
```

Get Lead Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |

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

## `leadsgetPostbackdo()`

```php
leadsgetPostbackdo($fromDate, $toDate, $verticalID, $advertiserID, $contractID, $affiliateID, $campaignID, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Postback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$affiliateID = 56; // int
$campaignID = 56; // int
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetPostbackdo($fromDate, $toDate, $verticalID, $advertiserID, $contractID, $affiliateID, $campaignID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetPostbackdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **toDate** | **\DateTime**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
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

## `leadsgetPostsdo()`

```php
leadsgetPostsdo($date, $contractID, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$contractID = 56; // int
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetPostsdo($date, $contractID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetPostsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **\DateTime**|  | [optional] |
| **contractID** | **int**|  | [optional] |
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

## `leadsgetQueuedo()`

```php
leadsgetQueuedo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Queue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetQueuedo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetQueuedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
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

## `leadsgetReturnsdo()`

```php
leadsgetReturnsdo($fromDate, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $status, $returnReasonID, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Returns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$status = 'status_example'; // string
$returnReasonID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetReturnsdo($fromDate, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $status, $returnReasonID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetReturnsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |
| **returnReasonID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
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

## `leadsgetReviewdo()`

```php
leadsgetReviewdo($leadID, $campaignID, $affiliateID, $verticalID, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Review

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetReviewdo($leadID, $campaignID, $affiliateID, $verticalID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetReviewdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
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

## `leadsgetScrubbeddo()`

```php
leadsgetScrubbeddo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Scrubbed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetScrubbeddo($fromDate, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetScrubbeddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
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

## `leadsgetSolddo()`

```php
leadsgetSolddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Sold

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$leadID = 'leadID_example'; // string
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$advertiserID = 56; // int
$contractID = 56; // int
$returned = 'returned_example'; // string
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetSolddo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $advertiserID, $contractID, $returned, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetSolddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **leadID** | **string**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **contractID** | **int**|  | [optional] |
| **returned** | **string**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
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

## `leadsgetTrashdo()`

```php
leadsgetTrashdo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Trash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$leadID = 'leadID_example'; // string
$campaignID = 56; // int
$affiliateID = 56; // int
$verticalID = 56; // int
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->leadsgetTrashdo($fromDate, $leadID, $campaignID, $affiliateID, $verticalID, $toDate, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsgetTrashdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | |
| **leadID** | **string**|  | [optional] |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
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

## `leadsrejectReturndo()`

```php
leadsrejectReturndo($leadID, $contractID, $rejectReasonID): \Leadspedia\Model\InlineResponse200
```

Reject Return Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **contractID** | **int**|  | |
| **rejectReasonID** | **int**|  | |

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

## `leadsrequestReturndo()`

```php
leadsrequestReturndo($leadID, $contractID, $returnReasonID, $returnNotes): \Leadspedia\Model\InlineResponse200
```

Request Return

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **contractID** | **int**|  | |
| **returnReasonID** | **int**|  | |
| **returnNotes** | **string**|  | [optional] |

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

## `leadsreturnLeadFromAllContractsdo()`

```php
leadsreturnLeadFromAllContractsdo($leadID, $returnReasonID, $scrub, $replaceReturns): \Leadspedia\Model\InlineResponse200
```

Return Lead From All Contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **returnReasonID** | **int**|  | |
| **scrub** | **string**|  | [optional] |
| **replaceReturns** | **string**|  | [optional] |

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

## `leadsreturnLeaddo()`

```php
leadsreturnLeaddo($leadID, $contractID, $returnReasonID, $scrub, $replaceReturns): \Leadspedia\Model\InlineResponse200
```

Return Lead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **contractID** | **int**|  | |
| **returnReasonID** | **int**|  | |
| **scrub** | **string**|  | [optional] |
| **replaceReturns** | **string**|  | [optional] |

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

## `leadsreviewApprovedo()`

```php
leadsreviewApprovedo($leadID, $leadAcceptReasonID, $leadAcceptReason): \Leadspedia\Model\InlineResponse200
```

Review Approve

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string
$leadAcceptReasonID = 56; // int
$leadAcceptReason = 'leadAcceptReason_example'; // string | Required if leadAcceptReasonID is not provided

try {
    $result = $apiInstance->leadsreviewApprovedo($leadID, $leadAcceptReasonID, $leadAcceptReason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreviewApprovedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **leadAcceptReasonID** | **int**|  | |
| **leadAcceptReason** | **string**| Required if leadAcceptReasonID is not provided | [optional] |

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

## `leadsreviewRejectdo()`

```php
leadsreviewRejectdo($leadID, $leadRejectReasonID, $leadRejectReason): \Leadspedia\Model\InlineResponse200
```

Review Reject

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string
$leadRejectReasonID = 56; // int
$leadRejectReason = 'leadRejectReason_example'; // string | Required if leadRejectReasonID is not provided

try {
    $result = $apiInstance->leadsreviewRejectdo($leadID, $leadRejectReasonID, $leadRejectReason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsreviewRejectdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **leadRejectReasonID** | **int**|  | |
| **leadRejectReason** | **string**| Required if leadRejectReasonID is not provided | [optional] |

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

## `leadsscrubLeaddo()`

```php
leadsscrubLeaddo($leadID, $scrubReasonID): \Leadspedia\Model\InlineResponse200
```

Scrub Lead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **scrubReasonID** | **int**|  | |

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

## `leadsunreturnLeaddo()`

```php
leadsunreturnLeaddo($leadID, $contractID, $rejectReasonID): \Leadspedia\Model\InlineResponse200
```

Unreturn Lead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **contractID** | **int**|  | |
| **rejectReasonID** | **int**|  | |

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

## `leadsunscrubLeaddo()`

```php
leadsunscrubLeaddo($leadID, $id): \Leadspedia\Model\InlineResponse200
```

Unscrub Lead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leadID = 'leadID_example'; // string | Either id or leadID is required
$id = 56; // int | Either id or leadID is required

try {
    $result = $apiInstance->leadsunscrubLeaddo($leadID, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsunscrubLeaddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**| Either id or leadID is required | |
| **id** | **int**| Either id or leadID is required | |

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

## `leadsupdateLeadSoldPricedo()`

```php
leadsupdateLeadSoldPricedo($soldID, $leadID, $contractID, $price): \Leadspedia\Model\InlineResponse200
```

Update Lead Sold Price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$soldID = 56; // int | Either soldID or a combination of leadID and contractID is required
$leadID = 'leadID_example'; // string | Must pass contractID when using this field. May skip both if using soldID.
$contractID = 56; // int | Required when using leadID. May skip if using soldID
$price = 3.4; // float

try {
    $result = $apiInstance->leadsupdateLeadSoldPricedo($soldID, $leadID, $contractID, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsupdateLeadSoldPricedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **soldID** | **int**| Either soldID or a combination of leadID and contractID is required | |
| **leadID** | **string**| Must pass contractID when using this field. May skip both if using soldID. | |
| **contractID** | **int**| Required when using leadID. May skip if using soldID | |
| **price** | **float**|  | |

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

## `leadsupdateLeadStatusdo()`

```php
leadsupdateLeadStatusdo($leadID, $status, $disposition): \Leadspedia\Model\InlineResponse200
```

Update Lead Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **status** | **string**|  | [optional] |
| **disposition** | **string**|  | [optional] |

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

## `leadsupdateLeaddo()`

```php
leadsupdateLeaddo($leadID): \Leadspedia\Model\InlineResponse200
```

Update Lead Data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |

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

## `leadsupdatePayoutdo()`

```php
leadsupdatePayoutdo($leadID, $payout): \Leadspedia\Model\InlineResponse200
```

Update Payout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **leadID** | **string**|  | |
| **payout** | **float**|  | |

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
