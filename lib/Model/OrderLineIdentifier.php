<?php
/**
 * OrderLineIdentifier
 *
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
 * The version of the OpenAPI document: 2.17.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * OrderLineIdentifier Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderLineIdentifier
{
    /**
     * Possible values of this enum
     */
    public const ORDER_LINE_ID = 'ORDER_LINE_ID';

    public const CHANNEL_ORDER_LINE_NO = 'CHANNEL_ORDER_LINE_NO';

    public const MERCHANT_ORDER_LINE_NO = 'MERCHANT_ORDER_LINE_NO';

    public const PRODUCT_ID = 'PRODUCT_ID';

    public const PRODUCT_GTIN = 'PRODUCT_GTIN';

    public const CHANNEL_PRODUCT_NO = 'CHANNEL_PRODUCT_NO';

    public const MERCHANT_PRODUCT_NO = 'MERCHANT_PRODUCT_NO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ORDER_LINE_ID,
            self::CHANNEL_ORDER_LINE_NO,
            self::MERCHANT_ORDER_LINE_NO,
            self::PRODUCT_ID,
            self::PRODUCT_GTIN,
            self::CHANNEL_PRODUCT_NO,
            self::MERCHANT_PRODUCT_NO
        ];
    }
}


