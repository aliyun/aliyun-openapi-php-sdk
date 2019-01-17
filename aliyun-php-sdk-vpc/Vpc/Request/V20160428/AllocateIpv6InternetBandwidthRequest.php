<?php

namespace Vpc\Request\V20160428;

/**
 * Request of AllocateIpv6InternetBandwidth
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getBandwidth()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getIpv6AddressId()
 * @method string getInternetChargeType()
 * @method string getIpv6GatewayId()
 */
class AllocateIpv6InternetBandwidthRequest extends \RpcAcsRequest
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
            'AllocateIpv6InternetBandwidth',
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
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->requestParameters['Bandwidth'] = $bandwidth;
        $this->queryParameters['Bandwidth'] = $bandwidth;

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

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        $this->requestParameters['InternetChargeType'] = $internetChargeType;
        $this->queryParameters['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @param string $ipv6GatewayId
     *
     * @return $this
     */
    public function setIpv6GatewayId($ipv6GatewayId)
    {
        $this->requestParameters['Ipv6GatewayId'] = $ipv6GatewayId;
        $this->queryParameters['Ipv6GatewayId'] = $ipv6GatewayId;

        return $this;
    }
}
