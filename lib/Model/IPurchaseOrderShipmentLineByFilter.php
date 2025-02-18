<?php
/**
 * IPurchaseOrderShipmentLineByFilter
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

use \ArrayAccess;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * IPurchaseOrderShipmentLineByFilter Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IPurchaseOrderShipmentLineByFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IPurchaseOrderShipmentLineByFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'channelOrderNo' => 'string',
        'itemSequenceNumber' => 'string',
        'channelProductNo' => 'string',
        'merchantProductNo' => 'string',
        'quantityUnitOfMeasure' => '\ChannelEngine\Merchant\ApiClient\Model\PurchaseOrderLineUnitOfMeasure',
        'quantity' => 'int',
        'quantityUnitSize' => 'int',
        'expiryDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'channelOrderNo' => null,
        'itemSequenceNumber' => null,
        'channelProductNo' => null,
        'merchantProductNo' => null,
        'quantityUnitOfMeasure' => null,
        'quantity' => 'int32',
        'quantityUnitSize' => 'int32',
        'expiryDate' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'channelOrderNo' => true,
        'itemSequenceNumber' => true,
        'channelProductNo' => true,
        'merchantProductNo' => true,
        'quantityUnitOfMeasure' => false,
        'quantity' => false,
        'quantityUnitSize' => true,
        'expiryDate' => true
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
        'id' => 'Id',
        'channelOrderNo' => 'ChannelOrderNo',
        'itemSequenceNumber' => 'ItemSequenceNumber',
        'channelProductNo' => 'ChannelProductNo',
        'merchantProductNo' => 'MerchantProductNo',
        'quantityUnitOfMeasure' => 'QuantityUnitOfMeasure',
        'quantity' => 'Quantity',
        'quantityUnitSize' => 'QuantityUnitSize',
        'expiryDate' => 'ExpiryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'channelOrderNo' => 'setChannelOrderNo',
        'itemSequenceNumber' => 'setItemSequenceNumber',
        'channelProductNo' => 'setChannelProductNo',
        'merchantProductNo' => 'setMerchantProductNo',
        'quantityUnitOfMeasure' => 'setQuantityUnitOfMeasure',
        'quantity' => 'setQuantity',
        'quantityUnitSize' => 'setQuantityUnitSize',
        'expiryDate' => 'setExpiryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'channelOrderNo' => 'getChannelOrderNo',
        'itemSequenceNumber' => 'getItemSequenceNumber',
        'channelProductNo' => 'getChannelProductNo',
        'merchantProductNo' => 'getMerchantProductNo',
        'quantityUnitOfMeasure' => 'getQuantityUnitOfMeasure',
        'quantity' => 'getQuantity',
        'quantityUnitSize' => 'getQuantityUnitSize',
        'expiryDate' => 'getExpiryDate'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('channelOrderNo', $data ?? [], null);
        $this->setIfExists('itemSequenceNumber', $data ?? [], null);
        $this->setIfExists('channelProductNo', $data ?? [], null);
        $this->setIfExists('merchantProductNo', $data ?? [], null);
        $this->setIfExists('quantityUnitOfMeasure', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('quantityUnitSize', $data ?? [], null);
        $this->setIfExists('expiryDate', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id ChannelEngine identifier of the shipment line
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets channelOrderNo
     *
     * @return string|null
     */
    public function getChannelOrderNo()
    {
        return $this->container['channelOrderNo'];
    }

    /**
     * Sets channelOrderNo
     *
     * @param string|null $channelOrderNo The number the channel uses to identify the purchase order,  which this line (partially) ships.
     *
     * @return self
     */
    public function setChannelOrderNo($channelOrderNo)
    {
        if (is_null($channelOrderNo)) {
            array_push($this->openAPINullablesSetToNull, 'channelOrderNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelOrderNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelOrderNo'] = $channelOrderNo;

        return $this;
    }

    /**
     * Gets itemSequenceNumber
     *
     * @return string|null
     */
    public function getItemSequenceNumber()
    {
        return $this->container['itemSequenceNumber'];
    }

    /**
     * Sets itemSequenceNumber
     *
     * @param string|null $itemSequenceNumber Item sequence number for the item. The first item will be 001, the second 002, and so on.  This number is used as a reference to refer to this item from the carton or pallet level.
     *
     * @return self
     */
    public function setItemSequenceNumber($itemSequenceNumber)
    {
        if (is_null($itemSequenceNumber)) {
            array_push($this->openAPINullablesSetToNull, 'itemSequenceNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itemSequenceNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['itemSequenceNumber'] = $itemSequenceNumber;

        return $this;
    }

    /**
     * Gets channelProductNo
     *
     * @return string|null
     */
    public function getChannelProductNo()
    {
        return $this->container['channelProductNo'];
    }

    /**
     * Sets channelProductNo
     *
     * @param string|null $channelProductNo The number the channel uses to identify the product
     *
     * @return self
     */
    public function setChannelProductNo($channelProductNo)
    {
        if (is_null($channelProductNo)) {
            array_push($this->openAPINullablesSetToNull, 'channelProductNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelProductNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelProductNo'] = $channelProductNo;

        return $this;
    }

    /**
     * Gets merchantProductNo
     *
     * @return string|null
     */
    public function getMerchantProductNo()
    {
        return $this->container['merchantProductNo'];
    }

    /**
     * Sets merchantProductNo
     *
     * @param string|null $merchantProductNo The number the merchant uses to identify the product
     *
     * @return self
     */
    public function setMerchantProductNo($merchantProductNo)
    {
        if (is_null($merchantProductNo)) {
            array_push($this->openAPINullablesSetToNull, 'merchantProductNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantProductNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantProductNo'] = $merchantProductNo;

        return $this;
    }

    /**
     * Gets quantityUnitOfMeasure
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\PurchaseOrderLineUnitOfMeasure|null
     */
    public function getQuantityUnitOfMeasure()
    {
        return $this->container['quantityUnitOfMeasure'];
    }

    /**
     * Sets quantityUnitOfMeasure
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\PurchaseOrderLineUnitOfMeasure|null $quantityUnitOfMeasure quantityUnitOfMeasure
     *
     * @return self
     */
    public function setQuantityUnitOfMeasure($quantityUnitOfMeasure)
    {
        if (is_null($quantityUnitOfMeasure)) {
            throw new \InvalidArgumentException('non-nullable quantityUnitOfMeasure cannot be null');
        }
        $this->container['quantityUnitOfMeasure'] = $quantityUnitOfMeasure;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantityUnitSize
     *
     * @return int|null
     */
    public function getQuantityUnitSize()
    {
        return $this->container['quantityUnitSize'];
    }

    /**
     * Sets quantityUnitSize
     *
     * @param int|null $quantityUnitSize The case size, in the event that we ordered using cases. Otherwise, it is 1.
     *
     * @return self
     */
    public function setQuantityUnitSize($quantityUnitSize)
    {
        if (is_null($quantityUnitSize)) {
            array_push($this->openAPINullablesSetToNull, 'quantityUnitSize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('quantityUnitSize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['quantityUnitSize'] = $quantityUnitSize;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param \DateTime|null $expiryDate The date that determines the limit of consumption or use of a product.  For perishable products.
     *
     * @return self
     */
    public function setExpiryDate($expiryDate)
    {
        if (is_null($expiryDate)) {
            array_push($this->openAPINullablesSetToNull, 'expiryDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiryDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expiryDate'] = $expiryDate;

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


