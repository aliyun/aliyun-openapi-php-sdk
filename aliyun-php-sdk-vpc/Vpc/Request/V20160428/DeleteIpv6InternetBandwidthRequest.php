<?php

namespace Vpc\Request\V20160428;

/**
 * Request of DeleteIpv6InternetBandwidth
 *
 * @method string getResourceOwnerId()
 * @method string getIpv6InternetBandwidthId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getIpv6AddressId()
 */
class DeleteIpv6InternetBandwidthRequest extends \RpcAcsRequest
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
            'DeleteIpv6InternetBandwidth',
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
}
