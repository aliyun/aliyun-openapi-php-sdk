<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of Dialogue
 *
 * @method string getCallId()
 * @method string getActionParams()
 * @method string getCallingNumber()
 * @method string getInstanceId()
 * @method string getCalledNumber()
 * @method string getInstanceOwnerId()
 * @method string getActionKey()
 * @method string getCallType()
 * @method string getScenarioId()
 * @method string getTaskId()
 * @method string getUtterance()
 */
class DialogueRequest extends \RpcAcsRequest
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
            'Dialogue'
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
     * @param string $actionParams
     *
     * @return $this
     */
    public function setActionParams($actionParams)
    {
        $this->requestParameters['ActionParams'] = $actionParams;
        $this->queryParameters['ActionParams'] = $actionParams;

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
     * @param string $instanceOwnerId
     *
     * @return $this
     */
    public function setInstanceOwnerId($instanceOwnerId)
    {
        $this->requestParameters['InstanceOwnerId'] = $instanceOwnerId;
        $this->queryParameters['InstanceOwnerId'] = $instanceOwnerId;

        return $this;
    }

    /**
     * @param string $actionKey
     *
     * @return $this
     */
    public function setActionKey($actionKey)
    {
        $this->requestParameters['ActionKey'] = $actionKey;
        $this->queryParameters['ActionKey'] = $actionKey;

        return $this;
    }

    /**
     * @param string $callType
     *
     * @return $this
     */
    public function setCallType($callType)
    {
        $this->requestParameters['CallType'] = $callType;
        $this->queryParameters['CallType'] = $callType;

        return $this;
    }

    /**
     * @param string $scenarioId
     *
     * @return $this
     */
    public function setScenarioId($scenarioId)
    {
        $this->requestParameters['ScenarioId'] = $scenarioId;
        $this->queryParameters['ScenarioId'] = $scenarioId;

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
     * @param string $utterance
     *
     * @return $this
     */
    public function setUtterance($utterance)
    {
        $this->requestParameters['Utterance'] = $utterance;
        $this->queryParameters['Utterance'] = $utterance;

        return $this;
    }
}
