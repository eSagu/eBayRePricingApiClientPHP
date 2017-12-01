# eSagu\Ebay\RePricing\V1\OrderHistoryApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](OrderHistoryApi.md#get) | **GET** /order-history | Gets the order statistics of the last days.


# **get**
> \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RepricingEbayOrderHistoryDTO[] get()

Gets the order statistics of the last days.

You can retrieve the order stats from up to 90 days here, only COMPLETED and ACTIVE orders are included.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Ebay\RePricing\V1\Api\OrderHistoryApi();

try {
    $result = $api_instance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderHistoryApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\RepricingEbayOrderHistoryDTO[]**](../Model/RepricingEbayOrderHistoryDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

