<?php

namespace cusanalytic_sc_online\Request\V20190524;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListVisitors
 *
 * @method string getGender()
 * @method string getUkId()
 * @method string getLocationIds()
 * @method string getStartTime()
 * @method string getPageSize()
 * @method string getEnterCount()
 * @method string getPageIndex()
 * @method string getAgeStart()
 * @method string getAgeEnd()
 * @method string getPkId()
 * @method string getEndTime()
 * @method string getStoreIds()
 */
class ListVisitorsRequest extends \RpcAcsRequest
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
            'cusanalytic_sc_online',
            '2019-05-24',
            'ListVisitors'
        );
    }

    /**
     * @param string $gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->requestParameters['Gender'] = $gender;
        $this->queryParameters['Gender'] = $gender;

        return $this;
    }

    /**
     * @param string $ukId
     *
     * @return $this
     */
    public function setUkId($ukId)
    {
        $this->requestParameters['UkId'] = $ukId;
        $this->queryParameters['UkId'] = $ukId;

        return $this;
    }

    /**
     * @param string $locationIds
     *
     * @return $this
     */
    public function setLocationIds($locationIds)
    {
        $this->requestParameters['LocationIds'] = $locationIds;
        $this->queryParameters['LocationIds'] = $locationIds;

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
     * @param string $enterCount
     *
     * @return $this
     */
    public function setEnterCount($enterCount)
    {
        $this->requestParameters['EnterCount'] = $enterCount;
        $this->queryParameters['EnterCount'] = $enterCount;

        return $this;
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        $this->requestParameters['PageIndex'] = $pageIndex;
        $this->queryParameters['PageIndex'] = $pageIndex;

        return $this;
    }

    /**
     * @param string $ageStart
     *
     * @return $this
     */
    public function setAgeStart($ageStart)
    {
        $this->requestParameters['AgeStart'] = $ageStart;
        $this->queryParameters['AgeStart'] = $ageStart;

        return $this;
    }

    /**
     * @param string $ageEnd
     *
     * @return $this
     */
    public function setAgeEnd($ageEnd)
    {
        $this->requestParameters['AgeEnd'] = $ageEnd;
        $this->queryParameters['AgeEnd'] = $ageEnd;

        return $this;
    }

    /**
     * @param string $pkId
     *
     * @return $this
     */
    public function setPkId($pkId)
    {
        $this->requestParameters['PkId'] = $pkId;
        $this->queryParameters['PkId'] = $pkId;

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
     * @param string $storeIds
     *
     * @return $this
     */
    public function setStoreIds($storeIds)
    {
        $this->requestParameters['StoreIds'] = $storeIds;
        $this->queryParameters['StoreIds'] = $storeIds;

        return $this;
    }
}
