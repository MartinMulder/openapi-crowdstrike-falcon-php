# OpenAPI\Client\RealTimeResponseApi

All URIs are relative to https://api.eu-1.crowdstrike.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchActiveResponderCmd()**](RealTimeResponseApi.md#batchActiveResponderCmd) | **POST** /real-time-response/combined/batch-active-responder-command/v1 | Batch executes a RTR active-responder command across the hosts mapped to the given batch ID.
[**batchCmd()**](RealTimeResponseApi.md#batchCmd) | **POST** /real-time-response/combined/batch-command/v1 | Batch executes a RTR read-only command across the hosts mapped to the given batch ID.
[**batchGetCmd()**](RealTimeResponseApi.md#batchGetCmd) | **POST** /real-time-response/combined/batch-get-command/v1 | Batch executes &#x60;get&#x60; command across hosts to retrieve files. After this call is made &#x60;GET /real-time-response/combined/batch-get-command/v1&#x60; is used to query for the results.
[**batchGetCmdStatus()**](RealTimeResponseApi.md#batchGetCmdStatus) | **GET** /real-time-response/combined/batch-get-command/v1 | Retrieves the status of the specified batch get command.  Will return successful files when they are finished processing.
[**batchInitSessions()**](RealTimeResponseApi.md#batchInitSessions) | **POST** /real-time-response/combined/batch-init-session/v1 | Batch initialize a RTR session on multiple hosts.  Before any RTR commands can be used, an active session is needed on the host.
[**batchRefreshSessions()**](RealTimeResponseApi.md#batchRefreshSessions) | **POST** /real-time-response/combined/batch-refresh-session/v1 | Batch refresh a RTR session on multiple hosts. RTR sessions will expire after 10 minutes unless refreshed.
[**rTRAggregateSessions()**](RealTimeResponseApi.md#rTRAggregateSessions) | **POST** /real-time-response/aggregates/sessions/GET/v1 | Get aggregates on session data.
[**rTRCheckActiveResponderCommandStatus()**](RealTimeResponseApi.md#rTRCheckActiveResponderCommandStatus) | **GET** /real-time-response/entities/active-responder-command/v1 | Get status of an executed active-responder command on a single host.
[**rTRCheckCommandStatus()**](RealTimeResponseApi.md#rTRCheckCommandStatus) | **GET** /real-time-response/entities/command/v1 | Get status of an executed command on a single host.
[**rTRDeleteFile()**](RealTimeResponseApi.md#rTRDeleteFile) | **DELETE** /real-time-response/entities/file/v1 | Delete a RTR session file.
[**rTRDeleteQueuedSession()**](RealTimeResponseApi.md#rTRDeleteQueuedSession) | **DELETE** /real-time-response/entities/queued-sessions/command/v1 | Delete a queued session command
[**rTRDeleteSession()**](RealTimeResponseApi.md#rTRDeleteSession) | **DELETE** /real-time-response/entities/sessions/v1 | Delete a session.
[**rTRExecuteActiveResponderCommand()**](RealTimeResponseApi.md#rTRExecuteActiveResponderCommand) | **POST** /real-time-response/entities/active-responder-command/v1 | Execute an active responder command on a single host.
[**rTRExecuteCommand()**](RealTimeResponseApi.md#rTRExecuteCommand) | **POST** /real-time-response/entities/command/v1 | Execute a command on a single host.
[**rTRGetExtractedFileContents()**](RealTimeResponseApi.md#rTRGetExtractedFileContents) | **GET** /real-time-response/entities/extracted-file-contents/v1 | Get RTR extracted file contents for specified session and sha256.
[**rTRInitSession()**](RealTimeResponseApi.md#rTRInitSession) | **POST** /real-time-response/entities/sessions/v1 | Initialize a new session with the RTR cloud.
[**rTRListAllSessions()**](RealTimeResponseApi.md#rTRListAllSessions) | **GET** /real-time-response/queries/sessions/v1 | Get a list of session_ids.
[**rTRListFiles()**](RealTimeResponseApi.md#rTRListFiles) | **GET** /real-time-response/entities/file/v1 | Get a list of files for the specified RTR session.
[**rTRListQueuedSessions()**](RealTimeResponseApi.md#rTRListQueuedSessions) | **POST** /real-time-response/entities/queued-sessions/GET/v1 | Get queued session metadata by session ID.
[**rTRListSessions()**](RealTimeResponseApi.md#rTRListSessions) | **POST** /real-time-response/entities/sessions/GET/v1 | Get session metadata by session id.
[**rTRPulseSession()**](RealTimeResponseApi.md#rTRPulseSession) | **POST** /real-time-response/entities/refresh-session/v1 | Refresh a session timeout on a single host.


## `batchActiveResponderCmd()`

```php
batchActiveResponderCmd($body, $timeout, $timeout_duration): \OpenAPI\Client\Model\DomainMultiCommandExecuteResponseWrapper
```

Batch executes a RTR active-responder command across the hosts mapped to the given batch ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainBatchExecuteCommandRequest(); // \OpenAPI\Client\Model\DomainBatchExecuteCommandRequest | Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - `cat` - `cd` - `clear` - `cp` - `encrypt` - `env` - `eventlog` - `filehash` - `get` - `getsid` - `help` - `history` - `ipconfig` - `kill` - `ls` - `map` - `memdump` - `mkdir` - `mount` - `mv` - `netstat` - `ps` - `reg query` - `reg set` - `reg delete` - `reg load` - `reg unload` - `restart` - `rm` - `runscript` - `shutdown` - `unmap` - `update history` - `update install` - `update list` - `update query` - `xmemdump` - `zip`  **`base_command`** Active-Responder command type we are going to execute, for example: `get` or `cp`.  Refer to the RTR documentation for the full list of commands. **`batch_id`** Batch ID to execute the command on.  Received from `/real-time-response/combined/init-sessions/v1`. **`command_string`** Full command string for the command. For example  `get some_file.txt` **`optional_hosts`** List of a subset of hosts we want to run the command on.  If this list is supplied, only these hosts will receive the command.
$timeout = 30; // int | Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes.
$timeout_duration = '30s'; // string | Timeout duration for for how long to wait for the request in duration syntax. Example, `10s`. Valid units: `ns, us, ms, s, m, h`. Maximum is 10 minutes.

try {
    $result = $apiInstance->batchActiveResponderCmd($body, $timeout, $timeout_duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->batchActiveResponderCmd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainBatchExecuteCommandRequest**](../Model/DomainBatchExecuteCommandRequest.md)| Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - &#x60;cat&#x60; - &#x60;cd&#x60; - &#x60;clear&#x60; - &#x60;cp&#x60; - &#x60;encrypt&#x60; - &#x60;env&#x60; - &#x60;eventlog&#x60; - &#x60;filehash&#x60; - &#x60;get&#x60; - &#x60;getsid&#x60; - &#x60;help&#x60; - &#x60;history&#x60; - &#x60;ipconfig&#x60; - &#x60;kill&#x60; - &#x60;ls&#x60; - &#x60;map&#x60; - &#x60;memdump&#x60; - &#x60;mkdir&#x60; - &#x60;mount&#x60; - &#x60;mv&#x60; - &#x60;netstat&#x60; - &#x60;ps&#x60; - &#x60;reg query&#x60; - &#x60;reg set&#x60; - &#x60;reg delete&#x60; - &#x60;reg load&#x60; - &#x60;reg unload&#x60; - &#x60;restart&#x60; - &#x60;rm&#x60; - &#x60;runscript&#x60; - &#x60;shutdown&#x60; - &#x60;unmap&#x60; - &#x60;update history&#x60; - &#x60;update install&#x60; - &#x60;update list&#x60; - &#x60;update query&#x60; - &#x60;xmemdump&#x60; - &#x60;zip&#x60;  **&#x60;base_command&#x60;** Active-Responder command type we are going to execute, for example: &#x60;get&#x60; or &#x60;cp&#x60;.  Refer to the RTR documentation for the full list of commands. **&#x60;batch_id&#x60;** Batch ID to execute the command on.  Received from &#x60;/real-time-response/combined/init-sessions/v1&#x60;. **&#x60;command_string&#x60;** Full command string for the command. For example  &#x60;get some_file.txt&#x60; **&#x60;optional_hosts&#x60;** List of a subset of hosts we want to run the command on.  If this list is supplied, only these hosts will receive the command. |
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

## `batchCmd()`

```php
batchCmd($body, $timeout, $timeout_duration): \OpenAPI\Client\Model\DomainMultiCommandExecuteResponseWrapper
```

Batch executes a RTR read-only command across the hosts mapped to the given batch ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainBatchExecuteCommandRequest(); // \OpenAPI\Client\Model\DomainBatchExecuteCommandRequest | Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - `cat` - `cd` - `clear` - `env` - `eventlog` - `filehash` - `getsid` - `help` - `history` - `ipconfig` - `ls` - `mount` - `netstat` - `ps` - `reg query`  **`base_command`** read-only command type we are going to execute, for example: `ls` or `cd`.  Refer to the RTR documentation for the full list of commands. **`batch_id`** Batch ID to execute the command on.  Received from `/real-time-response/combined/init-sessions/v1`. **`command_string`** Full command string for the command. For example  `cd C:\\some_directory` **`optional_hosts`** List of a subset of hosts we want to run the command on.  If this list is supplied, only these hosts will receive the command.
$timeout = 30; // int | Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes.
$timeout_duration = '30s'; // string | Timeout duration for for how long to wait for the request in duration syntax. Example, `10s`. Valid units: `ns, us, ms, s, m, h`. Maximum is 10 minutes.

try {
    $result = $apiInstance->batchCmd($body, $timeout, $timeout_duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->batchCmd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainBatchExecuteCommandRequest**](../Model/DomainBatchExecuteCommandRequest.md)| Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - &#x60;cat&#x60; - &#x60;cd&#x60; - &#x60;clear&#x60; - &#x60;env&#x60; - &#x60;eventlog&#x60; - &#x60;filehash&#x60; - &#x60;getsid&#x60; - &#x60;help&#x60; - &#x60;history&#x60; - &#x60;ipconfig&#x60; - &#x60;ls&#x60; - &#x60;mount&#x60; - &#x60;netstat&#x60; - &#x60;ps&#x60; - &#x60;reg query&#x60;  **&#x60;base_command&#x60;** read-only command type we are going to execute, for example: &#x60;ls&#x60; or &#x60;cd&#x60;.  Refer to the RTR documentation for the full list of commands. **&#x60;batch_id&#x60;** Batch ID to execute the command on.  Received from &#x60;/real-time-response/combined/init-sessions/v1&#x60;. **&#x60;command_string&#x60;** Full command string for the command. For example  &#x60;cd C:\\some_directory&#x60; **&#x60;optional_hosts&#x60;** List of a subset of hosts we want to run the command on.  If this list is supplied, only these hosts will receive the command. |
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

## `batchGetCmd()`

```php
batchGetCmd($body, $timeout, $timeout_duration): \OpenAPI\Client\Model\DomainBatchGetCommandResponse
```

Batch executes `get` command across hosts to retrieve files. After this call is made `GET /real-time-response/combined/batch-get-command/v1` is used to query for the results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainBatchGetCommandRequest(); // \OpenAPI\Client\Model\DomainBatchGetCommandRequest | **`batch_id`** Batch ID to execute the command on.  Received from `/real-time-response/combined/init-sessions/v1`. **`file_path`** Full path to the file that is to be retrieved from each host in the batch. **`optional_hosts`** List of a subset of hosts we want to run the command on.  If this list is supplied, only these hosts will receive the command.
$timeout = 30; // int | Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes.
$timeout_duration = '30s'; // string | Timeout duration for for how long to wait for the request in duration syntax. Example, `10s`. Valid units: `ns, us, ms, s, m, h`. Maximum is 10 minutes.

try {
    $result = $apiInstance->batchGetCmd($body, $timeout, $timeout_duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->batchGetCmd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainBatchGetCommandRequest**](../Model/DomainBatchGetCommandRequest.md)| **&#x60;batch_id&#x60;** Batch ID to execute the command on.  Received from &#x60;/real-time-response/combined/init-sessions/v1&#x60;. **&#x60;file_path&#x60;** Full path to the file that is to be retrieved from each host in the batch. **&#x60;optional_hosts&#x60;** List of a subset of hosts we want to run the command on.  If this list is supplied, only these hosts will receive the command. |
 **timeout** | **int**| Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes. | [optional] [default to 30]
 **timeout_duration** | **string**| Timeout duration for for how long to wait for the request in duration syntax. Example, &#x60;10s&#x60;. Valid units: &#x60;ns, us, ms, s, m, h&#x60;. Maximum is 10 minutes. | [optional] [default to &#39;30s&#39;]

### Return type

[**\OpenAPI\Client\Model\DomainBatchGetCommandResponse**](../Model/DomainBatchGetCommandResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchGetCmdStatus()`

```php
batchGetCmdStatus($batch_get_cmd_req_id, $timeout, $timeout_duration): \OpenAPI\Client\Model\DomainBatchGetCmdStatusResponse
```

Retrieves the status of the specified batch get command.  Will return successful files when they are finished processing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_get_cmd_req_id = 'batch_get_cmd_req_id_example'; // string | Batch Get Command Request ID received from `/real-time-response/combined/get-command/v1`
$timeout = 30; // int | Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes.
$timeout_duration = '30s'; // string | Timeout duration for for how long to wait for the request in duration syntax. Example, `10s`. Valid units: `ns, us, ms, s, m, h`. Maximum is 10 minutes.

try {
    $result = $apiInstance->batchGetCmdStatus($batch_get_cmd_req_id, $timeout, $timeout_duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->batchGetCmdStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_get_cmd_req_id** | **string**| Batch Get Command Request ID received from &#x60;/real-time-response/combined/get-command/v1&#x60; |
 **timeout** | **int**| Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes. | [optional] [default to 30]
 **timeout_duration** | **string**| Timeout duration for for how long to wait for the request in duration syntax. Example, &#x60;10s&#x60;. Valid units: &#x60;ns, us, ms, s, m, h&#x60;. Maximum is 10 minutes. | [optional] [default to &#39;30s&#39;]

### Return type

[**\OpenAPI\Client\Model\DomainBatchGetCmdStatusResponse**](../Model/DomainBatchGetCmdStatusResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchInitSessions()`

```php
batchInitSessions($body, $timeout, $timeout_duration): \OpenAPI\Client\Model\DomainBatchInitSessionResponse
```

Batch initialize a RTR session on multiple hosts.  Before any RTR commands can be used, an active session is needed on the host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainBatchInitSessionRequest(); // \OpenAPI\Client\Model\DomainBatchInitSessionRequest | **`host_ids`** List of host agent ID's to initialize a RTR session on **`existing_batch_id`** Optional batch ID. Use an existing batch ID if you want to initialize new hosts and add them to the existing batch
$timeout = 30; // int | Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes.
$timeout_duration = '30s'; // string | Timeout duration for for how long to wait for the request in duration syntax. Example, `10s`. Valid units: `ns, us, ms, s, m, h`. Maximum is 10 minutes.

try {
    $result = $apiInstance->batchInitSessions($body, $timeout, $timeout_duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->batchInitSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainBatchInitSessionRequest**](../Model/DomainBatchInitSessionRequest.md)| **&#x60;host_ids&#x60;** List of host agent ID&#39;s to initialize a RTR session on **&#x60;existing_batch_id&#x60;** Optional batch ID. Use an existing batch ID if you want to initialize new hosts and add them to the existing batch |
 **timeout** | **int**| Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes. | [optional] [default to 30]
 **timeout_duration** | **string**| Timeout duration for for how long to wait for the request in duration syntax. Example, &#x60;10s&#x60;. Valid units: &#x60;ns, us, ms, s, m, h&#x60;. Maximum is 10 minutes. | [optional] [default to &#39;30s&#39;]

### Return type

[**\OpenAPI\Client\Model\DomainBatchInitSessionResponse**](../Model/DomainBatchInitSessionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchRefreshSessions()`

```php
batchRefreshSessions($body, $timeout, $timeout_duration): \OpenAPI\Client\Model\DomainBatchRefreshSessionResponse
```

Batch refresh a RTR session on multiple hosts. RTR sessions will expire after 10 minutes unless refreshed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainBatchRefreshSessionRequest(); // \OpenAPI\Client\Model\DomainBatchRefreshSessionRequest | **`batch_id`** Batch ID to execute the command on.  Received from `/real-time-response/combined/init-sessions/v1`. **`hosts_to_remove`** Hosts to remove from the batch session.  Heartbeats will no longer happen on these hosts and the sessions will expire.
$timeout = 30; // int | Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes.
$timeout_duration = '30s'; // string | Timeout duration for for how long to wait for the request in duration syntax. Example, `10s`. Valid units: `ns, us, ms, s, m, h`. Maximum is 10 minutes.

try {
    $result = $apiInstance->batchRefreshSessions($body, $timeout, $timeout_duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->batchRefreshSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainBatchRefreshSessionRequest**](../Model/DomainBatchRefreshSessionRequest.md)| **&#x60;batch_id&#x60;** Batch ID to execute the command on.  Received from &#x60;/real-time-response/combined/init-sessions/v1&#x60;. **&#x60;hosts_to_remove&#x60;** Hosts to remove from the batch session.  Heartbeats will no longer happen on these hosts and the sessions will expire. |
 **timeout** | **int**| Timeout for how long to wait for the request in seconds, default timeout is 30 seconds. Maximum is 10 minutes. | [optional] [default to 30]
 **timeout_duration** | **string**| Timeout duration for for how long to wait for the request in duration syntax. Example, &#x60;10s&#x60;. Valid units: &#x60;ns, us, ms, s, m, h&#x60;. Maximum is 10 minutes. | [optional] [default to &#39;30s&#39;]

### Return type

[**\OpenAPI\Client\Model\DomainBatchRefreshSessionResponse**](../Model/DomainBatchRefreshSessionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRAggregateSessions()`

```php
rTRAggregateSessions($body): \OpenAPI\Client\Model\MsaAggregatesResponse
```

Get aggregates on session data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\MsaAggregateQueryRequest()); // \OpenAPI\Client\Model\MsaAggregateQueryRequest[] | Supported aggregations:  - `term` - `date_range`  Supported aggregation members:  **`date_ranges`** If peforming a date range query specify the **`from`** and **`to`** date ranges.  These can be in common date formats like `2019-07-18` or `now` **`field`** Term you want to aggregate on.  If doing a `date_range` query, this is the date field you want to apply the date ranges to **`filter`** Optional filter criteria in the form of an FQL query. For more information about FQL queries, see our [FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide). **`name`** Name of the aggregation **`size`** Size limit to apply to the queries.

try {
    $result = $apiInstance->rTRAggregateSessions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRAggregateSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\MsaAggregateQueryRequest[]**](../Model/MsaAggregateQueryRequest.md)| Supported aggregations:  - &#x60;term&#x60; - &#x60;date_range&#x60;  Supported aggregation members:  **&#x60;date_ranges&#x60;** If peforming a date range query specify the **&#x60;from&#x60;** and **&#x60;to&#x60;** date ranges.  These can be in common date formats like &#x60;2019-07-18&#x60; or &#x60;now&#x60; **&#x60;field&#x60;** Term you want to aggregate on.  If doing a &#x60;date_range&#x60; query, this is the date field you want to apply the date ranges to **&#x60;filter&#x60;** Optional filter criteria in the form of an FQL query. For more information about FQL queries, see our [FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide). **&#x60;name&#x60;** Name of the aggregation **&#x60;size&#x60;** Size limit to apply to the queries. |

### Return type

[**\OpenAPI\Client\Model\MsaAggregatesResponse**](../Model/MsaAggregatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRCheckActiveResponderCommandStatus()`

```php
rTRCheckActiveResponderCommandStatus($cloud_request_id, $sequence_id): \OpenAPI\Client\Model\DomainStatusResponseWrapper
```

Get status of an executed active-responder command on a single host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_request_id = 'cloud_request_id_example'; // string | Cloud Request ID of the executed command to query
$sequence_id = 0; // int | Sequence ID that we want to retrieve. Command responses are chunked across sequences

try {
    $result = $apiInstance->rTRCheckActiveResponderCommandStatus($cloud_request_id, $sequence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRCheckActiveResponderCommandStatus: ', $e->getMessage(), PHP_EOL;
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

## `rTRCheckCommandStatus()`

```php
rTRCheckCommandStatus($cloud_request_id, $sequence_id): \OpenAPI\Client\Model\DomainStatusResponseWrapper
```

Get status of an executed command on a single host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_request_id = 'cloud_request_id_example'; // string | Cloud Request ID of the executed command to query
$sequence_id = 0; // int | Sequence ID that we want to retrieve. Command responses are chunked across sequences

try {
    $result = $apiInstance->rTRCheckCommandStatus($cloud_request_id, $sequence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRCheckCommandStatus: ', $e->getMessage(), PHP_EOL;
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

## `rTRDeleteFile()`

```php
rTRDeleteFile($ids, $session_id): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Delete a RTR session file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = 'ids_example'; // string | RTR Session file id
$session_id = 'session_id_example'; // string | RTR Session id

try {
    $result = $apiInstance->rTRDeleteFile($ids, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRDeleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| RTR Session file id |
 **session_id** | **string**| RTR Session id |

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

## `rTRDeleteQueuedSession()`

```php
rTRDeleteQueuedSession($session_id, $cloud_request_id): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Delete a queued session command

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | RTR Session id
$cloud_request_id = 'cloud_request_id_example'; // string | Cloud Request ID of the executed command to query

try {
    $result = $apiInstance->rTRDeleteQueuedSession($session_id, $cloud_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRDeleteQueuedSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| RTR Session id |
 **cloud_request_id** | **string**| Cloud Request ID of the executed command to query |

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

## `rTRDeleteSession()`

```php
rTRDeleteSession($session_id): \OpenAPI\Client\Model\MsaReplyMetaOnly
```

Delete a session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | RTR Session id

try {
    $result = $apiInstance->rTRDeleteSession($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRDeleteSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| RTR Session id |

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

## `rTRExecuteActiveResponderCommand()`

```php
rTRExecuteActiveResponderCommand($body): \OpenAPI\Client\Model\DomainCommandExecuteResponseWrapper
```

Execute an active responder command on a single host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainCommandExecuteRequest(); // \OpenAPI\Client\Model\DomainCommandExecuteRequest | Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - `cat` - `cd` - `clear` - `cp` - `encrypt` - `env` - `eventlog` - `filehash` - `get` - `getsid` - `help` - `history` - `ipconfig` - `kill` - `ls` - `map` - `memdump` - `mkdir` - `mount` - `mv` - `netstat` - `ps` - `reg query` - `reg set` - `reg delete` - `reg load` - `reg unload` - `restart` - `rm` - `runscript` - `shutdown` - `unmap` - `update history` - `update install` - `update list` - `update query` - `xmemdump` - `zip`  Required values.  The rest of the fields are unused. **`base_command`** Active-Responder command type we are going to execute, for example: `get` or `cp`.  Refer to the RTR documentation for the full list of commands. **`command_string`** Full command string for the command. For example  `get some_file.txt` **`session_id`** RTR session ID to run the command on

try {
    $result = $apiInstance->rTRExecuteActiveResponderCommand($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRExecuteActiveResponderCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainCommandExecuteRequest**](../Model/DomainCommandExecuteRequest.md)| Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - &#x60;cat&#x60; - &#x60;cd&#x60; - &#x60;clear&#x60; - &#x60;cp&#x60; - &#x60;encrypt&#x60; - &#x60;env&#x60; - &#x60;eventlog&#x60; - &#x60;filehash&#x60; - &#x60;get&#x60; - &#x60;getsid&#x60; - &#x60;help&#x60; - &#x60;history&#x60; - &#x60;ipconfig&#x60; - &#x60;kill&#x60; - &#x60;ls&#x60; - &#x60;map&#x60; - &#x60;memdump&#x60; - &#x60;mkdir&#x60; - &#x60;mount&#x60; - &#x60;mv&#x60; - &#x60;netstat&#x60; - &#x60;ps&#x60; - &#x60;reg query&#x60; - &#x60;reg set&#x60; - &#x60;reg delete&#x60; - &#x60;reg load&#x60; - &#x60;reg unload&#x60; - &#x60;restart&#x60; - &#x60;rm&#x60; - &#x60;runscript&#x60; - &#x60;shutdown&#x60; - &#x60;unmap&#x60; - &#x60;update history&#x60; - &#x60;update install&#x60; - &#x60;update list&#x60; - &#x60;update query&#x60; - &#x60;xmemdump&#x60; - &#x60;zip&#x60;  Required values.  The rest of the fields are unused. **&#x60;base_command&#x60;** Active-Responder command type we are going to execute, for example: &#x60;get&#x60; or &#x60;cp&#x60;.  Refer to the RTR documentation for the full list of commands. **&#x60;command_string&#x60;** Full command string for the command. For example  &#x60;get some_file.txt&#x60; **&#x60;session_id&#x60;** RTR session ID to run the command on |

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

## `rTRExecuteCommand()`

```php
rTRExecuteCommand($body): \OpenAPI\Client\Model\DomainCommandExecuteResponseWrapper
```

Execute a command on a single host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainCommandExecuteRequest(); // \OpenAPI\Client\Model\DomainCommandExecuteRequest | Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - `cat` - `cd` - `clear` - `env` - `eventlog` - `filehash` - `getsid` - `help` - `history` - `ipconfig` - `ls` - `mount` - `netstat` - `ps` - `reg query`  Required values.  The rest of the fields are unused. **`base_command`** read-only command type we are going to execute, for example: `ls` or `cd`.  Refer to the RTR documentation for the full list of commands. **`command_string`** Full command string for the command. For example  `cd C:\\some_directory` **`session_id`** RTR session ID to run the command on

try {
    $result = $apiInstance->rTRExecuteCommand($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRExecuteCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainCommandExecuteRequest**](../Model/DomainCommandExecuteRequest.md)| Use this endpoint to run these [real time response commands](https://falcon.crowdstrike.com/support/documentation/11/getting-started-guide#rtr_commands): - &#x60;cat&#x60; - &#x60;cd&#x60; - &#x60;clear&#x60; - &#x60;env&#x60; - &#x60;eventlog&#x60; - &#x60;filehash&#x60; - &#x60;getsid&#x60; - &#x60;help&#x60; - &#x60;history&#x60; - &#x60;ipconfig&#x60; - &#x60;ls&#x60; - &#x60;mount&#x60; - &#x60;netstat&#x60; - &#x60;ps&#x60; - &#x60;reg query&#x60;  Required values.  The rest of the fields are unused. **&#x60;base_command&#x60;** read-only command type we are going to execute, for example: &#x60;ls&#x60; or &#x60;cd&#x60;.  Refer to the RTR documentation for the full list of commands. **&#x60;command_string&#x60;** Full command string for the command. For example  &#x60;cd C:\\some_directory&#x60; **&#x60;session_id&#x60;** RTR session ID to run the command on |

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

## `rTRGetExtractedFileContents()`

```php
rTRGetExtractedFileContents($session_id, $sha256, $filename): int[]
```

Get RTR extracted file contents for specified session and sha256.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | RTR Session id
$sha256 = 'sha256_example'; // string | Extracted SHA256 (e.g. 'efa256a96af3b556cd3fc9d8b1cf587d72807d7805ced441e8149fc279db422b')
$filename = 'filename_example'; // string | Filename to use for the archive name and the file within the archive.

try {
    $result = $apiInstance->rTRGetExtractedFileContents($session_id, $sha256, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRGetExtractedFileContents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| RTR Session id |
 **sha256** | **string**| Extracted SHA256 (e.g. &#39;efa256a96af3b556cd3fc9d8b1cf587d72807d7805ced441e8149fc279db422b&#39;) |
 **filename** | **string**| Filename to use for the archive name and the file within the archive. | [optional]

### Return type

**int[]**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/x-7z-compressed`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRInitSession()`

```php
rTRInitSession($body): \OpenAPI\Client\Model\DomainInitResponseWrapper
```

Initialize a new session with the RTR cloud.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainInitRequest(); // \OpenAPI\Client\Model\DomainInitRequest | **`device_id`** The host agent ID to initialize the RTR session on.  RTR will retrieve an existing session for the calling user on this host

try {
    $result = $apiInstance->rTRInitSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRInitSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainInitRequest**](../Model/DomainInitRequest.md)| **&#x60;device_id&#x60;** The host agent ID to initialize the RTR session on.  RTR will retrieve an existing session for the calling user on this host |

### Return type

[**\OpenAPI\Client\Model\DomainInitResponseWrapper**](../Model/DomainInitResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRListAllSessions()`

```php
rTRListAllSessions($offset, $limit, $sort, $filter): \OpenAPI\Client\Model\DomainListSessionsResponseMsa
```

Get a list of session_ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 'offset_example'; // string | Starting index of overall result set from which to return ids.
$limit = 56; // int | Number of ids to return.
$sort = 'sort_example'; // string | Sort by spec. Ex: 'date_created|asc'.
$filter = 'filter_example'; // string | Optional filter criteria in the form of an FQL query. For more information about FQL queries, see our [FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide). “user_id” can accept a special value ‘@me’ which will restrict results to records with current user’s ID.

try {
    $result = $apiInstance->rTRListAllSessions($offset, $limit, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRListAllSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **string**| Starting index of overall result set from which to return ids. | [optional]
 **limit** | **int**| Number of ids to return. | [optional]
 **sort** | **string**| Sort by spec. Ex: &#39;date_created|asc&#39;. | [optional]
 **filter** | **string**| Optional filter criteria in the form of an FQL query. For more information about FQL queries, see our [FQL documentation in Falcon](https://falcon.crowdstrike.com/support/documentation/45/falcon-query-language-feature-guide). “user_id” can accept a special value ‘@me’ which will restrict results to records with current user’s ID. | [optional]

### Return type

[**\OpenAPI\Client\Model\DomainListSessionsResponseMsa**](../Model/DomainListSessionsResponseMsa.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRListFiles()`

```php
rTRListFiles($session_id): \OpenAPI\Client\Model\DomainListFilesResponseWrapper
```

Get a list of files for the specified RTR session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | RTR Session id

try {
    $result = $apiInstance->rTRListFiles($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRListFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| RTR Session id |

### Return type

[**\OpenAPI\Client\Model\DomainListFilesResponseWrapper**](../Model/DomainListFilesResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRListQueuedSessions()`

```php
rTRListQueuedSessions($body): \OpenAPI\Client\Model\DomainQueuedSessionResponseWrapper
```

Get queued session metadata by session ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MsaIdsRequest(); // \OpenAPI\Client\Model\MsaIdsRequest | **`ids`** List of RTR sessions to retrieve.  RTR will only return the sessions that were created by the calling user

try {
    $result = $apiInstance->rTRListQueuedSessions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRListQueuedSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\MsaIdsRequest**](../Model/MsaIdsRequest.md)| **&#x60;ids&#x60;** List of RTR sessions to retrieve.  RTR will only return the sessions that were created by the calling user |

### Return type

[**\OpenAPI\Client\Model\DomainQueuedSessionResponseWrapper**](../Model/DomainQueuedSessionResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRListSessions()`

```php
rTRListSessions($body): \OpenAPI\Client\Model\DomainSessionResponseWrapper
```

Get session metadata by session id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MsaIdsRequest(); // \OpenAPI\Client\Model\MsaIdsRequest | **`ids`** List of RTR sessions to retrieve.  RTR will only return the sessions that were created by the calling user

try {
    $result = $apiInstance->rTRListSessions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRListSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\MsaIdsRequest**](../Model/MsaIdsRequest.md)| **&#x60;ids&#x60;** List of RTR sessions to retrieve.  RTR will only return the sessions that were created by the calling user |

### Return type

[**\OpenAPI\Client\Model\DomainSessionResponseWrapper**](../Model/DomainSessionResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rTRPulseSession()`

```php
rTRPulseSession($body): \OpenAPI\Client\Model\DomainInitResponseWrapper
```

Refresh a session timeout on a single host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RealTimeResponseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainInitRequest(); // \OpenAPI\Client\Model\DomainInitRequest | **`device_id`** The host agent ID to refresh the RTR session on.  RTR will retrieve an existing session for the calling user on this host

try {
    $result = $apiInstance->rTRPulseSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeResponseApi->rTRPulseSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DomainInitRequest**](../Model/DomainInitRequest.md)| **&#x60;device_id&#x60;** The host agent ID to refresh the RTR session on.  RTR will retrieve an existing session for the calling user on this host |

### Return type

[**\OpenAPI\Client\Model\DomainInitResponseWrapper**](../Model/DomainInitResponseWrapper.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
