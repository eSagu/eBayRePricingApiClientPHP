<?php
/**
 * FindingAPIFilterApi
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
 * OpenAPI spec version: 1.2.14
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
 * FindingAPIFilterApi Class Doc Comment
 *
 * @category Class
 * @package  eSagu\EBay\RePricing\V1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FindingAPIFilterApi
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
     * @return FindingAPIFilterApi
     */
    public function setApiClient(\eSagu\EBay\RePricing\V1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation delete3
     *
     * Deletes a FindingAPIFilter specified by it's id.
     *
     * @param int $finding_api_filter_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function delete3($finding_api_filter_id)
    {
        list($response) = $this->delete3WithHttpInfo($finding_api_filter_id);
        return $response;
    }

    /**
     * Operation delete3WithHttpInfo
     *
     * Deletes a FindingAPIFilter specified by it's id.
     *
     * @param int $finding_api_filter_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function delete3WithHttpInfo($finding_api_filter_id)
    {
        // verify the required parameter 'finding_api_filter_id' is set
        if ($finding_api_filter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $finding_api_filter_id when calling delete3');
        }
        // parse inputs
        $resourcePath = "/finding-api-filter/{findingAPIFilterId}";
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
        if ($finding_api_filter_id !== null) {
            $resourcePath = str_replace(
                "{" . "findingAPIFilterId" . "}",
                $this->apiClient->getSerializer()->toPathValue($finding_api_filter_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/finding-api-filter/{findingAPIFilterId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation get11
     *
     * Get a single FindingAPIFilter specified by it's id.
     *
     * @param int $finding_api_filter_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO
     */
    public function get11($finding_api_filter_id)
    {
        list($response) = $this->get11WithHttpInfo($finding_api_filter_id);
        return $response;
    }

    /**
     * Operation get11WithHttpInfo
     *
     * Get a single FindingAPIFilter specified by it's id.
     *
     * @param int $finding_api_filter_id  (required)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function get11WithHttpInfo($finding_api_filter_id)
    {
        // verify the required parameter 'finding_api_filter_id' is set
        if ($finding_api_filter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $finding_api_filter_id when calling get11');
        }
        // parse inputs
        $resourcePath = "/finding-api-filter/{findingAPIFilterId}";
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
        if ($finding_api_filter_id !== null) {
            $resourcePath = str_replace(
                "{" . "findingAPIFilterId" . "}",
                $this->apiClient->getSerializer()->toPathValue($finding_api_filter_id),
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
                '\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO',
                '/finding-api-filter/{findingAPIFilterId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation list6
     *
     * Get a list of all FindingAPIFilters.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO[]
     */
    public function list6()
    {
        list($response) = $this->list6WithHttpInfo();
        return $response;
    }

    /**
     * Operation list6WithHttpInfo
     *
     * Get a list of all FindingAPIFilters.
     *
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO[], HTTP status code, HTTP response headers (array of strings)
     */
    public function list6WithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/finding-api-filter";
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
                '\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO[]',
                '/finding-api-filter'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation post8
     *
     * Creates a new FindingAPIFilter.
     *
     * @param \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function post8($body = null)
    {
        list($response) = $this->post8WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation post8WithHttpInfo
     *
     * Creates a new FindingAPIFilter.
     *
     * @param \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function post8WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/finding-api-filter";
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
                '/finding-api-filter'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation put5
     *
     * Updates a FindingAPIFilter specified by it's id.
     *
     * @param int $finding_api_filter_id  (required)
     * @param \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return void
     */
    public function put5($finding_api_filter_id, $body = null)
    {
        list($response) = $this->put5WithHttpInfo($finding_api_filter_id, $body);
        return $response;
    }

    /**
     * Operation put5WithHttpInfo
     *
     * Updates a FindingAPIFilter specified by it's id.
     *
     * @param int $finding_api_filter_id  (required)
     * @param \eSagu\EBay\RePricing\V1\Model\FindingAPIFilterDTO $body  (optional)
     * @throws \eSagu\EBay\RePricing\V1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function put5WithHttpInfo($finding_api_filter_id, $body = null)
    {
        // verify the required parameter 'finding_api_filter_id' is set
        if ($finding_api_filter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $finding_api_filter_id when calling put5');
        }
        // parse inputs
        $resourcePath = "/finding-api-filter/{findingAPIFilterId}";
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
        if ($finding_api_filter_id !== null) {
            $resourcePath = str_replace(
                "{" . "findingAPIFilterId" . "}",
                $this->apiClient->getSerializer()->toPathValue($finding_api_filter_id),
                $resourcePath
            );
        }
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
                '/finding-api-filter/{findingAPIFilterId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
