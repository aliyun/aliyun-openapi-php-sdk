<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyParameterGroup
 *
 * @method string getResourceOwnerId()
 * @method string getParameterGroupId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getParameterGroupName()
 * @method string getParameters()
 * @method string getParameterGroupDesc()
 */
class ModifyParameterGroupRequest extends \RpcAcsRequest
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
            'ModifyParameterGroup',
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
     * @param string $parameterGroupId
     *
     * @return $this
     */
    public function setParameterGroupId($parameterGroupId)
    {
        $this->requestParameters['ParameterGroupId'] = $parameterGroupId;
        $this->queryParameters['ParameterGroupId'] = $parameterGroupId;

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
