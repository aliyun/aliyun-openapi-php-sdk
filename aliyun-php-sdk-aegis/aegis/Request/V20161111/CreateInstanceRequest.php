<?php

namespace aegis\Request\V20161111;

/**
 * Request of CreateInstance
 *
 * @method string getDuration()
 * @method string getIsAutoRenew()
 * @method string getClientToken()
 * @method string getVmNumber()
 * @method string getOwnerId()
 * @method string getVersionCode()
 * @method string getPricingCycle()
 * @method string getAutoRenewDuration()
 */
class CreateInstanceRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'CreateInstance',
            'vipaegis'
        );
    }

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->requestParameters['Duration'] = $duration;
        $this->queryParameters['Duration'] = $duration;

        return $this;
    }

    /**
     * @param string $isAutoRenew
     *
     * @return $this
     */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->requestParameters['IsAutoRenew'] = $isAutoRenew;
        $this->queryParameters['IsAutoRenew'] = $isAutoRenew;

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
     * @param string $vmNumber
     *
     * @return $this
     */
    public function setVmNumber($vmNumber)
    {
        $this->requestParameters['VmNumber'] = $vmNumber;
        $this->queryParameters['VmNumber'] = $vmNumber;

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
     * @param string $versionCode
     *
     * @return $this
     */
    public function setVersionCode($versionCode)
    {
        $this->requestParameters['VersionCode'] = $versionCode;
        $this->queryParameters['VersionCode'] = $versionCode;

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
     * @param string $autoRenewDuration
     *
     * @return $this
     */
    public function setAutoRenewDuration($autoRenewDuration)
    {
        $this->requestParameters['AutoRenewDuration'] = $autoRenewDuration;
        $this->queryParameters['AutoRenewDuration'] = $autoRenewDuration;

        return $this;
    }
}
