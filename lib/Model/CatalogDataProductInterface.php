<?php
/**
 * CatalogDataProductInterface
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
 * CatalogDataProductInterface Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataProductInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-product-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'sku' => 'string',
        'name' => 'string',
        'attribute_set_id' => 'int',
        'price' => 'float',
        'status' => 'int',
        'visibility' => 'int',
        'type_id' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'weight' => 'float',
        'extension_attributes' => '\Swagger\Client\Model\CatalogDataProductExtensionInterface',
        'product_links' => '\Swagger\Client\Model\CatalogDataProductLinkInterface[]',
        'options' => '\Swagger\Client\Model\CatalogDataProductCustomOptionInterface[]',
        'media_gallery_entries' => '\Swagger\Client\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]',
        'tier_prices' => '\Swagger\Client\Model\CatalogDataProductTierPriceInterface[]',
        'custom_attributes' => '\Swagger\Client\Model\FrameworkAttributeInterface[]'
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
        'id' => 'id',
        'sku' => 'sku',
        'name' => 'name',
        'attribute_set_id' => 'attribute_set_id',
        'price' => 'price',
        'status' => 'status',
        'visibility' => 'visibility',
        'type_id' => 'type_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'weight' => 'weight',
        'extension_attributes' => 'extension_attributes',
        'product_links' => 'product_links',
        'options' => 'options',
        'media_gallery_entries' => 'media_gallery_entries',
        'tier_prices' => 'tier_prices',
        'custom_attributes' => 'custom_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku' => 'setSku',
        'name' => 'setName',
        'attribute_set_id' => 'setAttributeSetId',
        'price' => 'setPrice',
        'status' => 'setStatus',
        'visibility' => 'setVisibility',
        'type_id' => 'setTypeId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'weight' => 'setWeight',
        'extension_attributes' => 'setExtensionAttributes',
        'product_links' => 'setProductLinks',
        'options' => 'setOptions',
        'media_gallery_entries' => 'setMediaGalleryEntries',
        'tier_prices' => 'setTierPrices',
        'custom_attributes' => 'setCustomAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku' => 'getSku',
        'name' => 'getName',
        'attribute_set_id' => 'getAttributeSetId',
        'price' => 'getPrice',
        'status' => 'getStatus',
        'visibility' => 'getVisibility',
        'type_id' => 'getTypeId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'weight' => 'getWeight',
        'extension_attributes' => 'getExtensionAttributes',
        'product_links' => 'getProductLinks',
        'options' => 'getOptions',
        'media_gallery_entries' => 'getMediaGalleryEntries',
        'tier_prices' => 'getTierPrices',
        'custom_attributes' => 'getCustomAttributes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['attribute_set_id'] = isset($data['attribute_set_id']) ? $data['attribute_set_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
        $this->container['product_links'] = isset($data['product_links']) ? $data['product_links'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['media_gallery_entries'] = isset($data['media_gallery_entries']) ? $data['media_gallery_entries'] : null;
        $this->container['tier_prices'] = isset($data['tier_prices']) ? $data['tier_prices'] : null;
        $this->container['custom_attributes'] = isset($data['custom_attributes']) ? $data['custom_attributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['sku'] === null) {
            $invalid_properties[] = "'sku' can't be null";
        }
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

        if ($this->container['sku'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku Sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets attribute_set_id
     * @return int
     */
    public function getAttributeSetId()
    {
        return $this->container['attribute_set_id'];
    }

    /**
     * Sets attribute_set_id
     * @param int $attribute_set_id Attribute set id
     * @return $this
     */
    public function setAttributeSetId($attribute_set_id)
    {
        $this->container['attribute_set_id'] = $attribute_set_id;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price Price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param int $status Status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets visibility
     * @return int
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     * @param int $visibility Visibility
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets type_id
     * @return string
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param string $type_id Type id
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at Created date
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at Updated date
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets weight
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param float $weight Weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\CatalogDataProductExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\CatalogDataProductExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

        return $this;
    }

    /**
     * Gets product_links
     * @return \Swagger\Client\Model\CatalogDataProductLinkInterface[]
     */
    public function getProductLinks()
    {
        return $this->container['product_links'];
    }

    /**
     * Sets product_links
     * @param \Swagger\Client\Model\CatalogDataProductLinkInterface[] $product_links Product links info
     * @return $this
     */
    public function setProductLinks($product_links)
    {
        $this->container['product_links'] = $product_links;

        return $this;
    }

    /**
     * Gets options
     * @return \Swagger\Client\Model\CatalogDataProductCustomOptionInterface[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \Swagger\Client\Model\CatalogDataProductCustomOptionInterface[] $options List of product options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets media_gallery_entries
     * @return \Swagger\Client\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[]
     */
    public function getMediaGalleryEntries()
    {
        return $this->container['media_gallery_entries'];
    }

    /**
     * Sets media_gallery_entries
     * @param \Swagger\Client\Model\CatalogDataProductAttributeMediaGalleryEntryInterface[] $media_gallery_entries Media gallery entries
     * @return $this
     */
    public function setMediaGalleryEntries($media_gallery_entries)
    {
        $this->container['media_gallery_entries'] = $media_gallery_entries;

        return $this;
    }

    /**
     * Gets tier_prices
     * @return \Swagger\Client\Model\CatalogDataProductTierPriceInterface[]
     */
    public function getTierPrices()
    {
        return $this->container['tier_prices'];
    }

    /**
     * Sets tier_prices
     * @param \Swagger\Client\Model\CatalogDataProductTierPriceInterface[] $tier_prices List of product tier prices
     * @return $this
     */
    public function setTierPrices($tier_prices)
    {
        $this->container['tier_prices'] = $tier_prices;

        return $this;
    }

    /**
     * Gets custom_attributes
     * @return \Swagger\Client\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     * @param \Swagger\Client\Model\FrameworkAttributeInterface[] $custom_attributes Custom attributes values.
     * @return $this
     */
    public function setCustomAttributes($custom_attributes)
    {
        $this->container['custom_attributes'] = $custom_attributes;

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


