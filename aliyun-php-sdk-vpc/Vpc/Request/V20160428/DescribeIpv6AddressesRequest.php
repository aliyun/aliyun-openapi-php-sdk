<?php

namespace Vpc\Request\V20160428;

/**
 * Request of DescribeIpv6Addresses
 *
 * @method string getResourceOwnerId()
 * @method string getIpv6InternetBandwidthId()
 * @method string getNetworkType()
 * @method string getPageNumber()
 * @method string getAssociatedInstanceType()
 * @method string getPageSize()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getIpv6AddressId()
 * @method string getVpcId()
 * @method string getName()
 * @method string getIpv6Address()
 * @method string getAssociatedInstanceId()
 */
class DescribeIpv6AddressesRequest extends \RpcAcsRequest
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
            'DescribeIpv6Addresses',
            'vpc'
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
     * @param string $ipv6InternetBandwidthId
     *
     * @return $this
     */
    public function setIpv6InternetBandwidthId($ipv6InternetBandwidthId)
    {
        $this->requestParameters['Ipv6InternetBandwidthId'] = $ipv6InternetBandwidthId;
        $this->queryParameters['Ipv6InternetBandwidthId'] = $ipv6InternetBandwidthId;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

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
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $ipv6AddressId
     *
     * @return $this
     */
    public function setIpv6AddressId($ipv6AddressId)
    {
        $this->requestParameters['Ipv6AddressId'] = $ipv6AddressId;
        $this->queryParameters['Ipv6AddressId'] = $ipv6AddressId;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

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
     * @param string $ipv6Address
     *
     * @return $this
     */
    public function setIpv6Address($ipv6Address)
    {
        $this->requestParameters['Ipv6Address'] = $ipv6Address;
        $this->queryParameters['Ipv6Address'] = $ipv6Address;

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
}
