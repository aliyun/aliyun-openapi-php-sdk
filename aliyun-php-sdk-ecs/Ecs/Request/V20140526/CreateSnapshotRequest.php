<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSnapshot
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getInstantAccess()
 * @method string getDescription()
 * @method string getSnapshotName()
 * @method string getResourceGroupId()
 * @method string getInstantAccessRetentionDays()
 * @method string getDiskId()
 * @method array getTags()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getRetentionDays()
 * @method string getCategory()
 */
class CreateSnapshotRequest extends \RpcAcsRequest
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
            'CreateSnapshot',
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
     * @param string $instantAccess
     *
     * @return $this
     */
    public function setInstantAccess($instantAccess)
    {
        $this->requestParameters['InstantAccess'] = $instantAccess;
        $this->queryParameters['InstantAccess'] = $instantAccess;

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
     * @param string $instantAccessRetentionDays
     *
     * @return $this
     */
    public function setInstantAccessRetentionDays($instantAccessRetentionDays)
    {
        $this->requestParameters['InstantAccessRetentionDays'] = $instantAccessRetentionDays;
        $this->queryParameters['InstantAccessRetentionDays'] = $instantAccessRetentionDays;

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
     * @param string $retentionDays
     *
     * @return $this
     */
    public function setRetentionDays($retentionDays)
    {
        $this->requestParameters['RetentionDays'] = $retentionDays;
        $this->queryParameters['RetentionDays'] = $retentionDays;

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
}
