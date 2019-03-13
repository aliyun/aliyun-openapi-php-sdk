<?php

namespace Vpc\Request\V20160428;

/**
 * Request of ModifyRouteEntry
 *
 * @method string getRouteEntryName()
 * @method string getRouteEntryId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class ModifyRouteEntryRequest extends \RpcAcsRequest
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
            'ModifyRouteEntry',
            'vpc'
        );
    }

    /**
     * @param string $routeEntryName
     *
     * @return $this
     */
    public function setRouteEntryName($routeEntryName)
    {
        $this->requestParameters['RouteEntryName'] = $routeEntryName;
        $this->queryParameters['RouteEntryName'] = $routeEntryName;

        return $this;
    }

    /**
     * @param string $routeEntryId
     *
     * @return $this
     */
    public function setRouteEntryId($routeEntryId)
    {
        $this->requestParameters['RouteEntryId'] = $routeEntryId;
        $this->queryParameters['RouteEntryId'] = $routeEntryId;

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
}
