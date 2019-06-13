<?php

namespace Netana\Request\V20181018;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateNetworkDiagnostic
 *
 * @method string getResourceOwnerId()
 * @method string getRequestParams()
 * @method string getInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getUserRequestId()
 * @method string getType()
 * @method string getRequestApiName()
 * @method string getErrorCode()
 * @method string getProductType()
 * @method string getResponseParams()
 */
class CreateNetworkDiagnosticRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Netana',
            '2018-10-18',
            'CreateNetworkDiagnostic',
            'Netana'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $requestParams
     *
     * @return $this
     */
    public function setRequestParams($requestParams)
    {
        $this->requestParameters['RequestParams'] = $requestParams;
        $this->queryParameters['RequestParams'] = $requestParams;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $userRequestId
     *
     * @return $this
     */
    public function setUserRequestId($userRequestId)
    {
        $this->requestParameters['UserRequestId'] = $userRequestId;
        $this->queryParameters['UserRequestId'] = $userRequestId;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $requestApiName
     *
     * @return $this
     */
    public function setRequestApiName($requestApiName)
    {
        $this->requestParameters['RequestApiName'] = $requestApiName;
        $this->queryParameters['RequestApiName'] = $requestApiName;

        return $this;
    }

    /**
     * @param string $errorCode
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->requestParameters['ErrorCode'] = $errorCode;
        $this->queryParameters['ErrorCode'] = $errorCode;

        return $this;
    }

    /**
     * @param string $productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->requestParameters['ProductType'] = $productType;
        $this->queryParameters['ProductType'] = $productType;

        return $this;
    }

    /**
     * @param string $responseParams
     *
     * @return $this
     */
    public function setResponseParams($responseParams)
    {
        $this->requestParameters['ResponseParams'] = $responseParams;
        $this->queryParameters['ResponseParams'] = $responseParams;

        return $this;
    }
}
