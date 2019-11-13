<?php

namespace BssOpenApi\Request\V20171214;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryOrders
 *
 * @method string getProductCode()
 * @method string getSubscriptionType()
 * @method string getPageNum()
 * @method string getOwnerId()
 * @method string getCreateTimeEnd()
 * @method string getProductType()
 * @method string getPageSize()
 * @method string getPaymentStatus()
 * @method string getCreateTimeStart()
 * @method string getOrderType()
 */
class QueryOrdersRequest extends \RpcAcsRequest
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
            'QueryOrders',
            'BssOpenApi'
        );
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
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function setSubscriptionType($subscriptionType)
    {
        $this->requestParameters['SubscriptionType'] = $subscriptionType;
        $this->queryParameters['SubscriptionType'] = $subscriptionType;

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
     * @param string $createTimeEnd
     *
     * @return $this
     */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->requestParameters['CreateTimeEnd'] = $createTimeEnd;
        $this->queryParameters['CreateTimeEnd'] = $createTimeEnd;

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
     * @param string $paymentStatus
     *
     * @return $this
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->requestParameters['PaymentStatus'] = $paymentStatus;
        $this->queryParameters['PaymentStatus'] = $paymentStatus;

        return $this;
    }

    /**
     * @param string $createTimeStart
     *
     * @return $this
     */
    public function setCreateTimeStart($createTimeStart)
    {
        $this->requestParameters['CreateTimeStart'] = $createTimeStart;
        $this->queryParameters['CreateTimeStart'] = $createTimeStart;

        return $this;
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        $this->requestParameters['OrderType'] = $orderType;
        $this->queryParameters['OrderType'] = $orderType;

        return $this;
    }
}
