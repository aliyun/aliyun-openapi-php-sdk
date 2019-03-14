<?php

namespace Cbn\Request\V20170912;

/**
 * Request of RoutePrivateZoneInCenToVpc
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCenId()
 * @method string getOwnerAccount()
 * @method string getHostRegionId()
 * @method string getAccessRegionId()
 * @method string getOwnerId()
 * @method string getHostVpcId()
 */
class RoutePrivateZoneInCenToVpcRequest extends \RpcAcsRequest
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
            'Cbn',
            '2017-09-12',
            'RoutePrivateZoneInCenToVpc',
            'cbn'
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
     * @param string $cenId
     *
     * @return $this
     */
    public function setCenId($cenId)
    {
        $this->requestParameters['CenId'] = $cenId;
        $this->queryParameters['CenId'] = $cenId;

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
     * @param string $hostRegionId
     *
     * @return $this
     */
    public function setHostRegionId($hostRegionId)
    {
        $this->requestParameters['HostRegionId'] = $hostRegionId;
        $this->queryParameters['HostRegionId'] = $hostRegionId;

        return $this;
    }

    /**
     * @param string $accessRegionId
     *
     * @return $this
     */
    public function setAccessRegionId($accessRegionId)
    {
        $this->requestParameters['AccessRegionId'] = $accessRegionId;
        $this->queryParameters['AccessRegionId'] = $accessRegionId;

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
     * @param string $hostVpcId
     *
     * @return $this
     */
    public function setHostVpcId($hostVpcId)
    {
        $this->requestParameters['HostVpcId'] = $hostVpcId;
        $this->queryParameters['HostVpcId'] = $hostVpcId;

        return $this;
    }
}
