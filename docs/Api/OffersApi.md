# Leadspedia\OffersApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**offerschangeAutoApprovaldo**](OffersApi.md#offerschangeAutoApprovaldo) | **POST** /offers/changeAutoApproval.do | Change Auto Approval
[**offerschangeFeatureListingdo**](OffersApi.md#offerschangeFeatureListingdo) | **POST** /offers/changeFeatureListing.do | Change Feature Listing
[**offerschangeModedo**](OffersApi.md#offerschangeModedo) | **POST** /offers/changeMode.do | Change Mode
[**offerschangeStatusdo**](OffersApi.md#offerschangeStatusdo) | **POST** /offers/changeStatus.do | Change Status
[**offersdeletedo**](OffersApi.md#offersdeletedo) | **POST** /offers/delete.do | Delete
[**offersgetAlldo**](OffersApi.md#offersgetAlldo) | **GET** /offers/getAll.do | Get All
[**offersgetBasicInfodo**](OffersApi.md#offersgetBasicInfodo) | **GET** /offers/getBasicInfo.do | Get Basic Info
[**offersgetEmailSettingsdo**](OffersApi.md#offersgetEmailSettingsdo) | **GET** /offers/getEmailSettings.do | Get Email Settings
[**offersgetTermsSettingsdo**](OffersApi.md#offersgetTermsSettingsdo) | **GET** /offers/getTermsSettings.do | Get Terms Settings
[**offersremoveExpirationDatedo**](OffersApi.md#offersremoveExpirationDatedo) | **POST** /offers/removeExpirationDate.do | Remove Expiration Date
[**offersrenamedo**](OffersApi.md#offersrenamedo) | **POST** /offers/rename.do | Rename
[**offerssearchdo**](OffersApi.md#offerssearchdo) | **GET** /offers/search.do | Search
[**offerssetExpirationDatedo**](OffersApi.md#offerssetExpirationDatedo) | **POST** /offers/setExpirationDate.do | Set Expiration Date
[**offersupdateBasicInfodo**](OffersApi.md#offersupdateBasicInfodo) | **POST** /offers/updateBasicInfo.do | Update Basic Info
[**offersupdateEmailSettingsdo**](OffersApi.md#offersupdateEmailSettingsdo) | **POST** /offers/updateEmailSettings.do | Update Email Settings
[**offersupdateTermsSettingsdo**](OffersApi.md#offersupdateTermsSettingsdo) | **POST** /offers/updateTermsSettings.do | Update Terms Settings
[**offersupdateVisibilitydo**](OffersApi.md#offersupdateVisibilitydo) | **POST** /offers/updateVisibility.do | Update Visibility



## offerschangeAutoApprovaldo

> offerschangeAutoApprovaldo($offerID, $autoApprove)

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
$offerID = 56; // int | 
$autoApprove = 'autoApprove_example'; // string | 

try {
    $apiInstance->offerschangeAutoApprovaldo($offerID, $autoApprove);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerschangeAutoApprovaldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **autoApprove** | **string**|  |

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


## offerschangeFeatureListingdo

> offerschangeFeatureListingdo($offerID, $feature)

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
$offerID = 56; // int | 
$feature = 'feature_example'; // string | 

try {
    $apiInstance->offerschangeFeatureListingdo($offerID, $feature);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerschangeFeatureListingdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **feature** | **string**|  |

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


## offerschangeModedo

> offerschangeModedo($offerID, $mode)

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
$offerID = 56; // int | 
$mode = 'mode_example'; // string | 

try {
    $apiInstance->offerschangeModedo($offerID, $mode);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerschangeModedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **mode** | **string**|  |

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


## offerschangeStatusdo

> offerschangeStatusdo($offerID, $status)

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
$offerID = 56; // int | 
$status = 'status_example'; // string | 

try {
    $apiInstance->offerschangeStatusdo($offerID, $status);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **status** | **string**|  |

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


## offersdeletedo

> offersdeletedo($offerID)

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
$offerID = 56; // int | 

try {
    $apiInstance->offersdeletedo($offerID);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersdeletedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

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


## offersgetAlldo

> object offersgetAlldo($verticalID, $revenueModel, $payoutModel, $advertiserID, $status, $start, $limit)

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
$verticalID = 56; // int | 
$revenueModel = 'revenueModel_example'; // string | 
$payoutModel = 'payoutModel_example'; // string | 
$advertiserID = 56; // int | 
$status = 'status_example'; // string | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->offersgetAlldo($verticalID, $revenueModel, $payoutModel, $advertiserID, $status, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
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

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## offersgetBasicInfodo

> object offersgetBasicInfodo($offerID)

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
$offerID = 56; // int | 

try {
    $result = $apiInstance->offersgetBasicInfodo($offerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetBasicInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## offersgetEmailSettingsdo

> object offersgetEmailSettingsdo($offerID)

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
$offerID = 56; // int | 

try {
    $result = $apiInstance->offersgetEmailSettingsdo($offerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetEmailSettingsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## offersgetTermsSettingsdo

> object offersgetTermsSettingsdo($offerID)

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
$offerID = 56; // int | 

try {
    $result = $apiInstance->offersgetTermsSettingsdo($offerID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersgetTermsSettingsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## offersremoveExpirationDatedo

> offersremoveExpirationDatedo($offerID)

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
$offerID = 56; // int | 

try {
    $apiInstance->offersremoveExpirationDatedo($offerID);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersremoveExpirationDatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |

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


## offersrenamedo

> offersrenamedo($offerID, $offerName)

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
$offerID = 56; // int | 
$offerName = 'offerName_example'; // string | 

try {
    $apiInstance->offersrenamedo($offerID, $offerName);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersrenamedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **offerName** | **string**|  |

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


## offerssearchdo

> object offerssearchdo($name, $start, $limit)

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
$name = 'name_example'; // string | 
$start = 0; // int | 
$limit = 100; // int | 

try {
    $result = $apiInstance->offerssearchdo($name, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerssearchdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **start** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 100]

### Return type

**object**

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## offerssetExpirationDatedo

> offerssetExpirationDatedo($offerID, $expirationDate)

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
$offerID = 56; // int | 
$expirationDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $apiInstance->offerssetExpirationDatedo($offerID, $expirationDate);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerssetExpirationDatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **expirationDate** | **\DateTime**|  |

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


## offersupdateBasicInfodo

> offersupdateBasicInfodo($offerID, $offerName, $notes, $alternativeID, $previewURL, $offerDescription, $testingInstructions, $offerRestrictions)

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
$offerID = 56; // int | 
$offerName = 'offerName_example'; // string | 
$notes = 'notes_example'; // string | 
$alternativeID = 'alternativeID_example'; // string | 
$previewURL = 'previewURL_example'; // string | 
$offerDescription = 'offerDescription_example'; // string | 
$testingInstructions = 'testingInstructions_example'; // string | 
$offerRestrictions = 'offerRestrictions_example'; // string | 

try {
    $apiInstance->offersupdateBasicInfodo($offerID, $offerName, $notes, $alternativeID, $previewURL, $offerDescription, $testingInstructions, $offerRestrictions);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateBasicInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
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

void (empty response body)

### Authorization

[apiKey0](../../README.md#apiKey0), [apiKey1](../../README.md#apiKey1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## offersupdateEmailSettingsdo

> offersupdateEmailSettingsdo($offerID, $testEmail, $allowedEmails, $allowedSubjects, $emailInstructions)

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
$offerID = 56; // int | 
$testEmail = 'testEmail_example'; // string | 
$allowedEmails = 'allowedEmails_example'; // string | 
$allowedSubjects = 'allowedSubjects_example'; // string | 
$emailInstructions = 'emailInstructions_example'; // string | 

try {
    $apiInstance->offersupdateEmailSettingsdo($offerID, $testEmail, $allowedEmails, $allowedSubjects, $emailInstructions);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateEmailSettingsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **testEmail** | [**string**](../Model/.md)|  | [optional]
 **allowedEmails** | [**string**](../Model/.md)|  | [optional]
 **allowedSubjects** | [**string**](../Model/.md)|  | [optional]
 **emailInstructions** | **string**|  | [optional]

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


## offersupdateTermsSettingsdo

> offersupdateTermsSettingsdo($offerID, $terms, $termsEnabled)

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
$offerID = 56; // int | 
$terms = 'terms_example'; // string | 
$termsEnabled = 'termsEnabled_example'; // string | 

try {
    $apiInstance->offersupdateTermsSettingsdo($offerID, $terms, $termsEnabled);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateTermsSettingsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **terms** | **string**|  | [optional]
 **termsEnabled** | **string**|  | [optional]

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


## offersupdateVisibilitydo

> offersupdateVisibilitydo($offerID, $visibility)

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
$offerID = 56; // int | 
$visibility = 'visibility_example'; // string | 

try {
    $apiInstance->offersupdateVisibilitydo($offerID, $visibility);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersupdateVisibilitydo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerID** | **int**|  |
 **visibility** | **string**|  |

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

