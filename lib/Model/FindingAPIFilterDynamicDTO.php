<?php
/**
 * FindingAPIFilterDynamicDTO
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
 * FindingAPIFilterDynamicDTO Class Doc Comment
 *
 * @category    Class
 * @description A set of filter options for the ebay finding API.
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FindingAPIFilterDynamicDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FindingAPIFilterDynamicDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorized_seller_only' => 'bool',
        'conditions' => 'string[]',
        'exclude_category' => '\eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO[]',
        'seller' => 'string[]',
        'exclude_seller' => 'string[]',
        'feedback_score_min' => 'int',
        'max_price' => 'int',
        'min_price' => 'int',
        'max_handling_time' => 'int',
        'sort_order' => 'string',
        'hide_duplicate_items' => 'bool',
        'listing_types' => 'string[]',
        'category_refinement' => 'string',
        'description_search' => 'bool',
        'seller_business_type' => 'string',
        'located_in' => 'string[]'
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
        'authorized_seller_only' => 'authorizedSellerOnly',
        'conditions' => 'conditions',
        'exclude_category' => 'excludeCategory',
        'seller' => 'seller',
        'exclude_seller' => 'excludeSeller',
        'feedback_score_min' => 'feedbackScoreMin',
        'max_price' => 'maxPrice',
        'min_price' => 'minPrice',
        'max_handling_time' => 'maxHandlingTime',
        'sort_order' => 'sortOrder',
        'hide_duplicate_items' => 'hideDuplicateItems',
        'listing_types' => 'listingTypes',
        'category_refinement' => 'categoryRefinement',
        'description_search' => 'descriptionSearch',
        'seller_business_type' => 'sellerBusinessType',
        'located_in' => 'locatedIn'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'authorized_seller_only' => 'setAuthorizedSellerOnly',
        'conditions' => 'setConditions',
        'exclude_category' => 'setExcludeCategory',
        'seller' => 'setSeller',
        'exclude_seller' => 'setExcludeSeller',
        'feedback_score_min' => 'setFeedbackScoreMin',
        'max_price' => 'setMaxPrice',
        'min_price' => 'setMinPrice',
        'max_handling_time' => 'setMaxHandlingTime',
        'sort_order' => 'setSortOrder',
        'hide_duplicate_items' => 'setHideDuplicateItems',
        'listing_types' => 'setListingTypes',
        'category_refinement' => 'setCategoryRefinement',
        'description_search' => 'setDescriptionSearch',
        'seller_business_type' => 'setSellerBusinessType',
        'located_in' => 'setLocatedIn'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'authorized_seller_only' => 'getAuthorizedSellerOnly',
        'conditions' => 'getConditions',
        'exclude_category' => 'getExcludeCategory',
        'seller' => 'getSeller',
        'exclude_seller' => 'getExcludeSeller',
        'feedback_score_min' => 'getFeedbackScoreMin',
        'max_price' => 'getMaxPrice',
        'min_price' => 'getMinPrice',
        'max_handling_time' => 'getMaxHandlingTime',
        'sort_order' => 'getSortOrder',
        'hide_duplicate_items' => 'getHideDuplicateItems',
        'listing_types' => 'getListingTypes',
        'category_refinement' => 'getCategoryRefinement',
        'description_search' => 'getDescriptionSearch',
        'seller_business_type' => 'getSellerBusinessType',
        'located_in' => 'getLocatedIn'
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

    const CONDITIONS_NEW = 'NEW';
    const CONDITIONS_NEW_OTHER = 'NEW_OTHER';
    const CONDITIONS_NEW_WITH_DEFECTS = 'NEW_WITH_DEFECTS';
    const CONDITIONS_MANUFACTURER_REFURBISHED = 'MANUFACTURER_REFURBISHED';
    const CONDITIONS_EXCELLENT_REFURBISHED_BY_QUALIFIED = 'EXCELLENT_REFURBISHED_BY_QUALIFIED';
    const CONDITIONS_VERY_GOOD_REFURBISHED_BY_QUALIFIED = 'VERY_GOOD_REFURBISHED_BY_QUALIFIED';
    const CONDITIONS_GOOD_REFURBISHED_BY_QUALIFIED = 'GOOD_REFURBISHED_BY_QUALIFIED';
    const CONDITIONS_SELLER_REFURBISHED = 'SELLER_REFURBISHED';
    const CONDITIONS_LIKE_NEW = 'LIKE_NEW';
    const CONDITIONS_USED_EXCELLENT = 'USED_EXCELLENT';
    const CONDITIONS_USED_VERY_GOOD = 'USED_VERY_GOOD';
    const CONDITIONS_USED_GOOD = 'USED_GOOD';
    const CONDITIONS_USED_ACCEPTABLE = 'USED_ACCEPTABLE';
    const CONDITIONS_FOR_PARTS_OR_NOT_WORKING = 'FOR_PARTS_OR_NOT_WORKING';
    const CONDITIONS_UNKNOWN = 'UNKNOWN';
    const SORT_ORDER_BEST_MATCH = 'BEST_MATCH';
    const SORT_ORDER_BID_COUNT_FEWEST = 'BID_COUNT_FEWEST';
    const SORT_ORDER_BID_COUNT_MOST = 'BID_COUNT_MOST';
    const SORT_ORDER_COUNTRY_ASCENDING = 'COUNTRY_ASCENDING';
    const SORT_ORDER_COUNTRY_DESCENDING = 'COUNTRY_DESCENDING';
    const SORT_ORDER_CURRENT_PRICE_HIGHEST = 'CURRENT_PRICE_HIGHEST';
    const SORT_ORDER_DISTANCE_NEAREST = 'DISTANCE_NEAREST';
    const SORT_ORDER_END_TIME_SOONEST = 'END_TIME_SOONEST';
    const SORT_ORDER_PRICE_PLUS_SHIPPING_HIGHEST = 'PRICE_PLUS_SHIPPING_HIGHEST';
    const SORT_ORDER_PRICE_PLUS_SHIPPING_LOWEST = 'PRICE_PLUS_SHIPPING_LOWEST';
    const SORT_ORDER_START_TIME_NEWEST = 'START_TIME_NEWEST';
    const LISTING_TYPES_AUCTION = 'AUCTION';
    const LISTING_TYPES_AUCTION_WITH_BIN = 'AUCTION_WITH_BIN';
    const LISTING_TYPES_CLASSIFIED = 'CLASSIFIED';
    const LISTING_TYPES_FIXED_PRICE = 'FIXED_PRICE';
    const LISTING_TYPES_STORE_INVENTORY = 'STORE_INVENTORY';
    const CATEGORY_REFINEMENT_SAME_CATEGORY = 'SAME_CATEGORY';
    const CATEGORY_REFINEMENT_PARENT_CATEGORY = 'PARENT_CATEGORY';
    const CATEGORY_REFINEMENT_ROOT_CATEGORY = 'ROOT_CATEGORY';
    const CATEGORY_REFINEMENT_DISABLED = 'DISABLED';
    const SELLER_BUSINESS_TYPE_PRIVATE = 'PRIVATE';
    const SELLER_BUSINESS_TYPE_BUSINESS = 'BUSINESS';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getConditionsAllowableValues()
    {
        return [
            self::CONDITIONS_NEW,
            self::CONDITIONS_NEW_OTHER,
            self::CONDITIONS_NEW_WITH_DEFECTS,
            self::CONDITIONS_MANUFACTURER_REFURBISHED,
            self::CONDITIONS_EXCELLENT_REFURBISHED_BY_QUALIFIED,
            self::CONDITIONS_VERY_GOOD_REFURBISHED_BY_QUALIFIED,
            self::CONDITIONS_GOOD_REFURBISHED_BY_QUALIFIED,
            self::CONDITIONS_SELLER_REFURBISHED,
            self::CONDITIONS_LIKE_NEW,
            self::CONDITIONS_USED_EXCELLENT,
            self::CONDITIONS_USED_VERY_GOOD,
            self::CONDITIONS_USED_GOOD,
            self::CONDITIONS_USED_ACCEPTABLE,
            self::CONDITIONS_FOR_PARTS_OR_NOT_WORKING,
            self::CONDITIONS_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSortOrderAllowableValues()
    {
        return [
            self::SORT_ORDER_BEST_MATCH,
            self::SORT_ORDER_BID_COUNT_FEWEST,
            self::SORT_ORDER_BID_COUNT_MOST,
            self::SORT_ORDER_COUNTRY_ASCENDING,
            self::SORT_ORDER_COUNTRY_DESCENDING,
            self::SORT_ORDER_CURRENT_PRICE_HIGHEST,
            self::SORT_ORDER_DISTANCE_NEAREST,
            self::SORT_ORDER_END_TIME_SOONEST,
            self::SORT_ORDER_PRICE_PLUS_SHIPPING_HIGHEST,
            self::SORT_ORDER_PRICE_PLUS_SHIPPING_LOWEST,
            self::SORT_ORDER_START_TIME_NEWEST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getListingTypesAllowableValues()
    {
        return [
            self::LISTING_TYPES_AUCTION,
            self::LISTING_TYPES_AUCTION_WITH_BIN,
            self::LISTING_TYPES_CLASSIFIED,
            self::LISTING_TYPES_FIXED_PRICE,
            self::LISTING_TYPES_STORE_INVENTORY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCategoryRefinementAllowableValues()
    {
        return [
            self::CATEGORY_REFINEMENT_SAME_CATEGORY,
            self::CATEGORY_REFINEMENT_PARENT_CATEGORY,
            self::CATEGORY_REFINEMENT_ROOT_CATEGORY,
            self::CATEGORY_REFINEMENT_DISABLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSellerBusinessTypeAllowableValues()
    {
        return [
            self::SELLER_BUSINESS_TYPE_PRIVATE,
            self::SELLER_BUSINESS_TYPE_BUSINESS,
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
        $this->container['authorized_seller_only'] = isset($data['authorized_seller_only']) ? $data['authorized_seller_only'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['exclude_category'] = isset($data['exclude_category']) ? $data['exclude_category'] : null;
        $this->container['seller'] = isset($data['seller']) ? $data['seller'] : null;
        $this->container['exclude_seller'] = isset($data['exclude_seller']) ? $data['exclude_seller'] : null;
        $this->container['feedback_score_min'] = isset($data['feedback_score_min']) ? $data['feedback_score_min'] : null;
        $this->container['max_price'] = isset($data['max_price']) ? $data['max_price'] : null;
        $this->container['min_price'] = isset($data['min_price']) ? $data['min_price'] : null;
        $this->container['max_handling_time'] = isset($data['max_handling_time']) ? $data['max_handling_time'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['hide_duplicate_items'] = isset($data['hide_duplicate_items']) ? $data['hide_duplicate_items'] : null;
        $this->container['listing_types'] = isset($data['listing_types']) ? $data['listing_types'] : null;
        $this->container['category_refinement'] = isset($data['category_refinement']) ? $data['category_refinement'] : null;
        $this->container['description_search'] = isset($data['description_search']) ? $data['description_search'] : null;
        $this->container['seller_business_type'] = isset($data['seller_business_type']) ? $data['seller_business_type'] : null;
        $this->container['located_in'] = isset($data['located_in']) ? $data['located_in'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["BEST_MATCH", "BID_COUNT_FEWEST", "BID_COUNT_MOST", "COUNTRY_ASCENDING", "COUNTRY_DESCENDING", "CURRENT_PRICE_HIGHEST", "DISTANCE_NEAREST", "END_TIME_SOONEST", "PRICE_PLUS_SHIPPING_HIGHEST", "PRICE_PLUS_SHIPPING_LOWEST", "START_TIME_NEWEST"];
        if (!in_array($this->container['sort_order'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'sort_order', must be one of 'BEST_MATCH', 'BID_COUNT_FEWEST', 'BID_COUNT_MOST', 'COUNTRY_ASCENDING', 'COUNTRY_DESCENDING', 'CURRENT_PRICE_HIGHEST', 'DISTANCE_NEAREST', 'END_TIME_SOONEST', 'PRICE_PLUS_SHIPPING_HIGHEST', 'PRICE_PLUS_SHIPPING_LOWEST', 'START_TIME_NEWEST'.";
        }

        $allowed_values = ["SAME_CATEGORY", "PARENT_CATEGORY", "ROOT_CATEGORY", "DISABLED"];
        if (!in_array($this->container['category_refinement'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'category_refinement', must be one of 'SAME_CATEGORY', 'PARENT_CATEGORY', 'ROOT_CATEGORY', 'DISABLED'.";
        }

        $allowed_values = ["PRIVATE", "BUSINESS"];
        if (!in_array($this->container['seller_business_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'seller_business_type', must be one of 'PRIVATE', 'BUSINESS'.";
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

        $allowed_values = ["BEST_MATCH", "BID_COUNT_FEWEST", "BID_COUNT_MOST", "COUNTRY_ASCENDING", "COUNTRY_DESCENDING", "CURRENT_PRICE_HIGHEST", "DISTANCE_NEAREST", "END_TIME_SOONEST", "PRICE_PLUS_SHIPPING_HIGHEST", "PRICE_PLUS_SHIPPING_LOWEST", "START_TIME_NEWEST"];
        if (!in_array($this->container['sort_order'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["SAME_CATEGORY", "PARENT_CATEGORY", "ROOT_CATEGORY", "DISABLED"];
        if (!in_array($this->container['category_refinement'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["PRIVATE", "BUSINESS"];
        if (!in_array($this->container['seller_business_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets authorized_seller_only
     * @return bool
     */
    public function getAuthorizedSellerOnly()
    {
        return $this->container['authorized_seller_only'];
    }

    /**
     * Sets authorized_seller_only
     * @param bool $authorized_seller_only
     * @return $this
     */
    public function setAuthorizedSellerOnly($authorized_seller_only)
    {
        $this->container['authorized_seller_only'] = $authorized_seller_only;

        return $this;
    }

    /**
     * Gets conditions
     * @return string[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param string[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $allowed_values = array('NEW', 'NEW_OTHER', 'NEW_WITH_DEFECTS', 'MANUFACTURER_REFURBISHED', 'EXCELLENT_REFURBISHED_BY_QUALIFIED', 'VERY_GOOD_REFURBISHED_BY_QUALIFIED', 'GOOD_REFURBISHED_BY_QUALIFIED', 'SELLER_REFURBISHED', 'LIKE_NEW', 'USED_EXCELLENT', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'FOR_PARTS_OR_NOT_WORKING', 'UNKNOWN');
        if (!is_null($conditions) && (array_diff($conditions, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'conditions', must be one of 'NEW', 'NEW_OTHER', 'NEW_WITH_DEFECTS', 'MANUFACTURER_REFURBISHED', 'EXCELLENT_REFURBISHED_BY_QUALIFIED', 'VERY_GOOD_REFURBISHED_BY_QUALIFIED', 'GOOD_REFURBISHED_BY_QUALIFIED', 'SELLER_REFURBISHED', 'LIKE_NEW', 'USED_EXCELLENT', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'FOR_PARTS_OR_NOT_WORKING', 'UNKNOWN'");
        }
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets exclude_category
     * @return \eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO[]
     */
    public function getExcludeCategory()
    {
        return $this->container['exclude_category'];
    }

    /**
     * Sets exclude_category
     * @param \eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO[] $exclude_category
     * @return $this
     */
    public function setExcludeCategory($exclude_category)
    {
        $this->container['exclude_category'] = $exclude_category;

        return $this;
    }

    /**
     * Gets seller
     * @return string[]
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     * @param string[] $seller
     * @return $this
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets exclude_seller
     * @return string[]
     */
    public function getExcludeSeller()
    {
        return $this->container['exclude_seller'];
    }

    /**
     * Sets exclude_seller
     * @param string[] $exclude_seller
     * @return $this
     */
    public function setExcludeSeller($exclude_seller)
    {
        $this->container['exclude_seller'] = $exclude_seller;

        return $this;
    }

    /**
     * Gets feedback_score_min
     * @return int
     */
    public function getFeedbackScoreMin()
    {
        return $this->container['feedback_score_min'];
    }

    /**
     * Sets feedback_score_min
     * @param int $feedback_score_min
     * @return $this
     */
    public function setFeedbackScoreMin($feedback_score_min)
    {
        $this->container['feedback_score_min'] = $feedback_score_min;

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
     * Gets max_handling_time
     * @return int
     */
    public function getMaxHandlingTime()
    {
        return $this->container['max_handling_time'];
    }

    /**
     * Sets max_handling_time
     * @param int $max_handling_time
     * @return $this
     */
    public function setMaxHandlingTime($max_handling_time)
    {
        $this->container['max_handling_time'] = $max_handling_time;

        return $this;
    }

    /**
     * Gets sort_order
     * @return string
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param string $sort_order
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $allowed_values = array('BEST_MATCH', 'BID_COUNT_FEWEST', 'BID_COUNT_MOST', 'COUNTRY_ASCENDING', 'COUNTRY_DESCENDING', 'CURRENT_PRICE_HIGHEST', 'DISTANCE_NEAREST', 'END_TIME_SOONEST', 'PRICE_PLUS_SHIPPING_HIGHEST', 'PRICE_PLUS_SHIPPING_LOWEST', 'START_TIME_NEWEST');
        if (!is_null($sort_order) && (!in_array($sort_order, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'sort_order', must be one of 'BEST_MATCH', 'BID_COUNT_FEWEST', 'BID_COUNT_MOST', 'COUNTRY_ASCENDING', 'COUNTRY_DESCENDING', 'CURRENT_PRICE_HIGHEST', 'DISTANCE_NEAREST', 'END_TIME_SOONEST', 'PRICE_PLUS_SHIPPING_HIGHEST', 'PRICE_PLUS_SHIPPING_LOWEST', 'START_TIME_NEWEST'");
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets hide_duplicate_items
     * @return bool
     */
    public function getHideDuplicateItems()
    {
        return $this->container['hide_duplicate_items'];
    }

    /**
     * Sets hide_duplicate_items
     * @param bool $hide_duplicate_items
     * @return $this
     */
    public function setHideDuplicateItems($hide_duplicate_items)
    {
        $this->container['hide_duplicate_items'] = $hide_duplicate_items;

        return $this;
    }

    /**
     * Gets listing_types
     * @return string[]
     */
    public function getListingTypes()
    {
        return $this->container['listing_types'];
    }

    /**
     * Sets listing_types
     * @param string[] $listing_types
     * @return $this
     */
    public function setListingTypes($listing_types)
    {
        $allowed_values = array('AUCTION', 'AUCTION_WITH_BIN', 'CLASSIFIED', 'FIXED_PRICE', 'STORE_INVENTORY');
        if (!is_null($listing_types) && (array_diff($listing_types, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'listing_types', must be one of 'AUCTION', 'AUCTION_WITH_BIN', 'CLASSIFIED', 'FIXED_PRICE', 'STORE_INVENTORY'");
        }
        $this->container['listing_types'] = $listing_types;

        return $this;
    }

    /**
     * Gets category_refinement
     * @return string
     */
    public function getCategoryRefinement()
    {
        return $this->container['category_refinement'];
    }

    /**
     * Sets category_refinement
     * @param string $category_refinement
     * @return $this
     */
    public function setCategoryRefinement($category_refinement)
    {
        $allowed_values = array('SAME_CATEGORY', 'PARENT_CATEGORY', 'ROOT_CATEGORY', 'DISABLED');
        if (!is_null($category_refinement) && (!in_array($category_refinement, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'category_refinement', must be one of 'SAME_CATEGORY', 'PARENT_CATEGORY', 'ROOT_CATEGORY', 'DISABLED'");
        }
        $this->container['category_refinement'] = $category_refinement;

        return $this;
    }

    /**
     * Gets description_search
     * @return bool
     */
    public function getDescriptionSearch()
    {
        return $this->container['description_search'];
    }

    /**
     * Sets description_search
     * @param bool $description_search
     * @return $this
     */
    public function setDescriptionSearch($description_search)
    {
        $this->container['description_search'] = $description_search;

        return $this;
    }

    /**
     * Gets seller_business_type
     * @return string
     */
    public function getSellerBusinessType()
    {
        return $this->container['seller_business_type'];
    }

    /**
     * Sets seller_business_type
     * @param string $seller_business_type
     * @return $this
     */
    public function setSellerBusinessType($seller_business_type)
    {
        $allowed_values = array('PRIVATE', 'BUSINESS');
        if (!is_null($seller_business_type) && (!in_array($seller_business_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'seller_business_type', must be one of 'PRIVATE', 'BUSINESS'");
        }
        $this->container['seller_business_type'] = $seller_business_type;

        return $this;
    }

    /**
     * Gets located_in
     * @return string[]
     */
    public function getLocatedIn()
    {
        return $this->container['located_in'];
    }

    /**
     * Sets located_in
     * @param string[] $located_in
     * @return $this
     */
    public function setLocatedIn($located_in)
    {
        $this->container['located_in'] = $located_in;

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

