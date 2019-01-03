<?php

namespace aegis\Request\V20161111;

/**
 * Request of ModifyStrategy
 *
 * @method string getRiskSubTypeName()
 * @method string getSourceIp()
 * @method string getCycleStartTime()
 * @method string getName()
 * @method string getCycleDays()
 * @method string getId()
 */
class ModifyStrategyRequest extends \RpcAcsRequest
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
            'ModifyStrategy',
            'vipaegis'
        );
    }

    /**
     * @param string $riskSubTypeName
     *
     * @return $this
     */
    public function setRiskSubTypeName($riskSubTypeName)
    {
        $this->requestParameters['RiskSubTypeName'] = $riskSubTypeName;
        $this->queryParameters['RiskSubTypeName'] = $riskSubTypeName;

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
     * @param string $cycleStartTime
     *
     * @return $this
     */
    public function setCycleStartTime($cycleStartTime)
    {
        $this->requestParameters['CycleStartTime'] = $cycleStartTime;
        $this->queryParameters['CycleStartTime'] = $cycleStartTime;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $cycleDays
     *
     * @return $this
     */
    public function setCycleDays($cycleDays)
    {
        $this->requestParameters['CycleDays'] = $cycleDays;
        $this->queryParameters['CycleDays'] = $cycleDays;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }
}
