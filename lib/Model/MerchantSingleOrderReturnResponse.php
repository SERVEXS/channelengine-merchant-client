<?php
/**
 * MerchantSingleOrderReturnResponse
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

use \ArrayAccess;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * MerchantSingleOrderReturnResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantSingleOrderReturnResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantSingleOrderReturnResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantOrderNo' => 'string',
        'lines' => '\ChannelEngine\Merchant\ApiClient\Model\MerchantSingleOrderReturnLineResponse[]',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'merchantReturnNo' => 'string',
        'channelReturnNo' => 'string',
        'channelId' => 'int',
        'globalChannelId' => 'int',
        'globalChannelName' => 'string',
        'status' => '\ChannelEngine\Merchant\ApiClient\Model\ReturnStatus',
        'id' => 'int',
        'reason' => '\ChannelEngine\Merchant\ApiClient\Model\ReturnReason',
        'customerComment' => 'string',
        'merchantComment' => 'string',
        'refundInclVat' => 'float',
        'refundExclVat' => 'float',
        'returnDate' => '\DateTime',
        'extraData' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchantOrderNo' => null,
        'lines' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'merchantReturnNo' => null,
        'channelReturnNo' => null,
        'channelId' => 'int32',
        'globalChannelId' => 'int32',
        'globalChannelName' => null,
        'status' => null,
        'id' => 'int32',
        'reason' => null,
        'customerComment' => null,
        'merchantComment' => null,
        'refundInclVat' => 'decimal',
        'refundExclVat' => 'decimal',
        'returnDate' => 'date-time',
        'extraData' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'merchantOrderNo' => true,
        'lines' => true,
        'createdAt' => false,
        'updatedAt' => false,
        'merchantReturnNo' => true,
        'channelReturnNo' => true,
        'channelId' => true,
        'globalChannelId' => true,
        'globalChannelName' => true,
        'status' => false,
        'id' => false,
        'reason' => false,
        'customerComment' => true,
        'merchantComment' => true,
        'refundInclVat' => false,
        'refundExclVat' => false,
        'returnDate' => true,
        'extraData' => true
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
        'merchantOrderNo' => 'MerchantOrderNo',
        'lines' => 'Lines',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
        'merchantReturnNo' => 'MerchantReturnNo',
        'channelReturnNo' => 'ChannelReturnNo',
        'channelId' => 'ChannelId',
        'globalChannelId' => 'GlobalChannelId',
        'globalChannelName' => 'GlobalChannelName',
        'status' => 'Status',
        'id' => 'Id',
        'reason' => 'Reason',
        'customerComment' => 'CustomerComment',
        'merchantComment' => 'MerchantComment',
        'refundInclVat' => 'RefundInclVat',
        'refundExclVat' => 'RefundExclVat',
        'returnDate' => 'ReturnDate',
        'extraData' => 'ExtraData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantOrderNo' => 'setMerchantOrderNo',
        'lines' => 'setLines',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'merchantReturnNo' => 'setMerchantReturnNo',
        'channelReturnNo' => 'setChannelReturnNo',
        'channelId' => 'setChannelId',
        'globalChannelId' => 'setGlobalChannelId',
        'globalChannelName' => 'setGlobalChannelName',
        'status' => 'setStatus',
        'id' => 'setId',
        'reason' => 'setReason',
        'customerComment' => 'setCustomerComment',
        'merchantComment' => 'setMerchantComment',
        'refundInclVat' => 'setRefundInclVat',
        'refundExclVat' => 'setRefundExclVat',
        'returnDate' => 'setReturnDate',
        'extraData' => 'setExtraData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantOrderNo' => 'getMerchantOrderNo',
        'lines' => 'getLines',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'merchantReturnNo' => 'getMerchantReturnNo',
        'channelReturnNo' => 'getChannelReturnNo',
        'channelId' => 'getChannelId',
        'globalChannelId' => 'getGlobalChannelId',
        'globalChannelName' => 'getGlobalChannelName',
        'status' => 'getStatus',
        'id' => 'getId',
        'reason' => 'getReason',
        'customerComment' => 'getCustomerComment',
        'merchantComment' => 'getMerchantComment',
        'refundInclVat' => 'getRefundInclVat',
        'refundExclVat' => 'getRefundExclVat',
        'returnDate' => 'getReturnDate',
        'extraData' => 'getExtraData'
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
        $this->setIfExists('merchantOrderNo', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('merchantReturnNo', $data ?? [], null);
        $this->setIfExists('channelReturnNo', $data ?? [], null);
        $this->setIfExists('channelId', $data ?? [], null);
        $this->setIfExists('globalChannelId', $data ?? [], null);
        $this->setIfExists('globalChannelName', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('customerComment', $data ?? [], null);
        $this->setIfExists('merchantComment', $data ?? [], null);
        $this->setIfExists('refundInclVat', $data ?? [], null);
        $this->setIfExists('refundExclVat', $data ?? [], null);
        $this->setIfExists('returnDate', $data ?? [], null);
        $this->setIfExists('extraData', $data ?? [], null);
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

        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['refundInclVat']) && ($this->container['refundInclVat'] < 0)) {
            $invalidProperties[] = "invalid value for 'refundInclVat', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['refundExclVat']) && ($this->container['refundExclVat'] < 0)) {
            $invalidProperties[] = "invalid value for 'refundExclVat', must be bigger than or equal to 0.";
        }

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
     * Gets merchantOrderNo
     *
     * @return string|null
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string|null $merchantOrderNo The unique order reference used by the Merchant.
     *
     * @return self
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        if (is_null($merchantOrderNo)) {
            array_push($this->openAPINullablesSetToNull, 'merchantOrderNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantOrderNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\MerchantSingleOrderReturnLineResponse[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\MerchantSingleOrderReturnLineResponse[]|null $lines lines
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
     * @param \DateTime|null $createdAt The date at which the return was created in ChannelEngine.
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
     * @param \DateTime|null $updatedAt The date at which the return was last modified in ChannelEngine.
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
     * Gets merchantReturnNo
     *
     * @return string|null
     */
    public function getMerchantReturnNo()
    {
        return $this->container['merchantReturnNo'];
    }

    /**
     * Sets merchantReturnNo
     *
     * @param string|null $merchantReturnNo The unique return reference used by the Merchant, will be empty in case of a channel or unacknowledged return.
     *
     * @return self
     */
    public function setMerchantReturnNo($merchantReturnNo)
    {
        if (is_null($merchantReturnNo)) {
            array_push($this->openAPINullablesSetToNull, 'merchantReturnNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantReturnNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantReturnNo'] = $merchantReturnNo;

        return $this;
    }

    /**
     * Gets channelReturnNo
     *
     * @return string|null
     */
    public function getChannelReturnNo()
    {
        return $this->container['channelReturnNo'];
    }

    /**
     * Sets channelReturnNo
     *
     * @param string|null $channelReturnNo The unique return reference used by the Channel, will be empty in case of a merchant return.
     *
     * @return self
     */
    public function setChannelReturnNo($channelReturnNo)
    {
        if (is_null($channelReturnNo)) {
            array_push($this->openAPINullablesSetToNull, 'channelReturnNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelReturnNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelReturnNo'] = $channelReturnNo;

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
     * @param int|null $channelId The id of the channel.
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
     * Gets globalChannelId
     *
     * @return int|null
     */
    public function getGlobalChannelId()
    {
        return $this->container['globalChannelId'];
    }

    /**
     * Sets globalChannelId
     *
     * @param int|null $globalChannelId The id of the Global Channel.
     *
     * @return self
     */
    public function setGlobalChannelId($globalChannelId)
    {
        if (is_null($globalChannelId)) {
            array_push($this->openAPINullablesSetToNull, 'globalChannelId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('globalChannelId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['globalChannelId'] = $globalChannelId;

        return $this;
    }

    /**
     * Gets globalChannelName
     *
     * @return string|null
     */
    public function getGlobalChannelName()
    {
        return $this->container['globalChannelName'];
    }

    /**
     * Sets globalChannelName
     *
     * @param string|null $globalChannelName The name of the Global Channel.
     *
     * @return self
     */
    public function setGlobalChannelName($globalChannelName)
    {
        if (is_null($globalChannelName)) {
            array_push($this->openAPINullablesSetToNull, 'globalChannelName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('globalChannelName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['globalChannelName'] = $globalChannelName;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ReturnStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ReturnStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
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
     * @param int|null $id The unique return reference used by ChannelEngine.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ReturnReason|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ReturnReason|null $reason reason
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
     * Gets customerComment
     *
     * @return string|null
     */
    public function getCustomerComment()
    {
        return $this->container['customerComment'];
    }

    /**
     * Sets customerComment
     *
     * @param string|null $customerComment Optional. Comment of customer on the (reason of) the return.
     *
     * @return self
     */
    public function setCustomerComment($customerComment)
    {
        if (is_null($customerComment)) {
            array_push($this->openAPINullablesSetToNull, 'customerComment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customerComment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($customerComment) && (mb_strlen($customerComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling MerchantSingleOrderReturnResponse., must be smaller than or equal to 4001.');
        }
        if (!is_null($customerComment) && (mb_strlen($customerComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling MerchantSingleOrderReturnResponse., must be bigger than or equal to 0.');
        }

        $this->container['customerComment'] = $customerComment;

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
     * @param string|null $merchantComment Optional. Comment of merchant on the return.
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
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling MerchantSingleOrderReturnResponse., must be smaller than or equal to 4001.');
        }
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling MerchantSingleOrderReturnResponse., must be bigger than or equal to 0.');
        }

        $this->container['merchantComment'] = $merchantComment;

        return $this;
    }

    /**
     * Gets refundInclVat
     *
     * @return float|null
     */
    public function getRefundInclVat()
    {
        return $this->container['refundInclVat'];
    }

    /**
     * Sets refundInclVat
     *
     * @param float|null $refundInclVat Refund amount incl. VAT.
     *
     * @return self
     */
    public function setRefundInclVat($refundInclVat)
    {
        if (is_null($refundInclVat)) {
            throw new \InvalidArgumentException('non-nullable refundInclVat cannot be null');
        }

        if (($refundInclVat < 0)) {
            throw new \InvalidArgumentException('invalid value for $refundInclVat when calling MerchantSingleOrderReturnResponse., must be bigger than or equal to 0.');
        }

        $this->container['refundInclVat'] = $refundInclVat;

        return $this;
    }

    /**
     * Gets refundExclVat
     *
     * @return float|null
     */
    public function getRefundExclVat()
    {
        return $this->container['refundExclVat'];
    }

    /**
     * Sets refundExclVat
     *
     * @param float|null $refundExclVat Refund amount excl. VAT.
     *
     * @return self
     */
    public function setRefundExclVat($refundExclVat)
    {
        if (is_null($refundExclVat)) {
            throw new \InvalidArgumentException('non-nullable refundExclVat cannot be null');
        }

        if (($refundExclVat < 0)) {
            throw new \InvalidArgumentException('invalid value for $refundExclVat when calling MerchantSingleOrderReturnResponse., must be bigger than or equal to 0.');
        }

        $this->container['refundExclVat'] = $refundExclVat;

        return $this;
    }

    /**
     * Gets returnDate
     *
     * @return \DateTime|null
     */
    public function getReturnDate()
    {
        return $this->container['returnDate'];
    }

    /**
     * Sets returnDate
     *
     * @param \DateTime|null $returnDate The date at which the return was originally created in the source system (if available).
     *
     * @return self
     */
    public function setReturnDate($returnDate)
    {
        if (is_null($returnDate)) {
            array_push($this->openAPINullablesSetToNull, 'returnDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returnDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['returnDate'] = $returnDate;

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
     * @param array<string,string>|null $extraData Extra data on the return. Each item must have an unqiue key
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


