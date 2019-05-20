<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTradeProduceList
 *
 * @method string getBuyerStatus()
 * @method string getPageSize()
 * @method string getPreOrderId()
 * @method string getBizId()
 * @method string getSortOrder()
 * @method string getPageNum()
 * @method string getSortFiled()
 * @method string getRegisterNumber()
 */
class QueryTradeProduceListRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'QueryTradeProduceList',
            'trademark'
        );
    }

    /**
     * @param string $buyerStatus
     *
     * @return $this
     */
    public function setBuyerStatus($buyerStatus)
    {
        $this->requestParameters['BuyerStatus'] = $buyerStatus;
        $this->queryParameters['BuyerStatus'] = $buyerStatus;

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
     * @param string $preOrderId
     *
     * @return $this
     */
    public function setPreOrderId($preOrderId)
    {
        $this->requestParameters['PreOrderId'] = $preOrderId;
        $this->queryParameters['PreOrderId'] = $preOrderId;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $sortOrder
     *
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->requestParameters['SortOrder'] = $sortOrder;
        $this->queryParameters['SortOrder'] = $sortOrder;

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
     * @param string $sortFiled
     *
     * @return $this
     */
    public function setSortFiled($sortFiled)
    {
        $this->requestParameters['SortFiled'] = $sortFiled;
        $this->queryParameters['SortFiled'] = $sortFiled;

        return $this;
    }

    /**
     * @param string $registerNumber
     *
     * @return $this
     */
    public function setRegisterNumber($registerNumber)
    {
        $this->requestParameters['RegisterNumber'] = $registerNumber;
        $this->queryParameters['RegisterNumber'] = $registerNumber;

        return $this;
    }
}
