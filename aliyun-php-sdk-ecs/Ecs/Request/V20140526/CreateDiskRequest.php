<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDisk
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotId()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getDiskName()
 * @method string getResourceGroupId()
 * @method string getDiskCategory()
 * @method string getStorageSetPartitionNumber()
 * @method array getTags()
 * @method array getArns()
 * @method string getAdvancedFeatures()
 * @method string getResourceOwnerAccount()
 * @method string getPerformanceLevel()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getStorageSetId()
 * @method string getSize()
 * @method string getEncrypted()
 * @method string getZoneId()
 * @method string getKMSKeyId()
 */
class CreateDiskRequest extends \RpcAcsRequest
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
            'CreateDisk',
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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

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
     * @param string $diskCategory
     *
     * @return $this
     */
    public function setDiskCategory($diskCategory)
    {
        $this->requestParameters['DiskCategory'] = $diskCategory;
        $this->queryParameters['DiskCategory'] = $diskCategory;

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
     * @param array $arn
     *
     * @return $this
     */
	public function setArns(array $arn)
	{
	    $this->requestParameters['Arns'] = $arn;
		foreach ($arn as $depth1 => $depth1Value) {
			$this->queryParameters['Arn.' . ($depth1 + 1) . '.Rolearn'] = $depth1Value['Rolearn'];
			$this->queryParameters['Arn.' . ($depth1 + 1) . '.RoleType'] = $depth1Value['RoleType'];
			$this->queryParameters['Arn.' . ($depth1 + 1) . '.AssumeRoleFor'] = $depth1Value['AssumeRoleFor'];
		}

		return $this;
    }

    /**
     * @param string $advancedFeatures
     *
     * @return $this
     */
    public function setAdvancedFeatures($advancedFeatures)
    {
        $this->requestParameters['AdvancedFeatures'] = $advancedFeatures;
        $this->queryParameters['AdvancedFeatures'] = $advancedFeatures;

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
     * @param string $performanceLevel
     *
     * @return $this
     */
    public function setPerformanceLevel($performanceLevel)
    {
        $this->requestParameters['PerformanceLevel'] = $performanceLevel;
        $this->queryParameters['PerformanceLevel'] = $performanceLevel;

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

    /**
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->requestParameters['Size'] = $size;
        $this->queryParameters['Size'] = $size;

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
}
