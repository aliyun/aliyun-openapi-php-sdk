<?php

namespace Vpc\Request\V20160428;

/**
 * Request of ModifyRouteTableAttributes
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getKbpsBandwidth()
 * @method string getRouteTableName()
 * @method string getResourceUid()
 * @method string getResourceBid()
 * @method string getRouteTableId()
 */
class ModifyRouteTableAttributesRequest extends \RpcAcsRequest
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
            'ModifyRouteTableAttributes',
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
     * @param string $kbpsBandwidth
     *
     * @return $this
     */
    public function setKbpsBandwidth($kbpsBandwidth)
    {
        $this->requestParameters['KbpsBandwidth'] = $kbpsBandwidth;
        $this->queryParameters['KbpsBandwidth'] = $kbpsBandwidth;

        return $this;
    }

    /**
     * @param string $routeTableName
     *
     * @return $this
     */
    public function setRouteTableName($routeTableName)
    {
        $this->requestParameters['RouteTableName'] = $routeTableName;
        $this->queryParameters['RouteTableName'] = $routeTableName;

        return $this;
    }

    /**
     * @param string $resourceUid
     *
     * @return $this
     */
    public function setResourceUid($resourceUid)
    {
        $this->requestParameters['ResourceUid'] = $resourceUid;
        $this->queryParameters['ResourceUid'] = $resourceUid;

        return $this;
    }

    /**
     * @param string $resourceBid
     *
     * @return $this
     */
    public function setResourceBid($resourceBid)
    {
        $this->requestParameters['ResourceBid'] = $resourceBid;
        $this->queryParameters['ResourceBid'] = $resourceBid;

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
