<?php
/**
 * RefineByOrders
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
 * RefineByOrders Class Doc Comment
 *
 * @category    Class
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RefineByOrders implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RefineByOrders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
<<<<<<< HEAD
        'days' => 'string',
        'constraint' => 'string',
=======
        'constraint' => 'string',
        'days' => 'string',
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        'value' => 'int'
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
<<<<<<< HEAD
        'days' => 'days',
        'constraint' => 'constraint',
=======
        'constraint' => 'constraint',
        'days' => 'days',
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        'value' => 'value'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
<<<<<<< HEAD
        'days' => 'setDays',
        'constraint' => 'setConstraint',
=======
        'constraint' => 'setConstraint',
        'days' => 'setDays',
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        'value' => 'setValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
<<<<<<< HEAD
        'days' => 'getDays',
        'constraint' => 'getConstraint',
=======
        'constraint' => 'getConstraint',
        'days' => 'getDays',
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        'value' => 'getValue'
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

<<<<<<< HEAD
    const DAYS_SEVEN = 'SEVEN';
    const DAYS_FOURTEEN = 'FOURTEEN';
    const DAYS_THIRTY = 'THIRTY';
    const CONSTRAINT_GREATER_THAN = 'GREATER_THAN';
    const CONSTRAINT_EQUAL = 'EQUAL';
    const CONSTRAINT_LESS_THAN = 'LESS_THAN';
=======
    const CONSTRAINT_GREATER_THAN = 'GREATER_THAN';
    const CONSTRAINT_EQUAL = 'EQUAL';
    const CONSTRAINT_LESS_THAN = 'LESS_THAN';
    const DAYS_SEVEN = 'SEVEN';
    const DAYS_FOURTEEN = 'FOURTEEN';
    const DAYS_THIRTY = 'THIRTY';
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
<<<<<<< HEAD
    public function getDaysAllowableValues()
    {
        return [
            self::DAYS_SEVEN,
            self::DAYS_FOURTEEN,
            self::DAYS_THIRTY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
=======
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    public function getConstraintAllowableValues()
    {
        return [
            self::CONSTRAINT_GREATER_THAN,
            self::CONSTRAINT_EQUAL,
            self::CONSTRAINT_LESS_THAN,
        ];
    }
    
<<<<<<< HEAD
=======
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDaysAllowableValues()
    {
        return [
            self::DAYS_SEVEN,
            self::DAYS_FOURTEEN,
            self::DAYS_THIRTY,
        ];
    }
    
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

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
<<<<<<< HEAD
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['constraint'] = isset($data['constraint']) ? $data['constraint'] : null;
=======
        $this->container['constraint'] = isset($data['constraint']) ? $data['constraint'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

<<<<<<< HEAD
        $allowed_values = ["SEVEN", "FOURTEEN", "THIRTY"];
        if (!in_array($this->container['days'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'days', must be one of 'SEVEN', 'FOURTEEN', 'THIRTY'.";
        }

=======
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        $allowed_values = ["GREATER_THAN", "EQUAL", "LESS_THAN"];
        if (!in_array($this->container['constraint'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'constraint', must be one of 'GREATER_THAN', 'EQUAL', 'LESS_THAN'.";
        }

<<<<<<< HEAD
=======
        $allowed_values = ["SEVEN", "FOURTEEN", "THIRTY"];
        if (!in_array($this->container['days'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'days', must be one of 'SEVEN', 'FOURTEEN', 'THIRTY'.";
        }

>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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

<<<<<<< HEAD
        $allowed_values = ["SEVEN", "FOURTEEN", "THIRTY"];
        if (!in_array($this->container['days'], $allowed_values)) {
            return false;
        }
=======
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        $allowed_values = ["GREATER_THAN", "EQUAL", "LESS_THAN"];
        if (!in_array($this->container['constraint'], $allowed_values)) {
            return false;
        }
<<<<<<< HEAD
=======
        $allowed_values = ["SEVEN", "FOURTEEN", "THIRTY"];
        if (!in_array($this->container['days'], $allowed_values)) {
            return false;
        }
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        return true;
    }


    /**
<<<<<<< HEAD
     * Gets days
     * @return string
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     * @param string $days
     * @return $this
     */
    public function setDays($days)
    {
        $allowed_values = array('SEVEN', 'FOURTEEN', 'THIRTY');
        if (!is_null($days) && (!in_array($days, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'days', must be one of 'SEVEN', 'FOURTEEN', 'THIRTY'");
        }
        $this->container['days'] = $days;

        return $this;
    }

    /**
=======
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     * Gets constraint
     * @return string
     */
    public function getConstraint()
    {
        return $this->container['constraint'];
    }

    /**
     * Sets constraint
     * @param string $constraint
     * @return $this
     */
    public function setConstraint($constraint)
    {
        $allowed_values = array('GREATER_THAN', 'EQUAL', 'LESS_THAN');
        if (!is_null($constraint) && (!in_array($constraint, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'constraint', must be one of 'GREATER_THAN', 'EQUAL', 'LESS_THAN'");
        }
        $this->container['constraint'] = $constraint;

        return $this;
    }

    /**
<<<<<<< HEAD
=======
     * Gets days
     * @return string
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     * @param string $days
     * @return $this
     */
    public function setDays($days)
    {
        $allowed_values = array('SEVEN', 'FOURTEEN', 'THIRTY');
        if (!is_null($days) && (!in_array($days, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'days', must be one of 'SEVEN', 'FOURTEEN', 'THIRTY'");
        }
        $this->container['days'] = $days;

        return $this;
    }

    /**
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     * Gets value
     * @return int
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param int $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


