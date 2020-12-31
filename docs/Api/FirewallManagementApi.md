# OpenAPI\Client\FirewallManagementApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**aggregateEvents()**](FirewallManagementApi.md#aggregateEvents) | **POST** /fwmgr/aggregates/events/GET/v1 | Aggregate events for customer
[**aggregatePolicyRules()**](FirewallManagementApi.md#aggregatePolicyRules) | **POST** /fwmgr/aggregates/policy-rules/GET/v1 | Aggregate rules within a policy for customer
[**aggregateRuleGroups()**](FirewallManagementApi.md#aggregateRuleGroups) | **POST** /fwmgr/aggregates/rule-groups/GET/v1 | Aggregate rule groups for customer
[**aggregateRules()**](FirewallManagementApi.md#aggregateRules) | **POST** /fwmgr/aggregates/rules/GET/v1 | Aggregate rules for customer
[**createRuleGroup()**](FirewallManagementApi.md#createRuleGroup) | **POST** /fwmgr/entities/rule-groups/v1 | Create new rule group on a platform for a customer with a name and description, and return the ID
[**deleteRuleGroups()**](FirewallManagementApi.md#deleteRuleGroups) | **DELETE** /fwmgr/entities/rule-groups/v1 | Delete rule group entities by ID
[**getEvents()**](FirewallManagementApi.md#getEvents) | **GET** /fwmgr/entities/events/v1 | Get events entities by ID and optionally version
[**getFirewallFields()**](FirewallManagementApi.md#getFirewallFields) | **GET** /fwmgr/entities/firewall-fields/v1 | Get the firewall field specifications by ID
[**getPlatforms()**](FirewallManagementApi.md#getPlatforms) | **GET** /fwmgr/entities/platforms/v1 | Get platforms by ID, e.g., windows or mac or droid
[**getPolicyContainers()**](FirewallManagementApi.md#getPolicyContainers) | **GET** /fwmgr/entities/policies/v1 | Get policy container entities by policy ID
[**getRuleGroups()**](FirewallManagementApi.md#getRuleGroups) | **GET** /fwmgr/entities/rule-groups/v1 | Get rule group entities by ID. These groups do not contain their rule entites, just the rule IDs in precedence order.
[**getRules()**](FirewallManagementApi.md#getRules) | **GET** /fwmgr/entities/rules/v1 | Get rule entities by ID (64-bit unsigned int as decimal string) or Family ID (32-character hexadecimal string)
[**queryEvents()**](FirewallManagementApi.md#queryEvents) | **GET** /fwmgr/queries/events/v1 | Find all event IDs matching the query with filter
[**queryFirewallFields()**](FirewallManagementApi.md#queryFirewallFields) | **GET** /fwmgr/queries/firewall-fields/v1 | Get the firewall field specification IDs for the provided platform
[**queryPlatforms()**](FirewallManagementApi.md#queryPlatforms) | **GET** /fwmgr/queries/platforms/v1 | Get the list of platform names
[**queryPolicyRules()**](FirewallManagementApi.md#queryPolicyRules) | **GET** /fwmgr/queries/policy-rules/v1 | Find all firewall rule IDs matching the query with filter, and return them in precedence order
[**queryRuleGroups()**](FirewallManagementApi.md#queryRuleGroups) | **GET** /fwmgr/queries/rule-groups/v1 | Find all rule group IDs matching the query with filter
[**queryRules()**](FirewallManagementApi.md#queryRules) | **GET** /fwmgr/queries/rules/v1 | Find all rule IDs matching the query with filter
[**updatePolicyContainer()**](FirewallManagementApi.md#updatePolicyContainer) | **PUT** /fwmgr/entities/policies/v1 | Update an identified policy container
[**updateRuleGroup()**](FirewallManagementApi.md#updateRuleGroup) | **PATCH** /fwmgr/entities/rule-groups/v1 | Update name, description, or enabled status of a rule group, or create, edit, delete, or reorder rules


## `aggregateEvents()`

```php
aggregateEvents($body): \OpenAPI\Client\Model\FwmgrApiAggregatesResponse
```

Aggregate events for customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest()); // \OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest[] | Query criteria and settings

try {
    $result = $apiInstance->aggregateEvents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->aggregateEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest[]**](../Model/FwmgrMsaAggregateQueryRequest.md)| Query criteria and settings |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiAggregatesResponse**](../Model/FwmgrApiAggregatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aggregatePolicyRules()`

```php
aggregatePolicyRules($body): \OpenAPI\Client\Model\FwmgrApiAggregatesResponse
```

Aggregate rules within a policy for customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest()); // \OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest[] | Query criteria and settings

try {
    $result = $apiInstance->aggregatePolicyRules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->aggregatePolicyRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest[]**](../Model/FwmgrMsaAggregateQueryRequest.md)| Query criteria and settings |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiAggregatesResponse**](../Model/FwmgrApiAggregatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aggregateRuleGroups()`

```php
aggregateRuleGroups($body): \OpenAPI\Client\Model\FwmgrApiAggregatesResponse
```

Aggregate rule groups for customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest()); // \OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest[] | Query criteria and settings

try {
    $result = $apiInstance->aggregateRuleGroups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->aggregateRuleGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest[]**](../Model/FwmgrMsaAggregateQueryRequest.md)| Query criteria and settings |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiAggregatesResponse**](../Model/FwmgrApiAggregatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aggregateRules()`

```php
aggregateRules($body): \OpenAPI\Client\Model\FwmgrApiAggregatesResponse
```

Aggregate rules for customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest()); // \OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest[] | Query criteria and settings

try {
    $result = $apiInstance->aggregateRules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->aggregateRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\FwmgrMsaAggregateQueryRequest[]**](../Model/FwmgrMsaAggregateQueryRequest.md)| Query criteria and settings |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiAggregatesResponse**](../Model/FwmgrApiAggregatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRuleGroup()`

```php
createRuleGroup($x_cs_username, $body, $clone_id, $library, $comment): \OpenAPI\Client\Model\FwmgrApiQueryResponse
```

Create new rule group on a platform for a customer with a name and description, and return the ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user id
$body = new \OpenAPI\Client\Model\FwmgrApiRuleGroupCreateRequestV1(); // \OpenAPI\Client\Model\FwmgrApiRuleGroupCreateRequestV1
$clone_id = 'clone_id_example'; // string | A rule group ID from which to copy rules. If this is provided then the 'rules' property of the body is ignored.
$library = 'library_example'; // string | If this flag is set to true then the rules will be cloned from the clone_id from the CrowdStrike Firewal Rule Groups Library.
$comment = 'comment_example'; // string | Audit log comment for this action

try {
    $result = $apiInstance->createRuleGroup($x_cs_username, $body, $clone_id, $library, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->createRuleGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user id |
 **body** | [**\OpenAPI\Client\Model\FwmgrApiRuleGroupCreateRequestV1**](../Model/FwmgrApiRuleGroupCreateRequestV1.md)|  |
 **clone_id** | **string**| A rule group ID from which to copy rules. If this is provided then the &#39;rules&#39; property of the body is ignored. | [optional]
 **library** | **string**| If this flag is set to true then the rules will be cloned from the clone_id from the CrowdStrike Firewal Rule Groups Library. | [optional]
 **comment** | **string**| Audit log comment for this action | [optional]

### Return type

[**\OpenAPI\Client\Model\FwmgrApiQueryResponse**](../Model/FwmgrApiQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRuleGroups()`

```php
deleteRuleGroups($x_cs_username, $ids, $comment): \OpenAPI\Client\Model\FwmgrApiQueryResponse
```

Delete rule group entities by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user id
$ids = array('ids_example'); // string[] | The IDs of the rule groups to be deleted
$comment = 'comment_example'; // string | Audit log comment for this action

try {
    $result = $apiInstance->deleteRuleGroups($x_cs_username, $ids, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->deleteRuleGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user id |
 **ids** | [**string[]**](../Model/string.md)| The IDs of the rule groups to be deleted |
 **comment** | **string**| Audit log comment for this action | [optional]

### Return type

[**\OpenAPI\Client\Model\FwmgrApiQueryResponse**](../Model/FwmgrApiQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvents()`

```php
getEvents($ids): \OpenAPI\Client\Model\FwmgrApiEventsResponse
```

Get events entities by ID and optionally version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The events to retrieve, identified by ID

try {
    $result = $apiInstance->getEvents($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The events to retrieve, identified by ID |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiEventsResponse**](../Model/FwmgrApiEventsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFirewallFields()`

```php
getFirewallFields($ids): \OpenAPI\Client\Model\FwmgrApiFirewallFieldsResponse
```

Get the firewall field specifications by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the rule types to retrieve

try {
    $result = $apiInstance->getFirewallFields($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->getFirewallFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the rule types to retrieve |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiFirewallFieldsResponse**](../Model/FwmgrApiFirewallFieldsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlatforms()`

```php
getPlatforms($ids): \OpenAPI\Client\Model\FwmgrApiPlatformsResponse
```

Get platforms by ID, e.g., windows or mac or droid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the platforms to retrieve

try {
    $result = $apiInstance->getPlatforms($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->getPlatforms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the platforms to retrieve |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiPlatformsResponse**](../Model/FwmgrApiPlatformsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPolicyContainers()`

```php
getPolicyContainers($ids): \OpenAPI\Client\Model\FwmgrApiPolicyContainersResponse
```

Get policy container entities by policy ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The policy container(s) to retrieve, identified by policy ID

try {
    $result = $apiInstance->getPolicyContainers($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->getPolicyContainers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The policy container(s) to retrieve, identified by policy ID |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiPolicyContainersResponse**](../Model/FwmgrApiPolicyContainersResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRuleGroups()`

```php
getRuleGroups($ids): \OpenAPI\Client\Model\FwmgrApiRuleGroupsResponse
```

Get rule group entities by ID. These groups do not contain their rule entites, just the rule IDs in precedence order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the rule groups to retrieve

try {
    $result = $apiInstance->getRuleGroups($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->getRuleGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the rule groups to retrieve |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiRuleGroupsResponse**](../Model/FwmgrApiRuleGroupsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRules()`

```php
getRules($ids): \OpenAPI\Client\Model\FwmgrApiRulesResponse
```

Get rule entities by ID (64-bit unsigned int as decimal string) or Family ID (32-character hexadecimal string)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The rules to retrieve, identified by ID

try {
    $result = $apiInstance->getRules($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->getRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The rules to retrieve, identified by ID |

### Return type

[**\OpenAPI\Client\Model\FwmgrApiRulesResponse**](../Model/FwmgrApiRulesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryEvents()`

```php
queryEvents($sort, $filter, $q, $offset, $after, $limit): \OpenAPI\Client\Model\FwmgrApiQueryResponse
```

Find all event IDs matching the query with filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = 'sort_example'; // string | Possible order by fields:
$filter = 'filter_example'; // string | FQL query specifying the filter parameters. Filter term criteria: enabled, platform, name, description, etc TODO. Filter range criteria: created_on, modified_on; use any common date format, such as '2010-05-15T14:55:21.892315096Z'.
$q = 'q_example'; // string | Match query criteria, which includes all the filter string fields, plus TODO
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$after = 'after_example'; // string | A pagination token used with the `limit` parameter to manage pagination of results. On your first request, don't provide an `after` token. On subsequent requests, provide the `after` token from the previous response to continue from that place in the results.
$limit = 56; // int | Number of ids to return.

try {
    $result = $apiInstance->queryEvents($sort, $filter, $q, $offset, $after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->queryEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Possible order by fields: | [optional]
 **filter** | **string**| FQL query specifying the filter parameters. Filter term criteria: enabled, platform, name, description, etc TODO. Filter range criteria: created_on, modified_on; use any common date format, such as &#39;2010-05-15T14:55:21.892315096Z&#39;. | [optional]
 **q** | **string**| Match query criteria, which includes all the filter string fields, plus TODO | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **after** | **string**| A pagination token used with the &#x60;limit&#x60; parameter to manage pagination of results. On your first request, don&#39;t provide an &#x60;after&#x60; token. On subsequent requests, provide the &#x60;after&#x60; token from the previous response to continue from that place in the results. | [optional]
 **limit** | **int**| Number of ids to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\FwmgrApiQueryResponse**](../Model/FwmgrApiQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryFirewallFields()`

```php
queryFirewallFields($platform_id, $offset, $limit): \OpenAPI\Client\Model\FwmgrMsaQueryResponse
```

Get the firewall field specification IDs for the provided platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform_id = 'platform_id_example'; // string | Get fields configuration for this platform
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$limit = 56; // int | Number of ids to return.

try {
    $result = $apiInstance->queryFirewallFields($platform_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->queryFirewallFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform_id** | **string**| Get fields configuration for this platform | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **limit** | **int**| Number of ids to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\FwmgrMsaQueryResponse**](../Model/FwmgrMsaQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPlatforms()`

```php
queryPlatforms($offset, $limit): \OpenAPI\Client\Model\FwmgrMsaQueryResponse
```

Get the list of platform names

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$limit = 56; // int | Number of ids to return.

try {
    $result = $apiInstance->queryPlatforms($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->queryPlatforms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **limit** | **int**| Number of ids to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\FwmgrMsaQueryResponse**](../Model/FwmgrMsaQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPolicyRules()`

```php
queryPolicyRules($id, $sort, $filter, $q, $offset, $limit): \OpenAPI\Client\Model\FwmgrApiQueryResponse
```

Find all firewall rule IDs matching the query with filter, and return them in precedence order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the policy container within which to query
$sort = 'sort_example'; // string | Possible order by fields:
$filter = 'filter_example'; // string | FQL query specifying the filter parameters. Filter term criteria: enabled, platform, name, description, etc TODO. Filter range criteria: created_on, modified_on; use any common date format, such as '2010-05-15T14:55:21.892315096Z'.
$q = 'q_example'; // string | Match query criteria, which includes all the filter string fields, plus TODO
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$limit = 56; // int | Number of ids to return.

try {
    $result = $apiInstance->queryPolicyRules($id, $sort, $filter, $q, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->queryPolicyRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the policy container within which to query | [optional]
 **sort** | **string**| Possible order by fields: | [optional]
 **filter** | **string**| FQL query specifying the filter parameters. Filter term criteria: enabled, platform, name, description, etc TODO. Filter range criteria: created_on, modified_on; use any common date format, such as &#39;2010-05-15T14:55:21.892315096Z&#39;. | [optional]
 **q** | **string**| Match query criteria, which includes all the filter string fields, plus TODO | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **limit** | **int**| Number of ids to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\FwmgrApiQueryResponse**](../Model/FwmgrApiQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryRuleGroups()`

```php
queryRuleGroups($sort, $filter, $q, $offset, $after, $limit): \OpenAPI\Client\Model\FwmgrApiQueryResponse
```

Find all rule group IDs matching the query with filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = 'sort_example'; // string | Possible order by fields:
$filter = 'filter_example'; // string | FQL query specifying the filter parameters. Filter term criteria: enabled, platform, name, description, etc TODO. Filter range criteria: created_on, modified_on; use any common date format, such as '2010-05-15T14:55:21.892315096Z'.
$q = 'q_example'; // string | Match query criteria, which includes all the filter string fields, plus TODO
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$after = 'after_example'; // string | A pagination token used with the `limit` parameter to manage pagination of results. On your first request, don't provide an `after` token. On subsequent requests, provide the `after` token from the previous response to continue from that place in the results.
$limit = 56; // int | Number of ids to return.

try {
    $result = $apiInstance->queryRuleGroups($sort, $filter, $q, $offset, $after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->queryRuleGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Possible order by fields: | [optional]
 **filter** | **string**| FQL query specifying the filter parameters. Filter term criteria: enabled, platform, name, description, etc TODO. Filter range criteria: created_on, modified_on; use any common date format, such as &#39;2010-05-15T14:55:21.892315096Z&#39;. | [optional]
 **q** | **string**| Match query criteria, which includes all the filter string fields, plus TODO | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **after** | **string**| A pagination token used with the &#x60;limit&#x60; parameter to manage pagination of results. On your first request, don&#39;t provide an &#x60;after&#x60; token. On subsequent requests, provide the &#x60;after&#x60; token from the previous response to continue from that place in the results. | [optional]
 **limit** | **int**| Number of ids to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\FwmgrApiQueryResponse**](../Model/FwmgrApiQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryRules()`

```php
queryRules($sort, $filter, $q, $offset, $after, $limit): \OpenAPI\Client\Model\FwmgrApiQueryResponse
```

Find all rule IDs matching the query with filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = 'sort_example'; // string | Possible order by fields:
$filter = 'filter_example'; // string | FQL query specifying the filter parameters. Filter term criteria: enabled, platform, name, description, etc TODO. Filter range criteria: created_on, modified_on; use any common date format, such as '2010-05-15T14:55:21.892315096Z'.
$q = 'q_example'; // string | Match query criteria, which includes all the filter string fields, plus TODO
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$after = 'after_example'; // string | A pagination token used with the `limit` parameter to manage pagination of results. On your first request, don't provide an `after` token. On subsequent requests, provide the `after` token from the previous response to continue from that place in the results.
$limit = 56; // int | Number of ids to return.

try {
    $result = $apiInstance->queryRules($sort, $filter, $q, $offset, $after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->queryRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Possible order by fields: | [optional]
 **filter** | **string**| FQL query specifying the filter parameters. Filter term criteria: enabled, platform, name, description, etc TODO. Filter range criteria: created_on, modified_on; use any common date format, such as &#39;2010-05-15T14:55:21.892315096Z&#39;. | [optional]
 **q** | **string**| Match query criteria, which includes all the filter string fields, plus TODO | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **after** | **string**| A pagination token used with the &#x60;limit&#x60; parameter to manage pagination of results. On your first request, don&#39;t provide an &#x60;after&#x60; token. On subsequent requests, provide the &#x60;after&#x60; token from the previous response to continue from that place in the results. | [optional]
 **limit** | **int**| Number of ids to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\FwmgrApiQueryResponse**](../Model/FwmgrApiQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePolicyContainer()`

```php
updatePolicyContainer($x_cs_username, $body): \OpenAPI\Client\Model\FwmgrMsaReplyMetaOnly
```

Update an identified policy container

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user id
$body = new \OpenAPI\Client\Model\FwmgrApiPolicyContainerUpsertRequestV1(); // \OpenAPI\Client\Model\FwmgrApiPolicyContainerUpsertRequestV1

try {
    $result = $apiInstance->updatePolicyContainer($x_cs_username, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->updatePolicyContainer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user id |
 **body** | [**\OpenAPI\Client\Model\FwmgrApiPolicyContainerUpsertRequestV1**](../Model/FwmgrApiPolicyContainerUpsertRequestV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\FwmgrMsaReplyMetaOnly**](../Model/FwmgrMsaReplyMetaOnly.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRuleGroup()`

```php
updateRuleGroup($x_cs_username, $body, $comment): \OpenAPI\Client\Model\FwmgrApiQueryResponse
```

Update name, description, or enabled status of a rule group, or create, edit, delete, or reorder rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FirewallManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user id
$body = new \OpenAPI\Client\Model\FwmgrApiRuleGroupModifyRequestV1(); // \OpenAPI\Client\Model\FwmgrApiRuleGroupModifyRequestV1
$comment = 'comment_example'; // string | Audit log comment for this action

try {
    $result = $apiInstance->updateRuleGroup($x_cs_username, $body, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirewallManagementApi->updateRuleGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user id |
 **body** | [**\OpenAPI\Client\Model\FwmgrApiRuleGroupModifyRequestV1**](../Model/FwmgrApiRuleGroupModifyRequestV1.md)|  |
 **comment** | **string**| Audit log comment for this action | [optional]

### Return type

[**\OpenAPI\Client\Model\FwmgrApiQueryResponse**](../Model/FwmgrApiQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
