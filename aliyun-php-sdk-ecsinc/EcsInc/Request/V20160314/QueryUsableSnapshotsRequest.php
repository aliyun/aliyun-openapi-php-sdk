<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of QueryUsableSnapshots
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotNickName()
 * @method string getSnapshotId()
 * @method string getOffset()
 * @method string getResourceOwnerAccount()
 * @method string getCreationStartTime()
 * @method string getCreationEndTime()
 * @method string getOwnerAccount()
 * @method string getPageSize()
 * @method string getOwnerId()
 */
class QueryUsableSnapshotsRequest extends \RpcAcsRequest
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
            'QueryUsableSnapshots',
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
     * @param string $snapshotNickName
     *
     * @return $this
     */
    public function setSnapshotNickName($snapshotNickName)
    {
        $this->requestParameters['SnapshotNickName'] = $snapshotNickName;
        $this->queryParameters['SnapshotNickName'] = $snapshotNickName;

        return $this;
    }

    /**
     * @param string $snapshotId
     *
     * @return $this
     */
    public function setSnapshotId($snapshotId)
    {
        $this->requestParameters['SnapshotId'] = $snapshotId;
        $this->queryParameters['SnapshotId'] = $snapshotId;

        return $this;
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->requestParameters['Offset'] = $offset;
        $this->queryParameters['Offset'] = $offset;

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
     * @param string $creationStartTime
     *
     * @return $this
     */
    public function setCreationStartTime($creationStartTime)
    {
        $this->requestParameters['CreationStartTime'] = $creationStartTime;
        $this->queryParameters['CreationStartTime'] = $creationStartTime;

        return $this;
    }

    /**
     * @param string $creationEndTime
     *
     * @return $this
     */
    public function setCreationEndTime($creationEndTime)
    {
        $this->requestParameters['CreationEndTime'] = $creationEndTime;
        $this->queryParameters['CreationEndTime'] = $creationEndTime;

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
}
