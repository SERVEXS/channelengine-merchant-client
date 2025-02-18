# ChannelEngine\Merchant\ApiClient\ReturnsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**returnAcknowledge()**](ReturnsApi.md#returnAcknowledge) | **POST** /v2.1/returns/merchant/acknowledge | [CLOSED BETA] Acknowledge a return |
| [**returnAcknowledge_0()**](ReturnsApi.md#returnAcknowledge_0) | **POST** /v2/returns/merchant/acknowledge | Acknowledges a return |
| [**returnCreate()**](ReturnsApi.md#returnCreate) | **POST** /v2.1/returns/merchant | [CLOSED BETA] Create a return |
| [**returnDeclareForMerchant()**](ReturnsApi.md#returnDeclareForMerchant) | **POST** /v2/returns/merchant | Creates merchant return |
| [**returnGet()**](ReturnsApi.md#returnGet) | **GET** /v2.1/returns/merchant/{identifier} | [CLOSED BETA] Get return by identifier |
| [**returnGetByFilter()**](ReturnsApi.md#returnGetByFilter) | **GET** /v2.1/returns/merchant | [CLOSED BETA] Get returns by filter |
| [**returnGetByMerchantOrderNo()**](ReturnsApi.md#returnGetByMerchantOrderNo) | **GET** /v2/returns/merchant/{merchantOrderNo} | Gets a return |
| [**returnGetDeclaredByChannel()**](ReturnsApi.md#returnGetDeclaredByChannel) | **GET** /v2/returns/merchant | Gets marketplace returns |
| [**returnGetReturns()**](ReturnsApi.md#returnGetReturns) | **GET** /v2/returns | Gets returns by filter |
| [**returnGetUnhandled()**](ReturnsApi.md#returnGetUnhandled) | **GET** /v2/returns/merchant/new | Gets unhandled returns |
| [**returnHandle()**](ReturnsApi.md#returnHandle) | **POST** /v2.1/returns/merchant/handle | [CLOSED BETA] Handle a return |
| [**returnUpdateForMerchant()**](ReturnsApi.md#returnUpdateForMerchant) | **PUT** /v2/returns | Marks returns as received |


## `returnAcknowledge()`

```php
returnAcknowledge($singleMerchantAcknowledgeReturnRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

[CLOSED BETA] Acknowledge a return

Acknowledges a return <br /> <br />Beware, this endpoint is part of a closed beta and is only available for closed beta participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantAcknowledgeReturnRequest = new \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantAcknowledgeReturnRequest(); // \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantAcknowledgeReturnRequest | The return to acknowledge

try {
    $result = $apiInstance->returnAcknowledge($singleMerchantAcknowledgeReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnAcknowledge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantAcknowledgeReturnRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\SingleMerchantAcknowledgeReturnRequest**](../Model/SingleMerchantAcknowledgeReturnRequest.md)| The return to acknowledge | [optional] |

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

## `returnAcknowledge_0()`

```php
returnAcknowledge_0($merchantReturnAcknowledgeRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Acknowledges a return

Acknowledges a return based on the **Return ID** provided. <br /> <br />**NB:** by acknowledging a return, you signal that it was registered in your system. <br />You can later filter your returns on the **Is acknowledged** parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantReturnAcknowledgeRequest = new \ChannelEngine\Merchant\ApiClient\Model\MerchantReturnAcknowledgeRequest(); // \ChannelEngine\Merchant\ApiClient\Model\MerchantReturnAcknowledgeRequest

try {
    $result = $apiInstance->returnAcknowledge_0($merchantReturnAcknowledgeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnAcknowledge_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantReturnAcknowledgeRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantReturnAcknowledgeRequest**](../Model/MerchantReturnAcknowledgeRequest.md)|  | [optional] |

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

## `returnCreate()`

```php
returnCreate($singleMerchantCreateReturnRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

[CLOSED BETA] Create a return

Creates a new return <br /> <br />Beware, this endpoint is part of a closed beta and is only available for closed beta participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantCreateReturnRequest = new \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantCreateReturnRequest(); // \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantCreateReturnRequest | The return

try {
    $result = $apiInstance->returnCreate($singleMerchantCreateReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantCreateReturnRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\SingleMerchantCreateReturnRequest**](../Model/SingleMerchantCreateReturnRequest.md)| The return | [optional] |

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

## `returnDeclareForMerchant()`

```php
returnDeclareForMerchant($merchantReturnRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Creates merchant return

Marks an order as either fully or partially returned. <br /> <br />**NB:** this endpoint is used for merchant returns (i.e.: returns dealt with by the merchant).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantReturnRequest = new \ChannelEngine\Merchant\ApiClient\Model\MerchantReturnRequest(); // \ChannelEngine\Merchant\ApiClient\Model\MerchantReturnRequest

try {
    $result = $apiInstance->returnDeclareForMerchant($merchantReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnDeclareForMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantReturnRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantReturnRequest**](../Model/MerchantReturnRequest.md)|  | [optional] |

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

## `returnGet()`

```php
returnGet($identifier, $type): \ChannelEngine\Merchant\ApiClient\Model\SingleOfIReturn
```

[CLOSED BETA] Get return by identifier

Gets a single return by the given identifier <br /> <br />Beware, this endpoint is part of a closed beta and is only available for closed beta participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | The identifier to search for
$type = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ReturnIdentifier(); // \ChannelEngine\Merchant\ApiClient\Model\ReturnIdentifier | Specify whether to search by ID, Merchant Return No or Channel Return No

try {
    $result = $apiInstance->returnGet($identifier, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The identifier to search for | |
| **type** | [**\ChannelEngine\Merchant\ApiClient\Model\ReturnIdentifier**](../Model/.md)| Specify whether to search by ID, Merchant Return No or Channel Return No | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\SingleOfIReturn**](../Model/SingleOfIReturn.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnGetByFilter()`

```php
returnGetByFilter($identifiersIdentifierType, $identifiersModels, $channelExportStatusStatuses, $channelExportStatusMaxNumberOfExportAttempts, $reasons, $createdDateRangeFromDate, $createdDateRangeToDate, $statuses, $channelIds, $search, $isAcknowledgedByMerchant, $isAcknowledgedByChannel, $fulfillmentType, $creatorType, $externalBatchNos, $page): \ChannelEngine\Merchant\ApiClient\Model\SingleOfIReturn
```

[CLOSED BETA] Get returns by filter

Gets multiple returns by the given filter <br /> <br />Beware, this endpoint is part of a closed beta and is only available for closed beta participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiersIdentifierType = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ReturnByFilterIdentifier(); // \ChannelEngine\Merchant\ApiClient\Model\ReturnByFilterIdentifier | The type of identifier: which identifier to filter on
$identifiersModels = array('identifiersModels_example'); // string[] | The value (of the selected type) to filter on
$channelExportStatusStatuses = array(new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ModuleChannelExportStatus()); // \ChannelEngine\Merchant\ApiClient\Model\ModuleChannelExportStatus[]
$channelExportStatusMaxNumberOfExportAttempts = 56; // int
$reasons = array(new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ModuleReturnReason()); // \ChannelEngine\Merchant\ApiClient\Model\ModuleReturnReason[]
$createdDateRangeFromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$createdDateRangeToDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$statuses = array(new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ModuleReturnStatus()); // \ChannelEngine\Merchant\ApiClient\Model\ModuleReturnStatus[]
$channelIds = array(56); // int[]
$search = 'search_example'; // string
$isAcknowledgedByMerchant = True; // bool
$isAcknowledgedByChannel = True; // bool
$fulfillmentType = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ModuleFulfillmentType(); // \ChannelEngine\Merchant\ApiClient\Model\ModuleFulfillmentType
$creatorType = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\CreatorType(); // \ChannelEngine\Merchant\ApiClient\Model\CreatorType
$externalBatchNos = array('externalBatchNos_example'); // string[]
$page = 56; // int | Page number

try {
    $result = $apiInstance->returnGetByFilter($identifiersIdentifierType, $identifiersModels, $channelExportStatusStatuses, $channelExportStatusMaxNumberOfExportAttempts, $reasons, $createdDateRangeFromDate, $createdDateRangeToDate, $statuses, $channelIds, $search, $isAcknowledgedByMerchant, $isAcknowledgedByChannel, $fulfillmentType, $creatorType, $externalBatchNos, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifiersIdentifierType** | [**\ChannelEngine\Merchant\ApiClient\Model\ReturnByFilterIdentifier**](../Model/.md)| The type of identifier: which identifier to filter on | [optional] |
| **identifiersModels** | [**string[]**](../Model/string.md)| The value (of the selected type) to filter on | [optional] |
| **channelExportStatusStatuses** | [**\ChannelEngine\Merchant\ApiClient\Model\ModuleChannelExportStatus[]**](../Model/\ChannelEngine\Merchant\ApiClient\Model\ModuleChannelExportStatus.md)|  | [optional] |
| **channelExportStatusMaxNumberOfExportAttempts** | **int**|  | [optional] |
| **reasons** | [**\ChannelEngine\Merchant\ApiClient\Model\ModuleReturnReason[]**](../Model/\ChannelEngine\Merchant\ApiClient\Model\ModuleReturnReason.md)|  | [optional] |
| **createdDateRangeFromDate** | **\DateTime**|  | [optional] |
| **createdDateRangeToDate** | **\DateTime**|  | [optional] |
| **statuses** | [**\ChannelEngine\Merchant\ApiClient\Model\ModuleReturnStatus[]**](../Model/\ChannelEngine\Merchant\ApiClient\Model\ModuleReturnStatus.md)|  | [optional] |
| **channelIds** | [**int[]**](../Model/int.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **isAcknowledgedByMerchant** | **bool**|  | [optional] |
| **isAcknowledgedByChannel** | **bool**|  | [optional] |
| **fulfillmentType** | [**\ChannelEngine\Merchant\ApiClient\Model\ModuleFulfillmentType**](../Model/.md)|  | [optional] |
| **creatorType** | [**\ChannelEngine\Merchant\ApiClient\Model\CreatorType**](../Model/.md)|  | [optional] |
| **externalBatchNos** | [**string[]**](../Model/string.md)|  | [optional] |
| **page** | **int**| Page number | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\SingleOfIReturn**](../Model/SingleOfIReturn.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnGetByMerchantOrderNo()`

```php
returnGetByMerchantOrderNo($merchantOrderNo): \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantSingleOrderReturnResponse
```

Gets a return

Gets the returns based on the **Merchant order number** provided. <br /> <br />**NB:** this endpoint is meant for merchants. Marketplaces should use the **GET /v2/returns/channel** call instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantOrderNo = 'merchantOrderNo_example'; // string

try {
    $result = $apiInstance->returnGetByMerchantOrderNo($merchantOrderNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnGetByMerchantOrderNo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantOrderNo** | **string**|  | |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantSingleOrderReturnResponse**](../Model/CollectionOfMerchantSingleOrderReturnResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnGetDeclaredByChannel()`

```php
returnGetDeclaredByChannel($channelIds, $merchantOrderNos, $channelOrderNos, $fulfillmentType, $statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page): \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse
```

Gets marketplace returns

Gets all returns created by the marketplace. <br /> <br />**NB:** this endpoint is used for both marketplace and marketplace-fulfilled returns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelIds = array(56); // int[] | Filter on Channel IDs
$merchantOrderNos = array('merchantOrderNos_example'); // string[] | Filter on unique order reference used by the merchant.
$channelOrderNos = array('channelOrderNos_example'); // string[] | Filter on unique order reference used by the channel.
$fulfillmentType = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\FulfillmentType(); // \ChannelEngine\Merchant\ApiClient\Model\FulfillmentType | Filter on the fulfillment type of the order.
$statuses = array(new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ReturnStatus()); // \ChannelEngine\Merchant\ApiClient\Model\ReturnStatus[] | Return status(es) to filter on.
$reasons = array(new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ReturnReason()); // \ChannelEngine\Merchant\ApiClient\Model\ReturnReason[] | Return reason(s) to filter on.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter on the creation date, starting from this date. This date is inclusive.
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter on the creation date, until this date. This date is exclusive.
$isAcknowledged = True; // bool | Filters based on acknowledgements
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->returnGetDeclaredByChannel($channelIds, $merchantOrderNos, $channelOrderNos, $fulfillmentType, $statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnGetDeclaredByChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelIds** | [**int[]**](../Model/int.md)| Filter on Channel IDs | [optional] |
| **merchantOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the merchant. | [optional] |
| **channelOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the channel. | [optional] |
| **fulfillmentType** | [**\ChannelEngine\Merchant\ApiClient\Model\FulfillmentType**](../Model/.md)| Filter on the fulfillment type of the order. | [optional] |
| **statuses** | [**\ChannelEngine\Merchant\ApiClient\Model\ReturnStatus[]**](../Model/\ChannelEngine\Merchant\ApiClient\Model\ReturnStatus.md)| Return status(es) to filter on. | [optional] |
| **reasons** | [**\ChannelEngine\Merchant\ApiClient\Model\ReturnReason[]**](../Model/\ChannelEngine\Merchant\ApiClient\Model\ReturnReason.md)| Return reason(s) to filter on. | [optional] |
| **fromDate** | **\DateTime**| Filter on the creation date, starting from this date. This date is inclusive. | [optional] |
| **toDate** | **\DateTime**| Filter on the creation date, until this date. This date is exclusive. | [optional] |
| **isAcknowledged** | **bool**| Filters based on acknowledgements | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse**](../Model/CollectionOfMerchantReturnResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnGetReturns()`

```php
returnGetReturns($creatorType, $channelIds, $merchantOrderNos, $channelOrderNos, $fulfillmentType, $statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page): \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse
```

Gets returns by filter

Gets the returns based on the filter provided. <br /> <br />**NB:** this endpoint is used to retrieve all types of returns: merchant, marketplace, mixed, and marketplace-fulfilled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creatorType = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\CreatorFilter(); // \ChannelEngine\Merchant\ApiClient\Model\CreatorFilter | Filter on the return's creator. Default is MIXED.
$channelIds = array(56); // int[] | Filter on Channel IDs
$merchantOrderNos = array('merchantOrderNos_example'); // string[] | Filter on unique order reference used by the merchant.
$channelOrderNos = array('channelOrderNos_example'); // string[] | Filter on unique order reference used by the channel.
$fulfillmentType = new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\FulfillmentType(); // \ChannelEngine\Merchant\ApiClient\Model\FulfillmentType | Filter on the fulfillment type of the order.
$statuses = array(new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ReturnStatus()); // \ChannelEngine\Merchant\ApiClient\Model\ReturnStatus[] | Return status(es) to filter on.
$reasons = array(new \ChannelEngine\Merchant\ApiClient\Model\\ChannelEngine\Merchant\ApiClient\Model\ReturnReason()); // \ChannelEngine\Merchant\ApiClient\Model\ReturnReason[] | Return reason(s) to filter on.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter on the creation date, starting from this date. This date is inclusive.
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter on the creation date, until this date. This date is exclusive.
$isAcknowledged = True; // bool | Filters based on acknowledgements
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->returnGetReturns($creatorType, $channelIds, $merchantOrderNos, $channelOrderNos, $fulfillmentType, $statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnGetReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creatorType** | [**\ChannelEngine\Merchant\ApiClient\Model\CreatorFilter**](../Model/.md)| Filter on the return&#39;s creator. Default is MIXED. | [optional] |
| **channelIds** | [**int[]**](../Model/int.md)| Filter on Channel IDs | [optional] |
| **merchantOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the merchant. | [optional] |
| **channelOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the channel. | [optional] |
| **fulfillmentType** | [**\ChannelEngine\Merchant\ApiClient\Model\FulfillmentType**](../Model/.md)| Filter on the fulfillment type of the order. | [optional] |
| **statuses** | [**\ChannelEngine\Merchant\ApiClient\Model\ReturnStatus[]**](../Model/\ChannelEngine\Merchant\ApiClient\Model\ReturnStatus.md)| Return status(es) to filter on. | [optional] |
| **reasons** | [**\ChannelEngine\Merchant\ApiClient\Model\ReturnReason[]**](../Model/\ChannelEngine\Merchant\ApiClient\Model\ReturnReason.md)| Return reason(s) to filter on. | [optional] |
| **fromDate** | **\DateTime**| Filter on the creation date, starting from this date. This date is inclusive. | [optional] |
| **toDate** | **\DateTime**| Filter on the creation date, until this date. This date is exclusive. | [optional] |
| **isAcknowledged** | **bool**| Filters based on acknowledgements | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse**](../Model/CollectionOfMerchantReturnResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnGetUnhandled()`

```php
returnGetUnhandled($channelIds, $page): \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse
```

Gets unhandled returns

Gets all marketplace returns with the status **In progress**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelIds = array(56); // int[] | Filter on Channel IDs
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->returnGetUnhandled($channelIds, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnGetUnhandled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelIds** | [**int[]**](../Model/int.md)| Filter on Channel IDs | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse**](../Model/CollectionOfMerchantReturnResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnHandle()`

```php
returnHandle($singleMerchantHandleReturnRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

[CLOSED BETA] Handle a return

Handles a return <br /> <br />Beware, this endpoint is part of a closed beta and is only available for closed beta participants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantHandleReturnRequest = new \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantHandleReturnRequest(); // \ChannelEngine\Merchant\ApiClient\Model\SingleMerchantHandleReturnRequest | The return to handle

try {
    $result = $apiInstance->returnHandle($singleMerchantHandleReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnHandle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantHandleReturnRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\SingleMerchantHandleReturnRequest**](../Model/SingleMerchantHandleReturnRequest.md)| The return to handle | [optional] |

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

## `returnUpdateForMerchant()`

```php
returnUpdateForMerchant($merchantReturnUpdateRequest): \ChannelEngine\Merchant\ApiClient\Model\ApiResponse
```

Marks returns as received

Marks a return as either fully or partially received. <br /> <br />**NB:** this endpoint is used for marketplace returns, and you can only accept or reject a return once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantReturnUpdateRequest = new \ChannelEngine\Merchant\ApiClient\Model\MerchantReturnUpdateRequest(); // \ChannelEngine\Merchant\ApiClient\Model\MerchantReturnUpdateRequest

try {
    $result = $apiInstance->returnUpdateForMerchant($merchantReturnUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->returnUpdateForMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantReturnUpdateRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantReturnUpdateRequest**](../Model/MerchantReturnUpdateRequest.md)|  | [optional] |

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
