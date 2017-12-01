# eSagu\EBay\RePricing\V1\FindingAPIFilterApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](FindingAPIFilterApi.md#callList) | **GET** /finding-api-filter | Get a list of all FindingAPIFilters.
[**delete**](FindingAPIFilterApi.md#delete) | **DELETE** /finding-api-filter/{findingAPIFilterId} | Deletes a FindingAPIFilter specified by it&#39;s id.
[**get**](FindingAPIFilterApi.md#get) | **GET** /finding-api-filter/{findingAPIFilterId} | Get a single FindingAPIFilter specified by it&#39;s id.
[**post**](FindingAPIFilterApi.md#post) | **POST** /finding-api-filter | Creates a new FindingAPIFilter.
[**put**](FindingAPIFilterApi.md#put) | **PUT** /finding-api-filter/{findingAPIFilterId} | Updates a FindingAPIFilter specified by it&#39;s id.


# **callList**
> \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO[] callList()

Get a list of all FindingAPIFilters.

API endpoint for working with the ebay finding API filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\FindingAPIFilterApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO[]**](../Model/FindingAPIFilterDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($finding_api_filter_id)

Deletes a FindingAPIFilter specified by it's id.

API endpoint for working with the ebay finding API filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\FindingAPIFilterApi();
$finding_api_filter_id = 789; // int | 

try {
    $api_instance->delete($finding_api_filter_id);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finding_api_filter_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO get($finding_api_filter_id)

Get a single FindingAPIFilter specified by it's id.

API endpoint for working with the ebay finding API filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\FindingAPIFilterApi();
$finding_api_filter_id = 789; // int | 

try {
    $result = $api_instance->get($finding_api_filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finding_api_filter_id** | **int**|  |

### Return type

[**\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO**](../Model/FindingAPIFilterDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Creates a new FindingAPIFilter.

API endpoint for working with the ebay finding API filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\FindingAPIFilterApi();
$body = new \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO(); // \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($finding_api_filter_id, $body)

Updates a FindingAPIFilter specified by it's id.

API endpoint for working with the ebay finding API filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\FindingAPIFilterApi();
$finding_api_filter_id = 789; // int | 
$body = new \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO(); // \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO | 

try {
    $api_instance->put($finding_api_filter_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finding_api_filter_id** | **int**|  |
 **body** | [**\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

