<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BusinessUpdate
 *
 * @method string getWarn()
 * @method string getBusinessCity()
 * @method string getWarnEmail()
 * @method string getBusinessAddress()
 * @method string getBid()
 * @method string getBusinessManager()
 * @method string getBusinessProvince()
 */
class BusinessUpdateRequest extends \RpcAcsRequest
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
            'BusinessUpdate',
            'cloudwf'
        );
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
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->requestParameters['Bid'] = $bid;
        $this->queryParameters['Bid'] = $bid;

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
}
