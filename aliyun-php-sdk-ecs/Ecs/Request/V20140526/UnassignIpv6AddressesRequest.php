<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UnassignIpv6Addresses
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getNetworkInterfaceId()
 * @method array getIpv6Addresss()
 */
class UnassignIpv6AddressesRequest extends \RpcAcsRequest
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
            'UnassignIpv6Addresses',
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
     * @param array $ipv6Address
     *
     * @return $this
     */
	public function setIpv6Addresss(array $ipv6Address)
	{
	    $this->requestParameters['Ipv6Addresss'] = $ipv6Address;
		foreach ($ipv6Address as $i => $iValue) {
			$this->queryParameters['Ipv6Address.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
