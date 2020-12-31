# OpenAPI\Client\RealTimeResponseAdminApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchAdminCmd()**](RealTimeResponseAdminApi.md#batchAdminCmd) | **POST** /real-time-response/combined/batch-admin-command/v1 | Batch executes a RTR administrator command across the hosts mapped to the given batch ID.
[**rTRCheckAdminCommandStatus()**](RealTimeResponseAdminApi.md#rTRCheckAdminCommandStatus) | **GET** /real-time-response/entities/admin-command/v1 | Get status of an executed RTR administrator command on a single host.
[**rTRCreatePutFiles()**](RealTimeResponseAdminApi.md#rTRCreatePutFiles) | **POST** /real-time-response/entities/put-files/v1 | Upload a new put-file to use for the RTR &#x60;put&#x60; command.
[**rTRCreateScripts()**](RealTimeResponseAdminApi.md#rTRCreateScripts) | **POST** /real-time-response/entities/scripts/v1 | Upload a new custom-script to use for the RTR &#x60;runscript&#x60; command.
[**rTRDeletePutFiles()**](RealTimeResponseAdminApi.md#rTRDeletePutFiles) | **DELETE** /real-time-response/entities/put-files/v1 | Delete a put-file based on the ID given.  Can only delete one file at a time.
[**rTRDeleteScripts()**](RealTimeResponseAdminApi.md#rTRDeleteScripts) | **DELETE** /real-time-response/entities/scripts/v1 | Delete a custom-script based on the ID given.  Can only delete one script at a time.
[**rTRExecuteAdminCommand()**](RealTimeResponseAdminApi.md#rTRExecuteAdminCommand) | **POST** /real-time-response/entities/admin-command/v1 | Execute a RTR administrator command on a single host.
[**rTRGetPutFiles()**](RealTimeResponseAdminApi.md#rTRGetPutFiles) | **GET** /real-time-response/entities/put-files/v1 | Get put-files based on the ID&#39;s given. These are used for the RTR &#x60;put&#x60; command.
[**rTRGetScripts()**](RealTimeResponseAdminApi.md#rTRGetScripts) | **GET** /real-time-response/entities/scripts/v1 | Get custom-scripts based on the ID&#39;s given. These are used for the RTR &#x60;runscript&#x60; command.
[**rTRListPutFiles()**](RealTimeResponseAdminApi.md#rTRListPutFiles) | **GET** /real-time-response/queries/put-files/v1 | Get a list of put-file ID&#39;s that are available to the user for the &#x60;put&#x60; command.
[**rTRListScripts()**](RealTimeResponseAdminApi.md#rTRListScripts) | **GET** /real-time-response/queries/scripts/v1 | Get a list of custom-script ID&#39;s that are available to the user for the &#x60;runscript&#x60; command.
[**rTRUpdateScripts()**](RealTimeResponseAdminApi.md#rTRUpdateScripts) | **PATCH** /real-time-response/entities/scripts/v1 | Upload a new scripts to replace an existing one.


## `batchAdminCmd()`

```php
batchAdminCmd($body, $timeout, $timeout_duration): \OpenAPI\Client\Model\DomainMultiCommandExecuteResponseWrapper
```

Batch executes a RTR administrator command across the hosts mapped to the given batch ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainBatchExecuteCommandRequest(); // \OpenAPI\Client\Model\DomainBatchExecuteCommandRequest | Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - `cat` - `cd` - `clear` - `cp` - `encrypt` - `env` - `eventlog` - `filehash` - `get` - `getsid` - `help` - `history` - `ipconfig` - `kill` - `ls` - `map` - `memdump` - `mkdir` - `mount` - `mv` - `netstat` - `ps` - `put` - `reg query` - `reg set` - `reg delete` - `reg load` - `reg unload` - `restart` - `rm` - `run` - `runscript` - `shutdown` - `unmap` - `update history` - `update install` - `update list` - `update query` - `xmemdump` - `zip`  **`base_command`** Active-Responder command type we are going to execute, for example: `get` or `cp`.  Refer to the RTR documentation for the full list of commands. **`batch_id`** Batch ID to execute the command on.  Received from `/real-time-response/combined/init-sessions/v1`. **`command_string`** Full command string for the command. For example  `get some_file.txt` **`optional_hosts`** List of a subset of hosts we want to run the command on.  If this list is supplied, only these hosts will receive the command.
$timeout = 30; // int | Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes.
$timeout_duration = '30s'; // string | Timeout duration for for how long to wait for the request in duration syntax. Example, `10s`. Valid units: `ns, us, ms, s, m, h`. Maximum is 10 minutes.

try {
    $result = $apiInstance->batchAdminCmd($body, $timeout, $timeout_duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->batchAdminCmd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainBatchExecuteCommandRequest**](../Model/DomainBatchExecuteCommandRequest.md)| Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - &#x60;cat&#x60; - &#x60;cd&#x60; - &#x60;clear&#x60; - &#x60;cp&#x60; - &#x60;encrypt&#x60; - &#x60;env&#x60; - &#x60;eventlog&#x60; - &#x60;filehash&#x60; - &#x60;get&#x60; - &#x60;getsid&#x60; - &#x60;help&#x60; - &#x60;history&#x60; - &#x60;ipconfig&#x60; - &#x60;kill&#x60; - &#x60;ls&#x60; - &#x60;map&#x60; - &#x60;memdump&#x60; - &#x60;mkdir&#x60; - &#x60;mount&#x60; - &#x60;mv&#x60; - &#x60;netstat&#x60; - &#x60;ps&#x60; - &#x60;put&#x60; - &#x60;reg query&#x60; - &#x60;reg set&#x60; - &#x60;reg delete&#x60; - &#x60;reg load&#x60; - &#x60;reg unload&#x60; - &#x60;restart&#x60; - &#x60;rm&#x60; - &#x60;run&#x60; - &#x60;runscript&#x60; - &#x60;shutdown&#x60; - &#x60;unmap&#x60; - &#x60;update history&#x60; - &#x60;update install&#x60; - &#x60;update list&#x60; - &#x60;update query&#x60; - &#x60;xmemdump&#x60; - &#x60;zip&#x60;  **&#x60;base_command&#x60;** Active-Responder command type we are going to execute, for example: &#x60;get&#x60; or &#x60;cp&#x60;.  Refer to the RTR documentation for the full list of commands. **&#x60;batch_id&#x60;** Batch ID to execute the command on.  Received from &#x60;/real-time-response/combined/init-sessions/v1&#x60;. **&#x60;command_string&#x60;** Full command string for the command. For example  &#x60;get some_file.txt&#x60; **&#x60;optional_hosts&#x60;** List of a subset of hosts we want to run the command on.  If this list is supplied, only these hosts will receive the command. |
 **timeout** | **int**| Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes. | [optional] [default to 30]
 **timeout_duration** | **string**| Timeout duration for for how long to wait for the request in duration syntax. Example, &#x60;10s&#x60;. Valid units: &#x60;ns, us, ms, s, m, h&#x60;. Maximum is 10 minutes. | [optional] [default to &#39;30s&#39;]

### Return type

[**\OpenAPI\Client\Model\DomainMultiCommandExecuteResponseWrapper**](../Model/DomainMultiCommandExecuteResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRCheckAdminCommandStatus()`

```php
rTRCheckAdminCommandStatus($cloud_request_id, $sequence_id): \OpenAPI\Client\Model\DomainStatusResponseWrapper
```

Get status of an executed RTR administrator command on a single host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_request_id = 'cloud_request_id_example'; // string | Cloud Request ID of the executed command to query
$sequence_id = 0; // int | Sequence ID that we want to retrieve. Command responses are chunked across sequences

try {
    $result = $apiInstance->rTRCheckAdminCommandStatus($cloud_request_id, $sequence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRCheckAdminCommandStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_request_id** | **string**| Cloud Request ID of the executed command to query |
 **sequence_id** | **int**| Sequence ID that we want to retrieve. Command responses are chunked across sequences | [default to 0]

### Return type

[**\OpenAPI\Client\Model\DomainStatusResponseWrapper**](../Model/DomainStatusResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRCreatePutFiles()`

```php
rTRCreatePutFiles($file, $description, $name, $comments_for_audit_log): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Upload a new put-file to use for the RTR `put` command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | put-file to upload
$description = 'description_example'; // string | File description
$name = 'name_example'; // string | File name (if different than actual file name)
$comments_for_audit_log = 'comments_for_audit_log_example'; // string | The audit log comment

try {
    $result = $apiInstance->rTRCreatePutFiles($file, $description, $name, $comments_for_audit_log);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRCreatePutFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**| put-file to upload |
 **description** | **string**| File description |
 **name** | **string**| File name (if different than actual file name) | [optional]
 **comments_for_audit_log** | **string**| The audit log comment | [optional]

### Return type

[**\OpenAPI\Client\Model\MsaReplyMetaOnly**](../Model/MsaReplyMetaOnly.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRCreateScripts()`

```php
rTRCreateScripts($description, $permission_type, $file, $name, $comments_for_audit_log, $content, $platform): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Upload a new custom-script to use for the RTR `runscript` command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description = 'description_example'; // string | File description
$permission_type = 'none'; // string | Permission for the custom-script. Valid permission values:   - `private`, usable by only the user who uploaded it   - `group`, usable by all RTR Admins   - `public`, usable by all active-responders and RTR admins
$file = "/path/to/file.txt"; // \SplFileObject | custom-script file to upload.  These should be powershell scripts.
$name = 'name_example'; // string | File name (if different than actual file name)
$comments_for_audit_log = 'comments_for_audit_log_example'; // string | The audit log comment
$content = 'content_example'; // string | The script text that you want to use to upload
$platform = 'platform_example'; // string[] | Platforms for the file. Currently supports: windows, mac, linux, . If no platform is provided, it will default to 'windows'

try {
    $result = $apiInstance->rTRCreateScripts($description, $permission_type, $file, $name, $comments_for_audit_log, $content, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRCreateScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description** | **string**| File description |
 **permission_type** | **string**| Permission for the custom-script. Valid permission values:   - &#x60;private&#x60;, usable by only the user who uploaded it   - &#x60;group&#x60;, usable by all RTR Admins   - &#x60;public&#x60;, usable by all active-responders and RTR admins | [default to &#39;none&#39;]
 **file** | **\SplFileObject****\SplFileObject**| custom-script file to upload.  These should be powershell scripts. | [optional]
 **name** | **string**| File name (if different than actual file name) | [optional]
 **comments_for_audit_log** | **string**| The audit log comment | [optional]
 **content** | **string**| The script text that you want to use to upload | [optional]
 **platform** | [**string[]**](../Model/string.md)| Platforms for the file. Currently supports: windows, mac, linux, . If no platform is provided, it will default to &#39;windows&#39; | [optional]

### Return type

[**\OpenAPI\Client\Model\MsaReplyMetaOnly**](../Model/MsaReplyMetaOnly.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRDeletePutFiles()`

```php
rTRDeletePutFiles($ids): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Delete a put-file based on the ID given.  Can only delete one file at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = 'ids_example'; // string | File id

try {
    $result = $apiInstance->rTRDeletePutFiles($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRDeletePutFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| File id |

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

## `rTRDeleteScripts()`

```php
rTRDeleteScripts($ids): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Delete a custom-script based on the ID given.  Can only delete one script at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = 'ids_example'; // string | File id

try {
    $result = $apiInstance->rTRDeleteScripts($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRDeleteScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| File id |

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

## `rTRExecuteAdminCommand()`

```php
rTRExecuteAdminCommand($body): \OpenAPI\Client\Model\DomainCommandExecuteResponseWrapper
```

Execute a RTR administrator command on a single host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainCommandExecuteRequest(); // \OpenAPI\Client\Model\DomainCommandExecuteRequest | Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - `cat` - `cd` - `clear` - `cp` - `encrypt` - `env` - `eventlog` - `filehash` - `get` - `getsid` - `help` - `history` - `ipconfig` - `kill` - `ls` - `map` - `memdump` - `mkdir` - `mount` - `mv` - `netstat` - `ps` - `put` - `reg query` - `reg set` - `reg delete` - `reg load` - `reg unload` - `restart` - `rm` - `run` - `runscript` - `shutdown` - `unmap` - `update history` - `update install` - `update list` - `update query` - `xmemdump` - `zip`  Required values.  The rest of the fields are unused. **`base_command`** Active-Responder command type we are going to execute, for example: `get` or `cp`.  Refer to the RTR documentation for the full list of commands. **`command_string`** Full command string for the command. For example  `get some_file.txt` **`session_id`** RTR session ID to run the command on

try {
    $result = $apiInstance->rTRExecuteAdminCommand($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRExecuteAdminCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainCommandExecuteRequest**](../Model/DomainCommandExecuteRequest.md)| Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - &#x60;cat&#x60; - &#x60;cd&#x60; - &#x60;clear&#x60; - &#x60;cp&#x60; - &#x60;encrypt&#x60; - &#x60;env&#x60; - &#x60;eventlog&#x60; - &#x60;filehash&#x60; - &#x60;get&#x60; - &#x60;getsid&#x60; - &#x60;help&#x60; - &#x60;history&#x60; - &#x60;ipconfig&#x60; - &#x60;kill&#x60; - &#x60;ls&#x60; - &#x60;map&#x60; - &#x60;memdump&#x60; - &#x60;mkdir&#x60; - &#x60;mount&#x60; - &#x60;mv&#x60; - &#x60;netstat&#x60; - &#x60;ps&#x60; - &#x60;put&#x60; - &#x60;reg query&#x60; - &#x60;reg set&#x60; - &#x60;reg delete&#x60; - &#x60;reg load&#x60; - &#x60;reg unload&#x60; - &#x60;restart&#x60; - &#x60;rm&#x60; - &#x60;run&#x60; - &#x60;runscript&#x60; - &#x60;shutdown&#x60; - &#x60;unmap&#x60; - &#x60;update history&#x60; - &#x60;update install&#x60; - &#x60;update list&#x60; - &#x60;update query&#x60; - &#x60;xmemdump&#x60; - &#x60;zip&#x60;  Required values.  The rest of the fields are unused. **&#x60;base_command&#x60;** Active-Responder command type we are going to execute, for example: &#x60;get&#x60; or &#x60;cp&#x60;.  Refer to the RTR documentation for the full list of commands. **&#x60;command_string&#x60;** Full command string for the command. For example  &#x60;get some_file.txt&#x60; **&#x60;session_id&#x60;** RTR session ID to run the command on |

### Return type

[**\OpenAPI\Client\Model\DomainCommandExecuteResponseWrapper**](../Model/DomainCommandExecuteResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRGetPutFiles()`

```php
rTRGetPutFiles($ids): \OpenAPI\Client\Model\BinservclientMsaPFResponse
```

Get put-files based on the ID's given. These are used for the RTR `put` command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | File IDs

try {
    $result = $apiInstance->rTRGetPutFiles($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRGetPutFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| File IDs |

### Return type

[**\OpenAPI\Client\Model\BinservclientMsaPFResponse**](../Model/BinservclientMsaPFResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRGetScripts()`

```php
rTRGetScripts($ids): \OpenAPI\Client\Model\BinservclientMsaPFResponse
```

Get custom-scripts based on the ID's given. These are used for the RTR `runscript` command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | File IDs

try {
    $result = $apiInstance->rTRGetScripts($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRGetScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| File IDs |

### Return type

[**\OpenAPI\Client\Model\BinservclientMsaPFResponse**](../Model/BinservclientMsaPFResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRListPutFiles()`

```php
rTRListPutFiles($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\BinservclientMsaPutFileResponse
```

Get a list of put-file ID's that are available to the user for the `put` command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Optional filter criteria in the form of an FQL query. For more information about FQL queries, see our [FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide).
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$limit = 56; // int | Number of ids to return.
$sort = 'sort_example'; // string | Sort by spec. Ex: 'created_at|asc'.

try {
    $result = $apiInstance->rTRListPutFiles($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRListPutFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Optional filter criteria in the form of an FQL query. For more information about FQL queries, see our [FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide). | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **limit** | **int**| Number of ids to return. | [optional]
 **sort** | **string**| Sort by spec. Ex: &#39;created_at|asc&#39;. | [optional]

### Return type

[**\OpenAPI\Client\Model\BinservclientMsaPutFileResponse**](../Model/BinservclientMsaPutFileResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRListScripts()`

```php
rTRListScripts($filter, $offset, $limit, $sort): \OpenAPI\Client\Model\BinservclientMsaPutFileResponse
```

Get a list of custom-script ID's that are available to the user for the `runscript` command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Optional filter criteria in the form of an FQL query. For more information about FQL queries, see our [FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide).
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$limit = 56; // int | Number of ids to return.
$sort = 'sort_example'; // string | Sort by spec. Ex: 'created_at|asc'.

try {
    $result = $apiInstance->rTRListScripts($filter, $offset, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRListScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Optional filter criteria in the form of an FQL query. For more information about FQL queries, see our [FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide). | [optional]
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **limit** | **int**| Number of ids to return. | [optional]
 **sort** | **string**| Sort by spec. Ex: &#39;created_at|asc&#39;. | [optional]

### Return type

[**\OpenAPI\Client\Model\BinservclientMsaPutFileResponse**](../Model/BinservclientMsaPutFileResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRUpdateScripts()`

```php
rTRUpdateScripts($id, $file, $description, $name, $comments_for_audit_log, $permission_type, $content, $platform): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Upload a new scripts to replace an existing one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID to update
$file = "/path/to/file.txt"; // \SplFileObject | custom-script file to upload.  These should be powershell scripts.
$description = 'description_example'; // string | File description
$name = 'name_example'; // string | File name (if different than actual file name)
$comments_for_audit_log = 'comments_for_audit_log_example'; // string | The audit log comment
$permission_type = 'none'; // string | Permission for the custom-script. Valid permission values:   - `private`, usable by only the user who uploaded it   - `group`, usable by all RTR Admins   - `public`, usable by all active-responders and RTR admins
$content = 'content_example'; // string | The script text that you want to use to upload
$platform = 'platform_example'; // string[] | Platforms for the file. Currently supports: windows, mac,

try {
    $result = $apiInstance->rTRUpdateScripts($id, $file, $description, $name, $comments_for_audit_log, $permission_type, $content, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseAdminApi->rTRUpdateScripts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID to update |
 **file** | **\SplFileObject****\SplFileObject**| custom-script file to upload.  These should be powershell scripts. | [optional]
 **description** | **string**| File description | [optional]
 **name** | **string**| File name (if different than actual file name) | [optional]
 **comments_for_audit_log** | **string**| The audit log comment | [optional]
 **permission_type** | **string**| Permission for the custom-script. Valid permission values:   - &#x60;private&#x60;, usable by only the user who uploaded it   - &#x60;group&#x60;, usable by all RTR Admins   - &#x60;public&#x60;, usable by all active-responders and RTR admins | [optional] [default to &#39;none&#39;]
 **content** | **string**| The script text that you want to use to upload | [optional]
 **platform** | [**string[]**](../Model/string.md)| Platforms for the file. Currently supports: windows, mac, | [optional]

### Return type

[**\OpenAPI\Client\Model\MsaReplyMetaOnly**](../Model/MsaReplyMetaOnly.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
