<?php

namespace Ecs\Request\V20140526;

/**
 * Request of DescribeDisks
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotId()
 * @method string getFilter2Value()
 * @method string getAutoSnapshotPolicyId()
 * @method string getPageNumber()
 * @method string getDiskName()
 * @method string getDeleteAutoSnapshot()
 * @method string getResourceGroupId()
 * @method string getDiskChargeType()
 * @method string getLockReason()
 * @method string getFilter1Key()
 * @method string getPageSize()
 * @method string getDiskIds()
 * @method array getTags()
 * @method string getDeleteWithInstance()
 * @method string getEnableAutoSnapshot()
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getFilter1Value()
 * @method string getPortable()
 * @method string getEnableAutomatedSnapshotPolicy()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method string getDiskType()
 * @method array getAdditionalAttributess()
 * @method string getEnableShared()
 * @method string getInstanceId()
 * @method string getEncrypted()
 * @method string getZoneId()
 * @method string getCategory()
 * @method string getKMSKeyId()
 * @method string getStatus()
 */
class DescribeDisksRequest extends \RpcAcsRequest
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
            'DescribeDisks',
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
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function setAutoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        $this->requestParameters['AutoSnapshotPolicyId'] = $autoSnapshotPolicyId;
        $this->queryParameters['AutoSnapshotPolicyId'] = $autoSnapshotPolicyId;

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
     * @param string $diskName
     *
     * @return $this
     */
    public function setDiskName($diskName)
    {
        $this->requestParameters['DiskName'] = $diskName;
        $this->queryParameters['DiskName'] = $diskName;

        return $this;
    }

    /**
     * @param string $deleteAutoSnapshot
     *
     * @return $this
     */
    public function setDeleteAutoSnapshot($deleteAutoSnapshot)
    {
        $this->requestParameters['DeleteAutoSnapshot'] = $deleteAutoSnapshot;
        $this->queryParameters['DeleteAutoSnapshot'] = $deleteAutoSnapshot;

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
     * @param string $diskChargeType
     *
     * @return $this
     */
    public function setDiskChargeType($diskChargeType)
    {
        $this->requestParameters['DiskChargeType'] = $diskChargeType;
        $this->queryParameters['DiskChargeType'] = $diskChargeType;

        return $this;
    }

    /**
     * @param string $lockReason
     *
     * @return $this
     */
    public function setLockReason($lockReason)
    {
        $this->requestParameters['LockReason'] = $lockReason;
        $this->queryParameters['LockReason'] = $lockReason;

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
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->requestParameters['Tags'] = $tags;
        foreach ($tags as $i => $iValue) {
            $this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $tags[$i]['Value'];
            $this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $tags[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param string $deleteWithInstance
     *
     * @return $this
     */
    public function setDeleteWithInstance($deleteWithInstance)
    {
        $this->requestParameters['DeleteWithInstance'] = $deleteWithInstance;
        $this->queryParameters['DeleteWithInstance'] = $deleteWithInstance;

        return $this;
    }

    /**
     * @param string $enableAutoSnapshot
     *
     * @return $this
     */
    public function setEnableAutoSnapshot($enableAutoSnapshot)
    {
        $this->requestParameters['EnableAutoSnapshot'] = $enableAutoSnapshot;
        $this->queryParameters['EnableAutoSnapshot'] = $enableAutoSnapshot;

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
     * @param string $portable
     *
     * @return $this
     */
    public function setPortable($portable)
    {
        $this->requestParameters['Portable'] = $portable;
        $this->queryParameters['Portable'] = $portable;

        return $this;
    }

    /**
     * @param string $enableAutomatedSnapshotPolicy
     *
     * @return $this
     */
    public function setEnableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy)
    {
        $this->requestParameters['EnableAutomatedSnapshotPolicy'] = $enableAutomatedSnapshotPolicy;
        $this->queryParameters['EnableAutomatedSnapshotPolicy'] = $enableAutomatedSnapshotPolicy;

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
     * @param string $diskType
     *
     * @return $this
     */
    public function setDiskType($diskType)
    {
        $this->requestParameters['DiskType'] = $diskType;
        $this->queryParameters['DiskType'] = $diskType;

        return $this;
    }

    /**
     * @param array $additionalAttributess
     *
     * @return $this
     */
    public function setAdditionalAttributess(array $additionalAttributess)
    {
        $this->requestParameters['AdditionalAttributess'] = $additionalAttributess;
        foreach ($additionalAttributess as $i => $iValue) {
            $this->queryParameters['AdditionalAttributes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $enableShared
     *
     * @return $this
     */
    public function setEnableShared($enableShared)
    {
        $this->requestParameters['EnableShared'] = $enableShared;
        $this->queryParameters['EnableShared'] = $enableShared;

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
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->requestParameters['Category'] = $category;
        $this->queryParameters['Category'] = $category;

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
