<?php
/**
 * RepricingItemOptimizationResultDTO
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
 * RepricingItemOptimizationResultDTO Class Doc Comment
 *
 * @category    Class
 * @description A repricing item&#39;s optimization result. It contains the optimized price, the date of the last optimization and the date of the first optimization.
 * @package     eSagu\Ebay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingItemOptimizationResultDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingItemOptimizationResultDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inserted' => '\DateTime',
        'optimized_price' => 'int',
        'updated' => '\DateTime'
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
        'inserted' => 'inserted',
        'optimized_price' => 'optimizedPrice',
        'updated' => 'updated'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'inserted' => 'setInserted',
        'optimized_price' => 'setOptimizedPrice',
        'updated' => 'setUpdated'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'inserted' => 'getInserted',
        'optimized_price' => 'getOptimizedPrice',
        'updated' => 'getUpdated'
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
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['optimized_price'] = isset($data['optimized_price']) ? $data['optimized_price'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
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
     * Gets optimized_price
     * @return int
     */
    public function getOptimizedPrice()
    {
        return $this->container['optimized_price'];
    }

    /**
     * Sets optimized_price
     * @param int $optimized_price
     * @return $this
     */
    public function setOptimizedPrice($optimized_price)
    {
        $this->container['optimized_price'] = $optimized_price;

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


