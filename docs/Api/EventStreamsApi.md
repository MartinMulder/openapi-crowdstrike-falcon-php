# OpenAPI\Client\EventStreamsApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAvailableStreamsOAuth2()**](EventStreamsApi.md#listAvailableStreamsOAuth2) | **GET** /sensors/entities/datafeed/v2 | Discover all event streams in your environment
[**refreshActiveStreamSession()**](EventStreamsApi.md#refreshActiveStreamSession) | **POST** /sensors/entities/datafeed-actions/v1/{partition} | Refresh an active event stream. Use the URL shown in a GET /sensors/entities/datafeed/v2 response.


## `listAvailableStreamsOAuth2()`

```php
listAvailableStreamsOAuth2($app_id, $format): \OpenAPI\Client\Model\MainDiscoveryResponseV2
```

Discover all event streams in your environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 'app_id_example'; // string | Label that identifies your connection. Max: 32 alphanumeric characters (a-z, A-Z, 0-9).
$format = 'format_example'; // string | Format for streaming events. Valid values: json, flatjson

try {
    $result = $apiInstance->listAvailableStreamsOAuth2($app_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStreamsApi->listAvailableStreamsOAuth2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Label that identifies your connection. Max: 32 alphanumeric characters (a-z, A-Z, 0-9). |
 **format** | **string**| Format for streaming events. Valid values: json, flatjson | [optional]

### Return type

[**\OpenAPI\Client\Model\MainDiscoveryResponseV2**](../Model/MainDiscoveryResponseV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshActiveStreamSession()`

```php
refreshActiveStreamSession($action_name, $app_id, $partition): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Refresh an active event stream. Use the URL shown in a GET /sensors/entities/datafeed/v2 response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action_name = 'action_name_example'; // string | Action name. Allowed value is refresh_active_stream_session.
$app_id = 'app_id_example'; // string | Label that identifies your connection. Max: 32 alphanumeric characters (a-z, A-Z, 0-9).
$partition = 56; // int | Partition to request data for.

try {
    $result = $apiInstance->refreshActiveStreamSession($action_name, $app_id, $partition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventStreamsApi->refreshActiveStreamSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action_name** | **string**| Action name. Allowed value is refresh_active_stream_session. |
 **app_id** | **string**| Label that identifies your connection. Max: 32 alphanumeric characters (a-z, A-Z, 0-9). |
 **partition** | **int**| Partition to request data for. |

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
