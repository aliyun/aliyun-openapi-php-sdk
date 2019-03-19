<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ProduceInstance
 *
 * @method string getTraceId()
 * @method string getProduceParameter()
 */
class ProduceInstanceRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'ProduceInstance',
            'cloudwf'
        );
    }

    /**
     * @param string $traceId
     *
     * @return $this
     */
    public function setTraceId($traceId)
    {
        $this->requestParameters['TraceId'] = $traceId;
        $this->queryParameters['TraceId'] = $traceId;

        return $this;
    }

    /**
     * @param string $produceParameter
     *
     * @return $this
     */
    public function setProduceParameter($produceParameter)
    {
        $this->requestParameters['ProduceParameter'] = $produceParameter;
        $this->queryParameters['ProduceParameter'] = $produceParameter;

        return $this;
    }
}
