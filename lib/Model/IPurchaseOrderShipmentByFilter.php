<?php
/**
 * IPurchaseOrderShipmentByFilter
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
 * IPurchaseOrderShipmentByFilter Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IPurchaseOrderShipmentByFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IPurchaseOrderShipmentByFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'merchantShipmentNo' => 'string',
        'channelShipmentNo' => 'string',
        'shipmentType' => '\ChannelEngine\Merchant\ApiClient\Model\ShipmentType',
        'shippedDate' => '\DateTime',
        'estimatedDeliveryDate' => '\DateTime',
        'carrierName' => 'string',
        'carrierShipmentNo' => 'string',
        'billOfLadingNumber' => 'string',
        'shipmentWeightUnitOfMeasure' => '\ChannelEngine\Merchant\ApiClient\Model\WeightUnitOfMeasure',
        'shipmentWeight' => 'float',
        'shipmentVolumeUnitOfMeasure' => '\ChannelEngine\Merchant\ApiClient\Model\VolumeUnitOfMeasure',
        'shipmentVolume' => 'float',
        'lastMerchantUpdatedAt' => '\DateTime',
        'lastExportedAt' => '\DateTime',
        'lastExportStatus' => '\ChannelEngine\Merchant\ApiClient\Model\PurchaseOrderRelatedItemExportStatus',
        'lines' => '\ChannelEngine\Merchant\ApiClient\Model\IPurchaseOrderShipmentLineByFilter[]'
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
        'merchantShipmentNo' => null,
        'channelShipmentNo' => null,
        'shipmentType' => null,
        'shippedDate' => 'date-time',
        'estimatedDeliveryDate' => 'date-time',
        'carrierName' => null,
        'carrierShipmentNo' => null,
        'billOfLadingNumber' => null,
        'shipmentWeightUnitOfMeasure' => null,
        'shipmentWeight' => 'decimal',
        'shipmentVolumeUnitOfMeasure' => null,
        'shipmentVolume' => 'decimal',
        'lastMerchantUpdatedAt' => 'date-time',
        'lastExportedAt' => 'date-time',
        'lastExportStatus' => null,
        'lines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'merchantShipmentNo' => true,
        'channelShipmentNo' => true,
        'shipmentType' => false,
        'shippedDate' => false,
        'estimatedDeliveryDate' => false,
        'carrierName' => true,
        'carrierShipmentNo' => true,
        'billOfLadingNumber' => true,
        'shipmentWeightUnitOfMeasure' => false,
        'shipmentWeight' => true,
        'shipmentVolumeUnitOfMeasure' => false,
        'shipmentVolume' => true,
        'lastMerchantUpdatedAt' => false,
        'lastExportedAt' => true,
        'lastExportStatus' => false,
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
        'id' => 'Id',
        'merchantShipmentNo' => 'MerchantShipmentNo',
        'channelShipmentNo' => 'ChannelShipmentNo',
        'shipmentType' => 'ShipmentType',
        'shippedDate' => 'ShippedDate',
        'estimatedDeliveryDate' => 'EstimatedDeliveryDate',
        'carrierName' => 'CarrierName',
        'carrierShipmentNo' => 'CarrierShipmentNo',
        'billOfLadingNumber' => 'BillOfLadingNumber',
        'shipmentWeightUnitOfMeasure' => 'ShipmentWeightUnitOfMeasure',
        'shipmentWeight' => 'ShipmentWeight',
        'shipmentVolumeUnitOfMeasure' => 'ShipmentVolumeUnitOfMeasure',
        'shipmentVolume' => 'ShipmentVolume',
        'lastMerchantUpdatedAt' => 'LastMerchantUpdatedAt',
        'lastExportedAt' => 'LastExportedAt',
        'lastExportStatus' => 'LastExportStatus',
        'lines' => 'Lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'merchantShipmentNo' => 'setMerchantShipmentNo',
        'channelShipmentNo' => 'setChannelShipmentNo',
        'shipmentType' => 'setShipmentType',
        'shippedDate' => 'setShippedDate',
        'estimatedDeliveryDate' => 'setEstimatedDeliveryDate',
        'carrierName' => 'setCarrierName',
        'carrierShipmentNo' => 'setCarrierShipmentNo',
        'billOfLadingNumber' => 'setBillOfLadingNumber',
        'shipmentWeightUnitOfMeasure' => 'setShipmentWeightUnitOfMeasure',
        'shipmentWeight' => 'setShipmentWeight',
        'shipmentVolumeUnitOfMeasure' => 'setShipmentVolumeUnitOfMeasure',
        'shipmentVolume' => 'setShipmentVolume',
        'lastMerchantUpdatedAt' => 'setLastMerchantUpdatedAt',
        'lastExportedAt' => 'setLastExportedAt',
        'lastExportStatus' => 'setLastExportStatus',
        'lines' => 'setLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'merchantShipmentNo' => 'getMerchantShipmentNo',
        'channelShipmentNo' => 'getChannelShipmentNo',
        'shipmentType' => 'getShipmentType',
        'shippedDate' => 'getShippedDate',
        'estimatedDeliveryDate' => 'getEstimatedDeliveryDate',
        'carrierName' => 'getCarrierName',
        'carrierShipmentNo' => 'getCarrierShipmentNo',
        'billOfLadingNumber' => 'getBillOfLadingNumber',
        'shipmentWeightUnitOfMeasure' => 'getShipmentWeightUnitOfMeasure',
        'shipmentWeight' => 'getShipmentWeight',
        'shipmentVolumeUnitOfMeasure' => 'getShipmentVolumeUnitOfMeasure',
        'shipmentVolume' => 'getShipmentVolume',
        'lastMerchantUpdatedAt' => 'getLastMerchantUpdatedAt',
        'lastExportedAt' => 'getLastExportedAt',
        'lastExportStatus' => 'getLastExportStatus',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('merchantShipmentNo', $data ?? [], null);
        $this->setIfExists('channelShipmentNo', $data ?? [], null);
        $this->setIfExists('shipmentType', $data ?? [], null);
        $this->setIfExists('shippedDate', $data ?? [], null);
        $this->setIfExists('estimatedDeliveryDate', $data ?? [], null);
        $this->setIfExists('carrierName', $data ?? [], null);
        $this->setIfExists('carrierShipmentNo', $data ?? [], null);
        $this->setIfExists('billOfLadingNumber', $data ?? [], null);
        $this->setIfExists('shipmentWeightUnitOfMeasure', $data ?? [], null);
        $this->setIfExists('shipmentWeight', $data ?? [], null);
        $this->setIfExists('shipmentVolumeUnitOfMeasure', $data ?? [], null);
        $this->setIfExists('shipmentVolume', $data ?? [], null);
        $this->setIfExists('lastMerchantUpdatedAt', $data ?? [], null);
        $this->setIfExists('lastExportedAt', $data ?? [], null);
        $this->setIfExists('lastExportStatus', $data ?? [], null);
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
     * @param int|null $id ChannelEngine identifier of the shipment
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
     * Gets merchantShipmentNo
     *
     * @return string|null
     */
    public function getMerchantShipmentNo()
    {
        return $this->container['merchantShipmentNo'];
    }

    /**
     * Sets merchantShipmentNo
     *
     * @param string|null $merchantShipmentNo The number the merchant uses to id this PO shipment
     *
     * @return self
     */
    public function setMerchantShipmentNo($merchantShipmentNo)
    {
        if (is_null($merchantShipmentNo)) {
            array_push($this->openAPINullablesSetToNull, 'merchantShipmentNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantShipmentNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantShipmentNo'] = $merchantShipmentNo;

        return $this;
    }

    /**
     * Gets channelShipmentNo
     *
     * @return string|null
     */
    public function getChannelShipmentNo()
    {
        return $this->container['channelShipmentNo'];
    }

    /**
     * Sets channelShipmentNo
     *
     * @param string|null $channelShipmentNo The number the channel uses to id this PO shipment
     *
     * @return self
     */
    public function setChannelShipmentNo($channelShipmentNo)
    {
        if (is_null($channelShipmentNo)) {
            array_push($this->openAPINullablesSetToNull, 'channelShipmentNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelShipmentNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelShipmentNo'] = $channelShipmentNo;

        return $this;
    }

    /**
     * Gets shipmentType
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ShipmentType|null
     */
    public function getShipmentType()
    {
        return $this->container['shipmentType'];
    }

    /**
     * Sets shipmentType
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ShipmentType|null $shipmentType shipmentType
     *
     * @return self
     */
    public function setShipmentType($shipmentType)
    {
        if (is_null($shipmentType)) {
            throw new \InvalidArgumentException('non-nullable shipmentType cannot be null');
        }
        $this->container['shipmentType'] = $shipmentType;

        return $this;
    }

    /**
     * Gets shippedDate
     *
     * @return \DateTime|null
     */
    public function getShippedDate()
    {
        return $this->container['shippedDate'];
    }

    /**
     * Sets shippedDate
     *
     * @param \DateTime|null $shippedDate When the shipment was shipped
     *
     * @return self
     */
    public function setShippedDate($shippedDate)
    {
        if (is_null($shippedDate)) {
            throw new \InvalidArgumentException('non-nullable shippedDate cannot be null');
        }
        $this->container['shippedDate'] = $shippedDate;

        return $this;
    }

    /**
     * Gets estimatedDeliveryDate
     *
     * @return \DateTime|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimatedDeliveryDate'];
    }

    /**
     * Sets estimatedDeliveryDate
     *
     * @param \DateTime|null $estimatedDeliveryDate Estimated delivery time in the channel's warehouse
     *
     * @return self
     */
    public function setEstimatedDeliveryDate($estimatedDeliveryDate)
    {
        if (is_null($estimatedDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable estimatedDeliveryDate cannot be null');
        }
        $this->container['estimatedDeliveryDate'] = $estimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets carrierName
     *
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param string|null $carrierName Name of the carrier
     *
     * @return self
     */
    public function setCarrierName($carrierName)
    {
        if (is_null($carrierName)) {
            array_push($this->openAPINullablesSetToNull, 'carrierName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('carrierName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['carrierName'] = $carrierName;

        return $this;
    }

    /**
     * Gets carrierShipmentNo
     *
     * @return string|null
     */
    public function getCarrierShipmentNo()
    {
        return $this->container['carrierShipmentNo'];
    }

    /**
     * Sets carrierShipmentNo
     *
     * @param string|null $carrierShipmentNo The number the carrier uses to id this PO shipment
     *
     * @return self
     */
    public function setCarrierShipmentNo($carrierShipmentNo)
    {
        if (is_null($carrierShipmentNo)) {
            array_push($this->openAPINullablesSetToNull, 'carrierShipmentNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('carrierShipmentNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['carrierShipmentNo'] = $carrierShipmentNo;

        return $this;
    }

    /**
     * Gets billOfLadingNumber
     *
     * @return string|null
     */
    public function getBillOfLadingNumber()
    {
        return $this->container['billOfLadingNumber'];
    }

    /**
     * Sets billOfLadingNumber
     *
     * @param string|null $billOfLadingNumber Bill of Lading number (not unique for a shipment)
     *
     * @return self
     */
    public function setBillOfLadingNumber($billOfLadingNumber)
    {
        if (is_null($billOfLadingNumber)) {
            array_push($this->openAPINullablesSetToNull, 'billOfLadingNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billOfLadingNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billOfLadingNumber'] = $billOfLadingNumber;

        return $this;
    }

    /**
     * Gets shipmentWeightUnitOfMeasure
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\WeightUnitOfMeasure|null
     */
    public function getShipmentWeightUnitOfMeasure()
    {
        return $this->container['shipmentWeightUnitOfMeasure'];
    }

    /**
     * Sets shipmentWeightUnitOfMeasure
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\WeightUnitOfMeasure|null $shipmentWeightUnitOfMeasure shipmentWeightUnitOfMeasure
     *
     * @return self
     */
    public function setShipmentWeightUnitOfMeasure($shipmentWeightUnitOfMeasure)
    {
        if (is_null($shipmentWeightUnitOfMeasure)) {
            throw new \InvalidArgumentException('non-nullable shipmentWeightUnitOfMeasure cannot be null');
        }
        $this->container['shipmentWeightUnitOfMeasure'] = $shipmentWeightUnitOfMeasure;

        return $this;
    }

    /**
     * Gets shipmentWeight
     *
     * @return float|null
     */
    public function getShipmentWeight()
    {
        return $this->container['shipmentWeight'];
    }

    /**
     * Sets shipmentWeight
     *
     * @param float|null $shipmentWeight The shipment's weight
     *
     * @return self
     */
    public function setShipmentWeight($shipmentWeight)
    {
        if (is_null($shipmentWeight)) {
            array_push($this->openAPINullablesSetToNull, 'shipmentWeight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipmentWeight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipmentWeight'] = $shipmentWeight;

        return $this;
    }

    /**
     * Gets shipmentVolumeUnitOfMeasure
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\VolumeUnitOfMeasure|null
     */
    public function getShipmentVolumeUnitOfMeasure()
    {
        return $this->container['shipmentVolumeUnitOfMeasure'];
    }

    /**
     * Sets shipmentVolumeUnitOfMeasure
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\VolumeUnitOfMeasure|null $shipmentVolumeUnitOfMeasure shipmentVolumeUnitOfMeasure
     *
     * @return self
     */
    public function setShipmentVolumeUnitOfMeasure($shipmentVolumeUnitOfMeasure)
    {
        if (is_null($shipmentVolumeUnitOfMeasure)) {
            throw new \InvalidArgumentException('non-nullable shipmentVolumeUnitOfMeasure cannot be null');
        }
        $this->container['shipmentVolumeUnitOfMeasure'] = $shipmentVolumeUnitOfMeasure;

        return $this;
    }

    /**
     * Gets shipmentVolume
     *
     * @return float|null
     */
    public function getShipmentVolume()
    {
        return $this->container['shipmentVolume'];
    }

    /**
     * Sets shipmentVolume
     *
     * @param float|null $shipmentVolume The shipment's volume
     *
     * @return self
     */
    public function setShipmentVolume($shipmentVolume)
    {
        if (is_null($shipmentVolume)) {
            array_push($this->openAPINullablesSetToNull, 'shipmentVolume');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipmentVolume', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipmentVolume'] = $shipmentVolume;

        return $this;
    }

    /**
     * Gets lastMerchantUpdatedAt
     *
     * @return \DateTime|null
     */
    public function getLastMerchantUpdatedAt()
    {
        return $this->container['lastMerchantUpdatedAt'];
    }

    /**
     * Sets lastMerchantUpdatedAt
     *
     * @param \DateTime|null $lastMerchantUpdatedAt The last time the shipment was updated by the merchant
     *
     * @return self
     */
    public function setLastMerchantUpdatedAt($lastMerchantUpdatedAt)
    {
        if (is_null($lastMerchantUpdatedAt)) {
            throw new \InvalidArgumentException('non-nullable lastMerchantUpdatedAt cannot be null');
        }
        $this->container['lastMerchantUpdatedAt'] = $lastMerchantUpdatedAt;

        return $this;
    }

    /**
     * Gets lastExportedAt
     *
     * @return \DateTime|null
     */
    public function getLastExportedAt()
    {
        return $this->container['lastExportedAt'];
    }

    /**
     * Sets lastExportedAt
     *
     * @param \DateTime|null $lastExportedAt The last time the shipment was exported to the channel
     *
     * @return self
     */
    public function setLastExportedAt($lastExportedAt)
    {
        if (is_null($lastExportedAt)) {
            array_push($this->openAPINullablesSetToNull, 'lastExportedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastExportedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastExportedAt'] = $lastExportedAt;

        return $this;
    }

    /**
     * Gets lastExportStatus
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\PurchaseOrderRelatedItemExportStatus|null
     */
    public function getLastExportStatus()
    {
        return $this->container['lastExportStatus'];
    }

    /**
     * Sets lastExportStatus
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\PurchaseOrderRelatedItemExportStatus|null $lastExportStatus lastExportStatus
     *
     * @return self
     */
    public function setLastExportStatus($lastExportStatus)
    {
        if (is_null($lastExportStatus)) {
            throw new \InvalidArgumentException('non-nullable lastExportStatus cannot be null');
        }
        $this->container['lastExportStatus'] = $lastExportStatus;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\IPurchaseOrderShipmentLineByFilter[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\IPurchaseOrderShipmentLineByFilter[]|null $lines The products in this PO shipment
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


