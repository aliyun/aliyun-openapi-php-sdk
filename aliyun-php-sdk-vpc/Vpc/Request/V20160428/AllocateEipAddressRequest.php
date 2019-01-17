<?php

namespace Vpc\Request\V20160428;

/**
 * Request of AllocateEipAddress
 *
 * @method string getResourceOwnerId()
 * @method string getPeriod()
 * @method string getAutoPay()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getClientToken()
 * @method string getISP()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getResourceGroupId()
 * @method string getInternetChargeType()
 * @method string getNetmode()
 * @method string getPricingCycle()
 * @method string getInstanceChargeType()
 */
class AllocateEipAddressRequest extends \RpcAcsRequest
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
            'AllocateEipAddress',
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
     * @param string $iSP
     *
     * @return $this
     */
    public function setISP($iSP)
    {
        $this->requestParameters['ISP'] = $iSP;
        $this->queryParameters['ISP'] = $iSP;

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
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        $this->requestParameters['InternetChargeType'] = $internetChargeType;
        $this->queryParameters['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @param string $netmode
     *
     * @return $this
     */
    public function setNetmode($netmode)
    {
        $this->requestParameters['Netmode'] = $netmode;
        $this->queryParameters['Netmode'] = $netmode;

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

    /**
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        $this->requestParameters['InstanceChargeType'] = $instanceChargeType;
        $this->queryParameters['InstanceChargeType'] = $instanceChargeType;

        return $this;
    }
}
