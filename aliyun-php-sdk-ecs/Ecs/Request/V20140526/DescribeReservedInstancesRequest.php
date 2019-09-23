<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeReservedInstances
 *
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getLockReason()
 * @method string getScope()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getInstanceTypeFamily()
 * @method string getOwnerId()
 * @method array getReservedInstanceIds()
 * @method string getOfferingType()
 * @method string getZoneId()
 * @method string getReservedInstanceName()
 * @method array getStatuss()
 */
class DescribeReservedInstancesRequest extends \RpcAcsRequest
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
            'DescribeReservedInstances',
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
     * @param string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->requestParameters['Scope'] = $scope;
        $this->queryParameters['Scope'] = $scope;

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
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

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
     * @param string $instanceTypeFamily
     *
     * @return $this
     */
    public function setInstanceTypeFamily($instanceTypeFamily)
    {
        $this->requestParameters['InstanceTypeFamily'] = $instanceTypeFamily;
        $this->queryParameters['InstanceTypeFamily'] = $instanceTypeFamily;

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
     * @param array $reservedInstanceId
     *
     * @return $this
     */
	public function setReservedInstanceIds(array $reservedInstanceId)
	{
	    $this->requestParameters['ReservedInstanceIds'] = $reservedInstanceId;
		foreach ($reservedInstanceId as $i => $iValue) {
			$this->queryParameters['ReservedInstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $offeringType
     *
     * @return $this
     */
    public function setOfferingType($offeringType)
    {
        $this->requestParameters['OfferingType'] = $offeringType;
        $this->queryParameters['OfferingType'] = $offeringType;

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
     * @param string $reservedInstanceName
     *
     * @return $this
     */
    public function setReservedInstanceName($reservedInstanceName)
    {
        $this->requestParameters['ReservedInstanceName'] = $reservedInstanceName;
        $this->queryParameters['ReservedInstanceName'] = $reservedInstanceName;

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
