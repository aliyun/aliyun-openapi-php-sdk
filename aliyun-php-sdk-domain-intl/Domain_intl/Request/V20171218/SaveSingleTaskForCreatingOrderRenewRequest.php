<?php

namespace Domain_intl\Request\V20171218;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveSingleTaskForCreatingOrderRenew
 *
 * @method string getSubscriptionDuration()
 * @method string getPromotionNo()
 * @method string getCurrentExpirationDate()
 * @method string getUserClientIp()
 * @method string getDomainName()
 * @method string getCouponNo()
 * @method string getUseCoupon()
 * @method string getLang()
 * @method string getUsePromotion()
 */
class SaveSingleTaskForCreatingOrderRenewRequest extends \RpcAcsRequest
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
            'SaveSingleTaskForCreatingOrderRenew',
            'domain'
        );
    }

    /**
     * @param string $subscriptionDuration
     *
     * @return $this
     */
    public function setSubscriptionDuration($subscriptionDuration)
    {
        $this->requestParameters['SubscriptionDuration'] = $subscriptionDuration;
        $this->queryParameters['SubscriptionDuration'] = $subscriptionDuration;

        return $this;
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
     * @param string $currentExpirationDate
     *
     * @return $this
     */
    public function setCurrentExpirationDate($currentExpirationDate)
    {
        $this->requestParameters['CurrentExpirationDate'] = $currentExpirationDate;
        $this->queryParameters['CurrentExpirationDate'] = $currentExpirationDate;

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
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

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
