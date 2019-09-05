<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListAgentEvents
 *
 * @method string getStartTime()
 * @method string getStopTime()
 * @method array getRamIds()
 * @method string getInstanceId()
 * @method array getEvents()
 */
class ListAgentEventsRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'ListAgentEvents'
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
     * @param string $stopTime
     *
     * @return $this
     */
    public function setStopTime($stopTime)
    {
        $this->requestParameters['StopTime'] = $stopTime;
        $this->queryParameters['StopTime'] = $stopTime;

        return $this;
    }

    /**
     * @param array $ramId
     *
     * @return $this
     */
	public function setRamIds(array $ramId)
	{
	    $this->requestParameters['RamIds'] = $ramId;
		foreach ($ramId as $i => $iValue) {
			$this->queryParameters['RamId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param array $event
     *
     * @return $this
     */
	public function setEvents(array $event)
	{
	    $this->requestParameters['Events'] = $event;
		foreach ($event as $i => $iValue) {
			$this->queryParameters['Event.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
