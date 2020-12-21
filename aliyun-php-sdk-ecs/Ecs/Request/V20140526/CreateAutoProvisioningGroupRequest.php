<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAutoProvisioningGroup
 *
 * @method array getLaunchConfigurationDataDisks()
 * @method string getResourceOwnerId()
 * @method string getLaunchConfigurationSystemDiskCategory()
 * @method string getAutoProvisioningGroupType()
 * @method string getLaunchConfigurationSystemDiskPerformanceLevel()
 * @method string getResourceGroupId()
 * @method string getLaunchConfigurationImageId()
 * @method string getLaunchConfigurationResourceGroupId()
 * @method string getPayAsYouGoAllocationStrategy()
 * @method string getDefaultTargetCapacityType()
 * @method string getLaunchConfigurationKeyPairName()
 * @method array getSystemDiskConfigs()
 * @method array getDataDiskConfigs()
 * @method string getValidUntil()
 * @method string getLaunchTemplateId()
 * @method string getOwnerId()
 * @method string getLaunchConfigurationSystemDiskSize()
 * @method string getLaunchConfigurationInternetMaxBandwidthOut()
 * @method string getLaunchConfigurationHostName()
 * @method string getMaxSpotPrice()
 * @method string getLaunchConfigurationPasswordInherit()
 * @method string getLaunchConfigurationSecurityGroupId()
 * @method string getDescription()
 * @method string getTerminateInstancesWithExpiration()
 * @method string getLaunchConfigurationUserData()
 * @method string getLaunchConfigurationCreditSpecification()
 * @method string getLaunchConfigurationInstanceName()
 * @method string getLaunchConfigurationInstanceDescription()
 * @method string getSpotAllocationStrategy()
 * @method string getTerminateInstances()
 * @method string getLaunchConfigurationSystemDiskName()
 * @method string getLaunchConfigurationSystemDiskDescription()
 * @method string getExcessCapacityTerminationPolicy()
 * @method array getLaunchTemplateConfigs()
 * @method string getLaunchConfigurationRamRoleName()
 * @method string getLaunchConfigurationInternetMaxBandwidthIn()
 * @method string getSpotInstanceInterruptionBehavior()
 * @method string getLaunchConfigurationSecurityEnhancementStrategy()
 * @method array getLaunchConfigurationTags()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSpotInstancePoolsToUseCount()
 * @method string getLaunchConfigurationInternetChargeType()
 * @method string getLaunchTemplateVersion()
 * @method string getLaunchConfigurationIoOptimized()
 * @method string getPayAsYouGoTargetCapacity()
 * @method string getTotalTargetCapacity()
 * @method string getSpotTargetCapacity()
 * @method string getValidFrom()
 * @method string getAutoProvisioningGroupName()
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
     * @param array $launchConfigurationDataDisk
     *
     * @return $this
     */
	public function setLaunchConfigurationDataDisks(array $launchConfigurationDataDisk)
	{
	    $this->requestParameters['LaunchConfigurationDataDisks'] = $launchConfigurationDataDisk;
		foreach ($launchConfigurationDataDisk as $depth1 => $depth1Value) {
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.KmsKeyId'] = $depth1Value['KmsKeyId'];
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			$this->queryParameters['LaunchConfiguration.DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
		}

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
     * @param string $launchConfigurationSystemDiskCategory
     *
     * @return $this
     */
    public function setLaunchConfigurationSystemDiskCategory($launchConfigurationSystemDiskCategory)
    {
        $this->requestParameters['LaunchConfigurationSystemDiskCategory'] = $launchConfigurationSystemDiskCategory;
        $this->queryParameters['LaunchConfiguration.SystemDiskCategory'] = $launchConfigurationSystemDiskCategory;

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
     * @param string $launchConfigurationSystemDiskPerformanceLevel
     *
     * @return $this
     */
    public function setLaunchConfigurationSystemDiskPerformanceLevel($launchConfigurationSystemDiskPerformanceLevel)
    {
        $this->requestParameters['LaunchConfigurationSystemDiskPerformanceLevel'] = $launchConfigurationSystemDiskPerformanceLevel;
        $this->queryParameters['LaunchConfiguration.SystemDiskPerformanceLevel'] = $launchConfigurationSystemDiskPerformanceLevel;

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
     * @param string $launchConfigurationImageId
     *
     * @return $this
     */
    public function setLaunchConfigurationImageId($launchConfigurationImageId)
    {
        $this->requestParameters['LaunchConfigurationImageId'] = $launchConfigurationImageId;
        $this->queryParameters['LaunchConfiguration.ImageId'] = $launchConfigurationImageId;

        return $this;
    }

    /**
     * @param string $launchConfigurationResourceGroupId
     *
     * @return $this
     */
    public function setLaunchConfigurationResourceGroupId($launchConfigurationResourceGroupId)
    {
        $this->requestParameters['LaunchConfigurationResourceGroupId'] = $launchConfigurationResourceGroupId;
        $this->queryParameters['LaunchConfiguration.ResourceGroupId'] = $launchConfigurationResourceGroupId;

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
     * @param string $launchConfigurationKeyPairName
     *
     * @return $this
     */
    public function setLaunchConfigurationKeyPairName($launchConfigurationKeyPairName)
    {
        $this->requestParameters['LaunchConfigurationKeyPairName'] = $launchConfigurationKeyPairName;
        $this->queryParameters['LaunchConfiguration.KeyPairName'] = $launchConfigurationKeyPairName;

        return $this;
    }

    /**
     * @param array $systemDiskConfig
     *
     * @return $this
     */
	public function setSystemDiskConfigs(array $systemDiskConfig)
	{
	    $this->requestParameters['SystemDiskConfigs'] = $systemDiskConfig;
		foreach ($systemDiskConfig as $depth1 => $depth1Value) {
			$this->queryParameters['SystemDiskConfig.' . ($depth1 + 1) . '.DiskCategory'] = $depth1Value['DiskCategory'];
		}

		return $this;
    }

    /**
     * @param array $dataDiskConfig
     *
     * @return $this
     */
	public function setDataDiskConfigs(array $dataDiskConfig)
	{
	    $this->requestParameters['DataDiskConfigs'] = $dataDiskConfig;
		foreach ($dataDiskConfig as $depth1 => $depth1Value) {
			$this->queryParameters['DataDiskConfig.' . ($depth1 + 1) . '.DiskCategory'] = $depth1Value['DiskCategory'];
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
     * @param string $launchConfigurationSystemDiskSize
     *
     * @return $this
     */
    public function setLaunchConfigurationSystemDiskSize($launchConfigurationSystemDiskSize)
    {
        $this->requestParameters['LaunchConfigurationSystemDiskSize'] = $launchConfigurationSystemDiskSize;
        $this->queryParameters['LaunchConfiguration.SystemDiskSize'] = $launchConfigurationSystemDiskSize;

        return $this;
    }

    /**
     * @param string $launchConfigurationInternetMaxBandwidthOut
     *
     * @return $this
     */
    public function setLaunchConfigurationInternetMaxBandwidthOut($launchConfigurationInternetMaxBandwidthOut)
    {
        $this->requestParameters['LaunchConfigurationInternetMaxBandwidthOut'] = $launchConfigurationInternetMaxBandwidthOut;
        $this->queryParameters['LaunchConfiguration.InternetMaxBandwidthOut'] = $launchConfigurationInternetMaxBandwidthOut;

        return $this;
    }

    /**
     * @param string $launchConfigurationHostName
     *
     * @return $this
     */
    public function setLaunchConfigurationHostName($launchConfigurationHostName)
    {
        $this->requestParameters['LaunchConfigurationHostName'] = $launchConfigurationHostName;
        $this->queryParameters['LaunchConfiguration.HostName'] = $launchConfigurationHostName;

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

    /**
     * @param string $launchConfigurationPasswordInherit
     *
     * @return $this
     */
    public function setLaunchConfigurationPasswordInherit($launchConfigurationPasswordInherit)
    {
        $this->requestParameters['LaunchConfigurationPasswordInherit'] = $launchConfigurationPasswordInherit;
        $this->queryParameters['LaunchConfiguration.PasswordInherit'] = $launchConfigurationPasswordInherit;

        return $this;
    }

    /**
     * @param string $launchConfigurationSecurityGroupId
     *
     * @return $this
     */
    public function setLaunchConfigurationSecurityGroupId($launchConfigurationSecurityGroupId)
    {
        $this->requestParameters['LaunchConfigurationSecurityGroupId'] = $launchConfigurationSecurityGroupId;
        $this->queryParameters['LaunchConfiguration.SecurityGroupId'] = $launchConfigurationSecurityGroupId;

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
     * @param string $launchConfigurationUserData
     *
     * @return $this
     */
    public function setLaunchConfigurationUserData($launchConfigurationUserData)
    {
        $this->requestParameters['LaunchConfigurationUserData'] = $launchConfigurationUserData;
        $this->queryParameters['LaunchConfiguration.UserData'] = $launchConfigurationUserData;

        return $this;
    }

    /**
     * @param string $launchConfigurationCreditSpecification
     *
     * @return $this
     */
    public function setLaunchConfigurationCreditSpecification($launchConfigurationCreditSpecification)
    {
        $this->requestParameters['LaunchConfigurationCreditSpecification'] = $launchConfigurationCreditSpecification;
        $this->queryParameters['LaunchConfiguration.CreditSpecification'] = $launchConfigurationCreditSpecification;

        return $this;
    }

    /**
     * @param string $launchConfigurationInstanceName
     *
     * @return $this
     */
    public function setLaunchConfigurationInstanceName($launchConfigurationInstanceName)
    {
        $this->requestParameters['LaunchConfigurationInstanceName'] = $launchConfigurationInstanceName;
        $this->queryParameters['LaunchConfiguration.InstanceName'] = $launchConfigurationInstanceName;

        return $this;
    }

    /**
     * @param string $launchConfigurationInstanceDescription
     *
     * @return $this
     */
    public function setLaunchConfigurationInstanceDescription($launchConfigurationInstanceDescription)
    {
        $this->requestParameters['LaunchConfigurationInstanceDescription'] = $launchConfigurationInstanceDescription;
        $this->queryParameters['LaunchConfiguration.InstanceDescription'] = $launchConfigurationInstanceDescription;

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
     * @param string $launchConfigurationSystemDiskName
     *
     * @return $this
     */
    public function setLaunchConfigurationSystemDiskName($launchConfigurationSystemDiskName)
    {
        $this->requestParameters['LaunchConfigurationSystemDiskName'] = $launchConfigurationSystemDiskName;
        $this->queryParameters['LaunchConfiguration.SystemDiskName'] = $launchConfigurationSystemDiskName;

        return $this;
    }

    /**
     * @param string $launchConfigurationSystemDiskDescription
     *
     * @return $this
     */
    public function setLaunchConfigurationSystemDiskDescription($launchConfigurationSystemDiskDescription)
    {
        $this->requestParameters['LaunchConfigurationSystemDiskDescription'] = $launchConfigurationSystemDiskDescription;
        $this->queryParameters['LaunchConfiguration.SystemDiskDescription'] = $launchConfigurationSystemDiskDescription;

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
     * @param string $launchConfigurationRamRoleName
     *
     * @return $this
     */
    public function setLaunchConfigurationRamRoleName($launchConfigurationRamRoleName)
    {
        $this->requestParameters['LaunchConfigurationRamRoleName'] = $launchConfigurationRamRoleName;
        $this->queryParameters['LaunchConfiguration.RamRoleName'] = $launchConfigurationRamRoleName;

        return $this;
    }

    /**
     * @param string $launchConfigurationInternetMaxBandwidthIn
     *
     * @return $this
     */
    public function setLaunchConfigurationInternetMaxBandwidthIn($launchConfigurationInternetMaxBandwidthIn)
    {
        $this->requestParameters['LaunchConfigurationInternetMaxBandwidthIn'] = $launchConfigurationInternetMaxBandwidthIn;
        $this->queryParameters['LaunchConfiguration.InternetMaxBandwidthIn'] = $launchConfigurationInternetMaxBandwidthIn;

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
     * @param string $launchConfigurationSecurityEnhancementStrategy
     *
     * @return $this
     */
    public function setLaunchConfigurationSecurityEnhancementStrategy($launchConfigurationSecurityEnhancementStrategy)
    {
        $this->requestParameters['LaunchConfigurationSecurityEnhancementStrategy'] = $launchConfigurationSecurityEnhancementStrategy;
        $this->queryParameters['LaunchConfiguration.SecurityEnhancementStrategy'] = $launchConfigurationSecurityEnhancementStrategy;

        return $this;
    }

    /**
     * @param array $launchConfigurationTag
     *
     * @return $this
     */
	public function setLaunchConfigurationTags(array $launchConfigurationTag)
	{
	    $this->requestParameters['LaunchConfigurationTags'] = $launchConfigurationTag;
		foreach ($launchConfigurationTag as $depth1 => $depth1Value) {
			$this->queryParameters['LaunchConfiguration.Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			$this->queryParameters['LaunchConfiguration.Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

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
     * @param string $launchConfigurationInternetChargeType
     *
     * @return $this
     */
    public function setLaunchConfigurationInternetChargeType($launchConfigurationInternetChargeType)
    {
        $this->requestParameters['LaunchConfigurationInternetChargeType'] = $launchConfigurationInternetChargeType;
        $this->queryParameters['LaunchConfiguration.InternetChargeType'] = $launchConfigurationInternetChargeType;

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
     * @param string $launchConfigurationIoOptimized
     *
     * @return $this
     */
    public function setLaunchConfigurationIoOptimized($launchConfigurationIoOptimized)
    {
        $this->requestParameters['LaunchConfigurationIoOptimized'] = $launchConfigurationIoOptimized;
        $this->queryParameters['LaunchConfiguration.IoOptimized'] = $launchConfigurationIoOptimized;

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
}
