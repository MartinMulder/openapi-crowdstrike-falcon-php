# # ResponsesDeviceControlPolicyV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_by** | **string** | The email of the user which created the policy |
**created_timestamp** | [**\DateTime**](\DateTime.md) | The time at which the policy was created |
**description** | **string** | The description of a policy. Use this field to provide a high level summary of what this policy enforces |
**enabled** | **bool** | If a policy is enabled it will be used during the course of policy evaluation |
**groups** | [**\OpenAPI\Client\Model\ResponsesHostGroupV1[]**](ResponsesHostGroupV1.md) | The groups that are currently attached to the policy |
**id** | **string** | The unique id of the policy |
**modified_by** | **string** | The email of the user which last modified the policy |
**modified_timestamp** | [**\DateTime**](\DateTime.md) | The time at which the policy was last modified |
**name** | **string** | The human readable name of the policy |
**platform_name** | **string** | The name of the platform |
**settings** | [**\OpenAPI\Client\Model\ResponsesDeviceControlSettingsV1**](ResponsesDeviceControlSettingsV1.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
