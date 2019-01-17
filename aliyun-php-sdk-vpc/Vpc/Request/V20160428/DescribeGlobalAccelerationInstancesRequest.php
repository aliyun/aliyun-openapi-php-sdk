<?php

namespace Vpc\Request\V20160428;

/**
 * Request of DescribeGlobalAccelerationInstances
 *
 * @method string getIpAddress()
 * @method string getResourceOwnerId()
 * @method string getBandwidthType()
 * @method string getResourceOwnerAccount()
 * @method string getServiceLocation()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getIncludeReservationData()
 * @method string getGlobalAccelerationInstanceId()
 * @method string getServerId()
 * @method string getPageNumber()
 * @method string getName()
 * @method string getPageSize()
 * @method string getStatus()
 */
class DescribeGlobalAccelerationInstancesRequest extends \RpcAcsRequest
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
            'Vpc',
            '2016-04-28',
            'DescribeGlobalAccelerationInstances',
            'vpc'
        );
    }

    /**
     * @param string $ipAddress
     *
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->requestParameters['IpAddress'] = $ipAddress;
        $this->queryParameters['IpAddress'] = $ipAddress;

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
     * @param string $bandwidthType
     *
     * @return $this
     */
    public function setBandwidthType($bandwidthType)
    {
        $this->requestParameters['BandwidthType'] = $bandwidthType;
        $this->queryParameters['BandwidthType'] = $bandwidthType;

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
     * @param string $serviceLocation
     *
     * @return $this
     */
    public function setServiceLocation($serviceLocation)
    {
        $this->requestParameters['ServiceLocation'] = $serviceLocation;
        $this->queryParameters['ServiceLocation'] = $serviceLocation;

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
     * @param string $includeReservationData
     *
     * @return $this
     */
    public function setIncludeReservationData($includeReservationData)
    {
        $this->requestParameters['IncludeReservationData'] = $includeReservationData;
        $this->queryParameters['IncludeReservationData'] = $includeReservationData;

        return $this;
    }

    /**
     * @param string $globalAccelerationInstanceId
     *
     * @return $this
     */
    public function setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
    {
        $this->requestParameters['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;
        $this->queryParameters['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;

        return $this;
    }

    /**
     * @param string $serverId
     *
     * @return $this
     */
    public function setServerId($serverId)
    {
        $this->requestParameters['ServerId'] = $serverId;
        $this->queryParameters['ServerId'] = $serverId;

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
