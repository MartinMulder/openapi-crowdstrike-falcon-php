# OpenAPI\Client\UserManagementApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser()**](UserManagementApi.md#createUser) | **POST** /users/entities/users/v1 | Create a new user. After creating a user, assign one or more roles with POST /user-roles/entities/user-roles/v1
[**deleteUser()**](UserManagementApi.md#deleteUser) | **DELETE** /users/entities/users/v1 | Delete a user permanently
[**getAvailableRoleIds()**](UserManagementApi.md#getAvailableRoleIds) | **GET** /user-roles/queries/user-role-ids-by-cid/v1 | Show role IDs for all roles available in your customer account. For more information on each role, provide the role ID to &#x60;/customer/entities/roles/v1&#x60;.
[**getRoles()**](UserManagementApi.md#getRoles) | **GET** /user-roles/entities/user-roles/v1 | Get info about a role
[**getUserRoleIds()**](UserManagementApi.md#getUserRoleIds) | **GET** /user-roles/queries/user-role-ids-by-user-uuid/v1 | Show role IDs of roles assigned to a user. For more information on each role, provide the role ID to &#x60;/customer/entities/roles/v1&#x60;.
[**grantUserRoleIds()**](UserManagementApi.md#grantUserRoleIds) | **POST** /user-roles/entities/user-roles/v1 | Assign one or more roles to a user
[**retrieveEmailsByCID()**](UserManagementApi.md#retrieveEmailsByCID) | **GET** /users/queries/emails-by-cid/v1 | List the usernames (usually an email address) for all users in your customer account
[**retrieveUser()**](UserManagementApi.md#retrieveUser) | **GET** /users/entities/users/v1 | Get info about a user
[**retrieveUserUUID()**](UserManagementApi.md#retrieveUserUUID) | **GET** /users/queries/user-uuids-by-email/v1 | Get a user&#39;s ID by providing a username (usually an email address)
[**retrieveUserUUIDsByCID()**](UserManagementApi.md#retrieveUserUUIDsByCID) | **GET** /users/queries/user-uuids-by-cid/v1 | List user IDs for all users in your customer account. For more information on each user, provide the user ID to &#x60;/users/entities/user/v1&#x60;.
[**revokeUserRoleIds()**](UserManagementApi.md#revokeUserRoleIds) | **DELETE** /user-roles/entities/user-roles/v1 | Revoke one or more roles from a user
[**updateUser()**](UserManagementApi.md#updateUser) | **PATCH** /users/entities/users/v1 | Modify an existing user&#39;s first or last name


## `createUser()`

```php
createUser($body): \OpenAPI\Client\Model\DomainUserMetaDataResponse
```

Create a new user. After creating a user, assign one or more roles with POST /user-roles/entities/user-roles/v1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainUserCreateRequest(); // \OpenAPI\Client\Model\DomainUserCreateRequest | Attributes for this user. `uid` (required) is the user's email address, which is their username in Falcon.  Optional attributes:  <ul><li>`firstName`</li><li>`lastName`</li><li>`password`</li></ul>  As a best practice, we recommend omitting `password`. If single sign-on is enabled for your customer account, the `password` attribute is ignored. If single sign-on is not enabled, we send a user activation request to their email address when you create the user with no `password`. The user should use the activation email to set their own password.

try {
    $result = $apiInstance->createUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainUserCreateRequest**](../Model/DomainUserCreateRequest.md)| Attributes for this user. &#x60;uid&#x60; (required) is the user&#39;s email address, which is their username in Falcon.  Optional attributes:  &lt;ul&gt;&lt;li&gt;&#x60;firstName&#x60;&lt;/li&gt;&lt;li&gt;&#x60;lastName&#x60;&lt;/li&gt;&lt;li&gt;&#x60;password&#x60;&lt;/li&gt;&lt;/ul&gt;  As a best practice, we recommend omitting &#x60;password&#x60;. If single sign-on is enabled for your customer account, the &#x60;password&#x60; attribute is ignored. If single sign-on is not enabled, we send a user activation request to their email address when you create the user with no &#x60;password&#x60;. The user should use the activation email to set their own password. |

### Return type

[**\OpenAPI\Client\Model\DomainUserMetaDataResponse**](../Model/DomainUserMetaDataResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($user_uuid): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Delete a user permanently

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | ID of a user. Find a user's ID from `/users/entities/user/v1`.

try {
    $result = $apiInstance->deleteUser($user_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | **string**| ID of a user. Find a user&#39;s ID from &#x60;/users/entities/user/v1&#x60;. |

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

## `getAvailableRoleIds()`

```php
getAvailableRoleIds(): \OpenAPI\Client\Model\MsaQueryResponse
```

Show role IDs for all roles available in your customer account. For more information on each role, provide the role ID to `/customer/entities/roles/v1`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableRoleIds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->getAvailableRoleIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getRoles()`

```php
getRoles($ids): \OpenAPI\Client\Model\DomainUserRoleResponse
```

Get info about a role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | ID of a role. Find a role ID from `/customer/queries/roles/v1` or `/users/queries/roles/v1`.

try {
    $result = $apiInstance->getRoles($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| ID of a role. Find a role ID from &#x60;/customer/queries/roles/v1&#x60; or &#x60;/users/queries/roles/v1&#x60;. |

### Return type

[**\OpenAPI\Client\Model\DomainUserRoleResponse**](../Model/DomainUserRoleResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserRoleIds()`

```php
getUserRoleIds($user_uuid): \OpenAPI\Client\Model\MsaQueryResponse
```

Show role IDs of roles assigned to a user. For more information on each role, provide the role ID to `/customer/entities/roles/v1`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | ID of a user. Find a user's ID from `/users/entities/user/v1`.

try {
    $result = $apiInstance->getUserRoleIds($user_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->getUserRoleIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | **string**| ID of a user. Find a user&#39;s ID from &#x60;/users/entities/user/v1&#x60;. |

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

## `grantUserRoleIds()`

```php
grantUserRoleIds($user_uuid, $body): \OpenAPI\Client\Model\DomainUserRoleIDsResponse
```

Assign one or more roles to a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | ID of a user. Find a user's ID from `/users/entities/user/v1`.
$body = new \OpenAPI\Client\Model\DomainRoleIDs(); // \OpenAPI\Client\Model\DomainRoleIDs | Role ID(s) of the role you want to assign

try {
    $result = $apiInstance->grantUserRoleIds($user_uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->grantUserRoleIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | **string**| ID of a user. Find a user&#39;s ID from &#x60;/users/entities/user/v1&#x60;. |
 **body** | [**\OpenAPI\Client\Model\DomainRoleIDs**](../Model/DomainRoleIDs.md)| Role ID(s) of the role you want to assign |

### Return type

[**\OpenAPI\Client\Model\DomainUserRoleIDsResponse**](../Model/DomainUserRoleIDsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveEmailsByCID()`

```php
retrieveEmailsByCID(): \OpenAPI\Client\Model\MsaQueryResponse
```

List the usernames (usually an email address) for all users in your customer account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveEmailsByCID();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->retrieveEmailsByCID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `retrieveUser()`

```php
retrieveUser($ids): \OpenAPI\Client\Model\DomainUserMetaDataResponse
```

Get info about a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | ID of a user. Find a user's ID from `/users/entities/user/v1`.

try {
    $result = $apiInstance->retrieveUser($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->retrieveUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| ID of a user. Find a user&#39;s ID from &#x60;/users/entities/user/v1&#x60;. |

### Return type

[**\OpenAPI\Client\Model\DomainUserMetaDataResponse**](../Model/DomainUserMetaDataResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveUserUUID()`

```php
retrieveUserUUID($uid): \OpenAPI\Client\Model\MsaQueryResponse
```

Get a user's ID by providing a username (usually an email address)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = array('uid_example'); // string[] | A username. This is usually the user's email address, but may vary based on your configuration.

try {
    $result = $apiInstance->retrieveUserUUID($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->retrieveUserUUID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | [**string[]**](../Model/string.md)| A username. This is usually the user&#39;s email address, but may vary based on your configuration. |

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

## `retrieveUserUUIDsByCID()`

```php
retrieveUserUUIDsByCID(): \OpenAPI\Client\Model\MsaQueryResponse
```

List user IDs for all users in your customer account. For more information on each user, provide the user ID to `/users/entities/user/v1`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveUserUUIDsByCID();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->retrieveUserUUIDsByCID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `revokeUserRoleIds()`

```php
revokeUserRoleIds($user_uuid, $ids): \OpenAPI\Client\Model\DomainUserRoleIDsResponse
```

Revoke one or more roles from a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | ID of a user. Find a user's ID from `/users/entities/user/v1`.
$ids = array('ids_example'); // string[] | One or more role IDs to revoke. Find a role's ID from `/users/queries/roles/v1`.

try {
    $result = $apiInstance->revokeUserRoleIds($user_uuid, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->revokeUserRoleIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | **string**| ID of a user. Find a user&#39;s ID from &#x60;/users/entities/user/v1&#x60;. |
 **ids** | [**string[]**](../Model/string.md)| One or more role IDs to revoke. Find a role&#39;s ID from &#x60;/users/queries/roles/v1&#x60;. |

### Return type

[**\OpenAPI\Client\Model\DomainUserRoleIDsResponse**](../Model/DomainUserRoleIDsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_uuid, $body): \OpenAPI\Client\Model\DomainUserMetaDataResponse
```

Modify an existing user's first or last name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | ID of a user. Find a user's ID from `/users/entities/user/v1`.
$body = new \OpenAPI\Client\Model\DomainUpdateUserFields(); // \OpenAPI\Client\Model\DomainUpdateUserFields | Attributes for this user. All attributes (shown below) are optional.

try {
    $result = $apiInstance->updateUser($user_uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | **string**| ID of a user. Find a user&#39;s ID from &#x60;/users/entities/user/v1&#x60;. |
 **body** | [**\OpenAPI\Client\Model\DomainUpdateUserFields**](../Model/DomainUpdateUserFields.md)| Attributes for this user. All attributes (shown below) are optional. |

### Return type

[**\OpenAPI\Client\Model\DomainUserMetaDataResponse**](../Model/DomainUserMetaDataResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
