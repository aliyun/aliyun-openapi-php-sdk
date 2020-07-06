<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TaskPreparing
 *
 * @method string getJobId()
 * @method string getInstanceId()
 * @method string getInstanceOwnerId()
 */
class TaskPreparingRequest extends \RpcAcsRequest
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
            'TaskPreparing',
            'CCC'
        );
    }

    /**
     * @param string $jobId
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->requestParameters['JobId'] = $jobId;
        $this->queryParameters['JobId'] = $jobId;

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
}
