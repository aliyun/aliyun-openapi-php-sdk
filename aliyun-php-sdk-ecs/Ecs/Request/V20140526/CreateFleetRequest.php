<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateFleet
 *
 * @method string getResourceOwnerId()
 * @method string getFleetType()
 * @method string getDescription()
 * @method string getTerminateInstancesWithExpiration()
 * @method string getOnDemandTargetCapacity()
 * @method string getFleetName()
 * @method string getSpotAllocationStrategy()
 * @method string getTerminateInstances()
 * @method string getDefaultTargetCapacityType()
 * @method string getExcessCapacityTerminationPolicy()
 * @method array getLaunchTemplateConfigs()
 * @method string getValidUntil()
 * @method string getFillGapWithOnDemand()
 * @method string getSpotInstanceInterruptionBehavior()
 * @method string getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSpotInstancePoolsToUseCount()
 * @method string getOwnerId()
 * @method string getLaunchTemplateVersion()
 * @method string getTotalTargetCapacity()
 * @method string getOnDemandAllocationStrategy()
 * @method string getSpotTargetCapacity()
 * @method string getValidFrom()
 * @method string getMaxSpotPrice()
 */
class CreateFleetRequest extends \RpcAcsRequest
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
            'CreateFleet',
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
     * @param string $fleetType
     *
     * @return $this
     */
    public function setFleetType($fleetType)
    {
        $this->requestParameters['FleetType'] = $fleetType;
        $this->queryParameters['FleetType'] = $fleetType;

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
     * @param string $fleetName
     *
     * @return $this
     */
    public function setFleetName($fleetName)
    {
        $this->requestParameters['FleetName'] = $fleetName;
        $this->queryParameters['FleetName'] = $fleetName;

        return $this;
    }

    /**
     * @param string $spotAllocationStrategy
     *
     * @return $this
     */
    public function setSpotAllocationStrategy($spotAllocationStrategy)
    {
        $this->requestParameters['SpotAllocationStrategy'] = $spotAllocationStrategy;
        $this->queryParameters['SpotAllocationStrategy'] = $spotAllocationStrategy;

        return $this;
    }

    /**
     * @param string $terminateInstances
     *
     * @return $this
     */
    public function setTerminateInstances($terminateInstances)
    {
        $this->requestParameters['TerminateInstances'] = $terminateInstances;
        $this->queryParameters['TerminateInstances'] = $terminateInstances;

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
     * @param array $launchTemplateConfig
     *
     * @return $this
     */
	public function setLaunchTemplateConfigs(array $launchTemplateConfig)
	{
	    $this->requestParameters['LaunchTemplateConfigs'] = $launchTemplateConfig;
		foreach ($launchTemplateConfig as $depth1 => $depth1Value) {
			$this->queryParameters['LaunchTemplateConfig.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			$this->queryParameters['LaunchTemplateConfig.' . ($depth1 + 1) . '.MaxPrice'] = $depth1Value['MaxPrice'];
			$this->queryParameters['LaunchTemplateConfig.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			$this->queryParameters['LaunchTemplateConfig.' . ($depth1 + 1) . '.WeightedCapacity'] = $depth1Value['WeightedCapacity'];
			$this->queryParameters['LaunchTemplateConfig.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
		}

		return $this;
    }

    /**
     * @param string $validUntil
     *
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->requestParameters['ValidUntil'] = $validUntil;
        $this->queryParameters['ValidUntil'] = $validUntil;

        return $this;
    }

    /**
     * @param string $fillGapWithOnDemand
     *
     * @return $this
     */
    public function setFillGapWithOnDemand($fillGapWithOnDemand)
    {
        $this->requestParameters['FillGapWithOnDemand'] = $fillGapWithOnDemand;
        $this->queryParameters['FillGapWithOnDemand'] = $fillGapWithOnDemand;

        return $this;
    }

    /**
     * @param string $spotInstanceInterruptionBehavior
     *
     * @return $this
     */
    public function setSpotInstanceInterruptionBehavior($spotInstanceInterruptionBehavior)
    {
        $this->requestParameters['SpotInstanceInterruptionBehavior'] = $spotInstanceInterruptionBehavior;
        $this->queryParameters['SpotInstanceInterruptionBehavior'] = $spotInstanceInterruptionBehavior;

        return $this;
    }

    /**
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function setLaunchTemplateId($launchTemplateId)
    {
        $this->requestParameters['LaunchTemplateId'] = $launchTemplateId;
        $this->queryParameters['LaunchTemplateId'] = $launchTemplateId;

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
     * @param string $spotInstancePoolsToUseCount
     *
     * @return $this
     */
    public function setSpotInstancePoolsToUseCount($spotInstancePoolsToUseCount)
    {
        $this->requestParameters['SpotInstancePoolsToUseCount'] = $spotInstancePoolsToUseCount;
        $this->queryParameters['SpotInstancePoolsToUseCount'] = $spotInstancePoolsToUseCount;

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
     * @param string $launchTemplateVersion
     *
     * @return $this
     */
    public function setLaunchTemplateVersion($launchTemplateVersion)
    {
        $this->requestParameters['LaunchTemplateVersion'] = $launchTemplateVersion;
        $this->queryParameters['LaunchTemplateVersion'] = $launchTemplateVersion;

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
     * @param string $onDemandAllocationStrategy
     *
     * @return $this
     */
    public function setOnDemandAllocationStrategy($onDemandAllocationStrategy)
    {
        $this->requestParameters['OnDemandAllocationStrategy'] = $onDemandAllocationStrategy;
        $this->queryParameters['OnDemandAllocationStrategy'] = $onDemandAllocationStrategy;

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
     * @param string $validFrom
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->requestParameters['ValidFrom'] = $validFrom;
        $this->queryParameters['ValidFrom'] = $validFrom;

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
