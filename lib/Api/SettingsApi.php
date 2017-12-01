<?php
/**
 * SettingsApi
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\Ebay\RePricing\V1
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

namespace eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Api;

use \eSagu\Ebay\RePricing\V1\ApiClient;
use \eSagu\Ebay\RePricing\V1\ApiException;
use \eSagu\Ebay\RePricing\V1\Configuration;
use \eSagu\Ebay\RePricing\V1\ObjectSerializer;

/**
 * SettingsApi Class Doc Comment
 *
 * @category Class
 * @package  eSagu\Ebay\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettingsApi
{
    /**
     * API Client
     *
     * @var \eSagu\Ebay\RePricing\V1\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \eSagu\Ebay\RePricing\V1\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\eSagu\Ebay\RePricing\V1\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \eSagu\Ebay\RePricing\V1\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \eSagu\Ebay\RePricing\V1\ApiClient $apiClient set the API client
     *
     * @return SettingsApi
     */
    public function setApiClient(\eSagu\Ebay\RePricing\V1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation get
     *
     * Gets the repricing settings.
     *
     * @throws \eSagu\Ebay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\SettingsDTO
     */
    public function get()
    {
        list($response) = $this->getWithHttpInfo();
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Gets the repricing settings.
     *
     * @throws \eSagu\Ebay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\SettingsDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/settings";
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
                '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\SettingsDTO',
                '/settings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\SettingsDTO', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\SettingsDTO', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation post
     *
     * Adds new repricing settings if not exists.
     *
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\SettingsDTO $body  (optional)
     * @throws \eSagu\Ebay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function post($body = null)
    {
        list($response) = $this->postWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation postWithHttpInfo
     *
     * Adds new repricing settings if not exists.
     *
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\SettingsDTO $body  (optional)
     * @throws \eSagu\Ebay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function postWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/settings";
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

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/settings'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation put
     *
     * Edit the repricing settings.
     *
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\SettingsDTO $body  (optional)
     * @throws \eSagu\Ebay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function put($body = null)
    {
        list($response) = $this->putWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation putWithHttpInfo
     *
     * Edit the repricing settings.
     *
     * @param \eSagu\Ebay\RePricing\V1\eSagu\Ebay\RePricing\V1\Model\SettingsDTO $body  (optional)
     * @throws \eSagu\Ebay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function putWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/settings";
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

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/settings'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
