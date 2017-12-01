# eSagu\Ebay\RePricing\V1\NewItemBulkEditApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](NewItemBulkEditApi.md#get) | **GET** /new-item-bulk-edit | Get the new item bulk edit settings.
[**post**](NewItemBulkEditApi.md#post) | **POST** /new-item-bulk-edit | Creates the new item bulk edit settings if empty.
[**put**](NewItemBulkEditApi.md#put) | **PUT** /new-item-bulk-edit | Edits the new item bulk edit settings.


# **get**
> \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO get()

Get the new item bulk edit settings.

API endpoint for working with the new item bulk edit settings, used for configuring recently listed items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Ebay\RePricing\V1\Api\NewItemBulkEditApi();

try {
    $result = $api_instance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewItemBulkEditApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO**](../Model/NewItemBulkEditDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Creates the new item bulk edit settings if empty.

API endpoint for working with the new item bulk edit settings, used for configuring recently listed items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Ebay\RePricing\V1\Api\NewItemBulkEditApi();
$body = new \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO(); // \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling NewItemBulkEditApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO**](../Model/\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($body)

Edits the new item bulk edit settings.

API endpoint for working with the new item bulk edit settings, used for configuring recently listed items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Ebay\RePricing\V1\Api\NewItemBulkEditApi();
$body = new \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO(); // \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO | 

try {
    $api_instance->put($body);
} catch (Exception $e) {
    echo 'Exception when calling NewItemBulkEditApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO**](../Model/\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\NewItemBulkEditDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

