<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddNodes
 *
 * @method string getAutoRenewPeriod()
 * @method string getPeriod()
 * @method string getImageId()
 * @method string getCount()
 * @method string getClusterId()
 * @method string getComputeSpotStrategy()
 * @method string getJobQueue()
 * @method string getImageOwnerAlias()
 * @method string getVSwitchId()
 * @method string getPeriodUnit()
 * @method string getAutoRenew()
 * @method string getEcsChargeType()
 * @method string getCreateMode()
 * @method string getSystemDiskSize()
 * @method string getInstanceType()
 * @method string getZoneId()
 * @method string getComputeSpotPriceLimit()
 */
class AddNodesRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'AddNodes',
            'ehs'
        );
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
     * @param string $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->requestParameters['Count'] = $count;
        $this->queryParameters['Count'] = $count;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $computeSpotStrategy
     *
     * @return $this
     */
    public function setComputeSpotStrategy($computeSpotStrategy)
    {
        $this->requestParameters['ComputeSpotStrategy'] = $computeSpotStrategy;
        $this->queryParameters['ComputeSpotStrategy'] = $computeSpotStrategy;

        return $this;
    }

    /**
     * @param string $jobQueue
     *
     * @return $this
     */
    public function setJobQueue($jobQueue)
    {
        $this->requestParameters['JobQueue'] = $jobQueue;
        $this->queryParameters['JobQueue'] = $jobQueue;

        return $this;
    }

    /**
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        $this->requestParameters['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->queryParameters['ImageOwnerAlias'] = $imageOwnerAlias;

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
     * @param string $ecsChargeType
     *
     * @return $this
     */
    public function setEcsChargeType($ecsChargeType)
    {
        $this->requestParameters['EcsChargeType'] = $ecsChargeType;
        $this->queryParameters['EcsChargeType'] = $ecsChargeType;

        return $this;
    }

    /**
     * @param string $createMode
     *
     * @return $this
     */
    public function setCreateMode($createMode)
    {
        $this->requestParameters['CreateMode'] = $createMode;
        $this->queryParameters['CreateMode'] = $createMode;

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
        $this->queryParameters['SystemDiskSize'] = $systemDiskSize;

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
     * @param string $computeSpotPriceLimit
     *
     * @return $this
     */
    public function setComputeSpotPriceLimit($computeSpotPriceLimit)
    {
        $this->requestParameters['ComputeSpotPriceLimit'] = $computeSpotPriceLimit;
        $this->queryParameters['ComputeSpotPriceLimit'] = $computeSpotPriceLimit;

        return $this;
    }
}
