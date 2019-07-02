<?php

namespace fnf\Request\V20190315;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetExecutionHistory
 *
 * @method string getExecutionName()
 * @method string getNextToken()
 * @method string getRequestId()
 * @method string getLimit()
 * @method string getFlowName()
 */
class GetExecutionHistoryRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'fnf',
            '2019-03-15',
            'GetExecutionHistory',
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
     * @param string $nextToken
     *
     * @return $this
     */
    public function setNextToken($nextToken)
    {
        $this->requestParameters['NextToken'] = $nextToken;
        $this->queryParameters['NextToken'] = $nextToken;

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
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->requestParameters['Limit'] = $limit;
        $this->queryParameters['Limit'] = $limit;

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
