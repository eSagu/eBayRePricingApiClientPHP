# RepricingItemDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**inserted** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated** | [**\DateTime**](\DateTime.md) |  | [optional] 
**user_service_id** | **int** |  | [optional] 
**item_id** | **int** |  | [optional] 
**sku** | **string** |  | [optional] 
**title** | **string** |  | [optional] 
**initial_price** | **int** |  | [optional] 
**current_price** | **int** |  | [optional] 
**guessed_online_price** | **int** |  | [optional] 
**shipping_costs** | **int** |  | [optional] 
**quantity** | **int** |  | [optional] 
**quantity_sold** | **int** |  | [optional] 
**condition** | **string** |  | [optional] 
**item_images** | **string[]** |  | [optional] 
**item_url** | **string** |  | [optional] 
**listing_type** | **string** |  | [optional] 
**start_time** | **int** |  | [optional] 
**end_time** | **int** |  | [optional] 
**offers_last_update** | **int** |  | [optional] 
**offer_ended** | **bool** |  | [optional] 
**site** | **string** |  | [optional] 
**strategy** | [**\eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO**](RepricingItemStrategyDTO.md) |  | [optional] 
**offers** | [**\eSagu\EBay\RePricing\V1\Model\ItemOfferDTO[]**](ItemOfferDTO.md) |  | [optional] 
**optimization_result** | [**\eSagu\EBay\RePricing\V1\Model\RepricingItemOptimizationResultDTO**](RepricingItemOptimizationResultDTO.md) |  | [optional] 
**variation_type** | **string** |  | [optional] 
**variation_specifics** | [**map[string,string[]]**](array.md) |  | [optional] 
**cheapest_variation** | **string** |  | [optional] 
**variations** | [**\eSagu\EBay\RePricing\V1\Model\RepricingItemDTO[]**](RepricingItemDTO.md) |  | [optional] 
**price_upload** | [**\eSagu\EBay\RePricing\V1\Model\RepricingItemPriceUploadDTO**](RepricingItemPriceUploadDTO.md) |  | [optional] 
**primary_category** | [**\eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO**](EbayCategoryDTO.md) |  | [optional] 
**secondary_category** | [**\eSagu\EBay\RePricing\V1\Model\EbayCategoryDTO**](EbayCategoryDTO.md) |  | [optional] 
**search_rank** | **int** |  | [optional] 
**total_entries** | **int** |  | [optional] 
**additional_details** | [**\eSagu\EBay\RePricing\V1\Model\RepricingItemAdditionalDetailsDTO**](RepricingItemAdditionalDetailsDTO.md) |  | [optional] 
**parent_id** | **int** |  | [optional] 
**order_stats** | [**\eSagu\EBay\RePricing\V1\Model\RepricingItemOrderStatsDTO**](RepricingItemOrderStatsDTO.md) |  | [optional] 
**ebay_finding_api_error_code** | **int** |  | [optional] 
**item_search_url** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


