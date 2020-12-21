<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDedicatedHostClusters
 *
 * @method string getDedicatedHostClusterName()
 * @method string getResourceOwnerId()
 * @method string getDedicatedHostClusterIds()
 * @method string getPageNumber()
 * @method string getResourceGroupId()
 * @method string getLockReason()
 * @method string getPageSize()
 * @method array getTags()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getZoneId()
 * @method string getStatus()
 */
class DescribeDedicatedHostClustersRequest extends \RpcAcsRequest
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
            'DescribeDedicatedHostClusters',
            'ecs'
        );
    }

    /**
     * @param string $dedicatedHostClusterName
     *
     * @return $this
     */
    public function setDedicatedHostClusterName($dedicatedHostClusterName)
    {
        $this->requestParameters['DedicatedHostClusterName'] = $dedicatedHostClusterName;
        $this->queryParameters['DedicatedHostClusterName'] = $dedicatedHostClusterName;

        return $this;
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
     * @param string $dedicatedHostClusterIds
     *
     * @return $this
     */
    public function setDedicatedHostClusterIds($dedicatedHostClusterIds)
    {
        $this->requestParameters['DedicatedHostClusterIds'] = $dedicatedHostClusterIds;
        $this->queryParameters['DedicatedHostClusterIds'] = $dedicatedHostClusterIds;

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
