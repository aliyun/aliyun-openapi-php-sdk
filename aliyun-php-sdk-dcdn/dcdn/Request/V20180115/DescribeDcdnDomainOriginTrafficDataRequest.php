<?php

namespace dcdn\Request\V20180115;

/**
 * Request of DescribeDcdnDomainOriginTrafficData
 *
 * @method string getStartTime()
 * @method string getFixTimeGap()
 * @method string getTimeMerge()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getInterval()
 */
class DescribeDcdnDomainOriginTrafficDataRequest extends \RpcAcsRequest
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
            'dcdn',
            '2018-01-15',
            'DescribeDcdnDomainOriginTrafficData',
            'dcdn'
        );
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
     * @param string $fixTimeGap
     *
     * @return $this
     */
    public function setFixTimeGap($fixTimeGap)
    {
        $this->requestParameters['FixTimeGap'] = $fixTimeGap;
        $this->queryParameters['FixTimeGap'] = $fixTimeGap;

        return $this;
    }

    /**
     * @param string $timeMerge
     *
     * @return $this
     */
    public function setTimeMerge($timeMerge)
    {
        $this->requestParameters['TimeMerge'] = $timeMerge;
        $this->queryParameters['TimeMerge'] = $timeMerge;

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
}
