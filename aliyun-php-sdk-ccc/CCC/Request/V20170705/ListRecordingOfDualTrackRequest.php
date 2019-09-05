<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListRecordingOfDualTrack
 *
 * @method string getAgentId()
 * @method string getStartTime()
 * @method string getStopTime()
 * @method string getPageNumber()
 * @method string getCallingNumber()
 * @method string getInstanceId()
 * @method string getCalledNumber()
 * @method string getPageSize()
 * @method string getConnectId()
 */
class ListRecordingOfDualTrackRequest extends \RpcAcsRequest
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
            'ListRecordingOfDualTrack'
        );
    }

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function setAgentId($agentId)
    {
        $this->requestParameters['AgentId'] = $agentId;
        $this->queryParameters['AgentId'] = $agentId;

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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $callingNumber
     *
     * @return $this
     */
    public function setCallingNumber($callingNumber)
    {
        $this->requestParameters['CallingNumber'] = $callingNumber;
        $this->queryParameters['CallingNumber'] = $callingNumber;

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
     * @param string $calledNumber
     *
     * @return $this
     */
    public function setCalledNumber($calledNumber)
    {
        $this->requestParameters['CalledNumber'] = $calledNumber;
        $this->queryParameters['CalledNumber'] = $calledNumber;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $connectId
     *
     * @return $this
     */
    public function setConnectId($connectId)
    {
        $this->requestParameters['ConnectId'] = $connectId;
        $this->queryParameters['ConnectId'] = $connectId;

        return $this;
    }
}
