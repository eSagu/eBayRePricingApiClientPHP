# eSagu\EBay\RePricing\V1\SettingsApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](SettingsApi.md#get) | **GET** /settings | Gets the repricing settings.
[**post**](SettingsApi.md#post) | **POST** /settings | Adds new repricing settings if not exists.
[**put**](SettingsApi.md#put) | **PUT** /settings | Edit the repricing settings.


# **get**
> \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO get()

Gets the repricing settings.

API endpoint for repricing settings, you can enable or disable the up and downloads here for example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\SettingsApi();

try {
    $result = $api_instance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO**](../Model/SettingsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Adds new repricing settings if not exists.

API endpoint for repricing settings, you can enable or disable the up and downloads here for example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\SettingsApi();
$body = new \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO(); // \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO**](../Model/\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO.md)|  | [optional]

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

Edit the repricing settings.

API endpoint for repricing settings, you can enable or disable the up and downloads here for example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\SettingsApi();
$body = new \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO(); // \eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO | 

try {
    $api_instance->put($body);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO**](../Model/\eSagu\EBay\RePricing\V1\eSagu\EBay\RePricing\V1\Model\SettingsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

