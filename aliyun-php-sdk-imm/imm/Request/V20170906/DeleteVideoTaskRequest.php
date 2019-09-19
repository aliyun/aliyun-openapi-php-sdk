<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteVideoTask
 *
 * @method string getProject()
 * @method string getTaskId()
 * @method string getTaskType()
 */
class DeleteVideoTaskRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'DeleteVideoTask',
            'imm'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

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
     * @param string $taskType
     *
     * @return $this
     */
    public function setTaskType($taskType)
    {
        $this->requestParameters['TaskType'] = $taskType;
        $this->queryParameters['TaskType'] = $taskType;

        return $this;
    }
}
