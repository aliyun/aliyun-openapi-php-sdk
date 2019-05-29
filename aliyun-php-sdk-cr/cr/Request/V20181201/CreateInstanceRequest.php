<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateInstance
 *
 * @method string getInstanceName()
 * @method string getInstanceSpecification()
 */
class CreateInstanceRequest extends \RpcAcsRequest
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
            'cr',
            '2018-12-01',
            'CreateInstance',
            'cr'
        );
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $instanceSpecification
     *
     * @return $this
     */
    public function setInstanceSpecification($instanceSpecification)
    {
        $this->requestParameters['InstanceSpecification'] = $instanceSpecification;
        $this->queryParameters['InstanceSpecification'] = $instanceSpecification;

        return $this;
    }
}
