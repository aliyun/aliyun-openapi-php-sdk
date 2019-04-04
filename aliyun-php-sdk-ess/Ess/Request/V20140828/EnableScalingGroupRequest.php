<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of EnableScalingGroup
 *
 * @method string getLoadBalancerWeight6()
 * @method string getLoadBalancerWeight11()
 * @method string getLoadBalancerWeight7()
 * @method string getLoadBalancerWeight12()
 * @method string getResourceOwnerId()
 * @method string getLoadBalancerWeight8()
 * @method string getLoadBalancerWeight9()
 * @method string getLoadBalancerWeight10()
 * @method string getLoadBalancerWeight2()
 * @method string getLoadBalancerWeight15()
 * @method string getLoadBalancerWeight3()
 * @method string getLoadBalancerWeight16()
 * @method string getLoadBalancerWeight4()
 * @method string getLoadBalancerWeight13()
 * @method string getLoadBalancerWeight5()
 * @method string getLoadBalancerWeight14()
 * @method string getActiveScalingConfigurationId()
 * @method string getLoadBalancerWeight1()
 * @method string getInstanceId1()
 * @method string getLoadBalancerWeight20()
 * @method string getInstanceId3()
 * @method string getLaunchTemplateId()
 * @method string getInstanceId2()
 * @method string getInstanceId5()
 * @method string getInstanceId4()
 * @method string getInstanceId7()
 * @method string getInstanceId6()
 * @method string getInstanceId9()
 * @method string getInstanceId8()
 * @method string getOwnerId()
 * @method string getLoadBalancerWeight19()
 * @method string getLoadBalancerWeight17()
 * @method string getLoadBalancerWeight18()
 * @method string getInstanceId10()
 * @method string getInstanceId12()
 * @method string getInstanceId11()
 * @method string getScalingGroupId()
 * @method string getInstanceId20()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getLaunchTemplateVersion()
 * @method string getInstanceId18()
 * @method string getInstanceId17()
 * @method string getInstanceId19()
 * @method string getInstanceId14()
 * @method string getInstanceId13()
 * @method string getInstanceId16()
 * @method string getInstanceId15()
 */
class EnableScalingGroupRequest extends \RpcAcsRequest
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
            'EnableScalingGroup',
            'ess'
        );
    }

    /**
     * @param string $loadBalancerWeight6
     *
     * @return $this
     */
    public function setLoadBalancerWeight6($loadBalancerWeight6)
    {
        $this->requestParameters['LoadBalancerWeight6'] = $loadBalancerWeight6;
        $this->queryParameters['LoadBalancerWeight.6'] = $loadBalancerWeight6;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight11
     *
     * @return $this
     */
    public function setLoadBalancerWeight11($loadBalancerWeight11)
    {
        $this->requestParameters['LoadBalancerWeight11'] = $loadBalancerWeight11;
        $this->queryParameters['LoadBalancerWeight.11'] = $loadBalancerWeight11;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight7
     *
     * @return $this
     */
    public function setLoadBalancerWeight7($loadBalancerWeight7)
    {
        $this->requestParameters['LoadBalancerWeight7'] = $loadBalancerWeight7;
        $this->queryParameters['LoadBalancerWeight.7'] = $loadBalancerWeight7;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight12
     *
     * @return $this
     */
    public function setLoadBalancerWeight12($loadBalancerWeight12)
    {
        $this->requestParameters['LoadBalancerWeight12'] = $loadBalancerWeight12;
        $this->queryParameters['LoadBalancerWeight.12'] = $loadBalancerWeight12;

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
     * @param string $loadBalancerWeight8
     *
     * @return $this
     */
    public function setLoadBalancerWeight8($loadBalancerWeight8)
    {
        $this->requestParameters['LoadBalancerWeight8'] = $loadBalancerWeight8;
        $this->queryParameters['LoadBalancerWeight.8'] = $loadBalancerWeight8;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight9
     *
     * @return $this
     */
    public function setLoadBalancerWeight9($loadBalancerWeight9)
    {
        $this->requestParameters['LoadBalancerWeight9'] = $loadBalancerWeight9;
        $this->queryParameters['LoadBalancerWeight.9'] = $loadBalancerWeight9;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight10
     *
     * @return $this
     */
    public function setLoadBalancerWeight10($loadBalancerWeight10)
    {
        $this->requestParameters['LoadBalancerWeight10'] = $loadBalancerWeight10;
        $this->queryParameters['LoadBalancerWeight.10'] = $loadBalancerWeight10;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight2
     *
     * @return $this
     */
    public function setLoadBalancerWeight2($loadBalancerWeight2)
    {
        $this->requestParameters['LoadBalancerWeight2'] = $loadBalancerWeight2;
        $this->queryParameters['LoadBalancerWeight.2'] = $loadBalancerWeight2;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight15
     *
     * @return $this
     */
    public function setLoadBalancerWeight15($loadBalancerWeight15)
    {
        $this->requestParameters['LoadBalancerWeight15'] = $loadBalancerWeight15;
        $this->queryParameters['LoadBalancerWeight.15'] = $loadBalancerWeight15;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight3
     *
     * @return $this
     */
    public function setLoadBalancerWeight3($loadBalancerWeight3)
    {
        $this->requestParameters['LoadBalancerWeight3'] = $loadBalancerWeight3;
        $this->queryParameters['LoadBalancerWeight.3'] = $loadBalancerWeight3;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight16
     *
     * @return $this
     */
    public function setLoadBalancerWeight16($loadBalancerWeight16)
    {
        $this->requestParameters['LoadBalancerWeight16'] = $loadBalancerWeight16;
        $this->queryParameters['LoadBalancerWeight.16'] = $loadBalancerWeight16;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight4
     *
     * @return $this
     */
    public function setLoadBalancerWeight4($loadBalancerWeight4)
    {
        $this->requestParameters['LoadBalancerWeight4'] = $loadBalancerWeight4;
        $this->queryParameters['LoadBalancerWeight.4'] = $loadBalancerWeight4;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight13
     *
     * @return $this
     */
    public function setLoadBalancerWeight13($loadBalancerWeight13)
    {
        $this->requestParameters['LoadBalancerWeight13'] = $loadBalancerWeight13;
        $this->queryParameters['LoadBalancerWeight.13'] = $loadBalancerWeight13;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight5
     *
     * @return $this
     */
    public function setLoadBalancerWeight5($loadBalancerWeight5)
    {
        $this->requestParameters['LoadBalancerWeight5'] = $loadBalancerWeight5;
        $this->queryParameters['LoadBalancerWeight.5'] = $loadBalancerWeight5;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight14
     *
     * @return $this
     */
    public function setLoadBalancerWeight14($loadBalancerWeight14)
    {
        $this->requestParameters['LoadBalancerWeight14'] = $loadBalancerWeight14;
        $this->queryParameters['LoadBalancerWeight.14'] = $loadBalancerWeight14;

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
     * @param string $loadBalancerWeight1
     *
     * @return $this
     */
    public function setLoadBalancerWeight1($loadBalancerWeight1)
    {
        $this->requestParameters['LoadBalancerWeight1'] = $loadBalancerWeight1;
        $this->queryParameters['LoadBalancerWeight.1'] = $loadBalancerWeight1;

        return $this;
    }

    /**
     * @param string $instanceId1
     *
     * @return $this
     */
    public function setInstanceId1($instanceId1)
    {
        $this->requestParameters['InstanceId1'] = $instanceId1;
        $this->queryParameters['InstanceId.1'] = $instanceId1;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight20
     *
     * @return $this
     */
    public function setLoadBalancerWeight20($loadBalancerWeight20)
    {
        $this->requestParameters['LoadBalancerWeight20'] = $loadBalancerWeight20;
        $this->queryParameters['LoadBalancerWeight.20'] = $loadBalancerWeight20;

        return $this;
    }

    /**
     * @param string $instanceId3
     *
     * @return $this
     */
    public function setInstanceId3($instanceId3)
    {
        $this->requestParameters['InstanceId3'] = $instanceId3;
        $this->queryParameters['InstanceId.3'] = $instanceId3;

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
     * @param string $instanceId2
     *
     * @return $this
     */
    public function setInstanceId2($instanceId2)
    {
        $this->requestParameters['InstanceId2'] = $instanceId2;
        $this->queryParameters['InstanceId.2'] = $instanceId2;

        return $this;
    }

    /**
     * @param string $instanceId5
     *
     * @return $this
     */
    public function setInstanceId5($instanceId5)
    {
        $this->requestParameters['InstanceId5'] = $instanceId5;
        $this->queryParameters['InstanceId.5'] = $instanceId5;

        return $this;
    }

    /**
     * @param string $instanceId4
     *
     * @return $this
     */
    public function setInstanceId4($instanceId4)
    {
        $this->requestParameters['InstanceId4'] = $instanceId4;
        $this->queryParameters['InstanceId.4'] = $instanceId4;

        return $this;
    }

    /**
     * @param string $instanceId7
     *
     * @return $this
     */
    public function setInstanceId7($instanceId7)
    {
        $this->requestParameters['InstanceId7'] = $instanceId7;
        $this->queryParameters['InstanceId.7'] = $instanceId7;

        return $this;
    }

    /**
     * @param string $instanceId6
     *
     * @return $this
     */
    public function setInstanceId6($instanceId6)
    {
        $this->requestParameters['InstanceId6'] = $instanceId6;
        $this->queryParameters['InstanceId.6'] = $instanceId6;

        return $this;
    }

    /**
     * @param string $instanceId9
     *
     * @return $this
     */
    public function setInstanceId9($instanceId9)
    {
        $this->requestParameters['InstanceId9'] = $instanceId9;
        $this->queryParameters['InstanceId.9'] = $instanceId9;

        return $this;
    }

    /**
     * @param string $instanceId8
     *
     * @return $this
     */
    public function setInstanceId8($instanceId8)
    {
        $this->requestParameters['InstanceId8'] = $instanceId8;
        $this->queryParameters['InstanceId.8'] = $instanceId8;

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
     * @param string $loadBalancerWeight19
     *
     * @return $this
     */
    public function setLoadBalancerWeight19($loadBalancerWeight19)
    {
        $this->requestParameters['LoadBalancerWeight19'] = $loadBalancerWeight19;
        $this->queryParameters['LoadBalancerWeight.19'] = $loadBalancerWeight19;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight17
     *
     * @return $this
     */
    public function setLoadBalancerWeight17($loadBalancerWeight17)
    {
        $this->requestParameters['LoadBalancerWeight17'] = $loadBalancerWeight17;
        $this->queryParameters['LoadBalancerWeight.17'] = $loadBalancerWeight17;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight18
     *
     * @return $this
     */
    public function setLoadBalancerWeight18($loadBalancerWeight18)
    {
        $this->requestParameters['LoadBalancerWeight18'] = $loadBalancerWeight18;
        $this->queryParameters['LoadBalancerWeight.18'] = $loadBalancerWeight18;

        return $this;
    }

    /**
     * @param string $instanceId10
     *
     * @return $this
     */
    public function setInstanceId10($instanceId10)
    {
        $this->requestParameters['InstanceId10'] = $instanceId10;
        $this->queryParameters['InstanceId.10'] = $instanceId10;

        return $this;
    }

    /**
     * @param string $instanceId12
     *
     * @return $this
     */
    public function setInstanceId12($instanceId12)
    {
        $this->requestParameters['InstanceId12'] = $instanceId12;
        $this->queryParameters['InstanceId.12'] = $instanceId12;

        return $this;
    }

    /**
     * @param string $instanceId11
     *
     * @return $this
     */
    public function setInstanceId11($instanceId11)
    {
        $this->requestParameters['InstanceId11'] = $instanceId11;
        $this->queryParameters['InstanceId.11'] = $instanceId11;

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
     * @param string $instanceId20
     *
     * @return $this
     */
    public function setInstanceId20($instanceId20)
    {
        $this->requestParameters['InstanceId20'] = $instanceId20;
        $this->queryParameters['InstanceId.20'] = $instanceId20;

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
     * @param string $instanceId18
     *
     * @return $this
     */
    public function setInstanceId18($instanceId18)
    {
        $this->requestParameters['InstanceId18'] = $instanceId18;
        $this->queryParameters['InstanceId.18'] = $instanceId18;

        return $this;
    }

    /**
     * @param string $instanceId17
     *
     * @return $this
     */
    public function setInstanceId17($instanceId17)
    {
        $this->requestParameters['InstanceId17'] = $instanceId17;
        $this->queryParameters['InstanceId.17'] = $instanceId17;

        return $this;
    }

    /**
     * @param string $instanceId19
     *
     * @return $this
     */
    public function setInstanceId19($instanceId19)
    {
        $this->requestParameters['InstanceId19'] = $instanceId19;
        $this->queryParameters['InstanceId.19'] = $instanceId19;

        return $this;
    }

    /**
     * @param string $instanceId14
     *
     * @return $this
     */
    public function setInstanceId14($instanceId14)
    {
        $this->requestParameters['InstanceId14'] = $instanceId14;
        $this->queryParameters['InstanceId.14'] = $instanceId14;

        return $this;
    }

    /**
     * @param string $instanceId13
     *
     * @return $this
     */
    public function setInstanceId13($instanceId13)
    {
        $this->requestParameters['InstanceId13'] = $instanceId13;
        $this->queryParameters['InstanceId.13'] = $instanceId13;

        return $this;
    }

    /**
     * @param string $instanceId16
     *
     * @return $this
     */
    public function setInstanceId16($instanceId16)
    {
        $this->requestParameters['InstanceId16'] = $instanceId16;
        $this->queryParameters['InstanceId.16'] = $instanceId16;

        return $this;
    }

    /**
     * @param string $instanceId15
     *
     * @return $this
     */
    public function setInstanceId15($instanceId15)
    {
        $this->requestParameters['InstanceId15'] = $instanceId15;
        $this->queryParameters['InstanceId.15'] = $instanceId15;

        return $this;
    }
}
