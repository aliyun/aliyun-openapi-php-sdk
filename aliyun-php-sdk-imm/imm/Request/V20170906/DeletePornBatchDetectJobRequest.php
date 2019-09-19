<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeletePornBatchDetectJob
 *
 * @method string getProject()
 * @method string getJobId()
 */
class DeletePornBatchDetectJobRequest extends \RpcAcsRequest
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
            'DeletePornBatchDetectJob',
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
}
