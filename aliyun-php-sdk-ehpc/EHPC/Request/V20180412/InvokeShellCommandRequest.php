<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InvokeShellCommand
 *
 * @method array getInstances()
 * @method string getWorkingDir()
 * @method string getClusterId()
 * @method string getCommand()
 * @method string getTimeout()
 */
class InvokeShellCommandRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'InvokeShellCommand',
            'ehs'
        );
    }

    /**
     * @param array $instance
     *
     * @return $this
     */
    public function setInstances(array $instance)
    {
        $this->requestParameters['Instances'] = $instance;
        foreach ($instance as $depth1 => $depth1Value) {
            $this->queryParameters['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
        }

        return $this;
    }

    /**
     * @param string $workingDir
     *
     * @return $this
     */
    public function setWorkingDir($workingDir)
    {
        $this->requestParameters['WorkingDir'] = $workingDir;
        $this->queryParameters['WorkingDir'] = $workingDir;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        $this->requestParameters['Command'] = $command;
        $this->queryParameters['Command'] = $command;

        return $this;
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->requestParameters['Timeout'] = $timeout;
        $this->queryParameters['Timeout'] = $timeout;

        return $this;
    }
}
