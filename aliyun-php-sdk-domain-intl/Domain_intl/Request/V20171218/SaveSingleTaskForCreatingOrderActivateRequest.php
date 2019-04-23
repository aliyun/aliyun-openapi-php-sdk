<?php

namespace Domain_intl\Request\V20171218;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveSingleTaskForCreatingOrderActivate
 *
 * @method string getCountry()
 * @method string getSubscriptionDuration()
 * @method string getPermitPremiumActivation()
 * @method string getCity()
 * @method string getDns2()
 * @method string getDns1()
 * @method string getRegistrantProfileId()
 * @method string getCouponNo()
 * @method string getAliyunDns()
 * @method string getTelExt()
 * @method string getProvince()
 * @method string getPostalCode()
 * @method string getLang()
 * @method string getEmail()
 * @method string getAddress()
 * @method string getTelArea()
 * @method string getDomainName()
 * @method string getRegistrantType()
 * @method string getTelephone()
 * @method string getTrademarkDomainActivation()
 * @method string getUseCoupon()
 * @method string getRegistrantOrganization()
 * @method string getPromotionNo()
 * @method string getUserClientIp()
 * @method string getEnableDomainProxy()
 * @method string getRegistrantName()
 * @method string getUsePromotion()
 */
class SaveSingleTaskForCreatingOrderActivateRequest extends \RpcAcsRequest
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
            'SaveSingleTaskForCreatingOrderActivate',
            'domain'
        );
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->requestParameters['Country'] = $country;
        $this->queryParameters['Country'] = $country;

        return $this;
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
     * @param string $permitPremiumActivation
     *
     * @return $this
     */
    public function setPermitPremiumActivation($permitPremiumActivation)
    {
        $this->requestParameters['PermitPremiumActivation'] = $permitPremiumActivation;
        $this->queryParameters['PermitPremiumActivation'] = $permitPremiumActivation;

        return $this;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->requestParameters['City'] = $city;
        $this->queryParameters['City'] = $city;

        return $this;
    }

    /**
     * @param string $dns2
     *
     * @return $this
     */
    public function setDns2($dns2)
    {
        $this->requestParameters['Dns2'] = $dns2;
        $this->queryParameters['Dns2'] = $dns2;

        return $this;
    }

    /**
     * @param string $dns1
     *
     * @return $this
     */
    public function setDns1($dns1)
    {
        $this->requestParameters['Dns1'] = $dns1;
        $this->queryParameters['Dns1'] = $dns1;

        return $this;
    }

    /**
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function setRegistrantProfileId($registrantProfileId)
    {
        $this->requestParameters['RegistrantProfileId'] = $registrantProfileId;
        $this->queryParameters['RegistrantProfileId'] = $registrantProfileId;

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
     * @param string $aliyunDns
     *
     * @return $this
     */
    public function setAliyunDns($aliyunDns)
    {
        $this->requestParameters['AliyunDns'] = $aliyunDns;
        $this->queryParameters['AliyunDns'] = $aliyunDns;

        return $this;
    }

    /**
     * @param string $telExt
     *
     * @return $this
     */
    public function setTelExt($telExt)
    {
        $this->requestParameters['TelExt'] = $telExt;
        $this->queryParameters['TelExt'] = $telExt;

        return $this;
    }

    /**
     * @param string $province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->requestParameters['Province'] = $province;
        $this->queryParameters['Province'] = $province;

        return $this;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->requestParameters['PostalCode'] = $postalCode;
        $this->queryParameters['PostalCode'] = $postalCode;

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
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->requestParameters['Email'] = $email;
        $this->queryParameters['Email'] = $email;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->requestParameters['Address'] = $address;
        $this->queryParameters['Address'] = $address;

        return $this;
    }

    /**
     * @param string $telArea
     *
     * @return $this
     */
    public function setTelArea($telArea)
    {
        $this->requestParameters['TelArea'] = $telArea;
        $this->queryParameters['TelArea'] = $telArea;

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
     * @param string $registrantType
     *
     * @return $this
     */
    public function setRegistrantType($registrantType)
    {
        $this->requestParameters['RegistrantType'] = $registrantType;
        $this->queryParameters['RegistrantType'] = $registrantType;

        return $this;
    }

    /**
     * @param string $telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->requestParameters['Telephone'] = $telephone;
        $this->queryParameters['Telephone'] = $telephone;

        return $this;
    }

    /**
     * @param string $trademarkDomainActivation
     *
     * @return $this
     */
    public function setTrademarkDomainActivation($trademarkDomainActivation)
    {
        $this->requestParameters['TrademarkDomainActivation'] = $trademarkDomainActivation;
        $this->queryParameters['TrademarkDomainActivation'] = $trademarkDomainActivation;

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
     * @param string $registrantOrganization
     *
     * @return $this
     */
    public function setRegistrantOrganization($registrantOrganization)
    {
        $this->requestParameters['RegistrantOrganization'] = $registrantOrganization;
        $this->queryParameters['RegistrantOrganization'] = $registrantOrganization;

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
     * @param string $enableDomainProxy
     *
     * @return $this
     */
    public function setEnableDomainProxy($enableDomainProxy)
    {
        $this->requestParameters['EnableDomainProxy'] = $enableDomainProxy;
        $this->queryParameters['EnableDomainProxy'] = $enableDomainProxy;

        return $this;
    }

    /**
     * @param string $registrantName
     *
     * @return $this
     */
    public function setRegistrantName($registrantName)
    {
        $this->requestParameters['RegistrantName'] = $registrantName;
        $this->queryParameters['RegistrantName'] = $registrantName;

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
