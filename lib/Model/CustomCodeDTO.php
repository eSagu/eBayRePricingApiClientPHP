<?php
/**
 * CustomCodeDTO
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
 * CustomCodeDTO Class Doc Comment
 *
 * @category    Class
 * @description A custom code. A custom code is a small Groovy snipped used for individual price calculation. If verified is true the code can be used for optimization. The name must be unique.
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomCodeDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomCodeDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'inserted' => '\DateTime',
        'updated' => '\DateTime',
        'user_service_id' => 'int',
        'name' => 'string',
        'verified' => 'bool',
        'code' => 'string',
        'scripting_language' => 'string',
        'settings' => 'object',
        'code_is_hidden' => 'bool'
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
        'inserted' => 'inserted',
        'updated' => 'updated',
        'user_service_id' => 'userServiceId',
        'name' => 'name',
        'verified' => 'verified',
        'code' => 'code',
        'scripting_language' => 'scriptingLanguage',
        'settings' => 'settings',
        'code_is_hidden' => 'codeIsHidden'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'inserted' => 'setInserted',
        'updated' => 'setUpdated',
        'user_service_id' => 'setUserServiceId',
        'name' => 'setName',
        'verified' => 'setVerified',
        'code' => 'setCode',
        'scripting_language' => 'setScriptingLanguage',
        'settings' => 'setSettings',
        'code_is_hidden' => 'setCodeIsHidden'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'inserted' => 'getInserted',
        'updated' => 'getUpdated',
        'user_service_id' => 'getUserServiceId',
        'name' => 'getName',
        'verified' => 'getVerified',
        'code' => 'getCode',
        'scripting_language' => 'getScriptingLanguage',
        'settings' => 'getSettings',
        'code_is_hidden' => 'getCodeIsHidden'
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

    const SCRIPTING_LANGUAGE_JAVA_SCRIPT_NASHORN = 'JAVA_SCRIPT_NASHORN';
    const SCRIPTING_LANGUAGE_GROOVY = 'GROOVY';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getScriptingLanguageAllowableValues()
    {
        return [
            self::SCRIPTING_LANGUAGE_JAVA_SCRIPT_NASHORN,
            self::SCRIPTING_LANGUAGE_GROOVY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['user_service_id'] = isset($data['user_service_id']) ? $data['user_service_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['verified'] = isset($data['verified']) ? $data['verified'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['scripting_language'] = isset($data['scripting_language']) ? $data['scripting_language'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['code_is_hidden'] = isset($data['code_is_hidden']) ? $data['code_is_hidden'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["JAVA_SCRIPT_NASHORN", "GROOVY"];
        if (!in_array($this->container['scripting_language'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'scripting_language', must be one of 'JAVA_SCRIPT_NASHORN', 'GROOVY'.";
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

        $allowed_values = ["JAVA_SCRIPT_NASHORN", "GROOVY"];
        if (!in_array($this->container['scripting_language'], $allowed_values)) {
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
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets user_service_id
     * @return int
     */
    public function getUserServiceId()
    {
        return $this->container['user_service_id'];
    }

    /**
     * Sets user_service_id
     * @param int $user_service_id
     * @return $this
     */
    public function setUserServiceId($user_service_id)
    {
        $this->container['user_service_id'] = $user_service_id;

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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets verified
     * @return bool
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     * @param bool $verified
     * @return $this
     */
    public function setVerified($verified)
    {
        $this->container['verified'] = $verified;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets scripting_language
     * @return string
     */
    public function getScriptingLanguage()
    {
        return $this->container['scripting_language'];
    }

    /**
     * Sets scripting_language
     * @param string $scripting_language
     * @return $this
     */
    public function setScriptingLanguage($scripting_language)
    {
        $allowed_values = array('JAVA_SCRIPT_NASHORN', 'GROOVY');
        if (!is_null($scripting_language) && (!in_array($scripting_language, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'scripting_language', must be one of 'JAVA_SCRIPT_NASHORN', 'GROOVY'");
        }
        $this->container['scripting_language'] = $scripting_language;

        return $this;
    }

    /**
     * Gets settings
     * @return object
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     * @param object $settings
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets code_is_hidden
     * @return bool
     */
    public function getCodeIsHidden()
    {
        return $this->container['code_is_hidden'];
    }

    /**
     * Sets code_is_hidden
     * @param bool $code_is_hidden
     * @return $this
     */
    public function setCodeIsHidden($code_is_hidden)
    {
        $this->container['code_is_hidden'] = $code_is_hidden;

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

