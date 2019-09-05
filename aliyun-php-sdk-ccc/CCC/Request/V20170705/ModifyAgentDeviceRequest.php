<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyAgentDevice
 *
 * @method string getIsLogin()
 * @method string getAgentDeviceId()
 * @method string getInstanceId()
 */
class ModifyAgentDeviceRequest extends \RpcAcsRequest
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
            'ModifyAgentDevice'
        );
    }

    /**
     * @param string $isLogin
     *
     * @return $this
     */
    public function setIsLogin($isLogin)
    {
        $this->requestParameters['IsLogin'] = $isLogin;
        $this->queryParameters['IsLogin'] = $isLogin;

        return $this;
    }

    /**
     * @param string $agentDeviceId
     *
     * @return $this
     */
    public function setAgentDeviceId($agentDeviceId)
    {
        $this->requestParameters['AgentDeviceId'] = $agentDeviceId;
        $this->queryParameters['AgentDeviceId'] = $agentDeviceId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
