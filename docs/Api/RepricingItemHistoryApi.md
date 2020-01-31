# eSagu\EBay\RePricing\V1\RepricingItemHistoryApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**priceOptimization**](RepricingItemHistoryApi.md#priceOptimization) | **GET** /item/{itemId}/history/price-optimization | Gets a history of price optimizations for a given item.


# **priceOptimization**
> \eSagu\EBay\RePricing\V1\Model\RepricingItemHistoryPriceOptimizationDTO[] priceOptimization($item_id)

Gets a history of price optimizations for a given item.

API endpoint for repricing item history, you can retrieve item information here for a given amount of time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\RepricingItemHistoryApi();
$item_id = 789; // int | 

try {
    $result = $api_instance->priceOptimization($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingItemHistoryApi->priceOptimization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

[**\eSagu\EBay\RePricing\V1\Model\RepricingItemHistoryPriceOptimizationDTO[]**](../Model/RepricingItemHistoryPriceOptimizationDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

