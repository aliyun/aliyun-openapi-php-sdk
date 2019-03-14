<?php

namespace Emr\Request\V20160408;

/**
 * Request of SubmitFlow
 *
 * @method string getConf()
 * @method string getProjectId()
 * @method string getFlowId()
 */
class SubmitFlowRequest extends \RpcAcsRequest
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
            'SubmitFlow',
            'emr'
        );
    }

    /**
     * @param string $conf
     *
     * @return $this
     */
    public function setConf($conf)
    {
        $this->requestParameters['Conf'] = $conf;
        $this->queryParameters['Conf'] = $conf;

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
     * @param string $flowId
     *
     * @return $this
     */
    public function setFlowId($flowId)
    {
        $this->requestParameters['FlowId'] = $flowId;
        $this->queryParameters['FlowId'] = $flowId;

        return $this;
    }
}
