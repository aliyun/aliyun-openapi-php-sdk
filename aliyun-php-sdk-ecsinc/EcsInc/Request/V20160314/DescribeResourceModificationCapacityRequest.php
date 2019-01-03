<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of DescribeResourceModificationCapacity
 *
 * @method string getResourceOwnerId()
 * @method string getTargetInstanceType()
 * @method string getMigrateAcrossZone()
 * @method string getTargetSystemDiskCategory()
 * @method string getAliUid()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getInstanceIds()
 * @method string getBid()
 */
class DescribeResourceModificationCapacityRequest extends \RpcAcsRequest
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
            'DescribeResourceModificationCapacity',
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
     * @param string $targetInstanceType
     *
     * @return $this
     */
    public function setTargetInstanceType($targetInstanceType)
    {
        $this->requestParameters['TargetInstanceType'] = $targetInstanceType;
        $this->queryParameters['TargetInstanceType'] = $targetInstanceType;

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
     * @param string $targetSystemDiskCategory
     *
     * @return $this
     */
    public function setTargetSystemDiskCategory($targetSystemDiskCategory)
    {
        $this->requestParameters['TargetSystemDiskCategory'] = $targetSystemDiskCategory;
        $this->queryParameters['TargetSystemDiskCategory'] = $targetSystemDiskCategory;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
    {
        $this->requestParameters['AliUid'] = $aliUid;
        $this->queryParameters['AliUid'] = $aliUid;

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
     * @param array $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds(array $instanceIds)
    {
        $this->requestParameters['InstanceIds'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->queryParameters['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

        return $this;
    }
}
