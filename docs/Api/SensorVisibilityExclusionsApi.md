# OpenAPI\Client\SensorVisibilityExclusionsApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSVExclusionsV1()**](SensorVisibilityExclusionsApi.md#createSVExclusionsV1) | **POST** /policy/entities/sv-exclusions/v1 | Create the sensor visibility exclusions
[**deleteSensorVisibilityExclusionsV1()**](SensorVisibilityExclusionsApi.md#deleteSensorVisibilityExclusionsV1) | **DELETE** /policy/entities/sv-exclusions/v1 | Delete the sensor visibility exclusions by id
[**getSensorVisibilityExclusionsV1()**](SensorVisibilityExclusionsApi.md#getSensorVisibilityExclusionsV1) | **GET** /policy/entities/sv-exclusions/v1 | Get a set of Sensor Visibility Exclusions by specifying their IDs
[**querySensorVisibilityExclusionsV1()**](SensorVisibilityExclusionsApi.md#querySensorVisibilityExclusionsV1) | **GET** /policy/queries/sv-exclusions/v1 | Search for sensor visibility exclusions.
[**updateSensorVisibilityExclusionsV1()**](SensorVisibilityExclusionsApi.md#updateSensorVisibilityExclusionsV1) | **PATCH** /policy/entities/sv-exclusions/v1 | Update the sensor visibility exclusions


## `createSVExclusionsV1()`

```php
createSVExclusionsV1($body): \OpenAPI\Client\Model\ResponsesMlExclusionRespV1
```

Create the sensor visibility exclusions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorVisibilityExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsSvExclusionCreateReqV1(); // \OpenAPI\Client\Model\RequestsSvExclusionCreateReqV1

try {
    $result = $apiInstance->createSVExclusionsV1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorVisibilityExclusionsApi->createSVExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsSvExclusionCreateReqV1**](../Model/RequestsSvExclusionCreateReqV1.md)|  |

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

## `deleteSensorVisibilityExclusionsV1()`

```php
deleteSensorVisibilityExclusionsV1($ids, $comment): \OpenAPI\Client\Model\MsaQueryResponse
```

Delete the sensor visibility exclusions by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorVisibilityExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The ids of the exclusions to delete
$comment = 'comment_example'; // string | Explains why this exclusions was deleted

try {
    $result = $apiInstance->deleteSensorVisibilityExclusionsV1($ids, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorVisibilityExclusionsApi->deleteSensorVisibilityExclusionsV1: ', $e->getMessage(), PHP_EOL;
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

## `getSensorVisibilityExclusionsV1()`

```php
getSensorVisibilityExclusionsV1($ids): \OpenAPI\Client\Model\ResponsesSvExclusionRespV1
```

Get a set of Sensor Visibility Exclusions by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorVisibilityExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The ids of the exclusions to retrieve

try {
    $result = $apiInstance->getSensorVisibilityExclusionsV1($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorVisibilityExclusionsApi->getSensorVisibilityExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The ids of the exclusions to retrieve |

### Return type

[**\OpenAPI\Client\Model\ResponsesSvExclusionRespV1**](../Model/ResponsesSvExclusionRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySensorVisibilityExclusionsV1()`

```php
querySensorVisibilityExclusionsV1($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for sensor visibility exclusions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorVisibilityExclusionsApi(
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
    $result = $apiInstance->querySensorVisibilityExclusionsV1($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorVisibilityExclusionsApi->querySensorVisibilityExclusionsV1: ', $e->getMessage(), PHP_EOL;
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

## `updateSensorVisibilityExclusionsV1()`

```php
updateSensorVisibilityExclusionsV1($body): \OpenAPI\Client\Model\ResponsesSvExclusionRespV1
```

Update the sensor visibility exclusions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorVisibilityExclusionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsSvExclusionUpdateReqV1(); // \OpenAPI\Client\Model\RequestsSvExclusionUpdateReqV1

try {
    $result = $apiInstance->updateSensorVisibilityExclusionsV1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorVisibilityExclusionsApi->updateSensorVisibilityExclusionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsSvExclusionUpdateReqV1**](../Model/RequestsSvExclusionUpdateReqV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesSvExclusionRespV1**](../Model/ResponsesSvExclusionRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
