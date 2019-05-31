<?php

namespace ARMS\Request\V20190219;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetTrace
 *
 * @method string getTraceID()
 * @method string getAppType()
 */
class GetTraceRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-02-19',
            'GetTrace'
        );
    }

    /**
     * @param string $traceID
     *
     * @return $this
     */
    public function setTraceID($traceID)
    {
        $this->requestParameters['TraceID'] = $traceID;
        $this->queryParameters['TraceID'] = $traceID;

        return $this;
    }

    /**
     * @param string $appType
     *
     * @return $this
     */
    public function setAppType($appType)
    {
        $this->requestParameters['AppType'] = $appType;
        $this->queryParameters['AppType'] = $appType;

        return $this;
    }
}
