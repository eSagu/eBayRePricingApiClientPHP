<?php
/**
 * RepricingCSVRequestPresetDTO
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
 * RepricingCSVRequestPresetDTO Class Doc Comment
 *
 * @category    Class
 * @description A CSV request preset is a template. This is mainly used to request csv files in the frontend. The name must be unique.
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingCSVRequestPresetDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingCSVRequestPresetDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'inserted' => '\DateTime',
        'updated' => '\DateTime',
        'name' => 'string',
        'fields' => 'string[]',
        'number_format' => 'string',
        'exclude_expired_items' => 'bool'
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
        'name' => 'name',
        'fields' => 'fields',
        'number_format' => 'numberFormat',
        'exclude_expired_items' => 'excludeExpiredItems'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'inserted' => 'setInserted',
        'updated' => 'setUpdated',
        'name' => 'setName',
        'fields' => 'setFields',
        'number_format' => 'setNumberFormat',
        'exclude_expired_items' => 'setExcludeExpiredItems'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'inserted' => 'getInserted',
        'updated' => 'getUpdated',
        'name' => 'getName',
        'fields' => 'getFields',
        'number_format' => 'getNumberFormat',
        'exclude_expired_items' => 'getExcludeExpiredItems'
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

    const FIELDS_ITEM_ID = 'ITEM_ID';
    const FIELDS_SKU = 'SKU';
    const FIELDS_TITLE = 'TITLE';
    const FIELDS_ITEM_SPECIFICS = 'ITEM_SPECIFICS';
    const FIELDS_VARIATION_TYPE = 'VARIATION_TYPE';
    const FIELDS_VARIATION_SPECIFICS = 'VARIATION_SPECIFICS';
    const FIELDS_INITIAL_PRICE = 'INITIAL_PRICE';
    const FIELDS_MIN_PRICE = 'MIN_PRICE';
    const FIELDS_MAX_PRICE = 'MAX_PRICE';
    const FIELDS_FIXED_PRICE = 'FIXED_PRICE';
    const FIELDS_PRICE_MODE = 'PRICE_MODE';
    const FIELDS_OPTIMIZED_PRICE = 'OPTIMIZED_PRICE';
    const FIELDS_PRICE_GAPS_NAME = 'PRICE_GAPS_NAME';
    const FIELDS_CURRENT_PRICE = 'CURRENT_PRICE';
    const FIELDS_SHIPPING_COSTS = 'SHIPPING_COSTS';
    const FIELDS_QUANTITY = 'QUANTITY';
    const FIELDS_QUANTITY_SOLD = 'QUANTITY_SOLD';
    const FIELDS_OFFER_COUNT = 'OFFER_COUNT';
    const FIELDS_RELIST_PARENT_ID = 'RELIST_PARENT_ID';
    const FIELDS_ITEM_URL = 'ITEM_URL';
    const FIELDS_SITE = 'SITE';
    const FIELDS_LISTING_TYPE = 'LISTING_TYPE';
    const FIELDS_START_TIME = 'START_TIME';
    const FIELDS_END_TIME = 'END_TIME';
    const FIELDS_EBAY_PRODUCT_ID = 'EBAY_PRODUCT_ID';
    const FIELDS_EBAY_PRODUCT_ID_TYPE = 'EBAY_PRODUCT_ID_TYPE';
    const FIELDS_FINDING_API_FILTER_NAME = 'FINDING_API_FILTER_NAME';
    const FIELDS_EBAY_FINDING_API_OPERATION = 'EBAY_FINDING_API_OPERATION';
    const FIELDS_EBAY_PRODUCT_SEARCH_ID_TYPE = 'EBAY_PRODUCT_SEARCH_ID_TYPE';
    const FIELDS_EBAY_PRODUCT_SEARCH_TERM = 'EBAY_PRODUCT_SEARCH_TERM';
    const FIELDS_CUSTOM_CODE_SNIPPET_NAME = 'CUSTOM_CODE_SNIPPET_NAME';
    const FIELDS_CUSTOM_CODE_PAYLOAD = 'CUSTOM_CODE_PAYLOAD';
    const FIELDS_PRIMARY_CATEGORY_ID = 'PRIMARY_CATEGORY_ID';
    const FIELDS_PRIMARY_CATEGORY_NAME = 'PRIMARY_CATEGORY_NAME';
    const FIELDS_PRIMARY_CATEGORY_PARENT_ID = 'PRIMARY_CATEGORY_PARENT_ID';
    const FIELDS_PRIMARY_CATEGORY_LEVEL = 'PRIMARY_CATEGORY_LEVEL';
    const FIELDS_SECONDARY_CATEGORY_ID = 'SECONDARY_CATEGORY_ID';
    const FIELDS_SECONDARY_CATEGORY_NAME = 'SECONDARY_CATEGORY_NAME';
    const FIELDS_SECONDARY_CATEGORY_PARENT_ID = 'SECONDARY_CATEGORY_PARENT_ID';
    const FIELDS_SECONDARY_CATEGORY_LEVEL = 'SECONDARY_CATEGORY_LEVEL';
    const FIELDS_SEARCH_RANK = 'SEARCH_RANK';
    const FIELDS_TOTAL_ENTRIES = 'TOTAL_ENTRIES';
    const FIELDS_CHEAPEST_COMPETITOR_SELLER_ID = 'CHEAPEST_COMPETITOR_SELLER_ID';
    const FIELDS_CHEAPEST_COMPETITOR_PRICE = 'CHEAPEST_COMPETITOR_PRICE';
    const FIELDS_CHEAPEST_COMPETITOR_SHIPPING = 'CHEAPEST_COMPETITOR_SHIPPING';
    const FIELDS_SEARCH_TERM_SOURCE = 'SEARCH_TERM_SOURCE';
    const FIELDS_HIT_COUNT = 'HIT_COUNT';
    const FIELDS_ESAGU_ITEM_ID = 'ESAGU_ITEM_ID';
    const FIELDS_ITEM_ORDERS_LAST_SEVEN_DAYS = 'ITEM_ORDERS_LAST_SEVEN_DAYS';
    const FIELDS_ITEM_ORDERS_LAST_FOURTEEN_DAYS = 'ITEM_ORDERS_LAST_FOURTEEN_DAYS';
    const FIELDS_ITEM_ORDERS_LAST_THIRTY_DAYS = 'ITEM_ORDERS_LAST_THIRTY_DAYS';
    const NUMBER_FORMAT_DECIMAL_DOT = 'DECIMAL_DOT';
    const NUMBER_FORMAT_DECIMAL_COMMA = 'DECIMAL_COMMA';
    const NUMBER_FORMAT_CENTS = 'CENTS';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFieldsAllowableValues()
    {
        return [
            self::FIELDS_ITEM_ID,
            self::FIELDS_SKU,
            self::FIELDS_TITLE,
            self::FIELDS_ITEM_SPECIFICS,
            self::FIELDS_VARIATION_TYPE,
            self::FIELDS_VARIATION_SPECIFICS,
            self::FIELDS_INITIAL_PRICE,
            self::FIELDS_MIN_PRICE,
            self::FIELDS_MAX_PRICE,
            self::FIELDS_FIXED_PRICE,
            self::FIELDS_PRICE_MODE,
            self::FIELDS_OPTIMIZED_PRICE,
            self::FIELDS_PRICE_GAPS_NAME,
            self::FIELDS_CURRENT_PRICE,
            self::FIELDS_SHIPPING_COSTS,
            self::FIELDS_QUANTITY,
            self::FIELDS_QUANTITY_SOLD,
            self::FIELDS_OFFER_COUNT,
            self::FIELDS_RELIST_PARENT_ID,
            self::FIELDS_ITEM_URL,
            self::FIELDS_SITE,
            self::FIELDS_LISTING_TYPE,
            self::FIELDS_START_TIME,
            self::FIELDS_END_TIME,
            self::FIELDS_EBAY_PRODUCT_ID,
            self::FIELDS_EBAY_PRODUCT_ID_TYPE,
            self::FIELDS_FINDING_API_FILTER_NAME,
            self::FIELDS_EBAY_FINDING_API_OPERATION,
            self::FIELDS_EBAY_PRODUCT_SEARCH_ID_TYPE,
            self::FIELDS_EBAY_PRODUCT_SEARCH_TERM,
            self::FIELDS_CUSTOM_CODE_SNIPPET_NAME,
            self::FIELDS_CUSTOM_CODE_PAYLOAD,
            self::FIELDS_PRIMARY_CATEGORY_ID,
            self::FIELDS_PRIMARY_CATEGORY_NAME,
            self::FIELDS_PRIMARY_CATEGORY_PARENT_ID,
            self::FIELDS_PRIMARY_CATEGORY_LEVEL,
            self::FIELDS_SECONDARY_CATEGORY_ID,
            self::FIELDS_SECONDARY_CATEGORY_NAME,
            self::FIELDS_SECONDARY_CATEGORY_PARENT_ID,
            self::FIELDS_SECONDARY_CATEGORY_LEVEL,
            self::FIELDS_SEARCH_RANK,
            self::FIELDS_TOTAL_ENTRIES,
            self::FIELDS_CHEAPEST_COMPETITOR_SELLER_ID,
            self::FIELDS_CHEAPEST_COMPETITOR_PRICE,
            self::FIELDS_CHEAPEST_COMPETITOR_SHIPPING,
            self::FIELDS_SEARCH_TERM_SOURCE,
            self::FIELDS_HIT_COUNT,
            self::FIELDS_ESAGU_ITEM_ID,
            self::FIELDS_ITEM_ORDERS_LAST_SEVEN_DAYS,
            self::FIELDS_ITEM_ORDERS_LAST_FOURTEEN_DAYS,
            self::FIELDS_ITEM_ORDERS_LAST_THIRTY_DAYS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNumberFormatAllowableValues()
    {
        return [
            self::NUMBER_FORMAT_DECIMAL_DOT,
            self::NUMBER_FORMAT_DECIMAL_COMMA,
            self::NUMBER_FORMAT_CENTS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['number_format'] = isset($data['number_format']) ? $data['number_format'] : null;
        $this->container['exclude_expired_items'] = isset($data['exclude_expired_items']) ? $data['exclude_expired_items'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["DECIMAL_DOT", "DECIMAL_COMMA", "CENTS"];
        if (!in_array($this->container['number_format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'number_format', must be one of 'DECIMAL_DOT', 'DECIMAL_COMMA', 'CENTS'.";
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

        $allowed_values = ["DECIMAL_DOT", "DECIMAL_COMMA", "CENTS"];
        if (!in_array($this->container['number_format'], $allowed_values)) {
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
     * Gets fields
     * @return string[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     * @param string[] $fields
     * @return $this
     */
    public function setFields($fields)
    {
        $allowed_values = array('ITEM_ID', 'SKU', 'TITLE', 'ITEM_SPECIFICS', 'VARIATION_TYPE', 'VARIATION_SPECIFICS', 'INITIAL_PRICE', 'MIN_PRICE', 'MAX_PRICE', 'FIXED_PRICE', 'PRICE_MODE', 'OPTIMIZED_PRICE', 'PRICE_GAPS_NAME', 'CURRENT_PRICE', 'SHIPPING_COSTS', 'QUANTITY', 'QUANTITY_SOLD', 'OFFER_COUNT', 'RELIST_PARENT_ID', 'ITEM_URL', 'SITE', 'LISTING_TYPE', 'START_TIME', 'END_TIME', 'EBAY_PRODUCT_ID', 'EBAY_PRODUCT_ID_TYPE', 'FINDING_API_FILTER_NAME', 'EBAY_FINDING_API_OPERATION', 'EBAY_PRODUCT_SEARCH_ID_TYPE', 'EBAY_PRODUCT_SEARCH_TERM', 'CUSTOM_CODE_SNIPPET_NAME', 'CUSTOM_CODE_PAYLOAD', 'PRIMARY_CATEGORY_ID', 'PRIMARY_CATEGORY_NAME', 'PRIMARY_CATEGORY_PARENT_ID', 'PRIMARY_CATEGORY_LEVEL', 'SECONDARY_CATEGORY_ID', 'SECONDARY_CATEGORY_NAME', 'SECONDARY_CATEGORY_PARENT_ID', 'SECONDARY_CATEGORY_LEVEL', 'SEARCH_RANK', 'TOTAL_ENTRIES', 'CHEAPEST_COMPETITOR_SELLER_ID', 'CHEAPEST_COMPETITOR_PRICE', 'CHEAPEST_COMPETITOR_SHIPPING', 'SEARCH_TERM_SOURCE', 'HIT_COUNT', 'ESAGU_ITEM_ID', 'ITEM_ORDERS_LAST_SEVEN_DAYS', 'ITEM_ORDERS_LAST_FOURTEEN_DAYS', 'ITEM_ORDERS_LAST_THIRTY_DAYS');
        if (!is_null($fields) && (array_diff($fields, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'fields', must be one of 'ITEM_ID', 'SKU', 'TITLE', 'ITEM_SPECIFICS', 'VARIATION_TYPE', 'VARIATION_SPECIFICS', 'INITIAL_PRICE', 'MIN_PRICE', 'MAX_PRICE', 'FIXED_PRICE', 'PRICE_MODE', 'OPTIMIZED_PRICE', 'PRICE_GAPS_NAME', 'CURRENT_PRICE', 'SHIPPING_COSTS', 'QUANTITY', 'QUANTITY_SOLD', 'OFFER_COUNT', 'RELIST_PARENT_ID', 'ITEM_URL', 'SITE', 'LISTING_TYPE', 'START_TIME', 'END_TIME', 'EBAY_PRODUCT_ID', 'EBAY_PRODUCT_ID_TYPE', 'FINDING_API_FILTER_NAME', 'EBAY_FINDING_API_OPERATION', 'EBAY_PRODUCT_SEARCH_ID_TYPE', 'EBAY_PRODUCT_SEARCH_TERM', 'CUSTOM_CODE_SNIPPET_NAME', 'CUSTOM_CODE_PAYLOAD', 'PRIMARY_CATEGORY_ID', 'PRIMARY_CATEGORY_NAME', 'PRIMARY_CATEGORY_PARENT_ID', 'PRIMARY_CATEGORY_LEVEL', 'SECONDARY_CATEGORY_ID', 'SECONDARY_CATEGORY_NAME', 'SECONDARY_CATEGORY_PARENT_ID', 'SECONDARY_CATEGORY_LEVEL', 'SEARCH_RANK', 'TOTAL_ENTRIES', 'CHEAPEST_COMPETITOR_SELLER_ID', 'CHEAPEST_COMPETITOR_PRICE', 'CHEAPEST_COMPETITOR_SHIPPING', 'SEARCH_TERM_SOURCE', 'HIT_COUNT', 'ESAGU_ITEM_ID', 'ITEM_ORDERS_LAST_SEVEN_DAYS', 'ITEM_ORDERS_LAST_FOURTEEN_DAYS', 'ITEM_ORDERS_LAST_THIRTY_DAYS'");
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets number_format
     * @return string
     */
    public function getNumberFormat()
    {
        return $this->container['number_format'];
    }

    /**
     * Sets number_format
     * @param string $number_format
     * @return $this
     */
    public function setNumberFormat($number_format)
    {
        $allowed_values = array('DECIMAL_DOT', 'DECIMAL_COMMA', 'CENTS');
        if (!is_null($number_format) && (!in_array($number_format, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'number_format', must be one of 'DECIMAL_DOT', 'DECIMAL_COMMA', 'CENTS'");
        }
        $this->container['number_format'] = $number_format;

        return $this;
    }

    /**
     * Gets exclude_expired_items
     * @return bool
     */
    public function getExcludeExpiredItems()
    {
        return $this->container['exclude_expired_items'];
    }

    /**
     * Sets exclude_expired_items
     * @param bool $exclude_expired_items
     * @return $this
     */
    public function setExcludeExpiredItems($exclude_expired_items)
    {
        $this->container['exclude_expired_items'] = $exclude_expired_items;

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


