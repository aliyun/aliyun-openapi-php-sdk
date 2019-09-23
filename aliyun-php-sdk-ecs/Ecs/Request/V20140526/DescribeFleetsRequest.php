<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeFleets
 *
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getFleetName()
 * @method array getFleetStatuss()
 * @method string getPageSize()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getFleetIds()
 */
class DescribeFleetsRequest extends \RpcAcsRequest
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
            'DescribeFleets',
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
     * @param string $fleetName
     *
     * @return $this
     */
    public function setFleetName($fleetName)
    {
        $this->requestParameters['FleetName'] = $fleetName;
        $this->queryParameters['FleetName'] = $fleetName;

        return $this;
    }

    /**
     * @param array $fleetStatus
     *
     * @return $this
     */
	public function setFleetStatuss(array $fleetStatus)
	{
	    $this->requestParameters['FleetStatuss'] = $fleetStatus;
		foreach ($fleetStatus as $i => $iValue) {
			$this->queryParameters['FleetStatus.' . ($i + 1)] = $iValue;
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
     * @param array $fleetId
     *
     * @return $this
     */
	public function setFleetIds(array $fleetId)
	{
	    $this->requestParameters['FleetIds'] = $fleetId;
		foreach ($fleetId as $i => $iValue) {
			$this->queryParameters['FleetId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
