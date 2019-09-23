<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyRouterInterfaceAttribute
 *
 * @method string getOppositeRouterId()
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getHealthCheckTargetIp()
 * @method string getOppositeInterfaceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getRouterInterfaceId()
 * @method string getOppositeInterfaceOwnerId()
 * @method string getHealthCheckSourceIp()
 * @method string getName()
 * @method string getOppositeRouterType()
 */
class ModifyRouterInterfaceAttributeRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'ModifyRouterInterfaceAttribute',
            'ecs'
        );
    }

    /**
     * @param string $oppositeRouterId
     *
     * @return $this
     */
    public function setOppositeRouterId($oppositeRouterId)
    {
        $this->requestParameters['OppositeRouterId'] = $oppositeRouterId;
        $this->queryParameters['OppositeRouterId'] = $oppositeRouterId;

        return $this;
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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $healthCheckTargetIp
     *
     * @return $this
     */
    public function setHealthCheckTargetIp($healthCheckTargetIp)
    {
        $this->requestParameters['HealthCheckTargetIp'] = $healthCheckTargetIp;
        $this->queryParameters['HealthCheckTargetIp'] = $healthCheckTargetIp;

        return $this;
    }

    /**
     * @param string $oppositeInterfaceId
     *
     * @return $this
     */
    public function setOppositeInterfaceId($oppositeInterfaceId)
    {
        $this->requestParameters['OppositeInterfaceId'] = $oppositeInterfaceId;
        $this->queryParameters['OppositeInterfaceId'] = $oppositeInterfaceId;

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
     * @param string $routerInterfaceId
     *
     * @return $this
     */
    public function setRouterInterfaceId($routerInterfaceId)
    {
        $this->requestParameters['RouterInterfaceId'] = $routerInterfaceId;
        $this->queryParameters['RouterInterfaceId'] = $routerInterfaceId;

        return $this;
    }

    /**
     * @param string $oppositeInterfaceOwnerId
     *
     * @return $this
     */
    public function setOppositeInterfaceOwnerId($oppositeInterfaceOwnerId)
    {
        $this->requestParameters['OppositeInterfaceOwnerId'] = $oppositeInterfaceOwnerId;
        $this->queryParameters['OppositeInterfaceOwnerId'] = $oppositeInterfaceOwnerId;

        return $this;
    }

    /**
     * @param string $healthCheckSourceIp
     *
     * @return $this
     */
    public function setHealthCheckSourceIp($healthCheckSourceIp)
    {
        $this->requestParameters['HealthCheckSourceIp'] = $healthCheckSourceIp;
        $this->queryParameters['HealthCheckSourceIp'] = $healthCheckSourceIp;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $oppositeRouterType
     *
     * @return $this
     */
    public function setOppositeRouterType($oppositeRouterType)
    {
        $this->requestParameters['OppositeRouterType'] = $oppositeRouterType;
        $this->queryParameters['OppositeRouterType'] = $oppositeRouterType;

        return $this;
    }
}
