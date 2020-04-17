<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeStorageCapacityUnits
 *
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getCapacity()
 * @method array getStorageCapacityUnitIds()
 * @method string getPageSize()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getName()
 * @method array getStatuss()
 */
class DescribeStorageCapacityUnitsRequest extends \RpcAcsRequest
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
            'DescribeStorageCapacityUnits',
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
     * @param string $capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->requestParameters['Capacity'] = $capacity;
        $this->queryParameters['Capacity'] = $capacity;

        return $this;
    }

    /**
     * @param array $storageCapacityUnitId
     *
     * @return $this
     */
	public function setStorageCapacityUnitIds(array $storageCapacityUnitId)
	{
	    $this->requestParameters['StorageCapacityUnitIds'] = $storageCapacityUnitId;
		foreach ($storageCapacityUnitId as $i => $iValue) {
			$this->queryParameters['StorageCapacityUnitId.' . ($i + 1)] = $iValue;
		}

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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param array $status
     *
     * @return $this
     */
	public function setStatuss(array $status)
	{
	    $this->requestParameters['Statuss'] = $status;
		foreach ($status as $i => $iValue) {
			$this->queryParameters['Status.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
