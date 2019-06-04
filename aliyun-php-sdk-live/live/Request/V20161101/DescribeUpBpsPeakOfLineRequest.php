<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeUpBpsPeakOfLine
 *
 * @method string getLine()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getDomainSwitch()
 */
class DescribeUpBpsPeakOfLineRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'DescribeUpBpsPeakOfLine',
            'live'
        );
    }

    /**
     * @param string $line
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->requestParameters['Line'] = $line;
        $this->queryParameters['Line'] = $line;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

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
     * @param string $domainSwitch
     *
     * @return $this
     */
    public function setDomainSwitch($domainSwitch)
    {
        $this->requestParameters['DomainSwitch'] = $domainSwitch;
        $this->queryParameters['DomainSwitch'] = $domainSwitch;

        return $this;
    }
}
