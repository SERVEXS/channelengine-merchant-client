# # UpdatePurchaseOrderShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantShipmentNo** | **string** | The number the merchant uses to identify this PO shipment | [optional]
**shipmentType** | [**\ChannelEngine\Merchant\ApiClient\Model\ShipmentType**](ShipmentType.md) |  | [optional]
**shippedDate** | **\DateTime** | When the shipment will be/was shipped | [optional]
**estimatedDeliveryDate** | **\DateTime** | Estimated delivery time in the channel&#39;s warehouse | [optional]
**sellingPartyId** | **string** | The merchant&#39;s identifying &#39;selling party number&#39; at the channel | [optional]
**shipToPartyId** | **string** | The destination&#39;s &#39;ship to party&#39; number at the channel | [optional]
**billOfLadingNumber** | **string** | Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL present in the Shipment Confirmation message ideally matches the paper BOL provided with the shipment, but that is no must. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field. | [optional]
**shipmentWeightUnitOfMeasure** | [**\ChannelEngine\Merchant\ApiClient\Model\WeightUnitOfMeasure**](WeightUnitOfMeasure.md) |  | [optional]
**shipmentWeight** | **float** | The shipment&#39;s weight | [optional]
**shipmentVolumeUnitOfMeasure** | [**\ChannelEngine\Merchant\ApiClient\Model\VolumeUnitOfMeasure**](VolumeUnitOfMeasure.md) |  | [optional]
**shipmentVolume** | **float** | The shipment&#39;s volume | [optional]
**lines** | [**\ChannelEngine\Merchant\ApiClient\Model\ChangePurchaseOrderShipmentLine[]**](ChangePurchaseOrderShipmentLine.md) | Shipment information for each shipped product | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
