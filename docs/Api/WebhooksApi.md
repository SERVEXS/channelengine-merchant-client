# ChannelEngine\Merchant\ApiClient\WebhooksApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhooksCreate()**](WebhooksApi.md#webhooksCreate) | **POST** /v2/webhooks | Creates a webhook or update a deleted webhook and undelete it |
| [**webhooksDelete()**](WebhooksApi.md#webhooksDelete) | **DELETE** /v2/webhooks/{webhookName} | Deletes a webhook |
| [**webhooksGetAll()**](WebhooksApi.md#webhooksGetAll) | **GET** /v2/webhooks | Gets webhooks |
| [**webhooksUpdate()**](WebhooksApi.md#webhooksUpdate) | **PUT** /v2/webhooks | Updates a webhook |


## `webhooksCreate()`

```php
webhooksCreate($merchantWebhookRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Creates a webhook or update a deleted webhook and undelete it

Creates a webhook on ChannelEngine. <br />If there is a deleted webhook with the introduced name , update it and undelete it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantWebhookRequest = new \ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest(); // \ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest

try {
    $result = $apiInstance->webhooksCreate($merchantWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantWebhookRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest**](../Model/MerchantWebhookRequest.md)|  | [optional] |

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

## `webhooksDelete()`

```php
webhooksDelete($webhookName): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Deletes a webhook

Deletes a webhook from ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookName = 'webhookName_example'; // string | The unique name of a webhook you want to delete.

try {
    $result = $apiInstance->webhooksDelete($webhookName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookName** | **string**| The unique name of a webhook you want to delete. | |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksGetAll()`

```php
webhooksGetAll(): \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantWebhookResponse
```

Gets webhooks

Gets all webhooks created on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webhooksGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantWebhookResponse**](../Model/CollectionOfMerchantWebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksUpdate()`

```php
webhooksUpdate($merchantWebhookRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Updates a webhook

Updates a webhook on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantWebhookRequest = new \ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest(); // \ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest

try {
    $result = $apiInstance->webhooksUpdate($merchantWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantWebhookRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantWebhookRequest**](../Model/MerchantWebhookRequest.md)|  | [optional] |

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
