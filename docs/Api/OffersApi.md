# Leadspedia\OffersApi

All URIs are relative to https://api.leadspedia.com/core/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**offerschangeAutoApprovaldo()**](OffersApi.md#offerschangeAutoApprovaldo) | **POST** /offers/changeAutoApproval.do | Change Auto Approval
[**offerschangeFeatureListingdo()**](OffersApi.md#offerschangeFeatureListingdo) | **POST** /offers/changeFeatureListing.do | Change Feature Listing
[**offerschangeModedo()**](OffersApi.md#offerschangeModedo) | **POST** /offers/changeMode.do | Change Mode
[**offerschangeStatusdo()**](OffersApi.md#offerschangeStatusdo) | **POST** /offers/changeStatus.do | Change Status
[**offersdeletedo()**](OffersApi.md#offersdeletedo) | **POST** /offers/delete.do | Delete
[**offersgetAlldo()**](OffersApi.md#offersgetAlldo) | **GET** /offers/getAll.do | Get All
[**offersgetBasicInfodo()**](OffersApi.md#offersgetBasicInfodo) | **GET** /offers/getBasicInfo.do | Get Basic Info
[**offersgetEmailSettingsdo()**](OffersApi.md#offersgetEmailSettingsdo) | **GET** /offers/getEmailSettings.do | Get Email Settings
[**offersgetTermsSettingsdo()**](OffersApi.md#offersgetTermsSettingsdo) | **GET** /offers/getTermsSettings.do | Get Terms Settings
[**offersremoveExpirationDatedo()**](OffersApi.md#offersremoveExpirationDatedo) | **POST** /offers/removeExpirationDate.do | Remove Expiration Date
[**offersrenamedo()**](OffersApi.md#offersrenamedo) | **POST** /offers/rename.do | Rename
[**offerssearchdo()**](OffersApi.md#offerssearchdo) | **GET** /offers/search.do | Search
[**offerssetExpirationDatedo()**](OffersApi.md#offerssetExpirationDatedo) | **POST** /offers/setExpirationDate.do | Set Expiration Date
[**offersupdateBasicInfodo()**](OffersApi.md#offersupdateBasicInfodo) | **POST** /offers/updateBasicInfo.do | Update Basic Info
[**offersupdateEmailSettingsdo()**](OffersApi.md#offersupdateEmailSettingsdo) | **POST** /offers/updateEmailSettings.do | Update Email Settings
[**offersupdateTermsSettingsdo()**](OffersApi.md#offersupdateTermsSettingsdo) | **POST** /offers/updateTermsSettings.do | Update Terms Settings
[**offersupdateVisibilitydo()**](OffersApi.md#offersupdateVisibilitydo) | **POST** /offers/updateVisibility.do | Update Visibility


## `offerschangeAutoApprovaldo()`

```php
offerschangeAutoApprovaldo($offerID, $autoApprove): \Leadspedia\Model\Affiliatescreatedo200Response
```

Change Auto Approval

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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$autoApprove = 'autoApprove_example'; // string

try {
    $result = $apiInstance->offerschangeAutoApprovaldo($offerID, $autoApprove);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerschangeAutoApprovaldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **autoApprove** | **string**|  |

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

## `offerschangeFeatureListingdo()`

```php
offerschangeFeatureListingdo($offerID, $feature): \Leadspedia\Model\Affiliatescreatedo200Response
```

Change Feature Listing

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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$feature = 'feature_example'; // string

try {
    $result = $apiInstance->offerschangeFeatureListingdo($offerID, $feature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerschangeFeatureListingdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **feature** | **string**|  |

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

## `offerschangeModedo()`

```php
offerschangeModedo($offerID, $mode): \Leadspedia\Model\Affiliatescreatedo200Response
```

Change Mode

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **mode** | **string**|  |

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

## `offerschangeStatusdo()`

```php
offerschangeStatusdo($offerID, $status): \Leadspedia\Model\Affiliatescreatedo200Response
```

Change Status

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **status** | **string**|  |

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

## `offersdeletedo()`

```php
offersdeletedo($offerID): \Leadspedia\Model\Affiliatescreatedo200Response
```

Delete

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

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

## `offersgetAlldo()`

```php
offersgetAlldo($verticalID, $revenueModel, $payoutModel, $advertiserID, $status, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verticalID = 56; // int
$revenueModel = 'revenueModel_example'; // string
$payoutModel = 'payoutModel_example'; // string
$advertiserID = 56; // int
$status = 'status_example'; // string
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->offersgetAlldo($verticalID, $revenueModel, $payoutModel, $advertiserID, $status, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verticalID** | **int**|  | [optional]
 **revenueModel** | **string**|  | [optional]
 **payoutModel** | **string**|  | [optional]
 **advertiserID** | **int**|  | [optional]
 **status** | **string**|  | [optional]
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

## `offersgetBasicInfodo()`

```php
offersgetBasicInfodo($offerID): \Leadspedia\Model\VerticalsgetAlldo200Response
```

Get Basic Info

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

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

## `offersgetEmailSettingsdo()`

```php
offersgetEmailSettingsdo($offerID): \Leadspedia\Model\VerticalsgetAlldo200Response
```

Get Email Settings

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

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

## `offersgetTermsSettingsdo()`

```php
offersgetTermsSettingsdo($offerID): \Leadspedia\Model\VerticalsgetAlldo200Response
```

Get Terms Settings

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

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

## `offersremoveExpirationDatedo()`

```php
offersremoveExpirationDatedo($offerID): \Leadspedia\Model\Affiliatescreatedo200Response
```

Remove Expiration Date

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

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

## `offersrenamedo()`

```php
offersrenamedo($offerID, $offerName): \Leadspedia\Model\Affiliatescreatedo200Response
```

Rename

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **offerName** | **string**|  |

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

## `offerssearchdo()`

```php
offerssearchdo($name, $start, $limit): \Leadspedia\Model\VerticalsgetAlldo200Response
```

Search

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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$start = 0; // int
$limit = 100; // int

try {
    $result = $apiInstance->offerssearchdo($name, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerssearchdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
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

## `offerssetExpirationDatedo()`

```php
offerssetExpirationDatedo($offerID, $expirationDate): \Leadspedia\Model\Affiliatescreatedo200Response
```

Set Expiration Date

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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$expirationDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->offerssetExpirationDatedo($offerID, $expirationDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerssetExpirationDatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **expirationDate** | **\DateTime**|  |

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

## `offersupdateBasicInfodo()`

```php
offersupdateBasicInfodo($offerID, $offerName, $notes, $alternativeID, $previewURL, $offerDescription, $testingInstructions, $offerRestrictions): \Leadspedia\Model\Affiliatescreatedo200Response
```

Update Basic Info

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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$offerName = 'offerName_example'; // string
$notes = 'notes_example'; // string
$alternativeID = 'alternativeID_example'; // string
$previewURL = 'previewURL_example'; // string
$offerDescription = 'offerDescription_example'; // string
$testingInstructions = 'testingInstructions_example'; // string
$offerRestrictions = 'offerRestrictions_example'; // string

try {
    $result = $apiInstance->offersupdateBasicInfodo($offerID, $offerName, $notes, $alternativeID, $previewURL, $offerDescription, $testingInstructions, $offerRestrictions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateBasicInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **offerName** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **alternativeID** | **string**|  | [optional]
 **previewURL** | **string**|  | [optional]
 **offerDescription** | **string**|  | [optional]
 **testingInstructions** | **string**|  | [optional]
 **offerRestrictions** | **string**|  | [optional]

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

## `offersupdateEmailSettingsdo()`

```php
offersupdateEmailSettingsdo($offerID, $testEmail, $allowedEmails, $allowedSubjects, $emailInstructions): \Leadspedia\Model\Affiliatescreatedo200Response
```

Update Email Settings

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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$testEmail = 'testEmail_example'; // string
$allowedEmails = 'allowedEmails_example'; // string
$allowedSubjects = 'allowedSubjects_example'; // string
$emailInstructions = 'emailInstructions_example'; // string

try {
    $result = $apiInstance->offersupdateEmailSettingsdo($offerID, $testEmail, $allowedEmails, $allowedSubjects, $emailInstructions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateEmailSettingsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **testEmail** | **string**|  | [optional]
 **allowedEmails** | **string**|  | [optional]
 **allowedSubjects** | **string**|  | [optional]
 **emailInstructions** | **string**|  | [optional]

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

## `offersupdateTermsSettingsdo()`

```php
offersupdateTermsSettingsdo($offerID, $terms, $termsEnabled): \Leadspedia\Model\Affiliatescreatedo200Response
```

Update Terms Settings

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


$apiInstance = new Leadspedia\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerID = 56; // int
$terms = 'terms_example'; // string
$termsEnabled = 'termsEnabled_example'; // string

try {
    $result = $apiInstance->offersupdateTermsSettingsdo($offerID, $terms, $termsEnabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateTermsSettingsdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **terms** | **string**|  | [optional]
 **termsEnabled** | **string**|  | [optional]

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

## `offersupdateVisibilitydo()`

```php
offersupdateVisibilitydo($offerID, $visibility): \Leadspedia\Model\Affiliatescreatedo200Response
```

Update Visibility

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **visibility** | **string**|  |

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
