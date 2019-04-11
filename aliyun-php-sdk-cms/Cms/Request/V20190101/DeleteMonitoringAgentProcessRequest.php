<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteMonitoringAgentProcess
 *
 * @method string getInstanceId()
 * @method string getProcessId()
 * @method string getProcessName()
 */
class DeleteMonitoringAgentProcessRequest extends \RpcAcsRequest
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
            'DeleteMonitoringAgentProcess',
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
     * @param string $processId
     *
     * @return $this
     */
    public function setProcessId($processId)
    {
        $this->requestParameters['ProcessId'] = $processId;
        $this->queryParameters['ProcessId'] = $processId;

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
}
