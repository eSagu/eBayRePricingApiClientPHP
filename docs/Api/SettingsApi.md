# eSagu\EBay\RePricing\V1\SettingsApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
<<<<<<< HEAD
[**get21**](SettingsApi.md#get21) | **GET** /settings | Gets the repricing settings.
[**post13**](SettingsApi.md#post13) | **POST** /settings | Adds new repricing settings if not exists.
[**put12**](SettingsApi.md#put12) | **PUT** /settings | Edit the repricing settings.


# **get21**
> \eSagu\EBay\RePricing\V1\Model\SettingsDTO get21()
=======
[**get**](SettingsApi.md#get) | **GET** /settings | Gets the repricing settings.
[**post**](SettingsApi.md#post) | **POST** /settings | Adds new repricing settings if not exists.
[**put**](SettingsApi.md#put) | **PUT** /settings | Edit the repricing settings.


# **get**
> \eSagu\EBay\RePricing\V1\Model\SettingsDTO get()
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

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
<<<<<<< HEAD
    $result = $api_instance->get21();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->get21: ', $e->getMessage(), PHP_EOL;
=======
    $result = $api_instance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->get: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\SettingsDTO**](../Model/SettingsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<<<<<<< HEAD
# **post13**
> post13($body)
=======
# **post**
> post($body)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

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
$body = new \eSagu\EBay\RePricing\V1\Model\SettingsDTO(); // \eSagu\EBay\RePricing\V1\Model\SettingsDTO | 

try {
<<<<<<< HEAD
    $api_instance->post13($body);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->post13: ', $e->getMessage(), PHP_EOL;
=======
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->post: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\SettingsDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\SettingsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<<<<<<< HEAD
# **put12**
> put12($body)
=======
# **put**
> put($body)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

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
$body = new \eSagu\EBay\RePricing\V1\Model\SettingsDTO(); // \eSagu\EBay\RePricing\V1\Model\SettingsDTO | 

try {
<<<<<<< HEAD
    $api_instance->put12($body);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->put12: ', $e->getMessage(), PHP_EOL;
=======
    $api_instance->put($body);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->put: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\SettingsDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\SettingsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

