<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeEipAddresses
 *
 * @method string getResourceOwnerId()
 * @method string getFilter2Value()
 * @method string getISP()
 * @method string getAllocationId()
 * @method string getEipAddress()
 * @method string getPageNumber()
 * @method string getLockReason()
 * @method string getFilter1Key()
 * @method string getAssociatedInstanceType()
 * @method string getPageSize()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getFilter1Value()
 * @method string getFilter2Key()
 * @method string getOwnerId()
 * @method string getChargeType()
 * @method string getAssociatedInstanceId()
 * @method string getStatus()
 */
class DescribeEipAddressesRequest extends \RpcAcsRequest
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
            'DescribeEipAddresses',
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
     * @param string $filter2Value
     *
     * @return $this
     */
    public function setFilter2Value($filter2Value)
    {
        $this->requestParameters['Filter2Value'] = $filter2Value;
        $this->queryParameters['Filter.2.Value'] = $filter2Value;

        return $this;
    }

    /**
     * @param string $iSP
     *
     * @return $this
     */
    public function setISP($iSP)
    {
        $this->requestParameters['ISP'] = $iSP;
        $this->queryParameters['ISP'] = $iSP;

        return $this;
    }

    /**
     * @param string $allocationId
     *
     * @return $this
     */
    public function setAllocationId($allocationId)
    {
        $this->requestParameters['AllocationId'] = $allocationId;
        $this->queryParameters['AllocationId'] = $allocationId;

        return $this;
    }

    /**
     * @param string $eipAddress
     *
     * @return $this
     */
    public function setEipAddress($eipAddress)
    {
        $this->requestParameters['EipAddress'] = $eipAddress;
        $this->queryParameters['EipAddress'] = $eipAddress;

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
     * @param string $filter1Key
     *
     * @return $this
     */
    public function setFilter1Key($filter1Key)
    {
        $this->requestParameters['Filter1Key'] = $filter1Key;
        $this->queryParameters['Filter.1.Key'] = $filter1Key;

        return $this;
    }

    /**
     * @param string $associatedInstanceType
     *
     * @return $this
     */
    public function setAssociatedInstanceType($associatedInstanceType)
    {
        $this->requestParameters['AssociatedInstanceType'] = $associatedInstanceType;
        $this->queryParameters['AssociatedInstanceType'] = $associatedInstanceType;

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
     * @param string $filter1Value
     *
     * @return $this
     */
    public function setFilter1Value($filter1Value)
    {
        $this->requestParameters['Filter1Value'] = $filter1Value;
        $this->queryParameters['Filter.1.Value'] = $filter1Value;

        return $this;
    }

    /**
     * @param string $filter2Key
     *
     * @return $this
     */
    public function setFilter2Key($filter2Key)
    {
        $this->requestParameters['Filter2Key'] = $filter2Key;
        $this->queryParameters['Filter.2.Key'] = $filter2Key;

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
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->requestParameters['ChargeType'] = $chargeType;
        $this->queryParameters['ChargeType'] = $chargeType;

        return $this;
    }

    /**
     * @param string $associatedInstanceId
     *
     * @return $this
     */
    public function setAssociatedInstanceId($associatedInstanceId)
    {
        $this->requestParameters['AssociatedInstanceId'] = $associatedInstanceId;
        $this->queryParameters['AssociatedInstanceId'] = $associatedInstanceId;

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
