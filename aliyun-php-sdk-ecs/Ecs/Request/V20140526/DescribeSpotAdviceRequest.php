<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSpotAdvice
 *
 * @method string getGpuSpec()
 * @method string getResourceOwnerId()
 * @method string getMemory()
 * @method array getInstanceTypess()
 * @method string getIoOptimized()
 * @method string getMinCores()
 * @method string getNetworkType()
 * @method string getCores()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getInstanceTypeFamily()
 * @method string getOwnerId()
 * @method string getInstanceFamilyLevel()
 * @method string getZoneId()
 * @method string getGpuAmount()
 * @method string getMinMemory()
 */
class DescribeSpotAdviceRequest extends \RpcAcsRequest
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
            'DescribeSpotAdvice',
            'ecs'
        );
    }

    /**
     * @param string $gpuSpec
     *
     * @return $this
     */
    public function setGpuSpec($gpuSpec)
    {
        $this->requestParameters['GpuSpec'] = $gpuSpec;
        $this->queryParameters['GpuSpec'] = $gpuSpec;

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
     * @param array $instanceTypes
     *
     * @return $this
     */
	public function setInstanceTypess(array $instanceTypes)
	{
	    $this->requestParameters['InstanceTypess'] = $instanceTypes;
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
     * @param string $minCores
     *
     * @return $this
     */
    public function setMinCores($minCores)
    {
        $this->requestParameters['MinCores'] = $minCores;
        $this->queryParameters['MinCores'] = $minCores;

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
     * @param string $instanceTypeFamily
     *
     * @return $this
     */
    public function setInstanceTypeFamily($instanceTypeFamily)
    {
        $this->requestParameters['InstanceTypeFamily'] = $instanceTypeFamily;
        $this->queryParameters['InstanceTypeFamily'] = $instanceTypeFamily;

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

    /**
     * @param string $gpuAmount
     *
     * @return $this
     */
    public function setGpuAmount($gpuAmount)
    {
        $this->requestParameters['GpuAmount'] = $gpuAmount;
        $this->queryParameters['GpuAmount'] = $gpuAmount;

        return $this;
    }

    /**
     * @param string $minMemory
     *
     * @return $this
     */
    public function setMinMemory($minMemory)
    {
        $this->requestParameters['MinMemory'] = $minMemory;
        $this->queryParameters['MinMemory'] = $minMemory;

        return $this;
    }
}
