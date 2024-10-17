<?php
/**
 * MerchantCreateRefund
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

use \ArrayAccess;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * MerchantCreateRefund Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantCreateRefund implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantCreateRefund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orderIdentifier' => 'string',
        'merchantRefundNo' => 'string',
        'reason' => '\ChannelEngine\Merchant\ApiClient\Model\RefundReason',
        'merchantComment' => 'string',
        'additionalAmountInclTax' => 'float',
        'shippingAmountInclTax' => 'float',
        'refundDate' => '\DateTime',
        'extraData' => 'array<string,string>',
        'lines' => '\ChannelEngine\Merchant\ApiClient\Model\MerchantCreateRefundLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orderIdentifier' => null,
        'merchantRefundNo' => null,
        'reason' => null,
        'merchantComment' => null,
        'additionalAmountInclTax' => 'decimal',
        'shippingAmountInclTax' => 'decimal',
        'refundDate' => 'date-time',
        'extraData' => null,
        'lines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orderIdentifier' => true,
        'merchantRefundNo' => true,
        'reason' => false,
        'merchantComment' => true,
        'additionalAmountInclTax' => false,
        'shippingAmountInclTax' => false,
        'refundDate' => false,
        'extraData' => true,
        'lines' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'orderIdentifier' => 'OrderIdentifier',
        'merchantRefundNo' => 'MerchantRefundNo',
        'reason' => 'Reason',
        'merchantComment' => 'MerchantComment',
        'additionalAmountInclTax' => 'AdditionalAmountInclTax',
        'shippingAmountInclTax' => 'ShippingAmountInclTax',
        'refundDate' => 'RefundDate',
        'extraData' => 'ExtraData',
        'lines' => 'Lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderIdentifier' => 'setOrderIdentifier',
        'merchantRefundNo' => 'setMerchantRefundNo',
        'reason' => 'setReason',
        'merchantComment' => 'setMerchantComment',
        'additionalAmountInclTax' => 'setAdditionalAmountInclTax',
        'shippingAmountInclTax' => 'setShippingAmountInclTax',
        'refundDate' => 'setRefundDate',
        'extraData' => 'setExtraData',
        'lines' => 'setLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderIdentifier' => 'getOrderIdentifier',
        'merchantRefundNo' => 'getMerchantRefundNo',
        'reason' => 'getReason',
        'merchantComment' => 'getMerchantComment',
        'additionalAmountInclTax' => 'getAdditionalAmountInclTax',
        'shippingAmountInclTax' => 'getShippingAmountInclTax',
        'refundDate' => 'getRefundDate',
        'extraData' => 'getExtraData',
        'lines' => 'getLines'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('orderIdentifier', $data ?? [], null);
        $this->setIfExists('merchantRefundNo', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('merchantComment', $data ?? [], null);
        $this->setIfExists('additionalAmountInclTax', $data ?? [], null);
        $this->setIfExists('shippingAmountInclTax', $data ?? [], null);
        $this->setIfExists('refundDate', $data ?? [], null);
        $this->setIfExists('extraData', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets orderIdentifier
     *
     * @return string|null
     */
    public function getOrderIdentifier()
    {
        return $this->container['orderIdentifier'];
    }

    /**
     * Sets orderIdentifier
     *
     * @param string|null $orderIdentifier orderIdentifier
     *
     * @return self
     */
    public function setOrderIdentifier($orderIdentifier)
    {
        if (is_null($orderIdentifier)) {
            array_push($this->openAPINullablesSetToNull, 'orderIdentifier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('orderIdentifier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['orderIdentifier'] = $orderIdentifier;

        return $this;
    }

    /**
     * Gets merchantRefundNo
     *
     * @return string|null
     */
    public function getMerchantRefundNo()
    {
        return $this->container['merchantRefundNo'];
    }

    /**
     * Sets merchantRefundNo
     *
     * @param string|null $merchantRefundNo merchantRefundNo
     *
     * @return self
     */
    public function setMerchantRefundNo($merchantRefundNo)
    {
        if (is_null($merchantRefundNo)) {
            array_push($this->openAPINullablesSetToNull, 'merchantRefundNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantRefundNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantRefundNo'] = $merchantRefundNo;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\RefundReason|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\RefundReason|null $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets merchantComment
     *
     * @return string|null
     */
    public function getMerchantComment()
    {
        return $this->container['merchantComment'];
    }

    /**
     * Sets merchantComment
     *
     * @param string|null $merchantComment merchantComment
     *
     * @return self
     */
    public function setMerchantComment($merchantComment)
    {
        if (is_null($merchantComment)) {
            array_push($this->openAPINullablesSetToNull, 'merchantComment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantComment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantComment'] = $merchantComment;

        return $this;
    }

    /**
     * Gets additionalAmountInclTax
     *
     * @return float|null
     */
    public function getAdditionalAmountInclTax()
    {
        return $this->container['additionalAmountInclTax'];
    }

    /**
     * Sets additionalAmountInclTax
     *
     * @param float|null $additionalAmountInclTax additionalAmountInclTax
     *
     * @return self
     */
    public function setAdditionalAmountInclTax($additionalAmountInclTax)
    {
        if (is_null($additionalAmountInclTax)) {
            throw new \InvalidArgumentException('non-nullable additionalAmountInclTax cannot be null');
        }
        $this->container['additionalAmountInclTax'] = $additionalAmountInclTax;

        return $this;
    }

    /**
     * Gets shippingAmountInclTax
     *
     * @return float|null
     */
    public function getShippingAmountInclTax()
    {
        return $this->container['shippingAmountInclTax'];
    }

    /**
     * Sets shippingAmountInclTax
     *
     * @param float|null $shippingAmountInclTax shippingAmountInclTax
     *
     * @return self
     */
    public function setShippingAmountInclTax($shippingAmountInclTax)
    {
        if (is_null($shippingAmountInclTax)) {
            throw new \InvalidArgumentException('non-nullable shippingAmountInclTax cannot be null');
        }
        $this->container['shippingAmountInclTax'] = $shippingAmountInclTax;

        return $this;
    }

    /**
     * Gets refundDate
     *
     * @return \DateTime|null
     */
    public function getRefundDate()
    {
        return $this->container['refundDate'];
    }

    /**
     * Sets refundDate
     *
     * @param \DateTime|null $refundDate refundDate
     *
     * @return self
     */
    public function setRefundDate($refundDate)
    {
        if (is_null($refundDate)) {
            throw new \InvalidArgumentException('non-nullable refundDate cannot be null');
        }
        $this->container['refundDate'] = $refundDate;

        return $this;
    }

    /**
     * Gets extraData
     *
     * @return array<string,string>|null
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     *
     * @param array<string,string>|null $extraData extraData
     *
     * @return self
     */
    public function setExtraData($extraData)
    {
        if (is_null($extraData)) {
            array_push($this->openAPINullablesSetToNull, 'extraData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extraData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extraData'] = $extraData;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\MerchantCreateRefundLine[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\MerchantCreateRefundLine[]|null $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        if (is_null($lines)) {
            array_push($this->openAPINullablesSetToNull, 'lines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lines'] = $lines;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


