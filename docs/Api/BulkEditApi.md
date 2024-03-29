# eSagu\EBay\RePricing\V1\BulkEditApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get6**](BulkEditApi.md#get6) | **GET** /bulk-edit/{bulkEditId} | Get a single bulk edit specified by it&#39;s id.
[**list1**](BulkEditApi.md#list1) | **GET** /bulk-edit | Get a list of all bulk edits.
[**post3**](BulkEditApi.md#post3) | **POST** /bulk-edit | Creates a new bulk edit.


# **get6**
> \eSagu\EBay\RePricing\V1\Model\BulkEditDTO get6($bulk_edit_id)

Get a single bulk edit specified by it's id.

API endpoint for bulk editing ebay repricing items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\BulkEditApi();
$bulk_edit_id = 789; // int | 

try {
    $result = $api_instance->get6($bulk_edit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkEditApi->get6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_edit_id** | **int**|  |

### Return type

[**\eSagu\EBay\RePricing\V1\Model\BulkEditDTO**](../Model/BulkEditDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list1**
> \eSagu\EBay\RePricing\V1\Model\BulkEditDTO[] list1()

Get a list of all bulk edits.

API endpoint for bulk editing ebay repricing items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\BulkEditApi();

try {
    $result = $api_instance->list1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkEditApi->list1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\BulkEditDTO[]**](../Model/BulkEditDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post3**
> post3($body)

Creates a new bulk edit.

API endpoint for bulk editing ebay repricing items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\BulkEditApi();
$body = new \eSagu\EBay\RePricing\V1\Model\BulkEditDTO(); // \eSagu\EBay\RePricing\V1\Model\BulkEditDTO | 

try {
    $api_instance->post3($body);
} catch (Exception $e) {
    echo 'Exception when calling BulkEditApi->post3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\BulkEditDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\BulkEditDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

