<?php
/**
 * PriceGapsDTO
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
 * PriceGapsDTO Class Doc Comment
 *
 * @category    Class
 * @description The price gaps. The price gaps defines ow the price should be aligned to a competitors price.A PriceGapDTO without sellerId and fulfillmentType is mandatory as default price gap to use. Further PriceGapDTOs with restriction on the sellerName are optional. The name must be unique.
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PriceGapsDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PriceGapsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'inserted' => '\DateTime',
<<<<<<< HEAD
        'updated' => '\DateTime',
        'name' => 'string',
        'price_gaps' => '\eSagu\EBay\RePricing\V1\Model\PriceGapDTO[]',
=======
        'name' => 'string',
        'price_gaps' => '\eSagu\EBay\RePricing\V1\Model\PriceGapDTO[]',
        'updated' => '\DateTime',
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        'variation_boost' => 'string'
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
<<<<<<< HEAD
        'updated' => 'updated',
        'name' => 'name',
        'price_gaps' => 'priceGaps',
=======
        'name' => 'name',
        'price_gaps' => 'priceGaps',
        'updated' => 'updated',
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        'variation_boost' => 'variationBoost'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'inserted' => 'setInserted',
<<<<<<< HEAD
        'updated' => 'setUpdated',
        'name' => 'setName',
        'price_gaps' => 'setPriceGaps',
=======
        'name' => 'setName',
        'price_gaps' => 'setPriceGaps',
        'updated' => 'setUpdated',
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        'variation_boost' => 'setVariationBoost'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'inserted' => 'getInserted',
<<<<<<< HEAD
        'updated' => 'getUpdated',
        'name' => 'getName',
        'price_gaps' => 'getPriceGaps',
=======
        'name' => 'getName',
        'price_gaps' => 'getPriceGaps',
        'updated' => 'getUpdated',
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        'variation_boost' => 'getVariationBoost'
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

    const VARIATION_BOOST_NONE = 'NONE';
    const VARIATION_BOOST_LOW = 'LOW';
    const VARIATION_BOOST_MEDIUM = 'MEDIUM';
    const VARIATION_BOOST_HIGH = 'HIGH';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVariationBoostAllowableValues()
    {
        return [
            self::VARIATION_BOOST_NONE,
            self::VARIATION_BOOST_LOW,
            self::VARIATION_BOOST_MEDIUM,
            self::VARIATION_BOOST_HIGH,
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
<<<<<<< HEAD
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price_gaps'] = isset($data['price_gaps']) ? $data['price_gaps'] : null;
=======
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price_gaps'] = isset($data['price_gaps']) ? $data['price_gaps'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        $this->container['variation_boost'] = isset($data['variation_boost']) ? $data['variation_boost'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['price_gaps'] === null) {
            $invalid_properties[] = "'price_gaps' can't be null";
        }
        $allowed_values = ["NONE", "LOW", "MEDIUM", "HIGH"];
        if (!in_array($this->container['variation_boost'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'variation_boost', must be one of 'NONE', 'LOW', 'MEDIUM', 'HIGH'.";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['price_gaps'] === null) {
            return false;
        }
        $allowed_values = ["NONE", "LOW", "MEDIUM", "HIGH"];
        if (!in_array($this->container['variation_boost'], $allowed_values)) {
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
<<<<<<< HEAD
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
=======
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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
     * Gets price_gaps
     * @return \eSagu\EBay\RePricing\V1\Model\PriceGapDTO[]
     */
    public function getPriceGaps()
    {
        return $this->container['price_gaps'];
    }

    /**
     * Sets price_gaps
     * @param \eSagu\EBay\RePricing\V1\Model\PriceGapDTO[] $price_gaps
     * @return $this
     */
    public function setPriceGaps($price_gaps)
    {
        $this->container['price_gaps'] = $price_gaps;

        return $this;
    }

    /**
<<<<<<< HEAD
=======
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
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     * Gets variation_boost
     * @return string
     */
    public function getVariationBoost()
    {
        return $this->container['variation_boost'];
    }

    /**
     * Sets variation_boost
     * @param string $variation_boost
     * @return $this
     */
    public function setVariationBoost($variation_boost)
    {
        $allowed_values = array('NONE', 'LOW', 'MEDIUM', 'HIGH');
        if (!is_null($variation_boost) && (!in_array($variation_boost, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'variation_boost', must be one of 'NONE', 'LOW', 'MEDIUM', 'HIGH'");
        }
        $this->container['variation_boost'] = $variation_boost;

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


