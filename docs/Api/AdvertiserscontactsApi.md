# LeadspediaApi\AdvertiserscontactsApi

All URIs are relative to *https://api.leadspedia.com/core/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advertisersContactschangePassworddo**](AdvertiserscontactsApi.md#advertiserscontactschangepassworddo) | **POST** /advertisersContacts/changePassword.do | Change Password
[**advertisersContactschangeStatusdo**](AdvertiserscontactsApi.md#advertiserscontactschangestatusdo) | **POST** /advertisersContacts/changeStatus.do | Change Status
[**advertisersContactscreatedo**](AdvertiserscontactsApi.md#advertiserscontactscreatedo) | **POST** /advertisersContacts/create.do | Create
[**advertisersContactsdeletedo**](AdvertiserscontactsApi.md#advertiserscontactsdeletedo) | **POST** /advertisersContacts/delete.do | Delete
[**advertisersContactsgetAlldo**](AdvertiserscontactsApi.md#advertiserscontactsgetalldo) | **GET** /advertisersContacts/getAll.do | Get All
[**advertisersContactsgetInfodo**](AdvertiserscontactsApi.md#advertiserscontactsgetinfodo) | **GET** /advertisersContacts/getInfo.do | Get Info
[**advertisersContactsupdatedo**](AdvertiserscontactsApi.md#advertiserscontactsupdatedo) | **POST** /advertisersContacts/update.do | Update
[**advertisersContactsverifyCredentialsdo**](AdvertiserscontactsApi.md#advertiserscontactsverifycredentialsdo) | **POST** /advertisersContacts/verifyCredentials.do | Verify Credentials

# **advertisersContactschangePassworddo**
> advertisersContactschangePassworddo($contact_id, $old_password, $new_password)

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

$apiInstance = new LeadspediaApi\Api\AdvertiserscontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 
$old_password = "old_password_example"; // string | 
$new_password = "new_password_example"; // string | 

try {
    $apiInstance->advertisersContactschangePassworddo($contact_id, $old_password, $new_password);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscontactsApi->advertisersContactschangePassworddo: ', $e->getMessage(), PHP_EOL;
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

# **advertisersContactschangeStatusdo**
> advertisersContactschangeStatusdo($contact_id, $status)

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

$apiInstance = new LeadspediaApi\Api\AdvertiserscontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 
$status = "status_example"; // string | 

try {
    $apiInstance->advertisersContactschangeStatusdo($contact_id, $status);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscontactsApi->advertisersContactschangeStatusdo: ', $e->getMessage(), PHP_EOL;
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

# **advertisersContactscreatedo**
> advertisersContactscreatedo($advertiser_id, $first_name, $last_name, $email_address, $password, $job_title, $phone_number, $portal_access, $status)

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

$apiInstance = new LeadspediaApi\Api\AdvertiserscontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | 
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$email_address = "email_address_example"; // string | 
$password = "password_example"; // string | 
$job_title = "job_title_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$portal_access = "portal_access_example"; // string | 
$status = "status_example"; // string | 

try {
    $apiInstance->advertisersContactscreatedo($advertiser_id, $first_name, $last_name, $email_address, $password, $job_title, $phone_number, $portal_access, $status);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscontactsApi->advertisersContactscreatedo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**|  |
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

# **advertisersContactsdeletedo**
> advertisersContactsdeletedo($contact_id)

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

$apiInstance = new LeadspediaApi\Api\AdvertiserscontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 

try {
    $apiInstance->advertisersContactsdeletedo($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscontactsApi->advertisersContactsdeletedo: ', $e->getMessage(), PHP_EOL;
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

# **advertisersContactsgetAlldo**
> advertisersContactsgetAlldo($contact_id, $advertiser_id, $portal_access, $start, $limit)

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

$apiInstance = new LeadspediaApi\Api\AdvertiserscontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 
$advertiser_id = 56; // int | 
$portal_access = "portal_access_example"; // string | 
$start = 56; // int | 
$limit = 56; // int | 

try {
    $apiInstance->advertisersContactsgetAlldo($contact_id, $advertiser_id, $portal_access, $start, $limit);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscontactsApi->advertisersContactsgetAlldo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**|  | [optional]
 **advertiser_id** | **int**|  | [optional]
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

# **advertisersContactsgetInfodo**
> advertisersContactsgetInfodo($contact_id)

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

$apiInstance = new LeadspediaApi\Api\AdvertiserscontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | 

try {
    $apiInstance->advertisersContactsgetInfodo($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscontactsApi->advertisersContactsgetInfodo: ', $e->getMessage(), PHP_EOL;
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

# **advertisersContactsupdatedo**
> advertisersContactsupdatedo($contact_id, $first_name, $last_name, $job_title, $email_address, $phone_number, $office_phone, $ext, $portal_access, $role, $mass_email, $permission_account, $permission_billing, $permission_offers, $permission_reports, $permission_users)

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

$apiInstance = new LeadspediaApi\Api\AdvertiserscontactsApi(
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
    $apiInstance->advertisersContactsupdatedo($contact_id, $first_name, $last_name, $job_title, $email_address, $phone_number, $office_phone, $ext, $portal_access, $role, $mass_email, $permission_account, $permission_billing, $permission_offers, $permission_reports, $permission_users);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscontactsApi->advertisersContactsupdatedo: ', $e->getMessage(), PHP_EOL;
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

# **advertisersContactsverifyCredentialsdo**
> advertisersContactsverifyCredentialsdo($email_address, $password)

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

$apiInstance = new LeadspediaApi\Api\AdvertiserscontactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address = "email_address_example"; // string | 
$password = "password_example"; // string | 

try {
    $apiInstance->advertisersContactsverifyCredentialsdo($email_address, $password);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserscontactsApi->advertisersContactsverifyCredentialsdo: ', $e->getMessage(), PHP_EOL;
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

