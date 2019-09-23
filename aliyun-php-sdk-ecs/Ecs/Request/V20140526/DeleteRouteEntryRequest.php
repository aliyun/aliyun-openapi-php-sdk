<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteRouteEntry
 *
 * @method string getResourceOwnerId()
 * @method string getNextHopId()
 * @method string getRouteTableId()
 * @method string getResourceOwnerAccount()
 * @method string getDestinationCidrBlock()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getNextHopLists()
 */
class DeleteRouteEntryRequest extends \RpcAcsRequest
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
            'DeleteRouteEntry',
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
     * @param array $nextHopList
     *
     * @return $this
     */
	public function setNextHopLists(array $nextHopList)
	{
	    $this->requestParameters['NextHopLists'] = $nextHopList;
		foreach ($nextHopList as $depth1 => $depth1Value) {
			$this->queryParameters['NextHopList.' . ($depth1 + 1) . '.NextHopId'] = $depth1Value['NextHopId'];
			$this->queryParameters['NextHopList.' . ($depth1 + 1) . '.NextHopType'] = $depth1Value['NextHopType'];
		}

		return $this;
    }
}
