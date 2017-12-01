# eSagu\EBay\RePricing\V1\ItemApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](ItemApi.md#callList) | **GET** /item | Gets a list of repricing items.
[**get**](ItemApi.md#get) | **GET** /item/{itemId} | Get a single repricing Item.


# **callList**
> \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[] callList($by_item_id, $by_sku, $by_title, $by_title_exact, $by_search_term, $by_condition, $by_price_mode, $by_price_gaps, $by_finding_filter, $by_price_state, $by_current_price_from, $by_current_price_to, $by_quantity_from, $by_quantity_to, $by_shipping_from, $by_shipping_to, $by_site, $by_hide_ended_items, $by_id_greater_than, $where_search_rank_null, $where_search_rank_not_null, $where_total_entries_null, $where_total_entries_not_null, $where_only_own_offer, $offset, $limit, $sort, $order, $exclude_childs, $count_items, $return_items)

Gets a list of repricing items.

API endpoint for repricing items, you can retrieve item information here for editing the item's strategy use the \"ItemStrategy\" API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\ItemApi();
$by_item_id = 789; // int | 
$by_sku = "by_sku_example"; // string | 
$by_title = "by_title_example"; // string | 
$by_title_exact = false; // bool | 
$by_search_term = "by_search_term_example"; // string | 
$by_condition = "by_condition_example"; // string | 
$by_price_mode = "by_price_mode_example"; // string | 
$by_price_gaps = 789; // int | 
$by_finding_filter = 789; // int | 
$by_price_state = "by_price_state_example"; // string | 
$by_current_price_from = 56; // int | 
$by_current_price_to = 56; // int | 
$by_quantity_from = 56; // int | 
$by_quantity_to = 56; // int | 
$by_shipping_from = 56; // int | 
$by_shipping_to = 56; // int | 
$by_site = "by_site_example"; // string | 
$by_hide_ended_items = true; // bool | 
$by_id_greater_than = 789; // int | 
$where_search_rank_null = false; // bool | 
$where_search_rank_not_null = false; // bool | 
$where_total_entries_null = false; // bool | 
$where_total_entries_not_null = false; // bool | 
$where_only_own_offer = false; // bool | 
$offset = 0; // int | 
$limit = 50; // int | 
$sort = "ITEM_ID"; // string | 
$order = "ASC"; // string | 
$exclude_childs = false; // bool | 
$count_items = false; // bool | 
$return_items = true; // bool | 

try {
    $result = $api_instance->callList($by_item_id, $by_sku, $by_title, $by_title_exact, $by_search_term, $by_condition, $by_price_mode, $by_price_gaps, $by_finding_filter, $by_price_state, $by_current_price_from, $by_current_price_to, $by_quantity_from, $by_quantity_to, $by_shipping_from, $by_shipping_to, $by_site, $by_hide_ended_items, $by_id_greater_than, $where_search_rank_null, $where_search_rank_not_null, $where_total_entries_null, $where_total_entries_not_null, $where_only_own_offer, $offset, $limit, $sort, $order, $exclude_childs, $count_items, $return_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **by_item_id** | **int**|  | [optional]
 **by_sku** | **string**|  | [optional]
 **by_title** | **string**|  | [optional]
 **by_title_exact** | **bool**|  | [optional] [default to false]
 **by_search_term** | **string**|  | [optional]
 **by_condition** | **string**|  | [optional]
 **by_price_mode** | **string**|  | [optional]
 **by_price_gaps** | **int**|  | [optional]
 **by_finding_filter** | **int**|  | [optional]
 **by_price_state** | **string**|  | [optional]
 **by_current_price_from** | **int**|  | [optional]
 **by_current_price_to** | **int**|  | [optional]
 **by_quantity_from** | **int**|  | [optional]
 **by_quantity_to** | **int**|  | [optional]
 **by_shipping_from** | **int**|  | [optional]
 **by_shipping_to** | **int**|  | [optional]
 **by_site** | **string**|  | [optional]
 **by_hide_ended_items** | **bool**|  | [optional] [default to true]
 **by_id_greater_than** | **int**|  | [optional]
 **where_search_rank_null** | **bool**|  | [optional] [default to false]
 **where_search_rank_not_null** | **bool**|  | [optional] [default to false]
 **where_total_entries_null** | **bool**|  | [optional] [default to false]
 **where_total_entries_not_null** | **bool**|  | [optional] [default to false]
 **where_only_own_offer** | **bool**|  | [optional] [default to false]
 **offset** | **int**|  | [optional] [default to 0]
 **limit** | **int**|  | [optional] [default to 50]
 **sort** | **string**|  | [optional] [default to ITEM_ID]
 **order** | **string**|  | [optional] [default to ASC]
 **exclude_childs** | **bool**|  | [optional] [default to false]
 **count_items** | **bool**|  | [optional] [default to false]
 **return_items** | **bool**|  | [optional] [default to true]

### Return type

[**\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[]**](../Model/RepricingItemDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\EBay\RePricing\V1\Model\RepricingItemDTO get($item_id)

Get a single repricing Item.

API endpoint for repricing items, you can retrieve item information here for editing the item's strategy use the \"ItemStrategy\" API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\ItemApi();
$item_id = 789; // int | 

try {
    $result = $api_instance->get($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

[**\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO**](../Model/RepricingItemDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

