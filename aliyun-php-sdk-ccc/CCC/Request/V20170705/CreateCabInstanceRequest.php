<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCabInstance
 *
 * @method string getMaxConcurrentConversation()
 * @method string getInstanceName()
 * @method string getCallCenterInstanceId()
 * @method string getInstanceDescription()
 */
class CreateCabInstanceRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'CreateCabInstance'
        );
    }

    /**
     * @param string $maxConcurrentConversation
     *
     * @return $this
     */
    public function setMaxConcurrentConversation($maxConcurrentConversation)
    {
        $this->requestParameters['MaxConcurrentConversation'] = $maxConcurrentConversation;
        $this->queryParameters['MaxConcurrentConversation'] = $maxConcurrentConversation;

        return $this;
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
     * @param string $callCenterInstanceId
     *
     * @return $this
     */
    public function setCallCenterInstanceId($callCenterInstanceId)
    {
        $this->requestParameters['CallCenterInstanceId'] = $callCenterInstanceId;
        $this->queryParameters['CallCenterInstanceId'] = $callCenterInstanceId;

        return $this;
    }

    /**
     * @param string $instanceDescription
     *
     * @return $this
     */
    public function setInstanceDescription($instanceDescription)
    {
        $this->requestParameters['InstanceDescription'] = $instanceDescription;
        $this->queryParameters['InstanceDescription'] = $instanceDescription;

        return $this;
    }
}
