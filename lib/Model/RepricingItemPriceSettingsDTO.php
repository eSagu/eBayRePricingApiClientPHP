<?php
/**
 * RepricingItemPriceSettingsDTO
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
 * RepricingItemPriceSettingsDTO Class Doc Comment
 *
 * @category    Class
 * @description The repricing item&#39;s price settings. The price settings include the price range and the strategy used for optimization. The minPrice must be greater 0, the max price must be greater as the min price. The fixedPrice bust be between the min and max price.
 * @package     eSagu\Ebay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingItemPriceSettingsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingItemPriceSettingsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fixed_price' => 'int',
        'max_price' => 'int',
        'min_price' => 'int',
        'mode' => 'string'
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
        'fixed_price' => 'fixedPrice',
        'max_price' => 'maxPrice',
        'min_price' => 'minPrice',
        'mode' => 'mode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'fixed_price' => 'setFixedPrice',
        'max_price' => 'setMaxPrice',
        'min_price' => 'setMinPrice',
        'mode' => 'setMode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'fixed_price' => 'getFixedPrice',
        'max_price' => 'getMaxPrice',
        'min_price' => 'getMinPrice',
        'mode' => 'getMode'
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

    const MODE_UNDEFINED = 'UNDEFINED';
    const MODE_FIXED_PRICE = 'FIXED_PRICE';
    const MODE_OPTIMIZATION = 'OPTIMIZATION';
    const MODE_DISABLED = 'DISABLED';
    const MODE_CUSTOM_CODE = 'CUSTOM_CODE';
    const MODE_OPTIMIZATION_BEST_VISIBILITY = 'OPTIMIZATION_BEST_VISIBILITY';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_UNDEFINED,
            self::MODE_FIXED_PRICE,
            self::MODE_OPTIMIZATION,
            self::MODE_DISABLED,
            self::MODE_CUSTOM_CODE,
            self::MODE_OPTIMIZATION_BEST_VISIBILITY,
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
        $this->container['fixed_price'] = isset($data['fixed_price']) ? $data['fixed_price'] : null;
        $this->container['max_price'] = isset($data['max_price']) ? $data['max_price'] : null;
        $this->container['min_price'] = isset($data['min_price']) ? $data['min_price'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["UNDEFINED", "FIXED_PRICE", "OPTIMIZATION", "DISABLED", "CUSTOM_CODE", "OPTIMIZATION_BEST_VISIBILITY"];
        if (!in_array($this->container['mode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'mode', must be one of 'UNDEFINED', 'FIXED_PRICE', 'OPTIMIZATION', 'DISABLED', 'CUSTOM_CODE', 'OPTIMIZATION_BEST_VISIBILITY'.";
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

        $allowed_values = ["UNDEFINED", "FIXED_PRICE", "OPTIMIZATION", "DISABLED", "CUSTOM_CODE", "OPTIMIZATION_BEST_VISIBILITY"];
        if (!in_array($this->container['mode'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets fixed_price
     * @return int
     */
    public function getFixedPrice()
    {
        return $this->container['fixed_price'];
    }

    /**
     * Sets fixed_price
     * @param int $fixed_price
     * @return $this
     */
    public function setFixedPrice($fixed_price)
    {
        $this->container['fixed_price'] = $fixed_price;

        return $this;
    }

    /**
     * Gets max_price
     * @return int
     */
    public function getMaxPrice()
    {
        return $this->container['max_price'];
    }

    /**
     * Sets max_price
     * @param int $max_price
     * @return $this
     */
    public function setMaxPrice($max_price)
    {
        $this->container['max_price'] = $max_price;

        return $this;
    }

    /**
     * Gets min_price
     * @return int
     */
    public function getMinPrice()
    {
        return $this->container['min_price'];
    }

    /**
     * Sets min_price
     * @param int $min_price
     * @return $this
     */
    public function setMinPrice($min_price)
    {
        $this->container['min_price'] = $min_price;

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
        $allowed_values = array('UNDEFINED', 'FIXED_PRICE', 'OPTIMIZATION', 'DISABLED', 'CUSTOM_CODE', 'OPTIMIZATION_BEST_VISIBILITY');
        if (!is_null($mode) && (!in_array($mode, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'mode', must be one of 'UNDEFINED', 'FIXED_PRICE', 'OPTIMIZATION', 'DISABLED', 'CUSTOM_CODE', 'OPTIMIZATION_BEST_VISIBILITY'");
        }
        $this->container['mode'] = $mode;

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


