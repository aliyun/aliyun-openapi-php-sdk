<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateScalingConfiguration
 *
 * @method string getImageId()
 * @method string getMemory()
 * @method string getScalingGroupId()
 * @method array getInstanceTypes()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getInternetMaxBandwidthOut()
 * @method string getSecurityEnhancementStrategy()
 * @method string getKeyPairName()
 * @method array getSpotPriceLimits()
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method string getResourceGroupId()
 * @method string getHostName()
 * @method string getPassword()
 * @method string getPasswordInherit()
 * @method string getImageName()
 * @method string getInstanceType()
 * @method string getDeploymentSetId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getCpu()
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method string getOwnerId()
 * @method array getDataDisks()
 * @method string getScalingConfigurationName()
 * @method string getTags()
 * @method string getSpotStrategy()
 * @method string getLoadBalancerWeight()
 * @method string getInstanceName()
 * @method string getSystemDiskSize()
 * @method string getInternetChargeType()
 * @method string getInternetMaxBandwidthIn()
 * @method string getSystemDiskDescription()
 */
class CreateScalingConfigurationRequest extends \RpcAcsRequest
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
            'Ess',
            '2014-08-28',
            'CreateScalingConfiguration',
            'ess'
        );
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
     * @param string $memory
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->requestParameters['Memory'] = $memory;
        $this->queryParameters['Memory'] = $memory;

        return $this;
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->requestParameters['ScalingGroupId'] = $scalingGroupId;
        $this->queryParameters['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
    public function setInstanceTypes(array $instanceTypes)
    {
        $this->requestParameters['InstanceTypes'] = $instanceTypes;
        foreach ($instanceTypes as $i => $iValue) {
            $this->queryParameters['InstanceTypes.' . ($i + 1)] = $iValue;
        }

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
     * @param array $spotPriceLimit
     *
     * @return $this
     */
    public function setSpotPriceLimits(array $spotPriceLimit)
    {
        $this->requestParameters['SpotPriceLimits'] = $spotPriceLimit;
        foreach ($spotPriceLimit as $depth1 => $depth1Value) {
            $this->queryParameters['SpotPriceLimit.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->queryParameters['SpotPriceLimit.' . ($depth1 + 1) . '.PriceLimit'] = $depth1Value['PriceLimit'];
        }

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
     * @param string $imageName
     *
     * @return $this
     */
    public function setImageName($imageName)
    {
        $this->requestParameters['ImageName'] = $imageName;
        $this->queryParameters['ImageName'] = $imageName;

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
     * @param string $cpu
     *
     * @return $this
     */
    public function setCpu($cpu)
    {
        $this->requestParameters['Cpu'] = $cpu;
        $this->queryParameters['Cpu'] = $cpu;

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
     * @param array $dataDisk
     *
     * @return $this
     */
    public function setDataDisks(array $dataDisk)
    {
        $this->requestParameters['DataDisks'] = $dataDisk;
        foreach ($dataDisk as $depth1 => $depth1Value) {
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.DiskName'] = $depth1Value['DiskName'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.SnapshotId'] = $depth1Value['SnapshotId'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Size'] = $depth1Value['Size'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Encrypted'] = $depth1Value['Encrypted'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.KMSKeyId'] = $depth1Value['KMSKeyId'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.Device'] = $depth1Value['Device'];
            $this->queryParameters['DataDisk.' . ($depth1 + 1) . '.DeleteWithInstance'] = $depth1Value['DeleteWithInstance'];
        }

        return $this;
    }

    /**
     * @param string $scalingConfigurationName
     *
     * @return $this
     */
    public function setScalingConfigurationName($scalingConfigurationName)
    {
        $this->requestParameters['ScalingConfigurationName'] = $scalingConfigurationName;
        $this->queryParameters['ScalingConfigurationName'] = $scalingConfigurationName;

        return $this;
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->requestParameters['Tags'] = $tags;
        $this->queryParameters['Tags'] = $tags;

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
     * @param string $loadBalancerWeight
     *
     * @return $this
     */
    public function setLoadBalancerWeight($loadBalancerWeight)
    {
        $this->requestParameters['LoadBalancerWeight'] = $loadBalancerWeight;
        $this->queryParameters['LoadBalancerWeight'] = $loadBalancerWeight;

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
