# ChannelEngine\Merchant\ApiClient\SettingsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**settingsGet()**](SettingsApi.md#settingsGet) | **GET** /v2/settings | Gets settings |


## `settingsGet()`

```php
settingsGet(): \ChannelEngine\Merchant\ApiClient\Model\SingleOfMerchantSettingsResponse
```

Gets settings

Gets the tenant details, settings, and tax number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->settingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\SingleOfMerchantSettingsResponse**](../Model/SingleOfMerchantSettingsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
