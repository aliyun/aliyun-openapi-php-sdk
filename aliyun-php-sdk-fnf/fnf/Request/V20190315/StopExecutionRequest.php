<?php

namespace fnf\Request\V20190315;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StopExecution
 *
 * @method string getExecutionName()
 * @method string getRequestId()
 * @method string getCause()
 * @method string getFlowName()
 * @method string getError()
 */
class StopExecutionRequest extends \RpcAcsRequest
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
            'fnf',
            '2019-03-15',
            'StopExecution',
            'fnf'
        );
    }

    /**
     * @param string $executionName
     *
     * @return $this
     */
    public function setExecutionName($executionName)
    {
        $this->requestParameters['ExecutionName'] = $executionName;
        $this->queryParameters['ExecutionName'] = $executionName;

        return $this;
    }

    /**
     * @param string $requestId
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->requestParameters['RequestId'] = $requestId;
        $this->queryParameters['RequestId'] = $requestId;

        return $this;
    }

    /**
     * @param string $cause
     *
     * @return $this
     */
    public function setCause($cause)
    {
        $this->requestParameters['Cause'] = $cause;
        $this->queryParameters['Cause'] = $cause;

        return $this;
    }

    /**
     * @param string $flowName
     *
     * @return $this
     */
    public function setFlowName($flowName)
    {
        $this->requestParameters['FlowName'] = $flowName;
        $this->queryParameters['FlowName'] = $flowName;

        return $this;
    }

    /**
     * @param string $error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->requestParameters['Error'] = $error;
        $this->queryParameters['Error'] = $error;

        return $this;
    }
}
