<?php

namespace Ecs\Request\V20140526;

/**
 * Request of AssignIpv6Addresses
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getIpv6AddressCount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getNetworkInterfaceId()
 * @method array getIpv6Addresss()
 */
class AssignIpv6AddressesRequest extends \RpcAcsRequest
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
            'AssignIpv6Addresses',
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
     * @param string $ipv6AddressCount
     *
     * @return $this
     */
    public function setIpv6AddressCount($ipv6AddressCount)
    {
        $this->requestParameters['Ipv6AddressCount'] = $ipv6AddressCount;
        $this->queryParameters['Ipv6AddressCount'] = $ipv6AddressCount;

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
     * @param string $networkInterfaceId
     *
     * @return $this
     */
    public function setNetworkInterfaceId($networkInterfaceId)
    {
        $this->requestParameters['NetworkInterfaceId'] = $networkInterfaceId;
        $this->queryParameters['NetworkInterfaceId'] = $networkInterfaceId;

        return $this;
    }

    /**
     * @param array $ipv6Addresss
     *
     * @return $this
     */
    public function setIpv6Addresss(array $ipv6Addresss)
    {
        $this->requestParameters['Ipv6Addresss'] = $ipv6Addresss;
        foreach ($ipv6Addresss as $i => $iValue) {
            $this->queryParameters['Ipv6Address.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
