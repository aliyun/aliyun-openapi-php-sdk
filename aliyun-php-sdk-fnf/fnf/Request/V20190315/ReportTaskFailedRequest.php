<?php

namespace fnf\Request\V20190315;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ReportTaskFailed
 *
 * @method string getRequestId()
 * @method string getCause()
 * @method string getTaskToken()
 * @method string getError()
 */
class ReportTaskFailedRequest extends \RpcAcsRequest
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
            'ReportTaskFailed',
            'fnf'
        );
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
     * @param string $taskToken
     *
     * @return $this
     */
    public function setTaskToken($taskToken)
    {
        $this->requestParameters['TaskToken'] = $taskToken;
        $this->queryParameters['TaskToken'] = $taskToken;

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
