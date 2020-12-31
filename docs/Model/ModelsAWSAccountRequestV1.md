# # ModelsAWSAccountRequestV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cloudtrail_bucket_owner_id** | **string** | The 12 digit AWS account which is hosting the S3 bucket containing cloudtrail logs for this account. If this field is set, it takes precedence of the settings level field. | [optional]
**cloudtrail_bucket_region** | **string** | Region where the S3 bucket containing cloudtrail logs resides. | [optional]
**external_id** | **string** | ID assigned for use with cross account IAM role access. | [optional]
**iam_role_arn** | **string** | The full arn of the IAM role created in this account to control access. | [optional]
**id** | **string** | 12 digit AWS provided unique identifier for the account. | [optional]
**rate_limit_reqs** | **int** | Rate limiting setting to control the maximum number of requests that can be made within the rate_limit_time threshold. | [optional]
**rate_limit_time** | **int** | Rate limiting setting to control the number of seconds for which rate_limit_reqs applies. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
