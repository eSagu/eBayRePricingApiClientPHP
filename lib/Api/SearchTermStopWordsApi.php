<?php
/**
 * SearchTermStopWordsApi
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
<<<<<<< HEAD
 * OpenAPI spec version: 1.2.14
=======
 * OpenAPI spec version: 1.0.0
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
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
 * SearchTermStopWordsApi Class Doc Comment
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchTermStopWordsApi
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
     * @return SearchTermStopWordsApi
     */
    public function setApiClient(\eSagu\EBay\RePricing\V1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
<<<<<<< HEAD
     * Operation get20
=======
     * Operation get
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Get the search term stop words.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO
     */
<<<<<<< HEAD
    public function get20()
    {
        list($response) = $this->get20WithHttpInfo();
=======
    public function get()
    {
        list($response) = $this->getWithHttpInfo();
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        return $response;
    }

    /**
<<<<<<< HEAD
     * Operation get20WithHttpInfo
=======
     * Operation getWithHttpInfo
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Get the search term stop words.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO, HTTP status code, HTTP response headers (array of strings)
     */
<<<<<<< HEAD
    public function get20WithHttpInfo()
=======
    public function getWithHttpInfo()
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    {
        // parse inputs
        $resourcePath = "/search-term-stop-words";
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
                '\eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO',
                '/search-term-stop-words'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
<<<<<<< HEAD
     * Operation post12
=======
     * Operation post
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Creates new search term stop words if empty.
     *
     * @param \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
<<<<<<< HEAD
    public function post12($body = null)
    {
        list($response) = $this->post12WithHttpInfo($body);
=======
    public function post($body = null)
    {
        list($response) = $this->postWithHttpInfo($body);
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        return $response;
    }

    /**
<<<<<<< HEAD
     * Operation post12WithHttpInfo
=======
     * Operation postWithHttpInfo
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Creates new search term stop words if empty.
     *
     * @param \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
<<<<<<< HEAD
    public function post12WithHttpInfo($body = null)
=======
    public function postWithHttpInfo($body = null)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    {
        // parse inputs
        $resourcePath = "/search-term-stop-words";
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
                '/search-term-stop-words'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
<<<<<<< HEAD
     * Operation put11
=======
     * Operation put
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Edits search term stop words.
     *
     * @param \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
<<<<<<< HEAD
    public function put11($body = null)
    {
        list($response) = $this->put11WithHttpInfo($body);
=======
    public function put($body = null)
    {
        list($response) = $this->putWithHttpInfo($body);
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        return $response;
    }

    /**
<<<<<<< HEAD
     * Operation put11WithHttpInfo
=======
     * Operation putWithHttpInfo
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Edits search term stop words.
     *
     * @param \eSagu\EBay\RePricing\V1\Model\SearchTermStopWordsDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
<<<<<<< HEAD
    public function put11WithHttpInfo($body = null)
=======
    public function putWithHttpInfo($body = null)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    {
        // parse inputs
        $resourcePath = "/search-term-stop-words";
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
                '/search-term-stop-words'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
