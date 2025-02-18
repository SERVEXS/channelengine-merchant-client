<?php
/**
 * FulfillmentType
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
 * FulfillmentType Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentType
{
    /**
     * Possible values of this enum
     */
    public const ALL = 'ALL';

    public const ONLY_MERCHANT = 'ONLY_MERCHANT';

    public const ONLY_CHANNEL = 'ONLY_CHANNEL';

    public const MIXED = 'MIXED';

    public const INCLUDES_MERCHANT = 'INCLUDES_MERCHANT';

    public const INCLUDES_CHANNEL = 'INCLUDES_CHANNEL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::ONLY_MERCHANT,
            self::ONLY_CHANNEL,
            self::MIXED,
            self::INCLUDES_MERCHANT,
            self::INCLUDES_CHANNEL
        ];
    }
}


