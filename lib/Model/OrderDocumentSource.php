<?php
/**
 * OrderDocumentSource
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
 * OrderDocumentSource Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderDocumentSource
{
    /**
     * Possible values of this enum
     */
    public const UPLOADED_BY_MERCHANT = 'UPLOADED_BY_MERCHANT';

    public const GENERATED_BY_CHANNEL_ENGINE = 'GENERATED_BY_CHANNEL_ENGINE';

    public const IMPORTED_FROM_MARKETPLACE = 'IMPORTED_FROM_MARKETPLACE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UPLOADED_BY_MERCHANT,
            self::GENERATED_BY_CHANNEL_ENGINE,
            self::IMPORTED_FROM_MARKETPLACE
        ];
    }
}


