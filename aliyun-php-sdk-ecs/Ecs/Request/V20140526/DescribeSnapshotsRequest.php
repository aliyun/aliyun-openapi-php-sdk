<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSnapshots
 *
 * @method string getResourceOwnerId()
 * @method string getFilter2Value()
 * @method string getSnapshotIds()
 * @method string getUsage()
 * @method string getSnapshotLinkId()
 * @method string getSnapshotName()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getFilter1Key()
 * @method string getPageSize()
 * @method string getDiskId()
 * @method array getTags()
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSourceDiskType()
 * @method string getFilter1Value()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getEncrypted()
 * @method string getSnapshotType()
 * @method string getKMSKeyId()
 * @method string getStatus()
 */
class DescribeSnapshotsRequest extends \RpcAcsRequest
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
            'DescribeSnapshots',
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
     * @param string $filter2Value
     *
     * @return $this
     */
    public function setFilter2Value($filter2Value)
    {
        $this->requestParameters['Filter2Value'] = $filter2Value;
        $this->queryParameters['Filter.2.Value'] = $filter2Value;

        return $this;
    }

    /**
     * @param string $snapshotIds
     *
     * @return $this
     */
    public function setSnapshotIds($snapshotIds)
    {
        $this->requestParameters['SnapshotIds'] = $snapshotIds;
        $this->queryParameters['SnapshotIds'] = $snapshotIds;

        return $this;
    }

    /**
     * @param string $usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->requestParameters['Usage'] = $usage;
        $this->queryParameters['Usage'] = $usage;

        return $this;
    }

    /**
     * @param string $snapshotLinkId
     *
     * @return $this
     */
    public function setSnapshotLinkId($snapshotLinkId)
    {
        $this->requestParameters['SnapshotLinkId'] = $snapshotLinkId;
        $this->queryParameters['SnapshotLinkId'] = $snapshotLinkId;

        return $this;
    }

    /**
     * @param string $snapshotName
     *
     * @return $this
     */
    public function setSnapshotName($snapshotName)
    {
        $this->requestParameters['SnapshotName'] = $snapshotName;
        $this->queryParameters['SnapshotName'] = $snapshotName;

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
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $filter1Key
     *
     * @return $this
     */
    public function setFilter1Key($filter1Key)
    {
        $this->requestParameters['Filter1Key'] = $filter1Key;
        $this->queryParameters['Filter.1.Key'] = $filter1Key;

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
     * @param string $diskId
     *
     * @return $this
     */
    public function setDiskId($diskId)
    {
        $this->requestParameters['DiskId'] = $diskId;
        $this->queryParameters['DiskId'] = $diskId;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function setTags(array $tag)
	{
	    $this->requestParameters['Tags'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
		}

		return $this;
    }

    /**
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        $this->requestParameters['DryRun'] = $dryRun;
        $this->queryParameters['DryRun'] = $dryRun;

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
     * @param string $sourceDiskType
     *
     * @return $this
     */
    public function setSourceDiskType($sourceDiskType)
    {
        $this->requestParameters['SourceDiskType'] = $sourceDiskType;
        $this->queryParameters['SourceDiskType'] = $sourceDiskType;

        return $this;
    }

    /**
     * @param string $filter1Value
     *
     * @return $this
     */
    public function setFilter1Value($filter1Value)
    {
        $this->requestParameters['Filter1Value'] = $filter1Value;
        $this->queryParameters['Filter.1.Value'] = $filter1Value;

        return $this;
    }

    /**
     * @param string $filter2Key
     *
     * @return $this
     */
    public function setFilter2Key($filter2Key)
    {
        $this->requestParameters['Filter2Key'] = $filter2Key;
        $this->queryParameters['Filter.2.Key'] = $filter2Key;

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $encrypted
     *
     * @return $this
     */
    public function setEncrypted($encrypted)
    {
        $this->requestParameters['Encrypted'] = $encrypted;
        $this->queryParameters['Encrypted'] = $encrypted;

        return $this;
    }

    /**
     * @param string $snapshotType
     *
     * @return $this
     */
    public function setSnapshotType($snapshotType)
    {
        $this->requestParameters['SnapshotType'] = $snapshotType;
        $this->queryParameters['SnapshotType'] = $snapshotType;

        return $this;
    }

    /**
     * @param string $kMSKeyId
     *
     * @return $this
     */
    public function setKMSKeyId($kMSKeyId)
    {
        $this->requestParameters['KMSKeyId'] = $kMSKeyId;
        $this->queryParameters['KMSKeyId'] = $kMSKeyId;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
