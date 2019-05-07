<?php

namespace rtc\Request\V20180111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRecordList
 *
 * @method string getSortType()
 * @method string getStartTime()
 * @method string getServiceArea()
 * @method string getPageSize()
 * @method string getId()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getIdType()
 * @method string getPageNo()
 * @method string getAppId()
 */
class DescribeRecordListRequest extends \RpcAcsRequest
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
            'rtc',
            '2018-01-11',
            'DescribeRecordList',
            'rtc'
        );
    }

    /**
     * @param string $sortType
     *
     * @return $this
     */
    public function setSortType($sortType)
    {
        $this->requestParameters['SortType'] = $sortType;
        $this->queryParameters['SortType'] = $sortType;

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
     * @param string $serviceArea
     *
     * @return $this
     */
    public function setServiceArea($serviceArea)
    {
        $this->requestParameters['ServiceArea'] = $serviceArea;
        $this->queryParameters['ServiceArea'] = $serviceArea;

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
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

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
     * @param string $idType
     *
     * @return $this
     */
    public function setIdType($idType)
    {
        $this->requestParameters['IdType'] = $idType;
        $this->queryParameters['IdType'] = $idType;

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
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }
}
