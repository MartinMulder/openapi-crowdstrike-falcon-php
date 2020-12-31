# OpenAPI\Client\IncidentsApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**crowdScore()**](IncidentsApi.md#crowdScore) | **GET** /incidents/combined/crowdscores/v1 | Query environment wide CrowdScore and return the entity data
[**getBehaviors()**](IncidentsApi.md#getBehaviors) | **POST** /incidents/entities/behaviors/GET/v1 | Get details on behaviors by providing behavior IDs
[**getIncidents()**](IncidentsApi.md#getIncidents) | **POST** /incidents/entities/incidents/GET/v1 | Get details on incidents by providing incident IDs
[**performIncidentAction()**](IncidentsApi.md#performIncidentAction) | **POST** /incidents/entities/incident-actions/v1 | Perform a set of actions on one or more incidents, such as adding tags or comments or updating the incident name or description
[**queryBehaviors()**](IncidentsApi.md#queryBehaviors) | **GET** /incidents/queries/behaviors/v1 | Search for behaviors by providing an FQL filter, sorting, and paging details
[**queryIncidents()**](IncidentsApi.md#queryIncidents) | **GET** /incidents/queries/incidents/v1 | Search for incidents by providing an FQL filter, sorting, and paging details


## `crowdScore()`

```php
crowdScore($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\ApiMsaEnvironmentScoreResponse
```

Query environment wide CrowdScore and return the entity data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Optional filter and sort criteria in the form of an FQL query. For more information about FQL queries, see [our FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide).
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$limit = 56; // int | The maximum records to return. [1-2500]
$sort = 'sort_example'; // string | The property to sort on, followed by a dot (.), followed by the sort direction, either \"asc\" or \"desc\".

try {
    $result = $apiInstance->crowdScore($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->crowdScore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Optional filter and sort criteria in the form of an FQL query. For more information about FQL queries, see [our FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide). | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **limit** | **int**| The maximum records to return. [1-2500] | [optional]
 **sort** | **string**| The property to sort on, followed by a dot (.), followed by the sort direction, either \&quot;asc\&quot; or \&quot;desc\&quot;. | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiMsaEnvironmentScoreResponse**](../Model/ApiMsaEnvironmentScoreResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBehaviors()`

```php
getBehaviors($body): \OpenAPI\Client\Model\ApiMsaExternalBehaviorResponse
```

Get details on behaviors by providing behavior IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MsaIdsRequest(); // \OpenAPI\Client\Model\MsaIdsRequest

try {
    $result = $apiInstance->getBehaviors($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getBehaviors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\MsaIdsRequest**](../Model/MsaIdsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApiMsaExternalBehaviorResponse**](../Model/ApiMsaExternalBehaviorResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncidents()`

```php
getIncidents($body): \OpenAPI\Client\Model\ApiMsaExternalIncidentResponse
```

Get details on incidents by providing incident IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MsaIdsRequest(); // \OpenAPI\Client\Model\MsaIdsRequest

try {
    $result = $apiInstance->getIncidents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getIncidents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\MsaIdsRequest**](../Model/MsaIdsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApiMsaExternalIncidentResponse**](../Model/ApiMsaExternalIncidentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performIncidentAction()`

```php
performIncidentAction($body, $update_detects, $overwrite_detects): \OpenAPI\Client\Model\ApiMsaIncidentPerformActionResponse
```

Perform a set of actions on one or more incidents, such as adding tags or comments or updating the incident name or description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MsaEntityActionRequestV2(); // \OpenAPI\Client\Model\MsaEntityActionRequestV2
$update_detects = false; // bool | If true, update assigned-to-uuid and or status of detections associated with the incident(s). Defaults to false
$overwrite_detects = false; // bool | If true and update-detects is true, the assigned-to-uuid or status for ALL detections associated with the incident(s) will be overwritten. If false, only detects that have default values for assigned-to-uuid and/or status will be updated. Defaults to false. Ignored if 'update-detects' is missing or false.

try {
    $result = $apiInstance->performIncidentAction($body, $update_detects, $overwrite_detects);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->performIncidentAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\MsaEntityActionRequestV2**](../Model/MsaEntityActionRequestV2.md)|  |
 **update_detects** | **bool**| If true, update assigned-to-uuid and or status of detections associated with the incident(s). Defaults to false | [optional] [default to false]
 **overwrite_detects** | **bool**| If true and update-detects is true, the assigned-to-uuid or status for ALL detections associated with the incident(s) will be overwritten. If false, only detects that have default values for assigned-to-uuid and/or status will be updated. Defaults to false. Ignored if &#39;update-detects&#39; is missing or false. | [optional] [default to false]

### Return type

[**\OpenAPI\Client\Model\ApiMsaIncidentPerformActionResponse**](../Model/ApiMsaIncidentPerformActionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryBehaviors()`

```php
queryBehaviors($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for behaviors by providing an FQL filter, sorting, and paging details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Optional filter and sort criteria in the form of an FQL query. For more information about FQL queries, see [our FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide).
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$limit = 56; // int | The maximum records to return. [1-500]
$sort = 'sort_example'; // string | The property to sort on, followed by a dot (.), followed by the sort direction, either \"asc\" or \"desc\".

try {
    $result = $apiInstance->queryBehaviors($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->queryBehaviors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Optional filter and sort criteria in the form of an FQL query. For more information about FQL queries, see [our FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide). | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **limit** | **int**| The maximum records to return. [1-500] | [optional]
 **sort** | **string**| The property to sort on, followed by a dot (.), followed by the sort direction, either \&quot;asc\&quot; or \&quot;desc\&quot;. | [optional]

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

## `queryIncidents()`

```php
queryIncidents($sort, $filter, $offset, $limit): \OpenAPI\Client\Model\ApiMsaIncidentQueryResponse
```

Search for incidents by providing an FQL filter, sorting, and paging details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = 'sort_example'; // string | The property to sort on, followed by a dot (.), followed by the sort direction, either \"asc\" or \"desc\".
$filter = 'filter_example'; // string | Optional filter and sort criteria in the form of an FQL query. For more information about FQL queries, see [our FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide).
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$limit = 56; // int | The maximum records to return. [1-500]

try {
    $result = $apiInstance->queryIncidents($sort, $filter, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->queryIncidents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| The property to sort on, followed by a dot (.), followed by the sort direction, either \&quot;asc\&quot; or \&quot;desc\&quot;. | [optional]
 **filter** | **string**| Optional filter and sort criteria in the form of an FQL query. For more information about FQL queries, see [our FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide). | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **limit** | **int**| The maximum records to return. [1-500] | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiMsaIncidentQueryResponse**](../Model/ApiMsaIncidentQueryResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
