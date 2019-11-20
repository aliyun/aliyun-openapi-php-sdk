<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRecommendInstanceType
 *
 * @method string getResourceOwnerId()
 * @method string getInstancePpsRx()
 * @method string getMemory()
 * @method string getInstancePpsTx()
 * @method string getIoOptimized()
 * @method string getNetworkType()
 * @method string getScene()
 * @method string getInstanceBandwidthTx()
 * @method string getCores()
 * @method string getInstanceBandwidthRx()
 * @method string getSystemDiskCategory()
 * @method string getInstanceType()
 * @method string getInstanceChargeType()
 * @method string getMaxPrice()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method array getInstanceTypeFamilys()
 * @method string getOwnerId()
 * @method string getSpotStrategy()
 * @method string getPriorityStrategy()
 * @method string getInstanceFamilyLevel()
 * @method string getZoneId()
 */
class DescribeRecommendInstanceTypeRequest extends \RpcAcsRequest
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
            'DescribeRecommendInstanceType',
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
     * @param string $instancePpsRx
     *
     * @return $this
     */
    public function setInstancePpsRx($instancePpsRx)
    {
        $this->requestParameters['InstancePpsRx'] = $instancePpsRx;
        $this->queryParameters['InstancePpsRx'] = $instancePpsRx;

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
     * @param string $instancePpsTx
     *
     * @return $this
     */
    public function setInstancePpsTx($instancePpsTx)
    {
        $this->requestParameters['InstancePpsTx'] = $instancePpsTx;
        $this->queryParameters['InstancePpsTx'] = $instancePpsTx;

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
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        $this->requestParameters['Scene'] = $scene;
        $this->queryParameters['Scene'] = $scene;

        return $this;
    }

    /**
     * @param string $instanceBandwidthTx
     *
     * @return $this
     */
    public function setInstanceBandwidthTx($instanceBandwidthTx)
    {
        $this->requestParameters['InstanceBandwidthTx'] = $instanceBandwidthTx;
        $this->queryParameters['InstanceBandwidthTx'] = $instanceBandwidthTx;

        return $this;
    }

    /**
     * @param string $cores
     *
     * @return $this
     */
    public function setCores($cores)
    {
        $this->requestParameters['Cores'] = $cores;
        $this->queryParameters['Cores'] = $cores;

        return $this;
    }

    /**
     * @param string $instanceBandwidthRx
     *
     * @return $this
     */
    public function setInstanceBandwidthRx($instanceBandwidthRx)
    {
        $this->requestParameters['InstanceBandwidthRx'] = $instanceBandwidthRx;
        $this->queryParameters['InstanceBandwidthRx'] = $instanceBandwidthRx;

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
        $this->queryParameters['SystemDiskCategory'] = $systemDiskCategory;

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
     * @param string $maxPrice
     *
     * @return $this
     */
    public function setMaxPrice($maxPrice)
    {
        $this->requestParameters['MaxPrice'] = $maxPrice;
        $this->queryParameters['MaxPrice'] = $maxPrice;

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
     * @param array $instanceTypeFamily
     *
     * @return $this
     */
	public function setInstanceTypeFamilys(array $instanceTypeFamily)
	{
	    $this->requestParameters['InstanceTypeFamilys'] = $instanceTypeFamily;
		foreach ($instanceTypeFamily as $i => $iValue) {
			$this->queryParameters['InstanceTypeFamily.' . ($i + 1)] = $iValue;
		}

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
     * @param string $priorityStrategy
     *
     * @return $this
     */
    public function setPriorityStrategy($priorityStrategy)
    {
        $this->requestParameters['PriorityStrategy'] = $priorityStrategy;
        $this->queryParameters['PriorityStrategy'] = $priorityStrategy;

        return $this;
    }

    /**
     * @param string $instanceFamilyLevel
     *
     * @return $this
     */
    public function setInstanceFamilyLevel($instanceFamilyLevel)
    {
        $this->requestParameters['InstanceFamilyLevel'] = $instanceFamilyLevel;
        $this->queryParameters['InstanceFamilyLevel'] = $instanceFamilyLevel;

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
}
