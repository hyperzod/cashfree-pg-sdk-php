<?php
/**
 * ESOrderReconResponseDataInner
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
 * The version of the OpenAPI document: 2023-08-01
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
 * ESOrderReconResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ESOrderReconResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ESOrderReconResponse_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'settlement_eligibility_time' => 'string',
        'merchant_order_id' => 'string',
        'tx_time' => 'string',
        'settled' => 'string',
        'entity_id' => 'string',
        'merchant_settlement_utr' => 'string',
        'currency' => 'string',
        'sale_type' => 'string',
        'customer_name' => 'string',
        'customer_email' => 'string',
        'customer_phone' => 'string',
        'merchant_vendor_commission' => 'string',
        'split_service_charge' => 'string',
        'split_service_tax' => 'string',
        'pg_service_tax' => 'string',
        'pg_service_charge' => 'string',
        'pg_charge_postpaid' => 'string',
        'merchant_settlement_id' => 'string',
        'added_on' => 'string',
        'tags' => 'string',
        'entity_type' => 'string',
        'settlement_initiated_on' => 'string',
        'settlement_time' => 'string',
        'order_splits' => '\Cashfree\Model\ESOrderReconResponseDataInnerOrderSplitsInner[]',
        'eligible_split_balance' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => 'float64',
        'settlement_eligibility_time' => null,
        'merchant_order_id' => null,
        'tx_time' => null,
        'settled' => null,
        'entity_id' => null,
        'merchant_settlement_utr' => null,
        'currency' => null,
        'sale_type' => null,
        'customer_name' => null,
        'customer_email' => null,
        'customer_phone' => null,
        'merchant_vendor_commission' => null,
        'split_service_charge' => null,
        'split_service_tax' => null,
        'pg_service_tax' => null,
        'pg_service_charge' => null,
        'pg_charge_postpaid' => null,
        'merchant_settlement_id' => null,
        'added_on' => null,
        'tags' => null,
        'entity_type' => null,
        'settlement_initiated_on' => null,
        'settlement_time' => null,
        'order_splits' => null,
        'eligible_split_balance' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'amount' => false,
		'settlement_eligibility_time' => false,
		'merchant_order_id' => false,
		'tx_time' => false,
		'settled' => false,
		'entity_id' => false,
		'merchant_settlement_utr' => false,
		'currency' => false,
		'sale_type' => false,
		'customer_name' => false,
		'customer_email' => false,
		'customer_phone' => false,
		'merchant_vendor_commission' => false,
		'split_service_charge' => false,
		'split_service_tax' => false,
		'pg_service_tax' => false,
		'pg_service_charge' => false,
		'pg_charge_postpaid' => false,
		'merchant_settlement_id' => false,
		'added_on' => false,
		'tags' => false,
		'entity_type' => false,
		'settlement_initiated_on' => false,
		'settlement_time' => false,
		'order_splits' => false,
		'eligible_split_balance' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'amount' => 'amount',
        'settlement_eligibility_time' => 'settlement_eligibility_time',
        'merchant_order_id' => 'merchant_order_id',
        'tx_time' => 'tx_time',
        'settled' => 'settled',
        'entity_id' => 'entity_id',
        'merchant_settlement_utr' => 'merchant_settlement_utr',
        'currency' => 'currency',
        'sale_type' => 'sale_type',
        'customer_name' => 'customer_name',
        'customer_email' => 'customer_email',
        'customer_phone' => 'customer_phone',
        'merchant_vendor_commission' => 'merchant_vendor_commission',
        'split_service_charge' => 'split_service_charge',
        'split_service_tax' => 'split_service_tax',
        'pg_service_tax' => 'pg_service_tax',
        'pg_service_charge' => 'pg_service_charge',
        'pg_charge_postpaid' => 'pg_charge_postpaid',
        'merchant_settlement_id' => 'merchant_settlement_id',
        'added_on' => 'added_on',
        'tags' => 'tags',
        'entity_type' => 'entity_type',
        'settlement_initiated_on' => 'settlement_initiated_on',
        'settlement_time' => 'settlement_time',
        'order_splits' => 'order_splits',
        'eligible_split_balance' => 'eligible_split_balance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'settlement_eligibility_time' => 'setSettlementEligibilityTime',
        'merchant_order_id' => 'setMerchantOrderId',
        'tx_time' => 'setTxTime',
        'settled' => 'setSettled',
        'entity_id' => 'setEntityId',
        'merchant_settlement_utr' => 'setMerchantSettlementUtr',
        'currency' => 'setCurrency',
        'sale_type' => 'setSaleType',
        'customer_name' => 'setCustomerName',
        'customer_email' => 'setCustomerEmail',
        'customer_phone' => 'setCustomerPhone',
        'merchant_vendor_commission' => 'setMerchantVendorCommission',
        'split_service_charge' => 'setSplitServiceCharge',
        'split_service_tax' => 'setSplitServiceTax',
        'pg_service_tax' => 'setPgServiceTax',
        'pg_service_charge' => 'setPgServiceCharge',
        'pg_charge_postpaid' => 'setPgChargePostpaid',
        'merchant_settlement_id' => 'setMerchantSettlementId',
        'added_on' => 'setAddedOn',
        'tags' => 'setTags',
        'entity_type' => 'setEntityType',
        'settlement_initiated_on' => 'setSettlementInitiatedOn',
        'settlement_time' => 'setSettlementTime',
        'order_splits' => 'setOrderSplits',
        'eligible_split_balance' => 'setEligibleSplitBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'settlement_eligibility_time' => 'getSettlementEligibilityTime',
        'merchant_order_id' => 'getMerchantOrderId',
        'tx_time' => 'getTxTime',
        'settled' => 'getSettled',
        'entity_id' => 'getEntityId',
        'merchant_settlement_utr' => 'getMerchantSettlementUtr',
        'currency' => 'getCurrency',
        'sale_type' => 'getSaleType',
        'customer_name' => 'getCustomerName',
        'customer_email' => 'getCustomerEmail',
        'customer_phone' => 'getCustomerPhone',
        'merchant_vendor_commission' => 'getMerchantVendorCommission',
        'split_service_charge' => 'getSplitServiceCharge',
        'split_service_tax' => 'getSplitServiceTax',
        'pg_service_tax' => 'getPgServiceTax',
        'pg_service_charge' => 'getPgServiceCharge',
        'pg_charge_postpaid' => 'getPgChargePostpaid',
        'merchant_settlement_id' => 'getMerchantSettlementId',
        'added_on' => 'getAddedOn',
        'tags' => 'getTags',
        'entity_type' => 'getEntityType',
        'settlement_initiated_on' => 'getSettlementInitiatedOn',
        'settlement_time' => 'getSettlementTime',
        'order_splits' => 'getOrderSplits',
        'eligible_split_balance' => 'getEligibleSplitBalance'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('settlement_eligibility_time', $data ?? [], null);
        $this->setIfExists('merchant_order_id', $data ?? [], null);
        $this->setIfExists('tx_time', $data ?? [], null);
        $this->setIfExists('settled', $data ?? [], null);
        $this->setIfExists('entity_id', $data ?? [], null);
        $this->setIfExists('merchant_settlement_utr', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('sale_type', $data ?? [], null);
        $this->setIfExists('customer_name', $data ?? [], null);
        $this->setIfExists('customer_email', $data ?? [], null);
        $this->setIfExists('customer_phone', $data ?? [], null);
        $this->setIfExists('merchant_vendor_commission', $data ?? [], null);
        $this->setIfExists('split_service_charge', $data ?? [], null);
        $this->setIfExists('split_service_tax', $data ?? [], null);
        $this->setIfExists('pg_service_tax', $data ?? [], null);
        $this->setIfExists('pg_service_charge', $data ?? [], null);
        $this->setIfExists('pg_charge_postpaid', $data ?? [], null);
        $this->setIfExists('merchant_settlement_id', $data ?? [], null);
        $this->setIfExists('added_on', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('entity_type', $data ?? [], null);
        $this->setIfExists('settlement_initiated_on', $data ?? [], null);
        $this->setIfExists('settlement_time', $data ?? [], null);
        $this->setIfExists('order_splits', $data ?? [], null);
        $this->setIfExists('eligible_split_balance', $data ?? [], null);
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets settlement_eligibility_time
     *
     * @return string|null
     */
    public function getSettlementEligibilityTime()
    {
        return $this->container['settlement_eligibility_time'];
    }

    /**
     * Sets settlement_eligibility_time
     *
     * @param string|null $settlement_eligibility_time settlement_eligibility_time
     *
     * @return self
     */
    public function setSettlementEligibilityTime($settlement_eligibility_time)
    {
        if (is_null($settlement_eligibility_time)) {
            throw new \InvalidArgumentException('non-nullable settlement_eligibility_time cannot be null');
        }
        $this->container['settlement_eligibility_time'] = $settlement_eligibility_time;

        return $this;
    }

    /**
     * Gets merchant_order_id
     *
     * @return string|null
     */
    public function getMerchantOrderId()
    {
        return $this->container['merchant_order_id'];
    }

    /**
     * Sets merchant_order_id
     *
     * @param string|null $merchant_order_id merchant_order_id
     *
     * @return self
     */
    public function setMerchantOrderId($merchant_order_id)
    {
        if (is_null($merchant_order_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_order_id cannot be null');
        }
        $this->container['merchant_order_id'] = $merchant_order_id;

        return $this;
    }

    /**
     * Gets tx_time
     *
     * @return string|null
     */
    public function getTxTime()
    {
        return $this->container['tx_time'];
    }

    /**
     * Sets tx_time
     *
     * @param string|null $tx_time tx_time
     *
     * @return self
     */
    public function setTxTime($tx_time)
    {
        if (is_null($tx_time)) {
            throw new \InvalidArgumentException('non-nullable tx_time cannot be null');
        }
        $this->container['tx_time'] = $tx_time;

        return $this;
    }

    /**
     * Gets settled
     *
     * @return string|null
     */
    public function getSettled()
    {
        return $this->container['settled'];
    }

    /**
     * Sets settled
     *
     * @param string|null $settled settled
     *
     * @return self
     */
    public function setSettled($settled)
    {
        if (is_null($settled)) {
            throw new \InvalidArgumentException('non-nullable settled cannot be null');
        }
        $this->container['settled'] = $settled;

        return $this;
    }

    /**
     * Gets entity_id
     *
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param string|null $entity_id entity_id
     *
     * @return self
     */
    public function setEntityId($entity_id)
    {
        if (is_null($entity_id)) {
            throw new \InvalidArgumentException('non-nullable entity_id cannot be null');
        }
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets merchant_settlement_utr
     *
     * @return string|null
     */
    public function getMerchantSettlementUtr()
    {
        return $this->container['merchant_settlement_utr'];
    }

    /**
     * Sets merchant_settlement_utr
     *
     * @param string|null $merchant_settlement_utr merchant_settlement_utr
     *
     * @return self
     */
    public function setMerchantSettlementUtr($merchant_settlement_utr)
    {
        if (is_null($merchant_settlement_utr)) {
            throw new \InvalidArgumentException('non-nullable merchant_settlement_utr cannot be null');
        }
        $this->container['merchant_settlement_utr'] = $merchant_settlement_utr;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets sale_type
     *
     * @return string|null
     */
    public function getSaleType()
    {
        return $this->container['sale_type'];
    }

    /**
     * Sets sale_type
     *
     * @param string|null $sale_type sale_type
     *
     * @return self
     */
    public function setSaleType($sale_type)
    {
        if (is_null($sale_type)) {
            throw new \InvalidArgumentException('non-nullable sale_type cannot be null');
        }
        $this->container['sale_type'] = $sale_type;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string|null $customer_name customer_name
     *
     * @return self
     */
    public function setCustomerName($customer_name)
    {
        if (is_null($customer_name)) {
            throw new \InvalidArgumentException('non-nullable customer_name cannot be null');
        }
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets customer_email
     *
     * @return string|null
     */
    public function getCustomerEmail()
    {
        return $this->container['customer_email'];
    }

    /**
     * Sets customer_email
     *
     * @param string|null $customer_email customer_email
     *
     * @return self
     */
    public function setCustomerEmail($customer_email)
    {
        if (is_null($customer_email)) {
            throw new \InvalidArgumentException('non-nullable customer_email cannot be null');
        }
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets customer_phone
     *
     * @return string|null
     */
    public function getCustomerPhone()
    {
        return $this->container['customer_phone'];
    }

    /**
     * Sets customer_phone
     *
     * @param string|null $customer_phone customer_phone
     *
     * @return self
     */
    public function setCustomerPhone($customer_phone)
    {
        if (is_null($customer_phone)) {
            throw new \InvalidArgumentException('non-nullable customer_phone cannot be null');
        }
        $this->container['customer_phone'] = $customer_phone;

        return $this;
    }

    /**
     * Gets merchant_vendor_commission
     *
     * @return string|null
     */
    public function getMerchantVendorCommission()
    {
        return $this->container['merchant_vendor_commission'];
    }

    /**
     * Sets merchant_vendor_commission
     *
     * @param string|null $merchant_vendor_commission merchant_vendor_commission
     *
     * @return self
     */
    public function setMerchantVendorCommission($merchant_vendor_commission)
    {
        if (is_null($merchant_vendor_commission)) {
            throw new \InvalidArgumentException('non-nullable merchant_vendor_commission cannot be null');
        }
        $this->container['merchant_vendor_commission'] = $merchant_vendor_commission;

        return $this;
    }

    /**
     * Gets split_service_charge
     *
     * @return string|null
     */
    public function getSplitServiceCharge()
    {
        return $this->container['split_service_charge'];
    }

    /**
     * Sets split_service_charge
     *
     * @param string|null $split_service_charge split_service_charge
     *
     * @return self
     */
    public function setSplitServiceCharge($split_service_charge)
    {
        if (is_null($split_service_charge)) {
            throw new \InvalidArgumentException('non-nullable split_service_charge cannot be null');
        }
        $this->container['split_service_charge'] = $split_service_charge;

        return $this;
    }

    /**
     * Gets split_service_tax
     *
     * @return string|null
     */
    public function getSplitServiceTax()
    {
        return $this->container['split_service_tax'];
    }

    /**
     * Sets split_service_tax
     *
     * @param string|null $split_service_tax split_service_tax
     *
     * @return self
     */
    public function setSplitServiceTax($split_service_tax)
    {
        if (is_null($split_service_tax)) {
            throw new \InvalidArgumentException('non-nullable split_service_tax cannot be null');
        }
        $this->container['split_service_tax'] = $split_service_tax;

        return $this;
    }

    /**
     * Gets pg_service_tax
     *
     * @return string|null
     */
    public function getPgServiceTax()
    {
        return $this->container['pg_service_tax'];
    }

    /**
     * Sets pg_service_tax
     *
     * @param string|null $pg_service_tax pg_service_tax
     *
     * @return self
     */
    public function setPgServiceTax($pg_service_tax)
    {
        if (is_null($pg_service_tax)) {
            throw new \InvalidArgumentException('non-nullable pg_service_tax cannot be null');
        }
        $this->container['pg_service_tax'] = $pg_service_tax;

        return $this;
    }

    /**
     * Gets pg_service_charge
     *
     * @return string|null
     */
    public function getPgServiceCharge()
    {
        return $this->container['pg_service_charge'];
    }

    /**
     * Sets pg_service_charge
     *
     * @param string|null $pg_service_charge pg_service_charge
     *
     * @return self
     */
    public function setPgServiceCharge($pg_service_charge)
    {
        if (is_null($pg_service_charge)) {
            throw new \InvalidArgumentException('non-nullable pg_service_charge cannot be null');
        }
        $this->container['pg_service_charge'] = $pg_service_charge;

        return $this;
    }

    /**
     * Gets pg_charge_postpaid
     *
     * @return string|null
     */
    public function getPgChargePostpaid()
    {
        return $this->container['pg_charge_postpaid'];
    }

    /**
     * Sets pg_charge_postpaid
     *
     * @param string|null $pg_charge_postpaid pg_charge_postpaid
     *
     * @return self
     */
    public function setPgChargePostpaid($pg_charge_postpaid)
    {
        if (is_null($pg_charge_postpaid)) {
            throw new \InvalidArgumentException('non-nullable pg_charge_postpaid cannot be null');
        }
        $this->container['pg_charge_postpaid'] = $pg_charge_postpaid;

        return $this;
    }

    /**
     * Gets merchant_settlement_id
     *
     * @return string|null
     */
    public function getMerchantSettlementId()
    {
        return $this->container['merchant_settlement_id'];
    }

    /**
     * Sets merchant_settlement_id
     *
     * @param string|null $merchant_settlement_id merchant_settlement_id
     *
     * @return self
     */
    public function setMerchantSettlementId($merchant_settlement_id)
    {
        if (is_null($merchant_settlement_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_settlement_id cannot be null');
        }
        $this->container['merchant_settlement_id'] = $merchant_settlement_id;

        return $this;
    }

    /**
     * Gets added_on
     *
     * @return string|null
     */
    public function getAddedOn()
    {
        return $this->container['added_on'];
    }

    /**
     * Sets added_on
     *
     * @param string|null $added_on added_on
     *
     * @return self
     */
    public function setAddedOn($added_on)
    {
        if (is_null($added_on)) {
            throw new \InvalidArgumentException('non-nullable added_on cannot be null');
        }
        $this->container['added_on'] = $added_on;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string|null $entity_type entity_type
     *
     * @return self
     */
    public function setEntityType($entity_type)
    {
        if (is_null($entity_type)) {
            throw new \InvalidArgumentException('non-nullable entity_type cannot be null');
        }
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets settlement_initiated_on
     *
     * @return string|null
     */
    public function getSettlementInitiatedOn()
    {
        return $this->container['settlement_initiated_on'];
    }

    /**
     * Sets settlement_initiated_on
     *
     * @param string|null $settlement_initiated_on settlement_initiated_on
     *
     * @return self
     */
    public function setSettlementInitiatedOn($settlement_initiated_on)
    {
        if (is_null($settlement_initiated_on)) {
            throw new \InvalidArgumentException('non-nullable settlement_initiated_on cannot be null');
        }
        $this->container['settlement_initiated_on'] = $settlement_initiated_on;

        return $this;
    }

    /**
     * Gets settlement_time
     *
     * @return string|null
     */
    public function getSettlementTime()
    {
        return $this->container['settlement_time'];
    }

    /**
     * Sets settlement_time
     *
     * @param string|null $settlement_time settlement_time
     *
     * @return self
     */
    public function setSettlementTime($settlement_time)
    {
        if (is_null($settlement_time)) {
            throw new \InvalidArgumentException('non-nullable settlement_time cannot be null');
        }
        $this->container['settlement_time'] = $settlement_time;

        return $this;
    }

    /**
     * Gets order_splits
     *
     * @return \Cashfree\Model\ESOrderReconResponseDataInnerOrderSplitsInner[]|null
     */
    public function getOrderSplits()
    {
        return $this->container['order_splits'];
    }

    /**
     * Sets order_splits
     *
     * @param \Cashfree\Model\ESOrderReconResponseDataInnerOrderSplitsInner[]|null $order_splits order_splits
     *
     * @return self
     */
    public function setOrderSplits($order_splits)
    {
        if (is_null($order_splits)) {
            throw new \InvalidArgumentException('non-nullable order_splits cannot be null');
        }
        $this->container['order_splits'] = $order_splits;

        return $this;
    }

    /**
     * Gets eligible_split_balance
     *
     * @return string|null
     */
    public function getEligibleSplitBalance()
    {
        return $this->container['eligible_split_balance'];
    }

    /**
     * Sets eligible_split_balance
     *
     * @param string|null $eligible_split_balance eligible_split_balance
     *
     * @return self
     */
    public function setEligibleSplitBalance($eligible_split_balance)
    {
        if (is_null($eligible_split_balance)) {
            throw new \InvalidArgumentException('non-nullable eligible_split_balance cannot be null');
        }
        $this->container['eligible_split_balance'] = $eligible_split_balance;

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

