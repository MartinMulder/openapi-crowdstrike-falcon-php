# # DomainAWSAccountV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | [**\DateTime**](\DateTime.md) |  |
**deleted_at** | [**\DateTime**](\DateTime.md) |  |
**id** | **int** |  |
**updated_at** | [**\DateTime**](\DateTime.md) |  |
**account_id** | **string** | 12 digit AWS provided unique identifier for the account. | [optional]
**cid** | **string** |  | [optional]
**external_id** | **string** | ID assigned for use with cross account IAM role access. | [optional]
**iam_role_arn** | **string** | The full arn of the IAM role created in this account to control access. | [optional]
**is_master** | **bool** |  |
**organization_id** | **string** | Up to 34 character AWS provided unique identifier for the organization. | [optional]
**status** | **string** | Account registration status. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
