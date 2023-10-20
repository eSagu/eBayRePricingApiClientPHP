# eSagu\EBay\RePricing\V1\NewItemBulkEditApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
<<<<<<< HEAD
[**get14**](NewItemBulkEditApi.md#get14) | **GET** /new-item-bulk-edit | Get the new item bulk edit settings.
[**post9**](NewItemBulkEditApi.md#post9) | **POST** /new-item-bulk-edit | Creates the new item bulk edit settings if empty.
[**put7**](NewItemBulkEditApi.md#put7) | **PUT** /new-item-bulk-edit | Edits the new item bulk edit settings.


# **get14**
> \eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO get14()
=======
[**get**](NewItemBulkEditApi.md#get) | **GET** /new-item-bulk-edit | Get the new item bulk edit settings.
[**post**](NewItemBulkEditApi.md#post) | **POST** /new-item-bulk-edit | Creates the new item bulk edit settings if empty.
[**put**](NewItemBulkEditApi.md#put) | **PUT** /new-item-bulk-edit | Edits the new item bulk edit settings.


# **get**
> \eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO get()
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

Get the new item bulk edit settings.

API endpoint for working with the new item bulk edit settings, used for configuring recently listed items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\NewItemBulkEditApi();

try {
<<<<<<< HEAD
    $result = $api_instance->get14();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewItemBulkEditApi->get14: ', $e->getMessage(), PHP_EOL;
=======
    $result = $api_instance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewItemBulkEditApi->get: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO**](../Model/NewItemBulkEditDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<<<<<<< HEAD
# **post9**
> post9($body)
=======
# **post**
> post($body)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

Creates the new item bulk edit settings if empty.

API endpoint for working with the new item bulk edit settings, used for configuring recently listed items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\NewItemBulkEditApi();
$body = new \eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO(); // \eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO | 

try {
<<<<<<< HEAD
    $api_instance->post9($body);
} catch (Exception $e) {
    echo 'Exception when calling NewItemBulkEditApi->post9: ', $e->getMessage(), PHP_EOL;
=======
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling NewItemBulkEditApi->post: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<<<<<<< HEAD
# **put7**
> put7($body)
=======
# **put**
> put($body)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

Edits the new item bulk edit settings.

API endpoint for working with the new item bulk edit settings, used for configuring recently listed items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\NewItemBulkEditApi();
$body = new \eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO(); // \eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO | 

try {
<<<<<<< HEAD
    $api_instance->put7($body);
} catch (Exception $e) {
    echo 'Exception when calling NewItemBulkEditApi->put7: ', $e->getMessage(), PHP_EOL;
=======
    $api_instance->put($body);
} catch (Exception $e) {
    echo 'Exception when calling NewItemBulkEditApi->put: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\NewItemBulkEditDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

