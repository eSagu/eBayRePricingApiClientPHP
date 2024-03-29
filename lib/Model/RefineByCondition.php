<?php
/**
 * RefineByCondition
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
 * RefineByCondition Class Doc Comment
 *
 * @category    Class
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RefineByCondition implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RefineByCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'condition' => 'string'
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
        'condition' => 'condition'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition'
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

    const CONDITION_NEW = 'NEW';
    const CONDITION_NEW_OTHER = 'NEW_OTHER';
    const CONDITION_NEW_WITH_DEFECTS = 'NEW_WITH_DEFECTS';
    const CONDITION_MANUFACTURER_REFURBISHED = 'MANUFACTURER_REFURBISHED';
    const CONDITION_EXCELLENT_REFURBISHED_BY_QUALIFIED = 'EXCELLENT_REFURBISHED_BY_QUALIFIED';
    const CONDITION_VERY_GOOD_REFURBISHED_BY_QUALIFIED = 'VERY_GOOD_REFURBISHED_BY_QUALIFIED';
    const CONDITION_GOOD_REFURBISHED_BY_QUALIFIED = 'GOOD_REFURBISHED_BY_QUALIFIED';
    const CONDITION_SELLER_REFURBISHED = 'SELLER_REFURBISHED';
    const CONDITION_LIKE_NEW = 'LIKE_NEW';
    const CONDITION_USED_EXCELLENT = 'USED_EXCELLENT';
    const CONDITION_USED_VERY_GOOD = 'USED_VERY_GOOD';
    const CONDITION_USED_GOOD = 'USED_GOOD';
    const CONDITION_USED_ACCEPTABLE = 'USED_ACCEPTABLE';
    const CONDITION_FOR_PARTS_OR_NOT_WORKING = 'FOR_PARTS_OR_NOT_WORKING';
    const CONDITION_UNKNOWN = 'UNKNOWN';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION_NEW,
            self::CONDITION_NEW_OTHER,
            self::CONDITION_NEW_WITH_DEFECTS,
            self::CONDITION_MANUFACTURER_REFURBISHED,
            self::CONDITION_EXCELLENT_REFURBISHED_BY_QUALIFIED,
            self::CONDITION_VERY_GOOD_REFURBISHED_BY_QUALIFIED,
            self::CONDITION_GOOD_REFURBISHED_BY_QUALIFIED,
            self::CONDITION_SELLER_REFURBISHED,
            self::CONDITION_LIKE_NEW,
            self::CONDITION_USED_EXCELLENT,
            self::CONDITION_USED_VERY_GOOD,
            self::CONDITION_USED_GOOD,
            self::CONDITION_USED_ACCEPTABLE,
            self::CONDITION_FOR_PARTS_OR_NOT_WORKING,
            self::CONDITION_UNKNOWN,
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["NEW", "NEW_OTHER", "NEW_WITH_DEFECTS", "MANUFACTURER_REFURBISHED", "EXCELLENT_REFURBISHED_BY_QUALIFIED", "VERY_GOOD_REFURBISHED_BY_QUALIFIED", "GOOD_REFURBISHED_BY_QUALIFIED", "SELLER_REFURBISHED", "LIKE_NEW", "USED_EXCELLENT", "USED_VERY_GOOD", "USED_GOOD", "USED_ACCEPTABLE", "FOR_PARTS_OR_NOT_WORKING", "UNKNOWN"];
        if (!in_array($this->container['condition'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'condition', must be one of 'NEW', 'NEW_OTHER', 'NEW_WITH_DEFECTS', 'MANUFACTURER_REFURBISHED', 'EXCELLENT_REFURBISHED_BY_QUALIFIED', 'VERY_GOOD_REFURBISHED_BY_QUALIFIED', 'GOOD_REFURBISHED_BY_QUALIFIED', 'SELLER_REFURBISHED', 'LIKE_NEW', 'USED_EXCELLENT', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'FOR_PARTS_OR_NOT_WORKING', 'UNKNOWN'.";
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

        $allowed_values = ["NEW", "NEW_OTHER", "NEW_WITH_DEFECTS", "MANUFACTURER_REFURBISHED", "EXCELLENT_REFURBISHED_BY_QUALIFIED", "VERY_GOOD_REFURBISHED_BY_QUALIFIED", "GOOD_REFURBISHED_BY_QUALIFIED", "SELLER_REFURBISHED", "LIKE_NEW", "USED_EXCELLENT", "USED_VERY_GOOD", "USED_GOOD", "USED_ACCEPTABLE", "FOR_PARTS_OR_NOT_WORKING", "UNKNOWN"];
        if (!in_array($this->container['condition'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets condition
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param string $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $allowed_values = array('NEW', 'NEW_OTHER', 'NEW_WITH_DEFECTS', 'MANUFACTURER_REFURBISHED', 'EXCELLENT_REFURBISHED_BY_QUALIFIED', 'VERY_GOOD_REFURBISHED_BY_QUALIFIED', 'GOOD_REFURBISHED_BY_QUALIFIED', 'SELLER_REFURBISHED', 'LIKE_NEW', 'USED_EXCELLENT', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'FOR_PARTS_OR_NOT_WORKING', 'UNKNOWN');
        if (!is_null($condition) && (!in_array($condition, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'condition', must be one of 'NEW', 'NEW_OTHER', 'NEW_WITH_DEFECTS', 'MANUFACTURER_REFURBISHED', 'EXCELLENT_REFURBISHED_BY_QUALIFIED', 'VERY_GOOD_REFURBISHED_BY_QUALIFIED', 'GOOD_REFURBISHED_BY_QUALIFIED', 'SELLER_REFURBISHED', 'LIKE_NEW', 'USED_EXCELLENT', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'FOR_PARTS_OR_NOT_WORKING', 'UNKNOWN'");
        }
        $this->container['condition'] = $condition;

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


