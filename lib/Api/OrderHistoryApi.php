<?php
/**
 * OrderHistoryApi
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eSagu ebay RePricing API
 *
 * eSagu API to reprice items on ebay.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace eSagu\EBay\RePricing\V1\Api;

use \eSagu\EBay\RePricing\V1\ApiClient;
use \eSagu\EBay\RePricing\V1\ApiException;
use \eSagu\EBay\RePricing\V1\Configuration;
use \eSagu\EBay\RePricing\V1\ObjectSerializer;

/**
 * OrderHistoryApi Class Doc Comment
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderHistoryApi
{
    /**
     * API Client
     *
     * @var \eSagu\EBay\RePricing\V1\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \eSagu\EBay\RePricing\V1\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\eSagu\EBay\RePricing\V1\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \eSagu\EBay\RePricing\V1\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \eSagu\EBay\RePricing\V1\ApiClient $apiClient set the API client
     *
     * @return OrderHistoryApi
     */
    public function setApiClient(\eSagu\EBay\RePricing\V1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation get
     *
     * Gets the order statistics of the last days.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingEbayOrderHistoryDTO[]
     */
    public function get()
    {
        list($response) = $this->getWithHttpInfo();
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Gets the order statistics of the last days.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\RepricingEbayOrderHistoryDTO[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/order-history";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\eSagu\EBay\RePricing\V1\Model\RepricingEbayOrderHistoryDTO[]',
                '/order-history'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\RepricingEbayOrderHistoryDTO[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\RepricingEbayOrderHistoryDTO[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
