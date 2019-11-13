<?php

namespace Alidns\Request\V20150109;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateGtmMonitor
 *
 * @method string getMonitorExtendInfo()
 * @method string getMonitorConfigId()
 * @method string getTimeout()
 * @method string getUserClientIp()
 * @method string getEvaluationCount()
 * @method string getProtocolType()
 * @method string getInterval()
 * @method string getLang()
 * @method array getIspCityNodes()
 */
class UpdateGtmMonitorRequest extends \RpcAcsRequest
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
            'Alidns',
            '2015-01-09',
            'UpdateGtmMonitor',
            'alidns'
        );
    }

    /**
     * @param string $monitorExtendInfo
     *
     * @return $this
     */
    public function setMonitorExtendInfo($monitorExtendInfo)
    {
        $this->requestParameters['MonitorExtendInfo'] = $monitorExtendInfo;
        $this->queryParameters['MonitorExtendInfo'] = $monitorExtendInfo;

        return $this;
    }

    /**
     * @param string $monitorConfigId
     *
     * @return $this
     */
    public function setMonitorConfigId($monitorConfigId)
    {
        $this->requestParameters['MonitorConfigId'] = $monitorConfigId;
        $this->queryParameters['MonitorConfigId'] = $monitorConfigId;

        return $this;
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->requestParameters['Timeout'] = $timeout;
        $this->queryParameters['Timeout'] = $timeout;

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
     * @param string $evaluationCount
     *
     * @return $this
     */
    public function setEvaluationCount($evaluationCount)
    {
        $this->requestParameters['EvaluationCount'] = $evaluationCount;
        $this->queryParameters['EvaluationCount'] = $evaluationCount;

        return $this;
    }

    /**
     * @param string $protocolType
     *
     * @return $this
     */
    public function setProtocolType($protocolType)
    {
        $this->requestParameters['ProtocolType'] = $protocolType;
        $this->queryParameters['ProtocolType'] = $protocolType;

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

    /**
     * @param array $ispCityNode
     *
     * @return $this
     */
	public function setIspCityNodes(array $ispCityNode)
	{
	    $this->requestParameters['IspCityNodes'] = $ispCityNode;
		foreach ($ispCityNode as $depth1 => $depth1Value) {
			$this->queryParameters['IspCityNode.' . ($depth1 + 1) . '.CityCode'] = $depth1Value['CityCode'];
			$this->queryParameters['IspCityNode.' . ($depth1 + 1) . '.IspCode'] = $depth1Value['IspCode'];
		}

		return $this;
    }
}
