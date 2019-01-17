<?php

namespace Vpc\Request\V20160428;

/**
 * Request of CreateBgpGroup
 *
 * @method string getAuthKey()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getPeerAsn()
 * @method string getIsFakeAsn()
 * @method string getRouterId()
 * @method string getName()
 */
class CreateBgpGroupRequest extends \RpcAcsRequest
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
            'CreateBgpGroup',
            'vpc'
        );
    }

    /**
     * @param string $authKey
     *
     * @return $this
     */
    public function setAuthKey($authKey)
    {
        $this->requestParameters['AuthKey'] = $authKey;
        $this->queryParameters['AuthKey'] = $authKey;

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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

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
     * @param string $peerAsn
     *
     * @return $this
     */
    public function setPeerAsn($peerAsn)
    {
        $this->requestParameters['PeerAsn'] = $peerAsn;
        $this->queryParameters['PeerAsn'] = $peerAsn;

        return $this;
    }

    /**
     * @param string $isFakeAsn
     *
     * @return $this
     */
    public function setIsFakeAsn($isFakeAsn)
    {
        $this->requestParameters['IsFakeAsn'] = $isFakeAsn;
        $this->queryParameters['IsFakeAsn'] = $isFakeAsn;

        return $this;
    }

    /**
     * @param string $routerId
     *
     * @return $this
     */
    public function setRouterId($routerId)
    {
        $this->requestParameters['RouterId'] = $routerId;
        $this->queryParameters['RouterId'] = $routerId;

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
