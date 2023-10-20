# eSagu\EBay\RePricing\V1\CSVRequestPresetApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete1**](CSVRequestPresetApi.md#delete1) | **DELETE** /csv-request/preset/{csvRequestPresetId} | Deletes a CSV Preset specified by it&#39;s id.
[**get8**](CSVRequestPresetApi.md#get8) | **GET** /csv-request/preset/{csvRequestPresetId} | Get a single CSV request preset specified by it&#39;s id.
[**list3**](CSVRequestPresetApi.md#list3) | **GET** /csv-request/preset | Get a list of all CSV request presets for given user service.
[**post5**](CSVRequestPresetApi.md#post5) | **POST** /csv-request/preset | Creates a new CSV Preset.
[**put3**](CSVRequestPresetApi.md#put3) | **PUT** /csv-request/preset/{csvRequestPresetId} | Updates a CSV Preset specified by it&#39;s id.


# **delete1**
> delete1($csv_request_preset_id)

Deletes a CSV Preset specified by it's id.

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CSVRequestPresetApi();
$csv_request_preset_id = 789; // int | 

try {
    $api_instance->delete1($csv_request_preset_id);
} catch (Exception $e) {
    echo 'Exception when calling CSVRequestPresetApi->delete1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csv_request_preset_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get8**
> \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO get8($csv_request_preset_id)

Get a single CSV request preset specified by it's id.

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CSVRequestPresetApi();
$csv_request_preset_id = 789; // int | 

try {
    $result = $api_instance->get8($csv_request_preset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CSVRequestPresetApi->get8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csv_request_preset_id** | **int**|  |

### Return type

[**\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO**](../Model/RepricingCSVRequestPresetDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list3**
> \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO[] list3()

Get a list of all CSV request presets for given user service.

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CSVRequestPresetApi();

try {
    $result = $api_instance->list3();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CSVRequestPresetApi->list3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO[]**](../Model/RepricingCSVRequestPresetDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post5**
> post5($body)

Creates a new CSV Preset.

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CSVRequestPresetApi();
$body = new \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO(); // \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO | 

try {
    $api_instance->post5($body);
} catch (Exception $e) {
    echo 'Exception when calling CSVRequestPresetApi->post5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put3**
> put3($csv_request_preset_id, $body)

Updates a CSV Preset specified by it's id.

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CSVRequestPresetApi();
$csv_request_preset_id = 789; // int | 
$body = new \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO(); // \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO | 

try {
    $api_instance->put3($csv_request_preset_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CSVRequestPresetApi->put3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csv_request_preset_id** | **int**|  |
 **body** | [**\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestPresetDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

