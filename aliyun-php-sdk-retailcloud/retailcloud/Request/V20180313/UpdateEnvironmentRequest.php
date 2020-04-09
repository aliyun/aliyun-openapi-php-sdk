<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateEnvironment
 *
 * @method string getReplicas()
 * @method string getAppId()
 * @method string getAppSchemaId()
 * @method string getAppEnvId()
 */
class UpdateEnvironmentRequest extends \RpcAcsRequest
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
            'UpdateEnvironment',
            'retailcloud'
        );
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
     * @param string $appEnvId
     *
     * @return $this
     */
    public function setAppEnvId($appEnvId)
    {
        $this->requestParameters['AppEnvId'] = $appEnvId;
        $this->queryParameters['AppEnvId'] = $appEnvId;

        return $this;
    }
}
