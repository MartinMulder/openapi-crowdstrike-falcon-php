# # ModelsAWSAccountV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_health** | [**\OpenAPI\Client\Model\ModelsAwsAccountAccessHealth**](ModelsAwsAccountAccessHealth.md) |  | [optional]
**alias** | **string** | Alias/Name associated with the account. This is only updated once the account is in a registered state. | [optional]
**cid** | **string** |  | [optional]
**cloudformation_stack_id** | **string** | Unique identifier for the cloudformation stack id used for provisioning. | [optional]
**cloudformation_url** | **string** | URL of the CloudFormation template to execute. This is returned when mode is to set &#39;cloudformation&#39; when provisioning. | [optional]
**cloudtrail_bucket_owner_id** | **string** | The 12 digit AWS account which is hosting the S3 bucket containing cloudtrail logs for this account. If this field is set, it takes precedence of the settings level field. | [optional]
**cloudtrail_bucket_region** | **string** | Region where the S3 bucket containing cloudtrail logs resides. This is only set if using cloudformation to provision and create the trail. | [optional]
**created_timestamp** | **string** | Timestamp of when the account was first provisioned within CrowdStrike&#39;s system.&#39; | [optional]
**external_id** | **string** | ID assigned for use with cross account IAM role access. | [optional]
**iam_role_arn** | **string** | The full arn of the IAM role created in this account to control access. | [optional]
**id** | **string** | 12 digit AWS provided unique identifier for the account. | [optional]
**last_modified_timestamp** | **string** | Timestamp of when the account was last modified. | [optional]
**last_scanned_timestamp** | **string** | Timestamp of when the account was scanned. | [optional]
**policy_version** | **string** | Current version of permissions associated with IAM role and granted access. | [optional]
**provisioning_state** | **string** | Provisioning state of the account. Values can be; initiated, registered, unregistered. | [optional]
**rate_limit_reqs** | **int** | Rate limiting setting to control the maximum number of requests that can be made within the rate_limit_time duration. | [optional]
**rate_limit_time** | **int** | Rate limiting setting to control the number of seconds for which rate_limit_reqs applies. | [optional]
**template_version** | **string** | Current version of cloudformation template used to manage access. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
