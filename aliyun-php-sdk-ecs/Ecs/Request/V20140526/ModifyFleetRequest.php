<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyFleet
 *
 * @method string getResourceOwnerId()
 * @method string getTerminateInstancesWithExpiration()
 * @method string getOnDemandTargetCapacity()
 * @method string getDefaultTargetCapacityType()
 * @method string getExcessCapacityTerminationPolicy()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getFleetId()
 * @method string getTotalTargetCapacity()
 * @method string getSpotTargetCapacity()
 * @method string getMaxSpotPrice()
 */
class ModifyFleetRequest extends \RpcAcsRequest
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
            'ModifyFleet',
            'ecs'
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
     * @param string $terminateInstancesWithExpiration
     *
     * @return $this
     */
    public function setTerminateInstancesWithExpiration($terminateInstancesWithExpiration)
    {
        $this->requestParameters['TerminateInstancesWithExpiration'] = $terminateInstancesWithExpiration;
        $this->queryParameters['TerminateInstancesWithExpiration'] = $terminateInstancesWithExpiration;

        return $this;
    }

    /**
     * @param string $onDemandTargetCapacity
     *
     * @return $this
     */
    public function setOnDemandTargetCapacity($onDemandTargetCapacity)
    {
        $this->requestParameters['OnDemandTargetCapacity'] = $onDemandTargetCapacity;
        $this->queryParameters['OnDemandTargetCapacity'] = $onDemandTargetCapacity;

        return $this;
    }

    /**
     * @param string $defaultTargetCapacityType
     *
     * @return $this
     */
    public function setDefaultTargetCapacityType($defaultTargetCapacityType)
    {
        $this->requestParameters['DefaultTargetCapacityType'] = $defaultTargetCapacityType;
        $this->queryParameters['DefaultTargetCapacityType'] = $defaultTargetCapacityType;

        return $this;
    }

    /**
     * @param string $excessCapacityTerminationPolicy
     *
     * @return $this
     */
    public function setExcessCapacityTerminationPolicy($excessCapacityTerminationPolicy)
    {
        $this->requestParameters['ExcessCapacityTerminationPolicy'] = $excessCapacityTerminationPolicy;
        $this->queryParameters['ExcessCapacityTerminationPolicy'] = $excessCapacityTerminationPolicy;

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
     * @param string $fleetId
     *
     * @return $this
     */
    public function setFleetId($fleetId)
    {
        $this->requestParameters['FleetId'] = $fleetId;
        $this->queryParameters['FleetId'] = $fleetId;

        return $this;
    }

    /**
     * @param string $totalTargetCapacity
     *
     * @return $this
     */
    public function setTotalTargetCapacity($totalTargetCapacity)
    {
        $this->requestParameters['TotalTargetCapacity'] = $totalTargetCapacity;
        $this->queryParameters['TotalTargetCapacity'] = $totalTargetCapacity;

        return $this;
    }

    /**
     * @param string $spotTargetCapacity
     *
     * @return $this
     */
    public function setSpotTargetCapacity($spotTargetCapacity)
    {
        $this->requestParameters['SpotTargetCapacity'] = $spotTargetCapacity;
        $this->queryParameters['SpotTargetCapacity'] = $spotTargetCapacity;

        return $this;
    }

    /**
     * @param string $maxSpotPrice
     *
     * @return $this
     */
    public function setMaxSpotPrice($maxSpotPrice)
    {
        $this->requestParameters['MaxSpotPrice'] = $maxSpotPrice;
        $this->queryParameters['MaxSpotPrice'] = $maxSpotPrice;

        return $this;
    }
}
