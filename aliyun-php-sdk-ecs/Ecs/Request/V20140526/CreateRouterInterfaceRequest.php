<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRouterInterface
 *
 * @method string getAccessPointId()
 * @method string getOppositeRouterId()
 * @method string getOppositeAccessPointId()
 * @method string getResourceOwnerId()
 * @method string getRole()
 * @method string getClientToken()
 * @method string getHealthCheckTargetIp()
 * @method string getDescription()
 * @method string getSpec()
 * @method string getUserCidr()
 * @method string getOppositeInterfaceId()
 * @method string getInstanceChargeType()
 * @method string getPeriod()
 * @method string getAutoPay()
 * @method string getResourceOwnerAccount()
 * @method string getOppositeRegionId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getOppositeInterfaceOwnerId()
 * @method string getRouterType()
 * @method string getHealthCheckSourceIp()
 * @method string getRouterId()
 * @method string getOppositeRouterType()
 * @method string getName()
 * @method string getPricingCycle()
 */
class CreateRouterInterfaceRequest extends \RpcAcsRequest
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
            'CreateRouterInterface',
            'ecs'
        );
    }

    /**
     * @param string $accessPointId
     *
     * @return $this
     */
    public function setAccessPointId($accessPointId)
    {
        $this->requestParameters['AccessPointId'] = $accessPointId;
        $this->queryParameters['AccessPointId'] = $accessPointId;

        return $this;
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
     * @param string $oppositeAccessPointId
     *
     * @return $this
     */
    public function setOppositeAccessPointId($oppositeAccessPointId)
    {
        $this->requestParameters['OppositeAccessPointId'] = $oppositeAccessPointId;
        $this->queryParameters['OppositeAccessPointId'] = $oppositeAccessPointId;

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
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->requestParameters['Role'] = $role;
        $this->queryParameters['Role'] = $role;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

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
     * @param string $spec
     *
     * @return $this
     */
    public function setSpec($spec)
    {
        $this->requestParameters['Spec'] = $spec;
        $this->queryParameters['Spec'] = $spec;

        return $this;
    }

    /**
     * @param string $userCidr
     *
     * @return $this
     */
    public function setUserCidr($userCidr)
    {
        $this->requestParameters['UserCidr'] = $userCidr;
        $this->queryParameters['UserCidr'] = $userCidr;

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
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        $this->requestParameters['InstanceChargeType'] = $instanceChargeType;
        $this->queryParameters['InstanceChargeType'] = $instanceChargeType;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $autoPay
     *
     * @return $this
     */
    public function setAutoPay($autoPay)
    {
        $this->requestParameters['AutoPay'] = $autoPay;
        $this->queryParameters['AutoPay'] = $autoPay;

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
     * @param string $oppositeRegionId
     *
     * @return $this
     */
    public function setOppositeRegionId($oppositeRegionId)
    {
        $this->requestParameters['OppositeRegionId'] = $oppositeRegionId;
        $this->queryParameters['OppositeRegionId'] = $oppositeRegionId;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

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
     * @param string $routerType
     *
     * @return $this
     */
    public function setRouterType($routerType)
    {
        $this->requestParameters['RouterType'] = $routerType;
        $this->queryParameters['RouterType'] = $routerType;

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
     * @param string $routerId
     *
     * @return $this
     */
    public function setRouterId($routerId)
    {
        $this->requestParameters['RouterId'] = $routerId;
        $this->queryParameters['RouterId'] = $routerId;

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
     * @param string $pricingCycle
     *
     * @return $this
     */
    public function setPricingCycle($pricingCycle)
    {
        $this->requestParameters['PricingCycle'] = $pricingCycle;
        $this->queryParameters['PricingCycle'] = $pricingCycle;

        return $this;
    }
}
