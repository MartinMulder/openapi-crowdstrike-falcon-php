# OpenAPI\Client\InstallationTokensApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**auditEventsQuery()**](InstallationTokensApi.md#auditEventsQuery) | **GET** /installation-tokens/queries/audit-events/v1 | Search for audit events by providing an FQL filter and paging details.
[**auditEventsRead()**](InstallationTokensApi.md#auditEventsRead) | **GET** /installation-tokens/entities/audit-events/v1 | Gets the details of one or more audit events by id.
[**customerSettingsRead()**](InstallationTokensApi.md#customerSettingsRead) | **GET** /installation-tokens/entities/customer-settings/v1 | Check current installation token settings.
[**tokensCreate()**](InstallationTokensApi.md#tokensCreate) | **POST** /installation-tokens/entities/tokens/v1 | Creates a token.
[**tokensDelete()**](InstallationTokensApi.md#tokensDelete) | **DELETE** /installation-tokens/entities/tokens/v1 | Deletes a token immediately. To revoke a token, use PATCH /installation-tokens/entities/tokens/v1 instead.
[**tokensQuery()**](InstallationTokensApi.md#tokensQuery) | **GET** /installation-tokens/queries/tokens/v1 | Search for tokens by providing an FQL filter and paging details.
[**tokensRead()**](InstallationTokensApi.md#tokensRead) | **GET** /installation-tokens/entities/tokens/v1 | Gets the details of one or more tokens by id.
[**tokensUpdate()**](InstallationTokensApi.md#tokensUpdate) | **PATCH** /installation-tokens/entities/tokens/v1 | Updates one or more tokens. Use this endpoint to edit labels, change expiration, revoke, or restore.


## `auditEventsQuery()`

```php
auditEventsQuery($offset, $limit, $sort, $filter): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for audit events by providing an FQL filter and paging details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstallationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | The offset to start retrieving records from.
$limit = 56; // int | The maximum records to return. [1-1000]. Defaults to 50.
$sort = 'sort_example'; // string | The property to sort by (e.g. timestamp.desc).
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results (e.g., `action:'token_create'`).

try {
    $result = $apiInstance->auditEventsQuery($offset, $limit, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationTokensApi->auditEventsQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset to start retrieving records from. | [optional]
 **limit** | **int**| The maximum records to return. [1-1000]. Defaults to 50. | [optional]
 **sort** | **string**| The property to sort by (e.g. timestamp.desc). | [optional]
 **filter** | **string**| The filter expression that should be used to limit the results (e.g., &#x60;action:&#39;token_create&#39;&#x60;). | [optional]

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

## `auditEventsRead()`

```php
auditEventsRead($ids): \OpenAPI\Client\Model\ApiAuditEventDetailsResponseV1
```

Gets the details of one or more audit events by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstallationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | IDs of audit events to retrieve details for

try {
    $result = $apiInstance->auditEventsRead($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationTokensApi->auditEventsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| IDs of audit events to retrieve details for | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiAuditEventDetailsResponseV1**](../Model/ApiAuditEventDetailsResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerSettingsRead()`

```php
customerSettingsRead(): \OpenAPI\Client\Model\ApiCustomerSettingsResponseV1
```

Check current installation token settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstallationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customerSettingsRead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationTokensApi->customerSettingsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ApiCustomerSettingsResponseV1**](../Model/ApiCustomerSettingsResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensCreate()`

```php
tokensCreate($body): \OpenAPI\Client\Model\ApiTokenDetailsResponseV1
```

Creates a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstallationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ApiTokenCreateRequestV1(); // \OpenAPI\Client\Model\ApiTokenCreateRequestV1

try {
    $result = $apiInstance->tokensCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationTokensApi->tokensCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ApiTokenCreateRequestV1**](../Model/ApiTokenCreateRequestV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApiTokenDetailsResponseV1**](../Model/ApiTokenDetailsResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensDelete()`

```php
tokensDelete($ids): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Deletes a token immediately. To revoke a token, use PATCH /installation-tokens/entities/tokens/v1 instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstallationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The token ids to delete.

try {
    $result = $apiInstance->tokensDelete($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationTokensApi->tokensDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The token ids to delete. |

### Return type

[**\OpenAPI\Client\Model\MsaReplyMetaOnly**](../Model/MsaReplyMetaOnly.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensQuery()`

```php
tokensQuery($offset, $limit, $sort, $filter): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for tokens by providing an FQL filter and paging details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstallationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | The offset to start retrieving records from.
$limit = 56; // int | The maximum records to return. [1-1000]. Defaults to 50.
$sort = 'sort_example'; // string | The property to sort by (e.g. created_timestamp.desc).
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results (e.g., `status:'valid'`).

try {
    $result = $apiInstance->tokensQuery($offset, $limit, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationTokensApi->tokensQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset to start retrieving records from. | [optional]
 **limit** | **int**| The maximum records to return. [1-1000]. Defaults to 50. | [optional]
 **sort** | **string**| The property to sort by (e.g. created_timestamp.desc). | [optional]
 **filter** | **string**| The filter expression that should be used to limit the results (e.g., &#x60;status:&#39;valid&#39;&#x60;). | [optional]

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

## `tokensRead()`

```php
tokensRead($ids): \OpenAPI\Client\Model\ApiTokenDetailsResponseV1
```

Gets the details of one or more tokens by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstallationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | IDs of tokens to retrieve details for

try {
    $result = $apiInstance->tokensRead($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationTokensApi->tokensRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| IDs of tokens to retrieve details for | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiTokenDetailsResponseV1**](../Model/ApiTokenDetailsResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensUpdate()`

```php
tokensUpdate($ids, $body): \OpenAPI\Client\Model\MsaQueryResponse
```

Updates one or more tokens. Use this endpoint to edit labels, change expiration, revoke, or restore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstallationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The token ids to update.
$body = new \OpenAPI\Client\Model\ApiTokenPatchRequestV1(); // \OpenAPI\Client\Model\ApiTokenPatchRequestV1

try {
    $result = $apiInstance->tokensUpdate($ids, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationTokensApi->tokensUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The token ids to update. |
 **body** | [**\OpenAPI\Client\Model\ApiTokenPatchRequestV1**](../Model/ApiTokenPatchRequestV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\MsaQueryResponse**](../Model/MsaQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
