<?php

namespace Emr\Request\V20160408;

/**
 * Request of ResumeFlow
 *
 * @method string getFlowInstanceId()
 * @method string getProjectId()
 */
class ResumeFlowRequest extends \RpcAcsRequest
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
            'ResumeFlow',
            'emr'
        );
    }

    /**
     * @param string $flowInstanceId
     *
     * @return $this
     */
    public function setFlowInstanceId($flowInstanceId)
    {
        $this->requestParameters['FlowInstanceId'] = $flowInstanceId;
        $this->queryParameters['FlowInstanceId'] = $flowInstanceId;

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
