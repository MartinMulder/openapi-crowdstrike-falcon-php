# OpenAPI\Client\SensorDownloadApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadSensorInstallerById()**](SensorDownloadApi.md#downloadSensorInstallerById) | **GET** /sensors/entities/download-installer/v1 | Download sensor installer by SHA256 ID
[**getCombinedSensorInstallersByQuery()**](SensorDownloadApi.md#getCombinedSensorInstallersByQuery) | **GET** /sensors/combined/installers/v1 | Get sensor installer details by provided query
[**getSensorInstallersByQuery()**](SensorDownloadApi.md#getSensorInstallersByQuery) | **GET** /sensors/queries/installers/v1 | Get sensor installer IDs by provided query
[**getSensorInstallersCCIDByQuery()**](SensorDownloadApi.md#getSensorInstallersCCIDByQuery) | **GET** /sensors/queries/installers/ccid/v1 | Get CCID to use with sensor installers
[**getSensorInstallersEntities()**](SensorDownloadApi.md#getSensorInstallersEntities) | **GET** /sensors/entities/installers/v1 | Get sensor installer details by provided SHA256 IDs


## `downloadSensorInstallerById()`

```php
downloadSensorInstallerById($id): object
```

Download sensor installer by SHA256 ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | SHA256 of the installer to download

try {
    $result = $apiInstance->downloadSensorInstallerById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorDownloadApi->downloadSensorInstallerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| SHA256 of the installer to download |

### Return type

**object**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCombinedSensorInstallersByQuery()`

```php
getCombinedSensorInstallersByQuery($offset, $limit, $sort, $filter): \OpenAPI\Client\Model\DomainSensorInstallersV1
```

Get sensor installer details by provided query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | The first item to return, where 0 is the latest item. Use with the limit parameter to manage pagination of results.
$limit = 56; // int | The number of items to return in this response (default: 100, max: 500). Use with the offset parameter to manage pagination of results.
$sort = 'sort_example'; // string | Sort items using their properties. Common sort options include:  <ul><li>version|asc</li><li>release_date|desc</li></ul>
$filter = 'filter_example'; // string | Filter items using a query in Falcon Query Language (FQL). An asterisk wildcard * includes all results.  Common filter options include: <ul><li>platform:\"windows\"</li><li>version:>\"5.2\"</li></ul>

try {
    $result = $apiInstance->getCombinedSensorInstallersByQuery($offset, $limit, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorDownloadApi->getCombinedSensorInstallersByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The first item to return, where 0 is the latest item. Use with the limit parameter to manage pagination of results. | [optional]
 **limit** | **int**| The number of items to return in this response (default: 100, max: 500). Use with the offset parameter to manage pagination of results. | [optional]
 **sort** | **string**| Sort items using their properties. Common sort options include:  &lt;ul&gt;&lt;li&gt;version|asc&lt;/li&gt;&lt;li&gt;release_date|desc&lt;/li&gt;&lt;/ul&gt; | [optional]
 **filter** | **string**| Filter items using a query in Falcon Query Language (FQL). An asterisk wildcard * includes all results.  Common filter options include: &lt;ul&gt;&lt;li&gt;platform:\&quot;windows\&quot;&lt;/li&gt;&lt;li&gt;version:&gt;\&quot;5.2\&quot;&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainSensorInstallersV1**](../Model/DomainSensorInstallersV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSensorInstallersByQuery()`

```php
getSensorInstallersByQuery($offset, $limit, $sort, $filter): \OpenAPI\Client\Model\MsaQueryResponse
```

Get sensor installer IDs by provided query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | The first item to return, where 0 is the latest item. Use with the limit parameter to manage pagination of results.
$limit = 56; // int | The number of items to return in this response (default: 100, max: 500). Use with the offset parameter to manage pagination of results.
$sort = 'sort_example'; // string | Sort items using their properties. Common sort options include:  <ul><li>version|asc</li><li>release_date|desc</li></ul>
$filter = 'filter_example'; // string | Filter items using a query in Falcon Query Language (FQL). An asterisk wildcard * includes all results.  Common filter options include: <ul><li>platform:\"windows\"</li><li>version:>\"5.2\"</li></ul>

try {
    $result = $apiInstance->getSensorInstallersByQuery($offset, $limit, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorDownloadApi->getSensorInstallersByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The first item to return, where 0 is the latest item. Use with the limit parameter to manage pagination of results. | [optional]
 **limit** | **int**| The number of items to return in this response (default: 100, max: 500). Use with the offset parameter to manage pagination of results. | [optional]
 **sort** | **string**| Sort items using their properties. Common sort options include:  &lt;ul&gt;&lt;li&gt;version|asc&lt;/li&gt;&lt;li&gt;release_date|desc&lt;/li&gt;&lt;/ul&gt; | [optional]
 **filter** | **string**| Filter items using a query in Falcon Query Language (FQL). An asterisk wildcard * includes all results.  Common filter options include: &lt;ul&gt;&lt;li&gt;platform:\&quot;windows\&quot;&lt;/li&gt;&lt;li&gt;version:&gt;\&quot;5.2\&quot;&lt;/li&gt;&lt;/ul&gt; | [optional]

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

## `getSensorInstallersCCIDByQuery()`

```php
getSensorInstallersCCIDByQuery(): \OpenAPI\Client\Model\MsaQueryResponse
```

Get CCID to use with sensor installers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSensorInstallersCCIDByQuery();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorDownloadApi->getSensorInstallersCCIDByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getSensorInstallersEntities()`

```php
getSensorInstallersEntities($ids): \OpenAPI\Client\Model\DomainSensorInstallersV1
```

Get sensor installer details by provided SHA256 IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the installers

try {
    $result = $apiInstance->getSensorInstallersEntities($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorDownloadApi->getSensorInstallersEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the installers |

### Return type

[**\OpenAPI\Client\Model\DomainSensorInstallersV1**](../Model/DomainSensorInstallersV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
