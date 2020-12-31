# OpenAPI\Client\PreventionPoliciesApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPreventionPolicies()**](PreventionPoliciesApi.md#createPreventionPolicies) | **POST** /policy/entities/prevention/v1 | Create Prevention Policies by specifying details about the policy to create
[**deletePreventionPolicies()**](PreventionPoliciesApi.md#deletePreventionPolicies) | **DELETE** /policy/entities/prevention/v1 | Delete a set of Prevention Policies by specifying their IDs
[**getPreventionPolicies()**](PreventionPoliciesApi.md#getPreventionPolicies) | **GET** /policy/entities/prevention/v1 | Retrieve a set of Prevention Policies by specifying their IDs
[**performPreventionPoliciesAction()**](PreventionPoliciesApi.md#performPreventionPoliciesAction) | **POST** /policy/entities/prevention-actions/v1 | Perform the specified action on the Prevention Policies specified in the request
[**queryCombinedPreventionPolicies()**](PreventionPoliciesApi.md#queryCombinedPreventionPolicies) | **GET** /policy/combined/prevention/v1 | Search for Prevention Policies in your environment by providing an FQL filter and paging details. Returns a set of Prevention Policies which match the filter criteria
[**queryCombinedPreventionPolicyMembers()**](PreventionPoliciesApi.md#queryCombinedPreventionPolicyMembers) | **GET** /policy/combined/prevention-members/v1 | Search for members of a Prevention Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria
[**queryPreventionPolicies()**](PreventionPoliciesApi.md#queryPreventionPolicies) | **GET** /policy/queries/prevention/v1 | Search for Prevention Policies in your environment by providing an FQL filter and paging details. Returns a set of Prevention Policy IDs which match the filter criteria
[**queryPreventionPolicyMembers()**](PreventionPoliciesApi.md#queryPreventionPolicyMembers) | **GET** /policy/queries/prevention-members/v1 | Search for members of a Prevention Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria
[**setPreventionPoliciesPrecedence()**](PreventionPoliciesApi.md#setPreventionPoliciesPrecedence) | **POST** /policy/entities/prevention-precedence/v1 | Sets the precedence of Prevention Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence
[**updatePreventionPolicies()**](PreventionPoliciesApi.md#updatePreventionPolicies) | **PATCH** /policy/entities/prevention/v1 | Update Prevention Policies by specifying the ID of the policy and details to update


## `createPreventionPolicies()`

```php
createPreventionPolicies($body): \OpenAPI\Client\Model\ResponsesPreventionPoliciesV1
```

Create Prevention Policies by specifying details about the policy to create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsCreatePreventionPoliciesV1(); // \OpenAPI\Client\Model\RequestsCreatePreventionPoliciesV1

try {
    $result = $apiInstance->createPreventionPolicies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->createPreventionPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsCreatePreventionPoliciesV1**](../Model/RequestsCreatePreventionPoliciesV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesPreventionPoliciesV1**](../Model/ResponsesPreventionPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePreventionPolicies()`

```php
deletePreventionPolicies($ids): \OpenAPI\Client\Model\MsaQueryResponse
```

Delete a set of Prevention Policies by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the Prevention Policies to delete

try {
    $result = $apiInstance->deletePreventionPolicies($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->deletePreventionPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the Prevention Policies to delete |

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

## `getPreventionPolicies()`

```php
getPreventionPolicies($ids): \OpenAPI\Client\Model\ResponsesPreventionPoliciesV1
```

Retrieve a set of Prevention Policies by specifying their IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the Prevention Policies to return

try {
    $result = $apiInstance->getPreventionPolicies($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->getPreventionPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the Prevention Policies to return |

### Return type

[**\OpenAPI\Client\Model\ResponsesPreventionPoliciesV1**](../Model/ResponsesPreventionPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performPreventionPoliciesAction()`

```php
performPreventionPoliciesAction($action_name, $body): \OpenAPI\Client\Model\ResponsesPreventionPoliciesV1
```

Perform the specified action on the Prevention Policies specified in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action_name = 'action_name_example'; // string | The action to perform
$body = new \OpenAPI\Client\Model\MsaEntityActionRequestV2(); // \OpenAPI\Client\Model\MsaEntityActionRequestV2

try {
    $result = $apiInstance->performPreventionPoliciesAction($action_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->performPreventionPoliciesAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action_name** | **string**| The action to perform |
 **body** | [**\OpenAPI\Client\Model\MsaEntityActionRequestV2**](../Model/MsaEntityActionRequestV2.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesPreventionPoliciesV1**](../Model/ResponsesPreventionPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedPreventionPolicies()`

```php
queryCombinedPreventionPolicies($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ResponsesPreventionPoliciesV1
```

Search for Prevention Policies in your environment by providing an FQL filter and paging details. Returns a set of Prevention Policies which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
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
    $result = $apiInstance->queryCombinedPreventionPolicies($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->queryCombinedPreventionPolicies: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ResponsesPreventionPoliciesV1**](../Model/ResponsesPreventionPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCombinedPreventionPolicyMembers()`

```php
queryCombinedPreventionPolicyMembers($id, $filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ResponsesPolicyMembersRespV1
```

Search for members of a Prevention Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Prevention Policy to search for members of
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->queryCombinedPreventionPolicyMembers($id, $filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->queryCombinedPreventionPolicyMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Prevention Policy to search for members of | [optional]
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

## `queryPreventionPolicies()`

```php
queryPreventionPolicies($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for Prevention Policies in your environment by providing an FQL filter and paging details. Returns a set of Prevention Policy IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
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
    $result = $apiInstance->queryPreventionPolicies($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->queryPreventionPolicies: ', $e->getMessage(), PHP_EOL;
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

## `queryPreventionPolicyMembers()`

```php
queryPreventionPolicyMembers($id, $filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for members of a Prevention Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the Prevention Policy to search for members of
$filter = 'filter_example'; // string | The filter expression that should be used to limit the results
$offset = 56; // int | The offset to start retrieving records from
$limit = 56; // int | The maximum records to return. [1-5000]
$sort = 'sort_example'; // string | The property to sort by

try {
    $result = $apiInstance->queryPreventionPolicyMembers($id, $filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->queryPreventionPolicyMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Prevention Policy to search for members of | [optional]
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

## `setPreventionPoliciesPrecedence()`

```php
setPreventionPoliciesPrecedence($body): \OpenAPI\Client\Model\MsaQueryResponse
```

Sets the precedence of Prevention Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsSetPolicyPrecedenceReqV1(); // \OpenAPI\Client\Model\RequestsSetPolicyPrecedenceReqV1

try {
    $result = $apiInstance->setPreventionPoliciesPrecedence($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->setPreventionPoliciesPrecedence: ', $e->getMessage(), PHP_EOL;
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

## `updatePreventionPolicies()`

```php
updatePreventionPolicies($body): \OpenAPI\Client\Model\ResponsesPreventionPoliciesV1
```

Update Prevention Policies by specifying the ID of the policy and details to update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PreventionPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RequestsUpdatePreventionPoliciesV1(); // \OpenAPI\Client\Model\RequestsUpdatePreventionPoliciesV1

try {
    $result = $apiInstance->updatePreventionPolicies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreventionPoliciesApi->updatePreventionPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\RequestsUpdatePreventionPoliciesV1**](../Model/RequestsUpdatePreventionPoliciesV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ResponsesPreventionPoliciesV1**](../Model/ResponsesPreventionPoliciesV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
