<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ActivateLicense
 *
 * @method string getIdentification()
 * @method string getLicenseCode()
 */
class ActivateLicenseRequest extends \RpcAcsRequest
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
            'Market',
            '2015-11-01',
            'ActivateLicense',
            'yunmarket'
        );
    }

    /**
     * @param string $identification
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->requestParameters['Identification'] = $identification;
        $this->queryParameters['Identification'] = $identification;

        return $this;
    }

    /**
     * @param string $licenseCode
     *
     * @return $this
     */
    public function setLicenseCode($licenseCode)
    {
        $this->requestParameters['LicenseCode'] = $licenseCode;
        $this->queryParameters['LicenseCode'] = $licenseCode;

        return $this;
    }
}
