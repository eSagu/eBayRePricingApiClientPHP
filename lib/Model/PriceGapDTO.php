<?php
/**
 * PriceGapDTO
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
 * PriceGapDTO Class Doc Comment
 *
 * @category    Class
 * @description A single price gap rule. The gap defined the amount and can be negative for underbidding or positive for overbidding.The mode defined hwo the gap should be calculated if ABSOLUTE is set, the gap gets used without any calculation. If the mode is PERCENTAGE_EXCLUDED_SHIPPING or PERCENTAGE_WITH_SHIPPING the competitors offers price will be used with or without shipping costs as base for the percentage gap calculation.The sellerName is optional.
 * @package     eSagu\Ebay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PriceGapDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PriceGapDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gap' => 'int',
        'mode' => 'string',
        'seller_name' => 'string'
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
        'gap' => 'gap',
        'mode' => 'mode',
        'seller_name' => 'sellerName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'gap' => 'setGap',
        'mode' => 'setMode',
        'seller_name' => 'setSellerName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'gap' => 'getGap',
        'mode' => 'getMode',
        'seller_name' => 'getSellerName'
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

    const MODE_ABSOLUTE = 'ABSOLUTE';
    const MODE_PERCENTAGE_WITH_SHIPPING = 'PERCENTAGE_WITH_SHIPPING';
    const MODE_PERCENTAGE_EXCLUDED_SHIPPING = 'PERCENTAGE_EXCLUDED_SHIPPING';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_ABSOLUTE,
            self::MODE_PERCENTAGE_WITH_SHIPPING,
            self::MODE_PERCENTAGE_EXCLUDED_SHIPPING,
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
        $this->container['gap'] = isset($data['gap']) ? $data['gap'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['seller_name'] = isset($data['seller_name']) ? $data['seller_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["ABSOLUTE", "PERCENTAGE_WITH_SHIPPING", "PERCENTAGE_EXCLUDED_SHIPPING"];
        if (!in_array($this->container['mode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'mode', must be one of 'ABSOLUTE', 'PERCENTAGE_WITH_SHIPPING', 'PERCENTAGE_EXCLUDED_SHIPPING'.";
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

        $allowed_values = ["ABSOLUTE", "PERCENTAGE_WITH_SHIPPING", "PERCENTAGE_EXCLUDED_SHIPPING"];
        if (!in_array($this->container['mode'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets gap
     * @return int
     */
    public function getGap()
    {
        return $this->container['gap'];
    }

    /**
     * Sets gap
     * @param int $gap
     * @return $this
     */
    public function setGap($gap)
    {
        $this->container['gap'] = $gap;

        return $this;
    }

    /**
     * Gets mode
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $allowed_values = array('ABSOLUTE', 'PERCENTAGE_WITH_SHIPPING', 'PERCENTAGE_EXCLUDED_SHIPPING');
        if (!is_null($mode) && (!in_array($mode, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'mode', must be one of 'ABSOLUTE', 'PERCENTAGE_WITH_SHIPPING', 'PERCENTAGE_EXCLUDED_SHIPPING'");
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets seller_name
     * @return string
     */
    public function getSellerName()
    {
        return $this->container['seller_name'];
    }

    /**
     * Sets seller_name
     * @param string $seller_name
     * @return $this
     */
    public function setSellerName($seller_name)
    {
        $this->container['seller_name'] = $seller_name;

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


