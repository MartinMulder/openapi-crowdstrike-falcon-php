# # ResponsesPreventionSettingV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The human readable description of the setting | [optional]
**id** | **string** | The id of the setting |
**name** | **string** | The name of the setting |
**type** | **string** | The type of the setting which can be used as a hint when displaying in the UI |
**value** | **object** | The value for the setting. For a toggle this value will take the form {&#39;enabled&#39;:true|false}. For an mlslider this will take the form {&#39;detection&#39;:&#39;DISABLED|CAUTIOUS|MODERATE|AGGRESSIVE|EXTRA_AGGRESSIVE&#39;,&#39;prevention&#39;:&#39;DISABLED|CAUTIOUS|MODERATE|AGGRESSIVE|EXTRA_AGGRESSIVE&#39;} |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
