<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeScalingInstances
 *
 * @method string getInstanceId10()
 * @method string getResourceOwnerId()
 * @method string getInstanceId12()
 * @method string getInstanceId11()
 * @method string getScalingGroupId()
 * @method string getLifecycleState()
 * @method string getCreationType()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getInstanceId20()
 * @method string getInstanceId1()
 * @method string getInstanceId3()
 * @method string getResourceOwnerAccount()
 * @method string getInstanceId2()
 * @method string getInstanceId5()
 * @method string getInstanceId4()
 * @method string getOwnerAccount()
 * @method string getInstanceId7()
 * @method string getInstanceId6()
 * @method string getInstanceId9()
 * @method string getInstanceId8()
 * @method string getOwnerId()
 * @method string getScalingConfigurationId()
 * @method string getHealthStatus()
 * @method string getInstanceId18()
 * @method string getInstanceId17()
 * @method string getInstanceId19()
 * @method string getInstanceId14()
 * @method string getInstanceId13()
 * @method string getInstanceId16()
 * @method string getInstanceId15()
 */
class DescribeScalingInstancesRequest extends \RpcAcsRequest
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
            'DescribeScalingInstances',
            'ess'
        );
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
     * @param string $lifecycleState
     *
     * @return $this
     */
    public function setLifecycleState($lifecycleState)
    {
        $this->requestParameters['LifecycleState'] = $lifecycleState;
        $this->queryParameters['LifecycleState'] = $lifecycleState;

        return $this;
    }

    /**
     * @param string $creationType
     *
     * @return $this
     */
    public function setCreationType($creationType)
    {
        $this->requestParameters['CreationType'] = $creationType;
        $this->queryParameters['CreationType'] = $creationType;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

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
     * @param string $scalingConfigurationId
     *
     * @return $this
     */
    public function setScalingConfigurationId($scalingConfigurationId)
    {
        $this->requestParameters['ScalingConfigurationId'] = $scalingConfigurationId;
        $this->queryParameters['ScalingConfigurationId'] = $scalingConfigurationId;

        return $this;
    }

    /**
     * @param string $healthStatus
     *
     * @return $this
     */
    public function setHealthStatus($healthStatus)
    {
        $this->requestParameters['HealthStatus'] = $healthStatus;
        $this->queryParameters['HealthStatus'] = $healthStatus;

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
