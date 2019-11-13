<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryResourcePackageInstances
 *
 * @method string getExpiryTimeEnd()
 * @method string getProductCode()
 * @method string getOwnerId()
 * @method string getExpiryTimeStart()
 * @method string getPageNum()
 * @method string getPageSize()
 */
class QueryResourcePackageInstancesRequest extends \RpcAcsRequest
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
            'BssOpenApi',
            '2017-12-14',
            'QueryResourcePackageInstances',
            'BssOpenApi'
        );
    }

    /**
     * @param string $expiryTimeEnd
     *
     * @return $this
     */
    public function setExpiryTimeEnd($expiryTimeEnd)
    {
        $this->requestParameters['ExpiryTimeEnd'] = $expiryTimeEnd;
        $this->queryParameters['ExpiryTimeEnd'] = $expiryTimeEnd;

        return $this;
    }

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        $this->requestParameters['ProductCode'] = $productCode;
        $this->queryParameters['ProductCode'] = $productCode;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $expiryTimeStart
     *
     * @return $this
     */
    public function setExpiryTimeStart($expiryTimeStart)
    {
        $this->requestParameters['ExpiryTimeStart'] = $expiryTimeStart;
        $this->queryParameters['ExpiryTimeStart'] = $expiryTimeStart;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

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
}
