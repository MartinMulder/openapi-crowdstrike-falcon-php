# OpenAPIClient-php

Use this API specification as a reference for the API endpoints you can use to interact with your Falcon environment. These endpoints support authentication via OAuth2 and interact with detections and network containment. For detailed usage guides and examples, see our [documentation inside the Falcon console](https://falcon.eu-1.crowdstrike.com/support/documentation).


  To use the APIs described below, combine the base URL with the path shown for each API endpoint. For commercial cloud customers, your base URL is `https://api.eu-1.crowdstrike.com`.

  Each API endpoint requires authorization via an OAuth2 token. Your first API request should retrieve an OAuth2 token using the `oauth2/token` endpoint, such as `https://api.eu-1.crowdstrike.com/oauth2/token`. For subsequent requests, include the OAuth2 token in an HTTP authorization header. Tokens expire after 30 minutes, after which you should make a new token request to continue making API requests.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudConnectAwsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ModelsModifyAWSCustomerSettingsV1(); // \OpenAPI\Client\Model\ModelsModifyAWSCustomerSettingsV1

try {
    $result = $apiInstance->createOrUpdateAWSSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectAwsApi->createOrUpdateAWSSettings: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.eu-1.crowdstrike.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CloudConnectAwsApi* | [**createOrUpdateAWSSettings**](docs/Api/CloudConnectAwsApi.md#createorupdateawssettings) | **POST** /cloud-connect-aws/entities/settings/v1 | Create or update Global Settings which are applicable to all provisioned AWS accounts
*CloudConnectAwsApi* | [**deleteAWSAccounts**](docs/Api/CloudConnectAwsApi.md#deleteawsaccounts) | **DELETE** /cloud-connect-aws/entities/accounts/v1 | Delete a set of AWS Accounts by specifying their IDs
*CloudConnectAwsApi* | [**getAWSAccounts**](docs/Api/CloudConnectAwsApi.md#getawsaccounts) | **GET** /cloud-connect-aws/entities/accounts/v1 | Retrieve a set of AWS Accounts by specifying their IDs
*CloudConnectAwsApi* | [**getAWSSettings**](docs/Api/CloudConnectAwsApi.md#getawssettings) | **GET** /cloud-connect-aws/combined/settings/v1 | Retrieve a set of Global Settings which are applicable to all provisioned AWS accounts
*CloudConnectAwsApi* | [**provisionAWSAccounts**](docs/Api/CloudConnectAwsApi.md#provisionawsaccounts) | **POST** /cloud-connect-aws/entities/accounts/v1 | Provision AWS Accounts by specifying details about the accounts to provision
*CloudConnectAwsApi* | [**queryAWSAccounts**](docs/Api/CloudConnectAwsApi.md#queryawsaccounts) | **GET** /cloud-connect-aws/combined/accounts/v1 | Search for provisioned AWS Accounts by providing an FQL filter and paging details. Returns a set of AWS accounts which match the filter criteria
*CloudConnectAwsApi* | [**queryAWSAccountsForIDs**](docs/Api/CloudConnectAwsApi.md#queryawsaccountsforids) | **GET** /cloud-connect-aws/queries/accounts/v1 | Search for provisioned AWS Accounts by providing an FQL filter and paging details. Returns a set of AWS account IDs which match the filter criteria
*CloudConnectAwsApi* | [**updateAWSAccounts**](docs/Api/CloudConnectAwsApi.md#updateawsaccounts) | **PATCH** /cloud-connect-aws/entities/accounts/v1 | Update AWS Accounts by specifying the ID of the account and details to update
*CloudConnectAwsApi* | [**verifyAWSAccountAccess**](docs/Api/CloudConnectAwsApi.md#verifyawsaccountaccess) | **POST** /cloud-connect-aws/entities/verify-account-access/v1 | Performs an Access Verification check on the specified AWS Account IDs
*CspmRegistrationApi* | [**createCSPMAwsAccount**](docs/Api/CspmRegistrationApi.md#createcspmawsaccount) | **POST** /cloud-connect-cspm-aws/entities/account/v1 | Creates a new account in our system for a customer and generates a script for them to run in their AWS cloud environment to grant us access.
*CspmRegistrationApi* | [**createCSPMAzureAccount**](docs/Api/CspmRegistrationApi.md#createcspmazureaccount) | **POST** /cloud-connect-cspm-azure/entities/account/v1 | Creates a new account in our system for a customer and generates a script for them to run in their cloud environment to grant us access.
*CspmRegistrationApi* | [**deleteCSPMAwsAccount**](docs/Api/CspmRegistrationApi.md#deletecspmawsaccount) | **DELETE** /cloud-connect-cspm-aws/entities/account/v1 | Deletes an existing AWS account or organization in our system.
*CspmRegistrationApi* | [**deleteCSPMAzureAccount**](docs/Api/CspmRegistrationApi.md#deletecspmazureaccount) | **DELETE** /cloud-connect-cspm-azure/entities/account/v1 | Deletes an Azure subscription from the system.
*CspmRegistrationApi* | [**getCSPMAwsAccount**](docs/Api/CspmRegistrationApi.md#getcspmawsaccount) | **GET** /cloud-connect-cspm-aws/entities/account/v1 | Returns information about the current status of an AWS account.
*CspmRegistrationApi* | [**getCSPMAwsAccountScriptsAttachment**](docs/Api/CspmRegistrationApi.md#getcspmawsaccountscriptsattachment) | **GET** /cloud-connect-cspm-aws/entities/user-scripts-download/v1 | Return a script for customer to run in their cloud environment to grant us access to their AWS environment as a downloadable attachment.
*CspmRegistrationApi* | [**getCSPMAwsConsoleSetupURLs**](docs/Api/CspmRegistrationApi.md#getcspmawsconsolesetupurls) | **GET** /cloud-connect-cspm-aws/entities/console-setup-urls/v1 | Return a URL for customer to visit in their cloud environment to grant us access to their AWS environment.
*CspmRegistrationApi* | [**getCSPMAzureAccount**](docs/Api/CspmRegistrationApi.md#getcspmazureaccount) | **GET** /cloud-connect-cspm-azure/entities/account/v1 | Return information about Azure account registration
*CspmRegistrationApi* | [**getCSPMAzureUserScriptsAttachment**](docs/Api/CspmRegistrationApi.md#getcspmazureuserscriptsattachment) | **GET** /cloud-connect-cspm-azure/entities/user-scripts-download/v1 | Return a script for customer to run in their cloud environment to grant us access to their Azure environment as a downloadable attachment
*CspmRegistrationApi* | [**getCSPMPolicy**](docs/Api/CspmRegistrationApi.md#getcspmpolicy) | **GET** /settings/entities/policy-details/v1 | Given a policy ID, returns detailed policy information.
*CspmRegistrationApi* | [**getCSPMPolicySettings**](docs/Api/CspmRegistrationApi.md#getcspmpolicysettings) | **GET** /settings/entities/policy/v1 | Returns information about current policy settings.
*CspmRegistrationApi* | [**getCSPMScanSchedule**](docs/Api/CspmRegistrationApi.md#getcspmscanschedule) | **GET** /settings/scan-schedule/v1 | Returns scan schedule configuration for one or more cloud platforms.
*CspmRegistrationApi* | [**updateCSPMAzureAccountClientID**](docs/Api/CspmRegistrationApi.md#updatecspmazureaccountclientid) | **PATCH** /cloud-connect-cspm-azure/entities/client-id/v1 | Update an Azure service account in our system by with the user-created client_id created with the public key we&#39;ve provided
*CspmRegistrationApi* | [**updateCSPMPolicySettings**](docs/Api/CspmRegistrationApi.md#updatecspmpolicysettings) | **PATCH** /settings/entities/policy/v1 | Updates a policy setting - can be used to override policy severity or to disable a policy entirely.
*CspmRegistrationApi* | [**updateCSPMScanSchedule**](docs/Api/CspmRegistrationApi.md#updatecspmscanschedule) | **POST** /settings/scan-schedule/v1 | Updates scan schedule configuration for one or more cloud platforms.
*CustomIoaApi* | [**createRule**](docs/Api/CustomIoaApi.md#createrule) | **POST** /ioarules/entities/rules/v1 | Create a rule within a rule group. Returns the rule.
*CustomIoaApi* | [**createRuleGroupMixin0**](docs/Api/CustomIoaApi.md#createrulegroupmixin0) | **POST** /ioarules/entities/rule-groups/v1 | Create a rule group for a platform with a name and an optional description. Returns the rule group.
*CustomIoaApi* | [**deleteRuleGroupsMixin0**](docs/Api/CustomIoaApi.md#deleterulegroupsmixin0) | **DELETE** /ioarules/entities/rule-groups/v1 | Delete rule groups by ID.
*CustomIoaApi* | [**deleteRules**](docs/Api/CustomIoaApi.md#deleterules) | **DELETE** /ioarules/entities/rules/v1 | Delete rules from a rule group by ID.
*CustomIoaApi* | [**getPatterns**](docs/Api/CustomIoaApi.md#getpatterns) | **GET** /ioarules/entities/pattern-severities/v1 | Get pattern severities by ID.
*CustomIoaApi* | [**getPlatformsMixin0**](docs/Api/CustomIoaApi.md#getplatformsmixin0) | **GET** /ioarules/entities/platforms/v1 | Get platforms by ID.
*CustomIoaApi* | [**getRuleGroupsMixin0**](docs/Api/CustomIoaApi.md#getrulegroupsmixin0) | **GET** /ioarules/entities/rule-groups/v1 | Get rule groups by ID.
*CustomIoaApi* | [**getRuleTypes**](docs/Api/CustomIoaApi.md#getruletypes) | **GET** /ioarules/entities/rule-types/v1 | Get rule types by ID.
*CustomIoaApi* | [**getRulesGet**](docs/Api/CustomIoaApi.md#getrulesget) | **POST** /ioarules/entities/rules/GET/v1 | Get rules by ID and optionally version in the following format: &#x60;ID[:version]&#x60;.
*CustomIoaApi* | [**getRulesMixin0**](docs/Api/CustomIoaApi.md#getrulesmixin0) | **GET** /ioarules/entities/rules/v1 | Get rules by ID and optionally version in the following format: &#x60;ID[:version]&#x60;. The max number of IDs is constrained by URL size.
*CustomIoaApi* | [**queryPatterns**](docs/Api/CustomIoaApi.md#querypatterns) | **GET** /ioarules/queries/pattern-severities/v1 | Get all pattern severity IDs.
*CustomIoaApi* | [**queryPlatformsMixin0**](docs/Api/CustomIoaApi.md#queryplatformsmixin0) | **GET** /ioarules/queries/platforms/v1 | Get all platform IDs.
*CustomIoaApi* | [**queryRuleGroupsFull**](docs/Api/CustomIoaApi.md#queryrulegroupsfull) | **GET** /ioarules/queries/rule-groups-full/v1 | Find all rule groups matching the query with optional filter.
*CustomIoaApi* | [**queryRuleGroupsMixin0**](docs/Api/CustomIoaApi.md#queryrulegroupsmixin0) | **GET** /ioarules/queries/rule-groups/v1 | Finds all rule group IDs matching the query with optional filter.
*CustomIoaApi* | [**queryRuleTypes**](docs/Api/CustomIoaApi.md#queryruletypes) | **GET** /ioarules/queries/rule-types/v1 | Get all rule type IDs.
*CustomIoaApi* | [**queryRulesMixin0**](docs/Api/CustomIoaApi.md#queryrulesmixin0) | **GET** /ioarules/queries/rules/v1 | Finds all rule IDs matching the query with optional filter.
*CustomIoaApi* | [**updateRuleGroupMixin0**](docs/Api/CustomIoaApi.md#updaterulegroupmixin0) | **PATCH** /ioarules/entities/rule-groups/v1 | Update a rule group. The following properties can be modified: name, description, enabled.
*CustomIoaApi* | [**updateRules**](docs/Api/CustomIoaApi.md#updaterules) | **PATCH** /ioarules/entities/rules/v1 | Update rules within a rule group. Return the updated rules.
*CustomIoaApi* | [**validate**](docs/Api/CustomIoaApi.md#validate) | **POST** /ioarules/entities/rules/validate/v1 | Validates field values and checks for matches if a test string is provided.
*D4cRegistrationApi* | [**createCSPMAzureAccount**](docs/Api/D4cRegistrationApi.md#createcspmazureaccount) | **POST** /cloud-connect-azure/entities/account/v1 | Creates a new account in our system for a customer and generates a script for them to run in their cloud environment to grant us access.
*D4cRegistrationApi* | [**createCSPMGCPAccount**](docs/Api/D4cRegistrationApi.md#createcspmgcpaccount) | **POST** /cloud-connect-gcp/entities/account/v1 | Creates a new account in our system for a customer and generates a new service account for them to add access to in their GCP environment to grant us access.
*D4cRegistrationApi* | [**getCSPMAzureAccount**](docs/Api/D4cRegistrationApi.md#getcspmazureaccount) | **GET** /cloud-connect-azure/entities/account/v1 | Return information about Azure account registration
*D4cRegistrationApi* | [**getCSPMAzureUserScripts**](docs/Api/D4cRegistrationApi.md#getcspmazureuserscripts) | **GET** /cloud-connect-azure/entities/user-scripts/v1 | Return a script for customer to run in their cloud environment to grant us access to their Azure environment
*D4cRegistrationApi* | [**getCSPMAzureUserScriptsAttachment**](docs/Api/D4cRegistrationApi.md#getcspmazureuserscriptsattachment) | **GET** /cloud-connect-azure/entities/user-scripts-download/v1 | Return a script for customer to run in their cloud environment to grant us access to their Azure environment as a downloadable attachment
*D4cRegistrationApi* | [**getCSPMCGPAccount**](docs/Api/D4cRegistrationApi.md#getcspmcgpaccount) | **GET** /cloud-connect-gcp/entities/account/v1 | Returns information about the current status of an GCP account.
*D4cRegistrationApi* | [**getCSPMGCPUserScripts**](docs/Api/D4cRegistrationApi.md#getcspmgcpuserscripts) | **GET** /cloud-connect-gcp/entities/user-scripts/v1 | Return a script for customer to run in their cloud environment to grant us access to their GCP environment
*D4cRegistrationApi* | [**getCSPMGCPUserScriptsAttachment**](docs/Api/D4cRegistrationApi.md#getcspmgcpuserscriptsattachment) | **GET** /cloud-connect-gcp/entities/user-scripts-download/v1 | Return a script for customer to run in their cloud environment to grant us access to their GCP environment as a downloadable attachment
*D4cRegistrationApi* | [**updateCSPMAzureAccountClientID**](docs/Api/D4cRegistrationApi.md#updatecspmazureaccountclientid) | **PATCH** /cloud-connect-azure/entities/client-id/v1 | Update an Azure service account in our system by with the user-created client_id created with the public key we&#39;ve provided
*DetectsApi* | [**getAggregateDetects**](docs/Api/DetectsApi.md#getaggregatedetects) | **POST** /detects/aggregates/detects/GET/v1 | Get detect aggregates as specified via json in request body.
*DetectsApi* | [**getDetectSummaries**](docs/Api/DetectsApi.md#getdetectsummaries) | **POST** /detects/entities/summaries/GET/v1 | View information about detections
*DetectsApi* | [**queryDetects**](docs/Api/DetectsApi.md#querydetects) | **GET** /detects/queries/detects/v1 | Search for detection IDs that match a given query
*DetectsApi* | [**updateDetectsByIdsV2**](docs/Api/DetectsApi.md#updatedetectsbyidsv2) | **PATCH** /detects/entities/detects/v2 | Modify the state, assignee, and visibility of detections
*DeviceControlPoliciesApi* | [**createDeviceControlPolicies**](docs/Api/DeviceControlPoliciesApi.md#createdevicecontrolpolicies) | **POST** /policy/entities/device-control/v1 | Create Device Control Policies by specifying details about the policy to create
*DeviceControlPoliciesApi* | [**deleteDeviceControlPolicies**](docs/Api/DeviceControlPoliciesApi.md#deletedevicecontrolpolicies) | **DELETE** /policy/entities/device-control/v1 | Delete a set of Device Control Policies by specifying their IDs
*DeviceControlPoliciesApi* | [**getDeviceControlPolicies**](docs/Api/DeviceControlPoliciesApi.md#getdevicecontrolpolicies) | **GET** /policy/entities/device-control/v1 | Retrieve a set of Device Control Policies by specifying their IDs
*DeviceControlPoliciesApi* | [**performDeviceControlPoliciesAction**](docs/Api/DeviceControlPoliciesApi.md#performdevicecontrolpoliciesaction) | **POST** /policy/entities/device-control-actions/v1 | Perform the specified action on the Device Control Policies specified in the request
*DeviceControlPoliciesApi* | [**queryCombinedDeviceControlPolicies**](docs/Api/DeviceControlPoliciesApi.md#querycombineddevicecontrolpolicies) | **GET** /policy/combined/device-control/v1 | Search for Device Control Policies in your environment by providing an FQL filter and paging details. Returns a set of Device Control Policies which match the filter criteria
*DeviceControlPoliciesApi* | [**queryCombinedDeviceControlPolicyMembers**](docs/Api/DeviceControlPoliciesApi.md#querycombineddevicecontrolpolicymembers) | **GET** /policy/combined/device-control-members/v1 | Search for members of a Device Control Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria
*DeviceControlPoliciesApi* | [**queryDeviceControlPolicies**](docs/Api/DeviceControlPoliciesApi.md#querydevicecontrolpolicies) | **GET** /policy/queries/device-control/v1 | Search for Device Control Policies in your environment by providing an FQL filter and paging details. Returns a set of Device Control Policy IDs which match the filter criteria
*DeviceControlPoliciesApi* | [**queryDeviceControlPolicyMembers**](docs/Api/DeviceControlPoliciesApi.md#querydevicecontrolpolicymembers) | **GET** /policy/queries/device-control-members/v1 | Search for members of a Device Control Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria
*DeviceControlPoliciesApi* | [**setDeviceControlPoliciesPrecedence**](docs/Api/DeviceControlPoliciesApi.md#setdevicecontrolpoliciesprecedence) | **POST** /policy/entities/device-control-precedence/v1 | Sets the precedence of Device Control Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence
*DeviceControlPoliciesApi* | [**updateDeviceControlPolicies**](docs/Api/DeviceControlPoliciesApi.md#updatedevicecontrolpolicies) | **PATCH** /policy/entities/device-control/v1 | Update Device Control Policies by specifying the ID of the policy and details to update
*EventStreamsApi* | [**listAvailableStreamsOAuth2**](docs/Api/EventStreamsApi.md#listavailablestreamsoauth2) | **GET** /sensors/entities/datafeed/v2 | Discover all event streams in your environment
*EventStreamsApi* | [**refreshActiveStreamSession**](docs/Api/EventStreamsApi.md#refreshactivestreamsession) | **POST** /sensors/entities/datafeed-actions/v1/{partition} | Refresh an active event stream. Use the URL shown in a GET /sensors/entities/datafeed/v2 response.
*FirewallManagementApi* | [**aggregateEvents**](docs/Api/FirewallManagementApi.md#aggregateevents) | **POST** /fwmgr/aggregates/events/GET/v1 | Aggregate events for customer
*FirewallManagementApi* | [**aggregatePolicyRules**](docs/Api/FirewallManagementApi.md#aggregatepolicyrules) | **POST** /fwmgr/aggregates/policy-rules/GET/v1 | Aggregate rules within a policy for customer
*FirewallManagementApi* | [**aggregateRuleGroups**](docs/Api/FirewallManagementApi.md#aggregaterulegroups) | **POST** /fwmgr/aggregates/rule-groups/GET/v1 | Aggregate rule groups for customer
*FirewallManagementApi* | [**aggregateRules**](docs/Api/FirewallManagementApi.md#aggregaterules) | **POST** /fwmgr/aggregates/rules/GET/v1 | Aggregate rules for customer
*FirewallManagementApi* | [**createRuleGroup**](docs/Api/FirewallManagementApi.md#createrulegroup) | **POST** /fwmgr/entities/rule-groups/v1 | Create new rule group on a platform for a customer with a name and description, and return the ID
*FirewallManagementApi* | [**deleteRuleGroups**](docs/Api/FirewallManagementApi.md#deleterulegroups) | **DELETE** /fwmgr/entities/rule-groups/v1 | Delete rule group entities by ID
*FirewallManagementApi* | [**getEvents**](docs/Api/FirewallManagementApi.md#getevents) | **GET** /fwmgr/entities/events/v1 | Get events entities by ID and optionally version
*FirewallManagementApi* | [**getFirewallFields**](docs/Api/FirewallManagementApi.md#getfirewallfields) | **GET** /fwmgr/entities/firewall-fields/v1 | Get the firewall field specifications by ID
*FirewallManagementApi* | [**getPlatforms**](docs/Api/FirewallManagementApi.md#getplatforms) | **GET** /fwmgr/entities/platforms/v1 | Get platforms by ID, e.g., windows or mac or droid
*FirewallManagementApi* | [**getPolicyContainers**](docs/Api/FirewallManagementApi.md#getpolicycontainers) | **GET** /fwmgr/entities/policies/v1 | Get policy container entities by policy ID
*FirewallManagementApi* | [**getRuleGroups**](docs/Api/FirewallManagementApi.md#getrulegroups) | **GET** /fwmgr/entities/rule-groups/v1 | Get rule group entities by ID. These groups do not contain their rule entites, just the rule IDs in precedence order.
*FirewallManagementApi* | [**getRules**](docs/Api/FirewallManagementApi.md#getrules) | **GET** /fwmgr/entities/rules/v1 | Get rule entities by ID (64-bit unsigned int as decimal string) or Family ID (32-character hexadecimal string)
*FirewallManagementApi* | [**queryEvents**](docs/Api/FirewallManagementApi.md#queryevents) | **GET** /fwmgr/queries/events/v1 | Find all event IDs matching the query with filter
*FirewallManagementApi* | [**queryFirewallFields**](docs/Api/FirewallManagementApi.md#queryfirewallfields) | **GET** /fwmgr/queries/firewall-fields/v1 | Get the firewall field specification IDs for the provided platform
*FirewallManagementApi* | [**queryPlatforms**](docs/Api/FirewallManagementApi.md#queryplatforms) | **GET** /fwmgr/queries/platforms/v1 | Get the list of platform names
*FirewallManagementApi* | [**queryPolicyRules**](docs/Api/FirewallManagementApi.md#querypolicyrules) | **GET** /fwmgr/queries/policy-rules/v1 | Find all firewall rule IDs matching the query with filter, and return them in precedence order
*FirewallManagementApi* | [**queryRuleGroups**](docs/Api/FirewallManagementApi.md#queryrulegroups) | **GET** /fwmgr/queries/rule-groups/v1 | Find all rule group IDs matching the query with filter
*FirewallManagementApi* | [**queryRules**](docs/Api/FirewallManagementApi.md#queryrules) | **GET** /fwmgr/queries/rules/v1 | Find all rule IDs matching the query with filter
*FirewallManagementApi* | [**updatePolicyContainer**](docs/Api/FirewallManagementApi.md#updatepolicycontainer) | **PUT** /fwmgr/entities/policies/v1 | Update an identified policy container
*FirewallManagementApi* | [**updateRuleGroup**](docs/Api/FirewallManagementApi.md#updaterulegroup) | **PATCH** /fwmgr/entities/rule-groups/v1 | Update name, description, or enabled status of a rule group, or create, edit, delete, or reorder rules
*HostGroupApi* | [**createHostGroups**](docs/Api/HostGroupApi.md#createhostgroups) | **POST** /devices/entities/host-groups/v1 | Create Host Groups by specifying details about the group to create
*HostGroupApi* | [**deleteHostGroups**](docs/Api/HostGroupApi.md#deletehostgroups) | **DELETE** /devices/entities/host-groups/v1 | Delete a set of Host Groups by specifying their IDs
*HostGroupApi* | [**getHostGroups**](docs/Api/HostGroupApi.md#gethostgroups) | **GET** /devices/entities/host-groups/v1 | Retrieve a set of Host Groups by specifying their IDs
*HostGroupApi* | [**performGroupAction**](docs/Api/HostGroupApi.md#performgroupaction) | **POST** /devices/entities/host-group-actions/v1 | Perform the specified action on the Host Groups specified in the request
*HostGroupApi* | [**queryCombinedGroupMembers**](docs/Api/HostGroupApi.md#querycombinedgroupmembers) | **GET** /devices/combined/host-group-members/v1 | Search for members of a Host Group in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria
*HostGroupApi* | [**queryCombinedHostGroups**](docs/Api/HostGroupApi.md#querycombinedhostgroups) | **GET** /devices/combined/host-groups/v1 | Search for Host Groups in your environment by providing an FQL filter and paging details. Returns a set of Host Groups which match the filter criteria
*HostGroupApi* | [**queryGroupMembers**](docs/Api/HostGroupApi.md#querygroupmembers) | **GET** /devices/queries/host-group-members/v1 | Search for members of a Host Group in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria
*HostGroupApi* | [**queryHostGroups**](docs/Api/HostGroupApi.md#queryhostgroups) | **GET** /devices/queries/host-groups/v1 | Search for Host Groups in your environment by providing an FQL filter and paging details. Returns a set of Host Group IDs which match the filter criteria
*HostGroupApi* | [**updateHostGroups**](docs/Api/HostGroupApi.md#updatehostgroups) | **PATCH** /devices/entities/host-groups/v1 | Update Host Groups by specifying the ID of the group and details to update
*HostsApi* | [**getDeviceDetails**](docs/Api/HostsApi.md#getdevicedetails) | **GET** /devices/entities/devices/v1 | Get details on one or more hosts by providing agent IDs (AID). You can get a host&#39;s agent IDs (AIDs) from the /devices/queries/devices/v1 endpoint, the Falcon console or the Streaming API
*HostsApi* | [**performActionV2**](docs/Api/HostsApi.md#performactionv2) | **POST** /devices/entities/devices-actions/v2 | Take various actions on the hosts in your environment. Contain or lift containment on a host. Delete or restore a host.
*HostsApi* | [**queryDevicesByFilter**](docs/Api/HostsApi.md#querydevicesbyfilter) | **GET** /devices/queries/devices/v1 | Search for hosts in your environment by platform, hostname, IP, and other criteria.
*HostsApi* | [**queryDevicesByFilterScroll**](docs/Api/HostsApi.md#querydevicesbyfilterscroll) | **GET** /devices/queries/devices-scroll/v1 | Search for hosts in your environment by platform, hostname, IP, and other criteria with continuous pagination capability (based on offset pointer which expires after 2 minutes with no maximum limit)
*HostsApi* | [**queryHiddenDevices**](docs/Api/HostsApi.md#queryhiddendevices) | **GET** /devices/queries/devices-hidden/v1 | Retrieve hidden hosts that match the provided filter criteria.
*IncidentsApi* | [**crowdScore**](docs/Api/IncidentsApi.md#crowdscore) | **GET** /incidents/combined/crowdscores/v1 | Query environment wide CrowdScore and return the entity data
*IncidentsApi* | [**getBehaviors**](docs/Api/IncidentsApi.md#getbehaviors) | **POST** /incidents/entities/behaviors/GET/v1 | Get details on behaviors by providing behavior IDs
*IncidentsApi* | [**getIncidents**](docs/Api/IncidentsApi.md#getincidents) | **POST** /incidents/entities/incidents/GET/v1 | Get details on incidents by providing incident IDs
*IncidentsApi* | [**performIncidentAction**](docs/Api/IncidentsApi.md#performincidentaction) | **POST** /incidents/entities/incident-actions/v1 | Perform a set of actions on one or more incidents, such as adding tags or comments or updating the incident name or description
*IncidentsApi* | [**queryBehaviors**](docs/Api/IncidentsApi.md#querybehaviors) | **GET** /incidents/queries/behaviors/v1 | Search for behaviors by providing an FQL filter, sorting, and paging details
*IncidentsApi* | [**queryIncidents**](docs/Api/IncidentsApi.md#queryincidents) | **GET** /incidents/queries/incidents/v1 | Search for incidents by providing an FQL filter, sorting, and paging details
*InstallationTokensApi* | [**auditEventsQuery**](docs/Api/InstallationTokensApi.md#auditeventsquery) | **GET** /installation-tokens/queries/audit-events/v1 | Search for audit events by providing an FQL filter and paging details.
*InstallationTokensApi* | [**auditEventsRead**](docs/Api/InstallationTokensApi.md#auditeventsread) | **GET** /installation-tokens/entities/audit-events/v1 | Gets the details of one or more audit events by id.
*InstallationTokensApi* | [**customerSettingsRead**](docs/Api/InstallationTokensApi.md#customersettingsread) | **GET** /installation-tokens/entities/customer-settings/v1 | Check current installation token settings.
*InstallationTokensApi* | [**tokensCreate**](docs/Api/InstallationTokensApi.md#tokenscreate) | **POST** /installation-tokens/entities/tokens/v1 | Creates a token.
*InstallationTokensApi* | [**tokensDelete**](docs/Api/InstallationTokensApi.md#tokensdelete) | **DELETE** /installation-tokens/entities/tokens/v1 | Deletes a token immediately. To revoke a token, use PATCH /installation-tokens/entities/tokens/v1 instead.
*InstallationTokensApi* | [**tokensQuery**](docs/Api/InstallationTokensApi.md#tokensquery) | **GET** /installation-tokens/queries/tokens/v1 | Search for tokens by providing an FQL filter and paging details.
*InstallationTokensApi* | [**tokensRead**](docs/Api/InstallationTokensApi.md#tokensread) | **GET** /installation-tokens/entities/tokens/v1 | Gets the details of one or more tokens by id.
*InstallationTokensApi* | [**tokensUpdate**](docs/Api/InstallationTokensApi.md#tokensupdate) | **PATCH** /installation-tokens/entities/tokens/v1 | Updates one or more tokens. Use this endpoint to edit labels, change expiration, revoke, or restore.
*IntelApi* | [**getIntelActorEntities**](docs/Api/IntelApi.md#getintelactorentities) | **GET** /intel/entities/actors/v1 | Retrieve specific actors using their actor IDs.
*IntelApi* | [**getIntelIndicatorEntities**](docs/Api/IntelApi.md#getintelindicatorentities) | **POST** /intel/entities/indicators/GET/v1 | Retrieve specific indicators using their indicator IDs.
*IntelApi* | [**getIntelReportEntities**](docs/Api/IntelApi.md#getintelreportentities) | **GET** /intel/entities/reports/v1 | Retrieve specific reports using their report IDs.
*IntelApi* | [**getIntelReportPDF**](docs/Api/IntelApi.md#getintelreportpdf) | **GET** /intel/entities/report-files/v1 | Return a Report PDF attachment
*IntelApi* | [**getIntelRuleEntities**](docs/Api/IntelApi.md#getintelruleentities) | **GET** /intel/entities/rules/v1 | Retrieve details for rule sets for the specified ids.
*IntelApi* | [**getIntelRuleFile**](docs/Api/IntelApi.md#getintelrulefile) | **GET** /intel/entities/rules-files/v1 | Download earlier rule sets.
*IntelApi* | [**getLatestIntelRuleFile**](docs/Api/IntelApi.md#getlatestintelrulefile) | **GET** /intel/entities/rules-latest-files/v1 | Download the latest rule set.
*IntelApi* | [**queryIntelActorEntities**](docs/Api/IntelApi.md#queryintelactorentities) | **GET** /intel/combined/actors/v1 | Get info about actors that match provided FQL filters.
*IntelApi* | [**queryIntelActorIds**](docs/Api/IntelApi.md#queryintelactorids) | **GET** /intel/queries/actors/v1 | Get actor IDs that match provided FQL filters.
*IntelApi* | [**queryIntelIndicatorEntities**](docs/Api/IntelApi.md#queryintelindicatorentities) | **GET** /intel/combined/indicators/v1 | Get info about indicators that match provided FQL filters.
*IntelApi* | [**queryIntelIndicatorIds**](docs/Api/IntelApi.md#queryintelindicatorids) | **GET** /intel/queries/indicators/v1 | Get indicators IDs that match provided FQL filters.
*IntelApi* | [**queryIntelReportEntities**](docs/Api/IntelApi.md#queryintelreportentities) | **GET** /intel/combined/reports/v1 | Get info about reports that match provided FQL filters.
*IntelApi* | [**queryIntelReportIds**](docs/Api/IntelApi.md#queryintelreportids) | **GET** /intel/queries/reports/v1 | Get report IDs that match provided FQL filters.
*IntelApi* | [**queryIntelRuleIds**](docs/Api/IntelApi.md#queryintelruleids) | **GET** /intel/queries/rules/v1 | Search for rule IDs that match provided filter criteria.
*IoaExclusionsApi* | [**createIOAExclusionsV1**](docs/Api/IoaExclusionsApi.md#createioaexclusionsv1) | **POST** /policy/entities/ioa-exclusions/v1 | Create the IOA exclusions
*IoaExclusionsApi* | [**deleteIOAExclusionsV1**](docs/Api/IoaExclusionsApi.md#deleteioaexclusionsv1) | **DELETE** /policy/entities/ioa-exclusions/v1 | Delete the IOA exclusions by id
*IoaExclusionsApi* | [**getIOAExclusionsV1**](docs/Api/IoaExclusionsApi.md#getioaexclusionsv1) | **GET** /policy/entities/ioa-exclusions/v1 | Get a set of IOA Exclusions by specifying their IDs
*IoaExclusionsApi* | [**queryIOAExclusionsV1**](docs/Api/IoaExclusionsApi.md#queryioaexclusionsv1) | **GET** /policy/queries/ioa-exclusions/v1 | Search for IOA exclusions.
*IoaExclusionsApi* | [**updateIOAExclusionsV1**](docs/Api/IoaExclusionsApi.md#updateioaexclusionsv1) | **PATCH** /policy/entities/ioa-exclusions/v1 | Update the IOA exclusions
*IocsApi* | [**createIOC**](docs/Api/IocsApi.md#createioc) | **POST** /indicators/entities/iocs/v1 | Create a new IOC
*IocsApi* | [**deleteIOC**](docs/Api/IocsApi.md#deleteioc) | **DELETE** /indicators/entities/iocs/v1 | Delete an IOC by providing a type and value
*IocsApi* | [**devicesCount**](docs/Api/IocsApi.md#devicescount) | **GET** /indicators/aggregates/devices-count/v1 | Number of hosts in your customer account that have observed a given custom IOC
*IocsApi* | [**devicesRanOn**](docs/Api/IocsApi.md#devicesranon) | **GET** /indicators/queries/devices/v1 | Find hosts that have observed a given custom IOC. For details about those hosts, use GET /devices/entities/devices/v1
*IocsApi* | [**entitiesProcesses**](docs/Api/IocsApi.md#entitiesprocesses) | **GET** /processes/entities/processes/v1 | For the provided ProcessID retrieve the process details
*IocsApi* | [**getIOC**](docs/Api/IocsApi.md#getioc) | **GET** /indicators/entities/iocs/v1 | Get an IOC by providing a type and value
*IocsApi* | [**processesRanOn**](docs/Api/IocsApi.md#processesranon) | **GET** /indicators/queries/processes/v1 | Search for processes associated with a custom IOC
*IocsApi* | [**queryIOCs**](docs/Api/IocsApi.md#queryiocs) | **GET** /indicators/queries/iocs/v1 | Search the custom IOCs in your customer account
*IocsApi* | [**updateIOC**](docs/Api/IocsApi.md#updateioc) | **PATCH** /indicators/entities/iocs/v1 | Update an IOC by providing a type and value
*MlExclusionsApi* | [**createMLExclusionsV1**](docs/Api/MlExclusionsApi.md#createmlexclusionsv1) | **POST** /policy/entities/ml-exclusions/v1 | Create the ML exclusions
*MlExclusionsApi* | [**deleteMLExclusionsV1**](docs/Api/MlExclusionsApi.md#deletemlexclusionsv1) | **DELETE** /policy/entities/ml-exclusions/v1 | Delete the ML exclusions by id
*MlExclusionsApi* | [**getMLExclusionsV1**](docs/Api/MlExclusionsApi.md#getmlexclusionsv1) | **GET** /policy/entities/ml-exclusions/v1 | Get a set of ML Exclusions by specifying their IDs
*MlExclusionsApi* | [**queryMLExclusionsV1**](docs/Api/MlExclusionsApi.md#querymlexclusionsv1) | **GET** /policy/queries/ml-exclusions/v1 | Search for ML exclusions.
*MlExclusionsApi* | [**updateMLExclusionsV1**](docs/Api/MlExclusionsApi.md#updatemlexclusionsv1) | **PATCH** /policy/entities/ml-exclusions/v1 | Update the ML exclusions
*Oauth2Api* | [**oauth2AccessToken**](docs/Api/Oauth2Api.md#oauth2accesstoken) | **POST** /oauth2/token | Generate an OAuth2 access token
*Oauth2Api* | [**oauth2RevokeToken**](docs/Api/Oauth2Api.md#oauth2revoketoken) | **POST** /oauth2/revoke | Revoke a previously issued OAuth2 access token before the end of its standard 30-minute lifespan.
*PreventionPoliciesApi* | [**createPreventionPolicies**](docs/Api/PreventionPoliciesApi.md#createpreventionpolicies) | **POST** /policy/entities/prevention/v1 | Create Prevention Policies by specifying details about the policy to create
*PreventionPoliciesApi* | [**deletePreventionPolicies**](docs/Api/PreventionPoliciesApi.md#deletepreventionpolicies) | **DELETE** /policy/entities/prevention/v1 | Delete a set of Prevention Policies by specifying their IDs
*PreventionPoliciesApi* | [**getPreventionPolicies**](docs/Api/PreventionPoliciesApi.md#getpreventionpolicies) | **GET** /policy/entities/prevention/v1 | Retrieve a set of Prevention Policies by specifying their IDs
*PreventionPoliciesApi* | [**performPreventionPoliciesAction**](docs/Api/PreventionPoliciesApi.md#performpreventionpoliciesaction) | **POST** /policy/entities/prevention-actions/v1 | Perform the specified action on the Prevention Policies specified in the request
*PreventionPoliciesApi* | [**queryCombinedPreventionPolicies**](docs/Api/PreventionPoliciesApi.md#querycombinedpreventionpolicies) | **GET** /policy/combined/prevention/v1 | Search for Prevention Policies in your environment by providing an FQL filter and paging details. Returns a set of Prevention Policies which match the filter criteria
*PreventionPoliciesApi* | [**queryCombinedPreventionPolicyMembers**](docs/Api/PreventionPoliciesApi.md#querycombinedpreventionpolicymembers) | **GET** /policy/combined/prevention-members/v1 | Search for members of a Prevention Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria
*PreventionPoliciesApi* | [**queryPreventionPolicies**](docs/Api/PreventionPoliciesApi.md#querypreventionpolicies) | **GET** /policy/queries/prevention/v1 | Search for Prevention Policies in your environment by providing an FQL filter and paging details. Returns a set of Prevention Policy IDs which match the filter criteria
*PreventionPoliciesApi* | [**queryPreventionPolicyMembers**](docs/Api/PreventionPoliciesApi.md#querypreventionpolicymembers) | **GET** /policy/queries/prevention-members/v1 | Search for members of a Prevention Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria
*PreventionPoliciesApi* | [**setPreventionPoliciesPrecedence**](docs/Api/PreventionPoliciesApi.md#setpreventionpoliciesprecedence) | **POST** /policy/entities/prevention-precedence/v1 | Sets the precedence of Prevention Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence
*PreventionPoliciesApi* | [**updatePreventionPolicies**](docs/Api/PreventionPoliciesApi.md#updatepreventionpolicies) | **PATCH** /policy/entities/prevention/v1 | Update Prevention Policies by specifying the ID of the policy and details to update
*RealTimeResponseApi* | [**batchActiveResponderCmd**](docs/Api/RealTimeResponseApi.md#batchactiverespondercmd) | **POST** /real-time-response/combined/batch-active-responder-command/v1 | Batch executes a RTR active-responder command across the hosts mapped to the given batch ID.
*RealTimeResponseApi* | [**batchCmd**](docs/Api/RealTimeResponseApi.md#batchcmd) | **POST** /real-time-response/combined/batch-command/v1 | Batch executes a RTR read-only command across the hosts mapped to the given batch ID.
*RealTimeResponseApi* | [**batchGetCmd**](docs/Api/RealTimeResponseApi.md#batchgetcmd) | **POST** /real-time-response/combined/batch-get-command/v1 | Batch executes &#x60;get&#x60; command across hosts to retrieve files. After this call is made &#x60;GET /real-time-response/combined/batch-get-command/v1&#x60; is used to query for the results.
*RealTimeResponseApi* | [**batchGetCmdStatus**](docs/Api/RealTimeResponseApi.md#batchgetcmdstatus) | **GET** /real-time-response/combined/batch-get-command/v1 | Retrieves the status of the specified batch get command.  Will return successful files when they are finished processing.
*RealTimeResponseApi* | [**batchInitSessions**](docs/Api/RealTimeResponseApi.md#batchinitsessions) | **POST** /real-time-response/combined/batch-init-session/v1 | Batch initialize a RTR session on multiple hosts.  Before any RTR commands can be used, an active session is needed on the host.
*RealTimeResponseApi* | [**batchRefreshSessions**](docs/Api/RealTimeResponseApi.md#batchrefreshsessions) | **POST** /real-time-response/combined/batch-refresh-session/v1 | Batch refresh a RTR session on multiple hosts. RTR sessions will expire after 10 minutes unless refreshed.
*RealTimeResponseApi* | [**rTRAggregateSessions**](docs/Api/RealTimeResponseApi.md#rtraggregatesessions) | **POST** /real-time-response/aggregates/sessions/GET/v1 | Get aggregates on session data.
*RealTimeResponseApi* | [**rTRCheckActiveResponderCommandStatus**](docs/Api/RealTimeResponseApi.md#rtrcheckactiverespondercommandstatus) | **GET** /real-time-response/entities/active-responder-command/v1 | Get status of an executed active-responder command on a single host.
*RealTimeResponseApi* | [**rTRCheckCommandStatus**](docs/Api/RealTimeResponseApi.md#rtrcheckcommandstatus) | **GET** /real-time-response/entities/command/v1 | Get status of an executed command on a single host.
*RealTimeResponseApi* | [**rTRDeleteFile**](docs/Api/RealTimeResponseApi.md#rtrdeletefile) | **DELETE** /real-time-response/entities/file/v1 | Delete a RTR session file.
*RealTimeResponseApi* | [**rTRDeleteQueuedSession**](docs/Api/RealTimeResponseApi.md#rtrdeletequeuedsession) | **DELETE** /real-time-response/entities/queued-sessions/command/v1 | Delete a queued session command
*RealTimeResponseApi* | [**rTRDeleteSession**](docs/Api/RealTimeResponseApi.md#rtrdeletesession) | **DELETE** /real-time-response/entities/sessions/v1 | Delete a session.
*RealTimeResponseApi* | [**rTRExecuteActiveResponderCommand**](docs/Api/RealTimeResponseApi.md#rtrexecuteactiverespondercommand) | **POST** /real-time-response/entities/active-responder-command/v1 | Execute an active responder command on a single host.
*RealTimeResponseApi* | [**rTRExecuteCommand**](docs/Api/RealTimeResponseApi.md#rtrexecutecommand) | **POST** /real-time-response/entities/command/v1 | Execute a command on a single host.
*RealTimeResponseApi* | [**rTRGetExtractedFileContents**](docs/Api/RealTimeResponseApi.md#rtrgetextractedfilecontents) | **GET** /real-time-response/entities/extracted-file-contents/v1 | Get RTR extracted file contents for specified session and sha256.
*RealTimeResponseApi* | [**rTRInitSession**](docs/Api/RealTimeResponseApi.md#rtrinitsession) | **POST** /real-time-response/entities/sessions/v1 | Initialize a new session with the RTR cloud.
*RealTimeResponseApi* | [**rTRListAllSessions**](docs/Api/RealTimeResponseApi.md#rtrlistallsessions) | **GET** /real-time-response/queries/sessions/v1 | Get a list of session_ids.
*RealTimeResponseApi* | [**rTRListFiles**](docs/Api/RealTimeResponseApi.md#rtrlistfiles) | **GET** /real-time-response/entities/file/v1 | Get a list of files for the specified RTR session.
*RealTimeResponseApi* | [**rTRListQueuedSessions**](docs/Api/RealTimeResponseApi.md#rtrlistqueuedsessions) | **POST** /real-time-response/entities/queued-sessions/GET/v1 | Get queued session metadata by session ID.
*RealTimeResponseApi* | [**rTRListSessions**](docs/Api/RealTimeResponseApi.md#rtrlistsessions) | **POST** /real-time-response/entities/sessions/GET/v1 | Get session metadata by session id.
*RealTimeResponseApi* | [**rTRPulseSession**](docs/Api/RealTimeResponseApi.md#rtrpulsesession) | **POST** /real-time-response/entities/refresh-session/v1 | Refresh a session timeout on a single host.
*RealTimeResponseAdminApi* | [**batchAdminCmd**](docs/Api/RealTimeResponseAdminApi.md#batchadmincmd) | **POST** /real-time-response/combined/batch-admin-command/v1 | Batch executes a RTR administrator command across the hosts mapped to the given batch ID.
*RealTimeResponseAdminApi* | [**rTRCheckAdminCommandStatus**](docs/Api/RealTimeResponseAdminApi.md#rtrcheckadmincommandstatus) | **GET** /real-time-response/entities/admin-command/v1 | Get status of an executed RTR administrator command on a single host.
*RealTimeResponseAdminApi* | [**rTRCreatePutFiles**](docs/Api/RealTimeResponseAdminApi.md#rtrcreateputfiles) | **POST** /real-time-response/entities/put-files/v1 | Upload a new put-file to use for the RTR &#x60;put&#x60; command.
*RealTimeResponseAdminApi* | [**rTRCreateScripts**](docs/Api/RealTimeResponseAdminApi.md#rtrcreatescripts) | **POST** /real-time-response/entities/scripts/v1 | Upload a new custom-script to use for the RTR &#x60;runscript&#x60; command.
*RealTimeResponseAdminApi* | [**rTRDeletePutFiles**](docs/Api/RealTimeResponseAdminApi.md#rtrdeleteputfiles) | **DELETE** /real-time-response/entities/put-files/v1 | Delete a put-file based on the ID given.  Can only delete one file at a time.
*RealTimeResponseAdminApi* | [**rTRDeleteScripts**](docs/Api/RealTimeResponseAdminApi.md#rtrdeletescripts) | **DELETE** /real-time-response/entities/scripts/v1 | Delete a custom-script based on the ID given.  Can only delete one script at a time.
*RealTimeResponseAdminApi* | [**rTRExecuteAdminCommand**](docs/Api/RealTimeResponseAdminApi.md#rtrexecuteadmincommand) | **POST** /real-time-response/entities/admin-command/v1 | Execute a RTR administrator command on a single host.
*RealTimeResponseAdminApi* | [**rTRGetPutFiles**](docs/Api/RealTimeResponseAdminApi.md#rtrgetputfiles) | **GET** /real-time-response/entities/put-files/v1 | Get put-files based on the ID&#39;s given. These are used for the RTR &#x60;put&#x60; command.
*RealTimeResponseAdminApi* | [**rTRGetScripts**](docs/Api/RealTimeResponseAdminApi.md#rtrgetscripts) | **GET** /real-time-response/entities/scripts/v1 | Get custom-scripts based on the ID&#39;s given. These are used for the RTR &#x60;runscript&#x60; command.
*RealTimeResponseAdminApi* | [**rTRListPutFiles**](docs/Api/RealTimeResponseAdminApi.md#rtrlistputfiles) | **GET** /real-time-response/queries/put-files/v1 | Get a list of put-file ID&#39;s that are available to the user for the &#x60;put&#x60; command.
*RealTimeResponseAdminApi* | [**rTRListScripts**](docs/Api/RealTimeResponseAdminApi.md#rtrlistscripts) | **GET** /real-time-response/queries/scripts/v1 | Get a list of custom-script ID&#39;s that are available to the user for the &#x60;runscript&#x60; command.
*RealTimeResponseAdminApi* | [**rTRUpdateScripts**](docs/Api/RealTimeResponseAdminApi.md#rtrupdatescripts) | **PATCH** /real-time-response/entities/scripts/v1 | Upload a new scripts to replace an existing one.
*SensorDownloadApi* | [**downloadSensorInstallerById**](docs/Api/SensorDownloadApi.md#downloadsensorinstallerbyid) | **GET** /sensors/entities/download-installer/v1 | Download sensor installer by SHA256 ID
*SensorDownloadApi* | [**getCombinedSensorInstallersByQuery**](docs/Api/SensorDownloadApi.md#getcombinedsensorinstallersbyquery) | **GET** /sensors/combined/installers/v1 | Get sensor installer details by provided query
*SensorDownloadApi* | [**getSensorInstallersByQuery**](docs/Api/SensorDownloadApi.md#getsensorinstallersbyquery) | **GET** /sensors/queries/installers/v1 | Get sensor installer IDs by provided query
*SensorDownloadApi* | [**getSensorInstallersCCIDByQuery**](docs/Api/SensorDownloadApi.md#getsensorinstallersccidbyquery) | **GET** /sensors/queries/installers/ccid/v1 | Get CCID to use with sensor installers
*SensorDownloadApi* | [**getSensorInstallersEntities**](docs/Api/SensorDownloadApi.md#getsensorinstallersentities) | **GET** /sensors/entities/installers/v1 | Get sensor installer details by provided SHA256 IDs
*SensorUpdatePoliciesApi* | [**createSensorUpdatePolicies**](docs/Api/SensorUpdatePoliciesApi.md#createsensorupdatepolicies) | **POST** /policy/entities/sensor-update/v1 | Create Sensor Update Policies by specifying details about the policy to create
*SensorUpdatePoliciesApi* | [**createSensorUpdatePoliciesV2**](docs/Api/SensorUpdatePoliciesApi.md#createsensorupdatepoliciesv2) | **POST** /policy/entities/sensor-update/v2 | Create Sensor Update Policies by specifying details about the policy to create with additional support for uninstall protection
*SensorUpdatePoliciesApi* | [**deleteSensorUpdatePolicies**](docs/Api/SensorUpdatePoliciesApi.md#deletesensorupdatepolicies) | **DELETE** /policy/entities/sensor-update/v1 | Delete a set of Sensor Update Policies by specifying their IDs
*SensorUpdatePoliciesApi* | [**getSensorUpdatePolicies**](docs/Api/SensorUpdatePoliciesApi.md#getsensorupdatepolicies) | **GET** /policy/entities/sensor-update/v1 | Retrieve a set of Sensor Update Policies by specifying their IDs
*SensorUpdatePoliciesApi* | [**getSensorUpdatePoliciesV2**](docs/Api/SensorUpdatePoliciesApi.md#getsensorupdatepoliciesv2) | **GET** /policy/entities/sensor-update/v2 | Retrieve a set of Sensor Update Policies with additional support for uninstall protection by specifying their IDs
*SensorUpdatePoliciesApi* | [**performSensorUpdatePoliciesAction**](docs/Api/SensorUpdatePoliciesApi.md#performsensorupdatepoliciesaction) | **POST** /policy/entities/sensor-update-actions/v1 | Perform the specified action on the Sensor Update Policies specified in the request
*SensorUpdatePoliciesApi* | [**queryCombinedSensorUpdateBuilds**](docs/Api/SensorUpdatePoliciesApi.md#querycombinedsensorupdatebuilds) | **GET** /policy/combined/sensor-update-builds/v1 | Retrieve available builds for use with Sensor Update Policies
*SensorUpdatePoliciesApi* | [**queryCombinedSensorUpdatePolicies**](docs/Api/SensorUpdatePoliciesApi.md#querycombinedsensorupdatepolicies) | **GET** /policy/combined/sensor-update/v1 | Search for Sensor Update Policies in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policies which match the filter criteria
*SensorUpdatePoliciesApi* | [**queryCombinedSensorUpdatePoliciesV2**](docs/Api/SensorUpdatePoliciesApi.md#querycombinedsensorupdatepoliciesv2) | **GET** /policy/combined/sensor-update/v2 | Search for Sensor Update Policies with additional support for uninstall protection in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policies which match the filter criteria
*SensorUpdatePoliciesApi* | [**queryCombinedSensorUpdatePolicyMembers**](docs/Api/SensorUpdatePoliciesApi.md#querycombinedsensorupdatepolicymembers) | **GET** /policy/combined/sensor-update-members/v1 | Search for members of a Sensor Update Policy in your environment by providing an FQL filter and paging details. Returns a set of host details which match the filter criteria
*SensorUpdatePoliciesApi* | [**querySensorUpdatePolicies**](docs/Api/SensorUpdatePoliciesApi.md#querysensorupdatepolicies) | **GET** /policy/queries/sensor-update/v1 | Search for Sensor Update Policies in your environment by providing an FQL filter and paging details. Returns a set of Sensor Update Policy IDs which match the filter criteria
*SensorUpdatePoliciesApi* | [**querySensorUpdatePolicyMembers**](docs/Api/SensorUpdatePoliciesApi.md#querysensorupdatepolicymembers) | **GET** /policy/queries/sensor-update-members/v1 | Search for members of a Sensor Update Policy in your environment by providing an FQL filter and paging details. Returns a set of Agent IDs which match the filter criteria
*SensorUpdatePoliciesApi* | [**revealUninstallToken**](docs/Api/SensorUpdatePoliciesApi.md#revealuninstalltoken) | **POST** /policy/combined/reveal-uninstall-token/v1 | Reveals an uninstall token for a specific device. To retrieve the bulk maintenance token pass the value &#39;MAINTENANCE&#39; as the value for &#39;device_id&#39;
*SensorUpdatePoliciesApi* | [**setSensorUpdatePoliciesPrecedence**](docs/Api/SensorUpdatePoliciesApi.md#setsensorupdatepoliciesprecedence) | **POST** /policy/entities/sensor-update-precedence/v1 | Sets the precedence of Sensor Update Policies based on the order of IDs specified in the request. The first ID specified will have the highest precedence and the last ID specified will have the lowest. You must specify all non-Default Policies for a platform when updating precedence
*SensorUpdatePoliciesApi* | [**updateSensorUpdatePolicies**](docs/Api/SensorUpdatePoliciesApi.md#updatesensorupdatepolicies) | **PATCH** /policy/entities/sensor-update/v1 | Update Sensor Update Policies by specifying the ID of the policy and details to update
*SensorUpdatePoliciesApi* | [**updateSensorUpdatePoliciesV2**](docs/Api/SensorUpdatePoliciesApi.md#updatesensorupdatepoliciesv2) | **PATCH** /policy/entities/sensor-update/v2 | Update Sensor Update Policies by specifying the ID of the policy and details to update with additional support for uninstall protection
*SensorVisibilityExclusionsApi* | [**createSVExclusionsV1**](docs/Api/SensorVisibilityExclusionsApi.md#createsvexclusionsv1) | **POST** /policy/entities/sv-exclusions/v1 | Create the sensor visibility exclusions
*SensorVisibilityExclusionsApi* | [**deleteSensorVisibilityExclusionsV1**](docs/Api/SensorVisibilityExclusionsApi.md#deletesensorvisibilityexclusionsv1) | **DELETE** /policy/entities/sv-exclusions/v1 | Delete the sensor visibility exclusions by id
*SensorVisibilityExclusionsApi* | [**getSensorVisibilityExclusionsV1**](docs/Api/SensorVisibilityExclusionsApi.md#getsensorvisibilityexclusionsv1) | **GET** /policy/entities/sv-exclusions/v1 | Get a set of Sensor Visibility Exclusions by specifying their IDs
*SensorVisibilityExclusionsApi* | [**querySensorVisibilityExclusionsV1**](docs/Api/SensorVisibilityExclusionsApi.md#querysensorvisibilityexclusionsv1) | **GET** /policy/queries/sv-exclusions/v1 | Search for sensor visibility exclusions.
*SensorVisibilityExclusionsApi* | [**updateSensorVisibilityExclusionsV1**](docs/Api/SensorVisibilityExclusionsApi.md#updatesensorvisibilityexclusionsv1) | **PATCH** /policy/entities/sv-exclusions/v1 | Update the sensor visibility exclusions
*SpotlightVulnerabilitiesApi* | [**getVulnerabilities**](docs/Api/SpotlightVulnerabilitiesApi.md#getvulnerabilities) | **GET** /spotlight/entities/vulnerabilities/v2 | Get details on vulnerabilities by providing one or more IDs
*SpotlightVulnerabilitiesApi* | [**queryVulnerabilities**](docs/Api/SpotlightVulnerabilitiesApi.md#queryvulnerabilities) | **GET** /spotlight/queries/vulnerabilities/v1 | Search for Vulnerabilities in your environment by providing an FQL filter and paging details. Returns a set of Vulnerability IDs which match the filter criteria
*UserManagementApi* | [**createUser**](docs/Api/UserManagementApi.md#createuser) | **POST** /users/entities/users/v1 | Create a new user. After creating a user, assign one or more roles with POST /user-roles/entities/user-roles/v1
*UserManagementApi* | [**deleteUser**](docs/Api/UserManagementApi.md#deleteuser) | **DELETE** /users/entities/users/v1 | Delete a user permanently
*UserManagementApi* | [**getAvailableRoleIds**](docs/Api/UserManagementApi.md#getavailableroleids) | **GET** /user-roles/queries/user-role-ids-by-cid/v1 | Show role IDs for all roles available in your customer account. For more information on each role, provide the role ID to &#x60;/customer/entities/roles/v1&#x60;.
*UserManagementApi* | [**getRoles**](docs/Api/UserManagementApi.md#getroles) | **GET** /user-roles/entities/user-roles/v1 | Get info about a role
*UserManagementApi* | [**getUserRoleIds**](docs/Api/UserManagementApi.md#getuserroleids) | **GET** /user-roles/queries/user-role-ids-by-user-uuid/v1 | Show role IDs of roles assigned to a user. For more information on each role, provide the role ID to &#x60;/customer/entities/roles/v1&#x60;.
*UserManagementApi* | [**grantUserRoleIds**](docs/Api/UserManagementApi.md#grantuserroleids) | **POST** /user-roles/entities/user-roles/v1 | Assign one or more roles to a user
*UserManagementApi* | [**retrieveEmailsByCID**](docs/Api/UserManagementApi.md#retrieveemailsbycid) | **GET** /users/queries/emails-by-cid/v1 | List the usernames (usually an email address) for all users in your customer account
*UserManagementApi* | [**retrieveUser**](docs/Api/UserManagementApi.md#retrieveuser) | **GET** /users/entities/users/v1 | Get info about a user
*UserManagementApi* | [**retrieveUserUUID**](docs/Api/UserManagementApi.md#retrieveuseruuid) | **GET** /users/queries/user-uuids-by-email/v1 | Get a user&#39;s ID by providing a username (usually an email address)
*UserManagementApi* | [**retrieveUserUUIDsByCID**](docs/Api/UserManagementApi.md#retrieveuseruuidsbycid) | **GET** /users/queries/user-uuids-by-cid/v1 | List user IDs for all users in your customer account. For more information on each user, provide the user ID to &#x60;/users/entities/user/v1&#x60;.
*UserManagementApi* | [**revokeUserRoleIds**](docs/Api/UserManagementApi.md#revokeuserroleids) | **DELETE** /user-roles/entities/user-roles/v1 | Revoke one or more roles from a user
*UserManagementApi* | [**updateUser**](docs/Api/UserManagementApi.md#updateuser) | **PATCH** /users/entities/users/v1 | Modify an existing user&#39;s first or last name

## Models

- [ApiAuditEventDetailsResourceV1](docs/Model/ApiAuditEventDetailsResourceV1.md)
- [ApiAuditEventDetailsResponseV1](docs/Model/ApiAuditEventDetailsResponseV1.md)
- [ApiCustomerSettingsResourceV1](docs/Model/ApiCustomerSettingsResourceV1.md)
- [ApiCustomerSettingsResponseV1](docs/Model/ApiCustomerSettingsResponseV1.md)
- [ApiIOCDevicesCount](docs/Model/ApiIOCDevicesCount.md)
- [ApiIOCViewRecord](docs/Model/ApiIOCViewRecord.md)
- [ApiMsaEnvironmentScoreResponse](docs/Model/ApiMsaEnvironmentScoreResponse.md)
- [ApiMsaExternalBehaviorResponse](docs/Model/ApiMsaExternalBehaviorResponse.md)
- [ApiMsaExternalIncidentResponse](docs/Model/ApiMsaExternalIncidentResponse.md)
- [ApiMsaIncidentPerformActionResponse](docs/Model/ApiMsaIncidentPerformActionResponse.md)
- [ApiMsaIncidentQueryResponse](docs/Model/ApiMsaIncidentQueryResponse.md)
- [ApiMsaProcessDetailResponse](docs/Model/ApiMsaProcessDetailResponse.md)
- [ApiMsaReplyDevicesRanOn](docs/Model/ApiMsaReplyDevicesRanOn.md)
- [ApiMsaReplyIOC](docs/Model/ApiMsaReplyIOC.md)
- [ApiMsaReplyIOCDevicesCount](docs/Model/ApiMsaReplyIOCDevicesCount.md)
- [ApiMsaReplyIOCIDs](docs/Model/ApiMsaReplyIOCIDs.md)
- [ApiMsaReplyProcessesRanOn](docs/Model/ApiMsaReplyProcessesRanOn.md)
- [ApiPaginationMeta](docs/Model/ApiPaginationMeta.md)
- [ApiPatternV1](docs/Model/ApiPatternV1.md)
- [ApiPatternsResponse](docs/Model/ApiPatternsResponse.md)
- [ApiPlatformsResponse](docs/Model/ApiPlatformsResponse.md)
- [ApiProcessDetail](docs/Model/ApiProcessDetail.md)
- [ApiResponseMeta](docs/Model/ApiResponseMeta.md)
- [ApiRuleCreateV1](docs/Model/ApiRuleCreateV1.md)
- [ApiRuleGroupCreateRequestV1](docs/Model/ApiRuleGroupCreateRequestV1.md)
- [ApiRuleGroupModifyRequestV1](docs/Model/ApiRuleGroupModifyRequestV1.md)
- [ApiRuleGroupV1](docs/Model/ApiRuleGroupV1.md)
- [ApiRuleGroupsResponse](docs/Model/ApiRuleGroupsResponse.md)
- [ApiRuleTypeV1](docs/Model/ApiRuleTypeV1.md)
- [ApiRuleTypesResponse](docs/Model/ApiRuleTypesResponse.md)
- [ApiRuleUpdateV1](docs/Model/ApiRuleUpdateV1.md)
- [ApiRuleUpdatesRequestV1](docs/Model/ApiRuleUpdatesRequestV1.md)
- [ApiRuleV1](docs/Model/ApiRuleV1.md)
- [ApiRulesGetRequestV1](docs/Model/ApiRulesGetRequestV1.md)
- [ApiRulesResponse](docs/Model/ApiRulesResponse.md)
- [ApiTokenCreateRequestV1](docs/Model/ApiTokenCreateRequestV1.md)
- [ApiTokenDetailsResourceV1](docs/Model/ApiTokenDetailsResourceV1.md)
- [ApiTokenDetailsResponseV1](docs/Model/ApiTokenDetailsResponseV1.md)
- [ApiTokenPatchRequestV1](docs/Model/ApiTokenPatchRequestV1.md)
- [ApiValidationRequestFieldV1](docs/Model/ApiValidationRequestFieldV1.md)
- [ApiValidationRequestV1](docs/Model/ApiValidationRequestV1.md)
- [ApiValidationResponseV1](docs/Model/ApiValidationResponseV1.md)
- [BinservclientMsaPFResponse](docs/Model/BinservclientMsaPFResponse.md)
- [BinservclientMsaPutFileResponse](docs/Model/BinservclientMsaPutFileResponse.md)
- [BinservclientRemoteCommandPutFile](docs/Model/BinservclientRemoteCommandPutFile.md)
- [CloudontologyPatternDisposition](docs/Model/CloudontologyPatternDisposition.md)
- [CsdomainActionParameter](docs/Model/CsdomainActionParameter.md)
- [CsdomainDevice](docs/Model/CsdomainDevice.md)
- [CsdomainDeviceMeta](docs/Model/CsdomainDeviceMeta.md)
- [CsdomainDevicePolicy](docs/Model/CsdomainDevicePolicy.md)
- [CsdomainManagedApp](docs/Model/CsdomainManagedApp.md)
- [CsdomainManagedApps](docs/Model/CsdomainManagedApps.md)
- [CsdomainMappedDevicePolicies](docs/Model/CsdomainMappedDevicePolicies.md)
- [DetectsDeviceDetailIndexed](docs/Model/DetectsDeviceDetailIndexed.md)
- [DetectsindexBehavior](docs/Model/DetectsindexBehavior.md)
- [DetectsindexDeviceDetailIndexed](docs/Model/DetectsindexDeviceDetailIndexed.md)
- [DetectsindexHostInfo](docs/Model/DetectsindexHostInfo.md)
- [DetectsindexParentDetails](docs/Model/DetectsindexParentDetails.md)
- [DetectsindexQuarantinedFile](docs/Model/DetectsindexQuarantinedFile.md)
- [DomainAPIDetectionDocument](docs/Model/DomainAPIDetectionDocument.md)
- [DomainAPIError](docs/Model/DomainAPIError.md)
- [DomainAPIVulnerabilityAppV2](docs/Model/DomainAPIVulnerabilityAppV2.md)
- [DomainAPIVulnerabilityCVEV2](docs/Model/DomainAPIVulnerabilityCVEV2.md)
- [DomainAPIVulnerabilityHostInfoV2](docs/Model/DomainAPIVulnerabilityHostInfoV2.md)
- [DomainAPIVulnerabilityV2](docs/Model/DomainAPIVulnerabilityV2.md)
- [DomainAWSAccountV2](docs/Model/DomainAWSAccountV2.md)
- [DomainAWSConfiguration](docs/Model/DomainAWSConfiguration.md)
- [DomainAccessTokenResponseV1](docs/Model/DomainAccessTokenResponseV1.md)
- [DomainAccountAccessResult](docs/Model/DomainAccountAccessResult.md)
- [DomainActorDocument](docs/Model/DomainActorDocument.md)
- [DomainActorsResponse](docs/Model/DomainActorsResponse.md)
- [DomainAzureAccountV1](docs/Model/DomainAzureAccountV1.md)
- [DomainAzureClientServicePrincipalV1](docs/Model/DomainAzureClientServicePrincipalV1.md)
- [DomainBatchExecuteCommandRequest](docs/Model/DomainBatchExecuteCommandRequest.md)
- [DomainBatchGetCmdStatusResponse](docs/Model/DomainBatchGetCmdStatusResponse.md)
- [DomainBatchGetCommandRequest](docs/Model/DomainBatchGetCommandRequest.md)
- [DomainBatchGetCommandResponse](docs/Model/DomainBatchGetCommandResponse.md)
- [DomainBatchInitSessionRequest](docs/Model/DomainBatchInitSessionRequest.md)
- [DomainBatchInitSessionResponse](docs/Model/DomainBatchInitSessionResponse.md)
- [DomainBatchRefreshSessionRequest](docs/Model/DomainBatchRefreshSessionRequest.md)
- [DomainBatchRefreshSessionResponse](docs/Model/DomainBatchRefreshSessionResponse.md)
- [DomainBehavior](docs/Model/DomainBehavior.md)
- [DomainCIDPolicyAssignments](docs/Model/DomainCIDPolicyAssignments.md)
- [DomainCSIXLabel](docs/Model/DomainCSIXLabel.md)
- [DomainCSIXRelation](docs/Model/DomainCSIXRelation.md)
- [DomainCommandExecuteRequest](docs/Model/DomainCommandExecuteRequest.md)
- [DomainCommandExecuteResponse](docs/Model/DomainCommandExecuteResponse.md)
- [DomainCommandExecuteResponseWrapper](docs/Model/DomainCommandExecuteResponseWrapper.md)
- [DomainDetectsEntitiesPatchRequest](docs/Model/DomainDetectsEntitiesPatchRequest.md)
- [DomainDevice](docs/Model/DomainDevice.md)
- [DomainDeviceDetailsResponseSwagger](docs/Model/DomainDeviceDetailsResponseSwagger.md)
- [DomainDeviceMeta](docs/Model/DomainDeviceMeta.md)
- [DomainDevicePaging](docs/Model/DomainDevicePaging.md)
- [DomainDeviceResponse](docs/Model/DomainDeviceResponse.md)
- [DomainDeviceSwagger](docs/Model/DomainDeviceSwagger.md)
- [DomainDisposition](docs/Model/DomainDisposition.md)
- [DomainECrimeKillChain](docs/Model/DomainECrimeKillChain.md)
- [DomainEntity](docs/Model/DomainEntity.md)
- [DomainEnvironmentScore](docs/Model/DomainEnvironmentScore.md)
- [DomainEventHistogram](docs/Model/DomainEventHistogram.md)
- [DomainField](docs/Model/DomainField.md)
- [DomainFieldValidation](docs/Model/DomainFieldValidation.md)
- [DomainFieldValue](docs/Model/DomainFieldValue.md)
- [DomainFile](docs/Model/DomainFile.md)
- [DomainGCPAccountV1](docs/Model/DomainGCPAccountV1.md)
- [DomainImage](docs/Model/DomainImage.md)
- [DomainIncident](docs/Model/DomainIncident.md)
- [DomainInitRequest](docs/Model/DomainInitRequest.md)
- [DomainInitResponse](docs/Model/DomainInitResponse.md)
- [DomainInitResponseWrapper](docs/Model/DomainInitResponseWrapper.md)
- [DomainKillChain](docs/Model/DomainKillChain.md)
- [DomainListFilesResponseWrapper](docs/Model/DomainListFilesResponseWrapper.md)
- [DomainListSessionsResponseMsa](docs/Model/DomainListSessionsResponseMsa.md)
- [DomainMsaDetectSummariesResponse](docs/Model/DomainMsaDetectSummariesResponse.md)
- [DomainMultiCommandExecuteResponse](docs/Model/DomainMultiCommandExecuteResponse.md)
- [DomainMultiCommandExecuteResponseWrapper](docs/Model/DomainMultiCommandExecuteResponseWrapper.md)
- [DomainMultiPulseSensorResponse](docs/Model/DomainMultiPulseSensorResponse.md)
- [DomainMultiStatusSensorResponse](docs/Model/DomainMultiStatusSensorResponse.md)
- [DomainNewsDocument](docs/Model/DomainNewsDocument.md)
- [DomainNewsResponse](docs/Model/DomainNewsResponse.md)
- [DomainPlatform](docs/Model/DomainPlatform.md)
- [DomainPolicyInfo](docs/Model/DomainPolicyInfo.md)
- [DomainPublicIndicatorV3](docs/Model/DomainPublicIndicatorV3.md)
- [DomainPublicIndicatorsV3Response](docs/Model/DomainPublicIndicatorsV3Response.md)
- [DomainQueuedSessionCommand](docs/Model/DomainQueuedSessionCommand.md)
- [DomainQueuedSessionJob](docs/Model/DomainQueuedSessionJob.md)
- [DomainQueuedSessionResponseWrapper](docs/Model/DomainQueuedSessionResponseWrapper.md)
- [DomainRoleIDs](docs/Model/DomainRoleIDs.md)
- [DomainRule](docs/Model/DomainRule.md)
- [DomainRulesResponse](docs/Model/DomainRulesResponse.md)
- [DomainSPAPIQueryVulnerabilitiesMeta](docs/Model/DomainSPAPIQueryVulnerabilitiesMeta.md)
- [DomainSPAPIQueryVulnerabilitiesPaging](docs/Model/DomainSPAPIQueryVulnerabilitiesPaging.md)
- [DomainSPAPIQueryVulnerabilitiesResponse](docs/Model/DomainSPAPIQueryVulnerabilitiesResponse.md)
- [DomainSPAPIVulnerabilitiesEntitiesResponseV2](docs/Model/DomainSPAPIVulnerabilitiesEntitiesResponseV2.md)
- [DomainScanScheduleDataV1](docs/Model/DomainScanScheduleDataV1.md)
- [DomainScriptHelp](docs/Model/DomainScriptHelp.md)
- [DomainSensorInstallerV1](docs/Model/DomainSensorInstallerV1.md)
- [DomainSensorInstallersV1](docs/Model/DomainSensorInstallersV1.md)
- [DomainSession](docs/Model/DomainSession.md)
- [DomainSessionResponseWrapper](docs/Model/DomainSessionResponseWrapper.md)
- [DomainSimpleActor](docs/Model/DomainSimpleActor.md)
- [DomainStatusResponse](docs/Model/DomainStatusResponse.md)
- [DomainStatusResponseWrapper](docs/Model/DomainStatusResponseWrapper.md)
- [DomainUpdateResults](docs/Model/DomainUpdateResults.md)
- [DomainUpdateUserFields](docs/Model/DomainUpdateUserFields.md)
- [DomainUserCreateRequest](docs/Model/DomainUserCreateRequest.md)
- [DomainUserMetaDataResponse](docs/Model/DomainUserMetaDataResponse.md)
- [DomainUserMetadata](docs/Model/DomainUserMetadata.md)
- [DomainUserRole](docs/Model/DomainUserRole.md)
- [DomainUserRoleIDsResponse](docs/Model/DomainUserRoleIDsResponse.md)
- [DomainUserRoleResponse](docs/Model/DomainUserRoleResponse.md)
- [DomainValueItem](docs/Model/DomainValueItem.md)
- [FwmgrApiAggregatesResponse](docs/Model/FwmgrApiAggregatesResponse.md)
- [FwmgrApiEventsResponse](docs/Model/FwmgrApiEventsResponse.md)
- [FwmgrApiFirewallFieldsResponse](docs/Model/FwmgrApiFirewallFieldsResponse.md)
- [FwmgrApiFirewallFieldsV1](docs/Model/FwmgrApiFirewallFieldsV1.md)
- [FwmgrApiJsonDiff](docs/Model/FwmgrApiJsonDiff.md)
- [FwmgrApiMetaInfo](docs/Model/FwmgrApiMetaInfo.md)
- [FwmgrApiPlatformsResponse](docs/Model/FwmgrApiPlatformsResponse.md)
- [FwmgrApiPolicyContainerUpsertRequestV1](docs/Model/FwmgrApiPolicyContainerUpsertRequestV1.md)
- [FwmgrApiPolicyContainersResponse](docs/Model/FwmgrApiPolicyContainersResponse.md)
- [FwmgrApiQueryPaging](docs/Model/FwmgrApiQueryPaging.md)
- [FwmgrApiQueryResponse](docs/Model/FwmgrApiQueryResponse.md)
- [FwmgrApiRuleCreateRequestV1](docs/Model/FwmgrApiRuleCreateRequestV1.md)
- [FwmgrApiRuleGroupCreateRequestV1](docs/Model/FwmgrApiRuleGroupCreateRequestV1.md)
- [FwmgrApiRuleGroupModifyRequestV1](docs/Model/FwmgrApiRuleGroupModifyRequestV1.md)
- [FwmgrApiRuleGroupV1](docs/Model/FwmgrApiRuleGroupV1.md)
- [FwmgrApiRuleGroupsResponse](docs/Model/FwmgrApiRuleGroupsResponse.md)
- [FwmgrApiRulesResponse](docs/Model/FwmgrApiRulesResponse.md)
- [FwmgrApiWorkaroundUIFieldValue](docs/Model/FwmgrApiWorkaroundUIFieldValue.md)
- [FwmgrDomainAddressRange](docs/Model/FwmgrDomainAddressRange.md)
- [FwmgrDomainField](docs/Model/FwmgrDomainField.md)
- [FwmgrDomainICMP](docs/Model/FwmgrDomainICMP.md)
- [FwmgrDomainMonitoring](docs/Model/FwmgrDomainMonitoring.md)
- [FwmgrDomainPlatform](docs/Model/FwmgrDomainPlatform.md)
- [FwmgrDomainPortRange](docs/Model/FwmgrDomainPortRange.md)
- [FwmgrDomainValueItem](docs/Model/FwmgrDomainValueItem.md)
- [FwmgrFirewallAddressRange](docs/Model/FwmgrFirewallAddressRange.md)
- [FwmgrFirewallFieldValue](docs/Model/FwmgrFirewallFieldValue.md)
- [FwmgrFirewallFlags](docs/Model/FwmgrFirewallFlags.md)
- [FwmgrFirewallICMP](docs/Model/FwmgrFirewallICMP.md)
- [FwmgrFirewallMatchEventResponse](docs/Model/FwmgrFirewallMatchEventResponse.md)
- [FwmgrFirewallMonitoring](docs/Model/FwmgrFirewallMonitoring.md)
- [FwmgrFirewallPolicyContainerV1](docs/Model/FwmgrFirewallPolicyContainerV1.md)
- [FwmgrFirewallPortRange](docs/Model/FwmgrFirewallPortRange.md)
- [FwmgrFirewallRuleGroupSummaryV1](docs/Model/FwmgrFirewallRuleGroupSummaryV1.md)
- [FwmgrFirewallRuleV1](docs/Model/FwmgrFirewallRuleV1.md)
- [FwmgrMsaAPIError](docs/Model/FwmgrMsaAPIError.md)
- [FwmgrMsaAggregateQueryRequest](docs/Model/FwmgrMsaAggregateQueryRequest.md)
- [FwmgrMsaAggregationResult](docs/Model/FwmgrMsaAggregationResult.md)
- [FwmgrMsaAggregationResultItem](docs/Model/FwmgrMsaAggregationResultItem.md)
- [FwmgrMsaDateRangeSpec](docs/Model/FwmgrMsaDateRangeSpec.md)
- [FwmgrMsaMetaInfo](docs/Model/FwmgrMsaMetaInfo.md)
- [FwmgrMsaPaging](docs/Model/FwmgrMsaPaging.md)
- [FwmgrMsaQueryResponse](docs/Model/FwmgrMsaQueryResponse.md)
- [FwmgrMsaRangeSpec](docs/Model/FwmgrMsaRangeSpec.md)
- [FwmgrMsaReplyMetaOnly](docs/Model/FwmgrMsaReplyMetaOnly.md)
- [FwmgrMsaResources](docs/Model/FwmgrMsaResources.md)
- [MainAvailableStreamV2](docs/Model/MainAvailableStreamV2.md)
- [MainDiscoveryResponseV2](docs/Model/MainDiscoveryResponseV2.md)
- [MainSessionToken](docs/Model/MainSessionToken.md)
- [ModelArgument](docs/Model/ModelArgument.md)
- [ModelFile](docs/Model/ModelFile.md)
- [ModelSessionLog](docs/Model/ModelSessionLog.md)
- [ModelsAWSAccountRequestV1](docs/Model/ModelsAWSAccountRequestV1.md)
- [ModelsAWSAccountV1](docs/Model/ModelsAWSAccountV1.md)
- [ModelsAWSAccountsV1](docs/Model/ModelsAWSAccountsV1.md)
- [ModelsAWSCustomerSettingsRequestV1](docs/Model/ModelsAWSCustomerSettingsRequestV1.md)
- [ModelsAccessHealthDetails](docs/Model/ModelsAccessHealthDetails.md)
- [ModelsAwsAccountAccessHealth](docs/Model/ModelsAwsAccountAccessHealth.md)
- [ModelsBaseResponseV1](docs/Model/ModelsBaseResponseV1.md)
- [ModelsCreateAWSAccountsV1](docs/Model/ModelsCreateAWSAccountsV1.md)
- [ModelsCustomerConfigurationsV1](docs/Model/ModelsCustomerConfigurationsV1.md)
- [ModelsModifyAWSCustomerSettingsV1](docs/Model/ModelsModifyAWSCustomerSettingsV1.md)
- [ModelsUpdateAWSAccountsV1](docs/Model/ModelsUpdateAWSAccountsV1.md)
- [ModelsVerifyAccessResponseV1](docs/Model/ModelsVerifyAccessResponseV1.md)
- [MsaAPIError](docs/Model/MsaAPIError.md)
- [MsaAffectedEntity](docs/Model/MsaAffectedEntity.md)
- [MsaAggregateQueryRequest](docs/Model/MsaAggregateQueryRequest.md)
- [MsaAggregatesResponse](docs/Model/MsaAggregatesResponse.md)
- [MsaAggregationResult](docs/Model/MsaAggregationResult.md)
- [MsaAggregationResultItem](docs/Model/MsaAggregationResultItem.md)
- [MsaDateRangeSpec](docs/Model/MsaDateRangeSpec.md)
- [MsaEntitiesResponse](docs/Model/MsaEntitiesResponse.md)
- [MsaEntityActionRequestV2](docs/Model/MsaEntityActionRequestV2.md)
- [MsaErrorsOnly](docs/Model/MsaErrorsOnly.md)
- [MsaIdsRequest](docs/Model/MsaIdsRequest.md)
- [MsaMetaInfo](docs/Model/MsaMetaInfo.md)
- [MsaPaging](docs/Model/MsaPaging.md)
- [MsaQueryResponse](docs/Model/MsaQueryResponse.md)
- [MsaRangeSpec](docs/Model/MsaRangeSpec.md)
- [MsaReplyAffectedEntities](docs/Model/MsaReplyAffectedEntities.md)
- [MsaReplyMetaOnly](docs/Model/MsaReplyMetaOnly.md)
- [MsaResources](docs/Model/MsaResources.md)
- [RegistrationAWSAccountConsoleURL](docs/Model/RegistrationAWSAccountConsoleURL.md)
- [RegistrationAWSAccountCreateRequestExtV2](docs/Model/RegistrationAWSAccountCreateRequestExtV2.md)
- [RegistrationAWSAccountExtV2](docs/Model/RegistrationAWSAccountExtV2.md)
- [RegistrationAWSAccountResponseV2](docs/Model/RegistrationAWSAccountResponseV2.md)
- [RegistrationAWSAccountScript](docs/Model/RegistrationAWSAccountScript.md)
- [RegistrationAWSProvisionGetAccountScriptResponseV2](docs/Model/RegistrationAWSProvisionGetAccountScriptResponseV2.md)
- [RegistrationAzureAccountCreateRequestExternalV1](docs/Model/RegistrationAzureAccountCreateRequestExternalV1.md)
- [RegistrationAzureAccountExternalV1](docs/Model/RegistrationAzureAccountExternalV1.md)
- [RegistrationAzureAccountResponseV1](docs/Model/RegistrationAzureAccountResponseV1.md)
- [RegistrationAzureProvisionGetUserScriptResponseV1](docs/Model/RegistrationAzureProvisionGetUserScriptResponseV1.md)
- [RegistrationAzureServicePrincipalResponseV1](docs/Model/RegistrationAzureServicePrincipalResponseV1.md)
- [RegistrationAzureUserScript](docs/Model/RegistrationAzureUserScript.md)
- [RegistrationBaseResponseV1](docs/Model/RegistrationBaseResponseV1.md)
- [RegistrationGCPAccountCreateRequestExtV1](docs/Model/RegistrationGCPAccountCreateRequestExtV1.md)
- [RegistrationGCPAccountExtV1](docs/Model/RegistrationGCPAccountExtV1.md)
- [RegistrationGCPAccountResponseV1](docs/Model/RegistrationGCPAccountResponseV1.md)
- [RegistrationGCPProvisionGetUserScriptResponseV1](docs/Model/RegistrationGCPProvisionGetUserScriptResponseV1.md)
- [RegistrationGCPUserScript](docs/Model/RegistrationGCPUserScript.md)
- [RegistrationPolicyExtV1](docs/Model/RegistrationPolicyExtV1.md)
- [RegistrationPolicyRequestExtV1](docs/Model/RegistrationPolicyRequestExtV1.md)
- [RegistrationPolicyResponseV1](docs/Model/RegistrationPolicyResponseV1.md)
- [RegistrationPolicySettingsResponseV1](docs/Model/RegistrationPolicySettingsResponseV1.md)
- [RegistrationScanScheduleResponseV1](docs/Model/RegistrationScanScheduleResponseV1.md)
- [RegistrationScanScheduleUpdateRequestV1](docs/Model/RegistrationScanScheduleUpdateRequestV1.md)
- [RequestsCreateDeviceControlPoliciesV1](docs/Model/RequestsCreateDeviceControlPoliciesV1.md)
- [RequestsCreateDeviceControlPolicyV1](docs/Model/RequestsCreateDeviceControlPolicyV1.md)
- [RequestsCreateGroupV1](docs/Model/RequestsCreateGroupV1.md)
- [RequestsCreateGroupsV1](docs/Model/RequestsCreateGroupsV1.md)
- [RequestsCreatePreventionPoliciesV1](docs/Model/RequestsCreatePreventionPoliciesV1.md)
- [RequestsCreatePreventionPolicyV1](docs/Model/RequestsCreatePreventionPolicyV1.md)
- [RequestsCreateSensorUpdatePoliciesV1](docs/Model/RequestsCreateSensorUpdatePoliciesV1.md)
- [RequestsCreateSensorUpdatePoliciesV2](docs/Model/RequestsCreateSensorUpdatePoliciesV2.md)
- [RequestsCreateSensorUpdatePolicyV1](docs/Model/RequestsCreateSensorUpdatePolicyV1.md)
- [RequestsCreateSensorUpdatePolicyV2](docs/Model/RequestsCreateSensorUpdatePolicyV2.md)
- [RequestsDeviceControlPolicyClassSettingsV1](docs/Model/RequestsDeviceControlPolicyClassSettingsV1.md)
- [RequestsDeviceControlPolicyExceptionV1](docs/Model/RequestsDeviceControlPolicyExceptionV1.md)
- [RequestsDeviceControlPolicySettingsV1](docs/Model/RequestsDeviceControlPolicySettingsV1.md)
- [RequestsIoaExclusionCreateReqV1](docs/Model/RequestsIoaExclusionCreateReqV1.md)
- [RequestsIoaExclusionUpdateReqV1](docs/Model/RequestsIoaExclusionUpdateReqV1.md)
- [RequestsMlExclusionCreateReqV1](docs/Model/RequestsMlExclusionCreateReqV1.md)
- [RequestsPreventionSettingV1](docs/Model/RequestsPreventionSettingV1.md)
- [RequestsRevealUninstallTokenV1](docs/Model/RequestsRevealUninstallTokenV1.md)
- [RequestsSensorUpdateSettingsV1](docs/Model/RequestsSensorUpdateSettingsV1.md)
- [RequestsSensorUpdateSettingsV2](docs/Model/RequestsSensorUpdateSettingsV2.md)
- [RequestsSetPolicyPrecedenceReqV1](docs/Model/RequestsSetPolicyPrecedenceReqV1.md)
- [RequestsSvExclusionCreateReqV1](docs/Model/RequestsSvExclusionCreateReqV1.md)
- [RequestsSvExclusionUpdateReqV1](docs/Model/RequestsSvExclusionUpdateReqV1.md)
- [RequestsUpdateDeviceControlPoliciesV1](docs/Model/RequestsUpdateDeviceControlPoliciesV1.md)
- [RequestsUpdateDeviceControlPolicyV1](docs/Model/RequestsUpdateDeviceControlPolicyV1.md)
- [RequestsUpdateGroupV1](docs/Model/RequestsUpdateGroupV1.md)
- [RequestsUpdateGroupsV1](docs/Model/RequestsUpdateGroupsV1.md)
- [RequestsUpdatePreventionPoliciesV1](docs/Model/RequestsUpdatePreventionPoliciesV1.md)
- [RequestsUpdatePreventionPolicyV1](docs/Model/RequestsUpdatePreventionPolicyV1.md)
- [RequestsUpdateSensorUpdatePoliciesV1](docs/Model/RequestsUpdateSensorUpdatePoliciesV1.md)
- [RequestsUpdateSensorUpdatePoliciesV2](docs/Model/RequestsUpdateSensorUpdatePoliciesV2.md)
- [RequestsUpdateSensorUpdatePolicyV1](docs/Model/RequestsUpdateSensorUpdatePolicyV1.md)
- [RequestsUpdateSensorUpdatePolicyV2](docs/Model/RequestsUpdateSensorUpdatePolicyV2.md)
- [ResponsesDeviceControlPoliciesV1](docs/Model/ResponsesDeviceControlPoliciesV1.md)
- [ResponsesDeviceControlPolicyClassSettingsV1](docs/Model/ResponsesDeviceControlPolicyClassSettingsV1.md)
- [ResponsesDeviceControlPolicyExceptionV1](docs/Model/ResponsesDeviceControlPolicyExceptionV1.md)
- [ResponsesDeviceControlPolicyV1](docs/Model/ResponsesDeviceControlPolicyV1.md)
- [ResponsesDeviceControlSettingsV1](docs/Model/ResponsesDeviceControlSettingsV1.md)
- [ResponsesHostGroupMembersV1](docs/Model/ResponsesHostGroupMembersV1.md)
- [ResponsesHostGroupV1](docs/Model/ResponsesHostGroupV1.md)
- [ResponsesHostGroupsV1](docs/Model/ResponsesHostGroupsV1.md)
- [ResponsesIoaExclusionRespV1](docs/Model/ResponsesIoaExclusionRespV1.md)
- [ResponsesIoaExclusionV1](docs/Model/ResponsesIoaExclusionV1.md)
- [ResponsesMlExclusionRespV1](docs/Model/ResponsesMlExclusionRespV1.md)
- [ResponsesMlExclusionV1](docs/Model/ResponsesMlExclusionV1.md)
- [ResponsesPolicyMembersRespV1](docs/Model/ResponsesPolicyMembersRespV1.md)
- [ResponsesPreventionCategoryV1](docs/Model/ResponsesPreventionCategoryV1.md)
- [ResponsesPreventionPoliciesV1](docs/Model/ResponsesPreventionPoliciesV1.md)
- [ResponsesPreventionPolicyV1](docs/Model/ResponsesPreventionPolicyV1.md)
- [ResponsesPreventionSettingV1](docs/Model/ResponsesPreventionSettingV1.md)
- [ResponsesRevealUninstallTokenRespV1](docs/Model/ResponsesRevealUninstallTokenRespV1.md)
- [ResponsesSensorUpdateBuildV1](docs/Model/ResponsesSensorUpdateBuildV1.md)
- [ResponsesSensorUpdateBuildsV1](docs/Model/ResponsesSensorUpdateBuildsV1.md)
- [ResponsesSensorUpdatePoliciesV1](docs/Model/ResponsesSensorUpdatePoliciesV1.md)
- [ResponsesSensorUpdatePoliciesV2](docs/Model/ResponsesSensorUpdatePoliciesV2.md)
- [ResponsesSensorUpdatePolicyV1](docs/Model/ResponsesSensorUpdatePolicyV1.md)
- [ResponsesSensorUpdatePolicyV2](docs/Model/ResponsesSensorUpdatePolicyV2.md)
- [ResponsesSensorUpdateSettingsV1](docs/Model/ResponsesSensorUpdateSettingsV1.md)
- [ResponsesSensorUpdateSettingsV2](docs/Model/ResponsesSensorUpdateSettingsV2.md)
- [ResponsesSvExclusionRespV1](docs/Model/ResponsesSvExclusionRespV1.md)
- [ResponsesSvExclusionV1](docs/Model/ResponsesSvExclusionV1.md)
- [ResponsesUninstallTokenV1](docs/Model/ResponsesUninstallTokenV1.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication


### oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **cloud-connect-aws:read**: Grants read access on cloud-connect-aws resources
    - **cloud-connect-aws:write**: Grants write access on cloud-connect-aws resources
    - **cspm-registration:read**: Grants read access on cspm-registration resources
    - **cspm-registration:write**: Grants write access on cspm-registration resources
    - **custom-ioa:read**: Grants read access on custom-ioa resources
    - **custom-ioa:write**: Grants write access on custom-ioa resources
    - **d4c-registration:read**: Grants read access on d4c-registration resources
    - **d4c-registration:write**: Grants write access on d4c-registration resources
    - **detects:read**: Grants read access on detects resources
    - **detects:write**: Grants write access on detects resources
    - **device-control-policies:read**: Grants read access on device-control-policies resources
    - **device-control-policies:write**: Grants write access on device-control-policies resources
    - **devices:read**: Grants read access on devices resources
    - **devices:write**: Grants write access on devices resources
    - **falconx-actors:read**: Grants read access on falconx-actors resources
    - **falconx-indicators:read**: Grants read access on falconx-indicators resources
    - **falconx-reports:read**: Grants read access on falconx-reports resources
    - **falconx-rules:read**: Grants read access on falconx-rules resources
    - **firewall-management:read**: Grants read access on firewall-management resources
    - **firewall-management:write**: Grants write access on firewall-management resources
    - **host-group:read**: Grants read access on host-group resources
    - **host-group:write**: Grants write access on host-group resources
    - **incidents:read**: Grants read access on incidents resources
    - **incidents:write**: Grants write access on incidents resources
    - **installation-tokens:read**: Grants read access on installation-tokens resources
    - **installation-tokens:write**: Grants write access on installation-tokens resources
    - **iocs:read**: Grants read access on iocs resources
    - **iocs:write**: Grants write access on iocs resources
    - **ml-exclusions:read**: Grants read access on ml-exclusions resources
    - **ml-exclusions:write**: Grants write access on ml-exclusions resources
    - **prevention-policies:read**: Grants read access on prevention-policies resources
    - **prevention-policies:write**: Grants write access on prevention-policies resources
    - **real-time-response-admin:write**: Grants write access on real-time-response-admin resources
    - **real-time-response:read**: Grants read access on real-time-response resources
    - **real-time-response:write**: Grants write access on real-time-response resources
    - **self-service-ioa-exclusions:read**: Grants read access on self-service-ioa-exclusions resources
    - **self-service-ioa-exclusions:write**: Grants write access on self-service-ioa-exclusions resources
    - **sensor-installers:read**: Grants read access on sensor-installers resources
    - **sensor-update-policies:read**: Grants read access on sensor-update-policies resources
    - **sensor-update-policies:write**: Grants write access on sensor-update-policies resources
    - **sensor-visibility-exclusions:read**: Grants read access on sensor-visibility-exclusions resources
    - **sensor-visibility-exclusions:write**: Grants write access on sensor-visibility-exclusions resources
    - **spotlight-vulnerabilities:read**: Grants read access on spotlight-vulnerabilities resources
    - **streaming:read**: Grants read access on streaming resources
    - **usermgmt:read**: Grants read access on usermgmt resources
    - **usermgmt:write**: Grants write access on usermgmt resources

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0-beta`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
