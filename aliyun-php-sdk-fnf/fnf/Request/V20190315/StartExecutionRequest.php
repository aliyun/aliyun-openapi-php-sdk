<?php

namespace fnf\Request\V20190315;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StartExecution
 *
 * @method string getInput()
 * @method string getExecutionName()
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
