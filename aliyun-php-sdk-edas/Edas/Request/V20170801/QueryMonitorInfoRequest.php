<?php

namespace Edas\Request\V20170801;

/**
 * Request of QueryMonitorInfo
 *
 * @method string getMetric()
 * @method string getAggregator()
 * @method string getStart()
 * @method string getEnd()
 * @method string getInterval()
 * @method string getTags()
 */
class QueryMonitorInfoRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/monitor/queryMonitorInfo';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Edas',
            '2017-08-01',
            'QueryMonitorInfo'
        );
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
     * @param string $aggregator
     *
     * @return $this
     */
    public function setAggregator($aggregator)
    {
        $this->requestParameters['Aggregator'] = $aggregator;
        $this->queryParameters['Aggregator'] = $aggregator;

        return $this;
    }

    /**
     * @param string $start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->requestParameters['Start'] = $start;
        $this->queryParameters['Start'] = $start;

        return $this;
    }

    /**
     * @param string $end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->requestParameters['End'] = $end;
        $this->queryParameters['End'] = $end;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->requestParameters['Interval'] = $interval;
        $this->queryParameters['Interval'] = $interval;

        return $this;
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->requestParameters['Tags'] = $tags;
        $this->queryParameters['Tags'] = $tags;

        return $this;
    }
}
