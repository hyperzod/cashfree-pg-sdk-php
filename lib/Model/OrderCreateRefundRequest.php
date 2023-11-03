<?php
/**
 * OrderCreateRefundRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cashfree Payment Gateway APIs
 *
 * Cashfree's Payment Gateway APIs provide developers with a streamlined pathway to integrate advanced payment processing capabilities into their applications, platforms and websites.
 *
 * The version of the OpenAPI document: 2022-09-01
 * Contact: developers@cashfree.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cashfree\Model;

use \ArrayAccess;
use \Cashfree\ObjectSerializer;

/**
 * OrderCreateRefundRequest Class Doc Comment
 *
 * @category Class
 * @description create refund request object
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderCreateRefundRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderCreateRefundRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'refund_amount' => 'float',
        'refund_id' => 'string',
        'refund_note' => 'string',
        'refund_speed' => 'string',
        'refund_splits' => '\Cashfree\Model\VendorSplit[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'refund_amount' => 'double',
        'refund_id' => null,
        'refund_note' => null,
        'refund_speed' => null,
        'refund_splits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'refund_amount' => false,
		'refund_id' => false,
		'refund_note' => false,
		'refund_speed' => false,
		'refund_splits' => false
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
        'refund_amount' => 'refund_amount',
        'refund_id' => 'refund_id',
        'refund_note' => 'refund_note',
        'refund_speed' => 'refund_speed',
        'refund_splits' => 'refund_splits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'refund_amount' => 'setRefundAmount',
        'refund_id' => 'setRefundId',
        'refund_note' => 'setRefundNote',
        'refund_speed' => 'setRefundSpeed',
        'refund_splits' => 'setRefundSplits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'refund_amount' => 'getRefundAmount',
        'refund_id' => 'getRefundId',
        'refund_note' => 'getRefundNote',
        'refund_speed' => 'getRefundSpeed',
        'refund_splits' => 'getRefundSplits'
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

    public const REFUND_SPEED_STANDARD = 'STANDARD';
    public const REFUND_SPEED_INSTANT = 'INSTANT';
    public const REFUND_SPEED_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundSpeedAllowableValues()
    {
        return [
            self::REFUND_SPEED_STANDARD,
            self::REFUND_SPEED_INSTANT,
            self::REFUND_SPEED_UNKNOWN_DEFAULT_OPEN_API,
        ];
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
        $this->setIfExists('refund_amount', $data ?? [], null);
        $this->setIfExists('refund_id', $data ?? [], null);
        $this->setIfExists('refund_note', $data ?? [], null);
        $this->setIfExists('refund_speed', $data ?? [], null);
        $this->setIfExists('refund_splits', $data ?? [], null);
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

        if ($this->container['refund_amount'] === null) {
            $invalidProperties[] = "'refund_amount' can't be null";
        }
        if ($this->container['refund_id'] === null) {
            $invalidProperties[] = "'refund_id' can't be null";
        }
        if ((mb_strlen($this->container['refund_id']) > 40)) {
            $invalidProperties[] = "invalid value for 'refund_id', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['refund_id']) < 3)) {
            $invalidProperties[] = "invalid value for 'refund_id', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['refund_note']) && (mb_strlen($this->container['refund_note']) > 100)) {
            $invalidProperties[] = "invalid value for 'refund_note', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['refund_note']) && (mb_strlen($this->container['refund_note']) < 3)) {
            $invalidProperties[] = "invalid value for 'refund_note', the character length must be bigger than or equal to 3.";
        }

        $allowedValues = $this->getRefundSpeedAllowableValues();
        if (!is_null($this->container['refund_speed']) && !in_array($this->container['refund_speed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refund_speed', must be one of '%s'",
                $this->container['refund_speed'],
                implode("', '", $allowedValues)
            );
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
     * Gets refund_amount
     *
     * @return float
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param float $refund_amount Amount to be refunded. Should be lesser than or equal to the transaction amount. (Decimals allowed)
     *
     * @return self
     */
    public function setRefundAmount($refund_amount)
    {
        if (is_null($refund_amount)) {
            throw new \InvalidArgumentException('non-nullable refund_amount cannot be null');
        }
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets refund_id
     *
     * @return string
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id
     *
     * @param string $refund_id An unique ID to associate the refund with. Provie alphanumeric values
     *
     * @return self
     */
    public function setRefundId($refund_id)
    {
        if (is_null($refund_id)) {
            throw new \InvalidArgumentException('non-nullable refund_id cannot be null');
        }
        if ((mb_strlen($refund_id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $refund_id when calling OrderCreateRefundRequest., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($refund_id) < 3)) {
            throw new \InvalidArgumentException('invalid length for $refund_id when calling OrderCreateRefundRequest., must be bigger than or equal to 3.');
        }

        $this->container['refund_id'] = $refund_id;

        return $this;
    }

    /**
     * Gets refund_note
     *
     * @return string|null
     */
    public function getRefundNote()
    {
        return $this->container['refund_note'];
    }

    /**
     * Sets refund_note
     *
     * @param string|null $refund_note A refund note for your reference.
     *
     * @return self
     */
    public function setRefundNote($refund_note)
    {
        if (is_null($refund_note)) {
            throw new \InvalidArgumentException('non-nullable refund_note cannot be null');
        }
        if ((mb_strlen($refund_note) > 100)) {
            throw new \InvalidArgumentException('invalid length for $refund_note when calling OrderCreateRefundRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($refund_note) < 3)) {
            throw new \InvalidArgumentException('invalid length for $refund_note when calling OrderCreateRefundRequest., must be bigger than or equal to 3.');
        }

        $this->container['refund_note'] = $refund_note;

        return $this;
    }

    /**
     * Gets refund_speed
     *
     * @return string|null
     */
    public function getRefundSpeed()
    {
        return $this->container['refund_speed'];
    }

    /**
     * Sets refund_speed
     *
     * @param string|null $refund_speed Speed at which the refund is processed. It's an optional field with default being STANDARD
     *
     * @return self
     */
    public function setRefundSpeed($refund_speed)
    {
        if (is_null($refund_speed)) {
            throw new \InvalidArgumentException('non-nullable refund_speed cannot be null');
        }
        $allowedValues = $this->getRefundSpeedAllowableValues();
        if (!in_array($refund_speed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refund_speed', must be one of '%s'",
                    $refund_speed,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refund_speed'] = $refund_speed;

        return $this;
    }

    /**
     * Gets refund_splits
     *
     * @return \Cashfree\Model\VendorSplit[]|null
     */
    public function getRefundSplits()
    {
        return $this->container['refund_splits'];
    }

    /**
     * Sets refund_splits
     *
     * @param \Cashfree\Model\VendorSplit[]|null $refund_splits refund_splits
     *
     * @return self
     */
    public function setRefundSplits($refund_splits)
    {
        if (is_null($refund_splits)) {
            throw new \InvalidArgumentException('non-nullable refund_splits cannot be null');
        }
        $this->container['refund_splits'] = $refund_splits;

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

