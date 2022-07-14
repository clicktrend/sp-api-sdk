<?php declare(strict_types=1);
/**
 * RentalTransactionEvent.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RentalTransactionEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RentalTransactionEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'amazon_order_id' => 'string',
        'rental_event_type' => 'string',
        'extension_length' => 'int',
        'posted_date' => '\DateTime',
        'rental_charge_list' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]',
        'rental_fee_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'marketplace_name' => 'string',
        'rental_initial_value' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'rental_reimbursement' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'rental_tax_withheld_list' => '\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'amazon_order_id' => null,
        'rental_event_type' => null,
        'extension_length' => 'int32',
        'posted_date' => 'date-time',
        'rental_charge_list' => null,
        'rental_fee_list' => null,
        'marketplace_name' => null,
        'rental_initial_value' => null,
        'rental_reimbursement' => null,
        'rental_tax_withheld_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'amazon_order_id' => 'AmazonOrderId',
        'rental_event_type' => 'RentalEventType',
        'extension_length' => 'ExtensionLength',
        'posted_date' => 'PostedDate',
        'rental_charge_list' => 'RentalChargeList',
        'rental_fee_list' => 'RentalFeeList',
        'marketplace_name' => 'MarketplaceName',
        'rental_initial_value' => 'RentalInitialValue',
        'rental_reimbursement' => 'RentalReimbursement',
        'rental_tax_withheld_list' => 'RentalTaxWithheldList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'rental_event_type' => 'setRentalEventType',
        'extension_length' => 'setExtensionLength',
        'posted_date' => 'setPostedDate',
        'rental_charge_list' => 'setRentalChargeList',
        'rental_fee_list' => 'setRentalFeeList',
        'marketplace_name' => 'setMarketplaceName',
        'rental_initial_value' => 'setRentalInitialValue',
        'rental_reimbursement' => 'setRentalReimbursement',
        'rental_tax_withheld_list' => 'setRentalTaxWithheldList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'rental_event_type' => 'getRentalEventType',
        'extension_length' => 'getExtensionLength',
        'posted_date' => 'getPostedDate',
        'rental_charge_list' => 'getRentalChargeList',
        'rental_fee_list' => 'getRentalFeeList',
        'marketplace_name' => 'getMarketplaceName',
        'rental_initial_value' => 'getRentalInitialValue',
        'rental_reimbursement' => 'getRentalReimbursement',
        'rental_tax_withheld_list' => 'getRentalTaxWithheldList',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['rental_event_type'] = $data['rental_event_type'] ?? null;
        $this->container['extension_length'] = $data['extension_length'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['rental_charge_list'] = $data['rental_charge_list'] ?? null;
        $this->container['rental_fee_list'] = $data['rental_fee_list'] ?? null;
        $this->container['marketplace_name'] = $data['marketplace_name'] ?? null;
        $this->container['rental_initial_value'] = $data['rental_initial_value'] ?? null;
        $this->container['rental_reimbursement'] = $data['rental_reimbursement'] ?? null;
        $this->container['rental_tax_withheld_list'] = $data['rental_tax_withheld_list'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['rental_initial_value'] !== null) {
            $this->container['rental_initial_value']->validate();
        }

        if ($this->container['rental_reimbursement'] !== null) {
            $this->container['rental_reimbursement']->validate();
        }
    }

    /**
     * Gets amazon_order_id.
     */
    public function getAmazonOrderId() : ?string
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param null|string $amazon_order_id an Amazon-defined identifier for an order
     */
    public function setAmazonOrderId(?string $amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets rental_event_type.
     */
    public function getRentalEventType() : ?string
    {
        return $this->container['rental_event_type'];
    }

    /**
     * Sets rental_event_type.
     *
     * @param null|string $rental_event_type The type of rental event.  Possible values:  * RentalCustomerPayment-Buyout - Transaction type that represents when the customer wants to buy out a rented item.  * RentalCustomerPayment-Extension - Transaction type that represents when the customer wants to extend the rental period.  * RentalCustomerRefund-Buyout - Transaction type that represents when the customer requests a refund for the buyout of the rented item.  * RentalCustomerRefund-Extension - Transaction type that represents when the customer requests a refund over the extension on the rented item.  * RentalHandlingFee - Transaction type that represents the fee that Amazon charges sellers who rent through Amazon.  * RentalChargeFailureReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a failed charge.  * RentalLostItemReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a lost item.
     */
    public function setRentalEventType(?string $rental_event_type) : self
    {
        $this->container['rental_event_type'] = $rental_event_type;

        return $this;
    }

    /**
     * Gets extension_length.
     */
    public function getExtensionLength() : ?int
    {
        return $this->container['extension_length'];
    }

    /**
     * Sets extension_length.
     *
     * @param null|int $extension_length The number of days that the buyer extended an already rented item. This value is only returned for RentalCustomerPayment-Extension and RentalCustomerRefund-Extension events.
     */
    public function setExtensionLength(?int $extension_length) : self
    {
        $this->container['extension_length'] = $extension_length;

        return $this;
    }

    /**
     * Gets posted_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param \DateTime|\DateTimeImmutable $posted_date posted_date
     */
    public function setPostedDate(\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets rental_charge_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]
     */
    public function getRentalChargeList() : ?array
    {
        return $this->container['rental_charge_list'];
    }

    /**
     * Sets rental_charge_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[] $rental_charge_list a list of charge information on the seller's account
     */
    public function setRentalChargeList(?array $rental_charge_list) : self
    {
        $this->container['rental_charge_list'] = $rental_charge_list;

        return $this;
    }

    /**
     * Gets rental_fee_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getRentalFeeList() : ?array
    {
        return $this->container['rental_fee_list'];
    }

    /**
     * Sets rental_fee_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $rental_fee_list a list of fee component information
     */
    public function setRentalFeeList(?array $rental_fee_list) : self
    {
        $this->container['rental_fee_list'] = $rental_fee_list;

        return $this;
    }

    /**
     * Gets marketplace_name.
     */
    public function getMarketplaceName() : ?string
    {
        return $this->container['marketplace_name'];
    }

    /**
     * Sets marketplace_name.
     *
     * @param null|string $marketplace_name the name of the marketplace
     */
    public function setMarketplaceName(?string $marketplace_name) : self
    {
        $this->container['marketplace_name'] = $marketplace_name;

        return $this;
    }

    /**
     * Gets rental_initial_value.
     */
    public function getRentalInitialValue() : ?Currency
    {
        return $this->container['rental_initial_value'];
    }

    /**
     * Sets rental_initial_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $rental_initial_value rental_initial_value
     */
    public function setRentalInitialValue(?Currency $rental_initial_value) : self
    {
        $this->container['rental_initial_value'] = $rental_initial_value;

        return $this;
    }

    /**
     * Gets rental_reimbursement.
     */
    public function getRentalReimbursement() : ?Currency
    {
        return $this->container['rental_reimbursement'];
    }

    /**
     * Sets rental_reimbursement.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $rental_reimbursement rental_reimbursement
     */
    public function setRentalReimbursement(?Currency $rental_reimbursement) : self
    {
        $this->container['rental_reimbursement'] = $rental_reimbursement;

        return $this;
    }

    /**
     * Gets rental_tax_withheld_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[]
     */
    public function getRentalTaxWithheldList() : ?array
    {
        return $this->container['rental_tax_withheld_list'];
    }

    /**
     * Sets rental_tax_withheld_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[] $rental_tax_withheld_list a list of information about taxes withheld
     */
    public function setRentalTaxWithheldList(?array $rental_tax_withheld_list) : self
    {
        $this->container['rental_tax_withheld_list'] = $rental_tax_withheld_list;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
