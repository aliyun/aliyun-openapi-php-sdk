<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeStorageSetDetails
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getStorageSetPartitionNumber()
 * @method string getDiskIds()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getStorageSetId()
 */
class DescribeStorageSetDetailsRequest extends \RpcAcsRequest
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
            'DescribeStorageSetDetails',
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
     * @param string $storageSetPartitionNumber
     *
     * @return $this
     */
    public function setStorageSetPartitionNumber($storageSetPartitionNumber)
    {
        $this->requestParameters['StorageSetPartitionNumber'] = $storageSetPartitionNumber;
        $this->queryParameters['StorageSetPartitionNumber'] = $storageSetPartitionNumber;

        return $this;
    }

    /**
     * @param string $diskIds
     *
     * @return $this
     */
    public function setDiskIds($diskIds)
    {
        $this->requestParameters['DiskIds'] = $diskIds;
        $this->queryParameters['DiskIds'] = $diskIds;

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
     * @param string $storageSetId
     *
     * @return $this
     */
    public function setStorageSetId($storageSetId)
    {
        $this->requestParameters['StorageSetId'] = $storageSetId;
        $this->queryParameters['StorageSetId'] = $storageSetId;

        return $this;
    }
}
