<?php

namespace Ecs\Request\V20140526;

/**
 * Request of AssignPrivateIpAddresses
 *
 * @method string getResourceOwnerId()
 * @method string getSecondaryPrivateIpAddressCount()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getPrivateIpAddresss()
 * @method string getNetworkInterfaceId()
 */
class AssignPrivateIpAddressesRequest extends \RpcAcsRequest
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
            'AssignPrivateIpAddresses',
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
     * @param string $secondaryPrivateIpAddressCount
     *
     * @return $this
     */
    public function setSecondaryPrivateIpAddressCount($secondaryPrivateIpAddressCount)
    {
        $this->requestParameters['SecondaryPrivateIpAddressCount'] = $secondaryPrivateIpAddressCount;
        $this->queryParameters['SecondaryPrivateIpAddressCount'] = $secondaryPrivateIpAddressCount;

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
     * @param array $privateIpAddresss
     *
     * @return $this
     */
    public function setPrivateIpAddresss(array $privateIpAddresss)
    {
        $this->requestParameters['PrivateIpAddresss'] = $privateIpAddresss;
        foreach ($privateIpAddresss as $i => $iValue) {
            $this->queryParameters['PrivateIpAddress.' . ($i + 1)] = $iValue;
        }

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
}
