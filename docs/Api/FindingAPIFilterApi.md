# eSagu\EBay\RePricing\V1\FindingAPIFilterApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
<<<<<<< HEAD
[**delete3**](FindingAPIFilterApi.md#delete3) | **DELETE** /finding-api-filter/{findingAPIFilterId} | Deletes a FindingAPIFilter specified by it&#39;s id.
[**get11**](FindingAPIFilterApi.md#get11) | **GET** /finding-api-filter/{findingAPIFilterId} | Get a single FindingAPIFilter specified by it&#39;s id.
[**list6**](FindingAPIFilterApi.md#list6) | **GET** /finding-api-filter | Get a list of all FindingAPIFilters.
[**post8**](FindingAPIFilterApi.md#post8) | **POST** /finding-api-filter | Creates a new FindingAPIFilter.
[**put5**](FindingAPIFilterApi.md#put5) | **PUT** /finding-api-filter/{findingAPIFilterId} | Updates a FindingAPIFilter specified by it&#39;s id.


# **delete3**
> delete3($finding_api_filter_id)
=======
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
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

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
<<<<<<< HEAD
    $api_instance->delete3($finding_api_filter_id);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->delete3: ', $e->getMessage(), PHP_EOL;
=======
    $api_instance->delete($finding_api_filter_id);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->delete: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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

<<<<<<< HEAD
# **get11**
> \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO get11($finding_api_filter_id)
=======
# **get**
> \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO get($finding_api_filter_id)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

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
<<<<<<< HEAD
    $result = $api_instance->get11($finding_api_filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->get11: ', $e->getMessage(), PHP_EOL;
=======
    $result = $api_instance->get($finding_api_filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->get: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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

<<<<<<< HEAD
# **list6**
> \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO[] list6()

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
    $result = $api_instance->list6();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->list6: ', $e->getMessage(), PHP_EOL;
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

# **post8**
> post8($body)
=======
# **post**
> post($body)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

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
<<<<<<< HEAD
    $api_instance->post8($body);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->post8: ', $e->getMessage(), PHP_EOL;
=======
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->post: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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

<<<<<<< HEAD
# **put5**
> put5($finding_api_filter_id, $body)
=======
# **put**
> put($finding_api_filter_id, $body)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b

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
<<<<<<< HEAD
    $api_instance->put5($finding_api_filter_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->put5: ', $e->getMessage(), PHP_EOL;
=======
    $api_instance->put($finding_api_filter_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FindingAPIFilterApi->put: ', $e->getMessage(), PHP_EOL;
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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

