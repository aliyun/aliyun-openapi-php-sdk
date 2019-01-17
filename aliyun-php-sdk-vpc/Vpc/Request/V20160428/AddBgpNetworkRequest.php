<?php

namespace Vpc\Request\V20160428;

/**
 * Request of AddBgpNetwork
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getRouterId()
 * @method string getVpcId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDstCidrBlock()
 */
class AddBgpNetworkRequest extends \RpcAcsRequest
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
            'AddBgpNetwork',
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
     * @param string $dstCidrBlock
     *
     * @return $this
     */
    public function setDstCidrBlock($dstCidrBlock)
    {
        $this->requestParameters['DstCidrBlock'] = $dstCidrBlock;
        $this->queryParameters['DstCidrBlock'] = $dstCidrBlock;

        return $this;
    }
}
