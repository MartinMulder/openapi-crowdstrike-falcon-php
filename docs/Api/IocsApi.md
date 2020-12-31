# OpenAPI\Client\IocsApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIOC()**](IocsApi.md#createIOC) | **POST** /indicators/entities/iocs/v1 | Create a new IOC
[**deleteIOC()**](IocsApi.md#deleteIOC) | **DELETE** /indicators/entities/iocs/v1 | Delete an IOC by providing a type and value
[**devicesCount()**](IocsApi.md#devicesCount) | **GET** /indicators/aggregates/devices-count/v1 | Number of hosts in your customer account that have observed a given custom IOC
[**devicesRanOn()**](IocsApi.md#devicesRanOn) | **GET** /indicators/queries/devices/v1 | Find hosts that have observed a given custom IOC. For details about those hosts, use GET /devices/entities/devices/v1
[**entitiesProcesses()**](IocsApi.md#entitiesProcesses) | **GET** /processes/entities/processes/v1 | For the provided ProcessID retrieve the process details
[**getIOC()**](IocsApi.md#getIOC) | **GET** /indicators/entities/iocs/v1 | Get an IOC by providing a type and value
[**processesRanOn()**](IocsApi.md#processesRanOn) | **GET** /indicators/queries/processes/v1 | Search for processes associated with a custom IOC
[**queryIOCs()**](IocsApi.md#queryIOCs) | **GET** /indicators/queries/iocs/v1 | Search the custom IOCs in your customer account
[**updateIOC()**](IocsApi.md#updateIOC) | **PATCH** /indicators/entities/iocs/v1 | Update an IOC by providing a type and value


## `createIOC()`

```php
createIOC($body): \OpenAPI\Client\Model\ApiMsaReplyIOC
```

Create a new IOC

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\ApiIOCViewRecord()); // \OpenAPI\Client\Model\ApiIOCViewRecord[] | Create a new IOC by providing a JSON object that includes these key/value pairs:  **type** (required): The type of the indicator. Valid values:  - sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  - md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  - domain: A domain name. Length - min: 1, max: 200.  - ipv4: An IPv4 address. Must be a valid IP address.  - ipv6: An IPv6 address. Must be a valid IP address.  **value** (required): The string representation of the indicator.  **policy** (required): Action to take when a host observes the custom IOC. Values:  - detect: Enable detections for this custom IOC  - none: Disable detections for this custom IOC  **share_level** (optional): Visibility of this custom IOC. All custom IOCs are visible only within your customer account, so only one value is valid:  - red  **expiration_days** (optional): Number of days this custom IOC is active. Only applies for the types `domain`, `ipv4`, and `ipv6`.  **source** (optional): The source where this indicator originated. This can be used for tracking where this indicator was defined. Limit 200 characters.  **description** (optional): Descriptive label for this custom IOC

try {
    $result = $apiInstance->createIOC($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IocsApi->createIOC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ApiIOCViewRecord[]**](../Model/ApiIOCViewRecord.md)| Create a new IOC by providing a JSON object that includes these key/value pairs:  **type** (required): The type of the indicator. Valid values:  - sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  - md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  - domain: A domain name. Length - min: 1, max: 200.  - ipv4: An IPv4 address. Must be a valid IP address.  - ipv6: An IPv6 address. Must be a valid IP address.  **value** (required): The string representation of the indicator.  **policy** (required): Action to take when a host observes the custom IOC. Values:  - detect: Enable detections for this custom IOC  - none: Disable detections for this custom IOC  **share_level** (optional): Visibility of this custom IOC. All custom IOCs are visible only within your customer account, so only one value is valid:  - red  **expiration_days** (optional): Number of days this custom IOC is active. Only applies for the types &#x60;domain&#x60;, &#x60;ipv4&#x60;, and &#x60;ipv6&#x60;.  **source** (optional): The source where this indicator originated. This can be used for tracking where this indicator was defined. Limit 200 characters.  **description** (optional): Descriptive label for this custom IOC |

### Return type

[**\OpenAPI\Client\Model\ApiMsaReplyIOC**](../Model/ApiMsaReplyIOC.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIOC()`

```php
deleteIOC($type, $value): \OpenAPI\Client\Model\ApiMsaReplyIOC
```

Delete an IOC by providing a type and value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address.
$value = 'value_example'; // string | The string representation of the indicator

try {
    $result = $apiInstance->deleteIOC($type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IocsApi->deleteIOC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address. |
 **value** | **string**| The string representation of the indicator |

### Return type

[**\OpenAPI\Client\Model\ApiMsaReplyIOC**](../Model/ApiMsaReplyIOC.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `devicesCount()`

```php
devicesCount($type, $value): \OpenAPI\Client\Model\ApiMsaReplyIOCDevicesCount
```

Number of hosts in your customer account that have observed a given custom IOC

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address.
$value = 'value_example'; // string | The string representation of the indicator

try {
    $result = $apiInstance->devicesCount($type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IocsApi->devicesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address. |
 **value** | **string**| The string representation of the indicator |

### Return type

[**\OpenAPI\Client\Model\ApiMsaReplyIOCDevicesCount**](../Model/ApiMsaReplyIOCDevicesCount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `devicesRanOn()`

```php
devicesRanOn($type, $value, $limit, $offset): \OpenAPI\Client\Model\ApiMsaReplyDevicesRanOn
```

Find hosts that have observed a given custom IOC. For details about those hosts, use GET /devices/entities/devices/v1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address.
$value = 'value_example'; // string | The string representation of the indicator
$limit = 'limit_example'; // string | The first process to return, where 0 is the latest offset. Use with the offset parameter to manage pagination of results.
$offset = 'offset_example'; // string | The first process to return, where 0 is the latest offset. Use with the limit parameter to manage pagination of results.

try {
    $result = $apiInstance->devicesRanOn($type, $value, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IocsApi->devicesRanOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address. |
 **value** | **string**| The string representation of the indicator |
 **limit** | **string**| The first process to return, where 0 is the latest offset. Use with the offset parameter to manage pagination of results. | [optional]
 **offset** | **string**| The first process to return, where 0 is the latest offset. Use with the limit parameter to manage pagination of results. | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiMsaReplyDevicesRanOn**](../Model/ApiMsaReplyDevicesRanOn.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entitiesProcesses()`

```php
entitiesProcesses($ids): \OpenAPI\Client\Model\ApiMsaProcessDetailResponse
```

For the provided ProcessID retrieve the process details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | ProcessID for the running process you want to lookup

try {
    $result = $apiInstance->entitiesProcesses($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IocsApi->entitiesProcesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| ProcessID for the running process you want to lookup |

### Return type

[**\OpenAPI\Client\Model\ApiMsaProcessDetailResponse**](../Model/ApiMsaProcessDetailResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIOC()`

```php
getIOC($type, $value): \OpenAPI\Client\Model\ApiMsaReplyIOC
```

Get an IOC by providing a type and value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address.
$value = 'value_example'; // string | The string representation of the indicator

try {
    $result = $apiInstance->getIOC($type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IocsApi->getIOC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address. |
 **value** | **string**| The string representation of the indicator |

### Return type

[**\OpenAPI\Client\Model\ApiMsaReplyIOC**](../Model/ApiMsaReplyIOC.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processesRanOn()`

```php
processesRanOn($type, $value, $device_id, $limit, $offset): \OpenAPI\Client\Model\ApiMsaReplyProcessesRanOn
```

Search for processes associated with a custom IOC

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address.
$value = 'value_example'; // string | The string representation of the indicator
$device_id = 'device_id_example'; // string | Specify a host's ID to return only processes from that host. Get a host's ID from GET /devices/queries/devices/v1, the Falcon console, or the Streaming API.
$limit = 'limit_example'; // string | The first process to return, where 0 is the latest offset. Use with the offset parameter to manage pagination of results.
$offset = 'offset_example'; // string | The first process to return, where 0 is the latest offset. Use with the limit parameter to manage pagination of results.

try {
    $result = $apiInstance->processesRanOn($type, $value, $device_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IocsApi->processesRanOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address. |
 **value** | **string**| The string representation of the indicator |
 **device_id** | **string**| Specify a host&#39;s ID to return only processes from that host. Get a host&#39;s ID from GET /devices/queries/devices/v1, the Falcon console, or the Streaming API. |
 **limit** | **string**| The first process to return, where 0 is the latest offset. Use with the offset parameter to manage pagination of results. | [optional]
 **offset** | **string**| The first process to return, where 0 is the latest offset. Use with the limit parameter to manage pagination of results. | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiMsaReplyProcessesRanOn**](../Model/ApiMsaReplyProcessesRanOn.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIOCs()`

```php
queryIOCs($types, $values, $from_expiration_timestamp, $to_expiration_timestamp, $policies, $sources, $share_levels, $created_by, $deleted_by, $include_deleted): \OpenAPI\Client\Model\ApiMsaReplyIOCIDs
```

Search the custom IOCs in your customer account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$types = 'types_example'; // string | The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address.
$values = 'values_example'; // string | The string representation of the indicator
$from_expiration_timestamp = 'from_expiration_timestamp_example'; // string | Find custom IOCs created after this time (RFC-3339 timestamp)
$to_expiration_timestamp = 'to_expiration_timestamp_example'; // string | Find custom IOCs created before this time (RFC-3339 timestamp)
$policies = 'policies_example'; // string | \\ndetect: Find custom IOCs that produce notifications\\n\\nnone: Find custom IOCs the particular indicator has been detected on a host. This is equivalent to turning the indicator off.
$sources = 'sources_example'; // string | The source where this indicator originated. This can be used for tracking where this indicator was defined. Limit 200 characters.
$share_levels = 'share_levels_example'; // string | The level at which the indicator will be shared. Currently only red share level (not shared) is supported, indicating that the IOC isn't shared with other FH customers.
$created_by = 'created_by_example'; // string | created_by
$deleted_by = 'deleted_by_example'; // string | The user or API client who deleted the custom IOC
$include_deleted = 'include_deleted_example'; // string | true: Include deleted IOCs  false: Don't include deleted IOCs (default)

try {
    $result = $apiInstance->queryIOCs($types, $values, $from_expiration_timestamp, $to_expiration_timestamp, $policies, $sources, $share_levels, $created_by, $deleted_by, $include_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IocsApi->queryIOCs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **types** | **string**| The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address. | [optional]
 **values** | **string**| The string representation of the indicator | [optional]
 **from_expiration_timestamp** | **string**| Find custom IOCs created after this time (RFC-3339 timestamp) | [optional]
 **to_expiration_timestamp** | **string**| Find custom IOCs created before this time (RFC-3339 timestamp) | [optional]
 **policies** | **string**| \\ndetect: Find custom IOCs that produce notifications\\n\\nnone: Find custom IOCs the particular indicator has been detected on a host. This is equivalent to turning the indicator off. | [optional]
 **sources** | **string**| The source where this indicator originated. This can be used for tracking where this indicator was defined. Limit 200 characters. | [optional]
 **share_levels** | **string**| The level at which the indicator will be shared. Currently only red share level (not shared) is supported, indicating that the IOC isn&#39;t shared with other FH customers. | [optional]
 **created_by** | **string**| created_by | [optional]
 **deleted_by** | **string**| The user or API client who deleted the custom IOC | [optional]
 **include_deleted** | **string**| true: Include deleted IOCs  false: Don&#39;t include deleted IOCs (default) | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiMsaReplyIOCIDs**](../Model/ApiMsaReplyIOCIDs.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIOC()`

```php
updateIOC($type, $value, $body): \OpenAPI\Client\Model\ApiMsaReplyIOC
```

Update an IOC by providing a type and value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address.
$value = 'value_example'; // string | The string representation of the indicator
$body = new \OpenAPI\Client\Model\ApiIOCViewRecord(); // \OpenAPI\Client\Model\ApiIOCViewRecord

try {
    $result = $apiInstance->updateIOC($type, $value, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IocsApi->updateIOC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The type of the indicator. Valid types include:  sha256: A hex-encoded sha256 hash string. Length - min: 64, max: 64.  md5: A hex-encoded md5 hash string. Length - min 32, max: 32.  domain: A domain name. Length - min: 1, max: 200.  ipv4: An IPv4 address. Must be a valid IP address.  ipv6: An IPv6 address. Must be a valid IP address. |
 **value** | **string**| The string representation of the indicator |
 **body** | [**\OpenAPI\Client\Model\ApiIOCViewRecord**](../Model/ApiIOCViewRecord.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApiMsaReplyIOC**](../Model/ApiMsaReplyIOC.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
