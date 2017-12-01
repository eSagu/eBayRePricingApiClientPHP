# eSagu\Ebay\RePricing\V1\BulkEditApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](BulkEditApi.md#callList) | **GET** /bulk-edit | Get a list of all bulk edits.
[**get**](BulkEditApi.md#get) | **GET** /bulk-edit/{bulkEditId} | Get a single bulk edit specified by it&#39;s id.
[**post**](BulkEditApi.md#post) | **POST** /bulk-edit | Creates a new bulk edit.


# **callList**
> \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\BulkEditDTO[] callList()

Get a list of all bulk edits.

API endpoint for bulk editing ebay repricing items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Ebay\RePricing\V1\Api\BulkEditApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkEditApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\BulkEditDTO[]**](../Model/BulkEditDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\BulkEditDTO get($bulk_edit_id)

Get a single bulk edit specified by it's id.

API endpoint for bulk editing ebay repricing items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Ebay\RePricing\V1\Api\BulkEditApi();
$bulk_edit_id = 789; // int | 

try {
    $result = $api_instance->get($bulk_edit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkEditApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_edit_id** | **int**|  |

### Return type

[**\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\BulkEditDTO**](../Model/BulkEditDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Creates a new bulk edit.

API endpoint for bulk editing ebay repricing items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Ebay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Ebay\RePricing\V1\Api\BulkEditApi();
$body = new \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\BulkEditDTO(); // \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\BulkEditDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling BulkEditApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\BulkEditDTO**](../Model/\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\BulkEditDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

