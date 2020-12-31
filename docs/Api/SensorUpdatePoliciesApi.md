# OpenAPI\Client\SensorUpdatePoliciesApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSensorUpdatePolicies()**](SensorUpdatePoliciesApi.md#createSensorUpdatePolicies) | **POST** /policy/entities/sensor-update/v1 | Create Sensor Update Policies by specifying details about the policy to create
[**createSensorUpdatePoliciesV2()**](SensorUpdatePoliciesApi.md#createSensorUpdatePoliciesV2) | **POST** /policy/entities/sensor-update/v2 | Create Sensor Update Policies by specifying details about the policy to create with additional support for uninstall protection
[**deleteSensorUpdatePolicies()**](SensorUpdatePoliciesApi.md#deleteSensorUpdatePolicies) | **DELETE** /policy/entities/sensor-update/v1 | Delete a set of Sensor Update Policies by specifying their IDs
[**getSensorUpdatePolicies()**](SensorUpdatePoliciesApi.md#getSensorUpdatePolicies) | **GET** /policy/entities/sensor-update/v1 | Retrieve a set of Sensor Update Policies by specifying their IDs
[**getSensorUpdatePoliciesV2()**](SensorUpdatePoliciesApi.md#getSensorUpdatePoliciesV2) | **GET** /policy/entities/sensor-update/v2 | Retrieve a set of Sensor Update Policies with additional support for uninstall protection by specifying their IDs
[**performSensorUpdatePoliciesAction()**](SensorUpdatePoliciesApi.md#performSensorUpdatePoliciesAction) | **POST** /policy/entities/sensor-update-actions/v1 | Perform the specified action on the Sensor Update Policies specified in the request
[**queryCombinedSensorUpdateBuilds()**](SensorUpdatePoliciesApi.md#queryCombinedSensorUpdateBuilds) | **GET** /policy/combined/sensor-update-builds/v1 | Retrieve available builds for use with Sensor Update Policies
[**queryCombinedSensorUpdatePolicies()**](SensorUpdatePoliciesApi.md#queryCombinedSensorUpdatePolicies) | **GET** /policy/combined/sensor-update/v1 | Search for Sensor Update Policies in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policies which match the filter criteria
[**queryCombinedSensorUpdatePoliciesV2()**](SensorUpdatePoliciesApi.md#queryCombinedSensorUpdatePoliciesV2) | **GET** /policy/combined/sensor-update/v2 | Search for Sensor Update Policies with additional support for uninstall protection in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policies which match the filter criteria
[**queryCombinedSensorUpdatePolicyMembers()**](SensorUpdatePoliciesApi.md#queryCombinedSensorUpdatePolicyMembers) | **GET** /policy/combined/sensor-update-members/v1 | Search for members of a Sensor Update Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria
[**querySensorUpdatePolicies()**](SensorUpdatePoliciesApi.md#querySensorUpdatePolicies) | **GET** /policy/queries/sensor-update/v1 | Search for Sensor Update Policies in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policy IDs which match the filter criteria
[**querySensorUpdatePolicyMembers()**](SensorUpdatePoliciesApi.md#querySensorUpdatePolicyMembers) | **GET** /policy/queries/sensor-update-members/v1 | Search for members of a Sensor Update Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria
[**revealUninstallToken()**](SensorUpdatePoliciesApi.md#revealUninstallToken) | **POST** /policy/combined/reveal-uninstall-token/v1 | Reveals an uninstall token for a specific device. To retrieve the bulk maintenance token pass the value &#39;MAINTENANCE&#39; as the value for &#39;device_id&#39;
[**setSensorUpdatePoliciesPrecedence()**](SensorUpdatePoliciesApi.md#setSensorUpdatePoliciesPrecedence) | **POST** /policy/entities/sensor-update-precedence/v1 | Sets the precedence of Sensor Update Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence
[**updateSensorUpdatePolicies()**](SensorUpdatePoliciesApi.md#updateSensorUpdatePolicies) | **PATCH** /policy/entities/sensor-update/v1 | Update Sensor Update Policies by specifying the ID of the policy and details to update
[**updateSensorUpdatePoliciesV2()**](SensorUpdatePoliciesApi.md#updateSensorUpdatePoliciesV2) | **PATCH** /policy/entities/sensor-update/v2 | Update Sensor Update Policies by specifying the ID of the policy and details to update with additional support for uninstall protection


## `createSensorUpdatePolicies()`

```php
createSensorUpdatePolicies($body): \OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1
```

Create Sensor Update Policies by specifying details about the policy to create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsCreateSensorUpdatePoliciesV1(); // \OpenAPI\Client\Model\RequestsCreateSensorUpdatePoliciesV1

try {
    $result = $apiInstance->createSensorUpdatePolicies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->createSensorUpdatePolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsCreateSensorUpdatePoliciesV1**](../Model/RequestsCreateSensorUpdatePoliciesV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1**](../Model/ResponsesSensorUpdatePoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSensorUpdatePoliciesV2()`

```php
createSensorUpdatePoliciesV2($body): \OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV2
```

Create Sensor Update Policies by specifying details about the policy to create with additional support for uninstall protection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsCreateSensorUpdatePoliciesV2(); // \OpenAPI\Client\Model\RequestsCreateSensorUpdatePoliciesV2

try {
    $result = $apiInstance->createSensorUpdatePoliciesV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->createSensorUpdatePoliciesV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsCreateSensorUpdatePoliciesV2**](../Model/RequestsCreateSensorUpdatePoliciesV2.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV2**](../Model/ResponsesSensorUpdatePoliciesV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSensorUpdatePolicies()`

```php
deleteSensorUpdatePolicies($ids): \OpenAPI\Client\Model\MsaQueryResponse
```

Delete a set of Sensor Update Policies by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the Sensor Update Policies to delete

try {
    $result = $apiInstance->deleteSensorUpdatePolicies($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->deleteSensorUpdatePolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the Sensor Update Policies to delete |

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

## `getSensorUpdatePolicies()`

```php
getSensorUpdatePolicies($ids): \OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1
```

Retrieve a set of Sensor Update Policies by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the Sensor Update Policies to return

try {
    $result = $apiInstance->getSensorUpdatePolicies($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->getSensorUpdatePolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the Sensor Update Policies to return |

### Return type

[**\OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1**](../Model/ResponsesSensorUpdatePoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSensorUpdatePoliciesV2()`

```php
getSensorUpdatePoliciesV2($ids): \OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV2
```

Retrieve a set of Sensor Update Policies with additional support for uninstall protection by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the Sensor Update Policies to return

try {
    $result = $apiInstance->getSensorUpdatePoliciesV2($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->getSensorUpdatePoliciesV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the Sensor Update Policies to return |

### Return type

[**\OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV2**](../Model/ResponsesSensorUpdatePoliciesV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performSensorUpdatePoliciesAction()`

```php
performSensorUpdatePoliciesAction($action_name, $body): \OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1
```

Perform the specified action on the Sensor Update Policies specified in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action_name = 'action_name_example'; // string | The action to perform
$body = new \OpenAPI\Client\Model\MsaEntityActionRequestV2(); // \OpenAPI\Client\Model\MsaEntityActionRequestV2

try {
    $result = $apiInstance->performSensorUpdatePoliciesAction($action_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->performSensorUpdatePoliciesAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action_name** | **string**| The action to perform |
 **body** | [**\OpenAPI\Client\Model\MsaEntityActionRequestV2**](../Model/MsaEntityActionRequestV2.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1**](../Model/ResponsesSensorUpdatePoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedSensorUpdateBuilds()`

```php
queryCombinedSensorUpdateBuilds($platform): \OpenAPI\Client\Model\ResponsesSensorUpdateBuildsV1
```

Retrieve available builds for use with Sensor Update Policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | The platform to return builds for

try {
    $result = $apiInstance->queryCombinedSensorUpdateBuilds($platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->queryCombinedSensorUpdateBuilds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**| The platform to return builds for | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponsesSensorUpdateBuildsV1**](../Model/ResponsesSensorUpdateBuildsV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedSensorUpdatePolicies()`

```php
queryCombinedSensorUpdatePolicies($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1
```

Search for Sensor Update Policies in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policies which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
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
    $result = $apiInstance->queryCombinedSensorUpdatePolicies($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->queryCombinedSensorUpdatePolicies: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1**](../Model/ResponsesSensorUpdatePoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedSensorUpdatePoliciesV2()`

```php
queryCombinedSensorUpdatePoliciesV2($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV2
```

Search for Sensor Update Policies with additional support for uninstall protection in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policies which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
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
    $result = $apiInstance->queryCombinedSensorUpdatePoliciesV2($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->queryCombinedSensorUpdatePoliciesV2: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV2**](../Model/ResponsesSensorUpdatePoliciesV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedSensorUpdatePolicyMembers()`

```php
queryCombinedSensorUpdatePolicyMembers($id, $filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ResponsesPolicyMembersRespV1
```

Search for members of a Sensor Update Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Sensor Update Policy to search for members of
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->queryCombinedSensorUpdatePolicyMembers($id, $filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->queryCombinedSensorUpdatePolicyMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Sensor Update Policy to search for members of | [optional]
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

## `querySensorUpdatePolicies()`

```php
querySensorUpdatePolicies($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for Sensor Update Policies in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policy IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
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
    $result = $apiInstance->querySensorUpdatePolicies($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->querySensorUpdatePolicies: ', $e->getMessage(), PHP_EOL;
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

## `querySensorUpdatePolicyMembers()`

```php
querySensorUpdatePolicyMembers($id, $filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for members of a Sensor Update Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Sensor Update Policy to search for members of
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->querySensorUpdatePolicyMembers($id, $filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->querySensorUpdatePolicyMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Sensor Update Policy to search for members of | [optional]
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

## `revealUninstallToken()`

```php
revealUninstallToken($body): \OpenAPI\Client\Model\ResponsesRevealUninstallTokenRespV1
```

Reveals an uninstall token for a specific device. To retrieve the bulk maintenance token pass the value 'MAINTENANCE' as the value for 'device_id'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsRevealUninstallTokenV1(); // \OpenAPI\Client\Model\RequestsRevealUninstallTokenV1

try {
    $result = $apiInstance->revealUninstallToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->revealUninstallToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsRevealUninstallTokenV1**](../Model/RequestsRevealUninstallTokenV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesRevealUninstallTokenRespV1**](../Model/ResponsesRevealUninstallTokenRespV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setSensorUpdatePoliciesPrecedence()`

```php
setSensorUpdatePoliciesPrecedence($body): \OpenAPI\Client\Model\MsaQueryResponse
```

Sets the precedence of Sensor Update Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsSetPolicyPrecedenceReqV1(); // \OpenAPI\Client\Model\RequestsSetPolicyPrecedenceReqV1

try {
    $result = $apiInstance->setSensorUpdatePoliciesPrecedence($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->setSensorUpdatePoliciesPrecedence: ', $e->getMessage(), PHP_EOL;
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

## `updateSensorUpdatePolicies()`

```php
updateSensorUpdatePolicies($body): \OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1
```

Update Sensor Update Policies by specifying the ID of the policy and details to update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsUpdateSensorUpdatePoliciesV1(); // \OpenAPI\Client\Model\RequestsUpdateSensorUpdatePoliciesV1

try {
    $result = $apiInstance->updateSensorUpdatePolicies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->updateSensorUpdatePolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsUpdateSensorUpdatePoliciesV1**](../Model/RequestsUpdateSensorUpdatePoliciesV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV1**](../Model/ResponsesSensorUpdatePoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSensorUpdatePoliciesV2()`

```php
updateSensorUpdatePoliciesV2($body): \OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV2
```

Update Sensor Update Policies by specifying the ID of the policy and details to update with additional support for uninstall protection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SensorUpdatePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsUpdateSensorUpdatePoliciesV2(); // \OpenAPI\Client\Model\RequestsUpdateSensorUpdatePoliciesV2

try {
    $result = $apiInstance->updateSensorUpdatePoliciesV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SensorUpdatePoliciesApi->updateSensorUpdatePoliciesV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsUpdateSensorUpdatePoliciesV2**](../Model/RequestsUpdateSensorUpdatePoliciesV2.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesSensorUpdatePoliciesV2**](../Model/ResponsesSensorUpdatePoliciesV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
