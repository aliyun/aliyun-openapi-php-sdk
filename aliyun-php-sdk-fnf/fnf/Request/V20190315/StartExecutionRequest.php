<?php

namespace fnf\Request\V20190315;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StartExecution
 *
 * @method string getCallbackFnFTaskToken()
 * @method string getExecutionName()
 * @method string getInput()
 * @method string getRequestId()
 * @method string getFlowName()
 */
class StartExecutionRequest extends \RpcAcsRequest
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
            'StartExecution',
            'fnf'
        );
    }

    /**
     * @param string $callbackFnFTaskToken
     *
     * @return $this
     */
    public function setCallbackFnFTaskToken($callbackFnFTaskToken)
    {
        $this->requestParameters['CallbackFnFTaskToken'] = $callbackFnFTaskToken;
        $this->queryParameters['CallbackFnFTaskToken'] = $callbackFnFTaskToken;

        return $this;
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
     * @param string $input
     *
     * @return $this
     */
    public function setInput($input)
    {
        $this->requestParameters['Input'] = $input;
        $this->queryParameters['Input'] = $input;

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
}
