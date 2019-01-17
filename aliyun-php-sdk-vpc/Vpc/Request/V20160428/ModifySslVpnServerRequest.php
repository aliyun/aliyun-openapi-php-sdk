<?php

namespace Vpc\Request\V20160428;

/**
 * Request of ModifySslVpnServer
 *
 * @method string getCipher()
 * @method string getResourceOwnerId()
 * @method string getClientIpPool()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getCompress()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSslVpnServerId()
 * @method string getLocalSubnet()
 * @method string getPort()
 * @method string getProto()
 * @method string getName()
 */
class ModifySslVpnServerRequest extends \RpcAcsRequest
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
            'ModifySslVpnServer',
            'vpc'
        );
    }

    /**
     * @param string $cipher
     *
     * @return $this
     */
    public function setCipher($cipher)
    {
        $this->requestParameters['Cipher'] = $cipher;
        $this->queryParameters['Cipher'] = $cipher;

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
     * @param string $clientIpPool
     *
     * @return $this
     */
    public function setClientIpPool($clientIpPool)
    {
        $this->requestParameters['ClientIpPool'] = $clientIpPool;
        $this->queryParameters['ClientIpPool'] = $clientIpPool;

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
     * @param string $compress
     *
     * @return $this
     */
    public function setCompress($compress)
    {
        $this->requestParameters['Compress'] = $compress;
        $this->queryParameters['Compress'] = $compress;

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
     * @param string $sslVpnServerId
     *
     * @return $this
     */
    public function setSslVpnServerId($sslVpnServerId)
    {
        $this->requestParameters['SslVpnServerId'] = $sslVpnServerId;
        $this->queryParameters['SslVpnServerId'] = $sslVpnServerId;

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
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->requestParameters['Port'] = $port;
        $this->queryParameters['Port'] = $port;

        return $this;
    }

    /**
     * @param string $proto
     *
     * @return $this
     */
    public function setProto($proto)
    {
        $this->requestParameters['Proto'] = $proto;
        $this->queryParameters['Proto'] = $proto;

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
