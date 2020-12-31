# OpenAPI\Client\DetectsApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAggregateDetects()**](DetectsApi.md#getAggregateDetects) | **POST** /detects/aggregates/detects/GET/v1 | Get detect aggregates as specified via json in request body.
[**getDetectSummaries()**](DetectsApi.md#getDetectSummaries) | **POST** /detects/entities/summaries/GET/v1 | View information about detections
[**queryDetects()**](DetectsApi.md#queryDetects) | **GET** /detects/queries/detects/v1 | Search for detection IDs that match a given query
[**updateDetectsByIdsV2()**](DetectsApi.md#updateDetectsByIdsV2) | **PATCH** /detects/entities/detects/v2 | Modify the state, assignee, and visibility of detections


## `getAggregateDetects()`

```php
getAggregateDetects($body): \OpenAPI\Client\Model\MsaAggregatesResponse
```

Get detect aggregates as specified via json in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DetectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\MsaAggregateQueryRequest()); // \OpenAPI\Client\Model\MsaAggregateQueryRequest[] | Query criteria and settings

try {
    $result = $apiInstance->getAggregateDetects($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectsApi->getAggregateDetects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\MsaAggregateQueryRequest[]**](../Model/MsaAggregateQueryRequest.md)| Query criteria and settings |

### Return type

[**\OpenAPI\Client\Model\MsaAggregatesResponse**](../Model/MsaAggregatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetectSummaries()`

```php
getDetectSummaries($body): \OpenAPI\Client\Model\DomainMsaDetectSummariesResponse
```

View information about detections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DetectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MsaIdsRequest(); // \OpenAPI\Client\Model\MsaIdsRequest | View key attributes of detections, including the associated host, [disposition](https://falcon.crowdstrike.com/support/documentation/2/query-api-reference#patterndispositionvalue), objective/tactic/technique, adversary, and more. Specify one or more detection IDs (max 1000 per request). Find detection IDs with the `/detects/queries/detects/v1` endpoint, the Falcon console, or the Streaming API.

try {
    $result = $apiInstance->getDetectSummaries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectsApi->getDetectSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\MsaIdsRequest**](../Model/MsaIdsRequest.md)| View key attributes of detections, including the associated host, [disposition](https://falcon.crowdstrike.com/support/documentation/2/query-api-reference#patterndispositionvalue), objective/tactic/technique, adversary, and more. Specify one or more detection IDs (max 1000 per request). Find detection IDs with the &#x60;/detects/queries/detects/v1&#x60; endpoint, the Falcon console, or the Streaming API. |

### Return type

[**\OpenAPI\Client\Model\DomainMsaDetectSummariesResponse**](../Model/DomainMsaDetectSummariesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryDetects()`

```php
queryDetects($offset, $limit, $sort, $filter, $q): \OpenAPI\Client\Model\MsaQueryResponse
```

Search for detection IDs that match a given query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DetectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | The first detection to return, where `0` is the latest detection. Use with the `limit` parameter to manage pagination of results.
$limit = 56; // int | The maximum number of detections to return in this response (default: 9999; max: 9999). Use with the `offset` parameter to manage pagination of results.
$sort = 'sort_example'; // string | Sort detections using these options:  - `first_behavior`: Timestamp of the first behavior associated with this detection - `last_behavior`: Timestamp of the last behavior associated with this detection - `max_severity`: Highest severity of the behaviors associated with this detection - `max_confidence`: Highest confidence of the behaviors associated with this detection - `adversary_id`: ID of the adversary associated with this detection, if any - `devices.hostname`: Hostname of the host where this detection was detected  Sort either `asc` (ascending) or `desc` (descending). For example: `last_behavior|asc`
$filter = 'filter_example'; // string | Filter detections using a query in Falcon Query Language (FQL) An asterisk wildcard `*` includes all results.   Common filter options include:  - `status` - `device.device_id` - `max_severity`  The full list of valid filter options is extensive. Review it in our [documentation inside the Falcon console](https://falcon.crowdstrike.com/support/documentation/2/query-api-reference#detections_fql).
$q = 'q_example'; // string | Search all detection metadata for the provided string

try {
    $result = $apiInstance->queryDetects($offset, $limit, $sort, $filter, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectsApi->queryDetects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The first detection to return, where &#x60;0&#x60; is the latest detection. Use with the &#x60;limit&#x60; parameter to manage pagination of results. | [optional]
 **limit** | **int**| The maximum number of detections to return in this response (default: 9999; max: 9999). Use with the &#x60;offset&#x60; parameter to manage pagination of results. | [optional]
 **sort** | **string**| Sort detections using these options:  - &#x60;first_behavior&#x60;: Timestamp of the first behavior associated with this detection - &#x60;last_behavior&#x60;: Timestamp of the last behavior associated with this detection - &#x60;max_severity&#x60;: Highest severity of the behaviors associated with this detection - &#x60;max_confidence&#x60;: Highest confidence of the behaviors associated with this detection - &#x60;adversary_id&#x60;: ID of the adversary associated with this detection, if any - &#x60;devices.hostname&#x60;: Hostname of the host where this detection was detected  Sort either &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). For example: &#x60;last_behavior|asc&#x60; | [optional]
 **filter** | **string**| Filter detections using a query in Falcon Query Language (FQL) An asterisk wildcard &#x60;*&#x60; includes all results.   Common filter options include:  - &#x60;status&#x60; - &#x60;device.device_id&#x60; - &#x60;max_severity&#x60;  The full list of valid filter options is extensive. Review it in our [documentation inside the Falcon console](https://falcon.crowdstrike.com/support/documentation/2/query-api-reference#detections_fql). | [optional]
 **q** | **string**| Search all detection metadata for the provided string | [optional]

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

## `updateDetectsByIdsV2()`

```php
updateDetectsByIdsV2($body): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Modify the state, assignee, and visibility of detections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DetectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainDetectsEntitiesPatchRequest(); // \OpenAPI\Client\Model\DomainDetectsEntitiesPatchRequest | This endpoint modifies attributes (state and assignee) of detections.   This endpoint accepts a query formatted as a JSON array of key-value pairs. You can update one or more attributes one or more detections with a single request.  **`assigned_to_uuid` values**  A user ID, such as `1234567891234567891`  **`ids` values**  One or more detection IDs, which you can find with the `/detects/queries/detects/v1` endpoint, the Falcon console, or the Streaming API.  **`show_in_ui` values**  - `true`: This detection is displayed in Falcon - `false`: This detection is not displayed in Falcon. Most commonly used together with the `status` key's `false_positive` value.  **`status` values**  - `new` - `in_progress` - `true_positive` - `false_positive` - `ignored`  **`comment` values** Optional comment to add to the detection. Comments are displayed with the detection in Falcon and usually used to provide context or notes for other Falcon users. A detection can have multiple comments over time.

try {
    $result = $apiInstance->updateDetectsByIdsV2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DetectsApi->updateDetectsByIdsV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainDetectsEntitiesPatchRequest**](../Model/DomainDetectsEntitiesPatchRequest.md)| This endpoint modifies attributes (state and assignee) of detections.   This endpoint accepts a query formatted as a JSON array of key-value pairs. You can update one or more attributes one or more detections with a single request.  **&#x60;assigned_to_uuid&#x60; values**  A user ID, such as &#x60;1234567891234567891&#x60;  **&#x60;ids&#x60; values**  One or more detection IDs, which you can find with the &#x60;/detects/queries/detects/v1&#x60; endpoint, the Falcon console, or the Streaming API.  **&#x60;show_in_ui&#x60; values**  - &#x60;true&#x60;: This detection is displayed in Falcon - &#x60;false&#x60;: This detection is not displayed in Falcon. Most commonly used together with the &#x60;status&#x60; key&#39;s &#x60;false_positive&#x60; value.  **&#x60;status&#x60; values**  - &#x60;new&#x60; - &#x60;in_progress&#x60; - &#x60;true_positive&#x60; - &#x60;false_positive&#x60; - &#x60;ignored&#x60;  **&#x60;comment&#x60; values** Optional comment to add to the detection. Comments are displayed with the detection in Falcon and usually used to provide context or notes for other Falcon users. A detection can have multiple comments over time. |

### Return type

[**\OpenAPI\Client\Model\MsaReplyMetaOnly**](../Model/MsaReplyMetaOnly.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
