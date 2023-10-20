<?php
/**
 * RefineByPriceState
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
<<<<<<< HEAD
 * OpenAPI spec version: 1.2.14
=======
 * OpenAPI spec version: 1.0.0
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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
 * RefineByPriceState Class Doc Comment
 *
 * @category    Class
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RefineByPriceState implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RefineByPriceState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'price_state' => 'string'
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
        'price_state' => 'priceState'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'price_state' => 'setPriceState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'price_state' => 'getPriceState'
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

    const PRICE_STATE_MIN_PRICE_HIT = 'MIN_PRICE_HIT';
    const PRICE_STATE_MAX_PRICE_HIT = 'MAX_PRICE_HIT';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPriceStateAllowableValues()
    {
        return [
            self::PRICE_STATE_MIN_PRICE_HIT,
            self::PRICE_STATE_MAX_PRICE_HIT,
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
        $this->container['price_state'] = isset($data['price_state']) ? $data['price_state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["MIN_PRICE_HIT", "MAX_PRICE_HIT"];
        if (!in_array($this->container['price_state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'price_state', must be one of 'MIN_PRICE_HIT', 'MAX_PRICE_HIT'.";
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

        $allowed_values = ["MIN_PRICE_HIT", "MAX_PRICE_HIT"];
        if (!in_array($this->container['price_state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets price_state
     * @return string
     */
    public function getPriceState()
    {
        return $this->container['price_state'];
    }

    /**
     * Sets price_state
     * @param string $price_state
     * @return $this
     */
    public function setPriceState($price_state)
    {
        $allowed_values = array('MIN_PRICE_HIT', 'MAX_PRICE_HIT');
        if (!is_null($price_state) && (!in_array($price_state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'price_state', must be one of 'MIN_PRICE_HIT', 'MAX_PRICE_HIT'");
        }
        $this->container['price_state'] = $price_state;

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


