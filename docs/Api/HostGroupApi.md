# OpenAPI\Client\HostGroupApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createHostGroups()**](HostGroupApi.md#createHostGroups) | **POST** /devices/entities/host-groups/v1 | Create Host Groups by specifying details about the group to create
[**deleteHostGroups()**](HostGroupApi.md#deleteHostGroups) | **DELETE** /devices/entities/host-groups/v1 | Delete a set of Host Groups by specifying their IDs
[**getHostGroups()**](HostGroupApi.md#getHostGroups) | **GET** /devices/entities/host-groups/v1 | Retrieve a set of Host Groups by specifying their IDs
[**performGroupAction()**](HostGroupApi.md#performGroupAction) | **POST** /devices/entities/host-group-actions/v1 | Perform the specified action on the Host Groups specified in the request
[**queryCombinedGroupMembers()**](HostGroupApi.md#queryCombinedGroupMembers) | **GET** /devices/combined/host-group-members/v1 | Search for members of a Host Group in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria
[**queryCombinedHostGroups()**](HostGroupApi.md#queryCombinedHostGroups) | **GET** /devices/combined/host-groups/v1 | Search for Host Groups in your environment by providing an FQL filter and paging details. Returns a set of Host Groups which match the filter criteria
[**queryGroupMembers()**](HostGroupApi.md#queryGroupMembers) | **GET** /devices/queries/host-group-members/v1 | Search for members of a Host Group in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria
[**queryHostGroups()**](HostGroupApi.md#queryHostGroups) | **GET** /devices/queries/host-groups/v1 | Search for Host Groups in your environment by providing an FQL filter and paging details. Returns a set of Host Group IDs which match the filter criteria
[**updateHostGroups()**](HostGroupApi.md#updateHostGroups) | **PATCH** /devices/entities/host-groups/v1 | Update Host Groups by specifying the ID of the group and details to update


## `createHostGroups()`

```php
createHostGroups($body): \OpenAPI\Client\Model\ResponsesHostGroupsV1
```

Create Host Groups by specifying details about the group to create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsCreateGroupsV1(); // \OpenAPI\Client\Model\RequestsCreateGroupsV1

try {
    $result = $apiInstance->createHostGroups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostGroupApi->createHostGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsCreateGroupsV1**](../Model/RequestsCreateGroupsV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesHostGroupsV1**](../Model/ResponsesHostGroupsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteHostGroups()`

```php
deleteHostGroups($ids): \OpenAPI\Client\Model\MsaQueryResponse
```

Delete a set of Host Groups by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the Host Groups to delete

try {
    $result = $apiInstance->deleteHostGroups($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostGroupApi->deleteHostGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the Host Groups to delete |

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

## `getHostGroups()`

```php
getHostGroups($ids): \OpenAPI\Client\Model\ResponsesHostGroupsV1
```

Retrieve a set of Host Groups by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the Host Groups to return

try {
    $result = $apiInstance->getHostGroups($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostGroupApi->getHostGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the Host Groups to return |

### Return type

[**\OpenAPI\Client\Model\ResponsesHostGroupsV1**](../Model/ResponsesHostGroupsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performGroupAction()`

```php
performGroupAction($action_name, $body): \OpenAPI\Client\Model\ResponsesHostGroupsV1
```

Perform the specified action on the Host Groups specified in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action_name = 'action_name_example'; // string | The action to perform
$body = new \OpenAPI\Client\Model\MsaEntityActionRequestV2(); // \OpenAPI\Client\Model\MsaEntityActionRequestV2

try {
    $result = $apiInstance->performGroupAction($action_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostGroupApi->performGroupAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action_name** | **string**| The action to perform |
 **body** | [**\OpenAPI\Client\Model\MsaEntityActionRequestV2**](../Model/MsaEntityActionRequestV2.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesHostGroupsV1**](../Model/ResponsesHostGroupsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedGroupMembers()`

```php
queryCombinedGroupMembers($id, $filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ResponsesHostGroupMembersV1
```

Search for members of a Host Group in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Host Group to search for members of
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->queryCombinedGroupMembers($id, $filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostGroupApi->queryCombinedGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Host Group to search for members of | [optional]
 **filter** | **string**| The filter expression that should be used to limit the results | [optional]
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **limit** | **int**| The maximum records to return. [1-5000] | [optional]
 **sort** | **string**| The property to sort by | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponsesHostGroupMembersV1**](../Model/ResponsesHostGroupMembersV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedHostGroups()`

```php
queryCombinedHostGroups($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ResponsesHostGroupsV1
```

Search for Host Groups in your environment by providing an FQL filter and paging details. Returns a set of Host Groups which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->queryCombinedHostGroups($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostGroupApi->queryCombinedHostGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| The filter expression that should be used to limit the results | [optional]
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **limit** | **int**| The maximum records to return. [1-5000] | [optional]
 **sort** | **string**| The property to sort by | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponsesHostGroupsV1**](../Model/ResponsesHostGroupsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryGroupMembers()`

```php
queryGroupMembers($id, $filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for members of a Host Group in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Host Group to search for members of
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->queryGroupMembers($id, $filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostGroupApi->queryGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Host Group to search for members of | [optional]
 **filter** | **string**| The filter expression that should be used to limit the results | [optional]
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **limit** | **int**| The maximum records to return. [1-5000] | [optional]
 **sort** | **string**| The property to sort by | [optional]

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

## `queryHostGroups()`

```php
queryHostGroups($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for Host Groups in your environment by providing an FQL filter and paging details. Returns a set of Host Group IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->queryHostGroups($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostGroupApi->queryHostGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| The filter expression that should be used to limit the results | [optional]
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **limit** | **int**| The maximum records to return. [1-5000] | [optional]
 **sort** | **string**| The property to sort by | [optional]

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

## `updateHostGroups()`

```php
updateHostGroups($body): \OpenAPI\Client\Model\ResponsesHostGroupsV1
```

Update Host Groups by specifying the ID of the group and details to update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\HostGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsUpdateGroupsV1(); // \OpenAPI\Client\Model\RequestsUpdateGroupsV1

try {
    $result = $apiInstance->updateHostGroups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostGroupApi->updateHostGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsUpdateGroupsV1**](../Model/RequestsUpdateGroupsV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesHostGroupsV1**](../Model/ResponsesHostGroupsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
