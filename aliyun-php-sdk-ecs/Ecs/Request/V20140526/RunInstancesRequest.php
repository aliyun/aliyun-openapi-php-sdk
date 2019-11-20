<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RunInstances
 *
 * @method string getLaunchTemplateName()
 * @method string getResourceOwnerId()
 * @method string getUniqueSuffix()
 * @method string getHpcClusterId()
 * @method string getSecurityEnhancementStrategy()
 * @method string getKeyPairName()
 * @method string getMinAmount()
 * @method string getSpotPriceLimit()
 * @method string getDeletionProtection()
 * @method string getResourceGroupId()
 * @method string getHostName()
 * @method string getPassword()
 * @method string getStorageSetPartitionNumber()
 * @method array getTags()
 * @method string getSystemDiskAutoSnapshotPolicyId()
 * @method string getAutoRenewPeriod()
 * @method string getCpuOptionsCore()
 * @method string getPeriod()
 * @method string getDryRun()
 * @method string getLaunchTemplateId()
 * @method string getIpv6AddressCount()
 * @method string getCpuOptionsNuma()
 * @method string getOwnerId()
 * @method string getCapacityReservationPreference()
 * @method string getVSwitchId()
 * @method string getSpotStrategy()
 * @method string getPrivateIpAddress()
 * @method string getPeriodUnit()
 * @method string getInstanceName()
 * @method string getAutoRenew()
 * @method string getInternetChargeType()
 * @method string getZoneId()
 * @method array getIpv6Addresss()
 * @method string getInternetMaxBandwidthIn()
 * @method string getAffinity()
 * @method string getImageId()
 * @method string getSpotInterruptionBehavior()
 * @method string getClientToken()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getInternetMaxBandwidthOut()
 * @method string getDescription()
 * @method string getCpuOptionsThreadsPerCore()
 * @method string getSystemDiskCategory()
 * @method string getCapacityReservationId()
 * @method string getSystemDiskPerformanceLevel()
 * @method string getUserData()
 * @method string getPasswordInherit()
 * @method string getInstanceType()
 * @method string getHibernationConfigured()
 * @method string getInstanceChargeType()
 * @method array getNetworkInterfaces()
 * @method string getDeploymentSetId()
 * @method string getAmount()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTenancy()
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method string getAutoReleaseTime()
 * @method string getDedicatedHostId()
 * @method string getCreditSpecification()
 * @method array getSecurityGroupIdss()
 * @method string getSpotDuration()
 * @method array getDataDisks()
 * @method string getLaunchTemplateVersion()
 * @method string getStorageSetId()
 * @method string getSystemDiskSize()
 * @method string getSystemDiskDescription()
 */
class RunInstancesRequest extends \RpcAcsRequest
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
            'RunInstances',
            'ecs'
        );
    }

    /**
     * @param string $launchTemplateName
     *
     * @return $this
     */
    public function setLaunchTemplateName($launchTemplateName)
    {
        $this->requestParameters['LaunchTemplateName'] = $launchTemplateName;
        $this->queryParameters['LaunchTemplateName'] = $launchTemplateName;

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
     * @param string $uniqueSuffix
     *
     * @return $this
     */
    public function setUniqueSuffix($uniqueSuffix)
    {
        $this->requestParameters['UniqueSuffix'] = $uniqueSuffix;
        $this->queryParameters['UniqueSuffix'] = $uniqueSuffix;

        return $this;
    }

    /**
     * @param string $hpcClusterId
     *
     * @return $this
     */
    public function setHpcClusterId($hpcClusterId)
    {
        $this->requestParameters['HpcClusterId'] = $hpcClusterId;
        $this->queryParameters['HpcClusterId'] = $hpcClusterId;

        return $this;
    }

    /**
     * @param string $securityEnhancementStrategy
     *
     * @return $this
     */
    public function setSecurityEnhancementStrategy($securityEnhancementStrategy)
    {
        $this->requestParameters['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;
        $this->queryParameters['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;

        return $this;
    }

    /**
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        $this->requestParameters['KeyPairName'] = $keyPairName;
        $this->queryParameters['KeyPairName'] = $keyPairName;

        return $this;
    }

    /**
     * @param string $minAmount
     *
     * @return $this
     */
    public function setMinAmount($minAmount)
    {
        $this->requestParameters['MinAmount'] = $minAmount;
        $this->queryParameters['MinAmount'] = $minAmount;

        return $this;
    }

    /**
     * @param string $spotPriceLimit
     *
     * @return $this
     */
    public function setSpotPriceLimit($spotPriceLimit)
    {
        $this->requestParameters['SpotPriceLimit'] = $spotPriceLimit;
        $this->queryParameters['SpotPriceLimit'] = $spotPriceLimit;

        return $this;
    }

    /**
     * @param string $deletionProtection
     *
     * @return $this
     */
    public function setDeletionProtection($deletionProtection)
    {
        $this->requestParameters['DeletionProtection'] = $deletionProtection;
        $this->queryParameters['DeletionProtection'] = $deletionProtection;

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
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
    }

    /**
     * @param string $storageSetPartitionNumber
     *
     * @return $this
     */
    public function setStorageSetPartitionNumber($storageSetPartitionNumber)
    {
        $this->requestParameters['StorageSetPartitionNumber'] = $storageSetPartitionNumber;
        $this->queryParameters['StorageSetPartitionNumber'] = $storageSetPartitionNumber;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function setTags(array $tag)
	{
	    $this->requestParameters['Tags'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

		return $this;
    }

    /**
     * @param string $systemDiskAutoSnapshotPolicyId
     *
     * @return $this
     */
    public function setSystemDiskAutoSnapshotPolicyId($systemDiskAutoSnapshotPolicyId)
    {
        $this->requestParameters['SystemDiskAutoSnapshotPolicyId'] = $systemDiskAutoSnapshotPolicyId;
        $this->queryParameters['SystemDisk.AutoSnapshotPolicyId'] = $systemDiskAutoSnapshotPolicyId;

        return $this;
    }

    /**
     * @param string $autoRenewPeriod
     *
     * @return $this
     */
    public function setAutoRenewPeriod($autoRenewPeriod)
    {
        $this->requestParameters['AutoRenewPeriod'] = $autoRenewPeriod;
        $this->queryParameters['AutoRenewPeriod'] = $autoRenewPeriod;

        return $this;
    }

    /**
     * @param string $cpuOptionsCore
     *
     * @return $this
     */
    public function setCpuOptionsCore($cpuOptionsCore)
    {
        $this->requestParameters['CpuOptionsCore'] = $cpuOptionsCore;
        $this->queryParameters['CpuOptions.Core'] = $cpuOptionsCore;

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
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        $this->requestParameters['DryRun'] = $dryRun;
        $this->queryParameters['DryRun'] = $dryRun;

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
     * @param string $ipv6AddressCount
     *
     * @return $this
     */
    public function setIpv6AddressCount($ipv6AddressCount)
    {
        $this->requestParameters['Ipv6AddressCount'] = $ipv6AddressCount;
        $this->queryParameters['Ipv6AddressCount'] = $ipv6AddressCount;

        return $this;
    }

    /**
     * @param string $cpuOptionsNuma
     *
     * @return $this
     */
    public function setCpuOptionsNuma($cpuOptionsNuma)
    {
        $this->requestParameters['CpuOptionsNuma'] = $cpuOptionsNuma;
        $this->queryParameters['CpuOptions.Numa'] = $cpuOptionsNuma;

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
     * @param string $capacityReservationPreference
     *
     * @return $this
     */
    public function setCapacityReservationPreference($capacityReservationPreference)
    {
        $this->requestParameters['CapacityReservationPreference'] = $capacityReservationPreference;
        $this->queryParameters['CapacityReservationPreference'] = $capacityReservationPreference;

        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $spotStrategy
     *
     * @return $this
     */
    public function setSpotStrategy($spotStrategy)
    {
        $this->requestParameters['SpotStrategy'] = $spotStrategy;
        $this->queryParameters['SpotStrategy'] = $spotStrategy;

        return $this;
    }

    /**
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->requestParameters['PrivateIpAddress'] = $privateIpAddress;
        $this->queryParameters['PrivateIpAddress'] = $privateIpAddress;

        return $this;
    }

    /**
     * @param string $periodUnit
     *
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        $this->requestParameters['PeriodUnit'] = $periodUnit;
        $this->queryParameters['PeriodUnit'] = $periodUnit;

        return $this;
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        $this->requestParameters['AutoRenew'] = $autoRenew;
        $this->queryParameters['AutoRenew'] = $autoRenew;

        return $this;
    }

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        $this->requestParameters['InternetChargeType'] = $internetChargeType;
        $this->queryParameters['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
	public function setIpv6Addresss(array $ipv6Address)
	{
	    $this->requestParameters['Ipv6Addresss'] = $ipv6Address;
		foreach ($ipv6Address as $i => $iValue) {
			$this->queryParameters['Ipv6Address.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $internetMaxBandwidthIn
     *
     * @return $this
     */
    public function setInternetMaxBandwidthIn($internetMaxBandwidthIn)
    {
        $this->requestParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;
        $this->queryParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;

        return $this;
    }

    /**
     * @param string $affinity
     *
     * @return $this
     */
    public function setAffinity($affinity)
    {
        $this->requestParameters['Affinity'] = $affinity;
        $this->queryParameters['Affinity'] = $affinity;

        return $this;
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $spotInterruptionBehavior
     *
     * @return $this
     */
    public function setSpotInterruptionBehavior($spotInterruptionBehavior)
    {
        $this->requestParameters['SpotInterruptionBehavior'] = $spotInterruptionBehavior;
        $this->queryParameters['SpotInterruptionBehavior'] = $spotInterruptionBehavior;

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
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setIoOptimized($ioOptimized)
    {
        $this->requestParameters['IoOptimized'] = $ioOptimized;
        $this->queryParameters['IoOptimized'] = $ioOptimized;

        return $this;
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @param string $internetMaxBandwidthOut
     *
     * @return $this
     */
    public function setInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        $this->requestParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;
        $this->queryParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;

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
     * @param string $cpuOptionsThreadsPerCore
     *
     * @return $this
     */
    public function setCpuOptionsThreadsPerCore($cpuOptionsThreadsPerCore)
    {
        $this->requestParameters['CpuOptionsThreadsPerCore'] = $cpuOptionsThreadsPerCore;
        $this->queryParameters['CpuOptions.ThreadsPerCore'] = $cpuOptionsThreadsPerCore;

        return $this;
    }

    /**
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function setSystemDiskCategory($systemDiskCategory)
    {
        $this->requestParameters['SystemDiskCategory'] = $systemDiskCategory;
        $this->queryParameters['SystemDisk.Category'] = $systemDiskCategory;

        return $this;
    }

    /**
     * @param string $capacityReservationId
     *
     * @return $this
     */
    public function setCapacityReservationId($capacityReservationId)
    {
        $this->requestParameters['CapacityReservationId'] = $capacityReservationId;
        $this->queryParameters['CapacityReservationId'] = $capacityReservationId;

        return $this;
    }

    /**
     * @param string $systemDiskPerformanceLevel
     *
     * @return $this
     */
    public function setSystemDiskPerformanceLevel($systemDiskPerformanceLevel)
    {
        $this->requestParameters['SystemDiskPerformanceLevel'] = $systemDiskPerformanceLevel;
        $this->queryParameters['SystemDisk.PerformanceLevel'] = $systemDiskPerformanceLevel;

        return $this;
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

        return $this;
    }

    /**
     * @param string $passwordInherit
     *
     * @return $this
     */
    public function setPasswordInherit($passwordInherit)
    {
        $this->requestParameters['PasswordInherit'] = $passwordInherit;
        $this->queryParameters['PasswordInherit'] = $passwordInherit;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $hibernationConfigured
     *
     * @return $this
     */
    public function setHibernationConfigured($hibernationConfigured)
    {
        $this->requestParameters['HibernationConfigured'] = $hibernationConfigured;
        $this->queryParameters['HibernationConfigured'] = $hibernationConfigured;

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
     * @param array $networkInterface
     *
     * @return $this
     */
	public function setNetworkInterfaces(array $networkInterface)
	{
	    $this->requestParameters['NetworkInterfaces'] = $networkInterface;
		foreach ($networkInterface as $depth1 => $depth1Value) {
			$this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.PrimaryIpAddress'] = $depth1Value['PrimaryIpAddress'];
			$this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			$this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
			$this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.NetworkInterfaceName'] = $depth1Value['NetworkInterfaceName'];
			$this->queryParameters['NetworkInterface.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
		}

		return $this;
    }

    /**
     * @param string $deploymentSetId
     *
     * @return $this
     */
    public function setDeploymentSetId($deploymentSetId)
    {
        $this->requestParameters['DeploymentSetId'] = $deploymentSetId;
        $this->queryParameters['DeploymentSetId'] = $deploymentSetId;

        return $this;
    }

    /**
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->requestParameters['Amount'] = $amount;
        $this->queryParameters['Amount'] = $amount;

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
     * @param string $tenancy
     *
     * @return $this
     */
    public function setTenancy($tenancy)
    {
        $this->requestParameters['Tenancy'] = $tenancy;
        $this->queryParameters['Tenancy'] = $tenancy;

        return $this;
    }

    /**
     * @param string $systemDiskDiskName
     *
     * @return $this
     */
    public function setSystemDiskDiskName($systemDiskDiskName)
    {
        $this->requestParameters['SystemDiskDiskName'] = $systemDiskDiskName;
        $this->queryParameters['SystemDisk.DiskName'] = $systemDiskDiskName;

        return $this;
    }

    /**
     * @param string $ramRoleName
     *
     * @return $this
     */
    public function setRamRoleName($ramRoleName)
    {
        $this->requestParameters['RamRoleName'] = $ramRoleName;
        $this->queryParameters['RamRoleName'] = $ramRoleName;

        return $this;
    }

    /**
     * @param string $autoReleaseTime
     *
     * @return $this
     */
    public function setAutoReleaseTime($autoReleaseTime)
    {
        $this->requestParameters['AutoReleaseTime'] = $autoReleaseTime;
        $this->queryParameters['AutoReleaseTime'] = $autoReleaseTime;

        return $this;
    }

    /**
     * @param string $dedicatedHostId
     *
     * @return $this
     */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->requestParameters['DedicatedHostId'] = $dedicatedHostId;
        $this->queryParameters['DedicatedHostId'] = $dedicatedHostId;

        return $this;
    }

    /**
     * @param string $creditSpecification
     *
     * @return $this
     */
    public function setCreditSpecification($creditSpecification)
    {
        $this->requestParameters['CreditSpecification'] = $creditSpecification;
        $this->queryParameters['CreditSpecification'] = $creditSpecification;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function setSecurityGroupIdss(array $securityGroupIds)
	{
	    $this->requestParameters['SecurityGroupIdss'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->queryParameters['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $spotDuration
     *
     * @return $this
     */
    public function setSpotDuration($spotDuration)
    {
        $this->requestParameters['SpotDuration'] = $spotDuration;
        $this->queryParameters['SpotDuration'] = $spotDuration;

        return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
	public function setDataDisks(array $dataDisk)
	{
	    $this->requestParameters['DataDisks'] = $dataDisk;
		foreach ($dataDisk as $depth1 => $depth1Value) {
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.KMSKeyId'] = $depth1Value['KMSKeyId'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.PerformanceLevel'] = $depth1Value['PerformanceLevel'];
			$this->queryParameters['DataDisk.' . ($depth1 + 1) . '.AutoSnapshotPolicyId'] = $depth1Value['AutoSnapshotPolicyId'];
		}

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
     * @param string $storageSetId
     *
     * @return $this
     */
    public function setStorageSetId($storageSetId)
    {
        $this->requestParameters['StorageSetId'] = $storageSetId;
        $this->queryParameters['StorageSetId'] = $storageSetId;

        return $this;
    }

    /**
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        $this->requestParameters['SystemDiskSize'] = $systemDiskSize;
        $this->queryParameters['SystemDisk.Size'] = $systemDiskSize;

        return $this;
    }

    /**
     * @param string $systemDiskDescription
     *
     * @return $this
     */
    public function setSystemDiskDescription($systemDiskDescription)
    {
        $this->requestParameters['SystemDiskDescription'] = $systemDiskDescription;
        $this->queryParameters['SystemDisk.Description'] = $systemDiskDescription;

        return $this;
    }
}
