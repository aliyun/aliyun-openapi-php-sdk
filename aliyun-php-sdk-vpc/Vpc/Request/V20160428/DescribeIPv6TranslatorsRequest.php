<?php

namespace Vpc\Request\V20160428;

/**
 * Request of DescribeIPv6Translators
 *
 * @method string getBusinessStatus()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getAllocateIpv6Addr()
 * @method string getOwnerAccount()
 * @method string getAllocateIpv4Addr()
 * @method string getOwnerId()
 * @method string getSpec()
 * @method string getPageNumber()
 * @method string getName()
 * @method string getPageSize()
 * @method string getIpv6TranslatorId()
 * @method string getPayType()
 * @method string getStatus()
 */
class DescribeIPv6TranslatorsRequest extends \RpcAcsRequest
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
            'DescribeIPv6Translators',
            'vpc'
        );
    }

    /**
     * @param string $businessStatus
     *
     * @return $this
     */
    public function setBusinessStatus($businessStatus)
    {
        $this->requestParameters['BusinessStatus'] = $businessStatus;
        $this->queryParameters['BusinessStatus'] = $businessStatus;

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
     * @param string $allocateIpv6Addr
     *
     * @return $this
     */
    public function setAllocateIpv6Addr($allocateIpv6Addr)
    {
        $this->requestParameters['AllocateIpv6Addr'] = $allocateIpv6Addr;
        $this->queryParameters['AllocateIpv6Addr'] = $allocateIpv6Addr;

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
     * @param string $allocateIpv4Addr
     *
     * @return $this
     */
    public function setAllocateIpv4Addr($allocateIpv4Addr)
    {
        $this->requestParameters['AllocateIpv4Addr'] = $allocateIpv4Addr;
        $this->queryParameters['AllocateIpv4Addr'] = $allocateIpv4Addr;

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
     * @param string $spec
     *
     * @return $this
     */
    public function setSpec($spec)
    {
        $this->requestParameters['Spec'] = $spec;
        $this->queryParameters['Spec'] = $spec;

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
     * @param string $ipv6TranslatorId
     *
     * @return $this
     */
    public function setIpv6TranslatorId($ipv6TranslatorId)
    {
        $this->requestParameters['Ipv6TranslatorId'] = $ipv6TranslatorId;
        $this->queryParameters['Ipv6TranslatorId'] = $ipv6TranslatorId;

        return $this;
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        $this->requestParameters['PayType'] = $payType;
        $this->queryParameters['PayType'] = $payType;

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
