# OpenAPI\Client\IoaExclusionsApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIOAExclusionsV1()**](IoaExclusionsApi.md#createIOAExclusionsV1) | **POST** /policy/entities/ioa-exclusions/v1 | Create the IOA exclusions
[**deleteIOAExclusionsV1()**](IoaExclusionsApi.md#deleteIOAExclusionsV1) | **DELETE** /policy/entities/ioa-exclusions/v1 | Delete the IOA exclusions by id
[**getIOAExclusionsV1()**](IoaExclusionsApi.md#getIOAExclusionsV1) | **GET** /policy/entities/ioa-exclusions/v1 | Get a set of IOA Exclusions by specifying their IDs
[**queryIOAExclusionsV1()**](IoaExclusionsApi.md#queryIOAExclusionsV1) | **GET** /policy/queries/ioa-exclusions/v1 | Search for IOA exclusions.
[**updateIOAExclusionsV1()**](IoaExclusionsApi.md#updateIOAExclusionsV1) | **PATCH** /policy/entities/ioa-exclusions/v1 | Update the IOA exclusions


## `createIOAExclusionsV1()`

```php
createIOAExclusionsV1($body): \OpenAPI\Client\Model\ResponsesIoaExclusionRespV1
```

Create the IOA exclusions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IoaExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsIoaExclusionCreateReqV1(); // \OpenAPI\Client\Model\RequestsIoaExclusionCreateReqV1

try {
    $result = $apiInstance->createIOAExclusionsV1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IoaExclusionsApi->createIOAExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsIoaExclusionCreateReqV1**](../Model/RequestsIoaExclusionCreateReqV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesIoaExclusionRespV1**](../Model/ResponsesIoaExclusionRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIOAExclusionsV1()`

```php
deleteIOAExclusionsV1($ids, $comment): \OpenAPI\Client\Model\MsaQueryResponse
```

Delete the IOA exclusions by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IoaExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The ids of the exclusions to delete
$comment = 'comment_example'; // string | Explains why this exclusions was deleted

try {
    $result = $apiInstance->deleteIOAExclusionsV1($ids, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IoaExclusionsApi->deleteIOAExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The ids of the exclusions to delete |
 **comment** | **string**| Explains why this exclusions was deleted | [optional]

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

## `getIOAExclusionsV1()`

```php
getIOAExclusionsV1($ids): \OpenAPI\Client\Model\ResponsesIoaExclusionRespV1
```

Get a set of IOA Exclusions by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IoaExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The ids of the exclusions to retrieve

try {
    $result = $apiInstance->getIOAExclusionsV1($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IoaExclusionsApi->getIOAExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The ids of the exclusions to retrieve |

### Return type

[**\OpenAPI\Client\Model\ResponsesIoaExclusionRespV1**](../Model/ResponsesIoaExclusionRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIOAExclusionsV1()`

```php
queryIOAExclusionsV1($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for IOA exclusions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IoaExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results.
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-500]
$sort = 'sort_example'; // string | The sort expression that should be used to sort the results.

try {
    $result = $apiInstance->queryIOAExclusionsV1($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IoaExclusionsApi->queryIOAExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| The filter expression that should be used to limit the results. | [optional]
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **limit** | **int**| The maximum records to return. [1-500] | [optional]
 **sort** | **string**| The sort expression that should be used to sort the results. | [optional]

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

## `updateIOAExclusionsV1()`

```php
updateIOAExclusionsV1($body): \OpenAPI\Client\Model\ResponsesIoaExclusionRespV1
```

Update the IOA exclusions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IoaExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsIoaExclusionUpdateReqV1(); // \OpenAPI\Client\Model\RequestsIoaExclusionUpdateReqV1

try {
    $result = $apiInstance->updateIOAExclusionsV1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IoaExclusionsApi->updateIOAExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsIoaExclusionUpdateReqV1**](../Model/RequestsIoaExclusionUpdateReqV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesIoaExclusionRespV1**](../Model/ResponsesIoaExclusionRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
