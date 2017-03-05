<?php
/**
 * SalesRuleRuleRepositoryV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * SalesRuleRuleRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesRuleRuleRepositoryV1Api
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return SalesRuleRuleRepositoryV1Api
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation salesRuleRuleRepositoryV1DeleteByIdDelete
     *
     * 
     *
     * @param int $rule_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return bool
     */
    public function salesRuleRuleRepositoryV1DeleteByIdDelete($rule_id)
    {
        list($response) = $this->salesRuleRuleRepositoryV1DeleteByIdDeleteWithHttpInfo($rule_id);
        return $response;
    }

    /**
     * Operation salesRuleRuleRepositoryV1DeleteByIdDeleteWithHttpInfo
     *
     * 
     *
     * @param int $rule_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesRuleRuleRepositoryV1DeleteByIdDeleteWithHttpInfo($rule_id)
    {
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_id when calling salesRuleRuleRepositoryV1DeleteByIdDelete');
        }
        // parse inputs
        $resourcePath = "/V1/salesRules/{ruleId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($rule_id !== null) {
            $resourcePath = str_replace(
                "{" . "ruleId" . "}",
                $this->apiClient->getSerializer()->toPathValue($rule_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/salesRules/{ruleId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesRuleRuleRepositoryV1GetByIdGet
     *
     * 
     *
     * @param int $rule_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SalesRuleDataRuleInterface
     */
    public function salesRuleRuleRepositoryV1GetByIdGet($rule_id)
    {
        list($response) = $this->salesRuleRuleRepositoryV1GetByIdGetWithHttpInfo($rule_id);
        return $response;
    }

    /**
     * Operation salesRuleRuleRepositoryV1GetByIdGetWithHttpInfo
     *
     * 
     *
     * @param int $rule_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SalesRuleDataRuleInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesRuleRuleRepositoryV1GetByIdGetWithHttpInfo($rule_id)
    {
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_id when calling salesRuleRuleRepositoryV1GetByIdGet');
        }
        // parse inputs
        $resourcePath = "/V1/salesRules/{ruleId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($rule_id !== null) {
            $resourcePath = str_replace(
                "{" . "ruleId" . "}",
                $this->apiClient->getSerializer()->toPathValue($rule_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\SalesRuleDataRuleInterface',
                '/V1/salesRules/{ruleId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SalesRuleDataRuleInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SalesRuleDataRuleInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesRuleRuleRepositoryV1GetListGet
     *
     * 
     *
     * @param string $search_criteria_filter_groups_filters_field Field (optional)
     * @param string $search_criteria_filter_groups_filters_value Value (optional)
     * @param string $search_criteria_filter_groups_filters_condition_type Condition type (optional)
     * @param string $search_criteria_sort_orders_field Sorting field. (optional)
     * @param string $search_criteria_sort_orders_direction Sorting direction. (optional)
     * @param int $search_criteria_page_size Page size. (optional)
     * @param int $search_criteria_current_page Current page. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SalesRuleDataRuleSearchResultInterface
     */
    public function salesRuleRuleRepositoryV1GetListGet($search_criteria_filter_groups_filters_field = null, $search_criteria_filter_groups_filters_value = null, $search_criteria_filter_groups_filters_condition_type = null, $search_criteria_sort_orders_field = null, $search_criteria_sort_orders_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        list($response) = $this->salesRuleRuleRepositoryV1GetListGetWithHttpInfo($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
        return $response;
    }

    /**
     * Operation salesRuleRuleRepositoryV1GetListGetWithHttpInfo
     *
     * 
     *
     * @param string $search_criteria_filter_groups_filters_field Field (optional)
     * @param string $search_criteria_filter_groups_filters_value Value (optional)
     * @param string $search_criteria_filter_groups_filters_condition_type Condition type (optional)
     * @param string $search_criteria_sort_orders_field Sorting field. (optional)
     * @param string $search_criteria_sort_orders_direction Sorting direction. (optional)
     * @param int $search_criteria_page_size Page size. (optional)
     * @param int $search_criteria_current_page Current page. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SalesRuleDataRuleSearchResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesRuleRuleRepositoryV1GetListGetWithHttpInfo($search_criteria_filter_groups_filters_field = null, $search_criteria_filter_groups_filters_value = null, $search_criteria_filter_groups_filters_condition_type = null, $search_criteria_sort_orders_field = null, $search_criteria_sort_orders_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        // parse inputs
        $resourcePath = "/V1/salesRules/search";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($search_criteria_filter_groups_filters_field !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][field]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_filter_groups_filters_field);
        }
        // query params
        if ($search_criteria_filter_groups_filters_value !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][value]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_filter_groups_filters_value);
        }
        // query params
        if ($search_criteria_filter_groups_filters_condition_type !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][conditionType]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_filter_groups_filters_condition_type);
        }
        // query params
        if ($search_criteria_sort_orders_field !== null) {
            $queryParams['searchCriteria[sortOrders][][field]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_sort_orders_field);
        }
        // query params
        if ($search_criteria_sort_orders_direction !== null) {
            $queryParams['searchCriteria[sortOrders][][direction]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_sort_orders_direction);
        }
        // query params
        if ($search_criteria_page_size !== null) {
            $queryParams['searchCriteria[pageSize]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_page_size);
        }
        // query params
        if ($search_criteria_current_page !== null) {
            $queryParams['searchCriteria[currentPage]'] = $this->apiClient->getSerializer()->toQueryValue($search_criteria_current_page);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\SalesRuleDataRuleSearchResultInterface',
                '/V1/salesRules/search'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SalesRuleDataRuleSearchResultInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SalesRuleDataRuleSearchResultInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesRuleRuleRepositoryV1SavePost
     *
     * 
     *
     * @param \Swagger\Client\Model\Body88 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SalesRuleDataRuleInterface
     */
    public function salesRuleRuleRepositoryV1SavePost($body = null)
    {
        list($response) = $this->salesRuleRuleRepositoryV1SavePostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation salesRuleRuleRepositoryV1SavePostWithHttpInfo
     *
     * 
     *
     * @param \Swagger\Client\Model\Body88 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SalesRuleDataRuleInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesRuleRuleRepositoryV1SavePostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/salesRules";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\SalesRuleDataRuleInterface',
                '/V1/salesRules'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SalesRuleDataRuleInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SalesRuleDataRuleInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesRuleRuleRepositoryV1SavePut
     *
     * 
     *
     * @param string $rule_id  (required)
     * @param \Swagger\Client\Model\Body87 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SalesRuleDataRuleInterface
     */
    public function salesRuleRuleRepositoryV1SavePut($rule_id, $body = null)
    {
        list($response) = $this->salesRuleRuleRepositoryV1SavePutWithHttpInfo($rule_id, $body);
        return $response;
    }

    /**
     * Operation salesRuleRuleRepositoryV1SavePutWithHttpInfo
     *
     * 
     *
     * @param string $rule_id  (required)
     * @param \Swagger\Client\Model\Body87 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SalesRuleDataRuleInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesRuleRuleRepositoryV1SavePutWithHttpInfo($rule_id, $body = null)
    {
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_id when calling salesRuleRuleRepositoryV1SavePut');
        }
        // parse inputs
        $resourcePath = "/V1/salesRules/{ruleId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($rule_id !== null) {
            $resourcePath = str_replace(
                "{" . "ruleId" . "}",
                $this->apiClient->getSerializer()->toPathValue($rule_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\SalesRuleDataRuleInterface',
                '/V1/salesRules/{ruleId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SalesRuleDataRuleInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SalesRuleDataRuleInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}