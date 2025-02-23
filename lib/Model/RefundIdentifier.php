<?php
/**
 * RefundIdentifier
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
 * The version of the OpenAPI document: 2.19.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * RefundIdentifier Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundIdentifier
{
    /**
     * Possible values of this enum
     */
    public const REFUND_ID = 'REFUND_ID';

    public const CHANNEL_REFUND_NO = 'CHANNEL_REFUND_NO';

    public const MERCHANT_REFUND_NO = 'MERCHANT_REFUND_NO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REFUND_ID,
            self::CHANNEL_REFUND_NO,
            self::MERCHANT_REFUND_NO
        ];
    }
}


