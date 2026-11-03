# Leadspedia\AffiliatesApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**affiliateschangeStatusdo()**](AffiliatesApi.md#affiliateschangeStatusdo) | **POST** /affiliates/changeStatus.do | Change Status |
| [**affiliatescreatedo()**](AffiliatesApi.md#affiliatescreatedo) | **POST** /affiliates/create.do | Create |
| [**affiliatesdeletedo()**](AffiliatesApi.md#affiliatesdeletedo) | **POST** /affiliates/delete.do | Delete |
| [**affiliatesgetAlldo()**](AffiliatesApi.md#affiliatesgetAlldo) | **GET** /affiliates/getAll.do | Get All |
| [**affiliatesgetInfodo()**](AffiliatesApi.md#affiliatesgetInfodo) | **GET** /affiliates/getInfo.do | Get |
| [**affiliatessearchdo()**](AffiliatesApi.md#affiliatessearchdo) | **GET** /affiliates/search.do | Search |
| [**affiliatesupdateBillingdo()**](AffiliatesApi.md#affiliatesupdateBillingdo) | **POST** /affiliates/updateBilling.do | Update Billing |
| [**affiliatesupdateInfodo()**](AffiliatesApi.md#affiliatesupdateInfodo) | **POST** /affiliates/updateInfo.do | Update |


## `affiliateschangeStatusdo()`

```php
affiliateschangeStatusdo($affiliateID, $status): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->affiliateschangeStatusdo($affiliateID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliateschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliateID** | **int**|  | |
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

## `affiliatescreatedo()`

```php
affiliatescreatedo($affiliateName, $accountManagerID, $status): \Leadspedia\Model\InlineResponse200
```

Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateName = 'affiliateName_example'; // string
$accountManagerID = 56; // int
$status = 'status_example'; // string

try {
    $result = $apiInstance->affiliatescreatedo($affiliateName, $accountManagerID, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatescreatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliateName** | **string**|  | |
| **accountManagerID** | **int**|  | |
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

## `affiliatesdeletedo()`

```php
affiliatesdeletedo($affiliateID): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int

try {
    $result = $apiInstance->affiliatesdeletedo($affiliateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliateID** | **int**|  | |

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

## `affiliatesgetAlldo()`

```php
affiliatesgetAlldo($status, $search, $affiliateID, $accountManagerID, $start, $limit): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string
$search = 'search_example'; // string
$affiliateID = 56; // int
$accountManagerID = 56; // int
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->affiliatesgetAlldo($status, $search, $affiliateID, $accountManagerID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |
| **affiliateID** | **int**|  | [optional] |
| **accountManagerID** | **int**|  | [optional] |
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

## `affiliatesgetInfodo()`

```php
affiliatesgetInfodo($affiliateID): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int

try {
    $result = $apiInstance->affiliatesgetInfodo($affiliateID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesgetInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliateID** | **int**|  | |

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

## `affiliatessearchdo()`

```php
affiliatessearchdo($search, $start, $limit): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->affiliatessearchdo($search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatessearchdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | |
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

## `affiliatesupdateBillingdo()`

```php
affiliatesupdateBillingdo($affiliateID, $billingCycle): \Leadspedia\Model\InlineResponse200
```

Update Billing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int
$billingCycle = 'billingCycle_example'; // string

try {
    $result = $apiInstance->affiliatesupdateBillingdo($affiliateID, $billingCycle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesupdateBillingdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliateID** | **int**|  | |
| **billingCycle** | **string**|  | [optional] |

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

## `affiliatesupdateInfodo()`

```php
affiliatesupdateInfodo($affiliateID, $affiliateName, $alternateID, $address, $address2, $city, $state, $zipCode, $country, $website): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliateID = 56; // int
$affiliateName = 'affiliateName_example'; // string | >= 1 characters
$alternateID = 'alternateID_example'; // string
$address = 'address_example'; // string
$address2 = 'address2_example'; // string
$city = 'city_example'; // string
$state = 'state_example'; // string
$zipCode = 'zipCode_example'; // string
$country = 'country_example'; // string
$website = 'website_example'; // string

try {
    $result = $apiInstance->affiliatesupdateInfodo($affiliateID, $affiliateName, $alternateID, $address, $address2, $city, $state, $zipCode, $country, $website);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesupdateInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **affiliateID** | **int**|  | |
| **affiliateName** | **string**| &gt;&#x3D; 1 characters | [optional] |
| **alternateID** | **string**|  | [optional] |
| **address** | **string**|  | [optional] |
| **address2** | **string**|  | [optional] |
| **city** | **string**|  | [optional] |
| **state** | **string**|  | [optional] |
| **zipCode** | **string**|  | [optional] |
| **country** | **string**|  | [optional] |
| **website** | **string**|  | [optional] |

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
