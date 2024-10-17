<?php
/**
 * ReturnByFilterIdentifier
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
 * The version of the OpenAPI document: 2.18.0
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
 * ReturnByFilterIdentifier Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnByFilterIdentifier
{
    /**
     * Possible values of this enum
     */
    public const RETURN_ID = 'RETURN_ID';

    public const CHANNEL_RETURN_NO = 'CHANNEL_RETURN_NO';

    public const MERCHANT_RETURN_NO = 'MERCHANT_RETURN_NO';

    public const ORDER_ID = 'ORDER_ID';

    public const CHANNEL_ORDER_NO = 'CHANNEL_ORDER_NO';

    public const MERCHANT_ORDER_NO = 'MERCHANT_ORDER_NO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RETURN_ID,
            self::CHANNEL_RETURN_NO,
            self::MERCHANT_RETURN_NO,
            self::ORDER_ID,
            self::CHANNEL_ORDER_NO,
            self::MERCHANT_ORDER_NO
        ];
    }
}


