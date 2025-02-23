<?php
/**
 * MerchantSettlementReportsResponse
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
 * MerchantSettlementReportsResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantSettlementReportsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantSettlementReportsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'settlementId' => 'int',
        'channelSettlementNo' => 'string',
        'channelId' => 'int',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'currentReserveAmount' => 'float',
        'previousReserveAmount' => 'float',
        'paymentAmount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'settlementId' => 'int32',
        'channelSettlementNo' => null,
        'channelId' => 'int32',
        'startDate' => 'date-time',
        'endDate' => 'date-time',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'currentReserveAmount' => 'decimal',
        'previousReserveAmount' => 'decimal',
        'paymentAmount' => 'decimal'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'settlementId' => false,
        'channelSettlementNo' => true,
        'channelId' => true,
        'startDate' => false,
        'endDate' => false,
        'createdAt' => false,
        'updatedAt' => false,
        'currentReserveAmount' => true,
        'previousReserveAmount' => true,
        'paymentAmount' => true
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
        'settlementId' => 'SettlementId',
        'channelSettlementNo' => 'ChannelSettlementNo',
        'channelId' => 'ChannelId',
        'startDate' => 'StartDate',
        'endDate' => 'EndDate',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
        'currentReserveAmount' => 'CurrentReserveAmount',
        'previousReserveAmount' => 'PreviousReserveAmount',
        'paymentAmount' => 'PaymentAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'settlementId' => 'setSettlementId',
        'channelSettlementNo' => 'setChannelSettlementNo',
        'channelId' => 'setChannelId',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'currentReserveAmount' => 'setCurrentReserveAmount',
        'previousReserveAmount' => 'setPreviousReserveAmount',
        'paymentAmount' => 'setPaymentAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'settlementId' => 'getSettlementId',
        'channelSettlementNo' => 'getChannelSettlementNo',
        'channelId' => 'getChannelId',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'currentReserveAmount' => 'getCurrentReserveAmount',
        'previousReserveAmount' => 'getPreviousReserveAmount',
        'paymentAmount' => 'getPaymentAmount'
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
        $this->setIfExists('settlementId', $data ?? [], null);
        $this->setIfExists('channelSettlementNo', $data ?? [], null);
        $this->setIfExists('channelId', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('currentReserveAmount', $data ?? [], null);
        $this->setIfExists('previousReserveAmount', $data ?? [], null);
        $this->setIfExists('paymentAmount', $data ?? [], null);
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
     * Gets settlementId
     *
     * @return int|null
     */
    public function getSettlementId()
    {
        return $this->container['settlementId'];
    }

    /**
     * Sets settlementId
     *
     * @param int|null $settlementId settlementId
     *
     * @return self
     */
    public function setSettlementId($settlementId)
    {
        if (is_null($settlementId)) {
            throw new \InvalidArgumentException('non-nullable settlementId cannot be null');
        }
        $this->container['settlementId'] = $settlementId;

        return $this;
    }

    /**
     * Gets channelSettlementNo
     *
     * @return string|null
     */
    public function getChannelSettlementNo()
    {
        return $this->container['channelSettlementNo'];
    }

    /**
     * Sets channelSettlementNo
     *
     * @param string|null $channelSettlementNo channelSettlementNo
     *
     * @return self
     */
    public function setChannelSettlementNo($channelSettlementNo)
    {
        if (is_null($channelSettlementNo)) {
            array_push($this->openAPINullablesSetToNull, 'channelSettlementNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelSettlementNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelSettlementNo'] = $channelSettlementNo;

        return $this;
    }

    /**
     * Gets channelId
     *
     * @return int|null
     */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
     * Sets channelId
     *
     * @param int|null $channelId channelId
     *
     * @return self
     */
    public function setChannelId($channelId)
    {
        if (is_null($channelId)) {
            array_push($this->openAPINullablesSetToNull, 'channelId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelId'] = $channelId;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate startDate
     *
     * @return self
     */
    public function setStartDate($startDate)
    {
        if (is_null($startDate)) {
            throw new \InvalidArgumentException('non-nullable startDate cannot be null');
        }
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate endDate
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        if (is_null($endDate)) {
            throw new \InvalidArgumentException('non-nullable endDate cannot be null');
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            throw new \InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets currentReserveAmount
     *
     * @return float|null
     */
    public function getCurrentReserveAmount()
    {
        return $this->container['currentReserveAmount'];
    }

    /**
     * Sets currentReserveAmount
     *
     * @param float|null $currentReserveAmount currentReserveAmount
     *
     * @return self
     */
    public function setCurrentReserveAmount($currentReserveAmount)
    {
        if (is_null($currentReserveAmount)) {
            array_push($this->openAPINullablesSetToNull, 'currentReserveAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currentReserveAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currentReserveAmount'] = $currentReserveAmount;

        return $this;
    }

    /**
     * Gets previousReserveAmount
     *
     * @return float|null
     */
    public function getPreviousReserveAmount()
    {
        return $this->container['previousReserveAmount'];
    }

    /**
     * Sets previousReserveAmount
     *
     * @param float|null $previousReserveAmount previousReserveAmount
     *
     * @return self
     */
    public function setPreviousReserveAmount($previousReserveAmount)
    {
        if (is_null($previousReserveAmount)) {
            array_push($this->openAPINullablesSetToNull, 'previousReserveAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('previousReserveAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['previousReserveAmount'] = $previousReserveAmount;

        return $this;
    }

    /**
     * Gets paymentAmount
     *
     * @return float|null
     */
    public function getPaymentAmount()
    {
        return $this->container['paymentAmount'];
    }

    /**
     * Sets paymentAmount
     *
     * @param float|null $paymentAmount paymentAmount
     *
     * @return self
     */
    public function setPaymentAmount($paymentAmount)
    {
        if (is_null($paymentAmount)) {
            array_push($this->openAPINullablesSetToNull, 'paymentAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paymentAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paymentAmount'] = $paymentAmount;

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


