# eSagu\EBay\RePricing\V1\CustomCodeApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get10**](CustomCodeApi.md#get10) | **GET** /custom-code/{customCodeId} | Get a single CustomCode specified by it&#39;s id..
[**list5**](CustomCodeApi.md#list5) | **GET** /custom-code | Get a list of all CustomCodes items.


# **get10**
> \eSagu\EBay\RePricing\V1\Model\CustomCodeDTO get10($custom_code_id)

Get a single CustomCode specified by it's id..

API endpoint for the custom code snippets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CustomCodeApi();
$custom_code_id = 789; // int | 

try {
    $result = $api_instance->get10($custom_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomCodeApi->get10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_code_id** | **int**|  |

### Return type

[**\eSagu\EBay\RePricing\V1\Model\CustomCodeDTO**](../Model/CustomCodeDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list5**
> \eSagu\EBay\RePricing\V1\Model\CustomCodeDTO[] list5()

Get a list of all CustomCodes items.

API endpoint for the custom code snippets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CustomCodeApi();

try {
    $result = $api_instance->list5();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomCodeApi->list5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\CustomCodeDTO[]**](../Model/CustomCodeDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

