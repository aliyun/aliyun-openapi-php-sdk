<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateParameterGroup
 *
 * @method string getResourceOwnerId()
 * @method string getEngineVersion()
 * @method string getEngine()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getParameterGroupName()
 * @method string getParameters()
 * @method string getParameterGroupDesc()
 */
class CreateParameterGroupRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'CreateParameterGroup',
            'rds'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $engineVersion
     *
     * @return $this
     */
    public function setEngineVersion($engineVersion)
    {
        $this->requestParameters['EngineVersion'] = $engineVersion;
        $this->queryParameters['EngineVersion'] = $engineVersion;

        return $this;
    }

    /**
     * @param string $engine
     *
     * @return $this
     */
    public function setEngine($engine)
    {
        $this->requestParameters['Engine'] = $engine;
        $this->queryParameters['Engine'] = $engine;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $parameterGroupName
     *
     * @return $this
     */
    public function setParameterGroupName($parameterGroupName)
    {
        $this->requestParameters['ParameterGroupName'] = $parameterGroupName;
        $this->queryParameters['ParameterGroupName'] = $parameterGroupName;

        return $this;
    }

    /**
     * @param string $parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->requestParameters['Parameters'] = $parameters;
        $this->queryParameters['Parameters'] = $parameters;

        return $this;
    }

    /**
     * @param string $parameterGroupDesc
     *
     * @return $this
     */
    public function setParameterGroupDesc($parameterGroupDesc)
    {
        $this->requestParameters['ParameterGroupDesc'] = $parameterGroupDesc;
        $this->queryParameters['ParameterGroupDesc'] = $parameterGroupDesc;

        return $this;
    }
}
