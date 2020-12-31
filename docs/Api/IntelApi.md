# OpenAPI\Client\IntelApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIntelActorEntities()**](IntelApi.md#getIntelActorEntities) | **GET** /intel/entities/actors/v1 | Retrieve specific actors using their actor IDs.
[**getIntelIndicatorEntities()**](IntelApi.md#getIntelIndicatorEntities) | **POST** /intel/entities/indicators/GET/v1 | Retrieve specific indicators using their indicator IDs.
[**getIntelReportEntities()**](IntelApi.md#getIntelReportEntities) | **GET** /intel/entities/reports/v1 | Retrieve specific reports using their report IDs.
[**getIntelReportPDF()**](IntelApi.md#getIntelReportPDF) | **GET** /intel/entities/report-files/v1 | Return a Report PDF attachment
[**getIntelRuleEntities()**](IntelApi.md#getIntelRuleEntities) | **GET** /intel/entities/rules/v1 | Retrieve details for rule sets for the specified ids.
[**getIntelRuleFile()**](IntelApi.md#getIntelRuleFile) | **GET** /intel/entities/rules-files/v1 | Download earlier rule sets.
[**getLatestIntelRuleFile()**](IntelApi.md#getLatestIntelRuleFile) | **GET** /intel/entities/rules-latest-files/v1 | Download the latest rule set.
[**queryIntelActorEntities()**](IntelApi.md#queryIntelActorEntities) | **GET** /intel/combined/actors/v1 | Get info about actors that match provided FQL filters.
[**queryIntelActorIds()**](IntelApi.md#queryIntelActorIds) | **GET** /intel/queries/actors/v1 | Get actor IDs that match provided FQL filters.
[**queryIntelIndicatorEntities()**](IntelApi.md#queryIntelIndicatorEntities) | **GET** /intel/combined/indicators/v1 | Get info about indicators that match provided FQL filters.
[**queryIntelIndicatorIds()**](IntelApi.md#queryIntelIndicatorIds) | **GET** /intel/queries/indicators/v1 | Get indicators IDs that match provided FQL filters.
[**queryIntelReportEntities()**](IntelApi.md#queryIntelReportEntities) | **GET** /intel/combined/reports/v1 | Get info about reports that match provided FQL filters.
[**queryIntelReportIds()**](IntelApi.md#queryIntelReportIds) | **GET** /intel/queries/reports/v1 | Get report IDs that match provided FQL filters.
[**queryIntelRuleIds()**](IntelApi.md#queryIntelRuleIds) | **GET** /intel/queries/rules/v1 | Search for rule IDs that match provided filter criteria.


## `getIntelActorEntities()`

```php
getIntelActorEntities($ids, $fields): \OpenAPI\Client\Model\DomainActorsResponse
```

Retrieve specific actors using their actor IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the actors you want to retrieve.
$fields = array('fields_example'); // string[] | The fields to return, or a predefined set of fields in the form of the collection name surrounded by two underscores like:  \\_\\_\\<collection\\>\\_\\_.  Ex: slug \\_\\_full\\_\\_.  Defaults to \\_\\_basic\\_\\_.

try {
    $result = $apiInstance->getIntelActorEntities($ids, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->getIntelActorEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the actors you want to retrieve. |
 **fields** | [**string[]**](../Model/string.md)| The fields to return, or a predefined set of fields in the form of the collection name surrounded by two underscores like:  \\_\\_\\&lt;collection\\&gt;\\_\\_.  Ex: slug \\_\\_full\\_\\_.  Defaults to \\_\\_basic\\_\\_. | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainActorsResponse**](../Model/DomainActorsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntelIndicatorEntities()`

```php
getIntelIndicatorEntities($body): \OpenAPI\Client\Model\DomainPublicIndicatorsV3Response
```

Retrieve specific indicators using their indicator IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MsaIdsRequest(); // \OpenAPI\Client\Model\MsaIdsRequest

try {
    $result = $apiInstance->getIntelIndicatorEntities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->getIntelIndicatorEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\MsaIdsRequest**](../Model/MsaIdsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\DomainPublicIndicatorsV3Response**](../Model/DomainPublicIndicatorsV3Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntelReportEntities()`

```php
getIntelReportEntities($ids, $fields): \OpenAPI\Client\Model\DomainNewsResponse
```

Retrieve specific reports using their report IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The IDs of the reports you want to retrieve.
$fields = array('fields_example'); // string[] | The fields to return, or a predefined set of fields in the form of the collection name surrounded by two underscores like:  \\_\\_\\<collection\\>\\_\\_.  Ex: slug \\_\\_full\\_\\_.  Defaults to \\_\\_basic\\_\\_.

try {
    $result = $apiInstance->getIntelReportEntities($ids, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->getIntelReportEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The IDs of the reports you want to retrieve. |
 **fields** | [**string[]**](../Model/string.md)| The fields to return, or a predefined set of fields in the form of the collection name surrounded by two underscores like:  \\_\\_\\&lt;collection\\&gt;\\_\\_.  Ex: slug \\_\\_full\\_\\_.  Defaults to \\_\\_basic\\_\\_. | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainNewsResponse**](../Model/DomainNewsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntelReportPDF()`

```php
getIntelReportPDF($id)
```

Return a Report PDF attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the report you want to download as a PDF.

try {
    $apiInstance->getIntelReportPDF($id);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->getIntelReportPDF: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the report you want to download as a PDF. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntelRuleEntities()`

```php
getIntelRuleEntities($ids): \OpenAPI\Client\Model\DomainRulesResponse
```

Retrieve details for rule sets for the specified ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The ids of rules to return.

try {
    $result = $apiInstance->getIntelRuleEntities($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->getIntelRuleEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The ids of rules to return. |

### Return type

[**\OpenAPI\Client\Model\DomainRulesResponse**](../Model/DomainRulesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntelRuleFile()`

```php
getIntelRuleFile($id, $accept, $format)
```

Download earlier rule sets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the rule set.
$accept = 'accept_example'; // string | Choose the format you want the rule set in.
$format = 'format_example'; // string | Choose the format you want the rule set in. Valid formats are zip and gzip. Defaults to zip.

try {
    $apiInstance->getIntelRuleFile($id, $accept, $format);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->getIntelRuleFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the rule set. |
 **accept** | **string**| Choose the format you want the rule set in. | [optional]
 **format** | **string**| Choose the format you want the rule set in. Valid formats are zip and gzip. Defaults to zip. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/zip`, `application/gzip`, `application/octet-stream`, `application/json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLatestIntelRuleFile()`

```php
getLatestIntelRuleFile($type, $accept, $format)
```

Download the latest rule set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The rule news report type. Accepted values:  snort-suricata-master  snort-suricata-update  snort-suricata-changelog  yara-master  yara-update  yara-changelog  common-event-format  netwitness
$accept = 'accept_example'; // string | Choose the format you want the rule set in.
$format = 'format_example'; // string | Choose the format you want the rule set in. Valid formats are zip and gzip. Defaults to zip.

try {
    $apiInstance->getLatestIntelRuleFile($type, $accept, $format);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->getLatestIntelRuleFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The rule news report type. Accepted values:  snort-suricata-master  snort-suricata-update  snort-suricata-changelog  yara-master  yara-update  yara-changelog  common-event-format  netwitness |
 **accept** | **string**| Choose the format you want the rule set in. | [optional]
 **format** | **string**| Choose the format you want the rule set in. Valid formats are zip and gzip. Defaults to zip. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/zip`, `application/gzip`, `application/octet-stream`, `application/json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIntelActorEntities()`

```php
queryIntelActorEntities($offset, $limit, $sort, $filter, $q, $fields): \OpenAPI\Client\Model\DomainActorsResponse
```

Get info about actors that match provided FQL filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Set the starting row number to return actors from. Defaults to 0.
$limit = 56; // int | Set the number of actors to return. The value must be between 1 and 5000.
$sort = 'sort_example'; // string | Order fields in ascending or descending order.  Ex: created_date|asc.
$filter = 'filter_example'; // string | Filter your query by specifying FQL filter parameters. Filter parameters include:  actors, actors.id, actors.name, actors.slug, actors.url, created_date, description, id, last_modified_date, motivations, motivations.id, motivations.slug, motivations.value, name, name.raw, short_description, slug, sub_type, sub_type.id, sub_type.name, sub_type.slug, tags, tags.id, tags.slug, tags.value, target_countries, target_countries.id, target_countries.slug, target_countries.value, target_industries, target_industries.id, target_industries.slug, target_industries.value, type, type.id, type.name, type.slug, url.
$q = 'q_example'; // string | Perform a generic substring search across all fields.
$fields = array('fields_example'); // string[] | The fields to return, or a predefined set of fields in the form of the collection name surrounded by two underscores like:  \\_\\_\\<collection\\>\\_\\_.  Ex: slug \\_\\_full\\_\\_.  Defaults to \\_\\_basic\\_\\_.

try {
    $result = $apiInstance->queryIntelActorEntities($offset, $limit, $sort, $filter, $q, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->queryIntelActorEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Set the starting row number to return actors from. Defaults to 0. | [optional]
 **limit** | **int**| Set the number of actors to return. The value must be between 1 and 5000. | [optional]
 **sort** | **string**| Order fields in ascending or descending order.  Ex: created_date|asc. | [optional]
 **filter** | **string**| Filter your query by specifying FQL filter parameters. Filter parameters include:  actors, actors.id, actors.name, actors.slug, actors.url, created_date, description, id, last_modified_date, motivations, motivations.id, motivations.slug, motivations.value, name, name.raw, short_description, slug, sub_type, sub_type.id, sub_type.name, sub_type.slug, tags, tags.id, tags.slug, tags.value, target_countries, target_countries.id, target_countries.slug, target_countries.value, target_industries, target_industries.id, target_industries.slug, target_industries.value, type, type.id, type.name, type.slug, url. | [optional]
 **q** | **string**| Perform a generic substring search across all fields. | [optional]
 **fields** | [**string[]**](../Model/string.md)| The fields to return, or a predefined set of fields in the form of the collection name surrounded by two underscores like:  \\_\\_\\&lt;collection\\&gt;\\_\\_.  Ex: slug \\_\\_full\\_\\_.  Defaults to \\_\\_basic\\_\\_. | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainActorsResponse**](../Model/DomainActorsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIntelActorIds()`

```php
queryIntelActorIds($offset, $limit, $sort, $filter, $q): \OpenAPI\Client\Model\MsaQueryResponse
```

Get actor IDs that match provided FQL filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Set the starting row number to return actors IDs from. Defaults to 0.
$limit = 56; // int | Set the number of actor IDs to return. The value must be between 1 and 5000.
$sort = 'sort_example'; // string | Order fields in ascending or descending order.  Ex: created_date|asc.
$filter = 'filter_example'; // string | Filter your query by specifying FQL filter parameters. Filter parameters include:  actors, actors.id, actors.name, actors.slug, actors.url, created_date, description, id, last_modified_date, motivations, motivations.id, motivations.slug, motivations.value, name, name.raw, short_description, slug, sub_type, sub_type.id, sub_type.name, sub_type.slug, tags, tags.id, tags.slug, tags.value, target_countries, target_countries.id, target_countries.slug, target_countries.value, target_industries, target_industries.id, target_industries.slug, target_industries.value, type, type.id, type.name, type.slug, url.
$q = 'q_example'; // string | Perform a generic substring search across all fields.

try {
    $result = $apiInstance->queryIntelActorIds($offset, $limit, $sort, $filter, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->queryIntelActorIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Set the starting row number to return actors IDs from. Defaults to 0. | [optional]
 **limit** | **int**| Set the number of actor IDs to return. The value must be between 1 and 5000. | [optional]
 **sort** | **string**| Order fields in ascending or descending order.  Ex: created_date|asc. | [optional]
 **filter** | **string**| Filter your query by specifying FQL filter parameters. Filter parameters include:  actors, actors.id, actors.name, actors.slug, actors.url, created_date, description, id, last_modified_date, motivations, motivations.id, motivations.slug, motivations.value, name, name.raw, short_description, slug, sub_type, sub_type.id, sub_type.name, sub_type.slug, tags, tags.id, tags.slug, tags.value, target_countries, target_countries.id, target_countries.slug, target_countries.value, target_industries, target_industries.id, target_industries.slug, target_industries.value, type, type.id, type.name, type.slug, url. | [optional]
 **q** | **string**| Perform a generic substring search across all fields. | [optional]

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

## `queryIntelIndicatorEntities()`

```php
queryIntelIndicatorEntities($offset, $limit, $sort, $filter, $q, $include_deleted): \OpenAPI\Client\Model\DomainPublicIndicatorsV3Response
```

Get info about indicators that match provided FQL filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Set the starting row number to return indicators from. Defaults to 0.
$limit = 56; // int | Set the number of indicators to return. The number must be between 1 and 50000
$sort = 'sort_example'; // string | Order fields in ascending or descending order.  Ex: published_date|asc.
$filter = 'filter_example'; // string | Filter your query by specifying FQL filter parameters. Filter parameters include:  _marker, actors, deleted, domain_types, id, indicator, ip_address_types, kill_chains, labels, labels.created_on, labels.last_valid_on, labels.name, last_updated, malicious_confidence, malware_families, published_date, reports, targets, threat_types, type, vulnerabilities.
$q = 'q_example'; // string | Perform a generic substring search across all fields.
$include_deleted = True; // bool | If true, include both published and deleted indicators in the response. Defaults to false.

try {
    $result = $apiInstance->queryIntelIndicatorEntities($offset, $limit, $sort, $filter, $q, $include_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->queryIntelIndicatorEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Set the starting row number to return indicators from. Defaults to 0. | [optional]
 **limit** | **int**| Set the number of indicators to return. The number must be between 1 and 50000 | [optional]
 **sort** | **string**| Order fields in ascending or descending order.  Ex: published_date|asc. | [optional]
 **filter** | **string**| Filter your query by specifying FQL filter parameters. Filter parameters include:  _marker, actors, deleted, domain_types, id, indicator, ip_address_types, kill_chains, labels, labels.created_on, labels.last_valid_on, labels.name, last_updated, malicious_confidence, malware_families, published_date, reports, targets, threat_types, type, vulnerabilities. | [optional]
 **q** | **string**| Perform a generic substring search across all fields. | [optional]
 **include_deleted** | **bool**| If true, include both published and deleted indicators in the response. Defaults to false. | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainPublicIndicatorsV3Response**](../Model/DomainPublicIndicatorsV3Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIntelIndicatorIds()`

```php
queryIntelIndicatorIds($offset, $limit, $sort, $filter, $q, $include_deleted): \OpenAPI\Client\Model\MsaQueryResponse
```

Get indicators IDs that match provided FQL filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Set the starting row number to return indicator IDs from. Defaults to 0.
$limit = 56; // int | Set the number of indicator IDs to return. The number must be between 1 and 50000
$sort = 'sort_example'; // string | Order fields in ascending or descending order.  Ex: published_date|asc.
$filter = 'filter_example'; // string | Filter your query by specifying FQL filter parameters. Filter parameters include:  _marker, actors, deleted, domain_types, id, indicator, ip_address_types, kill_chains, labels, labels.created_on, labels.last_valid_on, labels.name, last_updated, malicious_confidence, malware_families, published_date, reports, targets, threat_types, type, vulnerabilities.
$q = 'q_example'; // string | Perform a generic substring search across all fields.
$include_deleted = True; // bool | If true, include both published and deleted indicators in the response. Defaults to false.

try {
    $result = $apiInstance->queryIntelIndicatorIds($offset, $limit, $sort, $filter, $q, $include_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->queryIntelIndicatorIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Set the starting row number to return indicator IDs from. Defaults to 0. | [optional]
 **limit** | **int**| Set the number of indicator IDs to return. The number must be between 1 and 50000 | [optional]
 **sort** | **string**| Order fields in ascending or descending order.  Ex: published_date|asc. | [optional]
 **filter** | **string**| Filter your query by specifying FQL filter parameters. Filter parameters include:  _marker, actors, deleted, domain_types, id, indicator, ip_address_types, kill_chains, labels, labels.created_on, labels.last_valid_on, labels.name, last_updated, malicious_confidence, malware_families, published_date, reports, targets, threat_types, type, vulnerabilities. | [optional]
 **q** | **string**| Perform a generic substring search across all fields. | [optional]
 **include_deleted** | **bool**| If true, include both published and deleted indicators in the response. Defaults to false. | [optional]

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

## `queryIntelReportEntities()`

```php
queryIntelReportEntities($offset, $limit, $sort, $filter, $q, $fields): \OpenAPI\Client\Model\DomainNewsResponse
```

Get info about reports that match provided FQL filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Set the starting row number to return reports from. Defaults to 0.
$limit = 56; // int | Set the number of reports to return. The value must be between 1 and 5000.
$sort = 'sort_example'; // string | Order fields in ascending or descending order. Ex: created_date|asc.
$filter = 'filter_example'; // string | Filter your query by specifying FQL filter parameters. Filter parameters include:  actors, actors.id, actors.name, actors.slug, actors.url, created_date, description, id, last_modified_date, motivations, motivations.id, motivations.slug, motivations.value, name, name.raw, short_description, slug, sub_type, sub_type.id, sub_type.name, sub_type.slug, tags, tags.id, tags.slug, tags.value, target_countries, target_countries.id, target_countries.slug, target_countries.value, target_industries, target_industries.id, target_industries.slug, target_industries.value, type, type.id, type.name, type.slug, url.
$q = 'q_example'; // string | Perform a generic substring search across all fields.
$fields = array('fields_example'); // string[] | The fields to return, or a predefined set of fields in the form of the collection name surrounded by two underscores like:  \\_\\_\\<collection\\>\\_\\_.  Ex: slug \\_\\_full\\_\\_.  Defaults to \\_\\_basic\\_\\_.

try {
    $result = $apiInstance->queryIntelReportEntities($offset, $limit, $sort, $filter, $q, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->queryIntelReportEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Set the starting row number to return reports from. Defaults to 0. | [optional]
 **limit** | **int**| Set the number of reports to return. The value must be between 1 and 5000. | [optional]
 **sort** | **string**| Order fields in ascending or descending order. Ex: created_date|asc. | [optional]
 **filter** | **string**| Filter your query by specifying FQL filter parameters. Filter parameters include:  actors, actors.id, actors.name, actors.slug, actors.url, created_date, description, id, last_modified_date, motivations, motivations.id, motivations.slug, motivations.value, name, name.raw, short_description, slug, sub_type, sub_type.id, sub_type.name, sub_type.slug, tags, tags.id, tags.slug, tags.value, target_countries, target_countries.id, target_countries.slug, target_countries.value, target_industries, target_industries.id, target_industries.slug, target_industries.value, type, type.id, type.name, type.slug, url. | [optional]
 **q** | **string**| Perform a generic substring search across all fields. | [optional]
 **fields** | [**string[]**](../Model/string.md)| The fields to return, or a predefined set of fields in the form of the collection name surrounded by two underscores like:  \\_\\_\\&lt;collection\\&gt;\\_\\_.  Ex: slug \\_\\_full\\_\\_.  Defaults to \\_\\_basic\\_\\_. | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainNewsResponse**](../Model/DomainNewsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIntelReportIds()`

```php
queryIntelReportIds($offset, $limit, $sort, $filter, $q): \OpenAPI\Client\Model\MsaQueryResponse
```

Get report IDs that match provided FQL filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Set the starting row number to return report IDs from. Defaults to 0.
$limit = 56; // int | Set the number of report IDs to return. The value must be between 1 and 5000.
$sort = 'sort_example'; // string | Order fields in ascending or descending order.  Ex: created_date|asc.
$filter = 'filter_example'; // string | Filter your query by specifying FQL filter parameters. Filter parameters include:  actors, actors.id, actors.name, actors.slug, actors.url, created_date, description, id, last_modified_date, motivations, motivations.id, motivations.slug, motivations.value, name, name.raw, short_description, slug, sub_type, sub_type.id, sub_type.name, sub_type.slug, tags, tags.id, tags.slug, tags.value, target_countries, target_countries.id, target_countries.slug, target_countries.value, target_industries, target_industries.id, target_industries.slug, target_industries.value, type, type.id, type.name, type.slug, url.
$q = 'q_example'; // string | Perform a generic substring search across all fields.

try {
    $result = $apiInstance->queryIntelReportIds($offset, $limit, $sort, $filter, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->queryIntelReportIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Set the starting row number to return report IDs from. Defaults to 0. | [optional]
 **limit** | **int**| Set the number of report IDs to return. The value must be between 1 and 5000. | [optional]
 **sort** | **string**| Order fields in ascending or descending order.  Ex: created_date|asc. | [optional]
 **filter** | **string**| Filter your query by specifying FQL filter parameters. Filter parameters include:  actors, actors.id, actors.name, actors.slug, actors.url, created_date, description, id, last_modified_date, motivations, motivations.id, motivations.slug, motivations.value, name, name.raw, short_description, slug, sub_type, sub_type.id, sub_type.name, sub_type.slug, tags, tags.id, tags.slug, tags.value, target_countries, target_countries.id, target_countries.slug, target_countries.value, target_industries, target_industries.id, target_industries.slug, target_industries.value, type, type.id, type.name, type.slug, url. | [optional]
 **q** | **string**| Perform a generic substring search across all fields. | [optional]

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

## `queryIntelRuleIds()`

```php
queryIntelRuleIds($type, $offset, $limit, $sort, $name, $description, $tags, $min_created_date, $max_created_date, $q): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for rule IDs that match provided filter criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IntelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The rule news report type. Accepted values:  snort-suricata-master  snort-suricata-update  snort-suricata-changelog  yara-master  yara-update  yara-changelog  common-event-format  netwitness
$offset = 56; // int | Set the starting row number to return reports from. Defaults to 0.
$limit = 56; // int | The number of rule IDs to return. Defaults to 10.
$sort = 'sort_example'; // string | Order fields in ascending or descending order.  Ex: created_date|asc.
$name = array('name_example'); // string[] | Search by rule title.
$description = array('description_example'); // string[] | Substring match on description field.
$tags = array('tags_example'); // string[] | Search for rule tags.
$min_created_date = 56; // int | Filter results to those created on or after a certain date.
$max_created_date = 'max_created_date_example'; // string | Filter results to those created on or before a certain date.
$q = 'q_example'; // string | Perform a generic substring search across all fields.

try {
    $result = $apiInstance->queryIntelRuleIds($type, $offset, $limit, $sort, $name, $description, $tags, $min_created_date, $max_created_date, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntelApi->queryIntelRuleIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The rule news report type. Accepted values:  snort-suricata-master  snort-suricata-update  snort-suricata-changelog  yara-master  yara-update  yara-changelog  common-event-format  netwitness |
 **offset** | **int**| Set the starting row number to return reports from. Defaults to 0. | [optional]
 **limit** | **int**| The number of rule IDs to return. Defaults to 10. | [optional]
 **sort** | **string**| Order fields in ascending or descending order.  Ex: created_date|asc. | [optional]
 **name** | [**string[]**](../Model/string.md)| Search by rule title. | [optional]
 **description** | [**string[]**](../Model/string.md)| Substring match on description field. | [optional]
 **tags** | [**string[]**](../Model/string.md)| Search for rule tags. | [optional]
 **min_created_date** | **int**| Filter results to those created on or after a certain date. | [optional]
 **max_created_date** | **string**| Filter results to those created on or before a certain date. | [optional]
 **q** | **string**| Perform a generic substring search across all fields. | [optional]

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
