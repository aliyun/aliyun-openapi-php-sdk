<?php

namespace saf\Request\V20190521;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ExecuteRequestSG
 *
 * @method string getServiceParameters()
 * @method string getService()
 */
class ExecuteRequestSGRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'saf',
            '2019-05-21',
            'ExecuteRequestSG',
            'saf'
        );
    }

    /**
     * @param string $serviceParameters
     *
     * @return $this
     */
    public function setServiceParameters($serviceParameters)
    {
        $this->requestParameters['ServiceParameters'] = $serviceParameters;
        $this->queryParameters['ServiceParameters'] = $serviceParameters;

        return $this;
    }

    /**
     * @param string $service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->requestParameters['Service'] = $service;
        $this->queryParameters['Service'] = $service;

        return $this;
    }
}
