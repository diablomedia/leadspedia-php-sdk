# Leadspedia\CampaignsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**campaignsaddFilterdo()**](CampaignsApi.md#campaignsaddFilterdo) | **POST** /campaigns/addFilter.do | Add Filter |
| [**campaignsassignTrackingNumberdo()**](CampaignsApi.md#campaignsassignTrackingNumberdo) | **POST** /campaigns/assignTrackingNumber.do | Assign Tracking Number |
| [**campaignschangeModedo()**](CampaignsApi.md#campaignschangeModedo) | **POST** /campaigns/changeMode.do | Change Mode |
| [**campaignschangeStatusdo()**](CampaignsApi.md#campaignschangeStatusdo) | **POST** /campaigns/changeStatus.do | Change Status |
| [**campaignscreateFieldsPayoutdo()**](CampaignsApi.md#campaignscreateFieldsPayoutdo) | **POST** /campaigns/createFieldsPayout.do | Create Fields Payout |
| [**campaignsdeleteFieldsPayoutdo()**](CampaignsApi.md#campaignsdeleteFieldsPayoutdo) | **POST** /campaigns/deleteFieldsPayout.do | Delete Fields Payout |
| [**campaignsdeleteFilterdo()**](CampaignsApi.md#campaignsdeleteFilterdo) | **POST** /campaigns/deleteFilter.do | Delete Filter |
| [**campaignsdeletedo()**](CampaignsApi.md#campaignsdeletedo) | **POST** /campaigns/delete.do | Delete |
| [**campaignsgetAlldo()**](CampaignsApi.md#campaignsgetAlldo) | **GET** /campaigns/getAll.do | Get All |
| [**campaignsgetBasicInfodo()**](CampaignsApi.md#campaignsgetBasicInfodo) | **GET** /campaigns/getBasicInfo.do | Get |
| [**campaignsgetFieldsPayoutsdo()**](CampaignsApi.md#campaignsgetFieldsPayoutsdo) | **GET** /campaigns/getFieldsPayouts.do | Get Fields Payouts |
| [**campaignsgetFiltersdo()**](CampaignsApi.md#campaignsgetFiltersdo) | **GET** /campaigns/getFilters.do | Get Filters |
| [**campaignsrenamedo()**](CampaignsApi.md#campaignsrenamedo) | **POST** /campaigns/rename.do | Rename |
| [**campaignsunassignTrackingNumberdo()**](CampaignsApi.md#campaignsunassignTrackingNumberdo) | **POST** /campaigns/unassignTrackingNumber.do | Unassign Tracking Number |
| [**campaignsupdateBasicInfodo()**](CampaignsApi.md#campaignsupdateBasicInfodo) | **POST** /campaigns/updateBasicInfo.do | Update |
| [**campaignsupdateCallPostbackURLdo()**](CampaignsApi.md#campaignsupdateCallPostbackURLdo) | **POST** /campaigns/updateCallPostbackURL.do | Update Call Postback Pixel |
| [**campaignsupdateFieldsPayoutdo()**](CampaignsApi.md#campaignsupdateFieldsPayoutdo) | **POST** /campaigns/updateFieldsPayout.do | Update Fields Payout |
| [**campaignsupdatePostbackURLdo()**](CampaignsApi.md#campaignsupdatePostbackURLdo) | **POST** /campaigns/updatePostbackURL.do | Update Lead Postback Pixel |


## `campaignsaddFilterdo()`

```php
campaignsaddFilterdo($fieldID, $operator, $campaignID, $value, $date, $miles): \Leadspedia\Model\InlineResponse200
```

Add Filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldID = 56; // int
$operator = 'operator_example'; // string | Operator types are dependent on the data type of the field.
$campaignID = 56; // int
$value = 'value_example'; // string
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$miles = 56; // int

try {
    $result = $apiInstance->campaignsaddFilterdo($fieldID, $operator, $campaignID, $value, $date, $miles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsaddFilterdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fieldID** | **int**|  | |
| **operator** | **string**| Operator types are dependent on the data type of the field. | |
| **campaignID** | **int**|  | |
| **value** | **string**|  | [optional] |
| **date** | **\DateTime**|  | [optional] |
| **miles** | **int**|  | [optional] |

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

## `campaignsassignTrackingNumberdo()`

```php
campaignsassignTrackingNumberdo($campaignID, $number): \Leadspedia\Model\InlineResponse200
```

Assign Tracking Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$number = 'number_example'; // string | An available phone number

try {
    $result = $apiInstance->campaignsassignTrackingNumberdo($campaignID, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsassignTrackingNumberdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |
| **number** | **string**| An available phone number | |

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

## `campaignschangeModedo()`

```php
campaignschangeModedo($campaignID, $mode): \Leadspedia\Model\InlineResponse200
```

Change Mode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$mode = 'mode_example'; // string

try {
    $result = $apiInstance->campaignschangeModedo($campaignID, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignschangeModedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |
| **mode** | **string**|  | |

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

## `campaignschangeStatusdo()`

```php
campaignschangeStatusdo($campaignID, $status): \Leadspedia\Model\InlineResponse200
```

Change Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->campaignschangeStatusdo($campaignID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |
| **status** | **string**|  | |

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

## `campaignscreateFieldsPayoutdo()`

```php
campaignscreateFieldsPayoutdo($campaignID, $fieldID, $fieldValue, $payType, $price, $percentage, $maximumPrice): \Leadspedia\Model\InlineResponse200
```

Create Fields Payout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$fieldID = 56; // int
$fieldValue = 'fieldValue_example'; // string
$payType = 'payType_example'; // string
$price = 56; // int | Required if payType is Fixed
$percentage = 56; // int | Required if payType is Revenue Share
$maximumPrice = 56; // int | Optional if payType is Revenue Share

try {
    $result = $apiInstance->campaignscreateFieldsPayoutdo($campaignID, $fieldID, $fieldValue, $payType, $price, $percentage, $maximumPrice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignscreateFieldsPayoutdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |
| **fieldID** | **int**|  | |
| **fieldValue** | **string**|  | |
| **payType** | **string**|  | |
| **price** | **int**| Required if payType is Fixed | [optional] |
| **percentage** | **int**| Required if payType is Revenue Share | [optional] |
| **maximumPrice** | **int**| Optional if payType is Revenue Share | [optional] |

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

## `campaignsdeleteFieldsPayoutdo()`

```php
campaignsdeleteFieldsPayoutdo($fieldsPayoutID): \Leadspedia\Model\InlineResponse200
```

Delete Fields Payout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldsPayoutID = 56; // int

try {
    $result = $apiInstance->campaignsdeleteFieldsPayoutdo($fieldsPayoutID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsdeleteFieldsPayoutdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fieldsPayoutID** | **int**|  | |

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

## `campaignsdeleteFilterdo()`

```php
campaignsdeleteFilterdo($filterID): \Leadspedia\Model\InlineResponse200
```

Delete Filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filterID = 56; // int

try {
    $result = $apiInstance->campaignsdeleteFilterdo($filterID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsdeleteFilterdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filterID** | **int**|  | |

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

## `campaignsdeletedo()`

```php
campaignsdeletedo($campaignID): \Leadspedia\Model\InlineResponse200
```

Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int

try {
    $result = $apiInstance->campaignsdeletedo($campaignID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |

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

## `campaignsgetAlldo()`

```php
campaignsgetAlldo($campaignID, $affiliateID, $offerID, $verticalID, $status, $search, $start, $limit): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$affiliateID = 56; // int
$offerID = 56; // int
$verticalID = 56; // int
$status = 'status_example'; // string
$search = 'search_example'; // string | Search campaign name
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->campaignsgetAlldo($campaignID, $affiliateID, $offerID, $verticalID, $status, $search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **offerID** | **int**|  | [optional] |
| **verticalID** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |
| **search** | **string**| Search campaign name | [optional] |
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

## `campaignsgetBasicInfodo()`

```php
campaignsgetBasicInfodo($campaignID): \Leadspedia\Model\InlineResponse2001
```

Get

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int

try {
    $result = $apiInstance->campaignsgetBasicInfodo($campaignID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsgetBasicInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |

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

## `campaignsgetFieldsPayoutsdo()`

```php
campaignsgetFieldsPayoutsdo($campaignID, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Fields Payouts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->campaignsgetFieldsPayoutsdo($campaignID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsgetFieldsPayoutsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `campaignsgetFiltersdo()`

```php
campaignsgetFiltersdo($campaignID, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->campaignsgetFiltersdo($campaignID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsgetFiltersdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `campaignsrenamedo()`

```php
campaignsrenamedo($campaignID, $campaignName): \Leadspedia\Model\InlineResponse200
```

Rename

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$campaignName = 'campaignName_example'; // string

try {
    $result = $apiInstance->campaignsrenamedo($campaignID, $campaignName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsrenamedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |
| **campaignName** | **string**|  | |

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

## `campaignsunassignTrackingNumberdo()`

```php
campaignsunassignTrackingNumberdo($campaignID, $number): \Leadspedia\Model\InlineResponse200
```

Unassign Tracking Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$number = 'number_example'; // string | An available phone number

try {
    $result = $apiInstance->campaignsunassignTrackingNumberdo($campaignID, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsunassignTrackingNumberdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |
| **number** | **string**| An available phone number | |

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

## `campaignsupdateBasicInfodo()`

```php
campaignsupdateBasicInfodo($campaignID, $campaignName, $notes, $alternativeID): \Leadspedia\Model\InlineResponse200
```

Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$campaignName = 'campaignName_example'; // string | >= 1 characters
$notes = 'notes_example'; // string
$alternativeID = 'alternativeID_example'; // string

try {
    $result = $apiInstance->campaignsupdateBasicInfodo($campaignID, $campaignName, $notes, $alternativeID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsupdateBasicInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |
| **campaignName** | **string**| &gt;&#x3D; 1 characters | [optional] |
| **notes** | **string**|  | [optional] |
| **alternativeID** | **string**|  | [optional] |

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

## `campaignsupdateCallPostbackURLdo()`

```php
campaignsupdateCallPostbackURLdo($campaignID, $callPostbackURL): \Leadspedia\Model\InlineResponse200
```

Update Call Postback Pixel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$callPostbackURL = 'callPostbackURL_example'; // string

try {
    $result = $apiInstance->campaignsupdateCallPostbackURLdo($campaignID, $callPostbackURL);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsupdateCallPostbackURLdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |
| **callPostbackURL** | **string**|  | [optional] |

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

## `campaignsupdateFieldsPayoutdo()`

```php
campaignsupdateFieldsPayoutdo($fieldsPayoutID, $fieldID, $fieldValue, $payType, $price, $percentage, $maximumPrice): \Leadspedia\Model\InlineResponse200
```

Update Fields Payout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldsPayoutID = 56; // int
$fieldID = 56; // int
$fieldValue = 'fieldValue_example'; // string
$payType = 'payType_example'; // string
$price = 56; // int | Required if payType is Fixed
$percentage = 56; // int | Required if payType is Revenue Share
$maximumPrice = 56; // int | Optional if payType is Revenue Share

try {
    $result = $apiInstance->campaignsupdateFieldsPayoutdo($fieldsPayoutID, $fieldID, $fieldValue, $payType, $price, $percentage, $maximumPrice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsupdateFieldsPayoutdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fieldsPayoutID** | **int**|  | |
| **fieldID** | **int**|  | [optional] |
| **fieldValue** | **string**|  | [optional] |
| **payType** | **string**|  | [optional] |
| **price** | **int**| Required if payType is Fixed | [optional] |
| **percentage** | **int**| Required if payType is Revenue Share | [optional] |
| **maximumPrice** | **int**| Optional if payType is Revenue Share | [optional] |

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

## `campaignsupdatePostbackURLdo()`

```php
campaignsupdatePostbackURLdo($campaignID, $postbackURL): \Leadspedia\Model\InlineResponse200
```

Update Lead Postback Pixel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignID = 56; // int
$postbackURL = 'postbackURL_example'; // string

try {
    $result = $apiInstance->campaignsupdatePostbackURLdo($campaignID, $postbackURL);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignsupdatePostbackURLdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignID** | **int**|  | |
| **postbackURL** | **string**|  | [optional] |

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
