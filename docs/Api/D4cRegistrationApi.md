# OpenAPI\Client\D4cRegistrationApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCSPMAzureAccount()**](D4cRegistrationApi.md#createCSPMAzureAccount) | **POST** /cloud-connect-azure/entities/account/v1 | Creates a new account in our system for a customer and generates a script for them to run in their cloud environment to grant us access.
[**createCSPMGCPAccount()**](D4cRegistrationApi.md#createCSPMGCPAccount) | **POST** /cloud-connect-gcp/entities/account/v1 | Creates a new account in our system for a customer and generates a new service account for them to add access to in their GCP environment to grant us access.
[**getCSPMAzureAccount()**](D4cRegistrationApi.md#getCSPMAzureAccount) | **GET** /cloud-connect-azure/entities/account/v1 | Return information about Azure account registration
[**getCSPMAzureUserScripts()**](D4cRegistrationApi.md#getCSPMAzureUserScripts) | **GET** /cloud-connect-azure/entities/user-scripts/v1 | Return a script for customer to run in their cloud environment to grant us access to their Azure environment
[**getCSPMAzureUserScriptsAttachment()**](D4cRegistrationApi.md#getCSPMAzureUserScriptsAttachment) | **GET** /cloud-connect-azure/entities/user-scripts-download/v1 | Return a script for customer to run in their cloud environment to grant us access to their Azure environment as a downloadable attachment
[**getCSPMCGPAccount()**](D4cRegistrationApi.md#getCSPMCGPAccount) | **GET** /cloud-connect-gcp/entities/account/v1 | Returns information about the current status of an GCP account.
[**getCSPMGCPUserScripts()**](D4cRegistrationApi.md#getCSPMGCPUserScripts) | **GET** /cloud-connect-gcp/entities/user-scripts/v1 | Return a script for customer to run in their cloud environment to grant us access to their GCP environment
[**getCSPMGCPUserScriptsAttachment()**](D4cRegistrationApi.md#getCSPMGCPUserScriptsAttachment) | **GET** /cloud-connect-gcp/entities/user-scripts-download/v1 | Return a script for customer to run in their cloud environment to grant us access to their GCP environment as a downloadable attachment
[**updateCSPMAzureAccountClientID()**](D4cRegistrationApi.md#updateCSPMAzureAccountClientID) | **PATCH** /cloud-connect-azure/entities/client-id/v1 | Update an Azure service account in our system by with the user-created client_id created with the public key we&#39;ve provided


## `createCSPMAzureAccount()`

```php
createCSPMAzureAccount($body): \OpenAPI\Client\Model\RegistrationAzureAccountResponseV1
```

Creates a new account in our system for a customer and generates a script for them to run in their cloud environment to grant us access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\D4cRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RegistrationAzureAccountCreateRequestExternalV1(); // \OpenAPI\Client\Model\RegistrationAzureAccountCreateRequestExternalV1

try {
    $result = $apiInstance->createCSPMAzureAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling D4cRegistrationApi->createCSPMAzureAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RegistrationAzureAccountCreateRequestExternalV1**](../Model/RegistrationAzureAccountCreateRequestExternalV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\RegistrationAzureAccountResponseV1**](../Model/RegistrationAzureAccountResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCSPMGCPAccount()`

```php
createCSPMGCPAccount($body): \OpenAPI\Client\Model\RegistrationGCPAccountResponseV1
```

Creates a new account in our system for a customer and generates a new service account for them to add access to in their GCP environment to grant us access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\D4cRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RegistrationGCPAccountCreateRequestExtV1(); // \OpenAPI\Client\Model\RegistrationGCPAccountCreateRequestExtV1

try {
    $result = $apiInstance->createCSPMGCPAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling D4cRegistrationApi->createCSPMGCPAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RegistrationGCPAccountCreateRequestExtV1**](../Model/RegistrationGCPAccountCreateRequestExtV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\RegistrationGCPAccountResponseV1**](../Model/RegistrationGCPAccountResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMAzureAccount()`

```php
getCSPMAzureAccount($ids, $scan_type): \OpenAPI\Client\Model\RegistrationAzureAccountResponseV1
```

Return information about Azure account registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\D4cRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | SubscriptionIDs of accounts to select for this status operation. If this is empty then all accounts are returned.
$scan_type = 'scan_type_example'; // string | Type of scan, dry or full, to perform on selected accounts

try {
    $result = $apiInstance->getCSPMAzureAccount($ids, $scan_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling D4cRegistrationApi->getCSPMAzureAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| SubscriptionIDs of accounts to select for this status operation. If this is empty then all accounts are returned. | [optional]
 **scan_type** | **string**| Type of scan, dry or full, to perform on selected accounts | [optional]

### Return type

[**\OpenAPI\Client\Model\RegistrationAzureAccountResponseV1**](../Model/RegistrationAzureAccountResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMAzureUserScripts()`

```php
getCSPMAzureUserScripts(): \OpenAPI\Client\Model\RegistrationAzureProvisionGetUserScriptResponseV1
```

Return a script for customer to run in their cloud environment to grant us access to their Azure environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\D4cRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCSPMAzureUserScripts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling D4cRegistrationApi->getCSPMAzureUserScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RegistrationAzureProvisionGetUserScriptResponseV1**](../Model/RegistrationAzureProvisionGetUserScriptResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMAzureUserScriptsAttachment()`

```php
getCSPMAzureUserScriptsAttachment(): \OpenAPI\Client\Model\RegistrationAzureProvisionGetUserScriptResponseV1
```

Return a script for customer to run in their cloud environment to grant us access to their Azure environment as a downloadable attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\D4cRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCSPMAzureUserScriptsAttachment();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling D4cRegistrationApi->getCSPMAzureUserScriptsAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RegistrationAzureProvisionGetUserScriptResponseV1**](../Model/RegistrationAzureProvisionGetUserScriptResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMCGPAccount()`

```php
getCSPMCGPAccount($scan_type, $ids): \OpenAPI\Client\Model\RegistrationGCPAccountResponseV1
```

Returns information about the current status of an GCP account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\D4cRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scan_type = 'scan_type_example'; // string | Type of scan, dry or full, to perform on selected accounts
$ids = array('ids_example'); // string[] | Parent IDs of accounts

try {
    $result = $apiInstance->getCSPMCGPAccount($scan_type, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling D4cRegistrationApi->getCSPMCGPAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scan_type** | **string**| Type of scan, dry or full, to perform on selected accounts | [optional]
 **ids** | [**string[]**](../Model/string.md)| Parent IDs of accounts | [optional]

### Return type

[**\OpenAPI\Client\Model\RegistrationGCPAccountResponseV1**](../Model/RegistrationGCPAccountResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMGCPUserScripts()`

```php
getCSPMGCPUserScripts(): \OpenAPI\Client\Model\RegistrationGCPProvisionGetUserScriptResponseV1
```

Return a script for customer to run in their cloud environment to grant us access to their GCP environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\D4cRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCSPMGCPUserScripts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling D4cRegistrationApi->getCSPMGCPUserScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RegistrationGCPProvisionGetUserScriptResponseV1**](../Model/RegistrationGCPProvisionGetUserScriptResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMGCPUserScriptsAttachment()`

```php
getCSPMGCPUserScriptsAttachment(): \OpenAPI\Client\Model\RegistrationGCPProvisionGetUserScriptResponseV1
```

Return a script for customer to run in their cloud environment to grant us access to their GCP environment as a downloadable attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\D4cRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCSPMGCPUserScriptsAttachment();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling D4cRegistrationApi->getCSPMGCPUserScriptsAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RegistrationGCPProvisionGetUserScriptResponseV1**](../Model/RegistrationGCPProvisionGetUserScriptResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCSPMAzureAccountClientID()`

```php
updateCSPMAzureAccountClientID($id): \OpenAPI\Client\Model\RegistrationAzureServicePrincipalResponseV1
```

Update an Azure service account in our system by with the user-created client_id created with the public key we've provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\D4cRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ClientID to use for the Service Principal associated with the customer's Azure account

try {
    $result = $apiInstance->updateCSPMAzureAccountClientID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling D4cRegistrationApi->updateCSPMAzureAccountClientID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ClientID to use for the Service Principal associated with the customer&#39;s Azure account |

### Return type

[**\OpenAPI\Client\Model\RegistrationAzureServicePrincipalResponseV1**](../Model/RegistrationAzureServicePrincipalResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
