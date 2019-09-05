<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateInstance
 *
 * @method string getAutoPay()
 * @method string getInstanceSpec()
 * @method string getHttpsPolicy()
 * @method string getToken()
 * @method string getDuration()
 * @method string getInstanceName()
 * @method string getZoneId()
 * @method string getChargeType()
 * @method string getPricingCycle()
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
            'CloudAPI',
            '2016-07-14',
            'CreateInstance',
            'apigateway'
        );
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
     * @param string $instanceSpec
     *
     * @return $this
     */
    public function setInstanceSpec($instanceSpec)
    {
        $this->requestParameters['InstanceSpec'] = $instanceSpec;
        $this->queryParameters['InstanceSpec'] = $instanceSpec;

        return $this;
    }

    /**
     * @param string $httpsPolicy
     *
     * @return $this
     */
    public function setHttpsPolicy($httpsPolicy)
    {
        $this->requestParameters['HttpsPolicy'] = $httpsPolicy;
        $this->queryParameters['HttpsPolicy'] = $httpsPolicy;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->requestParameters['Token'] = $token;
        $this->queryParameters['Token'] = $token;

        return $this;
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
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->requestParameters['ChargeType'] = $chargeType;
        $this->queryParameters['ChargeType'] = $chargeType;

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
