<?php
/**
 * WeightUnitOfMeasure
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
 * WeightUnitOfMeasure Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WeightUnitOfMeasure
{
    /**
     * Possible values of this enum
     */
    public const GRAMS = 'GRAMS';

    public const KILOGRAMS = 'KILOGRAMS';

    public const OUNCES = 'OUNCES';

    public const POUNDS = 'POUNDS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GRAMS,
            self::KILOGRAMS,
            self::OUNCES,
            self::POUNDS
        ];
    }
}


