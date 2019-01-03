<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeEventCountCurve
 *
 * @method string getTypes()
 * @method string getSourceIp()
 * @method string getVulEventLevels()
 * @method string getLastDays()
 * @method string getHealthEventLevels()
 * @method string getSuspiciousEventLevels()
 */
class DescribeEventCountCurveRequest extends \RpcAcsRequest
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
            'DescribeEventCountCurve',
            'vipaegis'
        );
    }

    /**
     * @param string $types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->requestParameters['Types'] = $types;
        $this->queryParameters['Types'] = $types;

        return $this;
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
     * @param string $vulEventLevels
     *
     * @return $this
     */
    public function setVulEventLevels($vulEventLevels)
    {
        $this->requestParameters['VulEventLevels'] = $vulEventLevels;
        $this->queryParameters['VulEventLevels'] = $vulEventLevels;

        return $this;
    }

    /**
     * @param string $lastDays
     *
     * @return $this
     */
    public function setLastDays($lastDays)
    {
        $this->requestParameters['LastDays'] = $lastDays;
        $this->queryParameters['LastDays'] = $lastDays;

        return $this;
    }

    /**
     * @param string $healthEventLevels
     *
     * @return $this
     */
    public function setHealthEventLevels($healthEventLevels)
    {
        $this->requestParameters['HealthEventLevels'] = $healthEventLevels;
        $this->queryParameters['HealthEventLevels'] = $healthEventLevels;

        return $this;
    }

    /**
     * @param string $suspiciousEventLevels
     *
     * @return $this
     */
    public function setSuspiciousEventLevels($suspiciousEventLevels)
    {
        $this->requestParameters['SuspiciousEventLevels'] = $suspiciousEventLevels;
        $this->queryParameters['SuspiciousEventLevels'] = $suspiciousEventLevels;

        return $this;
    }
}
