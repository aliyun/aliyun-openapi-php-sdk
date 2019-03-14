<?php

namespace Cbn\Request\V20170912;

/**
 * Request of SetCenInterRegionBandwidthLimit
 *
 * @method string getLocalRegionId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCenId()
 * @method string getOwnerAccount()
 * @method string getOppositeRegionId()
 * @method string getBandwidthLimit()
 * @method string getOwnerId()
 */
class SetCenInterRegionBandwidthLimitRequest extends \RpcAcsRequest
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
            'SetCenInterRegionBandwidthLimit',
            'cbn'
        );
    }

    /**
     * @param string $localRegionId
     *
     * @return $this
     */
    public function setLocalRegionId($localRegionId)
    {
        $this->requestParameters['LocalRegionId'] = $localRegionId;
        $this->queryParameters['LocalRegionId'] = $localRegionId;

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
     * @param string $oppositeRegionId
     *
     * @return $this
     */
    public function setOppositeRegionId($oppositeRegionId)
    {
        $this->requestParameters['OppositeRegionId'] = $oppositeRegionId;
        $this->queryParameters['OppositeRegionId'] = $oppositeRegionId;

        return $this;
    }

    /**
     * @param string $bandwidthLimit
     *
     * @return $this
     */
    public function setBandwidthLimit($bandwidthLimit)
    {
        $this->requestParameters['BandwidthLimit'] = $bandwidthLimit;
        $this->queryParameters['BandwidthLimit'] = $bandwidthLimit;

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
