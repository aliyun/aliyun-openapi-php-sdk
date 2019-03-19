<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BusinessCreate
 *
 * @method string getBusinessCity()
 * @method string getCombo()
 * @method string getWarnEmail()
 * @method string getBusinessManager()
 * @method string getBusinessType()
 * @method string getWarn()
 * @method string getBusinessName()
 * @method string getBusinessTopType()
 * @method string getBusinessAddress()
 * @method string getBusinessTel()
 * @method string getBusinessProvince()
 * @method string getBusinessSubtype()
 */
class BusinessCreateRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'BusinessCreate',
            'cloudwf'
        );
    }

    /**
     * @param string $businessCity
     *
     * @return $this
     */
    public function setBusinessCity($businessCity)
    {
        $this->requestParameters['BusinessCity'] = $businessCity;
        $this->queryParameters['BusinessCity'] = $businessCity;

        return $this;
    }

    /**
     * @param string $combo
     *
     * @return $this
     */
    public function setCombo($combo)
    {
        $this->requestParameters['Combo'] = $combo;
        $this->queryParameters['Combo'] = $combo;

        return $this;
    }

    /**
     * @param string $warnEmail
     *
     * @return $this
     */
    public function setWarnEmail($warnEmail)
    {
        $this->requestParameters['WarnEmail'] = $warnEmail;
        $this->queryParameters['WarnEmail'] = $warnEmail;

        return $this;
    }

    /**
     * @param string $businessManager
     *
     * @return $this
     */
    public function setBusinessManager($businessManager)
    {
        $this->requestParameters['BusinessManager'] = $businessManager;
        $this->queryParameters['BusinessManager'] = $businessManager;

        return $this;
    }

    /**
     * @param string $businessType
     *
     * @return $this
     */
    public function setBusinessType($businessType)
    {
        $this->requestParameters['BusinessType'] = $businessType;
        $this->queryParameters['BusinessType'] = $businessType;

        return $this;
    }

    /**
     * @param string $warn
     *
     * @return $this
     */
    public function setWarn($warn)
    {
        $this->requestParameters['Warn'] = $warn;
        $this->queryParameters['Warn'] = $warn;

        return $this;
    }

    /**
     * @param string $businessName
     *
     * @return $this
     */
    public function setBusinessName($businessName)
    {
        $this->requestParameters['BusinessName'] = $businessName;
        $this->queryParameters['BusinessName'] = $businessName;

        return $this;
    }

    /**
     * @param string $businessTopType
     *
     * @return $this
     */
    public function setBusinessTopType($businessTopType)
    {
        $this->requestParameters['BusinessTopType'] = $businessTopType;
        $this->queryParameters['BusinessTopType'] = $businessTopType;

        return $this;
    }

    /**
     * @param string $businessAddress
     *
     * @return $this
     */
    public function setBusinessAddress($businessAddress)
    {
        $this->requestParameters['BusinessAddress'] = $businessAddress;
        $this->queryParameters['BusinessAddress'] = $businessAddress;

        return $this;
    }

    /**
     * @param string $businessTel
     *
     * @return $this
     */
    public function setBusinessTel($businessTel)
    {
        $this->requestParameters['BusinessTel'] = $businessTel;
        $this->queryParameters['BusinessTel'] = $businessTel;

        return $this;
    }

    /**
     * @param string $businessProvince
     *
     * @return $this
     */
    public function setBusinessProvince($businessProvince)
    {
        $this->requestParameters['BusinessProvince'] = $businessProvince;
        $this->queryParameters['BusinessProvince'] = $businessProvince;

        return $this;
    }

    /**
     * @param string $businessSubtype
     *
     * @return $this
     */
    public function setBusinessSubtype($businessSubtype)
    {
        $this->requestParameters['BusinessSubtype'] = $businessSubtype;
        $this->queryParameters['BusinessSubtype'] = $businessSubtype;

        return $this;
    }
}
