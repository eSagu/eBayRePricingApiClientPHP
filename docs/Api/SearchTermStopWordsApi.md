# eSagu\EBay\RePricing\V1\SearchTermStopWordsApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get20**](SearchTermStopWordsApi.md#get20) | **GET** /search-term-stop-words | Get the search term stop words.
[**post12**](SearchTermStopWordsApi.md#post12) | **POST** /search-term-stop-words | Creates new search term stop words if empty.
[**put11**](SearchTermStopWordsApi.md#put11) | **PUT** /search-term-stop-words | Edits search term stop words.


# **get20**
> \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO get20()

Get the search term stop words.

API endpoint for for working with the stop words used by the search term generation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\SearchTermStopWordsApi();

try {
    $result = $api_instance->get20();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchTermStopWordsApi->get20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO**](../Model/SearchTermStopWordsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post12**
> post12($body)

Creates new search term stop words if empty.

API endpoint for for working with the stop words used by the search term generation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\SearchTermStopWordsApi();
$body = new \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO(); // \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO | 

try {
    $api_instance->post12($body);
} catch (Exception $e) {
    echo 'Exception when calling SearchTermStopWordsApi->post12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put11**
> put11($body)

Edits search term stop words.

API endpoint for for working with the stop words used by the search term generation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\SearchTermStopWordsApi();
$body = new \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO(); // \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO | 

try {
    $api_instance->put11($body);
} catch (Exception $e) {
    echo 'Exception when calling SearchTermStopWordsApi->put11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

