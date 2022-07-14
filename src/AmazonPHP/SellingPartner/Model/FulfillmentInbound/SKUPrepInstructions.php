<?php declare(strict_types=1);
/**
 * SKUPrepInstructions.
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
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class SKUPrepInstructions implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'SKUPrepInstructions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_sku' => 'string',
        'asin' => 'string',
        'barcode_instruction' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BarcodeInstruction',
        'prep_guidance' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepGuidance',
        'prep_instruction_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepInstruction[]',
        'amazon_prep_fees_details_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\AmazonPrepFeesDetails[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'seller_sku' => null,
        'asin' => null,
        'barcode_instruction' => null,
        'prep_guidance' => null,
        'prep_instruction_list' => null,
        'amazon_prep_fees_details_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'seller_sku' => 'SellerSKU',
        'asin' => 'ASIN',
        'barcode_instruction' => 'BarcodeInstruction',
        'prep_guidance' => 'PrepGuidance',
        'prep_instruction_list' => 'PrepInstructionList',
        'amazon_prep_fees_details_list' => 'AmazonPrepFeesDetailsList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_sku' => 'setSellerSku',
        'asin' => 'setAsin',
        'barcode_instruction' => 'setBarcodeInstruction',
        'prep_guidance' => 'setPrepGuidance',
        'prep_instruction_list' => 'setPrepInstructionList',
        'amazon_prep_fees_details_list' => 'setAmazonPrepFeesDetailsList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_sku' => 'getSellerSku',
        'asin' => 'getAsin',
        'barcode_instruction' => 'getBarcodeInstruction',
        'prep_guidance' => 'getPrepGuidance',
        'prep_instruction_list' => 'getPrepInstructionList',
        'amazon_prep_fees_details_list' => 'getAmazonPrepFeesDetailsList',
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
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['barcode_instruction'] = $data['barcode_instruction'] ?? null;
        $this->container['prep_guidance'] = $data['prep_guidance'] ?? null;
        $this->container['prep_instruction_list'] = $data['prep_instruction_list'] ?? null;
        $this->container['amazon_prep_fees_details_list'] = $data['amazon_prep_fees_details_list'] ?? null;
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
    }

    /**
     * Gets seller_sku.
     */
    public function getSellerSku() : ?string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param null|string $seller_sku the seller SKU of the item
     */
    public function setSellerSku(?string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets asin.
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number (ASIN) of the item
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets barcode_instruction.
     */
    public function getBarcodeInstruction() : ?BarcodeInstruction
    {
        return $this->container['barcode_instruction'];
    }

    /**
     * Sets barcode_instruction.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BarcodeInstruction $barcode_instruction barcode_instruction
     */
    public function setBarcodeInstruction(?BarcodeInstruction $barcode_instruction) : self
    {
        $this->container['barcode_instruction'] = $barcode_instruction;

        return $this;
    }

    /**
     * Gets prep_guidance.
     */
    public function getPrepGuidance() : ?PrepGuidance
    {
        return $this->container['prep_guidance'];
    }

    /**
     * Sets prep_guidance.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepGuidance $prep_guidance prep_guidance
     */
    public function setPrepGuidance(?PrepGuidance $prep_guidance) : self
    {
        $this->container['prep_guidance'] = $prep_guidance;

        return $this;
    }

    /**
     * Gets prep_instruction_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepInstruction[]
     */
    public function getPrepInstructionList() : ?array
    {
        return $this->container['prep_instruction_list'];
    }

    /**
     * Sets prep_instruction_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepInstruction[] $prep_instruction_list a list of preparation instructions to help with item sourcing decisions
     */
    public function setPrepInstructionList(?array $prep_instruction_list) : self
    {
        $this->container['prep_instruction_list'] = $prep_instruction_list;

        return $this;
    }

    /**
     * Gets amazon_prep_fees_details_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\AmazonPrepFeesDetails[]
     */
    public function getAmazonPrepFeesDetailsList() : ?array
    {
        return $this->container['amazon_prep_fees_details_list'];
    }

    /**
     * Sets amazon_prep_fees_details_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\AmazonPrepFeesDetails[] $amazon_prep_fees_details_list a list of preparation instructions and fees for Amazon to prep goods for shipment
     */
    public function setAmazonPrepFeesDetailsList(?array $amazon_prep_fees_details_list) : self
    {
        $this->container['amazon_prep_fees_details_list'] = $amazon_prep_fees_details_list;

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
