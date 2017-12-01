# eSagu\EBay\RePricing\V1\PriceGapsApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](PriceGapsApi.md#callList) | **GET** /price-gaps | Get a list of all PriceGaps items.
[**delete**](PriceGapsApi.md#delete) | **DELETE** /price-gaps/{priceGapId} | Deletes a PriceGap item.
[**get**](PriceGapsApi.md#get) | **GET** /price-gaps/{priceGapId} | Get a single PriceGap item.
[**post**](PriceGapsApi.md#post) | **POST** /price-gaps | Creates a new PriceGap item.
[**put**](PriceGapsApi.md#put) | **PUT** /price-gaps/{priceGapId} | Updates a PriceGap item.


# **callList**
> \eSagu\EBay\RePricing\V1\Model\PriceGapsDTO[] callList()

Get a list of all PriceGaps items.

API endpoint for price gaps, a price gap can be global or by seller name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\PriceGapsApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceGapsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO[]**](../Model/PriceGapsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($price_gap_id)

Deletes a PriceGap item.

API endpoint for price gaps, a price gap can be global or by seller name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\PriceGapsApi();
$price_gap_id = 789; // int | 

try {
    $api_instance->delete($price_gap_id);
} catch (Exception $e) {
    echo 'Exception when calling PriceGapsApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_gap_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\EBay\RePricing\V1\Model\PriceGapsDTO get($price_gap_id)

Get a single PriceGap item.

API endpoint for price gaps, a price gap can be global or by seller name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\PriceGapsApi();
$price_gap_id = 789; // int | 

try {
    $result = $api_instance->get($price_gap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceGapsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_gap_id** | **int**|  |

### Return type

[**\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO**](../Model/PriceGapsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Creates a new PriceGap item.

API endpoint for price gaps, a price gap can be global or by seller name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\PriceGapsApi();
$body = new \eSagu\EBay\RePricing\V1\Model\PriceGapsDTO(); // \eSagu\EBay\RePricing\V1\Model\PriceGapsDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling PriceGapsApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($price_gap_id, $body)

Updates a PriceGap item.

API endpoint for price gaps, a price gap can be global or by seller name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\PriceGapsApi();
$price_gap_id = 789; // int | 
$body = new \eSagu\EBay\RePricing\V1\Model\PriceGapsDTO(); // \eSagu\EBay\RePricing\V1\Model\PriceGapsDTO | 

try {
    $api_instance->put($price_gap_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PriceGapsApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_gap_id** | **int**|  |
 **body** | [**\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\PriceGapsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

