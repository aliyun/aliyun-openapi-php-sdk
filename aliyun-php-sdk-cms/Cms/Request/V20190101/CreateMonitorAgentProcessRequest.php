<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateMonitorAgentProcess
 *
 * @method string getInstanceId()
 * @method string getProcessName()
 * @method string getProcessUser()
 */
class CreateMonitorAgentProcessRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'CreateMonitorAgentProcess',
            'cms'
        );
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

    /**
     * @param string $processName
     *
     * @return $this
     */
    public function setProcessName($processName)
    {
        $this->requestParameters['ProcessName'] = $processName;
        $this->queryParameters['ProcessName'] = $processName;

        return $this;
    }

    /**
     * @param string $processUser
     *
     * @return $this
     */
    public function setProcessUser($processUser)
    {
        $this->requestParameters['ProcessUser'] = $processUser;
        $this->queryParameters['ProcessUser'] = $processUser;

        return $this;
    }
}
