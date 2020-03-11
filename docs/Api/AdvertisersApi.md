# LeadspediaApi\AdvertisersApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advertisersadjustCreditdo**](AdvertisersApi.md#advertisersadjustcreditdo) | **POST** /advertisers/adjustCredit.do | Adjust Credit
[**advertiserschangeStatusdo**](AdvertisersApi.md#advertiserschangestatusdo) | **POST** /advertisers/changeStatus.do | Change Status
[**advertiserscreatedo**](AdvertisersApi.md#advertiserscreatedo) | **POST** /advertisers/create.do | Create
[**advertisersdeletedo**](AdvertisersApi.md#advertisersdeletedo) | **POST** /advertisers/delete.do | Delete
[**advertisersenableCreditdo**](AdvertisersApi.md#advertisersenablecreditdo) | **POST** /advertisers/enableCredit.do | Enable Credit
[**advertisersgetAlldo**](AdvertisersApi.md#advertisersgetalldo) | **GET** /advertisers/getAll.do | Get All
[**advertisersgetInfodo**](AdvertisersApi.md#advertisersgetinfodo) | **GET** /advertisers/getInfo.do | Get Info
[**advertiserssearchdo**](AdvertisersApi.md#advertiserssearchdo) | **GET** /advertisers/search.do | Search
[**advertisersupdateAuthorizeNetCustomerProfileIDdo**](AdvertisersApi.md#advertisersupdateauthorizenetcustomerprofileiddo) | **POST** /advertisers/updateAuthorizeNetCustomerProfileID.do | Update Authorize Net Customer Profile ID
[**advertisersupdateAutoRechargeSettingsdo**](AdvertisersApi.md#advertisersupdateautorechargesettingsdo) | **POST** /advertisers/updateAutoRechargeSettings.do | Update Auto Recharge Settings
[**advertisersupdateBillingdo**](AdvertisersApi.md#advertisersupdatebillingdo) | **POST** /advertisers/updateBilling.do | Update Billing
[**advertisersupdateInfodo**](AdvertisersApi.md#advertisersupdateinfodo) | **POST** /advertisers/updateInfo.do | Update Info
[**advertisersupdatePortalSettingsdo**](AdvertisersApi.md#advertisersupdateportalsettingsdo) | **POST** /advertisers/updatePortalSettings.do | Update Portal Settings

# **advertisersadjustCreditdo**
> advertisersadjustCreditdo($advertiser_id, $type, $amount, $charge, $generate_invoice, $note)

Adjust Credit

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$type = "type_example"; // string | 
$amount = new \LeadspediaApi\Model\BigDecimal(); // BigDecimal | 
$charge = "charge_example"; // string | 
$generate_invoice = "generate_invoice_example"; // string | 
$note = "note_example"; // string | 

try {
    $apiInstance->advertisersadjustCreditdo($advertiser_id, $type, $amount, $charge, $generate_invoice, $note);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersadjustCreditdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **type** | **string**|  |
 **amount** | **BigDecimal**|  |
 **charge** | **string**|  | [optional]
 **generate_invoice** | **string**|  | [optional]
 **note** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertiserschangeStatusdo**
> advertiserschangeStatusdo($advertiser_id, $status)

Change Status

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$status = "status_example"; // string | 

try {
    $apiInstance->advertiserschangeStatusdo($advertiser_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertiserschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **status** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertiserscreatedo**
> advertiserscreatedo($advertiser_name, $account_manager_id, $status)

Create

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_name = "advertiser_name_example"; // string | 
$account_manager_id = 56; // int | 
$status = "status_example"; // string | 

try {
    $apiInstance->advertiserscreatedo($advertiser_name, $account_manager_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertiserscreatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_name** | **string**|  |
 **account_manager_id** | **int**|  |
 **status** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersdeletedo**
> advertisersdeletedo($advertiser_id)

Delete

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 

try {
    $apiInstance->advertisersdeletedo($advertiser_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersdeletedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersenableCreditdo**
> advertisersenableCreditdo($advertiser_id)

Enable Credit

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 

try {
    $apiInstance->advertisersenableCreditdo($advertiser_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersenableCreditdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersgetAlldo**
> object advertisersgetAlldo($advertiser_id, $advertiser_type, $account_manager_id, $status, $is_credit_enabled, $has_credit_card_on_file, $search, $start, $limit)

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$advertiser_type = "advertiser_type_example"; // string | 
$account_manager_id = 56; // int | 
$status = "status_example"; // string | 
$is_credit_enabled = "is_credit_enabled_example"; // string | 
$has_credit_card_on_file = "has_credit_card_on_file_example"; // string | 
$search = "search_example"; // string | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->advertisersgetAlldo($advertiser_id, $advertiser_type, $account_manager_id, $status, $is_credit_enabled, $has_credit_card_on_file, $search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  | [optional]
 **advertiser_type** | **string**|  | [optional]
 **account_manager_id** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **is_credit_enabled** | **string**|  | [optional]
 **has_credit_card_on_file** | **string**|  | [optional]
 **search** | **string**|  | [optional]
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

# **advertisersgetInfodo**
> advertisersgetInfodo($advertiser_id)

Get Info

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 

try {
    $apiInstance->advertisersgetInfodo($advertiser_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersgetInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertiserssearchdo**
> advertiserssearchdo($search, $start, $limit)

Search

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->advertiserssearchdo($search, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertiserssearchdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**|  |
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

# **advertisersupdateAuthorizeNetCustomerProfileIDdo**
> advertisersupdateAuthorizeNetCustomerProfileIDdo($advertiser_id, $auth_net_customer_profile_id)

Update Authorize Net Customer Profile ID

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$auth_net_customer_profile_id = "auth_net_customer_profile_id_example"; // string | 

try {
    $apiInstance->advertisersupdateAuthorizeNetCustomerProfileIDdo($advertiser_id, $auth_net_customer_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateAuthorizeNetCustomerProfileIDdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **auth_net_customer_profile_id** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersupdateAutoRechargeSettingsdo**
> advertisersupdateAutoRechargeSettingsdo($advertiser_id, $enable_auto_recharge, $auto_charge_balance, $auto_charge_amount)

Update Auto Recharge Settings

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$enable_auto_recharge = "enable_auto_recharge_example"; // string | 
$auto_charge_balance = new \LeadspediaApi\Model\BigDecimal(); // BigDecimal | 
$auto_charge_amount = new \LeadspediaApi\Model\BigDecimal(); // BigDecimal | 

try {
    $apiInstance->advertisersupdateAutoRechargeSettingsdo($advertiser_id, $enable_auto_recharge, $auto_charge_balance, $auto_charge_amount);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateAutoRechargeSettingsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **enable_auto_recharge** | **string**|  | [optional]
 **auto_charge_balance** | **BigDecimal**|  | [optional]
 **auto_charge_amount** | **BigDecimal**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersupdateBillingdo**
> advertisersupdateBillingdo($advertiser_id, $billing_cycle, $tax_id, $tax_class)

Update Billing

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$billing_cycle = "billing_cycle_example"; // string | 
$tax_id = "tax_id_example"; // string | 
$tax_class = "tax_class_example"; // string | 

try {
    $apiInstance->advertisersupdateBillingdo($advertiser_id, $billing_cycle, $tax_id, $tax_class);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateBillingdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **billing_cycle** | **string**|  | [optional]
 **tax_id** | **string**|  | [optional]
 **tax_class** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersupdateInfodo**
> advertisersupdateInfodo($advertiser_id, $advertiser_name, $website, $alternate_id, $source, $external_crmid, $number_of_staff, $address, $address2, $city, $state, $zip_code, $country, $reporting_url, $reporting_username, $reporting_password)

Update Info

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$advertiser_name = "advertiser_name_example"; // string | 
$website = "website_example"; // string | 
$alternate_id = "alternate_id_example"; // string | 
$source = "source_example"; // string | 
$external_crmid = "external_crmid_example"; // string | 
$number_of_staff = 56; // int | 
$address = "address_example"; // string | 
$address2 = "address2_example"; // string | 
$city = "city_example"; // string | 
$state = "state_example"; // string | 
$zip_code = "zip_code_example"; // string | 
$country = "country_example"; // string | 
$reporting_url = "reporting_url_example"; // string | 
$reporting_username = "reporting_username_example"; // string | 
$reporting_password = "reporting_password_example"; // string | 

try {
    $apiInstance->advertisersupdateInfodo($advertiser_id, $advertiser_name, $website, $alternate_id, $source, $external_crmid, $number_of_staff, $address, $address2, $city, $state, $zip_code, $country, $reporting_url, $reporting_username, $reporting_password);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdateInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
 **advertiser_name** | **string**|  | [optional]
 **website** | **string**|  | [optional]
 **alternate_id** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **external_crmid** | **string**|  | [optional]
 **number_of_staff** | **int**|  | [optional]
 **address** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **zip_code** | **string**|  | [optional]
 **country** | **string**|  | [optional]
 **reporting_url** | **string**|  | [optional]
 **reporting_username** | **string**|  | [optional]
 **reporting_password** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advertisersupdatePortalSettingsdo**
> advertisersupdatePortalSettingsdo($portal_access, $two_way_auth, $manage_users, $manage_offers, $update_billing_info)

Update Portal Settings

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

$apiInstance = new LeadspediaApi\Api\AdvertisersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$portal_access = "portal_access_example"; // string | 
$two_way_auth = "two_way_auth_example"; // string | 
$manage_users = "manage_users_example"; // string | 
$manage_offers = "manage_offers_example"; // string | 
$update_billing_info = "update_billing_info_example"; // string | 

try {
    $apiInstance->advertisersupdatePortalSettingsdo($portal_access, $two_way_auth, $manage_users, $manage_offers, $update_billing_info);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisersApi->advertisersupdatePortalSettingsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portal_access** | **string**|  | [optional]
 **two_way_auth** | **string**|  | [optional]
 **manage_users** | **string**|  | [optional]
 **manage_offers** | **string**|  | [optional]
 **update_billing_info** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

