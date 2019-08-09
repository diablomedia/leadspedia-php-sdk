# LeadspediaApi\AffiliatesApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**affiliateschangeStatusdo**](AffiliatesApi.md#affiliateschangestatusdo) | **POST** /affiliates/changeStatus.do | Change Status
[**affiliatescreatedo**](AffiliatesApi.md#affiliatescreatedo) | **POST** /affiliates/create.do | Create
[**affiliatesdeletedo**](AffiliatesApi.md#affiliatesdeletedo) | **POST** /affiliates/delete.do | Delete
[**affiliatesgetAlldo**](AffiliatesApi.md#affiliatesgetalldo) | **GET** /affiliates/getAll.do | Get All
[**affiliatesgetInfodo**](AffiliatesApi.md#affiliatesgetinfodo) | **GET** /affiliates/getInfo.do | Get Info
[**affiliatessearchdo**](AffiliatesApi.md#affiliatessearchdo) | **GET** /affiliates/search.do | Search
[**affiliatesupdateBillingdo**](AffiliatesApi.md#affiliatesupdatebillingdo) | **POST** /affiliates/updateBilling.do | Update Billing
[**affiliatesupdateInfodo**](AffiliatesApi.md#affiliatesupdateinfodo) | **POST** /affiliates/updateInfo.do | Update Info

# **affiliateschangeStatusdo**
> affiliateschangeStatusdo($affiliate_id, $status)

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

$apiInstance = new LeadspediaApi\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 56; // int | 
$status = "status_example"; // string | 

try {
    $apiInstance->affiliateschangeStatusdo($affiliate_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliateschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **int**|  |
 **status** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatescreatedo**
> affiliatescreatedo($affiliate_name, $account_manager_id, $status)

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

$apiInstance = new LeadspediaApi\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_name = "affiliate_name_example"; // string | 
$account_manager_id = 56; // int | 
$status = "status_example"; // string | 

try {
    $apiInstance->affiliatescreatedo($affiliate_name, $account_manager_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatescreatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_name** | **string**|  |
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

# **affiliatesdeletedo**
> affiliatesdeletedo($affiliate_id)

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

$apiInstance = new LeadspediaApi\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 56; // int | 

try {
    $apiInstance->affiliatesdeletedo($affiliate_id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesdeletedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesgetAlldo**
> affiliatesgetAlldo($affiliate_id, $account_manager_id, $status, $search, $start, $limit)

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

$apiInstance = new LeadspediaApi\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 56; // int | 
$account_manager_id = 56; // int | 
$status = "status_example"; // string | 
$search = "search_example"; // string | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->affiliatesgetAlldo($affiliate_id, $account_manager_id, $status, $search, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **int**|  | [optional]
 **account_manager_id** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **search** | **string**|  | [optional]
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

# **affiliatesgetInfodo**
> affiliatesgetInfodo($affiliate_id)

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

$apiInstance = new LeadspediaApi\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 56; // int | 

try {
    $apiInstance->affiliatesgetInfodo($affiliate_id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesgetInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatessearchdo**
> affiliatessearchdo($search, $start, $limit)

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

$apiInstance = new LeadspediaApi\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = "search_example"; // string | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->affiliatessearchdo($search, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatessearchdo: ', $e->getMessage(), PHP_EOL;
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

# **affiliatesupdateBillingdo**
> affiliatesupdateBillingdo($affiliate_id, $billing_cycle, $tax_id, $tax_class, $tax_doc_received)

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

$apiInstance = new LeadspediaApi\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 56; // int | 
$billing_cycle = "billing_cycle_example"; // string | 
$tax_id = "tax_id_example"; // string | 
$tax_class = "tax_class_example"; // string | 
$tax_doc_received = "tax_doc_received_example"; // string | 

try {
    $apiInstance->affiliatesupdateBillingdo($affiliate_id, $billing_cycle, $tax_id, $tax_class, $tax_doc_received);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesupdateBillingdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **int**|  |
 **billing_cycle** | **string**|  | [optional]
 **tax_id** | **string**|  | [optional]
 **tax_class** | **string**|  | [optional]
 **tax_doc_received** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesupdateInfodo**
> affiliatesupdateInfodo($affiliate_id, $affiliate_name, $website, $alternate_id, $address, $address2, $city, $state, $zip_code, $country, $reporting_url, $reporting_username, $reporting_password)

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

$apiInstance = new LeadspediaApi\Api\AffiliatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 56; // int | 
$affiliate_name = "affiliate_name_example"; // string | 
$website = "website_example"; // string | 
$alternate_id = "alternate_id_example"; // string | 
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
    $apiInstance->affiliatesupdateInfodo($affiliate_id, $affiliate_name, $website, $alternate_id, $address, $address2, $city, $state, $zip_code, $country, $reporting_url, $reporting_username, $reporting_password);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatesApi->affiliatesupdateInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **int**|  |
 **affiliate_name** | **string**|  | [optional]
 **website** | **string**|  | [optional]
 **alternate_id** | **string**|  | [optional]
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

