<?php
/**
 * ItemApi
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swagger Codegen team
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

namespace eSagu\EBay\RePricing\V1\Api;

use \eSagu\EBay\RePricing\V1\ApiClient;
use \eSagu\EBay\RePricing\V1\ApiException;
use \eSagu\EBay\RePricing\V1\Configuration;
use \eSagu\EBay\RePricing\V1\ObjectSerializer;

/**
 * ItemApi Class Doc Comment
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemApi
{
    /**
     * API Client
     *
     * @var \eSagu\EBay\RePricing\V1\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \eSagu\EBay\RePricing\V1\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\eSagu\EBay\RePricing\V1\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \eSagu\EBay\RePricing\V1\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \eSagu\EBay\RePricing\V1\ApiClient $apiClient set the API client
     *
     * @return ItemApi
     */
    public function setApiClient(\eSagu\EBay\RePricing\V1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
<<<<<<< HEAD
     * Operation get12
     *
     * Get a single repricing Item.
     *
     * @param int $item_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO
     */
    public function get12($item_id)
    {
        list($response) = $this->get12WithHttpInfo($item_id);
        return $response;
    }

    /**
     * Operation get12WithHttpInfo
     *
     * Get a single repricing Item.
     *
     * @param int $item_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function get12WithHttpInfo($item_id)
    {
        // verify the required parameter 'item_id' is set
        if ($item_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_id when calling get12');
        }
        // parse inputs
        $resourcePath = "/item/{itemId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($item_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO',
                '/item/{itemId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation list7
=======
     * Operation callList
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Gets a list of repricing items.
     *
     * @param int $by_item_id  (optional)
     * @param string $by_sku  (optional)
     * @param string $by_title  (optional)
     * @param bool $by_title_exact  (optional, default to false)
     * @param string $by_search_term  (optional)
     * @param string $by_condition  (optional)
     * @param string $by_price_mode  (optional)
     * @param int $by_price_gaps  (optional)
     * @param int $by_finding_filter  (optional)
     * @param string $by_price_state  (optional)
     * @param int $by_current_price_from  (optional)
     * @param int $by_current_price_to  (optional)
     * @param int $by_quantity_from  (optional)
     * @param int $by_quantity_to  (optional)
     * @param int $by_shipping_from  (optional)
     * @param int $by_shipping_to  (optional)
     * @param int $by_orders_value  (optional)
     * @param string $by_orders_days  (optional)
     * @param string $by_orders_constraint  (optional)
     * @param string $by_site  (optional)
     * @param string $by_variation_type  (optional)
     * @param bool $by_hide_ended_items  (optional, default to true)
     * @param int $by_id_greater_than  (optional)
     * @param bool $where_price_mode_null  (optional, default to false)
     * @param bool $where_search_rank_null  (optional, default to false)
     * @param bool $where_search_rank_not_null  (optional, default to false)
     * @param bool $where_total_entries_null  (optional, default to false)
     * @param bool $where_total_entries_not_null  (optional, default to false)
     * @param bool $where_only_own_offer  (optional, default to false)
     * @param bool $by_items_without_price_settings  (optional)
     * @param bool $by_missing_required_specs  (optional)
     * @param bool $by_missing_recommended_specs  (optional)
     * @param bool $by_missing_optional_specs  (optional)
     * @param int $offset  (optional, default to 0)
     * @param int $limit  (optional, default to 50)
     * @param string $sort  (optional, default to ITEM_ID)
     * @param string $order  (optional, default to ASC)
     * @param bool $exclude_childs  (optional, default to false)
     * @param bool $count_items  (optional, default to false)
     * @param bool $return_items  (optional, default to true)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[]
     */
<<<<<<< HEAD
    public function list7($by_item_id = null, $by_sku = null, $by_title = null, $by_title_exact = null, $by_search_term = null, $by_condition = null, $by_price_mode = null, $by_price_gaps = null, $by_finding_filter = null, $by_price_state = null, $by_current_price_from = null, $by_current_price_to = null, $by_quantity_from = null, $by_quantity_to = null, $by_shipping_from = null, $by_shipping_to = null, $by_orders_value = null, $by_orders_days = null, $by_orders_constraint = null, $by_site = null, $by_variation_type = null, $by_hide_ended_items = null, $by_id_greater_than = null, $where_price_mode_null = null, $where_search_rank_null = null, $where_search_rank_not_null = null, $where_total_entries_null = null, $where_total_entries_not_null = null, $where_only_own_offer = null, $by_items_without_price_settings = null, $by_missing_required_specs = null, $by_missing_recommended_specs = null, $by_missing_optional_specs = null, $offset = null, $limit = null, $sort = null, $order = null, $exclude_childs = null, $count_items = null, $return_items = null)
    {
        list($response) = $this->list7WithHttpInfo($by_item_id, $by_sku, $by_title, $by_title_exact, $by_search_term, $by_condition, $by_price_mode, $by_price_gaps, $by_finding_filter, $by_price_state, $by_current_price_from, $by_current_price_to, $by_quantity_from, $by_quantity_to, $by_shipping_from, $by_shipping_to, $by_orders_value, $by_orders_days, $by_orders_constraint, $by_site, $by_variation_type, $by_hide_ended_items, $by_id_greater_than, $where_price_mode_null, $where_search_rank_null, $where_search_rank_not_null, $where_total_entries_null, $where_total_entries_not_null, $where_only_own_offer, $by_items_without_price_settings, $by_missing_required_specs, $by_missing_recommended_specs, $by_missing_optional_specs, $offset, $limit, $sort, $order, $exclude_childs, $count_items, $return_items);
=======
    public function callList($by_item_id = null, $by_sku = null, $by_title = null, $by_title_exact = null, $by_search_term = null, $by_condition = null, $by_price_mode = null, $by_price_gaps = null, $by_finding_filter = null, $by_price_state = null, $by_current_price_from = null, $by_current_price_to = null, $by_quantity_from = null, $by_quantity_to = null, $by_shipping_from = null, $by_shipping_to = null, $by_orders_value = null, $by_orders_days = null, $by_orders_constraint = null, $by_site = null, $by_variation_type = null, $by_hide_ended_items = null, $by_id_greater_than = null, $where_price_mode_null = null, $where_search_rank_null = null, $where_search_rank_not_null = null, $where_total_entries_null = null, $where_total_entries_not_null = null, $where_only_own_offer = null, $by_items_without_price_settings = null, $by_missing_required_specs = null, $by_missing_recommended_specs = null, $by_missing_optional_specs = null, $offset = null, $limit = null, $sort = null, $order = null, $exclude_childs = null, $count_items = null, $return_items = null)
    {
        list($response) = $this->callListWithHttpInfo($by_item_id, $by_sku, $by_title, $by_title_exact, $by_search_term, $by_condition, $by_price_mode, $by_price_gaps, $by_finding_filter, $by_price_state, $by_current_price_from, $by_current_price_to, $by_quantity_from, $by_quantity_to, $by_shipping_from, $by_shipping_to, $by_orders_value, $by_orders_days, $by_orders_constraint, $by_site, $by_variation_type, $by_hide_ended_items, $by_id_greater_than, $where_price_mode_null, $where_search_rank_null, $where_search_rank_not_null, $where_total_entries_null, $where_total_entries_not_null, $where_only_own_offer, $by_items_without_price_settings, $by_missing_required_specs, $by_missing_recommended_specs, $by_missing_optional_specs, $offset, $limit, $sort, $order, $exclude_childs, $count_items, $return_items);
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        return $response;
    }

    /**
<<<<<<< HEAD
     * Operation list7WithHttpInfo
=======
     * Operation callListWithHttpInfo
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Gets a list of repricing items.
     *
     * @param int $by_item_id  (optional)
     * @param string $by_sku  (optional)
     * @param string $by_title  (optional)
     * @param bool $by_title_exact  (optional, default to false)
     * @param string $by_search_term  (optional)
     * @param string $by_condition  (optional)
     * @param string $by_price_mode  (optional)
     * @param int $by_price_gaps  (optional)
     * @param int $by_finding_filter  (optional)
     * @param string $by_price_state  (optional)
     * @param int $by_current_price_from  (optional)
     * @param int $by_current_price_to  (optional)
     * @param int $by_quantity_from  (optional)
     * @param int $by_quantity_to  (optional)
     * @param int $by_shipping_from  (optional)
     * @param int $by_shipping_to  (optional)
     * @param int $by_orders_value  (optional)
     * @param string $by_orders_days  (optional)
     * @param string $by_orders_constraint  (optional)
     * @param string $by_site  (optional)
     * @param string $by_variation_type  (optional)
     * @param bool $by_hide_ended_items  (optional, default to true)
     * @param int $by_id_greater_than  (optional)
     * @param bool $where_price_mode_null  (optional, default to false)
     * @param bool $where_search_rank_null  (optional, default to false)
     * @param bool $where_search_rank_not_null  (optional, default to false)
     * @param bool $where_total_entries_null  (optional, default to false)
     * @param bool $where_total_entries_not_null  (optional, default to false)
     * @param bool $where_only_own_offer  (optional, default to false)
     * @param bool $by_items_without_price_settings  (optional)
     * @param bool $by_missing_required_specs  (optional)
     * @param bool $by_missing_recommended_specs  (optional)
     * @param bool $by_missing_optional_specs  (optional)
     * @param int $offset  (optional, default to 0)
     * @param int $limit  (optional, default to 50)
     * @param string $sort  (optional, default to ITEM_ID)
     * @param string $order  (optional, default to ASC)
     * @param bool $exclude_childs  (optional, default to false)
     * @param bool $count_items  (optional, default to false)
     * @param bool $return_items  (optional, default to true)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[], HTTP status code, HTTP response headers (array of strings)
     */
<<<<<<< HEAD
    public function list7WithHttpInfo($by_item_id = null, $by_sku = null, $by_title = null, $by_title_exact = null, $by_search_term = null, $by_condition = null, $by_price_mode = null, $by_price_gaps = null, $by_finding_filter = null, $by_price_state = null, $by_current_price_from = null, $by_current_price_to = null, $by_quantity_from = null, $by_quantity_to = null, $by_shipping_from = null, $by_shipping_to = null, $by_orders_value = null, $by_orders_days = null, $by_orders_constraint = null, $by_site = null, $by_variation_type = null, $by_hide_ended_items = null, $by_id_greater_than = null, $where_price_mode_null = null, $where_search_rank_null = null, $where_search_rank_not_null = null, $where_total_entries_null = null, $where_total_entries_not_null = null, $where_only_own_offer = null, $by_items_without_price_settings = null, $by_missing_required_specs = null, $by_missing_recommended_specs = null, $by_missing_optional_specs = null, $offset = null, $limit = null, $sort = null, $order = null, $exclude_childs = null, $count_items = null, $return_items = null)
=======
    public function callListWithHttpInfo($by_item_id = null, $by_sku = null, $by_title = null, $by_title_exact = null, $by_search_term = null, $by_condition = null, $by_price_mode = null, $by_price_gaps = null, $by_finding_filter = null, $by_price_state = null, $by_current_price_from = null, $by_current_price_to = null, $by_quantity_from = null, $by_quantity_to = null, $by_shipping_from = null, $by_shipping_to = null, $by_orders_value = null, $by_orders_days = null, $by_orders_constraint = null, $by_site = null, $by_variation_type = null, $by_hide_ended_items = null, $by_id_greater_than = null, $where_price_mode_null = null, $where_search_rank_null = null, $where_search_rank_not_null = null, $where_total_entries_null = null, $where_total_entries_not_null = null, $where_only_own_offer = null, $by_items_without_price_settings = null, $by_missing_required_specs = null, $by_missing_recommended_specs = null, $by_missing_optional_specs = null, $offset = null, $limit = null, $sort = null, $order = null, $exclude_childs = null, $count_items = null, $return_items = null)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    {
        // parse inputs
        $resourcePath = "/item";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($by_item_id !== null) {
            $queryParams['by-item-id'] = $this->apiClient->getSerializer()->toQueryValue($by_item_id);
        }
        // query params
        if ($by_sku !== null) {
            $queryParams['by-sku'] = $this->apiClient->getSerializer()->toQueryValue($by_sku);
        }
        // query params
        if ($by_title !== null) {
            $queryParams['by-title'] = $this->apiClient->getSerializer()->toQueryValue($by_title);
        }
        // query params
        if ($by_title_exact !== null) {
            $queryParams['by-title-exact'] = $this->apiClient->getSerializer()->toQueryValue($by_title_exact);
        }
        // query params
        if ($by_search_term !== null) {
            $queryParams['by-search-term'] = $this->apiClient->getSerializer()->toQueryValue($by_search_term);
        }
        // query params
        if ($by_condition !== null) {
            $queryParams['by-condition'] = $this->apiClient->getSerializer()->toQueryValue($by_condition);
        }
        // query params
        if ($by_price_mode !== null) {
            $queryParams['by-price-mode'] = $this->apiClient->getSerializer()->toQueryValue($by_price_mode);
        }
        // query params
        if ($by_price_gaps !== null) {
            $queryParams['by-price-gaps'] = $this->apiClient->getSerializer()->toQueryValue($by_price_gaps);
        }
        // query params
        if ($by_finding_filter !== null) {
            $queryParams['by-finding-filter'] = $this->apiClient->getSerializer()->toQueryValue($by_finding_filter);
        }
        // query params
        if ($by_price_state !== null) {
            $queryParams['by-price-state'] = $this->apiClient->getSerializer()->toQueryValue($by_price_state);
        }
        // query params
        if ($by_current_price_from !== null) {
            $queryParams['by-current-price-from'] = $this->apiClient->getSerializer()->toQueryValue($by_current_price_from);
        }
        // query params
        if ($by_current_price_to !== null) {
            $queryParams['by-current-price-to'] = $this->apiClient->getSerializer()->toQueryValue($by_current_price_to);
        }
        // query params
        if ($by_quantity_from !== null) {
            $queryParams['by-quantity-from'] = $this->apiClient->getSerializer()->toQueryValue($by_quantity_from);
        }
        // query params
        if ($by_quantity_to !== null) {
            $queryParams['by-quantity-to'] = $this->apiClient->getSerializer()->toQueryValue($by_quantity_to);
        }
        // query params
        if ($by_shipping_from !== null) {
            $queryParams['by-shipping-from'] = $this->apiClient->getSerializer()->toQueryValue($by_shipping_from);
        }
        // query params
        if ($by_shipping_to !== null) {
            $queryParams['by-shipping-to'] = $this->apiClient->getSerializer()->toQueryValue($by_shipping_to);
        }
        // query params
        if ($by_orders_value !== null) {
            $queryParams['by-orders-value'] = $this->apiClient->getSerializer()->toQueryValue($by_orders_value);
        }
        // query params
        if ($by_orders_days !== null) {
            $queryParams['by-orders-days'] = $this->apiClient->getSerializer()->toQueryValue($by_orders_days);
        }
        // query params
        if ($by_orders_constraint !== null) {
            $queryParams['by-orders-constraint'] = $this->apiClient->getSerializer()->toQueryValue($by_orders_constraint);
        }
        // query params
        if ($by_site !== null) {
            $queryParams['by-site'] = $this->apiClient->getSerializer()->toQueryValue($by_site);
        }
        // query params
        if ($by_variation_type !== null) {
            $queryParams['by-variation-type'] = $this->apiClient->getSerializer()->toQueryValue($by_variation_type);
        }
        // query params
        if ($by_hide_ended_items !== null) {
            $queryParams['by-hide-ended-items'] = $this->apiClient->getSerializer()->toQueryValue($by_hide_ended_items);
        }
        // query params
        if ($by_id_greater_than !== null) {
            $queryParams['by-id-greater-than'] = $this->apiClient->getSerializer()->toQueryValue($by_id_greater_than);
        }
        // query params
        if ($where_price_mode_null !== null) {
            $queryParams['where-price-mode-null'] = $this->apiClient->getSerializer()->toQueryValue($where_price_mode_null);
        }
        // query params
        if ($where_search_rank_null !== null) {
            $queryParams['where-search-rank-null'] = $this->apiClient->getSerializer()->toQueryValue($where_search_rank_null);
        }
        // query params
        if ($where_search_rank_not_null !== null) {
            $queryParams['where-search-rank-not-null'] = $this->apiClient->getSerializer()->toQueryValue($where_search_rank_not_null);
        }
        // query params
        if ($where_total_entries_null !== null) {
            $queryParams['where-total-entries-null'] = $this->apiClient->getSerializer()->toQueryValue($where_total_entries_null);
        }
        // query params
        if ($where_total_entries_not_null !== null) {
            $queryParams['where-total-entries-not-null'] = $this->apiClient->getSerializer()->toQueryValue($where_total_entries_not_null);
        }
        // query params
        if ($where_only_own_offer !== null) {
            $queryParams['where-only-own-offer'] = $this->apiClient->getSerializer()->toQueryValue($where_only_own_offer);
        }
        // query params
        if ($by_items_without_price_settings !== null) {
            $queryParams['by-items-without-price-settings'] = $this->apiClient->getSerializer()->toQueryValue($by_items_without_price_settings);
        }
        // query params
        if ($by_missing_required_specs !== null) {
            $queryParams['by-missing-required-specs'] = $this->apiClient->getSerializer()->toQueryValue($by_missing_required_specs);
        }
        // query params
        if ($by_missing_recommended_specs !== null) {
            $queryParams['by-missing-recommended-specs'] = $this->apiClient->getSerializer()->toQueryValue($by_missing_recommended_specs);
        }
        // query params
        if ($by_missing_optional_specs !== null) {
            $queryParams['by-missing-optional-specs'] = $this->apiClient->getSerializer()->toQueryValue($by_missing_optional_specs);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($order);
        }
        // query params
        if ($exclude_childs !== null) {
            $queryParams['exclude-childs'] = $this->apiClient->getSerializer()->toQueryValue($exclude_childs);
        }
        // query params
        if ($count_items !== null) {
            $queryParams['count-items'] = $this->apiClient->getSerializer()->toQueryValue($count_items);
        }
        // query params
        if ($return_items !== null) {
            $queryParams['return-items'] = $this->apiClient->getSerializer()->toQueryValue($return_items);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[]',
                '/item'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
<<<<<<< HEAD
=======

    /**
     * Operation get
     *
     * Get a single repricing Item.
     *
     * @param int $item_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO
     */
    public function get($item_id)
    {
        list($response) = $this->getWithHttpInfo($item_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Get a single repricing Item.
     *
     * @param int $item_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($item_id)
    {
        // verify the required parameter 'item_id' is set
        if ($item_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_id when calling get');
        }
        // parse inputs
        $resourcePath = "/item/{itemId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($item_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO',
                '/item/{itemId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
}
