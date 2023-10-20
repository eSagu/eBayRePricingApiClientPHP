<?php
/**
 * CSVRequestApi
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
 * CSVRequestApi Class Doc Comment
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CSVRequestApi
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
     * @return CSVRequestApi
     */
    public function setApiClient(\eSagu\EBay\RePricing\V1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
<<<<<<< HEAD
     * Operation get9
=======
     * Operation callList
     *
     * Get a list of all CSV Requests for given user service.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[]
     */
    public function callList()
    {
        list($response) = $this->callListWithHttpInfo();
        return $response;
    }

    /**
     * Operation callListWithHttpInfo
     *
     * Get a list of all CSV Requests for given user service.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[], HTTP status code, HTTP response headers (array of strings)
     */
    public function callListWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/csv-request";
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
                '\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[]',
                '/csv-request'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation get
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Get a single CSV Request.
     *
     * @param int $csv_request_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO
     */
<<<<<<< HEAD
    public function get9($csv_request_id)
    {
        list($response) = $this->get9WithHttpInfo($csv_request_id);
=======
    public function get($csv_request_id)
    {
        list($response) = $this->getWithHttpInfo($csv_request_id);
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        return $response;
    }

    /**
<<<<<<< HEAD
     * Operation get9WithHttpInfo
=======
     * Operation getWithHttpInfo
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Get a single CSV Request.
     *
     * @param int $csv_request_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO, HTTP status code, HTTP response headers (array of strings)
     */
<<<<<<< HEAD
    public function get9WithHttpInfo($csv_request_id)
    {
        // verify the required parameter 'csv_request_id' is set
        if ($csv_request_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $csv_request_id when calling get9');
=======
    public function getWithHttpInfo($csv_request_id)
    {
        // verify the required parameter 'csv_request_id' is set
        if ($csv_request_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $csv_request_id when calling get');
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        }
        // parse inputs
        $resourcePath = "/csv-request/{csvRequestId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($csv_request_id !== null) {
            $resourcePath = str_replace(
                "{" . "csvRequestId" . "}",
                $this->apiClient->getSerializer()->toPathValue($csv_request_id),
                $resourcePath
            );
        }
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
                '\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO',
                '/csv-request/{csvRequestId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
<<<<<<< HEAD
     * Operation list4
     *
     * Get a list of all CSV Requests for given user service.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[]
     */
    public function list4()
    {
        list($response) = $this->list4WithHttpInfo();
        return $response;
    }

    /**
     * Operation list4WithHttpInfo
     *
     * Get a list of all CSV Requests for given user service.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[], HTTP status code, HTTP response headers (array of strings)
     */
    public function list4WithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/csv-request";
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
                '\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[]',
                '/csv-request'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation post6
=======
     * Operation post
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Creates a new CSV Request.
     *
     * @param \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
<<<<<<< HEAD
    public function post6($body = null)
    {
        list($response) = $this->post6WithHttpInfo($body);
=======
    public function post($body = null)
    {
        list($response) = $this->postWithHttpInfo($body);
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
        return $response;
    }

    /**
<<<<<<< HEAD
     * Operation post6WithHttpInfo
=======
     * Operation postWithHttpInfo
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
     *
     * Creates a new CSV Request.
     *
     * @param \eSagu\EBay\RePricing\V1\Model\RepricingCSVRequestDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
<<<<<<< HEAD
    public function post6WithHttpInfo($body = null)
=======
    public function postWithHttpInfo($body = null)
>>>>>>> a0d1cbe91759f3ab528e23040bc9b2ac6045ad7b
    {
        // parse inputs
        $resourcePath = "/csv-request";
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
                '/csv-request'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
