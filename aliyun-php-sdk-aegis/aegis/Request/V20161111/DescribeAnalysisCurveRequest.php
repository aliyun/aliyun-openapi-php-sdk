<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeAnalysisCurve
 *
 * @method string getSourceIp()
 * @method string getStartTimeStamp()
 * @method string getEndTimeStamp()
 */
class DescribeAnalysisCurveRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'DescribeAnalysisCurve',
            'vipaegis'
        );
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $startTimeStamp
     *
     * @return $this
     */
    public function setStartTimeStamp($startTimeStamp)
    {
        $this->requestParameters['StartTimeStamp'] = $startTimeStamp;
        $this->queryParameters['StartTimeStamp'] = $startTimeStamp;

        return $this;
    }

    /**
     * @param string $endTimeStamp
     *
     * @return $this
     */
    public function setEndTimeStamp($endTimeStamp)
    {
        $this->requestParameters['EndTimeStamp'] = $endTimeStamp;
        $this->queryParameters['EndTimeStamp'] = $endTimeStamp;

        return $this;
    }
}
