# eSagu\EBay\RePricing\V1\CSVRequestApi

All URIs are relative to *https://api.esagu.de/ebay/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get9**](CSVRequestApi.md#get9) | **GET** /csv-request/{csvRequestId} | Get a single CSV Request.
[**list4**](CSVRequestApi.md#list4) | **GET** /csv-request | Get a list of all CSV Requests for given user service.
[**post6**](CSVRequestApi.md#post6) | **POST** /csv-request | Creates a new CSV Request.


# **get9**
> \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO get9($csv_request_id)

Get a single CSV Request.

API endpoint for requesting CSV files, you can find our CSV specification here: https://www.esagu.de/en/ebay-csv-manual.html .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CSVRequestApi();
$csv_request_id = 789; // int | 

try {
    $result = $api_instance->get9($csv_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CSVRequestApi->get9: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csv_request_id** | **int**|  |

### Return type

[**\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO**](../Model/RepricingCSVRequestDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list4**
> \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[] list4()

Get a list of all CSV Requests for given user service.

API endpoint for requesting CSV files, you can find our CSV specification here: https://www.esagu.de/en/ebay-csv-manual.html .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CSVRequestApi();

try {
    $result = $api_instance->list4();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CSVRequestApi->list4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[]**](../Model/RepricingCSVRequestDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post6**
> post6($body)

Creates a new CSV Request.

API endpoint for requesting CSV files, you can find our CSV specification here: https://www.esagu.de/en/ebay-csv-manual.html .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\EBay\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\EBay\RePricing\V1\Api\CSVRequestApi();
$body = new \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO(); // \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO | 

try {
    $api_instance->post6($body);
} catch (Exception $e) {
    echo 'Exception when calling CSVRequestApi->post6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO**](../Model/\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

