<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of DescribeResourcesModification
 *
 * @method string getResourceOwnerId()
 * @method string getMemory()
 * @method string getDataDiskCategory()
 * @method string getCores()
 * @method string getSystemDiskCategory()
 * @method string getMigrateAcrossZone()
 * @method string getInstanceType()
 * @method string getNetworkCategory()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOperationType()
 * @method string getOwnerId()
 * @method string getDestinationResource()
 */
class DescribeResourcesModificationRequest extends \RpcAcsRequest
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
            'EcsInc',
            '2016-03-14',
            'DescribeResourcesModification',
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
     * @param string $migrateAcrossZone
     *
     * @return $this
     */
    public function setMigrateAcrossZone($migrateAcrossZone)
    {
        $this->requestParameters['MigrateAcrossZone'] = $migrateAcrossZone;
        $this->queryParameters['MigrateAcrossZone'] = $migrateAcrossZone;

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
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->requestParameters['ResourceId'] = $resourceId;
        $this->queryParameters['ResourceId'] = $resourceId;

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
     * @param string $operationType
     *
     * @return $this
     */
    public function setOperationType($operationType)
    {
        $this->requestParameters['OperationType'] = $operationType;
        $this->queryParameters['OperationType'] = $operationType;

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
}
