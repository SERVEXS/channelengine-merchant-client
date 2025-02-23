# ChannelEngine\Merchant\ApiClient\ReportsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reportCreateSettlementsReport()**](ReportsApi.md#reportCreateSettlementsReport) | **POST** /v2/reports/settlements | Creates a settlement report |
| [**reportGetReport()**](ReportsApi.md#reportGetReport) | **GET** /v2/reports/{reportId} | Gets a report |
| [**reportGetStatus()**](ReportsApi.md#reportGetStatus) | **GET** /v2/reports/{reportId}/status | Gets the status of a report |


## `reportCreateSettlementsReport()`

```php
reportCreateSettlementsReport($merchantCreateSettlementsReportRequest): \ChannelEngine\Merchant\ApiClient\Model\MerchantCreateReportResponse
```

Creates a settlement report

Creates a settlement report based on the **Settlement ID** provided (maximum 10 IDs are allowed). There are 2 types of reports: <br />**DETAILED** - a detailed report containing all transactions. <br />**CUSTOM_JSON** - a report grouped by orders, you can name the csv columns with a JSON file. This JSON file should be defined <br />in the settlement export plugin. <br /> <br />All the settlements are automatically acknowledged if that was not already the case. <br />**NB:** depending on the number of transactions within the settlement, it can take a few minutes for the report to be generated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantCreateSettlementsReportRequest = new \ChannelEngine\Merchant\ApiClient\Model\MerchantCreateSettlementsReportRequest(); // \ChannelEngine\Merchant\ApiClient\Model\MerchantCreateSettlementsReportRequest | To provide settlementIds and type of report DETAILED or CUSTOM_JSON.

try {
    $result = $apiInstance->reportCreateSettlementsReport($merchantCreateSettlementsReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportCreateSettlementsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantCreateSettlementsReportRequest** | [**\ChannelEngine\Merchant\ApiClient\Model\MerchantCreateSettlementsReportRequest**](../Model/MerchantCreateSettlementsReportRequest.md)| To provide settlementIds and type of report DETAILED or CUSTOM_JSON. | |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\MerchantCreateReportResponse**](../Model/MerchantCreateReportResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGetReport()`

```php
reportGetReport($reportId): \SplFileObject
```

Gets a report

Gets a report based on the **Report ID** provided. <br />In case of settlement reports the generated report is a CSV file with a semicolon (;) as a delimiter. <br />In case of product feeds the generated report is a JSON file. <br />If a field has a comma (,) then it is enclosed in quotes (\"\").

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportId = 'reportId_example'; // string | 

try {
    $result = $apiInstance->reportGetReport($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportGetReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportId** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGetStatus()`

```php
reportGetStatus($reportId): \ChannelEngine\Merchant\ApiClient\Model\MerchantGetReportStatusResponse
```

Gets the status of a report

Returns a report status based on the **Report ID** provided. There are four statuses: <br />**IN_PROGRESS** - the report is still being created. <br />**DONE** - the report has been created. <br />**FAILED** - the report creation failed. <br />**NOT_FOUND** - the Report ID was not found. <br /> <br />**NB:** if the status is **DONE**, the response contains a URL with a download path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChannelEngine\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new ChannelEngine\Merchant\ApiClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportId = 'reportId_example'; // string | 

try {
    $result = $apiInstance->reportGetStatus($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportGetStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportId** | **string**|  | |

### Return type

[**\ChannelEngine\Merchant\ApiClient\Model\MerchantGetReportStatusResponse**](../Model/MerchantGetReportStatusResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
