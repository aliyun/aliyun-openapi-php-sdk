<?php

namespace Vpc\Request\V20160428;

/**
 * Request of DescribeCommonBandwidthPackages
 *
 * @method string getResourceGroupId()
 * @method string getResourceOwnerId()
 * @method string getBandwidthPackageId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getName()
 * @method string getPageSize()
 * @method string getOwnerId()
 * @method string getIncludeReservationData()
 * @method string getPageNumber()
 */
class DescribeCommonBandwidthPackagesRequest extends \RpcAcsRequest
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
            'DescribeCommonBandwidthPackages',
            'vpc'
        );
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
     * @param string $bandwidthPackageId
     *
     * @return $this
     */
    public function setBandwidthPackageId($bandwidthPackageId)
    {
        $this->requestParameters['BandwidthPackageId'] = $bandwidthPackageId;
        $this->queryParameters['BandwidthPackageId'] = $bandwidthPackageId;

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
}
