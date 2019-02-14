<?php

namespace Cdn\Request\V20141111;

/**
 * Request of DescribeDomainFlowData
 *
 * @method string getDomainType()
 * @method string getFixTimeGap()
 * @method string getSecurityToken()
 * @method string getTimeMerge()
 * @method string getDomainName()
 * @method string getEndTime()
 * @method string getLocationNameEn()
 * @method string getInterval()
 * @method string getStartTime()
 * @method string getIspNameEn()
 * @method string getOwnerId()
 */
class DescribeDomainFlowDataRequest extends \RpcAcsRequest
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
            'Cdn',
            '2014-11-11',
            'DescribeDomainFlowData'
        );
    }

    /**
     * @param string $domainType
     *
     * @return $this
     */
    public function setDomainType($domainType)
    {
        $this->requestParameters['DomainType'] = $domainType;
        $this->queryParameters['DomainType'] = $domainType;

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
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

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
     * @param string $locationNameEn
     *
     * @return $this
     */
    public function setLocationNameEn($locationNameEn)
    {
        $this->requestParameters['LocationNameEn'] = $locationNameEn;
        $this->queryParameters['LocationNameEn'] = $locationNameEn;

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
     * @param string $ispNameEn
     *
     * @return $this
     */
    public function setIspNameEn($ispNameEn)
    {
        $this->requestParameters['IspNameEn'] = $ispNameEn;
        $this->queryParameters['IspNameEn'] = $ispNameEn;

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
}
