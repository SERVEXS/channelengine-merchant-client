# # MerchantCancellationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantCancellationNo** | **string** | The unique cancellation reference used by the Merchant (sku). |
**merchantOrderNo** | **string** | The unique order reference used by the Merchant. |
**lines** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantCancellationLineRequest[]**](MerchantCancellationLineRequest.md) |  |
**reason** | **string** | Reason for cancellation (text). | [optional]
**reasonCode** | [**\ChannelEngine\Merchant\ApiClient\Model\MancoReason**](MancoReason.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
