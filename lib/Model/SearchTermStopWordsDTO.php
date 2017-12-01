<?php
/**
 * SearchTermStopWordsDTO
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
 * SearchTermStopWordsDTO Class Doc Comment
 *
 * @category    Class
 * @description The stop words used for the search term generation. The itemSpecifics contains item specs which should be removed by its value. The itemTitle contains words which should be removed from the search term generated from the title.
 * @package     eSagu\Ebay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SearchTermStopWordsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SearchTermStopWordsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_specifics' => 'string[]',
        'item_title' => 'string[]'
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
        'item_specifics' => 'itemSpecifics',
        'item_title' => 'itemTitle'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'item_specifics' => 'setItemSpecifics',
        'item_title' => 'setItemTitle'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'item_specifics' => 'getItemSpecifics',
        'item_title' => 'getItemTitle'
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
        $this->container['item_specifics'] = isset($data['item_specifics']) ? $data['item_specifics'] : null;
        $this->container['item_title'] = isset($data['item_title']) ? $data['item_title'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['item_specifics'] === null) {
            $invalid_properties[] = "'item_specifics' can't be null";
        }
        if ($this->container['item_title'] === null) {
            $invalid_properties[] = "'item_title' can't be null";
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

        if ($this->container['item_specifics'] === null) {
            return false;
        }
        if ($this->container['item_title'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets item_specifics
     * @return string[]
     */
    public function getItemSpecifics()
    {
        return $this->container['item_specifics'];
    }

    /**
     * Sets item_specifics
     * @param string[] $item_specifics
     * @return $this
     */
    public function setItemSpecifics($item_specifics)
    {
        $this->container['item_specifics'] = $item_specifics;

        return $this;
    }

    /**
     * Gets item_title
     * @return string[]
     */
    public function getItemTitle()
    {
        return $this->container['item_title'];
    }

    /**
     * Sets item_title
     * @param string[] $item_title
     * @return $this
     */
    public function setItemTitle($item_title)
    {
        $this->container['item_title'] = $item_title;

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


