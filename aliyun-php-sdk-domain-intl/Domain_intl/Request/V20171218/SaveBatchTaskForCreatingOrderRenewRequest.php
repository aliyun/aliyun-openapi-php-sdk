<?php

namespace Domain_intl\Request\V20171218;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveBatchTaskForCreatingOrderRenew
 *
 * @method string getPromotionNo()
 * @method string getUserClientIp()
 * @method array getOrderRenewParams()
 * @method string getCouponNo()
 * @method string getUseCoupon()
 * @method string getLang()
 * @method string getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderRenewRequest extends \RpcAcsRequest
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
            'Domain-intl',
            '2017-12-18',
            'SaveBatchTaskForCreatingOrderRenew',
            'domain'
        );
    }

    /**
     * @param string $promotionNo
     *
     * @return $this
     */
    public function setPromotionNo($promotionNo)
    {
        $this->requestParameters['PromotionNo'] = $promotionNo;
        $this->queryParameters['PromotionNo'] = $promotionNo;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param array $orderRenewParam
     *
     * @return $this
     */
    public function setOrderRenewParams(array $orderRenewParam)
    {
        $this->requestParameters['OrderRenewParams'] = $orderRenewParam;
        foreach ($orderRenewParam as $depth1 => $depth1Value) {
            $this->queryParameters['OrderRenewParam.' . ($depth1 + 1) . '.SubscriptionDuration'] = $depth1Value['SubscriptionDuration'];
            $this->queryParameters['OrderRenewParam.' . ($depth1 + 1) . '.CurrentExpirationDate'] = $depth1Value['CurrentExpirationDate'];
            $this->queryParameters['OrderRenewParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
        }

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
     * @param string $useCoupon
     *
     * @return $this
     */
    public function setUseCoupon($useCoupon)
    {
        $this->requestParameters['UseCoupon'] = $useCoupon;
        $this->queryParameters['UseCoupon'] = $useCoupon;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $usePromotion
     *
     * @return $this
     */
    public function setUsePromotion($usePromotion)
    {
        $this->requestParameters['UsePromotion'] = $usePromotion;
        $this->queryParameters['UsePromotion'] = $usePromotion;

        return $this;
    }
}
