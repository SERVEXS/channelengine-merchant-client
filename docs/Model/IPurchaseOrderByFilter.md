# # IPurchaseOrderByFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**channelId** | **int** |  | [optional]
**channelName** | **string** |  | [optional]
**globalChannelName** | **string** |  | [optional]
**globalChannelId** | **int** |  | [optional]
**channelPurchaseOrderNo** | **string** |  | [optional]
**merchantPurchaseOrderNo** | **string** |  | [optional]
**status** | [**\ChannelEngine\Merchant\ApiClient\Model\ModulesPurchaseOrderStatus**](ModulesPurchaseOrderStatus.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]
**type** | [**\ChannelEngine\Merchant\ApiClient\Model\ModulesPurchaseOrderType**](ModulesPurchaseOrderType.md) |  | [optional]
**fromShipDate** | **\DateTime** |  | [optional]
**toShipDate** | **\DateTime** |  | [optional]
**fromDeliveryDate** | **\DateTime** |  | [optional]
**toDeliveryDate** | **\DateTime** |  | [optional]
**importInformation** | [**\ChannelEngine\Merchant\ApiClient\Model\IImportInformation**](IImportInformation.md) |  | [optional]
**sellingParty** | [**\ChannelEngine\Merchant\ApiClient\Model\IVendorParty**](IVendorParty.md) |  | [optional]
**shipToParty** | [**\ChannelEngine\Merchant\ApiClient\Model\IVendorParty**](IVendorParty.md) |  | [optional]
**buyingParty** | [**\ChannelEngine\Merchant\ApiClient\Model\IVendorParty**](IVendorParty.md) |  | [optional]
**billingParty** | [**\ChannelEngine\Merchant\ApiClient\Model\IVendorParty**](IVendorParty.md) |  | [optional]
**lines** | [**\ChannelEngine\Merchant\ApiClient\Model\IPurchaseOrderLineByFilter[]**](IPurchaseOrderLineByFilter.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
