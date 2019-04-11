<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InstallMonitoringAgent
 *
 * @method array getInstanceIdss()
 * @method string getForce()
 */
class InstallMonitoringAgentRequest extends \RpcAcsRequest
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
            'InstallMonitoringAgent',
            'cms'
        );
    }

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
    public function setInstanceIdss(array $instanceIds)
    {
        $this->requestParameters['InstanceIdss'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->queryParameters['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $force
     *
     * @return $this
     */
    public function setForce($force)
    {
        $this->requestParameters['Force'] = $force;
        $this->queryParameters['Force'] = $force;

        return $this;
    }
}
