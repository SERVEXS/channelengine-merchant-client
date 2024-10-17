<?php
/**
 * PurchaseOrderInvoiceTaxDetails
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
 * PurchaseOrderInvoiceTaxDetails Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PurchaseOrderInvoiceTaxDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PurchaseOrderInvoiceTaxDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'taxType' => '\ChannelEngine\Merchant\ApiClient\Model\ModulesTaxType',
        'taxRate' => 'float',
        'taxAmount' => 'float',
        'taxAmountCurrencyCode' => 'string',
        'taxableAmount' => 'float',
        'taxableAmountCurrencyCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'taxType' => null,
        'taxRate' => 'decimal',
        'taxAmount' => 'decimal',
        'taxAmountCurrencyCode' => null,
        'taxableAmount' => 'decimal',
        'taxableAmountCurrencyCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'taxType' => false,
        'taxRate' => true,
        'taxAmount' => true,
        'taxAmountCurrencyCode' => true,
        'taxableAmount' => true,
        'taxableAmountCurrencyCode' => true
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
        'taxType' => 'TaxType',
        'taxRate' => 'TaxRate',
        'taxAmount' => 'TaxAmount',
        'taxAmountCurrencyCode' => 'TaxAmountCurrencyCode',
        'taxableAmount' => 'TaxableAmount',
        'taxableAmountCurrencyCode' => 'TaxableAmountCurrencyCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'taxType' => 'setTaxType',
        'taxRate' => 'setTaxRate',
        'taxAmount' => 'setTaxAmount',
        'taxAmountCurrencyCode' => 'setTaxAmountCurrencyCode',
        'taxableAmount' => 'setTaxableAmount',
        'taxableAmountCurrencyCode' => 'setTaxableAmountCurrencyCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'taxType' => 'getTaxType',
        'taxRate' => 'getTaxRate',
        'taxAmount' => 'getTaxAmount',
        'taxAmountCurrencyCode' => 'getTaxAmountCurrencyCode',
        'taxableAmount' => 'getTaxableAmount',
        'taxableAmountCurrencyCode' => 'getTaxableAmountCurrencyCode'
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
        $this->setIfExists('taxType', $data ?? [], null);
        $this->setIfExists('taxRate', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('taxAmountCurrencyCode', $data ?? [], null);
        $this->setIfExists('taxableAmount', $data ?? [], null);
        $this->setIfExists('taxableAmountCurrencyCode', $data ?? [], null);
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
     * Gets taxType
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ModulesTaxType|null
     */
    public function getTaxType()
    {
        return $this->container['taxType'];
    }

    /**
     * Sets taxType
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ModulesTaxType|null $taxType taxType
     *
     * @return self
     */
    public function setTaxType($taxType)
    {
        if (is_null($taxType)) {
            throw new \InvalidArgumentException('non-nullable taxType cannot be null');
        }
        $this->container['taxType'] = $taxType;

        return $this;
    }

    /**
     * Gets taxRate
     *
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param float|null $taxRate taxRate
     *
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        if (is_null($taxRate)) {
            array_push($this->openAPINullablesSetToNull, 'taxRate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxRate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxRate'] = $taxRate;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return float|null
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param float|null $taxAmount taxAmount
     *
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        if (is_null($taxAmount)) {
            array_push($this->openAPINullablesSetToNull, 'taxAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets taxAmountCurrencyCode
     *
     * @return string|null
     */
    public function getTaxAmountCurrencyCode()
    {
        return $this->container['taxAmountCurrencyCode'];
    }

    /**
     * Sets taxAmountCurrencyCode
     *
     * @param string|null $taxAmountCurrencyCode taxAmountCurrencyCode
     *
     * @return self
     */
    public function setTaxAmountCurrencyCode($taxAmountCurrencyCode)
    {
        if (is_null($taxAmountCurrencyCode)) {
            array_push($this->openAPINullablesSetToNull, 'taxAmountCurrencyCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxAmountCurrencyCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxAmountCurrencyCode'] = $taxAmountCurrencyCode;

        return $this;
    }

    /**
     * Gets taxableAmount
     *
     * @return float|null
     */
    public function getTaxableAmount()
    {
        return $this->container['taxableAmount'];
    }

    /**
     * Sets taxableAmount
     *
     * @param float|null $taxableAmount taxableAmount
     *
     * @return self
     */
    public function setTaxableAmount($taxableAmount)
    {
        if (is_null($taxableAmount)) {
            array_push($this->openAPINullablesSetToNull, 'taxableAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxableAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxableAmount'] = $taxableAmount;

        return $this;
    }

    /**
     * Gets taxableAmountCurrencyCode
     *
     * @return string|null
     */
    public function getTaxableAmountCurrencyCode()
    {
        return $this->container['taxableAmountCurrencyCode'];
    }

    /**
     * Sets taxableAmountCurrencyCode
     *
     * @param string|null $taxableAmountCurrencyCode taxableAmountCurrencyCode
     *
     * @return self
     */
    public function setTaxableAmountCurrencyCode($taxableAmountCurrencyCode)
    {
        if (is_null($taxableAmountCurrencyCode)) {
            array_push($this->openAPINullablesSetToNull, 'taxableAmountCurrencyCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxableAmountCurrencyCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxableAmountCurrencyCode'] = $taxableAmountCurrencyCode;

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


