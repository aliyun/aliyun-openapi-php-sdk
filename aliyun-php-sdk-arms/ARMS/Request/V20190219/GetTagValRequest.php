<?php

namespace ARMS\Request\V20190219;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetTagVal
 *
 * @method string getEndTime()
 * @method string getServiceName()
 * @method string getStartTime()
 * @method string getTagKey()
 * @method string getSpanName()
 */
class GetTagValRequest extends \RpcAcsRequest
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
            '2019-02-19',
            'GetTagVal'
        );
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
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->requestParameters['ServiceName'] = $serviceName;
        $this->queryParameters['ServiceName'] = $serviceName;

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
     * @param string $tagKey
     *
     * @return $this
     */
    public function setTagKey($tagKey)
    {
        $this->requestParameters['TagKey'] = $tagKey;
        $this->queryParameters['TagKey'] = $tagKey;

        return $this;
    }

    /**
     * @param string $spanName
     *
     * @return $this
     */
    public function setSpanName($spanName)
    {
        $this->requestParameters['SpanName'] = $spanName;
        $this->queryParameters['SpanName'] = $spanName;

        return $this;
    }
}
