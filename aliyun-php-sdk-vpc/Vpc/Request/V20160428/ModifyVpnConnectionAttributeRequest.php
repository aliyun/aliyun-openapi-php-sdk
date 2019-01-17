<?php

namespace Vpc\Request\V20160428;

/**
 * Request of ModifyVpnConnectionAttribute
 *
 * @method string getIkeConfig()
 * @method string getResourceOwnerId()
 * @method string getRemoteSubnet()
 * @method string getEffectImmediately()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getIpsecConfig()
 * @method string getOwnerId()
 * @method string getLocalSubnet()
 * @method string getVpnConnectionId()
 * @method string getName()
 */
class ModifyVpnConnectionAttributeRequest extends \RpcAcsRequest
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
            'ModifyVpnConnectionAttribute',
            'vpc'
        );
    }

    /**
     * @param string $ikeConfig
     *
     * @return $this
     */
    public function setIkeConfig($ikeConfig)
    {
        $this->requestParameters['IkeConfig'] = $ikeConfig;
        $this->queryParameters['IkeConfig'] = $ikeConfig;

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
     * @param string $remoteSubnet
     *
     * @return $this
     */
    public function setRemoteSubnet($remoteSubnet)
    {
        $this->requestParameters['RemoteSubnet'] = $remoteSubnet;
        $this->queryParameters['RemoteSubnet'] = $remoteSubnet;

        return $this;
    }

    /**
     * @param string $effectImmediately
     *
     * @return $this
     */
    public function setEffectImmediately($effectImmediately)
    {
        $this->requestParameters['EffectImmediately'] = $effectImmediately;
        $this->queryParameters['EffectImmediately'] = $effectImmediately;

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
     * @param string $ipsecConfig
     *
     * @return $this
     */
    public function setIpsecConfig($ipsecConfig)
    {
        $this->requestParameters['IpsecConfig'] = $ipsecConfig;
        $this->queryParameters['IpsecConfig'] = $ipsecConfig;

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
     * @param string $localSubnet
     *
     * @return $this
     */
    public function setLocalSubnet($localSubnet)
    {
        $this->requestParameters['LocalSubnet'] = $localSubnet;
        $this->queryParameters['LocalSubnet'] = $localSubnet;

        return $this;
    }

    /**
     * @param string $vpnConnectionId
     *
     * @return $this
     */
    public function setVpnConnectionId($vpnConnectionId)
    {
        $this->requestParameters['VpnConnectionId'] = $vpnConnectionId;
        $this->queryParameters['VpnConnectionId'] = $vpnConnectionId;

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
}
