<?php

namespace saf\Request\V20190521;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ExecuteExtendService
 *
 * @method string getServiceParameters()
 * @method string getService()
 * @method string getRegion()
 */
class ExecuteExtendServiceRequest extends \RpcAcsRequest
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
            'saf',
            '2019-05-21',
            'ExecuteExtendService',
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

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }
}
