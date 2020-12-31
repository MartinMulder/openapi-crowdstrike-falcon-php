# OpenAPI\Client\DeviceControlPoliciesApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeviceControlPolicies()**](DeviceControlPoliciesApi.md#createDeviceControlPolicies) | **POST** /policy/entities/device-control/v1 | Create Device Control Policies by specifying details about the policy to create
[**deleteDeviceControlPolicies()**](DeviceControlPoliciesApi.md#deleteDeviceControlPolicies) | **DELETE** /policy/entities/device-control/v1 | Delete a set of Device Control Policies by specifying their IDs
[**getDeviceControlPolicies()**](DeviceControlPoliciesApi.md#getDeviceControlPolicies) | **GET** /policy/entities/device-control/v1 | Retrieve a set of Device Control Policies by specifying their IDs
[**performDeviceControlPoliciesAction()**](DeviceControlPoliciesApi.md#performDeviceControlPoliciesAction) | **POST** /policy/entities/device-control-actions/v1 | Perform the specified action on the Device Control Policies specified in the request
[**queryCombinedDeviceControlPolicies()**](DeviceControlPoliciesApi.md#queryCombinedDeviceControlPolicies) | **GET** /policy/combined/device-control/v1 | Search for Device Control Policies in your environment by providing an FQL filter and paging details. Returns a set of Device Control Policies which match the filter criteria
[**queryCombinedDeviceControlPolicyMembers()**](DeviceControlPoliciesApi.md#queryCombinedDeviceControlPolicyMembers) | **GET** /policy/combined/device-control-members/v1 | Search for members of a Device Control Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria
[**queryDeviceControlPolicies()**](DeviceControlPoliciesApi.md#queryDeviceControlPolicies) | **GET** /policy/queries/device-control/v1 | Search for Device Control Policies in your environment by providing an FQL filter and paging details. Returns a set of Device Control Policy IDs which match the filter criteria
[**queryDeviceControlPolicyMembers()**](DeviceControlPoliciesApi.md#queryDeviceControlPolicyMembers) | **GET** /policy/queries/device-control-members/v1 | Search for members of a Device Control Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria
[**setDeviceControlPoliciesPrecedence()**](DeviceControlPoliciesApi.md#setDeviceControlPoliciesPrecedence) | **POST** /policy/entities/device-control-precedence/v1 | Sets the precedence of Device Control Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence
[**updateDeviceControlPolicies()**](DeviceControlPoliciesApi.md#updateDeviceControlPolicies) | **PATCH** /policy/entities/device-control/v1 | Update Device Control Policies by specifying the ID of the policy and details to update


## `createDeviceControlPolicies()`

```php
createDeviceControlPolicies($body): \OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1
```

Create Device Control Policies by specifying details about the policy to create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsCreateDeviceControlPoliciesV1(); // \OpenAPI\Client\Model\RequestsCreateDeviceControlPoliciesV1

try {
    $result = $apiInstance->createDeviceControlPolicies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->createDeviceControlPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsCreateDeviceControlPoliciesV1**](../Model/RequestsCreateDeviceControlPoliciesV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1**](../Model/ResponsesDeviceControlPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeviceControlPolicies()`

```php
deleteDeviceControlPolicies($ids): \OpenAPI\Client\Model\MsaQueryResponse
```

Delete a set of Device Control Policies by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the Device Control Policies to delete

try {
    $result = $apiInstance->deleteDeviceControlPolicies($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->deleteDeviceControlPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the Device Control Policies to delete |

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

## `getDeviceControlPolicies()`

```php
getDeviceControlPolicies($ids): \OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1
```

Retrieve a set of Device Control Policies by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the Device Control Policies to return

try {
    $result = $apiInstance->getDeviceControlPolicies($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->getDeviceControlPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the Device Control Policies to return |

### Return type

[**\OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1**](../Model/ResponsesDeviceControlPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performDeviceControlPoliciesAction()`

```php
performDeviceControlPoliciesAction($action_name, $body): \OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1
```

Perform the specified action on the Device Control Policies specified in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action_name = 'action_name_example'; // string | The action to perform
$body = new \OpenAPI\Client\Model\MsaEntityActionRequestV2(); // \OpenAPI\Client\Model\MsaEntityActionRequestV2

try {
    $result = $apiInstance->performDeviceControlPoliciesAction($action_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->performDeviceControlPoliciesAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action_name** | **string**| The action to perform |
 **body** | [**\OpenAPI\Client\Model\MsaEntityActionRequestV2**](../Model/MsaEntityActionRequestV2.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1**](../Model/ResponsesDeviceControlPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedDeviceControlPolicies()`

```php
queryCombinedDeviceControlPolicies($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1
```

Search for Device Control Policies in your environment by providing an FQL filter and paging details. Returns a set of Device Control Policies which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
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
    $result = $apiInstance->queryCombinedDeviceControlPolicies($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->queryCombinedDeviceControlPolicies: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1**](../Model/ResponsesDeviceControlPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedDeviceControlPolicyMembers()`

```php
queryCombinedDeviceControlPolicyMembers($id, $filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ResponsesPolicyMembersRespV1
```

Search for members of a Device Control Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Device Control Policy to search for members of
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->queryCombinedDeviceControlPolicyMembers($id, $filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->queryCombinedDeviceControlPolicyMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Device Control Policy to search for members of | [optional]
 **filter** | **string**| The filter expression that should be used to limit the results | [optional]
 **offset** | **int**| The offset to start retrieving records from | [optional]
 **limit** | **int**| The maximum records to return. [1-5000] | [optional]
 **sort** | **string**| The property to sort by | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponsesPolicyMembersRespV1**](../Model/ResponsesPolicyMembersRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryDeviceControlPolicies()`

```php
queryDeviceControlPolicies($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for Device Control Policies in your environment by providing an FQL filter and paging details. Returns a set of Device Control Policy IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
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
    $result = $apiInstance->queryDeviceControlPolicies($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->queryDeviceControlPolicies: ', $e->getMessage(), PHP_EOL;
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

## `queryDeviceControlPolicyMembers()`

```php
queryDeviceControlPolicyMembers($id, $filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for members of a Device Control Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Device Control Policy to search for members of
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->queryDeviceControlPolicyMembers($id, $filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->queryDeviceControlPolicyMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Device Control Policy to search for members of | [optional]
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

## `setDeviceControlPoliciesPrecedence()`

```php
setDeviceControlPoliciesPrecedence($body): \OpenAPI\Client\Model\MsaQueryResponse
```

Sets the precedence of Device Control Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsSetPolicyPrecedenceReqV1(); // \OpenAPI\Client\Model\RequestsSetPolicyPrecedenceReqV1

try {
    $result = $apiInstance->setDeviceControlPoliciesPrecedence($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->setDeviceControlPoliciesPrecedence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsSetPolicyPrecedenceReqV1**](../Model/RequestsSetPolicyPrecedenceReqV1.md)|  |

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

## `updateDeviceControlPolicies()`

```php
updateDeviceControlPolicies($body): \OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1
```

Update Device Control Policies by specifying the ID of the policy and details to update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsUpdateDeviceControlPoliciesV1(); // \OpenAPI\Client\Model\RequestsUpdateDeviceControlPoliciesV1

try {
    $result = $apiInstance->updateDeviceControlPolicies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceControlPoliciesApi->updateDeviceControlPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsUpdateDeviceControlPoliciesV1**](../Model/RequestsUpdateDeviceControlPoliciesV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesDeviceControlPoliciesV1**](../Model/ResponsesDeviceControlPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
