# OpenAPI\Client\CustomIoaApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRule()**](CustomIoaApi.md#createRule) | **POST** /ioarules/entities/rules/v1 | Create a rule within a rule group. Returns the rule.
[**createRuleGroupMixin0()**](CustomIoaApi.md#createRuleGroupMixin0) | **POST** /ioarules/entities/rule-groups/v1 | Create a rule group for a platform with a name and an optional description. Returns the rule group.
[**deleteRuleGroupsMixin0()**](CustomIoaApi.md#deleteRuleGroupsMixin0) | **DELETE** /ioarules/entities/rule-groups/v1 | Delete rule groups by ID.
[**deleteRules()**](CustomIoaApi.md#deleteRules) | **DELETE** /ioarules/entities/rules/v1 | Delete rules from a rule group by ID.
[**getPatterns()**](CustomIoaApi.md#getPatterns) | **GET** /ioarules/entities/pattern-severities/v1 | Get pattern severities by ID.
[**getPlatformsMixin0()**](CustomIoaApi.md#getPlatformsMixin0) | **GET** /ioarules/entities/platforms/v1 | Get platforms by ID.
[**getRuleGroupsMixin0()**](CustomIoaApi.md#getRuleGroupsMixin0) | **GET** /ioarules/entities/rule-groups/v1 | Get rule groups by ID.
[**getRuleTypes()**](CustomIoaApi.md#getRuleTypes) | **GET** /ioarules/entities/rule-types/v1 | Get rule types by ID.
[**getRulesGet()**](CustomIoaApi.md#getRulesGet) | **POST** /ioarules/entities/rules/GET/v1 | Get rules by ID and optionally version in the following format: &#x60;ID[:version]&#x60;.
[**getRulesMixin0()**](CustomIoaApi.md#getRulesMixin0) | **GET** /ioarules/entities/rules/v1 | Get rules by ID and optionally version in the following format: &#x60;ID[:version]&#x60;. The max number of IDs is constrained by URL size.
[**queryPatterns()**](CustomIoaApi.md#queryPatterns) | **GET** /ioarules/queries/pattern-severities/v1 | Get all pattern severity IDs.
[**queryPlatformsMixin0()**](CustomIoaApi.md#queryPlatformsMixin0) | **GET** /ioarules/queries/platforms/v1 | Get all platform IDs.
[**queryRuleGroupsFull()**](CustomIoaApi.md#queryRuleGroupsFull) | **GET** /ioarules/queries/rule-groups-full/v1 | Find all rule groups matching the query with optional filter.
[**queryRuleGroupsMixin0()**](CustomIoaApi.md#queryRuleGroupsMixin0) | **GET** /ioarules/queries/rule-groups/v1 | Finds all rule group IDs matching the query with optional filter.
[**queryRuleTypes()**](CustomIoaApi.md#queryRuleTypes) | **GET** /ioarules/queries/rule-types/v1 | Get all rule type IDs.
[**queryRulesMixin0()**](CustomIoaApi.md#queryRulesMixin0) | **GET** /ioarules/queries/rules/v1 | Finds all rule IDs matching the query with optional filter.
[**updateRuleGroupMixin0()**](CustomIoaApi.md#updateRuleGroupMixin0) | **PATCH** /ioarules/entities/rule-groups/v1 | Update a rule group. The following properties can be modified: name, description, enabled.
[**updateRules()**](CustomIoaApi.md#updateRules) | **PATCH** /ioarules/entities/rules/v1 | Update rules within a rule group. Return the updated rules.
[**validate()**](CustomIoaApi.md#validate) | **POST** /ioarules/entities/rules/validate/v1 | Validates field values and checks for matches if a test string is provided.


## `createRule()`

```php
createRule($x_cs_username, $body): \OpenAPI\Client\Model\ApiRulesResponse
```

Create a rule within a rule group. Returns the rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user ID
$body = new \OpenAPI\Client\Model\ApiRuleCreateV1(); // \OpenAPI\Client\Model\ApiRuleCreateV1

try {
    $result = $apiInstance->createRule($x_cs_username, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->createRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user ID |
 **body** | [**\OpenAPI\Client\Model\ApiRuleCreateV1**](../Model/ApiRuleCreateV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApiRulesResponse**](../Model/ApiRulesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRuleGroupMixin0()`

```php
createRuleGroupMixin0($x_cs_username, $body): \OpenAPI\Client\Model\ApiRuleGroupsResponse
```

Create a rule group for a platform with a name and an optional description. Returns the rule group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user ID
$body = new \OpenAPI\Client\Model\ApiRuleGroupCreateRequestV1(); // \OpenAPI\Client\Model\ApiRuleGroupCreateRequestV1

try {
    $result = $apiInstance->createRuleGroupMixin0($x_cs_username, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->createRuleGroupMixin0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user ID |
 **body** | [**\OpenAPI\Client\Model\ApiRuleGroupCreateRequestV1**](../Model/ApiRuleGroupCreateRequestV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApiRuleGroupsResponse**](../Model/ApiRuleGroupsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRuleGroupsMixin0()`

```php
deleteRuleGroupsMixin0($x_cs_username, $ids, $comment): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Delete rule groups by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user ID
$ids = array('ids_example'); // string[] | The IDs of the entities
$comment = 'comment_example'; // string | Explains why the entity is being deleted

try {
    $result = $apiInstance->deleteRuleGroupsMixin0($x_cs_username, $ids, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->deleteRuleGroupsMixin0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user ID |
 **ids** | [**string[]**](../Model/string.md)| The IDs of the entities |
 **comment** | **string**| Explains why the entity is being deleted | [optional]

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

## `deleteRules()`

```php
deleteRules($x_cs_username, $rule_group_id, $ids, $comment): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Delete rules from a rule group by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user ID
$rule_group_id = 'rule_group_id_example'; // string | The parent rule group
$ids = array('ids_example'); // string[] | The IDs of the entities
$comment = 'comment_example'; // string | Explains why the entity is being deleted

try {
    $result = $apiInstance->deleteRules($x_cs_username, $rule_group_id, $ids, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->deleteRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user ID |
 **rule_group_id** | **string**| The parent rule group |
 **ids** | [**string[]**](../Model/string.md)| The IDs of the entities |
 **comment** | **string**| Explains why the entity is being deleted | [optional]

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

## `getPatterns()`

```php
getPatterns($ids): \OpenAPI\Client\Model\ApiPatternsResponse
```

Get pattern severities by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the entities

try {
    $result = $apiInstance->getPatterns($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->getPatterns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the entities |

### Return type

[**\OpenAPI\Client\Model\ApiPatternsResponse**](../Model/ApiPatternsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlatformsMixin0()`

```php
getPlatformsMixin0($ids): \OpenAPI\Client\Model\ApiPlatformsResponse
```

Get platforms by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the entities

try {
    $result = $apiInstance->getPlatformsMixin0($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->getPlatformsMixin0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the entities |

### Return type

[**\OpenAPI\Client\Model\ApiPlatformsResponse**](../Model/ApiPlatformsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRuleGroupsMixin0()`

```php
getRuleGroupsMixin0($ids): \OpenAPI\Client\Model\ApiRuleGroupsResponse
```

Get rule groups by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the entities

try {
    $result = $apiInstance->getRuleGroupsMixin0($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->getRuleGroupsMixin0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the entities |

### Return type

[**\OpenAPI\Client\Model\ApiRuleGroupsResponse**](../Model/ApiRuleGroupsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRuleTypes()`

```php
getRuleTypes($ids): \OpenAPI\Client\Model\ApiRuleTypesResponse
```

Get rule types by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the entities

try {
    $result = $apiInstance->getRuleTypes($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->getRuleTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the entities |

### Return type

[**\OpenAPI\Client\Model\ApiRuleTypesResponse**](../Model/ApiRuleTypesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRulesGet()`

```php
getRulesGet($body): \OpenAPI\Client\Model\ApiRulesResponse
```

Get rules by ID and optionally version in the following format: `ID[:version]`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ApiRulesGetRequestV1(); // \OpenAPI\Client\Model\ApiRulesGetRequestV1 | The \"ids\" field contains a list of the rules to retrieve.

try {
    $result = $apiInstance->getRulesGet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->getRulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ApiRulesGetRequestV1**](../Model/ApiRulesGetRequestV1.md)| The \&quot;ids\&quot; field contains a list of the rules to retrieve. |

### Return type

[**\OpenAPI\Client\Model\ApiRulesResponse**](../Model/ApiRulesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRulesMixin0()`

```php
getRulesMixin0($ids): \OpenAPI\Client\Model\ApiRulesResponse
```

Get rules by ID and optionally version in the following format: `ID[:version]`. The max number of IDs is constrained by URL size.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the entities

try {
    $result = $apiInstance->getRulesMixin0($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->getRulesMixin0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the entities |

### Return type

[**\OpenAPI\Client\Model\ApiRulesResponse**](../Model/ApiRulesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPatterns()`

```php
queryPatterns($offset, $limit): \OpenAPI\Client\Model\MsaQueryResponse
```

Get all pattern severity IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 'offset_example'; // string | Starting index of overall result set from which to return IDs
$limit = 56; // int | Number of IDs to return

try {
    $result = $apiInstance->queryPatterns($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->queryPatterns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **string**| Starting index of overall result set from which to return IDs | [optional]
 **limit** | **int**| Number of IDs to return | [optional]

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

## `queryPlatformsMixin0()`

```php
queryPlatformsMixin0($offset, $limit): \OpenAPI\Client\Model\MsaQueryResponse
```

Get all platform IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 'offset_example'; // string | Starting index of overall result set from which to return IDs
$limit = 56; // int | Number of IDs to return

try {
    $result = $apiInstance->queryPlatformsMixin0($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->queryPlatformsMixin0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **string**| Starting index of overall result set from which to return IDs | [optional]
 **limit** | **int**| Number of IDs to return | [optional]

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

## `queryRuleGroupsFull()`

```php
queryRuleGroupsFull($sort, $filter, $q, $offset, $limit): \OpenAPI\Client\Model\MsaQueryResponse
```

Find all rule groups matching the query with optional filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = 'sort_example'; // string | Possible order by fields: {description, created_by, created_on, modified_by, modified_on, enabled, name}
$filter = 'filter_example'; // string | FQL query specifying the filter parameters. Filter term criteria: [enabled platform name description rules.action_label rules.name rules.description rules.pattern_severity rules.ruletype_name rules.enabled]. Filter range criteria: created_on, modified_on; use any common date format, such as '2010-05-15T14:55:21.892315096Z'.
$q = 'q_example'; // string | Match query criteria, which includes all the filter string fields
$offset = 'offset_example'; // string | Starting index of overall result set from which to return IDs
$limit = 56; // int | Number of IDs to return

try {
    $result = $apiInstance->queryRuleGroupsFull($sort, $filter, $q, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->queryRuleGroupsFull: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Possible order by fields: {description, created_by, created_on, modified_by, modified_on, enabled, name} | [optional]
 **filter** | **string**| FQL query specifying the filter parameters. Filter term criteria: [enabled platform name description rules.action_label rules.name rules.description rules.pattern_severity rules.ruletype_name rules.enabled]. Filter range criteria: created_on, modified_on; use any common date format, such as &#39;2010-05-15T14:55:21.892315096Z&#39;. | [optional]
 **q** | **string**| Match query criteria, which includes all the filter string fields | [optional]
 **offset** | **string**| Starting index of overall result set from which to return IDs | [optional]
 **limit** | **int**| Number of IDs to return | [optional]

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

## `queryRuleGroupsMixin0()`

```php
queryRuleGroupsMixin0($sort, $filter, $q, $offset, $limit): \OpenAPI\Client\Model\MsaQueryResponse
```

Finds all rule group IDs matching the query with optional filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = 'sort_example'; // string | Possible order by fields: {description, created_by, created_on, modified_by, modified_on, enabled, name}
$filter = 'filter_example'; // string | FQL query specifying the filter parameters. Filter term criteria: [enabled platform name description rules.action_label rules.name rules.description rules.pattern_severity rules.ruletype_name rules.enabled]. Filter range criteria: created_on, modified_on; use any common date format, such as '2010-05-15T14:55:21.892315096Z'.
$q = 'q_example'; // string | Match query criteria, which includes all the filter string fields
$offset = 'offset_example'; // string | Starting index of overall result set from which to return IDs
$limit = 56; // int | Number of IDs to return

try {
    $result = $apiInstance->queryRuleGroupsMixin0($sort, $filter, $q, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->queryRuleGroupsMixin0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Possible order by fields: {description, created_by, created_on, modified_by, modified_on, enabled, name} | [optional]
 **filter** | **string**| FQL query specifying the filter parameters. Filter term criteria: [enabled platform name description rules.action_label rules.name rules.description rules.pattern_severity rules.ruletype_name rules.enabled]. Filter range criteria: created_on, modified_on; use any common date format, such as &#39;2010-05-15T14:55:21.892315096Z&#39;. | [optional]
 **q** | **string**| Match query criteria, which includes all the filter string fields | [optional]
 **offset** | **string**| Starting index of overall result set from which to return IDs | [optional]
 **limit** | **int**| Number of IDs to return | [optional]

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

## `queryRuleTypes()`

```php
queryRuleTypes($offset, $limit): \OpenAPI\Client\Model\MsaQueryResponse
```

Get all rule type IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 'offset_example'; // string | Starting index of overall result set from which to return IDs
$limit = 56; // int | Number of IDs to return

try {
    $result = $apiInstance->queryRuleTypes($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->queryRuleTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **string**| Starting index of overall result set from which to return IDs | [optional]
 **limit** | **int**| Number of IDs to return | [optional]

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

## `queryRulesMixin0()`

```php
queryRulesMixin0($sort, $filter, $q, $offset, $limit): \OpenAPI\Client\Model\MsaQueryResponse
```

Finds all rule IDs matching the query with optional filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = 'sort_example'; // string | Possible order by fields: {rules.current_version.modified_on, rules.enabled, rules.created_by, rules.created_on, rules.current_version.description, rules.current_version.action_label, rules.current_version.modified_by, rules.ruletype_name, rules.current_version.name, rules.current_version.pattern_severity}
$filter = 'filter_example'; // string | FQL query specifying the filter parameters. Filter term criteria: [enabled platform name description rules.action_label rules.name rules.description rules.pattern_severity rules.ruletype_name rules.enabled]. Filter range criteria: created_on, modified_on; use any common date format, such as '2010-05-15T14:55:21.892315096Z'.
$q = 'q_example'; // string | Match query criteria, which includes all the filter string fields
$offset = 'offset_example'; // string | Starting index of overall result set from which to return IDs
$limit = 56; // int | Number of IDs to return

try {
    $result = $apiInstance->queryRulesMixin0($sort, $filter, $q, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->queryRulesMixin0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Possible order by fields: {rules.current_version.modified_on, rules.enabled, rules.created_by, rules.created_on, rules.current_version.description, rules.current_version.action_label, rules.current_version.modified_by, rules.ruletype_name, rules.current_version.name, rules.current_version.pattern_severity} | [optional]
 **filter** | **string**| FQL query specifying the filter parameters. Filter term criteria: [enabled platform name description rules.action_label rules.name rules.description rules.pattern_severity rules.ruletype_name rules.enabled]. Filter range criteria: created_on, modified_on; use any common date format, such as &#39;2010-05-15T14:55:21.892315096Z&#39;. | [optional]
 **q** | **string**| Match query criteria, which includes all the filter string fields | [optional]
 **offset** | **string**| Starting index of overall result set from which to return IDs | [optional]
 **limit** | **int**| Number of IDs to return | [optional]

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

## `updateRuleGroupMixin0()`

```php
updateRuleGroupMixin0($x_cs_username, $body): \OpenAPI\Client\Model\ApiRuleGroupsResponse
```

Update a rule group. The following properties can be modified: name, description, enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user ID
$body = new \OpenAPI\Client\Model\ApiRuleGroupModifyRequestV1(); // \OpenAPI\Client\Model\ApiRuleGroupModifyRequestV1

try {
    $result = $apiInstance->updateRuleGroupMixin0($x_cs_username, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->updateRuleGroupMixin0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user ID |
 **body** | [**\OpenAPI\Client\Model\ApiRuleGroupModifyRequestV1**](../Model/ApiRuleGroupModifyRequestV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApiRuleGroupsResponse**](../Model/ApiRuleGroupsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRules()`

```php
updateRules($x_cs_username, $body): \OpenAPI\Client\Model\ApiRulesResponse
```

Update rules within a rule group. Return the updated rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_cs_username = 'x_cs_username_example'; // string | The user ID
$body = new \OpenAPI\Client\Model\ApiRuleUpdatesRequestV1(); // \OpenAPI\Client\Model\ApiRuleUpdatesRequestV1

try {
    $result = $apiInstance->updateRules($x_cs_username, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->updateRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_cs_username** | **string**| The user ID |
 **body** | [**\OpenAPI\Client\Model\ApiRuleUpdatesRequestV1**](../Model/ApiRuleUpdatesRequestV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApiRulesResponse**](../Model/ApiRulesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validate()`

```php
validate($body): \OpenAPI\Client\Model\ApiValidationResponseV1
```

Validates field values and checks for matches if a test string is provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomIoaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ApiValidationRequestV1(); // \OpenAPI\Client\Model\ApiValidationRequestV1

try {
    $result = $apiInstance->validate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomIoaApi->validate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ApiValidationRequestV1**](../Model/ApiValidationRequestV1.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApiValidationResponseV1**](../Model/ApiValidationResponseV1.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
