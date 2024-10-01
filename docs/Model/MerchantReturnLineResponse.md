# # MerchantReturnLineResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantProductNo** | **string** | The unique product reference used by the Merchant (sku). | [optional]
**orderLine** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantOrderLineResponse**](MerchantOrderLineResponse.md) |  | [optional]
**shipmentStatus** | [**\ChannelEngine\Merchant\ApiClient\Model\ShipmentLineStatus**](ShipmentLineStatus.md) |  | [optional]
**stockLocation** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantStockLocationResponse**](MerchantStockLocationResponse.md) |  | [optional]
**quantity** | **int** | Number of items of the product in this return. |
**extraData** | **array<string,string>** | Extra data on the returnline. Each item must have an unqiue key | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
