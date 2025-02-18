<?php
/**
 * PurchaseOrderShipmentIdentifierTypeValue
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
 * PurchaseOrderShipmentIdentifierTypeValue Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PurchaseOrderShipmentIdentifierTypeValue
{
    /**
     * Possible values of this enum
     */
    public const MERCHANT_SHIPMENT_NO = 'MERCHANT_SHIPMENT_NO';

    public const CHANNEL_PURCHASE_ORDER_NO = 'CHANNEL_PURCHASE_ORDER_NO';

    public const MERCHANT_PURCHASE_ORDER_NO = 'MERCHANT_PURCHASE_ORDER_NO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MERCHANT_SHIPMENT_NO,
            self::CHANNEL_PURCHASE_ORDER_NO,
            self::MERCHANT_PURCHASE_ORDER_NO
        ];
    }
}


