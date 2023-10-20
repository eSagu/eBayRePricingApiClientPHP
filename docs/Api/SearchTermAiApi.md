# eSagu\EBay\RePricing\V1\SearchTermAiApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get19**](SearchTermAiApi.md#get19) | **GET** /search-term-stop-ai | Get the search term ai object.
[**post11**](SearchTermAiApi.md#post11) | **POST** /search-term-stop-ai | Creates new search term ai object if empty.
[**put10**](SearchTermAiApi.md#put10) | **PUT** /search-term-stop-ai | Edits search term ai object.


# **get19**
> \eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO get19()

Get the search term ai object.

API endpoint preparing search term setting for generating per ai.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\SearchTermAiApi();

try {
    $result = $api_instance->get19();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchTermAiApi->get19: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO**](../Model/SearchTermAiDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post11**
> post11($body)

Creates new search term ai object if empty.

API endpoint preparing search term setting for generating per ai.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\SearchTermAiApi();
$body = new \eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO(); // \eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO | 

try {
    $api_instance->post11($body);
} catch (Exception $e) {
    echo 'Exception when calling SearchTermAiApi->post11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put10**
> put10($body)

Edits search term ai object.

API endpoint preparing search term setting for generating per ai.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\SearchTermAiApi();
$body = new \eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO(); // \eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO | 

try {
    $api_instance->put10($body);
} catch (Exception $e) {
    echo 'Exception when calling SearchTermAiApi->put10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\SearchTermAiDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

