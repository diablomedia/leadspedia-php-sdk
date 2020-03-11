# LeadspediaApi\AffiliatescontactsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**affiliatesContactschangePassworddo**](AffiliatescontactsApi.md#affiliatescontactschangepassworddo) | **POST** /affiliatesContacts/changePassword.do | Change Password
[**affiliatesContactschangeStatusdo**](AffiliatescontactsApi.md#affiliatescontactschangestatusdo) | **POST** /affiliatesContacts/changeStatus.do | Change Status
[**affiliatesContactscreatedo**](AffiliatescontactsApi.md#affiliatescontactscreatedo) | **POST** /affiliatesContacts/create.do | Create
[**affiliatesContactsdeletedo**](AffiliatescontactsApi.md#affiliatescontactsdeletedo) | **POST** /affiliatesContacts/delete.do | Delete
[**affiliatesContactsgetAlldo**](AffiliatescontactsApi.md#affiliatescontactsgetalldo) | **GET** /affiliatesContacts/getAll.do | Get All
[**affiliatesContactsgetInfodo**](AffiliatescontactsApi.md#affiliatescontactsgetinfodo) | **GET** /affiliatesContacts/getInfo.do | Get Info
[**affiliatesContactsupdatedo**](AffiliatescontactsApi.md#affiliatescontactsupdatedo) | **POST** /affiliatesContacts/update.do | Update
[**affiliatesContactsverifyCredentialsdo**](AffiliatescontactsApi.md#affiliatescontactsverifycredentialsdo) | **POST** /affiliatesContacts/verifyCredentials.do | Verify Credentials

# **affiliatesContactschangePassworddo**
> affiliatesContactschangePassworddo($contact_id, $old_password, $new_password)

Change Password

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

$apiInstance = new LeadspediaApi\Api\AffiliatescontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 
$old_password = "old_password_example"; // string | 
$new_password = "new_password_example"; // string | 

try {
    $apiInstance->affiliatesContactschangePassworddo($contact_id, $old_password, $new_password);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatescontactsApi->affiliatesContactschangePassworddo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**|  |
 **old_password** | **string**|  |
 **new_password** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesContactschangeStatusdo**
> affiliatesContactschangeStatusdo($contact_id, $status)

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

$apiInstance = new LeadspediaApi\Api\AffiliatescontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 
$status = "status_example"; // string | 

try {
    $apiInstance->affiliatesContactschangeStatusdo($contact_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatescontactsApi->affiliatesContactschangeStatusdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**|  |
 **status** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesContactscreatedo**
> affiliatesContactscreatedo($affiliate_id, $first_name, $last_name, $email_address, $password, $job_title, $phone_number, $portal_access, $status)

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

$apiInstance = new LeadspediaApi\Api\AffiliatescontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$affiliate_id = 56; // int | 
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$email_address = "email_address_example"; // string | 
$password = "password_example"; // string | 
$job_title = "job_title_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$portal_access = "portal_access_example"; // string | 
$status = "status_example"; // string | 

try {
    $apiInstance->affiliatesContactscreatedo($affiliate_id, $first_name, $last_name, $email_address, $password, $job_title, $phone_number, $portal_access, $status);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatescontactsApi->affiliatesContactscreatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **affiliate_id** | **int**|  |
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **email_address** | **string**|  |
 **password** | **string**|  |
 **job_title** | **string**|  | [optional]
 **phone_number** | **string**|  | [optional]
 **portal_access** | **string**|  | [optional]
 **status** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesContactsdeletedo**
> affiliatesContactsdeletedo($contact_id)

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

$apiInstance = new LeadspediaApi\Api\AffiliatescontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 

try {
    $apiInstance->affiliatesContactsdeletedo($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatescontactsApi->affiliatesContactsdeletedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesContactsgetAlldo**
> affiliatesContactsgetAlldo($contact_id, $affiliate_id, $portal_access, $start, $limit)

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

$apiInstance = new LeadspediaApi\Api\AffiliatescontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 
$affiliate_id = 56; // int | 
$portal_access = "portal_access_example"; // string | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->affiliatesContactsgetAlldo($contact_id, $affiliate_id, $portal_access, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatescontactsApi->affiliatesContactsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**|  | [optional]
 **affiliate_id** | **int**|  | [optional]
 **portal_access** | **string**|  | [optional]
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

# **affiliatesContactsgetInfodo**
> affiliatesContactsgetInfodo($contact_id)

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

$apiInstance = new LeadspediaApi\Api\AffiliatescontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 

try {
    $apiInstance->affiliatesContactsgetInfodo($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatescontactsApi->affiliatesContactsgetInfodo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesContactsupdatedo**
> affiliatesContactsupdatedo($contact_id, $first_name, $last_name, $job_title, $email_address, $phone_number, $office_phone, $ext, $portal_access, $role, $mass_email, $permission_account, $permission_billing, $permission_offers, $permission_reports, $permission_users)

Update

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

$apiInstance = new LeadspediaApi\Api\AffiliatescontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$job_title = "job_title_example"; // string | 
$email_address = "email_address_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$office_phone = "office_phone_example"; // string | 
$ext = "ext_example"; // string | 
$portal_access = "portal_access_example"; // string | 
$role = "role_example"; // string | 
$mass_email = "mass_email_example"; // string | 
$permission_account = "permission_account_example"; // string | 
$permission_billing = "permission_billing_example"; // string | 
$permission_offers = "permission_offers_example"; // string | 
$permission_reports = "permission_reports_example"; // string | 
$permission_users = "permission_users_example"; // string | 

try {
    $apiInstance->affiliatesContactsupdatedo($contact_id, $first_name, $last_name, $job_title, $email_address, $phone_number, $office_phone, $ext, $portal_access, $role, $mass_email, $permission_account, $permission_billing, $permission_offers, $permission_reports, $permission_users);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatescontactsApi->affiliatesContactsupdatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**|  |
 **first_name** | **string**|  | [optional]
 **last_name** | **string**|  | [optional]
 **job_title** | **string**|  | [optional]
 **email_address** | **string**|  | [optional]
 **phone_number** | **string**|  | [optional]
 **office_phone** | **string**|  | [optional]
 **ext** | **string**|  | [optional]
 **portal_access** | **string**|  | [optional]
 **role** | **string**|  | [optional]
 **mass_email** | **string**|  | [optional]
 **permission_account** | **string**|  | [optional]
 **permission_billing** | **string**|  | [optional]
 **permission_offers** | **string**|  | [optional]
 **permission_reports** | **string**|  | [optional]
 **permission_users** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **affiliatesContactsverifyCredentialsdo**
> affiliatesContactsverifyCredentialsdo($email_address, $password)

Verify Credentials

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

$apiInstance = new LeadspediaApi\Api\AffiliatescontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address = "email_address_example"; // string | 
$password = "password_example"; // string | 

try {
    $apiInstance->affiliatesContactsverifyCredentialsdo($email_address, $password);
} catch (Exception $e) {
    echo 'Exception when calling AffiliatescontactsApi->affiliatesContactsverifyCredentialsdo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address** | **string**|  |
 **password** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [api_secret](../../README.md#api_secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

