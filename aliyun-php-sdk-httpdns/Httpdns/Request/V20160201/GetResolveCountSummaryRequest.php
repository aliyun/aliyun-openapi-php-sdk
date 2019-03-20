<?php

namespace Httpdns\Request\V20160201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetResolveCountSummary
 *
 * @method string getGranularity()
 * @method string getTimeSpan()
 */
class GetResolveCountSummaryRequest extends \RpcAcsRequest
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
            'Httpdns',
            '2016-02-01',
            'GetResolveCountSummary',
            'httpdns'
        );
    }

    /**
     * @param string $granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        $this->requestParameters['Granularity'] = $granularity;
        $this->queryParameters['Granularity'] = $granularity;

        return $this;
    }

    /**
     * @param string $timeSpan
     *
     * @return $this
     */
    public function setTimeSpan($timeSpan)
    {
        $this->requestParameters['TimeSpan'] = $timeSpan;
        $this->queryParameters['TimeSpan'] = $timeSpan;

        return $this;
    }
}
