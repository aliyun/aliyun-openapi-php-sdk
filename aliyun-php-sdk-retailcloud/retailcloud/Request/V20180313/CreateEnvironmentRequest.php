<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateEnvironment
 *
 * @method string getEnvName()
 * @method string getReplicas()
 * @method string getAppId()
 * @method string getEnvType()
 * @method string getAppSchemaId()
 * @method string getRegion()
 */
class CreateEnvironmentRequest extends \RpcAcsRequest
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
            'CreateEnvironment',
            'retailcloud'
        );
    }

    /**
     * @param string $envName
     *
     * @return $this
     */
    public function setEnvName($envName)
    {
        $this->requestParameters['EnvName'] = $envName;
        $this->queryParameters['EnvName'] = $envName;

        return $this;
    }

    /**
     * @param string $replicas
     *
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->requestParameters['Replicas'] = $replicas;
        $this->queryParameters['Replicas'] = $replicas;

        return $this;
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
     * @param string $envType
     *
     * @return $this
     */
    public function setEnvType($envType)
    {
        $this->requestParameters['EnvType'] = $envType;
        $this->queryParameters['EnvType'] = $envType;

        return $this;
    }

    /**
     * @param string $appSchemaId
     *
     * @return $this
     */
    public function setAppSchemaId($appSchemaId)
    {
        $this->requestParameters['AppSchemaId'] = $appSchemaId;
        $this->queryParameters['AppSchemaId'] = $appSchemaId;

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
