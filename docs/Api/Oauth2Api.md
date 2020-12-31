# OpenAPI\Client\Oauth2Api

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2AccessToken()**](Oauth2Api.md#oauth2AccessToken) | **POST** /oauth2/token | Generate an OAuth2 access token
[**oauth2RevokeToken()**](Oauth2Api.md#oauth2RevokeToken) | **POST** /oauth2/revoke | Revoke a previously issued OAuth2 access token before the end of its standard 30-minute lifespan.


## `oauth2AccessToken()`

```php
oauth2AccessToken($client_id, $client_secret, $member_cid): \OpenAPI\Client\Model\DomainAccessTokenResponseV1
```

Generate an OAuth2 access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\Oauth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string | The API client ID to authenticate your API requests. For information on generating API clients, see [API documentation inside Falcon](https://falcon.crowdstrike.com/support/documentation/1/crowdstrike-api-introduction-for-developers).
$client_secret = 'client_secret_example'; // string | The API client secret to authenticate your API requests. For information on generating API clients, see [API documentation inside Falcon](https://falcon.crowdstrike.com/support/documentation/1/crowdstrike-api-introduction-for-developers).
$member_cid = 'member_cid_example'; // string | For MSSP Master CIDs, optionally lock the token to act on behalf of this member CID

try {
    $result = $apiInstance->oauth2AccessToken($client_id, $client_secret, $member_cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->oauth2AccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| The API client ID to authenticate your API requests. For information on generating API clients, see [API documentation inside Falcon](https://falcon.crowdstrike.com/support/documentation/1/crowdstrike-api-introduction-for-developers). |
 **client_secret** | **string**| The API client secret to authenticate your API requests. For information on generating API clients, see [API documentation inside Falcon](https://falcon.crowdstrike.com/support/documentation/1/crowdstrike-api-introduction-for-developers). |
 **member_cid** | **string**| For MSSP Master CIDs, optionally lock the token to act on behalf of this member CID | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainAccessTokenResponseV1**](../Model/DomainAccessTokenResponseV1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauth2RevokeToken()`

```php
oauth2RevokeToken($token): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Revoke a previously issued OAuth2 access token before the end of its standard 30-minute lifespan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\Oauth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The OAuth2 access token you want to revoke.  Include your API client ID and secret in basic auth format (`Authorization: basic <encoded API client ID and secret>`) in your request header.

try {
    $result = $apiInstance->oauth2RevokeToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->oauth2RevokeToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The OAuth2 access token you want to revoke.  Include your API client ID and secret in basic auth format (&#x60;Authorization: basic &lt;encoded API client ID and secret&gt;&#x60;) in your request header. |

### Return type

[**\OpenAPI\Client\Model\MsaReplyMetaOnly**](../Model/MsaReplyMetaOnly.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
