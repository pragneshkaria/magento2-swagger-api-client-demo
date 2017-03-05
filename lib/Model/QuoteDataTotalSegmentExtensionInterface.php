<?php
/**
 * QuoteDataTotalSegmentExtensionInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * QuoteDataTotalSegmentExtensionInterface Class Doc Comment
 *
 * @category    Class
 * @description ExtensionInterface class for @see \\Magento\\Quote\\Api\\Data\\TotalSegmentInterface
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuoteDataTotalSegmentExtensionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'quote-data-total-segment-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tax_grandtotal_details' => '\Swagger\Client\Model\TaxDataGrandTotalDetailsInterface[]',
        'gift_cards' => 'string',
        'gw_order_id' => 'string',
        'gw_item_ids' => 'string[]',
        'gw_allow_gift_receipt' => 'string',
        'gw_add_card' => 'string',
        'gw_price' => 'string',
        'gw_base_price' => 'string',
        'gw_items_price' => 'string',
        'gw_items_base_price' => 'string',
        'gw_card_price' => 'string',
        'gw_card_base_price' => 'string',
        'gw_base_tax_amount' => 'string',
        'gw_tax_amount' => 'string',
        'gw_items_base_tax_amount' => 'string',
        'gw_items_tax_amount' => 'string',
        'gw_card_base_tax_amount' => 'string',
        'gw_card_tax_amount' => 'string',
        'gw_price_incl_tax' => 'string',
        'gw_base_price_incl_tax' => 'string',
        'gw_card_price_incl_tax' => 'string',
        'gw_card_base_price_incl_tax' => 'string',
        'gw_items_price_incl_tax' => 'string',
        'gw_items_base_price_incl_tax' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'tax_grandtotal_details' => 'tax_grandtotal_details',
        'gift_cards' => 'gift_cards',
        'gw_order_id' => 'gw_order_id',
        'gw_item_ids' => 'gw_item_ids',
        'gw_allow_gift_receipt' => 'gw_allow_gift_receipt',
        'gw_add_card' => 'gw_add_card',
        'gw_price' => 'gw_price',
        'gw_base_price' => 'gw_base_price',
        'gw_items_price' => 'gw_items_price',
        'gw_items_base_price' => 'gw_items_base_price',
        'gw_card_price' => 'gw_card_price',
        'gw_card_base_price' => 'gw_card_base_price',
        'gw_base_tax_amount' => 'gw_base_tax_amount',
        'gw_tax_amount' => 'gw_tax_amount',
        'gw_items_base_tax_amount' => 'gw_items_base_tax_amount',
        'gw_items_tax_amount' => 'gw_items_tax_amount',
        'gw_card_base_tax_amount' => 'gw_card_base_tax_amount',
        'gw_card_tax_amount' => 'gw_card_tax_amount',
        'gw_price_incl_tax' => 'gw_price_incl_tax',
        'gw_base_price_incl_tax' => 'gw_base_price_incl_tax',
        'gw_card_price_incl_tax' => 'gw_card_price_incl_tax',
        'gw_card_base_price_incl_tax' => 'gw_card_base_price_incl_tax',
        'gw_items_price_incl_tax' => 'gw_items_price_incl_tax',
        'gw_items_base_price_incl_tax' => 'gw_items_base_price_incl_tax'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'tax_grandtotal_details' => 'setTaxGrandtotalDetails',
        'gift_cards' => 'setGiftCards',
        'gw_order_id' => 'setGwOrderId',
        'gw_item_ids' => 'setGwItemIds',
        'gw_allow_gift_receipt' => 'setGwAllowGiftReceipt',
        'gw_add_card' => 'setGwAddCard',
        'gw_price' => 'setGwPrice',
        'gw_base_price' => 'setGwBasePrice',
        'gw_items_price' => 'setGwItemsPrice',
        'gw_items_base_price' => 'setGwItemsBasePrice',
        'gw_card_price' => 'setGwCardPrice',
        'gw_card_base_price' => 'setGwCardBasePrice',
        'gw_base_tax_amount' => 'setGwBaseTaxAmount',
        'gw_tax_amount' => 'setGwTaxAmount',
        'gw_items_base_tax_amount' => 'setGwItemsBaseTaxAmount',
        'gw_items_tax_amount' => 'setGwItemsTaxAmount',
        'gw_card_base_tax_amount' => 'setGwCardBaseTaxAmount',
        'gw_card_tax_amount' => 'setGwCardTaxAmount',
        'gw_price_incl_tax' => 'setGwPriceInclTax',
        'gw_base_price_incl_tax' => 'setGwBasePriceInclTax',
        'gw_card_price_incl_tax' => 'setGwCardPriceInclTax',
        'gw_card_base_price_incl_tax' => 'setGwCardBasePriceInclTax',
        'gw_items_price_incl_tax' => 'setGwItemsPriceInclTax',
        'gw_items_base_price_incl_tax' => 'setGwItemsBasePriceInclTax'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'tax_grandtotal_details' => 'getTaxGrandtotalDetails',
        'gift_cards' => 'getGiftCards',
        'gw_order_id' => 'getGwOrderId',
        'gw_item_ids' => 'getGwItemIds',
        'gw_allow_gift_receipt' => 'getGwAllowGiftReceipt',
        'gw_add_card' => 'getGwAddCard',
        'gw_price' => 'getGwPrice',
        'gw_base_price' => 'getGwBasePrice',
        'gw_items_price' => 'getGwItemsPrice',
        'gw_items_base_price' => 'getGwItemsBasePrice',
        'gw_card_price' => 'getGwCardPrice',
        'gw_card_base_price' => 'getGwCardBasePrice',
        'gw_base_tax_amount' => 'getGwBaseTaxAmount',
        'gw_tax_amount' => 'getGwTaxAmount',
        'gw_items_base_tax_amount' => 'getGwItemsBaseTaxAmount',
        'gw_items_tax_amount' => 'getGwItemsTaxAmount',
        'gw_card_base_tax_amount' => 'getGwCardBaseTaxAmount',
        'gw_card_tax_amount' => 'getGwCardTaxAmount',
        'gw_price_incl_tax' => 'getGwPriceInclTax',
        'gw_base_price_incl_tax' => 'getGwBasePriceInclTax',
        'gw_card_price_incl_tax' => 'getGwCardPriceInclTax',
        'gw_card_base_price_incl_tax' => 'getGwCardBasePriceInclTax',
        'gw_items_price_incl_tax' => 'getGwItemsPriceInclTax',
        'gw_items_base_price_incl_tax' => 'getGwItemsBasePriceInclTax'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['tax_grandtotal_details'] = isset($data['tax_grandtotal_details']) ? $data['tax_grandtotal_details'] : null;
        $this->container['gift_cards'] = isset($data['gift_cards']) ? $data['gift_cards'] : null;
        $this->container['gw_order_id'] = isset($data['gw_order_id']) ? $data['gw_order_id'] : null;
        $this->container['gw_item_ids'] = isset($data['gw_item_ids']) ? $data['gw_item_ids'] : null;
        $this->container['gw_allow_gift_receipt'] = isset($data['gw_allow_gift_receipt']) ? $data['gw_allow_gift_receipt'] : null;
        $this->container['gw_add_card'] = isset($data['gw_add_card']) ? $data['gw_add_card'] : null;
        $this->container['gw_price'] = isset($data['gw_price']) ? $data['gw_price'] : null;
        $this->container['gw_base_price'] = isset($data['gw_base_price']) ? $data['gw_base_price'] : null;
        $this->container['gw_items_price'] = isset($data['gw_items_price']) ? $data['gw_items_price'] : null;
        $this->container['gw_items_base_price'] = isset($data['gw_items_base_price']) ? $data['gw_items_base_price'] : null;
        $this->container['gw_card_price'] = isset($data['gw_card_price']) ? $data['gw_card_price'] : null;
        $this->container['gw_card_base_price'] = isset($data['gw_card_base_price']) ? $data['gw_card_base_price'] : null;
        $this->container['gw_base_tax_amount'] = isset($data['gw_base_tax_amount']) ? $data['gw_base_tax_amount'] : null;
        $this->container['gw_tax_amount'] = isset($data['gw_tax_amount']) ? $data['gw_tax_amount'] : null;
        $this->container['gw_items_base_tax_amount'] = isset($data['gw_items_base_tax_amount']) ? $data['gw_items_base_tax_amount'] : null;
        $this->container['gw_items_tax_amount'] = isset($data['gw_items_tax_amount']) ? $data['gw_items_tax_amount'] : null;
        $this->container['gw_card_base_tax_amount'] = isset($data['gw_card_base_tax_amount']) ? $data['gw_card_base_tax_amount'] : null;
        $this->container['gw_card_tax_amount'] = isset($data['gw_card_tax_amount']) ? $data['gw_card_tax_amount'] : null;
        $this->container['gw_price_incl_tax'] = isset($data['gw_price_incl_tax']) ? $data['gw_price_incl_tax'] : null;
        $this->container['gw_base_price_incl_tax'] = isset($data['gw_base_price_incl_tax']) ? $data['gw_base_price_incl_tax'] : null;
        $this->container['gw_card_price_incl_tax'] = isset($data['gw_card_price_incl_tax']) ? $data['gw_card_price_incl_tax'] : null;
        $this->container['gw_card_base_price_incl_tax'] = isset($data['gw_card_base_price_incl_tax']) ? $data['gw_card_base_price_incl_tax'] : null;
        $this->container['gw_items_price_incl_tax'] = isset($data['gw_items_price_incl_tax']) ? $data['gw_items_price_incl_tax'] : null;
        $this->container['gw_items_base_price_incl_tax'] = isset($data['gw_items_base_price_incl_tax']) ? $data['gw_items_base_price_incl_tax'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets tax_grandtotal_details
     * @return \Swagger\Client\Model\TaxDataGrandTotalDetailsInterface[]
     */
    public function getTaxGrandtotalDetails()
    {
        return $this->container['tax_grandtotal_details'];
    }

    /**
     * Sets tax_grandtotal_details
     * @param \Swagger\Client\Model\TaxDataGrandTotalDetailsInterface[] $tax_grandtotal_details
     * @return $this
     */
    public function setTaxGrandtotalDetails($tax_grandtotal_details)
    {
        $this->container['tax_grandtotal_details'] = $tax_grandtotal_details;

        return $this;
    }

    /**
     * Gets gift_cards
     * @return string
     */
    public function getGiftCards()
    {
        return $this->container['gift_cards'];
    }

    /**
     * Sets gift_cards
     * @param string $gift_cards
     * @return $this
     */
    public function setGiftCards($gift_cards)
    {
        $this->container['gift_cards'] = $gift_cards;

        return $this;
    }

    /**
     * Gets gw_order_id
     * @return string
     */
    public function getGwOrderId()
    {
        return $this->container['gw_order_id'];
    }

    /**
     * Sets gw_order_id
     * @param string $gw_order_id
     * @return $this
     */
    public function setGwOrderId($gw_order_id)
    {
        $this->container['gw_order_id'] = $gw_order_id;

        return $this;
    }

    /**
     * Gets gw_item_ids
     * @return string[]
     */
    public function getGwItemIds()
    {
        return $this->container['gw_item_ids'];
    }

    /**
     * Sets gw_item_ids
     * @param string[] $gw_item_ids
     * @return $this
     */
    public function setGwItemIds($gw_item_ids)
    {
        $this->container['gw_item_ids'] = $gw_item_ids;

        return $this;
    }

    /**
     * Gets gw_allow_gift_receipt
     * @return string
     */
    public function getGwAllowGiftReceipt()
    {
        return $this->container['gw_allow_gift_receipt'];
    }

    /**
     * Sets gw_allow_gift_receipt
     * @param string $gw_allow_gift_receipt
     * @return $this
     */
    public function setGwAllowGiftReceipt($gw_allow_gift_receipt)
    {
        $this->container['gw_allow_gift_receipt'] = $gw_allow_gift_receipt;

        return $this;
    }

    /**
     * Gets gw_add_card
     * @return string
     */
    public function getGwAddCard()
    {
        return $this->container['gw_add_card'];
    }

    /**
     * Sets gw_add_card
     * @param string $gw_add_card
     * @return $this
     */
    public function setGwAddCard($gw_add_card)
    {
        $this->container['gw_add_card'] = $gw_add_card;

        return $this;
    }

    /**
     * Gets gw_price
     * @return string
     */
    public function getGwPrice()
    {
        return $this->container['gw_price'];
    }

    /**
     * Sets gw_price
     * @param string $gw_price
     * @return $this
     */
    public function setGwPrice($gw_price)
    {
        $this->container['gw_price'] = $gw_price;

        return $this;
    }

    /**
     * Gets gw_base_price
     * @return string
     */
    public function getGwBasePrice()
    {
        return $this->container['gw_base_price'];
    }

    /**
     * Sets gw_base_price
     * @param string $gw_base_price
     * @return $this
     */
    public function setGwBasePrice($gw_base_price)
    {
        $this->container['gw_base_price'] = $gw_base_price;

        return $this;
    }

    /**
     * Gets gw_items_price
     * @return string
     */
    public function getGwItemsPrice()
    {
        return $this->container['gw_items_price'];
    }

    /**
     * Sets gw_items_price
     * @param string $gw_items_price
     * @return $this
     */
    public function setGwItemsPrice($gw_items_price)
    {
        $this->container['gw_items_price'] = $gw_items_price;

        return $this;
    }

    /**
     * Gets gw_items_base_price
     * @return string
     */
    public function getGwItemsBasePrice()
    {
        return $this->container['gw_items_base_price'];
    }

    /**
     * Sets gw_items_base_price
     * @param string $gw_items_base_price
     * @return $this
     */
    public function setGwItemsBasePrice($gw_items_base_price)
    {
        $this->container['gw_items_base_price'] = $gw_items_base_price;

        return $this;
    }

    /**
     * Gets gw_card_price
     * @return string
     */
    public function getGwCardPrice()
    {
        return $this->container['gw_card_price'];
    }

    /**
     * Sets gw_card_price
     * @param string $gw_card_price
     * @return $this
     */
    public function setGwCardPrice($gw_card_price)
    {
        $this->container['gw_card_price'] = $gw_card_price;

        return $this;
    }

    /**
     * Gets gw_card_base_price
     * @return string
     */
    public function getGwCardBasePrice()
    {
        return $this->container['gw_card_base_price'];
    }

    /**
     * Sets gw_card_base_price
     * @param string $gw_card_base_price
     * @return $this
     */
    public function setGwCardBasePrice($gw_card_base_price)
    {
        $this->container['gw_card_base_price'] = $gw_card_base_price;

        return $this;
    }

    /**
     * Gets gw_base_tax_amount
     * @return string
     */
    public function getGwBaseTaxAmount()
    {
        return $this->container['gw_base_tax_amount'];
    }

    /**
     * Sets gw_base_tax_amount
     * @param string $gw_base_tax_amount
     * @return $this
     */
    public function setGwBaseTaxAmount($gw_base_tax_amount)
    {
        $this->container['gw_base_tax_amount'] = $gw_base_tax_amount;

        return $this;
    }

    /**
     * Gets gw_tax_amount
     * @return string
     */
    public function getGwTaxAmount()
    {
        return $this->container['gw_tax_amount'];
    }

    /**
     * Sets gw_tax_amount
     * @param string $gw_tax_amount
     * @return $this
     */
    public function setGwTaxAmount($gw_tax_amount)
    {
        $this->container['gw_tax_amount'] = $gw_tax_amount;

        return $this;
    }

    /**
     * Gets gw_items_base_tax_amount
     * @return string
     */
    public function getGwItemsBaseTaxAmount()
    {
        return $this->container['gw_items_base_tax_amount'];
    }

    /**
     * Sets gw_items_base_tax_amount
     * @param string $gw_items_base_tax_amount
     * @return $this
     */
    public function setGwItemsBaseTaxAmount($gw_items_base_tax_amount)
    {
        $this->container['gw_items_base_tax_amount'] = $gw_items_base_tax_amount;

        return $this;
    }

    /**
     * Gets gw_items_tax_amount
     * @return string
     */
    public function getGwItemsTaxAmount()
    {
        return $this->container['gw_items_tax_amount'];
    }

    /**
     * Sets gw_items_tax_amount
     * @param string $gw_items_tax_amount
     * @return $this
     */
    public function setGwItemsTaxAmount($gw_items_tax_amount)
    {
        $this->container['gw_items_tax_amount'] = $gw_items_tax_amount;

        return $this;
    }

    /**
     * Gets gw_card_base_tax_amount
     * @return string
     */
    public function getGwCardBaseTaxAmount()
    {
        return $this->container['gw_card_base_tax_amount'];
    }

    /**
     * Sets gw_card_base_tax_amount
     * @param string $gw_card_base_tax_amount
     * @return $this
     */
    public function setGwCardBaseTaxAmount($gw_card_base_tax_amount)
    {
        $this->container['gw_card_base_tax_amount'] = $gw_card_base_tax_amount;

        return $this;
    }

    /**
     * Gets gw_card_tax_amount
     * @return string
     */
    public function getGwCardTaxAmount()
    {
        return $this->container['gw_card_tax_amount'];
    }

    /**
     * Sets gw_card_tax_amount
     * @param string $gw_card_tax_amount
     * @return $this
     */
    public function setGwCardTaxAmount($gw_card_tax_amount)
    {
        $this->container['gw_card_tax_amount'] = $gw_card_tax_amount;

        return $this;
    }

    /**
     * Gets gw_price_incl_tax
     * @return string
     */
    public function getGwPriceInclTax()
    {
        return $this->container['gw_price_incl_tax'];
    }

    /**
     * Sets gw_price_incl_tax
     * @param string $gw_price_incl_tax
     * @return $this
     */
    public function setGwPriceInclTax($gw_price_incl_tax)
    {
        $this->container['gw_price_incl_tax'] = $gw_price_incl_tax;

        return $this;
    }

    /**
     * Gets gw_base_price_incl_tax
     * @return string
     */
    public function getGwBasePriceInclTax()
    {
        return $this->container['gw_base_price_incl_tax'];
    }

    /**
     * Sets gw_base_price_incl_tax
     * @param string $gw_base_price_incl_tax
     * @return $this
     */
    public function setGwBasePriceInclTax($gw_base_price_incl_tax)
    {
        $this->container['gw_base_price_incl_tax'] = $gw_base_price_incl_tax;

        return $this;
    }

    /**
     * Gets gw_card_price_incl_tax
     * @return string
     */
    public function getGwCardPriceInclTax()
    {
        return $this->container['gw_card_price_incl_tax'];
    }

    /**
     * Sets gw_card_price_incl_tax
     * @param string $gw_card_price_incl_tax
     * @return $this
     */
    public function setGwCardPriceInclTax($gw_card_price_incl_tax)
    {
        $this->container['gw_card_price_incl_tax'] = $gw_card_price_incl_tax;

        return $this;
    }

    /**
     * Gets gw_card_base_price_incl_tax
     * @return string
     */
    public function getGwCardBasePriceInclTax()
    {
        return $this->container['gw_card_base_price_incl_tax'];
    }

    /**
     * Sets gw_card_base_price_incl_tax
     * @param string $gw_card_base_price_incl_tax
     * @return $this
     */
    public function setGwCardBasePriceInclTax($gw_card_base_price_incl_tax)
    {
        $this->container['gw_card_base_price_incl_tax'] = $gw_card_base_price_incl_tax;

        return $this;
    }

    /**
     * Gets gw_items_price_incl_tax
     * @return string
     */
    public function getGwItemsPriceInclTax()
    {
        return $this->container['gw_items_price_incl_tax'];
    }

    /**
     * Sets gw_items_price_incl_tax
     * @param string $gw_items_price_incl_tax
     * @return $this
     */
    public function setGwItemsPriceInclTax($gw_items_price_incl_tax)
    {
        $this->container['gw_items_price_incl_tax'] = $gw_items_price_incl_tax;

        return $this;
    }

    /**
     * Gets gw_items_base_price_incl_tax
     * @return string
     */
    public function getGwItemsBasePriceInclTax()
    {
        return $this->container['gw_items_base_price_incl_tax'];
    }

    /**
     * Sets gw_items_base_price_incl_tax
     * @param string $gw_items_base_price_incl_tax
     * @return $this
     */
    public function setGwItemsBasePriceInclTax($gw_items_base_price_incl_tax)
    {
        $this->container['gw_items_base_price_incl_tax'] = $gw_items_base_price_incl_tax;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

