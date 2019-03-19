<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetCrowdList
 *
 * @method string getGsid()
 * @method string getClassType()
 * @method string getGsType()
 * @method string getEndTime()
 * @method string getPage()
 * @method string getStartTime()
 * @method string getPer()
 * @method string getBid()
 */
class GetCrowdListRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'GetCrowdList',
            'cloudwf'
        );
    }

    /**
     * @param string $gsid
     *
     * @return $this
     */
    public function setGsid($gsid)
    {
        $this->requestParameters['Gsid'] = $gsid;
        $this->queryParameters['Gsid'] = $gsid;

        return $this;
    }

    /**
     * @param string $classType
     *
     * @return $this
     */
    public function setClassType($classType)
    {
        $this->requestParameters['ClassType'] = $classType;
        $this->queryParameters['ClassType'] = $classType;

        return $this;
    }

    /**
     * @param string $gsType
     *
     * @return $this
     */
    public function setGsType($gsType)
    {
        $this->requestParameters['GsType'] = $gsType;
        $this->queryParameters['GsType'] = $gsType;

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
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->requestParameters['Page'] = $page;
        $this->queryParameters['Page'] = $page;

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
     * @param string $per
     *
     * @return $this
     */
    public function setPer($per)
    {
        $this->requestParameters['Per'] = $per;
        $this->queryParameters['Per'] = $per;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

        return $this;
    }
}
