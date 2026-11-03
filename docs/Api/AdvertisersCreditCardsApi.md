# Leadspedia\AdvertisersCreditCardsApi



All URIs are relative to https://api.leadspedia.com/core/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**advertisersCreditCardsadddo()**](AdvertisersCreditCardsApi.md#advertisersCreditCardsadddo) | **POST** /advertisersCreditCards/add.do | Add |
| [**advertisersCreditCardsdeletedo()**](AdvertisersCreditCardsApi.md#advertisersCreditCardsdeletedo) | **POST** /advertisersCreditCards/delete.do | Delete |
| [**advertisersCreditCardsgetAlldo()**](AdvertisersCreditCardsApi.md#advertisersCreditCardsgetAlldo) | **GET** /advertisersCreditCards/getAll.do | Get All |
| [**advertisersCreditCardsgetDefaultdo()**](AdvertisersCreditCardsApi.md#advertisersCreditCardsgetDefaultdo) | **GET** /advertisersCreditCards/getDefault.do | Get Default |
| [**advertisersCreditCardsgetInfodo()**](AdvertisersCreditCardsApi.md#advertisersCreditCardsgetInfodo) | **GET** /advertisersCreditCards/getInfo.do | Get Info |
| [**advertisersCreditCardssetDefaultdo()**](AdvertisersCreditCardsApi.md#advertisersCreditCardssetDefaultdo) | **POST** /advertisersCreditCards/setDefault.do | Set Default |
| [**advertisersCreditCardsupdatePaymentProfileIDdo()**](AdvertisersCreditCardsApi.md#advertisersCreditCardsupdatePaymentProfileIDdo) | **POST** /advertisersCreditCards/updatePaymentProfileID.do | Update Payment Profile ID |
| [**advertisersCreditCardsupdatedo()**](AdvertisersCreditCardsApi.md#advertisersCreditCardsupdatedo) | **POST** /advertisersCreditCards/update.do | Update |


## `advertisersCreditCardsadddo()`

```php
advertisersCreditCardsadddo($advertiserID, $cardNumber, $nameOnCard, $expMonth, $expYear, $cvv, $address, $city, $state, $zipCode, $country, $address2, $defaultCard): \Leadspedia\Model\InlineResponse200
```

Add

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$cardNumber = 'cardNumber_example'; // string
$nameOnCard = 'nameOnCard_example'; // string | First and last name
$expMonth = 'expMonth_example'; // string | 2-digit expiration month (MM)
$expYear = 'expYear_example'; // string | 4-digit expiration year (YYYY)
$cvv = 'cvv_example'; // string | 3 or 4-digit cvv code
$address = 'address_example'; // string
$city = 'city_example'; // string
$state = 'state_example'; // string | 2-character US state or region
$zipCode = 'zipCode_example'; // string | Zip or postal code
$country = 'country_example'; // string | 2-character country code (example: US)
$address2 = 'address2_example'; // string
$defaultCard = 'No'; // string | Make this card a default card. No if not provided.

try {
    $result = $apiInstance->advertisersCreditCardsadddo($advertiserID, $cardNumber, $nameOnCard, $expMonth, $expYear, $cvv, $address, $city, $state, $zipCode, $country, $address2, $defaultCard);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsadddo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **cardNumber** | **string**|  | |
| **nameOnCard** | **string**| First and last name | |
| **expMonth** | **string**| 2-digit expiration month (MM) | |
| **expYear** | **string**| 4-digit expiration year (YYYY) | |
| **cvv** | **string**| 3 or 4-digit cvv code | |
| **address** | **string**|  | |
| **city** | **string**|  | |
| **state** | **string**| 2-character US state or region | |
| **zipCode** | **string**| Zip or postal code | |
| **country** | **string**| 2-character country code (example: US) | |
| **address2** | **string**|  | [optional] |
| **defaultCard** | **string**| Make this card a default card. No if not provided. | [optional] [default to &#39;No&#39;] |

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

## `advertisersCreditCardsdeletedo()`

```php
advertisersCreditCardsdeletedo($advertiserID, $creditCardID): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$creditCardID = 56; // int

try {
    $result = $apiInstance->advertisersCreditCardsdeletedo($advertiserID, $creditCardID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsdeletedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **creditCardID** | **int**|  | |

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

## `advertisersCreditCardsgetAlldo()`

```php
advertisersCreditCardsgetAlldo($advertiserID, $start, $limit): \Leadspedia\Model\InlineResponse2001
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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$start = 0; // int | Offset of the first row to return.
$limit = 100; // int | Maximum number of rows to return. Cannot be greater than 1000.

try {
    $result = $apiInstance->advertisersCreditCardsgetAlldo($advertiserID, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
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

## `advertisersCreditCardsgetDefaultdo()`

```php
advertisersCreditCardsgetDefaultdo($advertiserID): \Leadspedia\Model\InlineResponse2001
```

Get Default

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int

try {
    $result = $apiInstance->advertisersCreditCardsgetDefaultdo($advertiserID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsgetDefaultdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |

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

## `advertisersCreditCardsgetInfodo()`

```php
advertisersCreditCardsgetInfodo($advertiserID, $creditCardID): \Leadspedia\Model\InlineResponse2001
```

Get Info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$creditCardID = 56; // int

try {
    $result = $apiInstance->advertisersCreditCardsgetInfodo($advertiserID, $creditCardID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsgetInfodo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **creditCardID** | **int**|  | |

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

## `advertisersCreditCardssetDefaultdo()`

```php
advertisersCreditCardssetDefaultdo($advertiserID, $creditCardID): \Leadspedia\Model\InlineResponse200
```

Set Default

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserID = 56; // int
$creditCardID = 56; // int

try {
    $result = $apiInstance->advertisersCreditCardssetDefaultdo($advertiserID, $creditCardID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardssetDefaultdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiserID** | **int**|  | |
| **creditCardID** | **int**|  | |

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

## `advertisersCreditCardsupdatePaymentProfileIDdo()`

```php
advertisersCreditCardsupdatePaymentProfileIDdo($creditCardID, $advertiserID, $paymentProfileID, $expMonth, $expYear, $address, $address2, $city, $state, $zipCode, $country): \Leadspedia\Model\InlineResponse200
```

Update Payment Profile ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Leadspedia\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditCardID = 56; // int
$advertiserID = 56; // int
$paymentProfileID = 'paymentProfileID_example'; // string
$expMonth = 'expMonth_example'; // string | 2-digit expiration month (MM)
$expYear = 'expYear_example'; // string | 4-digit expiration year (YYYY)
$address = 'address_example'; // string
$address2 = 'address2_example'; // string
$city = 'city_example'; // string
$state = 'state_example'; // string | 2-character US state or region
$zipCode = 'zipCode_example'; // string | Zip or postal code
$country = 'country_example'; // string | 2-character country code (example: US)

try {
    $result = $apiInstance->advertisersCreditCardsupdatePaymentProfileIDdo($creditCardID, $advertiserID, $paymentProfileID, $expMonth, $expYear, $address, $address2, $city, $state, $zipCode, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsupdatePaymentProfileIDdo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditCardID** | **int**|  | |
| **advertiserID** | **int**|  | |
| **paymentProfileID** | **string**|  | [optional] |
| **expMonth** | **string**| 2-digit expiration month (MM) | [optional] |
| **expYear** | **string**| 4-digit expiration year (YYYY) | [optional] |
| **address** | **string**|  | [optional] |
| **address2** | **string**|  | [optional] |
| **city** | **string**|  | [optional] |
| **state** | **string**| 2-character US state or region | [optional] |
| **zipCode** | **string**| Zip or postal code | [optional] |
| **country** | **string**| 2-character country code (example: US) | [optional] |

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

## `advertisersCreditCardsupdatedo()`

```php
advertisersCreditCardsupdatedo($creditCardID, $advertiserID, $nameOnCard, $expMonth, $expYear, $address, $city, $state, $zipCode, $country, $address2): \Leadspedia\Model\InlineResponse200
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


$apiInstance = new Leadspedia\Api\AdvertisersCreditCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creditCardID = 56; // int
$advertiserID = 56; // int
$nameOnCard = 'nameOnCard_example'; // string | First and last name
$expMonth = 'expMonth_example'; // string | 2-digit expiration month (MM)
$expYear = 'expYear_example'; // string | 4-digit expiration year (YYYY)
$address = 'address_example'; // string
$city = 'city_example'; // string
$state = 'state_example'; // string | 2-character US state or region
$zipCode = 'zipCode_example'; // string | Zip or postal code
$country = 'country_example'; // string | 2-character country code (example: US)
$address2 = 'address2_example'; // string

try {
    $result = $apiInstance->advertisersCreditCardsupdatedo($creditCardID, $advertiserID, $nameOnCard, $expMonth, $expYear, $address, $city, $state, $zipCode, $country, $address2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersCreditCardsApi->advertisersCreditCardsupdatedo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creditCardID** | **int**|  | |
| **advertiserID** | **int**|  | |
| **nameOnCard** | **string**| First and last name | |
| **expMonth** | **string**| 2-digit expiration month (MM) | |
| **expYear** | **string**| 4-digit expiration year (YYYY) | |
| **address** | **string**|  | |
| **city** | **string**|  | |
| **state** | **string**| 2-character US state or region | |
| **zipCode** | **string**| Zip or postal code | |
| **country** | **string**| 2-character country code (example: US) | |
| **address2** | **string**|  | [optional] |

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
