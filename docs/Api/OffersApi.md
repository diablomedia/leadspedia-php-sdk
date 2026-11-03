# Leadspedia\OffersApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**offerschangeModedo()**](OffersApi.md#offerschangeModedo) | **POST** /offers/changeMode.do | Change Mode |
| [**offerschangeStatusdo()**](OffersApi.md#offerschangeStatusdo) | **POST** /offers/changeStatus.do | Change Status |
| [**offersdeletedo()**](OffersApi.md#offersdeletedo) | **POST** /offers/delete.do | Delete |
| [**offersgetAlldo()**](OffersApi.md#offersgetAlldo) | **GET** /offers/getAll.do | Get All |
| [**offersgetBasicInfodo()**](OffersApi.md#offersgetBasicInfodo) | **GET** /offers/getBasicInfo.do | Get |
| [**offersgetCallRoutingContractsdo()**](OffersApi.md#offersgetCallRoutingContractsdo) | **GET** /offers/getCallRoutingContracts.do | Get Call Contracts |
| [**offersgetEmailSettingsdo()**](OffersApi.md#offersgetEmailSettingsdo) | **GET** /offers/getEmailSettings.do | Get Email Settings |
| [**offersgetLeadContractsdo()**](OffersApi.md#offersgetLeadContractsdo) | **GET** /offers/getLeadContracts.do | Get Lead Contracts |
| [**offersgetTermsSettingsdo()**](OffersApi.md#offersgetTermsSettingsdo) | **GET** /offers/getTermsSettings.do | Get Terms Settings |
| [**offersremoveExpirationDatedo()**](OffersApi.md#offersremoveExpirationDatedo) | **POST** /offers/removeExpirationDate.do | Remove Expiration Date |
| [**offersrenamedo()**](OffersApi.md#offersrenamedo) | **POST** /offers/rename.do | Rename |
| [**offerssearchdo()**](OffersApi.md#offerssearchdo) | **GET** /offers/search.do | Search |
| [**offerssetExpirationDatedo()**](OffersApi.md#offerssetExpirationDatedo) | **POST** /offers/setExpirationDate.do | Set Expiration Date |
| [**offersupdateBasicInfodo()**](OffersApi.md#offersupdateBasicInfodo) | **POST** /offers/updateBasicInfo.do | Update |
| [**offersupdateEmailSettingsdo()**](OffersApi.md#offersupdateEmailSettingsdo) | **POST** /offers/updateEmailSettings.do | Update Email Settings |
| [**offersupdateTermsSettingsdo()**](OffersApi.md#offersupdateTermsSettingsdo) | **POST** /offers/updateTermsSettings.do | Update Terms Settings |
| [**offersupdateVisibilitydo()**](OffersApi.md#offersupdateVisibilitydo) | **POST** /offers/updateVisibility.do | Update Visibility |


## `offerschangeModedo()`

```php
offerschangeModedo($offerID, $mode): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$mode = 'mode_example'; // string

try {
    $result = $apiInstance->offerschangeModedo($offerID, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerschangeModedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |
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

## `offerschangeStatusdo()`

```php
offerschangeStatusdo($offerID, $status): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->offerschangeStatusdo($offerID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |
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

## `offersdeletedo()`

```php
offersdeletedo($offerID): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int

try {
    $result = $apiInstance->offersdeletedo($offerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |

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

## `offersgetAlldo()`

```php
offersgetAlldo($verticalID, $advertiserID, $status, $payoutModel, $revenueModel, $start, $limit): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$advertiserID = 56; // int
$status = 'status_example'; // string
$payoutModel = 'payoutModel_example'; // string
$revenueModel = 'revenueModel_example'; // string
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->offersgetAlldo($verticalID, $advertiserID, $status, $payoutModel, $revenueModel, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **verticalID** | **int**|  | [optional] |
| **advertiserID** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |
| **payoutModel** | **string**|  | [optional] |
| **revenueModel** | **string**|  | [optional] |
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

## `offersgetBasicInfodo()`

```php
offersgetBasicInfodo($offerID): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int

try {
    $result = $apiInstance->offersgetBasicInfodo($offerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetBasicInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |

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

## `offersgetCallRoutingContractsdo()`

```php
offersgetCallRoutingContractsdo($offerID, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Call Contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->offersgetCallRoutingContractsdo($offerID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetCallRoutingContractsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |
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

## `offersgetEmailSettingsdo()`

```php
offersgetEmailSettingsdo($offerID): \Leadspedia\Model\InlineResponse2001
```

Get Email Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int

try {
    $result = $apiInstance->offersgetEmailSettingsdo($offerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetEmailSettingsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |

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

## `offersgetLeadContractsdo()`

```php
offersgetLeadContractsdo($offerID, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Get Lead Contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->offersgetLeadContractsdo($offerID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetLeadContractsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | [optional] |
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

## `offersgetTermsSettingsdo()`

```php
offersgetTermsSettingsdo($offerID): \Leadspedia\Model\InlineResponse2001
```

Get Terms Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int

try {
    $result = $apiInstance->offersgetTermsSettingsdo($offerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetTermsSettingsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |

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

## `offersremoveExpirationDatedo()`

```php
offersremoveExpirationDatedo($offerID): \Leadspedia\Model\InlineResponse200
```

Remove Expiration Date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int

try {
    $result = $apiInstance->offersremoveExpirationDatedo($offerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersremoveExpirationDatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |

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

## `offersrenamedo()`

```php
offersrenamedo($offerID, $offerName): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$offerName = 'offerName_example'; // string

try {
    $result = $apiInstance->offersrenamedo($offerID, $offerName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersrenamedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |
| **offerName** | **string**|  | |

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

## `offerssearchdo()`

```php
offerssearchdo($name, $start, $limit): \Leadspedia\Model\InlineResponse2001
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->offerssearchdo($name, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerssearchdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | [optional] |
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

## `offerssetExpirationDatedo()`

```php
offerssetExpirationDatedo($offerID, $expirationDate): \Leadspedia\Model\InlineResponse200
```

Set Expiration Date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$expirationDate = 'expirationDate_example'; // string

try {
    $result = $apiInstance->offerssetExpirationDatedo($offerID, $expirationDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerssetExpirationDatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |
| **expirationDate** | **string**|  | |

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

## `offersupdateBasicInfodo()`

```php
offersupdateBasicInfodo($offerID, $offerName, $alternativeID, $notes, $previewURL, $offerDescription, $testingInstructions, $offerRestrictions): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$offerName = 'offerName_example'; // string | >= 1 characters
$alternativeID = 'alternativeID_example'; // string
$notes = 'notes_example'; // string
$previewURL = 'previewURL_example'; // string
$offerDescription = 'offerDescription_example'; // string
$testingInstructions = 'testingInstructions_example'; // string
$offerRestrictions = 'offerRestrictions_example'; // string

try {
    $result = $apiInstance->offersupdateBasicInfodo($offerID, $offerName, $alternativeID, $notes, $previewURL, $offerDescription, $testingInstructions, $offerRestrictions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateBasicInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |
| **offerName** | **string**| &gt;&#x3D; 1 characters | [optional] |
| **alternativeID** | **string**|  | [optional] |
| **notes** | **string**|  | [optional] |
| **previewURL** | **string**|  | [optional] |
| **offerDescription** | **string**|  | [optional] |
| **testingInstructions** | **string**|  | [optional] |
| **offerRestrictions** | **string**|  | [optional] |

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

## `offersupdateEmailSettingsdo()`

```php
offersupdateEmailSettingsdo($offerID, $testEmail, $allowedEmails, $allowedSubjects, $emailInstructions): \Leadspedia\Model\InlineResponse200
```

Update Email Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$testEmail = 'testEmail_example'; // string
$allowedEmails = 'allowedEmails_example'; // string | Enter multiple values by separating them with commas (,)
$allowedSubjects = 'allowedSubjects_example'; // string | Enter multiple values by separating them with commas (,)
$emailInstructions = 'emailInstructions_example'; // string

try {
    $result = $apiInstance->offersupdateEmailSettingsdo($offerID, $testEmail, $allowedEmails, $allowedSubjects, $emailInstructions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateEmailSettingsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |
| **testEmail** | **string**|  | [optional] |
| **allowedEmails** | **string**| Enter multiple values by separating them with commas (,) | [optional] |
| **allowedSubjects** | **string**| Enter multiple values by separating them with commas (,) | [optional] |
| **emailInstructions** | **string**|  | [optional] |

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

## `offersupdateTermsSettingsdo()`

```php
offersupdateTermsSettingsdo($offerID, $termsEnabled, $terms): \Leadspedia\Model\InlineResponse200
```

Update Terms Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$termsEnabled = 'termsEnabled_example'; // string
$terms = 'terms_example'; // string

try {
    $result = $apiInstance->offersupdateTermsSettingsdo($offerID, $termsEnabled, $terms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateTermsSettingsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |
| **termsEnabled** | **string**|  | [optional] |
| **terms** | **string**|  | [optional] |

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

## `offersupdateVisibilitydo()`

```php
offersupdateVisibilitydo($offerID, $visibility): \Leadspedia\Model\InlineResponse200
```

Update Visibility

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$visibility = 'visibility_example'; // string

try {
    $result = $apiInstance->offersupdateVisibilitydo($offerID, $visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateVisibilitydo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerID** | **int**|  | |
| **visibility** | **string**|  | |

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
