<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteAppEnvironment
 *
 * @method string getAppId()
 * @method string getForce()
 * @method string getEnvId()
 */
class DeleteAppEnvironmentRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'DeleteAppEnvironment',
            'retailcloud'
        );
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

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

    /**
     * @param string $envId
     *
     * @return $this
     */
    public function setEnvId($envId)
    {
        $this->requestParameters['EnvId'] = $envId;
        $this->queryParameters['EnvId'] = $envId;

        return $this;
    }
}
