<?php

namespace Domain_intl\Request\V20171218;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveBatchTaskForCreatingOrderActivate
 *
 * @method array getOrderActivateParams()
 * @method string getPromotionNo()
 * @method string getUserClientIp()
 * @method string getCouponNo()
 * @method string getUseCoupon()
 * @method string getLang()
 * @method string getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderActivateRequest extends \RpcAcsRequest
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
            'SaveBatchTaskForCreatingOrderActivate',
            'domain'
        );
    }

    /**
     * @param array $orderActivateParam
     *
     * @return $this
     */
    public function setOrderActivateParams(array $orderActivateParam)
    {
        $this->requestParameters['OrderActivateParams'] = $orderActivateParam;
        foreach ($orderActivateParam as $depth1 => $depth1Value) {
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.Country'] = $depth1Value['Country'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.SubscriptionDuration'] = $depth1Value['SubscriptionDuration'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.Address'] = $depth1Value['Address'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.PermitPremiumActivation'] = $depth1Value['PermitPremiumActivation'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.TelArea'] = $depth1Value['TelArea'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.City'] = $depth1Value['City'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.Dns2'] = $depth1Value['Dns2'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.Dns1'] = $depth1Value['Dns1'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantProfileId'] = $depth1Value['RegistrantProfileId'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantType'] = $depth1Value['RegistrantType'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.Telephone'] = $depth1Value['Telephone'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.TrademarkDomainActivation'] = $depth1Value['TrademarkDomainActivation'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.AliyunDns'] = $depth1Value['AliyunDns'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantOrganization'] = $depth1Value['RegistrantOrganization'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.TelExt'] = $depth1Value['TelExt'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.Province'] = $depth1Value['Province'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.PostalCode'] = $depth1Value['PostalCode'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.EnableDomainProxy'] = $depth1Value['EnableDomainProxy'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.Email'] = $depth1Value['Email'];
            $this->queryParameters['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantName'] = $depth1Value['RegistrantName'];
        }

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
