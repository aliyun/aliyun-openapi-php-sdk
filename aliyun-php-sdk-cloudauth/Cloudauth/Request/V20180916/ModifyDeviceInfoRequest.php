<?php

namespace Cloudauth\Request\V20180916;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDeviceInfo
 *
 * @method string getUserDeviceId()
 * @method string getBizType()
 * @method string getDuration()
 * @method string getExpiredDay()
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getDeviceId()
 */
class ModifyDeviceInfoRequest extends \RpcAcsRequest
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
            'ModifyDeviceInfo',
            'cloudauth'
        );
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
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->requestParameters['Duration'] = $duration;
        $this->queryParameters['Duration'] = $duration;

        return $this;
    }

    /**
     * @param string $expiredDay
     *
     * @return $this
     */
    public function setExpiredDay($expiredDay)
    {
        $this->requestParameters['ExpiredDay'] = $expiredDay;
        $this->queryParameters['ExpiredDay'] = $expiredDay;

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
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->requestParameters['DeviceId'] = $deviceId;
        $this->queryParameters['DeviceId'] = $deviceId;

        return $this;
    }
}
