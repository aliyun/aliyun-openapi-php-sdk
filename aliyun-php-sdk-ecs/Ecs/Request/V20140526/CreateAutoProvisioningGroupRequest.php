<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAutoProvisioningGroup
 *
 * @method string getResourceOwnerId()
 * @method string getAutoProvisioningGroupType()
 * @method string getDescription()
 * @method string getTerminateInstancesWithExpiration()
 * @method string getResourceGroupId()
 * @method string getSpotAllocationStrategy()
 * @method string getTerminateInstances()
 * @method string getPayAsYouGoAllocationStrategy()
 * @method string getDefaultTargetCapacityType()
 * @method string getExcessCapacityTerminationPolicy()
 * @method array getLaunchTemplateConfigs()
 * @method string getValidUntil()
 * @method string getSpotInstanceInterruptionBehavior()
 * @method string getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSpotInstancePoolsToUseCount()
 * @method string getOwnerId()
 * @method string getLaunchTemplateVersion()
 * @method string getPayAsYouGoTargetCapacity()
 * @method string getTotalTargetCapacity()
 * @method string getSpotTargetCapacity()
 * @method string getValidFrom()
 * @method string getAutoProvisioningGroupName()
 * @method string getMaxSpotPrice()
 */
class CreateAutoProvisioningGroupRequest extends \RpcAcsRequest
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
            'CreateAutoProvisioningGroup',
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
     * @param string $autoProvisioningGroupType
     *
     * @return $this
     */
    public function setAutoProvisioningGroupType($autoProvisioningGroupType)
    {
        $this->requestParameters['AutoProvisioningGroupType'] = $autoProvisioningGroupType;
        $this->queryParameters['AutoProvisioningGroupType'] = $autoProvisioningGroupType;

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
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

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
     * @param string $payAsYouGoAllocationStrategy
     *
     * @return $this
     */
    public function setPayAsYouGoAllocationStrategy($payAsYouGoAllocationStrategy)
    {
        $this->requestParameters['PayAsYouGoAllocationStrategy'] = $payAsYouGoAllocationStrategy;
        $this->queryParameters['PayAsYouGoAllocationStrategy'] = $payAsYouGoAllocationStrategy;

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
     * @param string $payAsYouGoTargetCapacity
     *
     * @return $this
     */
    public function setPayAsYouGoTargetCapacity($payAsYouGoTargetCapacity)
    {
        $this->requestParameters['PayAsYouGoTargetCapacity'] = $payAsYouGoTargetCapacity;
        $this->queryParameters['PayAsYouGoTargetCapacity'] = $payAsYouGoTargetCapacity;

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
     * @param string $autoProvisioningGroupName
     *
     * @return $this
     */
    public function setAutoProvisioningGroupName($autoProvisioningGroupName)
    {
        $this->requestParameters['AutoProvisioningGroupName'] = $autoProvisioningGroupName;
        $this->queryParameters['AutoProvisioningGroupName'] = $autoProvisioningGroupName;

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
