<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCaster
 *
 * @method string getCasterTemplate()
 * @method string getExpireTime()
 * @method string getNormType()
 * @method string getCasterName()
 * @method string getClientToken()
 * @method string getChargeType()
 * @method string getOwnerId()
 * @method string getPurchaseTime()
 */
class CreateCasterRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'CreateCaster',
            'live'
        );
    }

    /**
     * @param string $casterTemplate
     *
     * @return $this
     */
    public function setCasterTemplate($casterTemplate)
    {
        $this->requestParameters['CasterTemplate'] = $casterTemplate;
        $this->queryParameters['CasterTemplate'] = $casterTemplate;

        return $this;
    }

    /**
     * @param string $expireTime
     *
     * @return $this
     */
    public function setExpireTime($expireTime)
    {
        $this->requestParameters['ExpireTime'] = $expireTime;
        $this->queryParameters['ExpireTime'] = $expireTime;

        return $this;
    }

    /**
     * @param string $normType
     *
     * @return $this
     */
    public function setNormType($normType)
    {
        $this->requestParameters['NormType'] = $normType;
        $this->queryParameters['NormType'] = $normType;

        return $this;
    }

    /**
     * @param string $casterName
     *
     * @return $this
     */
    public function setCasterName($casterName)
    {
        $this->requestParameters['CasterName'] = $casterName;
        $this->queryParameters['CasterName'] = $casterName;

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
     * @param string $purchaseTime
     *
     * @return $this
     */
    public function setPurchaseTime($purchaseTime)
    {
        $this->requestParameters['PurchaseTime'] = $purchaseTime;
        $this->queryParameters['PurchaseTime'] = $purchaseTime;

        return $this;
    }
}
