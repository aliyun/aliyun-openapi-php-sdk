<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ShopUpdate
 *
 * @method string getShopCoordinate()
 * @method string getShopProvince()
 * @method string getShopTopType()
 * @method string getShopAddress()
 * @method string getShopType()
 * @method string getWarnEmail()
 * @method string getSid()
 * @method string getShopTel()
 * @method string getWarnpHone()
 * @method string getWarn()
 * @method string getShopArea()
 * @method string getShopRemarks()
 * @method string getShopCity()
 * @method string getShopSubtype()
 * @method string getShopBrand()
 * @method string getShopName()
 * @method string getShopCloseWarn()
 * @method string getShopManager()
 * @method string getShopBusinessHours()
 */
class ShopUpdateRequest extends \RpcAcsRequest
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
            'ShopUpdate',
            'cloudwf'
        );
    }

    /**
     * @param string $shopCoordinate
     *
     * @return $this
     */
    public function setShopCoordinate($shopCoordinate)
    {
        $this->requestParameters['ShopCoordinate'] = $shopCoordinate;
        $this->queryParameters['ShopCoordinate'] = $shopCoordinate;

        return $this;
    }

    /**
     * @param string $shopProvince
     *
     * @return $this
     */
    public function setShopProvince($shopProvince)
    {
        $this->requestParameters['ShopProvince'] = $shopProvince;
        $this->queryParameters['ShopProvince'] = $shopProvince;

        return $this;
    }

    /**
     * @param string $shopTopType
     *
     * @return $this
     */
    public function setShopTopType($shopTopType)
    {
        $this->requestParameters['ShopTopType'] = $shopTopType;
        $this->queryParameters['ShopTopType'] = $shopTopType;

        return $this;
    }

    /**
     * @param string $shopAddress
     *
     * @return $this
     */
    public function setShopAddress($shopAddress)
    {
        $this->requestParameters['ShopAddress'] = $shopAddress;
        $this->queryParameters['ShopAddress'] = $shopAddress;

        return $this;
    }

    /**
     * @param string $shopType
     *
     * @return $this
     */
    public function setShopType($shopType)
    {
        $this->requestParameters['ShopType'] = $shopType;
        $this->queryParameters['ShopType'] = $shopType;

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
     * @param string $sid
     *
     * @return $this
     */
    public function setSid($sid)
    {
        $this->requestParameters['Sid'] = $sid;
        $this->queryParameters['Sid'] = $sid;

        return $this;
    }

    /**
     * @param string $shopTel
     *
     * @return $this
     */
    public function setShopTel($shopTel)
    {
        $this->requestParameters['ShopTel'] = $shopTel;
        $this->queryParameters['ShopTel'] = $shopTel;

        return $this;
    }

    /**
     * @param string $warnpHone
     *
     * @return $this
     */
    public function setWarnpHone($warnpHone)
    {
        $this->requestParameters['WarnpHone'] = $warnpHone;
        $this->queryParameters['WarnpHone'] = $warnpHone;

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
     * @param string $shopArea
     *
     * @return $this
     */
    public function setShopArea($shopArea)
    {
        $this->requestParameters['ShopArea'] = $shopArea;
        $this->queryParameters['ShopArea'] = $shopArea;

        return $this;
    }

    /**
     * @param string $shopRemarks
     *
     * @return $this
     */
    public function setShopRemarks($shopRemarks)
    {
        $this->requestParameters['ShopRemarks'] = $shopRemarks;
        $this->queryParameters['ShopRemarks'] = $shopRemarks;

        return $this;
    }

    /**
     * @param string $shopCity
     *
     * @return $this
     */
    public function setShopCity($shopCity)
    {
        $this->requestParameters['ShopCity'] = $shopCity;
        $this->queryParameters['ShopCity'] = $shopCity;

        return $this;
    }

    /**
     * @param string $shopSubtype
     *
     * @return $this
     */
    public function setShopSubtype($shopSubtype)
    {
        $this->requestParameters['ShopSubtype'] = $shopSubtype;
        $this->queryParameters['ShopSubtype'] = $shopSubtype;

        return $this;
    }

    /**
     * @param string $shopBrand
     *
     * @return $this
     */
    public function setShopBrand($shopBrand)
    {
        $this->requestParameters['ShopBrand'] = $shopBrand;
        $this->queryParameters['ShopBrand'] = $shopBrand;

        return $this;
    }

    /**
     * @param string $shopName
     *
     * @return $this
     */
    public function setShopName($shopName)
    {
        $this->requestParameters['ShopName'] = $shopName;
        $this->queryParameters['ShopName'] = $shopName;

        return $this;
    }

    /**
     * @param string $shopCloseWarn
     *
     * @return $this
     */
    public function setShopCloseWarn($shopCloseWarn)
    {
        $this->requestParameters['ShopCloseWarn'] = $shopCloseWarn;
        $this->queryParameters['ShopCloseWarn'] = $shopCloseWarn;

        return $this;
    }

    /**
     * @param string $shopManager
     *
     * @return $this
     */
    public function setShopManager($shopManager)
    {
        $this->requestParameters['ShopManager'] = $shopManager;
        $this->queryParameters['ShopManager'] = $shopManager;

        return $this;
    }

    /**
     * @param string $shopBusinessHours
     *
     * @return $this
     */
    public function setShopBusinessHours($shopBusinessHours)
    {
        $this->requestParameters['ShopBusinessHours'] = $shopBusinessHours;
        $this->queryParameters['ShopBusinessHours'] = $shopBusinessHours;

        return $this;
    }
}
