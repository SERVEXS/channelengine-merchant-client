<?php
/**
 * ReturnHandlingAction
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
 * ReturnHandlingAction Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnHandlingAction
{
    /**
     * Possible values of this enum
     */
    public const REFUND = 'REFUND';

    public const EXCHANGE = 'EXCHANGE';

    public const REPAIR = 'REPAIR';

    public const KEEP = 'KEEP';

    public const REJECT = 'REJECT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REFUND,
            self::EXCHANGE,
            self::REPAIR,
            self::KEEP,
            self::REJECT
        ];
    }
}


