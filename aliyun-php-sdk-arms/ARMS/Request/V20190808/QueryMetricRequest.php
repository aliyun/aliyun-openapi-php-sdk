<?php

namespace ARMS\Request\V20190808;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryMetric
 *
 * @method array getMeasuress()
 * @method string getIntervalInSec()
 * @method string getMetric()
 * @method string getLimit()
 * @method string getEndTime()
 * @method string getOrderBy()
 * @method string getStartTime()
 * @method array getFilterss()
 * @method array getDimensionss()
 * @method string getOrder()
 */
class QueryMetricRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-08-08',
            'QueryMetric',
            'arms'
        );
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
    public function setMeasuress(array $measures)
    {
        $this->requestParameters['Measuress'] = $measures;
        foreach ($measures as $i => $iValue) {
            $this->queryParameters['Measures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $intervalInSec
     *
     * @return $this
     */
    public function setIntervalInSec($intervalInSec)
    {
        $this->requestParameters['IntervalInSec'] = $intervalInSec;
        $this->queryParameters['IntervalInSec'] = $intervalInSec;

        return $this;
    }

    /**
     * @param string $metric
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        $this->requestParameters['Metric'] = $metric;
        $this->queryParameters['Metric'] = $metric;

        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->requestParameters['Limit'] = $limit;
        $this->queryParameters['Limit'] = $limit;

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
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->requestParameters['OrderBy'] = $orderBy;
        $this->queryParameters['OrderBy'] = $orderBy;

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
     * @param array $filters
     *
     * @return $this
     */
    public function setFilterss(array $filters)
    {
        $this->requestParameters['Filterss'] = $filters;
        foreach ($filters as $depth1 => $depth1Value) {
            $this->queryParameters['Filters.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->queryParameters['Filters.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
    public function setDimensionss(array $dimensions)
    {
        $this->requestParameters['Dimensionss'] = $dimensions;
        foreach ($dimensions as $i => $iValue) {
            $this->queryParameters['Dimensions.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->requestParameters['Order'] = $order;
        $this->queryParameters['Order'] = $order;

        return $this;
    }
}
