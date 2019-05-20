<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListNotaryOrders
 *
 * @method string getSortKeyType()
 * @method string getSortByType()
 * @method string getStartOrderDate()
 * @method string getPageSize()
 * @method string getBizId()
 * @method string getNotaryType()
 * @method string getEndOrderDate()
 * @method string getAliyunOrderId()
 * @method string getPageNum()
 * @method string getNotaryStatus()
 */
class ListNotaryOrdersRequest extends \RpcAcsRequest
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
            'ListNotaryOrders',
            'trademark'
        );
    }

    /**
     * @param string $sortKeyType
     *
     * @return $this
     */
    public function setSortKeyType($sortKeyType)
    {
        $this->requestParameters['SortKeyType'] = $sortKeyType;
        $this->queryParameters['SortKeyType'] = $sortKeyType;

        return $this;
    }

    /**
     * @param string $sortByType
     *
     * @return $this
     */
    public function setSortByType($sortByType)
    {
        $this->requestParameters['SortByType'] = $sortByType;
        $this->queryParameters['SortByType'] = $sortByType;

        return $this;
    }

    /**
     * @param string $startOrderDate
     *
     * @return $this
     */
    public function setStartOrderDate($startOrderDate)
    {
        $this->requestParameters['StartOrderDate'] = $startOrderDate;
        $this->queryParameters['StartOrderDate'] = $startOrderDate;

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
     * @param string $notaryType
     *
     * @return $this
     */
    public function setNotaryType($notaryType)
    {
        $this->requestParameters['NotaryType'] = $notaryType;
        $this->queryParameters['NotaryType'] = $notaryType;

        return $this;
    }

    /**
     * @param string $endOrderDate
     *
     * @return $this
     */
    public function setEndOrderDate($endOrderDate)
    {
        $this->requestParameters['EndOrderDate'] = $endOrderDate;
        $this->queryParameters['EndOrderDate'] = $endOrderDate;

        return $this;
    }

    /**
     * @param string $aliyunOrderId
     *
     * @return $this
     */
    public function setAliyunOrderId($aliyunOrderId)
    {
        $this->requestParameters['AliyunOrderId'] = $aliyunOrderId;
        $this->queryParameters['AliyunOrderId'] = $aliyunOrderId;

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
     * @param string $notaryStatus
     *
     * @return $this
     */
    public function setNotaryStatus($notaryStatus)
    {
        $this->requestParameters['NotaryStatus'] = $notaryStatus;
        $this->queryParameters['NotaryStatus'] = $notaryStatus;

        return $this;
    }
}
