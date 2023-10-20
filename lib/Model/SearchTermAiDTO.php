<?php
/**
 * SearchTermAiDTO
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
 * SearchTermAiDTO Class Doc Comment
 *
 * @category    Class
 * @description The search term ai object is used for the search term generation with ai support. The prompt contains the instruction how the ai should generate the search word. The temperature will make the output more random with higher values, while lower values make it more focused and deterministic. Positive presencePenalty values penalize new tokens based on whether they appear in the text so far, increasing the model&#39;s likelihood to talk about new topics. Positive values frequencyPenalty penalize new tokens based on their existing frequency in the text so far, decreasing the model&#39;s likelihood to repeat the same line verbatim.
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SearchTermAiDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SearchTermAiDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inserted' => '\DateTime',
        'updated' => '\DateTime',
        'prompt' => 'string',
        'setting' => 'string'
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
        'updated' => 'updated',
        'prompt' => 'prompt',
        'setting' => 'setting'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'inserted' => 'setInserted',
        'updated' => 'setUpdated',
        'prompt' => 'setPrompt',
        'setting' => 'setSetting'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'inserted' => 'getInserted',
        'updated' => 'getUpdated',
        'prompt' => 'getPrompt',
        'setting' => 'getSetting'
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

    const SETTING_STRICT = 'STRICT';
    const SETTING_BALANCED = 'BALANCED';
    const SETTING_CREATIVE = 'CREATIVE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSettingAllowableValues()
    {
        return [
            self::SETTING_STRICT,
            self::SETTING_BALANCED,
            self::SETTING_CREATIVE,
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
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['prompt'] = isset($data['prompt']) ? $data['prompt'] : null;
        $this->container['setting'] = isset($data['setting']) ? $data['setting'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['prompt'] === null) {
            $invalid_properties[] = "'prompt' can't be null";
        }
        if ($this->container['setting'] === null) {
            $invalid_properties[] = "'setting' can't be null";
        }
        $allowed_values = ["STRICT", "BALANCED", "CREATIVE"];
        if (!in_array($this->container['setting'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'setting', must be one of 'STRICT', 'BALANCED', 'CREATIVE'.";
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

        if ($this->container['prompt'] === null) {
            return false;
        }
        if ($this->container['setting'] === null) {
            return false;
        }
        $allowed_values = ["STRICT", "BALANCED", "CREATIVE"];
        if (!in_array($this->container['setting'], $allowed_values)) {
            return false;
        }
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
     * Gets prompt
     * @return string
     */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
     * Sets prompt
     * @param string $prompt
     * @return $this
     */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;

        return $this;
    }

    /**
     * Gets setting
     * @return string
     */
    public function getSetting()
    {
        return $this->container['setting'];
    }

    /**
     * Sets setting
     * @param string $setting
     * @return $this
     */
    public function setSetting($setting)
    {
        $allowed_values = array('STRICT', 'BALANCED', 'CREATIVE');
        if ((!in_array($setting, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'setting', must be one of 'STRICT', 'BALANCED', 'CREATIVE'");
        }
        $this->container['setting'] = $setting;

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


