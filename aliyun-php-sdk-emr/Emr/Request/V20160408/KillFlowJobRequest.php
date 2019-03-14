<?php

namespace Emr\Request\V20160408;

/**
 * Request of KillFlowJob
 *
 * @method string getJobInstanceId()
 * @method string getProjectId()
 */
class KillFlowJobRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'KillFlowJob',
            'emr'
        );
    }

    /**
     * @param string $jobInstanceId
     *
     * @return $this
     */
    public function setJobInstanceId($jobInstanceId)
    {
        $this->requestParameters['JobInstanceId'] = $jobInstanceId;
        $this->queryParameters['JobInstanceId'] = $jobInstanceId;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }
}
