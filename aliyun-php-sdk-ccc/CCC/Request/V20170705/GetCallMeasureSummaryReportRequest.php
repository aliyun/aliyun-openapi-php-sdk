<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetCallMeasureSummaryReport
 *
 * @method string getIntervalType()
 * @method string getYear()
 * @method string getPageNumber()
 * @method string getMonth()
 * @method string getPageSize()
 * @method string getDay()
 */
class GetCallMeasureSummaryReportRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'GetCallMeasureSummaryReport'
        );
    }

    /**
     * @param string $intervalType
     *
     * @return $this
     */
    public function setIntervalType($intervalType)
    {
        $this->requestParameters['IntervalType'] = $intervalType;
        $this->queryParameters['IntervalType'] = $intervalType;

        return $this;
    }

    /**
     * @param string $year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->requestParameters['Year'] = $year;
        $this->queryParameters['Year'] = $year;

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
     * @param string $month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->requestParameters['Month'] = $month;
        $this->queryParameters['Month'] = $month;

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
     * @param string $day
     *
     * @return $this
     */
    public function setDay($day)
    {
        $this->requestParameters['Day'] = $day;
        $this->queryParameters['Day'] = $day;

        return $this;
    }
}
