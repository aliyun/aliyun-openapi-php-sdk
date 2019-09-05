<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SubmitCabRecording
 *
 * @method string getMergedRecording()
 * @method string getResourceRecording()
 * @method string getInstanceId()
 * @method string getInstanceOwnerId()
 * @method string getTaskId()
 */
class SubmitCabRecordingRequest extends \RpcAcsRequest
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
            'SubmitCabRecording'
        );
    }

    /**
     * @param string $mergedRecording
     *
     * @return $this
     */
    public function setMergedRecording($mergedRecording)
    {
        $this->requestParameters['MergedRecording'] = $mergedRecording;
        $this->queryParameters['MergedRecording'] = $mergedRecording;

        return $this;
    }

    /**
     * @param string $resourceRecording
     *
     * @return $this
     */
    public function setResourceRecording($resourceRecording)
    {
        $this->requestParameters['ResourceRecording'] = $resourceRecording;
        $this->queryParameters['ResourceRecording'] = $resourceRecording;

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
}
