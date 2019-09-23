<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeAvailableResource
 *
 * @method string getResourceOwnerId()
 * @method string getMemory()
 * @method string getIoOptimized()
 * @method string getDataDiskCategory()
 * @method string getCores()
 * @method string getSystemDiskCategory()
 * @method string getScope()
 * @method string getInstanceType()
 * @method string getNetworkCategory()
 * @method string getInstanceChargeType()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDedicatedHostId()
 * @method string getOwnerId()
 * @method string getSpotDuration()
 * @method string getResourceType()
 * @method string getSpotStrategy()
 * @method string getDestinationResource()
 * @method string getZoneId()
 */
class DescribeAvailableResourceRequest extends \RpcAcsRequest
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
            'DescribeAvailableResource',
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
     * @param string $dataDiskCategory
     *
     * @return $this
     */
    public function setDataDiskCategory($dataDiskCategory)
    {
        $this->requestParameters['DataDiskCategory'] = $dataDiskCategory;
        $this->queryParameters['DataDiskCategory'] = $dataDiskCategory;

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
     * @param string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->requestParameters['Scope'] = $scope;
        $this->queryParameters['Scope'] = $scope;

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
     * @param string $networkCategory
     *
     * @return $this
     */
    public function setNetworkCategory($networkCategory)
    {
        $this->requestParameters['NetworkCategory'] = $networkCategory;
        $this->queryParameters['NetworkCategory'] = $networkCategory;

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

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
     * @param string $destinationResource
     *
     * @return $this
     */
    public function setDestinationResource($destinationResource)
    {
        $this->requestParameters['DestinationResource'] = $destinationResource;
        $this->queryParameters['DestinationResource'] = $destinationResource;

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
