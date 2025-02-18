<?php
/**
 * CompetitionPricesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.19.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChannelEngine\Merchant\ApiClient\ApiException;
use ChannelEngine\Merchant\ApiClient\Configuration;
use ChannelEngine\Merchant\ApiClient\HeaderSelector;
use ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * CompetitionPricesApi Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CompetitionPricesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'competitionPricesGetBuyBoxPrices' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation competitionPricesGetBuyBoxPrices
     *
     * Gets the price from the buy box winner
     *
     * @param  int|null $channelId The id of the channel (optional)
     * @param  string[]|null $gtinList Search products by submitting a list of GTIN&#39;s. (optional) &lt;br /&gt;Max. 2000. (optional)
     * @param  string[]|null $skuList Search products by submitting a list of Sku&#39;s. (optional) &lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int|null $page The page to filter on. Starts at 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['competitionPricesGetBuyBoxPrices'] to see the possible values for this operation
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice|\ChannelEngine\Merchant\ApiClient\Model\ApiResponse
     */
    public function competitionPricesGetBuyBoxPrices($channelId = null, $gtinList = null, $skuList = null, $page = null, string $contentType = self::contentTypes['competitionPricesGetBuyBoxPrices'][0])
    {
        list($response) = $this->competitionPricesGetBuyBoxPricesWithHttpInfo($channelId, $gtinList, $skuList, $page, $contentType);
        return $response;
    }

    /**
     * Operation competitionPricesGetBuyBoxPricesWithHttpInfo
     *
     * Gets the price from the buy box winner
     *
     * @param  int|null $channelId The id of the channel (optional)
     * @param  string[]|null $gtinList Search products by submitting a list of GTIN&#39;s. (optional) &lt;br /&gt;Max. 2000. (optional)
     * @param  string[]|null $skuList Search products by submitting a list of Sku&#39;s. (optional) &lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int|null $page The page to filter on. Starts at 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['competitionPricesGetBuyBoxPrices'] to see the possible values for this operation
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice|\ChannelEngine\Merchant\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function competitionPricesGetBuyBoxPricesWithHttpInfo($channelId = null, $gtinList = null, $skuList = null, $page = null, string $contentType = self::contentTypes['competitionPricesGetBuyBoxPrices'][0])
    {
        $request = $this->competitionPricesGetBuyBoxPricesRequest($channelId, $gtinList, $skuList, $page, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\ChannelEngine\Merchant\ApiClient\Model\ApiResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ChannelEngine\Merchant\ApiClient\Model\ApiResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Merchant\ApiClient\Model\ApiResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChannelEngine\Merchant\ApiClient\Model\ApiResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation competitionPricesGetBuyBoxPricesAsync
     *
     * Gets the price from the buy box winner
     *
     * @param  int|null $channelId The id of the channel (optional)
     * @param  string[]|null $gtinList Search products by submitting a list of GTIN&#39;s. (optional) &lt;br /&gt;Max. 2000. (optional)
     * @param  string[]|null $skuList Search products by submitting a list of Sku&#39;s. (optional) &lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int|null $page The page to filter on. Starts at 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['competitionPricesGetBuyBoxPrices'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function competitionPricesGetBuyBoxPricesAsync($channelId = null, $gtinList = null, $skuList = null, $page = null, string $contentType = self::contentTypes['competitionPricesGetBuyBoxPrices'][0])
    {
        return $this->competitionPricesGetBuyBoxPricesAsyncWithHttpInfo($channelId, $gtinList, $skuList, $page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation competitionPricesGetBuyBoxPricesAsyncWithHttpInfo
     *
     * Gets the price from the buy box winner
     *
     * @param  int|null $channelId The id of the channel (optional)
     * @param  string[]|null $gtinList Search products by submitting a list of GTIN&#39;s. (optional) &lt;br /&gt;Max. 2000. (optional)
     * @param  string[]|null $skuList Search products by submitting a list of Sku&#39;s. (optional) &lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int|null $page The page to filter on. Starts at 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['competitionPricesGetBuyBoxPrices'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function competitionPricesGetBuyBoxPricesAsyncWithHttpInfo($channelId = null, $gtinList = null, $skuList = null, $page = null, string $contentType = self::contentTypes['competitionPricesGetBuyBoxPrices'][0])
    {
        $returnType = '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice';
        $request = $this->competitionPricesGetBuyBoxPricesRequest($channelId, $gtinList, $skuList, $page, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'competitionPricesGetBuyBoxPrices'
     *
     * @param  int|null $channelId The id of the channel (optional)
     * @param  string[]|null $gtinList Search products by submitting a list of GTIN&#39;s. (optional) &lt;br /&gt;Max. 2000. (optional)
     * @param  string[]|null $skuList Search products by submitting a list of Sku&#39;s. (optional) &lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int|null $page The page to filter on. Starts at 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['competitionPricesGetBuyBoxPrices'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function competitionPricesGetBuyBoxPricesRequest($channelId = null, $gtinList = null, $skuList = null, $page = null, string $contentType = self::contentTypes['competitionPricesGetBuyBoxPrices'][0])
    {






        $resourcePath = '/v2/competitionprices/buyboxprices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $channelId,
            'channelId', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $gtinList,
            'gtinList', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $skuList,
            'skuList', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $queryParams['apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
