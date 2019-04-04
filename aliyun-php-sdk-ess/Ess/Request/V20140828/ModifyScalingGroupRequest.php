<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyScalingGroup
 *
 * @method string getResourceOwnerId()
 * @method string getHealthCheckType()
 * @method string getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupName()
 * @method string getScalingGroupId()
 * @method array getVSwitchIds()
 * @method string getOwnerAccount()
 * @method string getActiveScalingConfigurationId()
 * @method string getMinSize()
 * @method string getOwnerId()
 * @method string getLaunchTemplateVersion()
 * @method string getMaxSize()
 * @method string getDefaultCooldown()
 * @method string getRemovalPolicy1()
 * @method string getRemovalPolicy2()
 */
class ModifyScalingGroupRequest extends \RpcAcsRequest
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
            'ModifyScalingGroup',
            'ess'
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
     * @param string $healthCheckType
     *
     * @return $this
     */
    public function setHealthCheckType($healthCheckType)
    {
        $this->requestParameters['HealthCheckType'] = $healthCheckType;
        $this->queryParameters['HealthCheckType'] = $healthCheckType;

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
     * @param string $scalingGroupName
     *
     * @return $this
     */
    public function setScalingGroupName($scalingGroupName)
    {
        $this->requestParameters['ScalingGroupName'] = $scalingGroupName;
        $this->queryParameters['ScalingGroupName'] = $scalingGroupName;

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
     * @param array $vSwitchIds
     *
     * @return $this
     */
    public function setVSwitchIds(array $vSwitchIds)
    {
        $this->requestParameters['VSwitchIds'] = $vSwitchIds;
        foreach ($vSwitchIds as $i => $iValue) {
            $this->queryParameters['VSwitchIds.' . ($i + 1)] = $iValue;
        }

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
     * @param string $activeScalingConfigurationId
     *
     * @return $this
     */
    public function setActiveScalingConfigurationId($activeScalingConfigurationId)
    {
        $this->requestParameters['ActiveScalingConfigurationId'] = $activeScalingConfigurationId;
        $this->queryParameters['ActiveScalingConfigurationId'] = $activeScalingConfigurationId;

        return $this;
    }

    /**
     * @param string $minSize
     *
     * @return $this
     */
    public function setMinSize($minSize)
    {
        $this->requestParameters['MinSize'] = $minSize;
        $this->queryParameters['MinSize'] = $minSize;

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
     * @param string $maxSize
     *
     * @return $this
     */
    public function setMaxSize($maxSize)
    {
        $this->requestParameters['MaxSize'] = $maxSize;
        $this->queryParameters['MaxSize'] = $maxSize;

        return $this;
    }

    /**
     * @param string $defaultCooldown
     *
     * @return $this
     */
    public function setDefaultCooldown($defaultCooldown)
    {
        $this->requestParameters['DefaultCooldown'] = $defaultCooldown;
        $this->queryParameters['DefaultCooldown'] = $defaultCooldown;

        return $this;
    }

    /**
     * @param string $removalPolicy1
     *
     * @return $this
     */
    public function setRemovalPolicy1($removalPolicy1)
    {
        $this->requestParameters['RemovalPolicy1'] = $removalPolicy1;
        $this->queryParameters['RemovalPolicy.1'] = $removalPolicy1;

        return $this;
    }

    /**
     * @param string $removalPolicy2
     *
     * @return $this
     */
    public function setRemovalPolicy2($removalPolicy2)
    {
        $this->requestParameters['RemovalPolicy2'] = $removalPolicy2;
        $this->queryParameters['RemovalPolicy.2'] = $removalPolicy2;

        return $this;
    }
}
