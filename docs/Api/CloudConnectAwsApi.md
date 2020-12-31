# OpenAPI\Client\CloudConnectAwsApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrUpdateAWSSettings()**](CloudConnectAwsApi.md#createOrUpdateAWSSettings) | **POST** /cloud-connect-aws/entities/settings/v1 | Create or update Global Settings which are applicable to all provisioned AWS accounts
[**deleteAWSAccounts()**](CloudConnectAwsApi.md#deleteAWSAccounts) | **DELETE** /cloud-connect-aws/entities/accounts/v1 | Delete a set of AWS Accounts by specifying their IDs
[**getAWSAccounts()**](CloudConnectAwsApi.md#getAWSAccounts) | **GET** /cloud-connect-aws/entities/accounts/v1 | Retrieve a set of AWS Accounts by specifying their IDs
[**getAWSSettings()**](CloudConnectAwsApi.md#getAWSSettings) | **GET** /cloud-connect-aws/combined/settings/v1 | Retrieve a set of Global Settings which are applicable to all provisioned AWS accounts
[**provisionAWSAccounts()**](CloudConnectAwsApi.md#provisionAWSAccounts) | **POST** /cloud-connect-aws/entities/accounts/v1 | Provision AWS Accounts by specifying details about the accounts to provision
[**queryAWSAccounts()**](CloudConnectAwsApi.md#queryAWSAccounts) | **GET** /cloud-connect-aws/combined/accounts/v1 | Search for provisioned AWS Accounts by providing an FQL filter and paging details. Returns a set of AWS accounts which match the filter criteria
[**queryAWSAccountsForIDs()**](CloudConnectAwsApi.md#queryAWSAccountsForIDs) | **GET** /cloud-connect-aws/queries/accounts/v1 | Search for provisioned AWS Accounts by providing an FQL filter and paging details. Returns a set of AWS account IDs which match the filter criteria
[**updateAWSAccounts()**](CloudConnectAwsApi.md#updateAWSAccounts) | **PATCH** /cloud-connect-aws/entities/accounts/v1 | Update AWS Accounts by specifying the ID of the account and details to update
[**verifyAWSAccountAccess()**](CloudConnectAwsApi.md#verifyAWSAccountAccess) | **POST** /cloud-connect-aws/entities/verify-account-access/v1 | Performs an Access Verification check on the specified AWS Account IDs


## `createOrUpdateAWSSettings()`

```php
createOrUpdateAWSSettings($body): \OpenAPI\Client\Model\ModelsCustomerConfigurationsV1
```

Create or update Global Settings which are applicable to all provisioned AWS accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ModelsModifyAWSCustomerSettingsV1(); // \OpenAPI\Client\Model\ModelsModifyAWSCustomerSettingsV1

try {
    $result = $apiInstance->createOrUpdateAWSSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->createOrUpdateAWSSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ModelsModifyAWSCustomerSettingsV1**](../Model/ModelsModifyAWSCustomerSettingsV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ModelsCustomerConfigurationsV1**](../Model/ModelsCustomerConfigurationsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAWSAccounts()`

```php
deleteAWSAccounts($ids): \OpenAPI\Client\Model\ModelsBaseResponseV1
```

Delete a set of AWS Accounts by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | IDs of accounts to remove

try {
    $result = $apiInstance->deleteAWSAccounts($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->deleteAWSAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| IDs of accounts to remove |

### Return type

[**\OpenAPI\Client\Model\ModelsBaseResponseV1**](../Model/ModelsBaseResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAWSAccounts()`

```php
getAWSAccounts($ids): \OpenAPI\Client\Model\ModelsAWSAccountsV1
```

Retrieve a set of AWS Accounts by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | IDs of accounts to retrieve details

try {
    $result = $apiInstance->getAWSAccounts($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->getAWSAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| IDs of accounts to retrieve details |

### Return type

[**\OpenAPI\Client\Model\ModelsAWSAccountsV1**](../Model/ModelsAWSAccountsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAWSSettings()`

```php
getAWSSettings(): \OpenAPI\Client\Model\ModelsCustomerConfigurationsV1
```

Retrieve a set of Global Settings which are applicable to all provisioned AWS accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAWSSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->getAWSSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ModelsCustomerConfigurationsV1**](../Model/ModelsCustomerConfigurationsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `provisionAWSAccounts()`

```php
provisionAWSAccounts($body, $mode): \OpenAPI\Client\Model\ModelsAWSAccountsV1
```

Provision AWS Accounts by specifying details about the accounts to provision

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ModelsCreateAWSAccountsV1(); // \OpenAPI\Client\Model\ModelsCreateAWSAccountsV1
$mode = 'manual'; // string | Mode for provisioning. Allowed values are `manual` or `cloudformation`. Defaults to manual if not defined.

try {
    $result = $apiInstance->provisionAWSAccounts($body, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->provisionAWSAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ModelsCreateAWSAccountsV1**](../Model/ModelsCreateAWSAccountsV1.md)|  |
 **mode** | **string**| Mode for provisioning. Allowed values are &#x60;manual&#x60; or &#x60;cloudformation&#x60;. Defaults to manual if not defined. | [optional] [default to &#39;manual&#39;]

### Return type

[**\OpenAPI\Client\Model\ModelsAWSAccountsV1**](../Model/ModelsAWSAccountsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAWSAccounts()`

```php
queryAWSAccounts($limit, $offset, $sort, $filter): \OpenAPI\Client\Model\ModelsAWSAccountsV1
```

Search for provisioned AWS Accounts by providing an FQL filter and paging details. Returns a set of AWS accounts which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | The maximum records to return. [1-500]. Defaults to 100.
$offset = 56; // int | The offset to start retrieving records from
$sort = 'sort_example'; // string | The property to sort by (e.g. alias.desc or state.asc)
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results

try {
    $result = $apiInstance->queryAWSAccounts($limit, $offset, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->queryAWSAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum records to return. [1-500]. Defaults to 100. | [optional] [default to 100]
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **sort** | **string**| The property to sort by (e.g. alias.desc or state.asc) | [optional]
 **filter** | **string**| The filter expression that should be used to limit the results | [optional]

### Return type

[**\OpenAPI\Client\Model\ModelsAWSAccountsV1**](../Model/ModelsAWSAccountsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAWSAccountsForIDs()`

```php
queryAWSAccountsForIDs($limit, $offset, $sort, $filter): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for provisioned AWS Accounts by providing an FQL filter and paging details. Returns a set of AWS account IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | The maximum records to return. [1-500]. Defaults to 100.
$offset = 56; // int | The offset to start retrieving records from
$sort = 'sort_example'; // string | The property to sort by (e.g. alias.desc or state.asc)
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results

try {
    $result = $apiInstance->queryAWSAccountsForIDs($limit, $offset, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->queryAWSAccountsForIDs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum records to return. [1-500]. Defaults to 100. | [optional] [default to 100]
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **sort** | **string**| The property to sort by (e.g. alias.desc or state.asc) | [optional]
 **filter** | **string**| The filter expression that should be used to limit the results | [optional]

### Return type

[**\OpenAPI\Client\Model\MsaQueryResponse**](../Model/MsaQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAWSAccounts()`

```php
updateAWSAccounts($body): \OpenAPI\Client\Model\ModelsAWSAccountsV1
```

Update AWS Accounts by specifying the ID of the account and details to update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ModelsUpdateAWSAccountsV1(); // \OpenAPI\Client\Model\ModelsUpdateAWSAccountsV1

try {
    $result = $apiInstance->updateAWSAccounts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->updateAWSAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ModelsUpdateAWSAccountsV1**](../Model/ModelsUpdateAWSAccountsV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ModelsAWSAccountsV1**](../Model/ModelsAWSAccountsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyAWSAccountAccess()`

```php
verifyAWSAccountAccess($ids): \OpenAPI\Client\Model\ModelsVerifyAccessResponseV1
```

Performs an Access Verification check on the specified AWS Account IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | IDs of accounts to verify access on

try {
    $result = $apiInstance->verifyAWSAccountAccess($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->verifyAWSAccountAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| IDs of accounts to verify access on |

### Return type

[**\OpenAPI\Client\Model\ModelsVerifyAccessResponseV1**](../Model/ModelsVerifyAccessResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
