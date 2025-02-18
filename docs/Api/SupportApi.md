# ChannelEngine\Merchant\ApiClient\SupportApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**supportCreateTestOrders()**](SupportApi.md#supportCreateTestOrders) | **POST** /v2/supportorder |  |
| [**supportCreateTestShippingLabels()**](SupportApi.md#supportCreateTestShippingLabels) | **POST** /v2/testshippinglabel |  |


## `supportCreateTestOrders()`

```php
supportCreateTestOrders($createTestOrdersRequest)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createTestOrdersRequest = new \ChannelEngine\Merchant\ApiClient\Model\CreateTestOrdersRequest(); // \ChannelEngine\Merchant\ApiClient\Model\CreateTestOrdersRequest

try {
    $apiInstance->supportCreateTestOrders($createTestOrdersRequest);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportCreateTestOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createTestOrdersRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\CreateTestOrdersRequest**](../Model/CreateTestOrdersRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supportCreateTestShippingLabels()`

```php
supportCreateTestShippingLabels($createTestShippingLabelsRequest)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createTestShippingLabelsRequest = new \ChannelEngine\Merchant\ApiClient\Model\CreateTestShippingLabelsRequest(); // \ChannelEngine\Merchant\ApiClient\Model\CreateTestShippingLabelsRequest

try {
    $apiInstance->supportCreateTestShippingLabels($createTestShippingLabelsRequest);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportCreateTestShippingLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createTestShippingLabelsRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\CreateTestShippingLabelsRequest**](../Model/CreateTestShippingLabelsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
