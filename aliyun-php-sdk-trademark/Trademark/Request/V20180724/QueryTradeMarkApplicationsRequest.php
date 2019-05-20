<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTradeMarkApplications
 *
 * @method string getTmName()
 * @method string getMaterialName()
 * @method string getOrderId()
 * @method string getSupplementStatus()
 * @method string getPageSize()
 * @method string getBizId()
 * @method string getTmNumber()
 * @method string getSortOrder()
 * @method string getPageNum()
 * @method string getType()
 * @method string getStatus()
 */
class QueryTradeMarkApplicationsRequest extends \RpcAcsRequest
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
            'QueryTradeMarkApplications',
            'trademark'
        );
    }

    /**
     * @param string $tmName
     *
     * @return $this
     */
    public function setTmName($tmName)
    {
        $this->requestParameters['TmName'] = $tmName;
        $this->queryParameters['TmName'] = $tmName;

        return $this;
    }

    /**
     * @param string $materialName
     *
     * @return $this
     */
    public function setMaterialName($materialName)
    {
        $this->requestParameters['MaterialName'] = $materialName;
        $this->queryParameters['MaterialName'] = $materialName;

        return $this;
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->requestParameters['OrderId'] = $orderId;
        $this->queryParameters['OrderId'] = $orderId;

        return $this;
    }

    /**
     * @param string $supplementStatus
     *
     * @return $this
     */
    public function setSupplementStatus($supplementStatus)
    {
        $this->requestParameters['SupplementStatus'] = $supplementStatus;
        $this->queryParameters['SupplementStatus'] = $supplementStatus;

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
     * @param string $tmNumber
     *
     * @return $this
     */
    public function setTmNumber($tmNumber)
    {
        $this->requestParameters['TmNumber'] = $tmNumber;
        $this->queryParameters['TmNumber'] = $tmNumber;

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
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
