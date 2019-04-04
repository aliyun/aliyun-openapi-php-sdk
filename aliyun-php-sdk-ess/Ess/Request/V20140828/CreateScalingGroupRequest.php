<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateScalingGroup
 *
 * @method string getMultiAZPolicy()
 * @method string getDBInstanceIds()
 * @method string getLaunchTemplateId()
 * @method string getLoadBalancerIds()
 * @method string getHealthCheckType()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupName()
 * @method string getClientToken()
 * @method array getVSwitchIds()
 * @method string getOwnerAccount()
 * @method string getMinSize()
 * @method string getOwnerId()
 * @method string getLaunchTemplateVersion()
 * @method string getScalingPolicy()
 * @method string getVSwitchId()
 * @method string getMaxSize()
 * @method array getLifecycleHooks()
 * @method string getDefaultCooldown()
 * @method string getRemovalPolicy1()
 * @method array getVServerGroups()
 * @method string getRemovalPolicy2()
 */
class CreateScalingGroupRequest extends \RpcAcsRequest
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
            'CreateScalingGroup',
            'ess'
        );
    }

    /**
     * @param string $multiAZPolicy
     *
     * @return $this
     */
    public function setMultiAZPolicy($multiAZPolicy)
    {
        $this->requestParameters['MultiAZPolicy'] = $multiAZPolicy;
        $this->queryParameters['MultiAZPolicy'] = $multiAZPolicy;

        return $this;
    }

    /**
     * @param string $dBInstanceIds
     *
     * @return $this
     */
    public function setDBInstanceIds($dBInstanceIds)
    {
        $this->requestParameters['DBInstanceIds'] = $dBInstanceIds;
        $this->queryParameters['DBInstanceIds'] = $dBInstanceIds;

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
     * @param string $loadBalancerIds
     *
     * @return $this
     */
    public function setLoadBalancerIds($loadBalancerIds)
    {
        $this->requestParameters['LoadBalancerIds'] = $loadBalancerIds;
        $this->queryParameters['LoadBalancerIds'] = $loadBalancerIds;

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
     * @param string $scalingPolicy
     *
     * @return $this
     */
    public function setScalingPolicy($scalingPolicy)
    {
        $this->requestParameters['ScalingPolicy'] = $scalingPolicy;
        $this->queryParameters['ScalingPolicy'] = $scalingPolicy;

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
     * @param array $lifecycleHook
     *
     * @return $this
     */
    public function setLifecycleHooks(array $lifecycleHook)
    {
        $this->requestParameters['LifecycleHooks'] = $lifecycleHook;
        foreach ($lifecycleHook as $depth1 => $depth1Value) {
            $this->queryParameters['LifecycleHook.' . ($depth1 + 1) . '.DefaultResult'] = $depth1Value['DefaultResult'];
            $this->queryParameters['LifecycleHook.' . ($depth1 + 1) . '.LifecycleHookName'] = $depth1Value['LifecycleHookName'];
            $this->queryParameters['LifecycleHook.' . ($depth1 + 1) . '.HeartbeatTimeout'] = $depth1Value['HeartbeatTimeout'];
            $this->queryParameters['LifecycleHook.' . ($depth1 + 1) . '.NotificationArn'] = $depth1Value['NotificationArn'];
            $this->queryParameters['LifecycleHook.' . ($depth1 + 1) . '.NotificationMetadata'] = $depth1Value['NotificationMetadata'];
            $this->queryParameters['LifecycleHook.' . ($depth1 + 1) . '.LifecycleTransition'] = $depth1Value['LifecycleTransition'];
        }

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
     * @param array $vServerGroup
     *
     * @return $this
     */
    public function setVServerGroups(array $vServerGroup)
    {
        $this->requestParameters['VServerGroups'] = $vServerGroup;
        foreach ($vServerGroup as $depth1 => $depth1Value) {
            $this->queryParameters['VServerGroup.' . ($depth1 + 1) . '.LoadBalancerId'] = $depth1Value['LoadBalancerId'];
            foreach ($depth1Value['VServerGroupAttribute'] as $depth2 => $depth2Value) {
                $this->queryParameters['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.VServerGroupId'] = $depth2Value['VServerGroupId'];
                $this->queryParameters['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.Port'] = $depth2Value['Port'];
                $this->queryParameters['VServerGroup.' . ($depth1 + 1) . '.VServerGroupAttribute.' . ($depth2 + 1) . '.Weight'] = $depth2Value['Weight'];
            }
        }

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
