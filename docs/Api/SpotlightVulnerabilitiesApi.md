# OpenAPI\Client\SpotlightVulnerabilitiesApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVulnerabilities()**](SpotlightVulnerabilitiesApi.md#getVulnerabilities) | **GET** /spotlight/entities/vulnerabilities/v2 | Get details on vulnerabilities by providing one or more IDs
[**queryVulnerabilities()**](SpotlightVulnerabilitiesApi.md#queryVulnerabilities) | **GET** /spotlight/queries/vulnerabilities/v1 | Search for Vulnerabilities in your environment by providing an FQL filter and paging details. Returns a set of Vulnerability IDs which match the filter criteria


## `getVulnerabilities()`

```php
getVulnerabilities($ids): \OpenAPI\Client\Model\DomainSPAPIVulnerabilitiesEntitiesResponseV2
```

Get details on vulnerabilities by providing one or more IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpotlightVulnerabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | One or more vulnerability IDs. Find vulnerability IDs with GET /spotlight/queries/vulnerabilities/v2

try {
    $result = $apiInstance->getVulnerabilities($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotlightVulnerabilitiesApi->getVulnerabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| One or more vulnerability IDs. Find vulnerability IDs with GET /spotlight/queries/vulnerabilities/v2 |

### Return type

[**\OpenAPI\Client\Model\DomainSPAPIVulnerabilitiesEntitiesResponseV2**](../Model/DomainSPAPIVulnerabilitiesEntitiesResponseV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryVulnerabilities()`

```php
queryVulnerabilities($filter, $after, $limit, $sort): \OpenAPI\Client\Model\DomainSPAPIQueryVulnerabilitiesResponse
```

Search for Vulnerabilities in your environment by providing an FQL filter and paging details. Returns a set of Vulnerability IDs which match the filter criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpotlightVulnerabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Filter items using a query in Falcon Query Language (FQL). Wildcards * are unsupported.   Common filter options include:  <ul><li>created_timestamp:>'2019-11-25T22:36:12Z'</li><li>closed_timestamp:>'2019-11-25T22:36:12Z'</li><li>aid:'8e7656b27d8c49a34a1af416424d6231'</li></ul>
$after = 'after_example'; // string | A pagination token used with the `limit` parameter to manage pagination of results. On your first request, don't provide an `after` token. On subsequent requests, provide the `after` token from the previous response to continue from that place in the results.
$limit = 56; // int | The number of items to return in this response (default: `100`). Use with the `after` parameter to manage pagination of results.
$sort = 'sort_example'; // string | Sort vulnerabilities by their properties. Common sort options include:  <ul><li>created_timestamp|desc</li><li>closed_timestamp|asc</li></ul>

try {
    $result = $apiInstance->queryVulnerabilities($filter, $after, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotlightVulnerabilitiesApi->queryVulnerabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter items using a query in Falcon Query Language (FQL). Wildcards * are unsupported.   Common filter options include:  &lt;ul&gt;&lt;li&gt;created_timestamp:&gt;&#39;2019-11-25T22:36:12Z&#39;&lt;/li&gt;&lt;li&gt;closed_timestamp:&gt;&#39;2019-11-25T22:36:12Z&#39;&lt;/li&gt;&lt;li&gt;aid:&#39;8e7656b27d8c49a34a1af416424d6231&#39;&lt;/li&gt;&lt;/ul&gt; |
 **after** | **string**| A pagination token used with the &#x60;limit&#x60; parameter to manage pagination of results. On your first request, don&#39;t provide an &#x60;after&#x60; token. On subsequent requests, provide the &#x60;after&#x60; token from the previous response to continue from that place in the results. | [optional]
 **limit** | **int**| The number of items to return in this response (default: &#x60;100&#x60;). Use with the &#x60;after&#x60; parameter to manage pagination of results. | [optional]
 **sort** | **string**| Sort vulnerabilities by their properties. Common sort options include:  &lt;ul&gt;&lt;li&gt;created_timestamp|desc&lt;/li&gt;&lt;li&gt;closed_timestamp|asc&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainSPAPIQueryVulnerabilitiesResponse**](../Model/DomainSPAPIQueryVulnerabilitiesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
