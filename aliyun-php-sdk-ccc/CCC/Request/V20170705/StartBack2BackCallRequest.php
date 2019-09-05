<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StartBack2BackCall
 *
 * @method string getCallCenterNumber()
 * @method string getCallee()
 * @method string getCaller()
 * @method string getInstanceId()
 * @method string getWorkflowId()
 */
class StartBack2BackCallRequest extends \RpcAcsRequest
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
            'StartBack2BackCall'
        );
    }

    /**
     * @param string $callCenterNumber
     *
     * @return $this
     */
    public function setCallCenterNumber($callCenterNumber)
    {
        $this->requestParameters['CallCenterNumber'] = $callCenterNumber;
        $this->queryParameters['CallCenterNumber'] = $callCenterNumber;

        return $this;
    }

    /**
     * @param string $callee
     *
     * @return $this
     */
    public function setCallee($callee)
    {
        $this->requestParameters['Callee'] = $callee;
        $this->queryParameters['Callee'] = $callee;

        return $this;
    }

    /**
     * @param string $caller
     *
     * @return $this
     */
    public function setCaller($caller)
    {
        $this->requestParameters['Caller'] = $caller;
        $this->queryParameters['Caller'] = $caller;

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
     * @param string $workflowId
     *
     * @return $this
     */
    public function setWorkflowId($workflowId)
    {
        $this->requestParameters['WorkflowId'] = $workflowId;
        $this->queryParameters['WorkflowId'] = $workflowId;

        return $this;
    }
}
