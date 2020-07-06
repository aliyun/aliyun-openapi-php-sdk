<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InflightTaskTimeout
 *
 * @method string getInstanceId()
 * @method string getInstanceOwnerId()
 * @method string getTaskId()
 */
class InflightTaskTimeoutRequest extends \RpcAcsRequest
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
            'InflightTaskTimeout',
            'CCC'
        );
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
