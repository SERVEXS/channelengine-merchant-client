# # MerchantProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantProductNo** | **string** | If this product is a different version of another  product (for example, all fields are the same except  size), then this field should contain  the &#39;MerchantProductNo&#39; of the parent. The parent  should already exist (or be present between the products  in the content of the API call, it does not matter whether  the parent is behind the child in the list). | [optional]
**parentMerchantProductNo2** | **string** | If this product is a different version of another  product (for example, all fields are the same except  color) and itself is a parent with child products (e.g. of sizes),  then this field should contain the &#39;MerchantProductNo&#39; of the grandparent. The grandparent  should already exist (or be present between the products  in the content of the API call, it does not matter whether  the grandparent is behind the child in the list).  When you set this field, the ParentMerchantProductNo should be left empty.                Use this field in case of three level product hierarchy,  e.g. model - color - size.  This is required for channels like Otto. | [optional]
**extraData** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantProductExtraDataItemRequest[]**](MerchantProductExtraDataItemRequest.md) | An optional list of key-value pairs containing  extra data about this product. This data can be  sent to channels or used for filtering products. | [optional]
**name** | **string** | The name of the product. | [optional]
**description** | **string** | A description of the product. Can contain these HTML tags:  div, span, pre, p, br, hr, hgroup, h1, h2, h3, h4, h5, h6, ul, ol, li, dl, dt, dd, strong, em, b, i, u, img, a, abbr, address, blockquote, area, audio, video, caption, table, tbody, td, tfoot, th, thead, tr. | [optional]
**brand** | **string** | The brand of the product. | [optional]
**size** | **string** | Optional. The size of the product (variant). E.g. fashion size (S-XL, 46-56, etc), width of the watch, etc.. | [optional]
**color** | **string** | Optional. The color of the product (variant). | [optional]
**ean** | **string** | The EAN of GTIN of the product. | [optional]
**manufacturerProductNumber** | **string** | The unique product reference used by the manufacturer/vendor of the product. | [optional]
**merchantProductNo** | **string** | A unique identifier of the product. (sku). |
**stock** | **int** | The number of items in stock. | [optional]
**price** | **float** | Price, including VAT. | [optional]
**minPrice** | **float** | Min price, including VAT. | [optional]
**maxPrice** | **float** | Max price, including VAT. | [optional]
**mSRP** | **float** | Manufacturer&#39;s suggested retail price. | [optional]
**purchasePrice** | **float** | Optional. The purchase price of the product. Useful for repricing. | [optional]
**vatRateType** | [**\ChannelEngine\Merchant\ApiClient\Model\VatRateType**](VatRateType.md) |  | [optional]
**shippingCost** | **float** | Shipping cost of the product. | [optional]
**shippingTime** | **string** | A textual representation of the shippingtime.  For example, in Dutch: &#39;Op werkdagen voor 22:00 uur besteld, morgen in huis&#39;. | [optional]
**url** | **string** | A URL pointing to the merchant&#39;s webpage  which displays this product. | [optional]
**imageUrl** | **string** | A URL at which an image of this product  can be found. | [optional]
**extraImageUrl1** | **string** | Url to an additional image of product (1). | [optional]
**extraImageUrl2** | **string** | Url to an additional image of product (2). | [optional]
**extraImageUrl3** | **string** | Url to an additional image of product (3). | [optional]
**extraImageUrl4** | **string** | Url to an additional image of product (4). | [optional]
**extraImageUrl5** | **string** | Url to an additional image of product (5). | [optional]
**extraImageUrl6** | **string** | Url to an additional image of product (6). | [optional]
**extraImageUrl7** | **string** | Url to an additional image of product (7). | [optional]
**extraImageUrl8** | **string** | Url to an additional image of product (8). | [optional]
**extraImageUrl9** | **string** | Url to an additional image of product (9). | [optional]
**isFrozen** | **bool** | Specifies whether Product is disabled on all channels. | [optional]
**categoryTrail** | **string** | The category to which this product belongs.  Please supply this field in the following format:  &#39;maincategory &gt; category &gt; subcategory&#39;  For example:  &#39;vehicles &gt; bikes &gt; mountainbike&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
