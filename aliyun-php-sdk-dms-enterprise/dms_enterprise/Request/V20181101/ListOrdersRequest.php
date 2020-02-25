<?php

namespace dms_enterprise\Request\V20181101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListOrders
 *
 * @method string getOrderStatus()
 * @method string getSearchContent()
 * @method string getSearchDateType()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getTid()
 * @method string getPageNumber()
 * @method string getPluginType()
 * @method string getPageSize()
 * @method string getOrderResultType()
 */
class ListOrdersRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'dms-enterprise',
            '2018-11-01',
            'ListOrders'
        );
    }

    /**
     * @param string $orderStatus
     *
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->requestParameters['OrderStatus'] = $orderStatus;
        $this->queryParameters['OrderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * @param string $searchContent
     *
     * @return $this
     */
    public function setSearchContent($searchContent)
    {
        $this->requestParameters['SearchContent'] = $searchContent;
        $this->queryParameters['SearchContent'] = $searchContent;

        return $this;
    }

    /**
     * @param string $searchDateType
     *
     * @return $this
     */
    public function setSearchDateType($searchDateType)
    {
        $this->requestParameters['SearchDateType'] = $searchDateType;
        $this->queryParameters['SearchDateType'] = $searchDateType;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        $this->requestParameters['Tid'] = $tid;
        $this->queryParameters['Tid'] = $tid;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $pluginType
     *
     * @return $this
     */
    public function setPluginType($pluginType)
    {
        $this->requestParameters['PluginType'] = $pluginType;
        $this->queryParameters['PluginType'] = $pluginType;

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
     * @param string $orderResultType
     *
     * @return $this
     */
    public function setOrderResultType($orderResultType)
    {
        $this->requestParameters['OrderResultType'] = $orderResultType;
        $this->queryParameters['OrderResultType'] = $orderResultType;

        return $this;
    }
}
