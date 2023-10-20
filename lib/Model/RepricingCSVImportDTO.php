<?php
/**
 * RepricingCSVImportDTO
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
 * RepricingCSVImportDTO Class Doc Comment
 *
 * @category    Class
 * @description A CSV file import. For initiating a CSV upload only a URL where the file can be downloaded via HTTP is needed. The md5 is used for determining if a CSV upload can be skipped, if the md5 equals with the previous CSV import the current import will be skipped.
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingCSVImportDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingCSVImportDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
<<<<<<< HEAD
        'id' => 'int',
        'inserted' => '\DateTime',
        'updated' => '\DateTime',
        'download_url' => 'string',
        'state' => 'string',
        'md5' => 'string',
        'error_count' => 'int',
        'error_report_url' => 'string',
        'price_protection' => 'int'
=======
        'download_url' => 'string',
        'error_count' => 'int',
        'error_report_url' => 'string',
        'id' => 'int',
        'inserted' => '\DateTime',
        'md5' => 'string',
        'price_protection' => 'int',
        'state' => 'string',
        'updated' => '\DateTime'
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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
        'id' => 'id',
        'inserted' => 'inserted',
        'updated' => 'updated',
        'download_url' => 'downloadUrl',
        'state' => 'state',
        'md5' => 'md5',
        'error_count' => 'errorCount',
        'error_report_url' => 'errorReportUrl',
        'price_protection' => 'priceProtection'
=======
        'download_url' => 'downloadUrl',
        'error_count' => 'errorCount',
        'error_report_url' => 'errorReportUrl',
        'id' => 'id',
        'inserted' => 'inserted',
        'md5' => 'md5',
        'price_protection' => 'priceProtection',
        'state' => 'state',
        'updated' => 'updated'
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
<<<<<<< HEAD
        'id' => 'setId',
        'inserted' => 'setInserted',
        'updated' => 'setUpdated',
        'download_url' => 'setDownloadUrl',
        'state' => 'setState',
        'md5' => 'setMd5',
        'error_count' => 'setErrorCount',
        'error_report_url' => 'setErrorReportUrl',
        'price_protection' => 'setPriceProtection'
=======
        'download_url' => 'setDownloadUrl',
        'error_count' => 'setErrorCount',
        'error_report_url' => 'setErrorReportUrl',
        'id' => 'setId',
        'inserted' => 'setInserted',
        'md5' => 'setMd5',
        'price_protection' => 'setPriceProtection',
        'state' => 'setState',
        'updated' => 'setUpdated'
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
<<<<<<< HEAD
        'id' => 'getId',
        'inserted' => 'getInserted',
        'updated' => 'getUpdated',
        'download_url' => 'getDownloadUrl',
        'state' => 'getState',
        'md5' => 'getMd5',
        'error_count' => 'getErrorCount',
        'error_report_url' => 'getErrorReportUrl',
        'price_protection' => 'getPriceProtection'
=======
        'download_url' => 'getDownloadUrl',
        'error_count' => 'getErrorCount',
        'error_report_url' => 'getErrorReportUrl',
        'id' => 'getId',
        'inserted' => 'getInserted',
        'md5' => 'getMd5',
        'price_protection' => 'getPriceProtection',
        'state' => 'getState',
        'updated' => 'getUpdated'
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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

    const STATE_NEW = 'NEW';
    const STATE_IN_PROGRESS = 'IN_PROGRESS';
    const STATE_DONE = 'DONE';
    const STATE_ERROR_DOWNLOAD = 'ERROR_DOWNLOAD';
    const STATE_SKIPPED = 'SKIPPED';
    const STATE_ERROR = 'ERROR';
    const STATE_ERROR_NUMBER_FORMATTING = 'ERROR_NUMBER_FORMATTING';
    const STATE_ERROR_DUPES = 'ERROR_DUPES';
    const STATE_MISSING_ITEM_IDS = 'MISSING_ITEM_IDS';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_NEW,
            self::STATE_IN_PROGRESS,
            self::STATE_DONE,
            self::STATE_ERROR_DOWNLOAD,
            self::STATE_SKIPPED,
            self::STATE_ERROR,
            self::STATE_ERROR_NUMBER_FORMATTING,
            self::STATE_ERROR_DUPES,
            self::STATE_MISSING_ITEM_IDS,
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
<<<<<<< HEAD
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['download_url'] = isset($data['download_url']) ? $data['download_url'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
        $this->container['error_count'] = isset($data['error_count']) ? $data['error_count'] : null;
        $this->container['error_report_url'] = isset($data['error_report_url']) ? $data['error_report_url'] : null;
        $this->container['price_protection'] = isset($data['price_protection']) ? $data['price_protection'] : null;
=======
        $this->container['download_url'] = isset($data['download_url']) ? $data['download_url'] : null;
        $this->container['error_count'] = isset($data['error_count']) ? $data['error_count'] : null;
        $this->container['error_report_url'] = isset($data['error_report_url']) ? $data['error_report_url'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inserted'] = isset($data['inserted']) ? $data['inserted'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
        $this->container['price_protection'] = isset($data['price_protection']) ? $data['price_protection'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["NEW", "IN_PROGRESS", "DONE", "ERROR_DOWNLOAD", "SKIPPED", "ERROR", "ERROR_NUMBER_FORMATTING", "ERROR_DUPES", "MISSING_ITEM_IDS"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'NEW', 'IN_PROGRESS', 'DONE', 'ERROR_DOWNLOAD', 'SKIPPED', 'ERROR', 'ERROR_NUMBER_FORMATTING', 'ERROR_DUPES', 'MISSING_ITEM_IDS'.";
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

        $allowed_values = ["NEW", "IN_PROGRESS", "DONE", "ERROR_DOWNLOAD", "SKIPPED", "ERROR", "ERROR_NUMBER_FORMATTING", "ERROR_DUPES", "MISSING_ITEM_IDS"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
<<<<<<< HEAD
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
=======
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     * Gets download_url
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->container['download_url'];
    }

    /**
     * Sets download_url
     * @param string $download_url
     * @return $this
     */
    public function setDownloadUrl($download_url)
    {
        $this->container['download_url'] = $download_url;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('NEW', 'IN_PROGRESS', 'DONE', 'ERROR_DOWNLOAD', 'SKIPPED', 'ERROR', 'ERROR_NUMBER_FORMATTING', 'ERROR_DUPES', 'MISSING_ITEM_IDS');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'NEW', 'IN_PROGRESS', 'DONE', 'ERROR_DOWNLOAD', 'SKIPPED', 'ERROR', 'ERROR_NUMBER_FORMATTING', 'ERROR_DUPES', 'MISSING_ITEM_IDS'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets md5
     * @return string
     */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
     * Sets md5
     * @param string $md5
     * @return $this
     */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;

        return $this;
    }

    /**
=======
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     * Gets error_count
     * @return int
     */
    public function getErrorCount()
    {
        return $this->container['error_count'];
    }

    /**
     * Sets error_count
     * @param int $error_count
     * @return $this
     */
    public function setErrorCount($error_count)
    {
        $this->container['error_count'] = $error_count;

        return $this;
    }

    /**
     * Gets error_report_url
     * @return string
     */
    public function getErrorReportUrl()
    {
        return $this->container['error_report_url'];
    }

    /**
     * Sets error_report_url
     * @param string $error_report_url
     * @return $this
     */
    public function setErrorReportUrl($error_report_url)
    {
        $this->container['error_report_url'] = $error_report_url;

        return $this;
    }

    /**
<<<<<<< HEAD
=======
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
     * Gets md5
     * @return string
     */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
     * Sets md5
     * @param string $md5
     * @return $this
     */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;

        return $this;
    }

    /**
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     * Gets price_protection
     * @return int
     */
    public function getPriceProtection()
    {
        return $this->container['price_protection'];
    }

    /**
     * Sets price_protection
     * @param int $price_protection
     * @return $this
     */
    public function setPriceProtection($price_protection)
    {
        $this->container['price_protection'] = $price_protection;

        return $this;
    }
<<<<<<< HEAD
=======

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('NEW', 'IN_PROGRESS', 'DONE', 'ERROR_DOWNLOAD', 'SKIPPED', 'ERROR', 'ERROR_NUMBER_FORMATTING', 'ERROR_DUPES', 'MISSING_ITEM_IDS');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'NEW', 'IN_PROGRESS', 'DONE', 'ERROR_DOWNLOAD', 'SKIPPED', 'ERROR', 'ERROR_NUMBER_FORMATTING', 'ERROR_DUPES', 'MISSING_ITEM_IDS'");
        }
        $this->container['state'] = $state;

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
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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


