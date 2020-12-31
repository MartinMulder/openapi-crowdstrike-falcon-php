# OpenAPI\Client\MlExclusionsApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMLExclusionsV1()**](MlExclusionsApi.md#createMLExclusionsV1) | **POST** /policy/entities/ml-exclusions/v1 | Create the ML exclusions
[**deleteMLExclusionsV1()**](MlExclusionsApi.md#deleteMLExclusionsV1) | **DELETE** /policy/entities/ml-exclusions/v1 | Delete the ML exclusions by id
[**getMLExclusionsV1()**](MlExclusionsApi.md#getMLExclusionsV1) | **GET** /policy/entities/ml-exclusions/v1 | Get a set of ML Exclusions by specifying their IDs
[**queryMLExclusionsV1()**](MlExclusionsApi.md#queryMLExclusionsV1) | **GET** /policy/queries/ml-exclusions/v1 | Search for ML exclusions.
[**updateMLExclusionsV1()**](MlExclusionsApi.md#updateMLExclusionsV1) | **PATCH** /policy/entities/ml-exclusions/v1 | Update the ML exclusions


## `createMLExclusionsV1()`

```php
createMLExclusionsV1($body): \OpenAPI\Client\Model\ResponsesMlExclusionRespV1
```

Create the ML exclusions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MlExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsMlExclusionCreateReqV1(); // \OpenAPI\Client\Model\RequestsMlExclusionCreateReqV1

try {
    $result = $apiInstance->createMLExclusionsV1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MlExclusionsApi->createMLExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsMlExclusionCreateReqV1**](../Model/RequestsMlExclusionCreateReqV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesMlExclusionRespV1**](../Model/ResponsesMlExclusionRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMLExclusionsV1()`

```php
deleteMLExclusionsV1($ids, $comment): \OpenAPI\Client\Model\ResponsesMlExclusionRespV1
```

Delete the ML exclusions by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MlExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The ids of the exclusions to delete
$comment = 'comment_example'; // string | Explains why this exclusions was deleted

try {
    $result = $apiInstance->deleteMLExclusionsV1($ids, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MlExclusionsApi->deleteMLExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The ids of the exclusions to delete |
 **comment** | **string**| Explains why this exclusions was deleted | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponsesMlExclusionRespV1**](../Model/ResponsesMlExclusionRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMLExclusionsV1()`

```php
getMLExclusionsV1($ids): \OpenAPI\Client\Model\ResponsesMlExclusionRespV1
```

Get a set of ML Exclusions by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MlExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The ids of the exclusions to retrieve

try {
    $result = $apiInstance->getMLExclusionsV1($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MlExclusionsApi->getMLExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The ids of the exclusions to retrieve |

### Return type

[**\OpenAPI\Client\Model\ResponsesMlExclusionRespV1**](../Model/ResponsesMlExclusionRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMLExclusionsV1()`

```php
queryMLExclusionsV1($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for ML exclusions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MlExclusionsApi(
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
    $result = $apiInstance->queryMLExclusionsV1($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MlExclusionsApi->queryMLExclusionsV1: ', $e->getMessage(), PHP_EOL;
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

## `updateMLExclusionsV1()`

```php
updateMLExclusionsV1($body): \OpenAPI\Client\Model\ResponsesMlExclusionRespV1
```

Update the ML exclusions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MlExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsSvExclusionUpdateReqV1(); // \OpenAPI\Client\Model\RequestsSvExclusionUpdateReqV1

try {
    $result = $apiInstance->updateMLExclusionsV1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MlExclusionsApi->updateMLExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsSvExclusionUpdateReqV1**](../Model/RequestsSvExclusionUpdateReqV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesMlExclusionRespV1**](../Model/ResponsesMlExclusionRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
