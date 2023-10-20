# eSagu\EBay\RePricing\V1\ItemStrategyApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
<<<<<<< HEAD
[**get13**](ItemStrategyApi.md#get13) | **GET** /item/{itemId}/strategy | Gets the item&#39;s strategy settings specified by the repricing item id.
[**put6**](ItemStrategyApi.md#put6) | **PUT** /item/{itemId}/strategy | Creates or updates the item&#39;s strategy settings.


# **get13**
> \eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO get13($item_id)
=======
[**get**](ItemStrategyApi.md#get) | **GET** /item/{itemId}/strategy | Gets the item&#39;s strategy settings specified by the repricing item id.
[**put**](ItemStrategyApi.md#put) | **PUT** /item/{itemId}/strategy | Creates or updates the item&#39;s strategy settings.


# **get**
> \eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO get($item_id)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

Gets the item's strategy settings specified by the repricing item id.

API endpoint editing the repricing item's strategy and price settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\ItemStrategyApi();
$item_id = 789; // int | 

try {
<<<<<<< HEAD
    $result = $api_instance->get13($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemStrategyApi->get13: ', $e->getMessage(), PHP_EOL;
=======
    $result = $api_instance->get($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemStrategyApi->get: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |

### Return type

[**\eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO**](../Model/RepricingItemStrategyDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<<<<<<< HEAD
# **put6**
> put6($item_id, $body)
=======
# **put**
> put($item_id, $body)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

Creates or updates the item's strategy settings.

API endpoint editing the repricing item's strategy and price settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\ItemStrategyApi();
$item_id = 789; // int | 
$body = new \eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO(); // \eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO | 

try {
<<<<<<< HEAD
    $api_instance->put6($item_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ItemStrategyApi->put6: ', $e->getMessage(), PHP_EOL;
=======
    $api_instance->put($item_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ItemStrategyApi->put: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**|  |
 **body** | [**\eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\RepricingItemStrategyDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

