<?php
/**
 * RepricingItemAdditionalDetailsDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eSagu ebay RePricing API
 *
 * eSagu API to reprice items on ebay.
 *
 * OpenAPI spec version: 1.2.14
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace eSagu\EBay\RePricing\V1\Model;

use \ArrayAccess;

/**
 * RepricingItemAdditionalDetailsDTO Class Doc Comment
 *
 * @category    Class
 * @description Additional details about the repricing item. These information are the product id if found on ebay or the item specifics.
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingItemAdditionalDetailsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingItemAdditionalDetailsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'repricing_item_id' => 'int',
        'inserted' => '\DateTime',
        'updated' => '\DateTime',
        'product_id_type' => 'string',
        'product_id_value' => 'string',
        'item_specifics' => 'map[string,string[]]'
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
        'repricing_item_id' => 'repricingItemId',
        'inserted' => 'inserted',
        'updated' => 'updated',
        'product_id_type' => 'productIdType',
        'product_id_value' => 'productIdValue',
        'item_specifics' => 'itemSpecifics'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'repricing_item_id' => 'setRepricingItemId',
        'inserted' => 'setInserted',
        'updated' => 'setUpdated',
        'product_id_type' => 'setProductIdType',
        'product_id_value' => 'setProductIdValue',
        'item_specifics' => 'setItemSpecifics'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'repricing_item_id' => 'getRepricingItemId',
        'inserted' => 'getInserted',
        'updated' => 'getUpdated',
        'product_id_type' => 'getProductIdType',
        'product_id_value' => 'getProductIdValue',
        'item_specifics' => 'getItemSpecifics'
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

    const PRODUCT_ID_TYPE_EAN = 'EAN';
    const PRODUCT_ID_TYPE_UPC = 'UPC';
    const PRODUCT_ID_TYPE_ISBN = 'ISBN';
    const PRODUCT_ID_TYPE_REFERENCE_ID = 'REFERENCE_ID';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getProductIdTypeAllowableValues()
    {
        return [
            self::PRODUCT_ID_TYPE_EAN,
            self::PRODUCT_ID_TYPE_UPC,
            self::PRODUCT_ID_TYPE_ISBN,
            self::PRODUCT_ID_TYPE_REFERENCE_ID,
        ];
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
        $this->container['repricing_item_id'] = isset($data['repricing_item_id']) ? $data['repricing_item_id'] : null;
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['product_id_type'] = isset($data['product_id_type']) ? $data['product_id_type'] : null;
        $this->container['product_id_value'] = isset($data['product_id_value']) ? $data['product_id_value'] : null;
        $this->container['item_specifics'] = isset($data['item_specifics']) ? $data['item_specifics'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["EAN", "UPC", "ISBN", "REFERENCE_ID"];
        if (!in_array($this->container['product_id_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'product_id_type', must be one of 'EAN', 'UPC', 'ISBN', 'REFERENCE_ID'.";
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

        $allowed_values = ["EAN", "UPC", "ISBN", "REFERENCE_ID"];
        if (!in_array($this->container['product_id_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets repricing_item_id
     * @return int
     */
    public function getRepricingItemId()
    {
        return $this->container['repricing_item_id'];
    }

    /**
     * Sets repricing_item_id
     * @param int $repricing_item_id
     * @return $this
     */
    public function setRepricingItemId($repricing_item_id)
    {
        $this->container['repricing_item_id'] = $repricing_item_id;

        return $this;
    }

    /**
     * Gets inserted
     * @return \DateTime
     */
    public function getInserted()
    {
        return $this->container['inserted'];
    }

    /**
     * Sets inserted
     * @param \DateTime $inserted
     * @return $this
     */
    public function setInserted($inserted)
    {
        $this->container['inserted'] = $inserted;

        return $this;
    }

    /**
     * Gets updated
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param \DateTime $updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets product_id_type
     * @return string
     */
    public function getProductIdType()
    {
        return $this->container['product_id_type'];
    }

    /**
     * Sets product_id_type
     * @param string $product_id_type
     * @return $this
     */
    public function setProductIdType($product_id_type)
    {
        $allowed_values = array('EAN', 'UPC', 'ISBN', 'REFERENCE_ID');
        if (!is_null($product_id_type) && (!in_array($product_id_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'product_id_type', must be one of 'EAN', 'UPC', 'ISBN', 'REFERENCE_ID'");
        }
        $this->container['product_id_type'] = $product_id_type;

        return $this;
    }

    /**
     * Gets product_id_value
     * @return string
     */
    public function getProductIdValue()
    {
        return $this->container['product_id_value'];
    }

    /**
     * Sets product_id_value
     * @param string $product_id_value
     * @return $this
     */
    public function setProductIdValue($product_id_value)
    {
        $this->container['product_id_value'] = $product_id_value;

        return $this;
    }

    /**
     * Gets item_specifics
     * @return map[string,string[]]
     */
    public function getItemSpecifics()
    {
        return $this->container['item_specifics'];
    }

    /**
     * Sets item_specifics
     * @param map[string,string[]] $item_specifics
     * @return $this
     */
    public function setItemSpecifics($item_specifics)
    {
        $this->container['item_specifics'] = $item_specifics;

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
            return json_encode(\eSagu\EBay\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\eSagu\EBay\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this));
    }
}

