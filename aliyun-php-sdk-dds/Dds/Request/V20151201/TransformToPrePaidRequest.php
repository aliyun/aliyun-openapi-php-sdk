<?php

namespace Dds\Request\V20151201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TransformToPrePaid
 *
 * @method string getResourceOwnerId()
 * @method string getPeriod()
 * @method string getAutoPay()
 * @method string getFromApp()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getCouponNo()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getAutoRenew()
 * @method string getSecurityToken()
 * @method string getBusinessInfo()
 */
class TransformToPrePaidRequest extends \RpcAcsRequest
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
            'Dds',
            '2015-12-01',
            'TransformToPrePaid',
            'Dds'
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
     * @param string $fromApp
     *
     * @return $this
     */
    public function setFromApp($fromApp)
    {
        $this->requestParameters['FromApp'] = $fromApp;
        $this->queryParameters['FromApp'] = $fromApp;

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
     * @param string $couponNo
     *
     * @return $this
     */
    public function setCouponNo($couponNo)
    {
        $this->requestParameters['CouponNo'] = $couponNo;
        $this->queryParameters['CouponNo'] = $couponNo;

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        $this->requestParameters['AutoRenew'] = $autoRenew;
        $this->queryParameters['AutoRenew'] = $autoRenew;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $businessInfo
     *
     * @return $this
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->requestParameters['BusinessInfo'] = $businessInfo;
        $this->queryParameters['BusinessInfo'] = $businessInfo;

        return $this;
    }
}
