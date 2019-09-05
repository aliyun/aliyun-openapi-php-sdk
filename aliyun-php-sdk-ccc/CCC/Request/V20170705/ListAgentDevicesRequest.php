<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListAgentDevices
 *
 * @method string getRamIds()
 * @method string getStartTime()
 * @method string getStopTime()
 * @method string getInstanceId()
 */
class ListAgentDevicesRequest extends \RpcAcsRequest
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
            'ListAgentDevices'
        );
    }

    /**
     * @param string $ramIds
     *
     * @return $this
     */
    public function setRamIds($ramIds)
    {
        $this->requestParameters['RamIds'] = $ramIds;
        $this->queryParameters['RamIds'] = $ramIds;

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
}
