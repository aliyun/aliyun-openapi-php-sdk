<?php

namespace Netana\Request\V20181018;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeNetworkQuotaRequestResult
 *
 * @method string getResourceOwnerId()
 * @method string getProduct()
 * @method string getQuotaPublicityName()
 * @method string getQuotaRequestId()
 * @method string getResourceOwnerAccount()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getResourceType()
 */
class DescribeNetworkQuotaRequestResultRequest extends \RpcAcsRequest
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
            'DescribeNetworkQuotaRequestResult',
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
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->requestParameters['Product'] = $product;
        $this->queryParameters['Product'] = $product;

        return $this;
    }

    /**
     * @param string $quotaPublicityName
     *
     * @return $this
     */
    public function setQuotaPublicityName($quotaPublicityName)
    {
        $this->requestParameters['QuotaPublicityName'] = $quotaPublicityName;
        $this->queryParameters['QuotaPublicityName'] = $quotaPublicityName;

        return $this;
    }

    /**
     * @param string $quotaRequestId
     *
     * @return $this
     */
    public function setQuotaRequestId($quotaRequestId)
    {
        $this->requestParameters['QuotaRequestId'] = $quotaRequestId;
        $this->queryParameters['QuotaRequestId'] = $quotaRequestId;

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
     * @param string $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        $this->requestParameters['PageNo'] = $pageNo;
        $this->queryParameters['PageNo'] = $pageNo;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }
}
