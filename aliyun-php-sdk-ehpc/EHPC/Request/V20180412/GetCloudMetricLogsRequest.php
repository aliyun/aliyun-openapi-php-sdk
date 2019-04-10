<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetCloudMetricLogs
 *
 * @method string getAggregationType()
 * @method string getFilter()
 * @method string getMetricCategories()
 * @method string getMetricScope()
 * @method string getFrom()
 * @method string getClusterId()
 * @method string getTo()
 * @method string getAggregationInterval()
 * @method string getReverse()
 */
class GetCloudMetricLogsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'GetCloudMetricLogs',
            'ehs'
        );
    }

    /**
     * @param string $aggregationType
     *
     * @return $this
     */
    public function setAggregationType($aggregationType)
    {
        $this->requestParameters['AggregationType'] = $aggregationType;
        $this->queryParameters['AggregationType'] = $aggregationType;

        return $this;
    }

    /**
     * @param string $filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->requestParameters['Filter'] = $filter;
        $this->queryParameters['Filter'] = $filter;

        return $this;
    }

    /**
     * @param string $metricCategories
     *
     * @return $this
     */
    public function setMetricCategories($metricCategories)
    {
        $this->requestParameters['MetricCategories'] = $metricCategories;
        $this->queryParameters['MetricCategories'] = $metricCategories;

        return $this;
    }

    /**
     * @param string $metricScope
     *
     * @return $this
     */
    public function setMetricScope($metricScope)
    {
        $this->requestParameters['MetricScope'] = $metricScope;
        $this->queryParameters['MetricScope'] = $metricScope;

        return $this;
    }

    /**
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->requestParameters['From'] = $from;
        $this->queryParameters['From'] = $from;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->requestParameters['To'] = $to;
        $this->queryParameters['To'] = $to;

        return $this;
    }

    /**
     * @param string $aggregationInterval
     *
     * @return $this
     */
    public function setAggregationInterval($aggregationInterval)
    {
        $this->requestParameters['AggregationInterval'] = $aggregationInterval;
        $this->queryParameters['AggregationInterval'] = $aggregationInterval;

        return $this;
    }

    /**
     * @param string $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->requestParameters['Reverse'] = $reverse;
        $this->queryParameters['Reverse'] = $reverse;

        return $this;
    }
}
