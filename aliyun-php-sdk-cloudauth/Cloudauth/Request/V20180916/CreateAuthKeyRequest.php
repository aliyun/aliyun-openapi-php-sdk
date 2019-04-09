<?php

namespace Cloudauth\Request\V20180916;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAuthKey
 *
 * @method string getBizType()
 * @method string getUserDeviceId()
 * @method string getSourceIp()
 * @method string getTest()
 * @method string getAuthYears()
 * @method string getLang()
 */
class CreateAuthKeyRequest extends \RpcAcsRequest
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
            'Cloudauth',
            '2018-09-16',
            'CreateAuthKey',
            'cloudauth'
        );
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        $this->requestParameters['BizType'] = $bizType;
        $this->queryParameters['BizType'] = $bizType;

        return $this;
    }

    /**
     * @param string $userDeviceId
     *
     * @return $this
     */
    public function setUserDeviceId($userDeviceId)
    {
        $this->requestParameters['UserDeviceId'] = $userDeviceId;
        $this->queryParameters['UserDeviceId'] = $userDeviceId;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $test
     *
     * @return $this
     */
    public function setTest($test)
    {
        $this->requestParameters['Test'] = $test;
        $this->queryParameters['Test'] = $test;

        return $this;
    }

    /**
     * @param string $authYears
     *
     * @return $this
     */
    public function setAuthYears($authYears)
    {
        $this->requestParameters['AuthYears'] = $authYears;
        $this->queryParameters['AuthYears'] = $authYears;

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
}
