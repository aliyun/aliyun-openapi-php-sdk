<?php

namespace Emr\Request\V20160408;

/**
 * Request of RerunFlow
 *
 * @method string getFlowInstanceId()
 * @method string getProjectId()
 * @method string getReRunFail()
 */
class RerunFlowRequest extends \RpcAcsRequest
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
            'RerunFlow',
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

    /**
     * @param string $reRunFail
     *
     * @return $this
     */
    public function setReRunFail($reRunFail)
    {
        $this->requestParameters['ReRunFail'] = $reRunFail;
        $this->queryParameters['ReRunFail'] = $reRunFail;

        return $this;
    }
}
