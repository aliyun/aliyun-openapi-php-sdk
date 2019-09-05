<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PredictiveRecordFailure
 *
 * @method string getCallId()
 * @method string getActualTime()
 * @method string getCallingNumber()
 * @method string getInstanceId()
 * @method string getDispositionCode()
 * @method string getCalledNumber()
 * @method string getTaskId()
 * @method string getCabInstanceId()
 * @method string getCabInstanceOwnerId()
 */
class PredictiveRecordFailureRequest extends \RpcAcsRequest
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
            'PredictiveRecordFailure'
        );
    }

    /**
     * @param string $callId
     *
     * @return $this
     */
    public function setCallId($callId)
    {
        $this->requestParameters['CallId'] = $callId;
        $this->queryParameters['CallId'] = $callId;

        return $this;
    }

    /**
     * @param string $actualTime
     *
     * @return $this
     */
    public function setActualTime($actualTime)
    {
        $this->requestParameters['ActualTime'] = $actualTime;
        $this->queryParameters['ActualTime'] = $actualTime;

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
     * @param string $dispositionCode
     *
     * @return $this
     */
    public function setDispositionCode($dispositionCode)
    {
        $this->requestParameters['DispositionCode'] = $dispositionCode;
        $this->queryParameters['DispositionCode'] = $dispositionCode;

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
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->requestParameters['TaskId'] = $taskId;
        $this->queryParameters['TaskId'] = $taskId;

        return $this;
    }

    /**
     * @param string $cabInstanceId
     *
     * @return $this
     */
    public function setCabInstanceId($cabInstanceId)
    {
        $this->requestParameters['CabInstanceId'] = $cabInstanceId;
        $this->queryParameters['CabInstanceId'] = $cabInstanceId;

        return $this;
    }

    /**
     * @param string $cabInstanceOwnerId
     *
     * @return $this
     */
    public function setCabInstanceOwnerId($cabInstanceOwnerId)
    {
        $this->requestParameters['CabInstanceOwnerId'] = $cabInstanceOwnerId;
        $this->queryParameters['CabInstanceOwnerId'] = $cabInstanceOwnerId;

        return $this;
    }
}
