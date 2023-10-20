<?php
/**
 * RefineBySite
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
 * RefineBySite Class Doc Comment
 *
 * @category    Class
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RefineBySite implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RefineBySite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'site' => 'string'
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
        'site' => 'site'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'site' => 'setSite'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'site' => 'getSite'
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

    const SITE_US = 'EBAY_US';
    const SITE_ENCA = 'EBAY_ENCA';
    const SITE_GB = 'EBAY_GB';
    const SITE_AU = 'EBAY_AU';
    const SITE_AT = 'EBAY_AT';
    const SITE_FRBE = 'EBAY_FRBE';
    const SITE_FR = 'EBAY_FR';
    const SITE_DE = 'EBAY_DE';
    const SITE_MOTOR = 'EBAY_MOTOR';
    const SITE_IT = 'EBAY_IT';
    const SITE_NLBE = 'EBAY_NLBE';
    const SITE_NL = 'EBAY_NL';
    const SITE_ES = 'EBAY_ES';
    const SITE_CH = 'EBAY_CH';
    const SITE_HK = 'EBAY_HK';
    const SITE_IN = 'EBAY_IN';
    const SITE_IE = 'EBAY_IE';
    const SITE_MY = 'EBAY_MY';
    const SITE_FRCA = 'EBAY_FRCA';
    const SITE_PH = 'EBAY_PH';
    const SITE_PL = 'EBAY_PL';
    const SITE_SG = 'EBAY_SG';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSiteAllowableValues()
    {
        return [
            self::SITE_US,
            self::SITE_ENCA,
            self::SITE_GB,
            self::SITE_AU,
            self::SITE_AT,
            self::SITE_FRBE,
            self::SITE_FR,
            self::SITE_DE,
            self::SITE_MOTOR,
            self::SITE_IT,
            self::SITE_NLBE,
            self::SITE_NL,
            self::SITE_ES,
            self::SITE_CH,
            self::SITE_HK,
            self::SITE_IN,
            self::SITE_IE,
            self::SITE_MY,
            self::SITE_FRCA,
            self::SITE_PH,
            self::SITE_PL,
            self::SITE_SG,
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
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["EBAY_US", "EBAY_ENCA", "EBAY_GB", "EBAY_AU", "EBAY_AT", "EBAY_FRBE", "EBAY_FR", "EBAY_DE", "EBAY_MOTOR", "EBAY_IT", "EBAY_NLBE", "EBAY_NL", "EBAY_ES", "EBAY_CH", "EBAY_HK", "EBAY_IN", "EBAY_IE", "EBAY_MY", "EBAY_FRCA", "EBAY_PH", "EBAY_PL", "EBAY_SG"];
        if (!in_array($this->container['site'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'site', must be one of 'EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG'.";
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

        $allowed_values = ["EBAY_US", "EBAY_ENCA", "EBAY_GB", "EBAY_AU", "EBAY_AT", "EBAY_FRBE", "EBAY_FR", "EBAY_DE", "EBAY_MOTOR", "EBAY_IT", "EBAY_NLBE", "EBAY_NL", "EBAY_ES", "EBAY_CH", "EBAY_HK", "EBAY_IN", "EBAY_IE", "EBAY_MY", "EBAY_FRCA", "EBAY_PH", "EBAY_PL", "EBAY_SG"];
        if (!in_array($this->container['site'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets site
     * @return string
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     * @param string $site
     * @return $this
     */
    public function setSite($site)
    {
        $allowed_values = array('EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG');
        if (!is_null($site) && (!in_array($site, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'site', must be one of 'EBAY_US', 'EBAY_ENCA', 'EBAY_GB', 'EBAY_AU', 'EBAY_AT', 'EBAY_FRBE', 'EBAY_FR', 'EBAY_DE', 'EBAY_MOTOR', 'EBAY_IT', 'EBAY_NLBE', 'EBAY_NL', 'EBAY_ES', 'EBAY_CH', 'EBAY_HK', 'EBAY_IN', 'EBAY_IE', 'EBAY_MY', 'EBAY_FRCA', 'EBAY_PH', 'EBAY_PL', 'EBAY_SG'");
        }
        $this->container['site'] = $site;

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


