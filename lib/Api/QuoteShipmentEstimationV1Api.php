<?php
/**
 * QuoteShipmentEstimationV1Api
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
 * QuoteShipmentEstimationV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteShipmentEstimationV1Api
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
     * @return QuoteShipmentEstimationV1Api
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation quoteShipmentEstimationV1EstimateByExtendedAddressPost
     *
     * 
     *
     * @param string $cart_id  (required)
     * @param \Swagger\Client\Model\Body54 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\QuoteDataShippingMethodInterface[]
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost($cart_id, $body = null)
    {
        list($response) = $this->quoteShipmentEstimationV1EstimateByExtendedAddressPostWithHttpInfo($cart_id, $body);
        return $response;
    }

    /**
     * Operation quoteShipmentEstimationV1EstimateByExtendedAddressPostWithHttpInfo
     *
     * 
     *
     * @param string $cart_id  (required)
     * @param \Swagger\Client\Model\Body54 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\QuoteDataShippingMethodInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPostWithHttpInfo($cart_id, $body = null)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling quoteShipmentEstimationV1EstimateByExtendedAddressPost');
        }
        // parse inputs
        $resourcePath = "/V1/carts/{cartId}/estimate-shipping-methods";
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
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\QuoteDataShippingMethodInterface[]',
                '/V1/carts/{cartId}/estimate-shipping-methods'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\QuoteDataShippingMethodInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\QuoteDataShippingMethodInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
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
     * Operation quoteShipmentEstimationV1EstimateByExtendedAddressPost_0
     *
     * 
     *
     * @param \Swagger\Client\Model\Body55 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\QuoteDataShippingMethodInterface[]
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost_0($body = null)
    {
        list($response) = $this->quoteShipmentEstimationV1EstimateByExtendedAddressPost_0WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation quoteShipmentEstimationV1EstimateByExtendedAddressPost_0WithHttpInfo
     *
     * 
     *
     * @param \Swagger\Client\Model\Body55 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\QuoteDataShippingMethodInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteShipmentEstimationV1EstimateByExtendedAddressPost_0WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/carts/mine/estimate-shipping-methods";
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
                '\Swagger\Client\Model\QuoteDataShippingMethodInterface[]',
                '/V1/carts/mine/estimate-shipping-methods'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\QuoteDataShippingMethodInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\QuoteDataShippingMethodInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
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