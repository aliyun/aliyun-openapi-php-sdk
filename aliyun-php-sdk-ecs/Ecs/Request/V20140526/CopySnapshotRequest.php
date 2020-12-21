<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CopySnapshot
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotId()
 * @method string getDestinationRegionId()
 * @method string getResourceGroupId()
 * @method array getTags()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getDestinationSnapshotName()
 * @method string getDestinationSnapshotDescription()
 * @method string getRetentionDays()
 */
class CopySnapshotRequest extends \RpcAcsRequest
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
            'CopySnapshot',
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
     * @param string $destinationRegionId
     *
     * @return $this
     */
    public function setDestinationRegionId($destinationRegionId)
    {
        $this->requestParameters['DestinationRegionId'] = $destinationRegionId;
        $this->queryParameters['DestinationRegionId'] = $destinationRegionId;

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
     * @param array $tag
     *
     * @return $this
     */
	public function setTags(array $tag)
	{
	    $this->requestParameters['Tags'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
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
     * @param string $destinationSnapshotName
     *
     * @return $this
     */
    public function setDestinationSnapshotName($destinationSnapshotName)
    {
        $this->requestParameters['DestinationSnapshotName'] = $destinationSnapshotName;
        $this->queryParameters['DestinationSnapshotName'] = $destinationSnapshotName;

        return $this;
    }

    /**
     * @param string $destinationSnapshotDescription
     *
     * @return $this
     */
    public function setDestinationSnapshotDescription($destinationSnapshotDescription)
    {
        $this->requestParameters['DestinationSnapshotDescription'] = $destinationSnapshotDescription;
        $this->queryParameters['DestinationSnapshotDescription'] = $destinationSnapshotDescription;

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
}
