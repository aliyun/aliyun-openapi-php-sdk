<?php

namespace pvtz\Request\V20180101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRequestGraph
 *
 * @method string getStartTimestamp()
 * @method string getEndTimestamp()
 * @method string getVpcId()
 * @method string getUserClientIp()
 * @method string getZoneId()
 * @method string getLang()
 */
class DescribeRequestGraphRequest extends \RpcAcsRequest
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
            'pvtz',
            '2018-01-01',
            'DescribeRequestGraph',
            'pvtz'
        );
    }

    /**
     * @param string $startTimestamp
     *
     * @return $this
     */
    public function setStartTimestamp($startTimestamp)
    {
        $this->requestParameters['StartTimestamp'] = $startTimestamp;
        $this->queryParameters['StartTimestamp'] = $startTimestamp;

        return $this;
    }

    /**
     * @param string $endTimestamp
     *
     * @return $this
     */
    public function setEndTimestamp($endTimestamp)
    {
        $this->requestParameters['EndTimestamp'] = $endTimestamp;
        $this->queryParameters['EndTimestamp'] = $endTimestamp;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
