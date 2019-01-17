<?php

namespace Ecs\Request\V20140526;

/**
 * Request of CreateRouteEntry
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getDestinationCidrBlock()
 * @method string getOwnerAccount()
 * @method string getNextHopId()
 * @method string getOwnerId()
 * @method string getNextHopType()
 * @method array getNextHopLists()
 * @method string getRouteTableId()
 */
class CreateRouteEntryRequest extends \RpcAcsRequest
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
            'CreateRouteEntry',
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
     * @param string $destinationCidrBlock
     *
     * @return $this
     */
    public function setDestinationCidrBlock($destinationCidrBlock)
    {
        $this->requestParameters['DestinationCidrBlock'] = $destinationCidrBlock;
        $this->queryParameters['DestinationCidrBlock'] = $destinationCidrBlock;

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
     * @param string $nextHopId
     *
     * @return $this
     */
    public function setNextHopId($nextHopId)
    {
        $this->requestParameters['NextHopId'] = $nextHopId;
        $this->queryParameters['NextHopId'] = $nextHopId;

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
     * @param string $nextHopType
     *
     * @return $this
     */
    public function setNextHopType($nextHopType)
    {
        $this->requestParameters['NextHopType'] = $nextHopType;
        $this->queryParameters['NextHopType'] = $nextHopType;

        return $this;
    }

    /**
     * @param array $nextHopLists
     *
     * @return $this
     */
    public function setNextHopLists(array $nextHopLists)
    {
        $this->requestParameters['NextHopLists'] = $nextHopLists;
        foreach ($nextHopLists as $i => $iValue) {
            $this->queryParameters['NextHopList.' . ($i + 1) . '.NextHopId'] = $nextHopLists[$i]['NextHopId'];
            $this->queryParameters['NextHopList.' . ($i + 1) . '.NextHopType'] = $nextHopLists[$i]['NextHopType'];
        }

        return $this;
    }

    /**
     * @param string $routeTableId
     *
     * @return $this
     */
    public function setRouteTableId($routeTableId)
    {
        $this->requestParameters['RouteTableId'] = $routeTableId;
        $this->queryParameters['RouteTableId'] = $routeTableId;

        return $this;
    }
}
