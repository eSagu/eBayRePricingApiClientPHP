<?php
/**
 * BulkEditTasks
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

namespace eSagu\EBay\RePricing\V1\Model;

use \ArrayAccess;

/**
 * BulkEditTasks Class Doc Comment
 *
 * @category    Class
 * @package     eSagu\EBay\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkEditTasks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BulkEditTasks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'change_price_tasks' => '\eSagu\EBay\RePricing\V1\Model\BulkTaskPriceSettings[]',
        'task_custom_code' => '\eSagu\EBay\RePricing\V1\Model\BulkTaskCustomCode',
        'task_finding_api_filter' => '\eSagu\EBay\RePricing\V1\Model\BulkTaskFindingAPIFilter',
        'task_price_gap' => '\eSagu\EBay\RePricing\V1\Model\BulkTaskPriceGap',
        'task_price_mode' => '\eSagu\EBay\RePricing\V1\Model\BulkTaskPriceMode',
        'task_search_term' => '\eSagu\EBay\RePricing\V1\Model\BulkTaskSearchTerm'
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
        'change_price_tasks' => 'changePriceTasks',
        'task_custom_code' => 'taskCustomCode',
        'task_finding_api_filter' => 'taskFindingAPIFilter',
        'task_price_gap' => 'taskPriceGap',
        'task_price_mode' => 'taskPriceMode',
        'task_search_term' => 'taskSearchTerm'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'change_price_tasks' => 'setChangePriceTasks',
        'task_custom_code' => 'setTaskCustomCode',
        'task_finding_api_filter' => 'setTaskFindingApiFilter',
        'task_price_gap' => 'setTaskPriceGap',
        'task_price_mode' => 'setTaskPriceMode',
        'task_search_term' => 'setTaskSearchTerm'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'change_price_tasks' => 'getChangePriceTasks',
        'task_custom_code' => 'getTaskCustomCode',
        'task_finding_api_filter' => 'getTaskFindingApiFilter',
        'task_price_gap' => 'getTaskPriceGap',
        'task_price_mode' => 'getTaskPriceMode',
        'task_search_term' => 'getTaskSearchTerm'
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
        $this->container['change_price_tasks'] = isset($data['change_price_tasks']) ? $data['change_price_tasks'] : null;
        $this->container['task_custom_code'] = isset($data['task_custom_code']) ? $data['task_custom_code'] : null;
        $this->container['task_finding_api_filter'] = isset($data['task_finding_api_filter']) ? $data['task_finding_api_filter'] : null;
        $this->container['task_price_gap'] = isset($data['task_price_gap']) ? $data['task_price_gap'] : null;
        $this->container['task_price_mode'] = isset($data['task_price_mode']) ? $data['task_price_mode'] : null;
        $this->container['task_search_term'] = isset($data['task_search_term']) ? $data['task_search_term'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets change_price_tasks
     * @return \eSagu\EBay\RePricing\V1\Model\BulkTaskPriceSettings[]
     */
    public function getChangePriceTasks()
    {
        return $this->container['change_price_tasks'];
    }

    /**
     * Sets change_price_tasks
     * @param \eSagu\EBay\RePricing\V1\Model\BulkTaskPriceSettings[] $change_price_tasks
     * @return $this
     */
    public function setChangePriceTasks($change_price_tasks)
    {
        $this->container['change_price_tasks'] = $change_price_tasks;

        return $this;
    }

    /**
     * Gets task_custom_code
     * @return \eSagu\EBay\RePricing\V1\Model\BulkTaskCustomCode
     */
    public function getTaskCustomCode()
    {
        return $this->container['task_custom_code'];
    }

    /**
     * Sets task_custom_code
     * @param \eSagu\EBay\RePricing\V1\Model\BulkTaskCustomCode $task_custom_code
     * @return $this
     */
    public function setTaskCustomCode($task_custom_code)
    {
        $this->container['task_custom_code'] = $task_custom_code;

        return $this;
    }

    /**
     * Gets task_finding_api_filter
     * @return \eSagu\EBay\RePricing\V1\Model\BulkTaskFindingAPIFilter
     */
    public function getTaskFindingApiFilter()
    {
        return $this->container['task_finding_api_filter'];
    }

    /**
     * Sets task_finding_api_filter
     * @param \eSagu\EBay\RePricing\V1\Model\BulkTaskFindingAPIFilter $task_finding_api_filter
     * @return $this
     */
    public function setTaskFindingApiFilter($task_finding_api_filter)
    {
        $this->container['task_finding_api_filter'] = $task_finding_api_filter;

        return $this;
    }

    /**
     * Gets task_price_gap
     * @return \eSagu\EBay\RePricing\V1\Model\BulkTaskPriceGap
     */
    public function getTaskPriceGap()
    {
        return $this->container['task_price_gap'];
    }

    /**
     * Sets task_price_gap
     * @param \eSagu\EBay\RePricing\V1\Model\BulkTaskPriceGap $task_price_gap
     * @return $this
     */
    public function setTaskPriceGap($task_price_gap)
    {
        $this->container['task_price_gap'] = $task_price_gap;

        return $this;
    }

    /**
     * Gets task_price_mode
     * @return \eSagu\EBay\RePricing\V1\Model\BulkTaskPriceMode
     */
    public function getTaskPriceMode()
    {
        return $this->container['task_price_mode'];
    }

    /**
     * Sets task_price_mode
     * @param \eSagu\EBay\RePricing\V1\Model\BulkTaskPriceMode $task_price_mode
     * @return $this
     */
    public function setTaskPriceMode($task_price_mode)
    {
        $this->container['task_price_mode'] = $task_price_mode;

        return $this;
    }

    /**
     * Gets task_search_term
     * @return \eSagu\EBay\RePricing\V1\Model\BulkTaskSearchTerm
     */
    public function getTaskSearchTerm()
    {
        return $this->container['task_search_term'];
    }

    /**
     * Sets task_search_term
     * @param \eSagu\EBay\RePricing\V1\Model\BulkTaskSearchTerm $task_search_term
     * @return $this
     */
    public function setTaskSearchTerm($task_search_term)
    {
        $this->container['task_search_term'] = $task_search_term;

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


