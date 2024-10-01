# ChannelEngine\Merchant\ApiClient\StockLocationsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**stockLocationCreate()**](StockLocationsApi.md#stockLocationCreate) | **POST** /v2/stocklocations | Creates a stock location |
| [**stockLocationIndex()**](StockLocationsApi.md#stockLocationIndex) | **GET** /v2/stocklocations | Gets stock locations |


## `stockLocationCreate()`

```php
stockLocationCreate($merchantStockLocationCreateRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Creates a stock location

Creates a stock location on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\StockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantStockLocationCreateRequest = new \ChannelEngine\Merchant\ApiClient\Model\MerchantStockLocationCreateRequest(); // \ChannelEngine\Merchant\ApiClient\Model\MerchantStockLocationCreateRequest

try {
    $result = $apiInstance->stockLocationCreate($merchantStockLocationCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockLocationsApi->stockLocationCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantStockLocationCreateRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantStockLocationCreateRequest**](../Model/MerchantStockLocationCreateRequest.md)|  | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockLocationIndex()`

```php
stockLocationIndex(): \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse
```

Gets stock locations

Gets the different stock locations in use. <br />**NB:** the response may include stock locations for 'marketplace fulfilment' solutions (e.g.: FBA, LVB, ZFS, etc.).<br />Use the retrieved IDs to get the stock of products in specific stock locations, such as the FBA stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\StockLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->stockLocationIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockLocationsApi->stockLocationIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantStockLocationWithCountryIsoResponse**](../Model/CollectionOfMerchantStockLocationWithCountryIsoResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
