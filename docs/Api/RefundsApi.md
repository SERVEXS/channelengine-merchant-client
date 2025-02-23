# ChannelEngine\Merchant\ApiClient\RefundsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**refundAcknowledge()**](RefundsApi.md#refundAcknowledge) | **POST** /v2.1/refunds/merchant/acknowledge | [CLOSED BETA] Acknowledge a refund |
| [**refundCreate()**](RefundsApi.md#refundCreate) | **POST** /v2.1/refunds/merchant | [CLOSED BETA] Create a refund |
| [**refundGet()**](RefundsApi.md#refundGet) | **GET** /v2.1/refunds/merchant/{identifier} | [CLOSED BETA] Get refund by identifier |
| [**refundGetByFilter()**](RefundsApi.md#refundGetByFilter) | **GET** /v2.1/refunds/merchant | [CLOSED BETA] Get refunds by filter |


## `refundAcknowledge()`

```php
refundAcknowledge($singleMerchantAcknowledgeRefundRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

[CLOSED BETA] Acknowledge a refund

Acknowledges a refund <br /> <br />Beware, this endpoint is part of a closed beta and is only available for closed beta participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantAcknowledgeRefundRequest = new \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantAcknowledgeRefundRequest(); // \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantAcknowledgeRefundRequest | The refund to acknowledge

try {
    $result = $apiInstance->refundAcknowledge($singleMerchantAcknowledgeRefundRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundAcknowledge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantAcknowledgeRefundRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\SingleMerchantAcknowledgeRefundRequest**](../Model/SingleMerchantAcknowledgeRefundRequest.md)| The refund to acknowledge | [optional] |

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

## `refundCreate()`

```php
refundCreate($singleMerchantCreateRefundRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

[CLOSED BETA] Create a refund

Creates a new refund <br /> <br />Beware, this endpoint is part of a closed beta and is only available for closed beta participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantCreateRefundRequest = new \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantCreateRefundRequest(); // \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantCreateRefundRequest | The refund

try {
    $result = $apiInstance->refundCreate($singleMerchantCreateRefundRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantCreateRefundRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\SingleMerchantCreateRefundRequest**](../Model/SingleMerchantCreateRefundRequest.md)| The refund | [optional] |

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

## `refundGet()`

```php
refundGet($identifier, $type): \ChannelEngine\Merchant\ApiClient\Model\SingleOfIRefund
```

[CLOSED BETA] Get refund by identifier

Gets a single refund by the given identifier <br /> <br />Beware, this endpoint is part of a closed beta and is only available for closed beta participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | The identifier to search for
$type = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\RefundIdentifier(); // \ChannelEngine\Merchant\ApiClient\Model\RefundIdentifier | Specify whether to search by ID, Merchant Refund No or Channel Refund No

try {
    $result = $apiInstance->refundGet($identifier, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The identifier to search for | |
| **type** | [**\ChannelEngine\Merchant\ApiClient\Model\RefundIdentifier**](../Model/.md)| Specify whether to search by ID, Merchant Refund No or Channel Refund No | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\SingleOfIRefund**](../Model/SingleOfIRefund.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundGetByFilter()`

```php
refundGetByFilter($identifiersIdentifierType, $identifiersModels, $channelExportStatusStatuses, $channelExportStatusMaxNumberOfExportAttempts, $reasons, $createdDateRangeFromDate, $createdDateRangeToDate, $channelIds, $search, $isAcknowledgedByMerchant, $isAcknowledgedByChannel, $fulfillmentType, $creatorType, $externalBatchNos, $page): \ChannelEngine\Merchant\ApiClient\Model\SingleOfIRefund
```

[CLOSED BETA] Get refunds by filter

Gets multiple refunds by the given filter <br /> <br />Beware, this endpoint is part of a closed beta and is only available for closed beta participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiersIdentifierType = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\RefundByFilterIdentifier(); // \ChannelEngine\Merchant\ApiClient\Model\RefundByFilterIdentifier | The type of identifier: which identifier to filter on
$identifiersModels = array('identifiersModels_example'); // string[] | The value (of the selected type) to filter on
$channelExportStatusStatuses = array(new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ModuleChannelExportStatus()); // \ChannelEngine\Merchant\ApiClient\Model\ModuleChannelExportStatus[]
$channelExportStatusMaxNumberOfExportAttempts = 56; // int
$reasons = array(new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\RefundReason()); // \ChannelEngine\Merchant\ApiClient\Model\RefundReason[]
$createdDateRangeFromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$createdDateRangeToDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$channelIds = array(56); // int[]
$search = 'search_example'; // string
$isAcknowledgedByMerchant = True; // bool
$isAcknowledgedByChannel = True; // bool
$fulfillmentType = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ModuleFulfillmentType(); // \ChannelEngine\Merchant\ApiClient\Model\ModuleFulfillmentType
$creatorType = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\CreatorType(); // \ChannelEngine\Merchant\ApiClient\Model\CreatorType
$externalBatchNos = array('externalBatchNos_example'); // string[]
$page = 56; // int | Page number

try {
    $result = $apiInstance->refundGetByFilter($identifiersIdentifierType, $identifiersModels, $channelExportStatusStatuses, $channelExportStatusMaxNumberOfExportAttempts, $reasons, $createdDateRangeFromDate, $createdDateRangeToDate, $channelIds, $search, $isAcknowledgedByMerchant, $isAcknowledgedByChannel, $fulfillmentType, $creatorType, $externalBatchNos, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifiersIdentifierType** | [**\ChannelEngine\Merchant\ApiClient\Model\RefundByFilterIdentifier**](../Model/.md)| The type of identifier: which identifier to filter on | [optional] |
| **identifiersModels** | [**string[]**](../Model/string.md)| The value (of the selected type) to filter on | [optional] |
| **channelExportStatusStatuses** | [**\ChannelEngine\Merchant\ApiClient\Model\ModuleChannelExportStatus[]**](../Model/\ChannelEngine\Merchant\ApiClient\Model\ModuleChannelExportStatus.md)|  | [optional] |
| **channelExportStatusMaxNumberOfExportAttempts** | **int**|  | [optional] |
| **reasons** | [**\ChannelEngine\Merchant\ApiClient\Model\RefundReason[]**](../Model/\ChannelEngine\Merchant\ApiClient\Model\RefundReason.md)|  | [optional] |
| **createdDateRangeFromDate** | **\DateTime**|  | [optional] |
| **createdDateRangeToDate** | **\DateTime**|  | [optional] |
| **channelIds** | [**int[]**](../Model/int.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **isAcknowledgedByMerchant** | **bool**|  | [optional] |
| **isAcknowledgedByChannel** | **bool**|  | [optional] |
| **fulfillmentType** | [**\ChannelEngine\Merchant\ApiClient\Model\ModuleFulfillmentType**](../Model/.md)|  | [optional] |
| **creatorType** | [**\ChannelEngine\Merchant\ApiClient\Model\CreatorType**](../Model/.md)|  | [optional] |
| **externalBatchNos** | [**string[]**](../Model/string.md)|  | [optional] |
| **page** | **int**| Page number | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\SingleOfIRefund**](../Model/SingleOfIRefund.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
