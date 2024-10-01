<?php
/**
 * OrderStatusView
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
 * OrderStatusView Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderStatusView
{
    /**
     * Possible values of this enum
     */
    public const IN_PROGRESS = 'IN_PROGRESS';

    public const SHIPPED = 'SHIPPED';

    public const IN_BACKORDER = 'IN_BACKORDER';

    public const MANCO = 'MANCO';

    public const CANCELED = 'CANCELED';

    public const IN_COMBI = 'IN_COMBI';

    public const CLOSED = 'CLOSED';

    public const _NEW = 'NEW';

    public const RETURNED = 'RETURNED';

    public const REQUIRES_CORRECTION = 'REQUIRES_CORRECTION';

    public const AWAITING_PAYMENT = 'AWAITING_PAYMENT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_PROGRESS,
            self::SHIPPED,
            self::IN_BACKORDER,
            self::MANCO,
            self::CANCELED,
            self::IN_COMBI,
            self::CLOSED,
            self::_NEW,
            self::RETURNED,
            self::REQUIRES_CORRECTION,
            self::AWAITING_PAYMENT
        ];
    }
}


