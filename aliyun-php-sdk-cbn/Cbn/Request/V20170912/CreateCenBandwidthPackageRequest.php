<?php

namespace Cbn\Request\V20170912;

/**
 * Request of CreateCenBandwidthPackage
 *
 * @method string getGeographicRegionBId()
 * @method string getResourceOwnerId()
 * @method string getPeriod()
 * @method string getGeographicRegionAId()
 * @method string getAutoPay()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getBandwidthPackageChargeType()
 * @method string getName()
 * @method string getPricingCycle()
 */
class CreateCenBandwidthPackageRequest extends \RpcAcsRequest
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
            'CreateCenBandwidthPackage',
            'cbn'
        );
    }

    /**
     * @param string $geographicRegionBId
     *
     * @return $this
     */
    public function setGeographicRegionBId($geographicRegionBId)
    {
        $this->requestParameters['GeographicRegionBId'] = $geographicRegionBId;
        $this->queryParameters['GeographicRegionBId'] = $geographicRegionBId;

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
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $geographicRegionAId
     *
     * @return $this
     */
    public function setGeographicRegionAId($geographicRegionAId)
    {
        $this->requestParameters['GeographicRegionAId'] = $geographicRegionAId;
        $this->queryParameters['GeographicRegionAId'] = $geographicRegionAId;

        return $this;
    }

    /**
     * @param string $autoPay
     *
     * @return $this
     */
    public function setAutoPay($autoPay)
    {
        $this->requestParameters['AutoPay'] = $autoPay;
        $this->queryParameters['AutoPay'] = $autoPay;

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
     * @param string $bandwidthPackageChargeType
     *
     * @return $this
     */
    public function setBandwidthPackageChargeType($bandwidthPackageChargeType)
    {
        $this->requestParameters['BandwidthPackageChargeType'] = $bandwidthPackageChargeType;
        $this->queryParameters['BandwidthPackageChargeType'] = $bandwidthPackageChargeType;

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

    /**
     * @param string $pricingCycle
     *
     * @return $this
     */
    public function setPricingCycle($pricingCycle)
    {
        $this->requestParameters['PricingCycle'] = $pricingCycle;
        $this->queryParameters['PricingCycle'] = $pricingCycle;

        return $this;
    }
}
