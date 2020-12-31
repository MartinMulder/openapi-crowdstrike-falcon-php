# OpenAPI\Client\CspmRegistrationApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCSPMAwsAccount()**](CspmRegistrationApi.md#createCSPMAwsAccount) | **POST** /cloud-connect-cspm-aws/entities/account/v1 | Creates a new account in our system for a customer and generates a script for them to run in their AWS cloud environment to grant us access.
[**createCSPMAzureAccount()**](CspmRegistrationApi.md#createCSPMAzureAccount) | **POST** /cloud-connect-cspm-azure/entities/account/v1 | Creates a new account in our system for a customer and generates a script for them to run in their cloud environment to grant us access.
[**deleteCSPMAwsAccount()**](CspmRegistrationApi.md#deleteCSPMAwsAccount) | **DELETE** /cloud-connect-cspm-aws/entities/account/v1 | Deletes an existing AWS account or organization in our system.
[**deleteCSPMAzureAccount()**](CspmRegistrationApi.md#deleteCSPMAzureAccount) | **DELETE** /cloud-connect-cspm-azure/entities/account/v1 | Deletes an Azure subscription from the system.
[**getCSPMAwsAccount()**](CspmRegistrationApi.md#getCSPMAwsAccount) | **GET** /cloud-connect-cspm-aws/entities/account/v1 | Returns information about the current status of an AWS account.
[**getCSPMAwsAccountScriptsAttachment()**](CspmRegistrationApi.md#getCSPMAwsAccountScriptsAttachment) | **GET** /cloud-connect-cspm-aws/entities/user-scripts-download/v1 | Return a script for customer to run in their cloud environment to grant us access to their AWS environment as a downloadable attachment.
[**getCSPMAwsConsoleSetupURLs()**](CspmRegistrationApi.md#getCSPMAwsConsoleSetupURLs) | **GET** /cloud-connect-cspm-aws/entities/console-setup-urls/v1 | Return a URL for customer to visit in their cloud environment to grant us access to their AWS environment.
[**getCSPMAzureAccount()**](CspmRegistrationApi.md#getCSPMAzureAccount) | **GET** /cloud-connect-cspm-azure/entities/account/v1 | Return information about Azure account registration
[**getCSPMAzureUserScriptsAttachment()**](CspmRegistrationApi.md#getCSPMAzureUserScriptsAttachment) | **GET** /cloud-connect-cspm-azure/entities/user-scripts-download/v1 | Return a script for customer to run in their cloud environment to grant us access to their Azure environment as a downloadable attachment
[**getCSPMPolicy()**](CspmRegistrationApi.md#getCSPMPolicy) | **GET** /settings/entities/policy-details/v1 | Given a policy ID, returns detailed policy information.
[**getCSPMPolicySettings()**](CspmRegistrationApi.md#getCSPMPolicySettings) | **GET** /settings/entities/policy/v1 | Returns information about current policy settings.
[**getCSPMScanSchedule()**](CspmRegistrationApi.md#getCSPMScanSchedule) | **GET** /settings/scan-schedule/v1 | Returns scan schedule configuration for one or more cloud platforms.
[**updateCSPMAzureAccountClientID()**](CspmRegistrationApi.md#updateCSPMAzureAccountClientID) | **PATCH** /cloud-connect-cspm-azure/entities/client-id/v1 | Update an Azure service account in our system by with the user-created client_id created with the public key we&#39;ve provided
[**updateCSPMPolicySettings()**](CspmRegistrationApi.md#updateCSPMPolicySettings) | **PATCH** /settings/entities/policy/v1 | Updates a policy setting - can be used to override policy severity or to disable a policy entirely.
[**updateCSPMScanSchedule()**](CspmRegistrationApi.md#updateCSPMScanSchedule) | **POST** /settings/scan-schedule/v1 | Updates scan schedule configuration for one or more cloud platforms.


## `createCSPMAwsAccount()`

```php
createCSPMAwsAccount($body): \OpenAPI\Client\Model\RegistrationAWSAccountResponseV2
```

Creates a new account in our system for a customer and generates a script for them to run in their AWS cloud environment to grant us access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RegistrationAWSAccountCreateRequestExtV2(); // \OpenAPI\Client\Model\RegistrationAWSAccountCreateRequestExtV2

try {
    $result = $apiInstance->createCSPMAwsAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->createCSPMAwsAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RegistrationAWSAccountCreateRequestExtV2**](../Model/RegistrationAWSAccountCreateRequestExtV2.md)|  |

### Return type

[**\OpenAPI\Client\Model\RegistrationAWSAccountResponseV2**](../Model/RegistrationAWSAccountResponseV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
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
    echo 'Exception when calling CspmRegistrationApi->createCSPMAzureAccount: ', $e->getMessage(), PHP_EOL;
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

## `deleteCSPMAwsAccount()`

```php
deleteCSPMAwsAccount($ids, $organization_ids): \OpenAPI\Client\Model\RegistrationBaseResponseV1
```

Deletes an existing AWS account or organization in our system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | AWS account IDs to remove
$organization_ids = array('organization_ids_example'); // string[] | AWS organization IDs to remove

try {
    $result = $apiInstance->deleteCSPMAwsAccount($ids, $organization_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->deleteCSPMAwsAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| AWS account IDs to remove | [optional]
 **organization_ids** | [**string[]**](../Model/string.md)| AWS organization IDs to remove | [optional]

### Return type

[**\OpenAPI\Client\Model\RegistrationBaseResponseV1**](../Model/RegistrationBaseResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCSPMAzureAccount()`

```php
deleteCSPMAzureAccount($ids): \OpenAPI\Client\Model\RegistrationBaseResponseV1
```

Deletes an Azure subscription from the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | Azure subscription IDs to remove

try {
    $result = $apiInstance->deleteCSPMAzureAccount($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->deleteCSPMAzureAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| Azure subscription IDs to remove |

### Return type

[**\OpenAPI\Client\Model\RegistrationBaseResponseV1**](../Model/RegistrationBaseResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMAwsAccount()`

```php
getCSPMAwsAccount($scan_type, $ids, $organization_ids, $status, $limit, $offset): \OpenAPI\Client\Model\RegistrationAWSAccountResponseV2
```

Returns information about the current status of an AWS account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scan_type = 'scan_type_example'; // string | Type of scan, dry or full, to perform on selected accounts
$ids = array('ids_example'); // string[] | AWS account IDs
$organization_ids = array('organization_ids_example'); // string[] | AWS organization IDs
$status = 'status_example'; // string | Account status to filter results by.
$limit = 100; // int | The maximum records to return. Defaults to 100.
$offset = 56; // int | The offset to start retrieving records from

try {
    $result = $apiInstance->getCSPMAwsAccount($scan_type, $ids, $organization_ids, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->getCSPMAwsAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scan_type** | **string**| Type of scan, dry or full, to perform on selected accounts | [optional]
 **ids** | [**string[]**](../Model/string.md)| AWS account IDs | [optional]
 **organization_ids** | [**string[]**](../Model/string.md)| AWS organization IDs | [optional]
 **status** | **string**| Account status to filter results by. | [optional]
 **limit** | **int**| The maximum records to return. Defaults to 100. | [optional] [default to 100]
 **offset** | **int**| The offset to start retrieving records from | [optional]

### Return type

[**\OpenAPI\Client\Model\RegistrationAWSAccountResponseV2**](../Model/RegistrationAWSAccountResponseV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMAwsAccountScriptsAttachment()`

```php
getCSPMAwsAccountScriptsAttachment(): \OpenAPI\Client\Model\RegistrationAWSProvisionGetAccountScriptResponseV2
```

Return a script for customer to run in their cloud environment to grant us access to their AWS environment as a downloadable attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCSPMAwsAccountScriptsAttachment();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->getCSPMAwsAccountScriptsAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RegistrationAWSProvisionGetAccountScriptResponseV2**](../Model/RegistrationAWSProvisionGetAccountScriptResponseV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMAwsConsoleSetupURLs()`

```php
getCSPMAwsConsoleSetupURLs(): \OpenAPI\Client\Model\RegistrationAWSAccountConsoleURL
```

Return a URL for customer to visit in their cloud environment to grant us access to their AWS environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCSPMAwsConsoleSetupURLs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->getCSPMAwsConsoleSetupURLs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RegistrationAWSAccountConsoleURL**](../Model/RegistrationAWSAccountConsoleURL.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMAzureAccount()`

```php
getCSPMAzureAccount($ids, $scan_type, $status, $limit, $offset): \OpenAPI\Client\Model\RegistrationAzureAccountResponseV1
```

Return information about Azure account registration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | SubscriptionIDs of accounts to select for this status operation. If this is empty then all accounts are returned.
$scan_type = 'scan_type_example'; // string | Type of scan, dry or full, to perform on selected accounts
$status = 'status_example'; // string | Account status to filter results by.
$limit = 100; // int | The maximum records to return. Defaults to 100.
$offset = 56; // int | The offset to start retrieving records from

try {
    $result = $apiInstance->getCSPMAzureAccount($ids, $scan_type, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->getCSPMAzureAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| SubscriptionIDs of accounts to select for this status operation. If this is empty then all accounts are returned. | [optional]
 **scan_type** | **string**| Type of scan, dry or full, to perform on selected accounts | [optional]
 **status** | **string**| Account status to filter results by. | [optional]
 **limit** | **int**| The maximum records to return. Defaults to 100. | [optional] [default to 100]
 **offset** | **int**| The offset to start retrieving records from | [optional]

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

## `getCSPMAzureUserScriptsAttachment()`

```php
getCSPMAzureUserScriptsAttachment($tenant_id): \OpenAPI\Client\Model\RegistrationAzureProvisionGetUserScriptResponseV1
```

Return a script for customer to run in their cloud environment to grant us access to their Azure environment as a downloadable attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string | Tenant ID to generate script for. Defaults to most recently registered tenant.

try {
    $result = $apiInstance->getCSPMAzureUserScriptsAttachment($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->getCSPMAzureUserScriptsAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**| Tenant ID to generate script for. Defaults to most recently registered tenant. | [optional]

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

## `getCSPMPolicy()`

```php
getCSPMPolicy($ids): \OpenAPI\Client\Model\RegistrationPolicyResponseV1
```

Given a policy ID, returns detailed policy information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = 'ids_example'; // string | Policy ID

try {
    $result = $apiInstance->getCSPMPolicy($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->getCSPMPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| Policy ID |

### Return type

[**\OpenAPI\Client\Model\RegistrationPolicyResponseV1**](../Model/RegistrationPolicyResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMPolicySettings()`

```php
getCSPMPolicySettings($service, $policy_id): \OpenAPI\Client\Model\RegistrationPolicySettingsResponseV1
```

Returns information about current policy settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service = 'service_example'; // string | Service type to filter policy settings by.
$policy_id = 'policy_id_example'; // string | Policy ID

try {
    $result = $apiInstance->getCSPMPolicySettings($service, $policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->getCSPMPolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**| Service type to filter policy settings by. |
 **policy_id** | **string**| Policy ID | [optional]

### Return type

[**\OpenAPI\Client\Model\RegistrationPolicySettingsResponseV1**](../Model/RegistrationPolicySettingsResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCSPMScanSchedule()`

```php
getCSPMScanSchedule($cloud_platform): \OpenAPI\Client\Model\RegistrationScanScheduleResponseV1
```

Returns scan schedule configuration for one or more cloud platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_platform = array('cloud_platform_example'); // string[] | Cloud Platform

try {
    $result = $apiInstance->getCSPMScanSchedule($cloud_platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->getCSPMScanSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_platform** | [**string[]**](../Model/string.md)| Cloud Platform | [optional]

### Return type

[**\OpenAPI\Client\Model\RegistrationScanScheduleResponseV1**](../Model/RegistrationScanScheduleResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCSPMAzureAccountClientID()`

```php
updateCSPMAzureAccountClientID($id, $body, $tenant_id): \OpenAPI\Client\Model\RegistrationAzureServicePrincipalResponseV1
```

Update an Azure service account in our system by with the user-created client_id created with the public key we've provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ClientID to use for the Service Principal associated with the customer's Azure account
$body = new \stdClass; // object | This is a placeholder only. Please ignore this field.
$tenant_id = 'tenant_id_example'; // string | Tenant ID to update client ID for. Required if multiple tenants are registered.

try {
    $result = $apiInstance->updateCSPMAzureAccountClientID($id, $body, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->updateCSPMAzureAccountClientID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ClientID to use for the Service Principal associated with the customer&#39;s Azure account |
 **body** | **object**| This is a placeholder only. Please ignore this field. |
 **tenant_id** | **string**| Tenant ID to update client ID for. Required if multiple tenants are registered. | [optional]

### Return type

[**\OpenAPI\Client\Model\RegistrationAzureServicePrincipalResponseV1**](../Model/RegistrationAzureServicePrincipalResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCSPMPolicySettings()`

```php
updateCSPMPolicySettings($body): \OpenAPI\Client\Model\RegistrationPolicySettingsResponseV1
```

Updates a policy setting - can be used to override policy severity or to disable a policy entirely.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RegistrationPolicyRequestExtV1(); // \OpenAPI\Client\Model\RegistrationPolicyRequestExtV1

try {
    $result = $apiInstance->updateCSPMPolicySettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->updateCSPMPolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RegistrationPolicyRequestExtV1**](../Model/RegistrationPolicyRequestExtV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\RegistrationPolicySettingsResponseV1**](../Model/RegistrationPolicySettingsResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCSPMScanSchedule()`

```php
updateCSPMScanSchedule($body): \OpenAPI\Client\Model\RegistrationScanScheduleResponseV1
```

Updates scan schedule configuration for one or more cloud platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CspmRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RegistrationScanScheduleUpdateRequestV1(); // \OpenAPI\Client\Model\RegistrationScanScheduleUpdateRequestV1

try {
    $result = $apiInstance->updateCSPMScanSchedule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CspmRegistrationApi->updateCSPMScanSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RegistrationScanScheduleUpdateRequestV1**](../Model/RegistrationScanScheduleUpdateRequestV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\RegistrationScanScheduleResponseV1**](../Model/RegistrationScanScheduleResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
