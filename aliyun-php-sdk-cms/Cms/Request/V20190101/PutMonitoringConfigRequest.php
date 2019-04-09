<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PutMonitoringConfig
 *
 * @method string getEnableInstallAgentNewECS()
 * @method string getAutoInstall()
 */
class PutMonitoringConfigRequest extends \RpcAcsRequest
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
            'PutMonitoringConfig',
            'cms'
        );
    }

    /**
     * @param string $enableInstallAgentNewECS
     *
     * @return $this
     */
    public function setEnableInstallAgentNewECS($enableInstallAgentNewECS)
    {
        $this->requestParameters['EnableInstallAgentNewECS'] = $enableInstallAgentNewECS;
        $this->queryParameters['EnableInstallAgentNewECS'] = $enableInstallAgentNewECS;

        return $this;
    }

    /**
     * @param string $autoInstall
     *
     * @return $this
     */
    public function setAutoInstall($autoInstall)
    {
        $this->requestParameters['AutoInstall'] = $autoInstall;
        $this->queryParameters['AutoInstall'] = $autoInstall;

        return $this;
    }
}
