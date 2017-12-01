<?php
/**
 * BulkEditRefinement
 *
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\Ebay\RePricing\V1
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eSagu ebay RePricing API
 *
 * eSagu API to reprice items on ebay.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model;

use \ArrayAccess;

/**
 * BulkEditRefinement Class Doc Comment
 *
 * @category    Class
 * @package     eSagu\Ebay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkEditRefinement implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BulkEditRefinement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'by_condition' => '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByCondition',
        'by_current_price' => '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByCurrentPrice',
        'by_end_time' => '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByEndTime',
        'by_item_id' => '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByItemId',
        'by_item_ids' => '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByItemIds',
        'by_quantity' => '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByQuantity',
        'by_sku' => '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineBySKU',
        'by_shipping' => '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByShipping',
        'by_title' => '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByTitle'
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
        'by_condition' => 'byCondition',
        'by_current_price' => 'byCurrentPrice',
        'by_end_time' => 'byEndTime',
        'by_item_id' => 'byItemId',
        'by_item_ids' => 'byItemIds',
        'by_quantity' => 'byQuantity',
        'by_sku' => 'bySKU',
        'by_shipping' => 'byShipping',
        'by_title' => 'byTitle'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'by_condition' => 'setByCondition',
        'by_current_price' => 'setByCurrentPrice',
        'by_end_time' => 'setByEndTime',
        'by_item_id' => 'setByItemId',
        'by_item_ids' => 'setByItemIds',
        'by_quantity' => 'setByQuantity',
        'by_sku' => 'setBySku',
        'by_shipping' => 'setByShipping',
        'by_title' => 'setByTitle'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'by_condition' => 'getByCondition',
        'by_current_price' => 'getByCurrentPrice',
        'by_end_time' => 'getByEndTime',
        'by_item_id' => 'getByItemId',
        'by_item_ids' => 'getByItemIds',
        'by_quantity' => 'getByQuantity',
        'by_sku' => 'getBySku',
        'by_shipping' => 'getByShipping',
        'by_title' => 'getByTitle'
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
        $this->container['by_condition'] = isset($data['by_condition']) ? $data['by_condition'] : null;
        $this->container['by_current_price'] = isset($data['by_current_price']) ? $data['by_current_price'] : null;
        $this->container['by_end_time'] = isset($data['by_end_time']) ? $data['by_end_time'] : null;
        $this->container['by_item_id'] = isset($data['by_item_id']) ? $data['by_item_id'] : null;
        $this->container['by_item_ids'] = isset($data['by_item_ids']) ? $data['by_item_ids'] : null;
        $this->container['by_quantity'] = isset($data['by_quantity']) ? $data['by_quantity'] : null;
        $this->container['by_sku'] = isset($data['by_sku']) ? $data['by_sku'] : null;
        $this->container['by_shipping'] = isset($data['by_shipping']) ? $data['by_shipping'] : null;
        $this->container['by_title'] = isset($data['by_title']) ? $data['by_title'] : null;
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
     * Gets by_condition
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByCondition
     */
    public function getByCondition()
    {
        return $this->container['by_condition'];
    }

    /**
     * Sets by_condition
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByCondition $by_condition
     * @return $this
     */
    public function setByCondition($by_condition)
    {
        $this->container['by_condition'] = $by_condition;

        return $this;
    }

    /**
     * Gets by_current_price
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByCurrentPrice
     */
    public function getByCurrentPrice()
    {
        return $this->container['by_current_price'];
    }

    /**
     * Sets by_current_price
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByCurrentPrice $by_current_price
     * @return $this
     */
    public function setByCurrentPrice($by_current_price)
    {
        $this->container['by_current_price'] = $by_current_price;

        return $this;
    }

    /**
     * Gets by_end_time
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByEndTime
     */
    public function getByEndTime()
    {
        return $this->container['by_end_time'];
    }

    /**
     * Sets by_end_time
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByEndTime $by_end_time
     * @return $this
     */
    public function setByEndTime($by_end_time)
    {
        $this->container['by_end_time'] = $by_end_time;

        return $this;
    }

    /**
     * Gets by_item_id
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByItemId
     */
    public function getByItemId()
    {
        return $this->container['by_item_id'];
    }

    /**
     * Sets by_item_id
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByItemId $by_item_id
     * @return $this
     */
    public function setByItemId($by_item_id)
    {
        $this->container['by_item_id'] = $by_item_id;

        return $this;
    }

    /**
     * Gets by_item_ids
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByItemIds
     */
    public function getByItemIds()
    {
        return $this->container['by_item_ids'];
    }

    /**
     * Sets by_item_ids
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByItemIds $by_item_ids
     * @return $this
     */
    public function setByItemIds($by_item_ids)
    {
        $this->container['by_item_ids'] = $by_item_ids;

        return $this;
    }

    /**
     * Gets by_quantity
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByQuantity
     */
    public function getByQuantity()
    {
        return $this->container['by_quantity'];
    }

    /**
     * Sets by_quantity
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByQuantity $by_quantity
     * @return $this
     */
    public function setByQuantity($by_quantity)
    {
        $this->container['by_quantity'] = $by_quantity;

        return $this;
    }

    /**
     * Gets by_sku
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineBySKU
     */
    public function getBySku()
    {
        return $this->container['by_sku'];
    }

    /**
     * Sets by_sku
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineBySKU $by_sku
     * @return $this
     */
    public function setBySku($by_sku)
    {
        $this->container['by_sku'] = $by_sku;

        return $this;
    }

    /**
     * Gets by_shipping
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByShipping
     */
    public function getByShipping()
    {
        return $this->container['by_shipping'];
    }

    /**
     * Sets by_shipping
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByShipping $by_shipping
     * @return $this
     */
    public function setByShipping($by_shipping)
    {
        $this->container['by_shipping'] = $by_shipping;

        return $this;
    }

    /**
     * Gets by_title
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByTitle
     */
    public function getByTitle()
    {
        return $this->container['by_title'];
    }

    /**
     * Sets by_title
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RefineByTitle $by_title
     * @return $this
     */
    public function setByTitle($by_title)
    {
        $this->container['by_title'] = $by_title;

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
            return json_encode(\eSagu\Ebay\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\eSagu\Ebay\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this));
    }
}


