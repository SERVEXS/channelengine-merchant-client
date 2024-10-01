<?php
/**
 * IReturn
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
 * IReturn Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IReturn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IReturn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lines' => '\ChannelEngine\Merchant\ApiClient\Model\IReturnLine[]',
        'id' => 'int',
        'status' => '\ChannelEngine\Merchant\ApiClient\Model\ModuleReturnStatus',
        'channelExportStatus' => '\ChannelEngine\Merchant\ApiClient\Model\ChannelExportStatus',
        'reason' => '\ChannelEngine\Merchant\ApiClient\Model\ModuleReturnReason',
        'merchantComment' => 'string',
        'merchantReturnNo' => 'string',
        'channelReturnNo' => 'string',
        'channelOrderNo' => 'string',
        'createdByType' => '\ChannelEngine\Merchant\ApiClient\Model\CreatedByType',
        'returnDate' => '\DateTime',
        'orderDate' => '\DateTime',
        'externalBatchNo' => 'string',
        'channelAcknowledgedDate' => '\DateTime',
        'merchantAcknowledgedDate' => '\DateTime',
        'orderId' => 'int',
        'channelId' => 'int',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'deletedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lines' => null,
        'id' => 'int32',
        'status' => null,
        'channelExportStatus' => null,
        'reason' => null,
        'merchantComment' => null,
        'merchantReturnNo' => null,
        'channelReturnNo' => null,
        'channelOrderNo' => null,
        'createdByType' => null,
        'returnDate' => 'date-time',
        'orderDate' => 'date-time',
        'externalBatchNo' => null,
        'channelAcknowledgedDate' => 'date-time',
        'merchantAcknowledgedDate' => 'date-time',
        'orderId' => 'int32',
        'channelId' => 'int32',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'deletedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lines' => true,
        'id' => false,
        'status' => false,
        'channelExportStatus' => false,
        'reason' => false,
        'merchantComment' => true,
        'merchantReturnNo' => true,
        'channelReturnNo' => true,
        'channelOrderNo' => true,
        'createdByType' => false,
        'returnDate' => false,
        'orderDate' => true,
        'externalBatchNo' => true,
        'channelAcknowledgedDate' => true,
        'merchantAcknowledgedDate' => true,
        'orderId' => false,
        'channelId' => false,
        'createdAt' => false,
        'updatedAt' => false,
        'deletedAt' => true
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
        'lines' => 'Lines',
        'id' => 'Id',
        'status' => 'Status',
        'channelExportStatus' => 'ChannelExportStatus',
        'reason' => 'Reason',
        'merchantComment' => 'MerchantComment',
        'merchantReturnNo' => 'MerchantReturnNo',
        'channelReturnNo' => 'ChannelReturnNo',
        'channelOrderNo' => 'ChannelOrderNo',
        'createdByType' => 'CreatedByType',
        'returnDate' => 'ReturnDate',
        'orderDate' => 'OrderDate',
        'externalBatchNo' => 'ExternalBatchNo',
        'channelAcknowledgedDate' => 'ChannelAcknowledgedDate',
        'merchantAcknowledgedDate' => 'MerchantAcknowledgedDate',
        'orderId' => 'OrderId',
        'channelId' => 'ChannelId',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
        'deletedAt' => 'DeletedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lines' => 'setLines',
        'id' => 'setId',
        'status' => 'setStatus',
        'channelExportStatus' => 'setChannelExportStatus',
        'reason' => 'setReason',
        'merchantComment' => 'setMerchantComment',
        'merchantReturnNo' => 'setMerchantReturnNo',
        'channelReturnNo' => 'setChannelReturnNo',
        'channelOrderNo' => 'setChannelOrderNo',
        'createdByType' => 'setCreatedByType',
        'returnDate' => 'setReturnDate',
        'orderDate' => 'setOrderDate',
        'externalBatchNo' => 'setExternalBatchNo',
        'channelAcknowledgedDate' => 'setChannelAcknowledgedDate',
        'merchantAcknowledgedDate' => 'setMerchantAcknowledgedDate',
        'orderId' => 'setOrderId',
        'channelId' => 'setChannelId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'deletedAt' => 'setDeletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lines' => 'getLines',
        'id' => 'getId',
        'status' => 'getStatus',
        'channelExportStatus' => 'getChannelExportStatus',
        'reason' => 'getReason',
        'merchantComment' => 'getMerchantComment',
        'merchantReturnNo' => 'getMerchantReturnNo',
        'channelReturnNo' => 'getChannelReturnNo',
        'channelOrderNo' => 'getChannelOrderNo',
        'createdByType' => 'getCreatedByType',
        'returnDate' => 'getReturnDate',
        'orderDate' => 'getOrderDate',
        'externalBatchNo' => 'getExternalBatchNo',
        'channelAcknowledgedDate' => 'getChannelAcknowledgedDate',
        'merchantAcknowledgedDate' => 'getMerchantAcknowledgedDate',
        'orderId' => 'getOrderId',
        'channelId' => 'getChannelId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'deletedAt' => 'getDeletedAt'
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
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('channelExportStatus', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('merchantComment', $data ?? [], null);
        $this->setIfExists('merchantReturnNo', $data ?? [], null);
        $this->setIfExists('channelReturnNo', $data ?? [], null);
        $this->setIfExists('channelOrderNo', $data ?? [], null);
        $this->setIfExists('createdByType', $data ?? [], null);
        $this->setIfExists('returnDate', $data ?? [], null);
        $this->setIfExists('orderDate', $data ?? [], null);
        $this->setIfExists('externalBatchNo', $data ?? [], null);
        $this->setIfExists('channelAcknowledgedDate', $data ?? [], null);
        $this->setIfExists('merchantAcknowledgedDate', $data ?? [], null);
        $this->setIfExists('orderId', $data ?? [], null);
        $this->setIfExists('channelId', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('deletedAt', $data ?? [], null);
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
     * Gets lines
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\IReturnLine[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\IReturnLine[]|null $lines lines
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
     * @param int|null $id id
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
     * Gets status
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ModuleReturnStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ModuleReturnStatus|null $status status
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
     * Gets channelExportStatus
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ChannelExportStatus|null
     */
    public function getChannelExportStatus()
    {
        return $this->container['channelExportStatus'];
    }

    /**
     * Sets channelExportStatus
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ChannelExportStatus|null $channelExportStatus channelExportStatus
     *
     * @return self
     */
    public function setChannelExportStatus($channelExportStatus)
    {
        if (is_null($channelExportStatus)) {
            throw new \InvalidArgumentException('non-nullable channelExportStatus cannot be null');
        }
        $this->container['channelExportStatus'] = $channelExportStatus;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ModuleReturnReason|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ModuleReturnReason|null $reason reason
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
     * @param string|null $merchantReturnNo merchantReturnNo
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
     * @param string|null $channelReturnNo channelReturnNo
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
     * @param string|null $channelOrderNo channelOrderNo
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
     * Gets createdByType
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\CreatedByType|null
     */
    public function getCreatedByType()
    {
        return $this->container['createdByType'];
    }

    /**
     * Sets createdByType
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\CreatedByType|null $createdByType createdByType
     *
     * @return self
     */
    public function setCreatedByType($createdByType)
    {
        if (is_null($createdByType)) {
            throw new \InvalidArgumentException('non-nullable createdByType cannot be null');
        }
        $this->container['createdByType'] = $createdByType;

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
     * @param \DateTime|null $returnDate returnDate
     *
     * @return self
     */
    public function setReturnDate($returnDate)
    {
        if (is_null($returnDate)) {
            throw new \InvalidArgumentException('non-nullable returnDate cannot be null');
        }
        $this->container['returnDate'] = $returnDate;

        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return \DateTime|null
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param \DateTime|null $orderDate orderDate
     *
     * @return self
     */
    public function setOrderDate($orderDate)
    {
        if (is_null($orderDate)) {
            array_push($this->openAPINullablesSetToNull, 'orderDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('orderDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * Gets externalBatchNo
     *
     * @return string|null
     */
    public function getExternalBatchNo()
    {
        return $this->container['externalBatchNo'];
    }

    /**
     * Sets externalBatchNo
     *
     * @param string|null $externalBatchNo externalBatchNo
     *
     * @return self
     */
    public function setExternalBatchNo($externalBatchNo)
    {
        if (is_null($externalBatchNo)) {
            array_push($this->openAPINullablesSetToNull, 'externalBatchNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('externalBatchNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['externalBatchNo'] = $externalBatchNo;

        return $this;
    }

    /**
     * Gets channelAcknowledgedDate
     *
     * @return \DateTime|null
     */
    public function getChannelAcknowledgedDate()
    {
        return $this->container['channelAcknowledgedDate'];
    }

    /**
     * Sets channelAcknowledgedDate
     *
     * @param \DateTime|null $channelAcknowledgedDate channelAcknowledgedDate
     *
     * @return self
     */
    public function setChannelAcknowledgedDate($channelAcknowledgedDate)
    {
        if (is_null($channelAcknowledgedDate)) {
            array_push($this->openAPINullablesSetToNull, 'channelAcknowledgedDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelAcknowledgedDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelAcknowledgedDate'] = $channelAcknowledgedDate;

        return $this;
    }

    /**
     * Gets merchantAcknowledgedDate
     *
     * @return \DateTime|null
     */
    public function getMerchantAcknowledgedDate()
    {
        return $this->container['merchantAcknowledgedDate'];
    }

    /**
     * Sets merchantAcknowledgedDate
     *
     * @param \DateTime|null $merchantAcknowledgedDate merchantAcknowledgedDate
     *
     * @return self
     */
    public function setMerchantAcknowledgedDate($merchantAcknowledgedDate)
    {
        if (is_null($merchantAcknowledgedDate)) {
            array_push($this->openAPINullablesSetToNull, 'merchantAcknowledgedDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantAcknowledgedDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantAcknowledgedDate'] = $merchantAcknowledgedDate;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param int|null $orderId orderId
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        if (is_null($orderId)) {
            throw new \InvalidArgumentException('non-nullable orderId cannot be null');
        }
        $this->container['orderId'] = $orderId;

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
            throw new \InvalidArgumentException('non-nullable channelId cannot be null');
        }
        $this->container['channelId'] = $channelId;

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
     * Gets deletedAt
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deletedAt'];
    }

    /**
     * Sets deletedAt
     *
     * @param \DateTime|null $deletedAt deletedAt
     *
     * @return self
     */
    public function setDeletedAt($deletedAt)
    {
        if (is_null($deletedAt)) {
            array_push($this->openAPINullablesSetToNull, 'deletedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deletedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deletedAt'] = $deletedAt;

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


