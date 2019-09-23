<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeAutoProvisioningGroups
 *
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method array getAutoProvisioningGroupStatuss()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getAutoProvisioningGroupIds()
 * @method string getAutoProvisioningGroupName()
 */
class DescribeAutoProvisioningGroupsRequest extends \RpcAcsRequest
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
            'DescribeAutoProvisioningGroups',
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
     * @param array $autoProvisioningGroupStatus
     *
     * @return $this
     */
	public function setAutoProvisioningGroupStatuss(array $autoProvisioningGroupStatus)
	{
	    $this->requestParameters['AutoProvisioningGroupStatuss'] = $autoProvisioningGroupStatus;
		foreach ($autoProvisioningGroupStatus as $i => $iValue) {
			$this->queryParameters['AutoProvisioningGroupStatus.' . ($i + 1)] = $iValue;
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
     * @param array $autoProvisioningGroupId
     *
     * @return $this
     */
	public function setAutoProvisioningGroupIds(array $autoProvisioningGroupId)
	{
	    $this->requestParameters['AutoProvisioningGroupIds'] = $autoProvisioningGroupId;
		foreach ($autoProvisioningGroupId as $i => $iValue) {
			$this->queryParameters['AutoProvisioningGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $autoProvisioningGroupName
     *
     * @return $this
     */
    public function setAutoProvisioningGroupName($autoProvisioningGroupName)
    {
        $this->requestParameters['AutoProvisioningGroupName'] = $autoProvisioningGroupName;
        $this->queryParameters['AutoProvisioningGroupName'] = $autoProvisioningGroupName;

        return $this;
    }
}
