# OpenAPI\Client\HostsApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeviceDetails()**](HostsApi.md#getDeviceDetails) | **GET** /devices/entities/devices/v1 | Get details on one or more hosts by providing agent IDs (AID). You can get a host&#39;s agent IDs (AIDs) from the /devices/queries/devices/v1 endpoint, the Falcon console or the Streaming API
[**performActionV2()**](HostsApi.md#performActionV2) | **POST** /devices/entities/devices-actions/v2 | Take various actions on the hosts in your environment. Contain or lift containment on a host. Delete or restore a host.
[**queryDevicesByFilter()**](HostsApi.md#queryDevicesByFilter) | **GET** /devices/queries/devices/v1 | Search for hosts in your environment by platform, hostname, IP, and other criteria.
[**queryDevicesByFilterScroll()**](HostsApi.md#queryDevicesByFilterScroll) | **GET** /devices/queries/devices-scroll/v1 | Search for hosts in your environment by platform, hostname, IP, and other criteria with continuous pagination capability (based on offset pointer which expires after 2 minutes with no maximum limit)
[**queryHiddenDevices()**](HostsApi.md#queryHiddenDevices) | **GET** /devices/queries/devices-hidden/v1 | Retrieve hidden hosts that match the provided filter criteria.


## `getDeviceDetails()`

```php
getDeviceDetails($ids): \OpenAPI\Client\Model\DomainDeviceDetailsResponseSwagger
```

Get details on one or more hosts by providing agent IDs (AID). You can get a host's agent IDs (AIDs) from the /devices/queries/devices/v1 endpoint, the Falcon console or the Streaming API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The host agentIDs used to get details on

try {
    $result = $apiInstance->getDeviceDetails($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostsApi->getDeviceDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The host agentIDs used to get details on |

### Return type

[**\OpenAPI\Client\Model\DomainDeviceDetailsResponseSwagger**](../Model/DomainDeviceDetailsResponseSwagger.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performActionV2()`

```php
performActionV2($action_name, $body): \OpenAPI\Client\Model\MsaReplyAffectedEntities
```

Take various actions on the hosts in your environment. Contain or lift containment on a host. Delete or restore a host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action_name = 'action_name_example'; // string | Specify one of these actions:  - `contain` - This action contains the host, which stops any network communications to locations other than the CrowdStrike cloud and IPs specified in your [containment policy](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#containmentpolicy) - `lift_containment`: This action lifts containment on the host, which returns its network communications to normal - `hide_host`: This action will delete a host. After the host is deleted, no new detections for that host will be reported via UI or APIs - `unhide_host`: This action will restore a host. Detection reporting will resume after the host is restored
$body = new \OpenAPI\Client\Model\MsaEntityActionRequestV2(); // \OpenAPI\Client\Model\MsaEntityActionRequestV2 | The host agent ID (AID) of the host you want to contain. Get an agent ID from a detection, the Falcon console, or the Streaming API.  Provide the ID in JSON format with the key `ids` and the value in square brackets, such as:   `\"ids\": [\"123456789\"]`

try {
    $result = $apiInstance->performActionV2($action_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostsApi->performActionV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action_name** | **string**| Specify one of these actions:  - &#x60;contain&#x60; - This action contains the host, which stops any network communications to locations other than the CrowdStrike cloud and IPs specified in your [containment policy](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#containmentpolicy) - &#x60;lift_containment&#x60;: This action lifts containment on the host, which returns its network communications to normal - &#x60;hide_host&#x60;: This action will delete a host. After the host is deleted, no new detections for that host will be reported via UI or APIs - &#x60;unhide_host&#x60;: This action will restore a host. Detection reporting will resume after the host is restored |
 **body** | [**\OpenAPI\Client\Model\MsaEntityActionRequestV2**](../Model/MsaEntityActionRequestV2.md)| The host agent ID (AID) of the host you want to contain. Get an agent ID from a detection, the Falcon console, or the Streaming API.  Provide the ID in JSON format with the key &#x60;ids&#x60; and the value in square brackets, such as:   &#x60;\&quot;ids\&quot;: [\&quot;123456789\&quot;]&#x60; |

### Return type

[**\OpenAPI\Client\Model\MsaReplyAffectedEntities**](../Model/MsaReplyAffectedEntities.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryDevicesByFilter()`

```php
queryDevicesByFilter($offset, $limit, $sort, $filter): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for hosts in your environment by platform, hostname, IP, and other criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by (e.g. status.desc or hostname.asc)
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results

try {
    $result = $apiInstance->queryDevicesByFilter($offset, $limit, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostsApi->queryDevicesByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **limit** | **int**| The maximum records to return. [1-5000] | [optional]
 **sort** | **string**| The property to sort by (e.g. status.desc or hostname.asc) | [optional]
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

## `queryDevicesByFilterScroll()`

```php
queryDevicesByFilterScroll($offset, $limit, $sort, $filter): \OpenAPI\Client\Model\DomainDeviceResponse
```

Search for hosts in your environment by platform, hostname, IP, and other criteria with continuous pagination capability (based on offset pointer which expires after 2 minutes with no maximum limit)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 'offset_example'; // string | The offset to page from, for the next result set
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by (e.g. status.desc or hostname.asc)
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results

try {
    $result = $apiInstance->queryDevicesByFilterScroll($offset, $limit, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostsApi->queryDevicesByFilterScroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **string**| The offset to page from, for the next result set | [optional]
 **limit** | **int**| The maximum records to return. [1-5000] | [optional]
 **sort** | **string**| The property to sort by (e.g. status.desc or hostname.asc) | [optional]
 **filter** | **string**| The filter expression that should be used to limit the results | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainDeviceResponse**](../Model/DomainDeviceResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryHiddenDevices()`

```php
queryHiddenDevices($offset, $limit, $sort, $filter): \OpenAPI\Client\Model\MsaQueryResponse
```

Retrieve hidden hosts that match the provided filter criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by (e.g. status.desc or hostname.asc)
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results

try {
    $result = $apiInstance->queryHiddenDevices($offset, $limit, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostsApi->queryHiddenDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **limit** | **int**| The maximum records to return. [1-5000] | [optional]
 **sort** | **string**| The property to sort by (e.g. status.desc or hostname.asc) | [optional]
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
