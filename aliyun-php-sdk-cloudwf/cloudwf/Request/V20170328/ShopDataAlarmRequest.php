<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ShopDataAlarm
 *
 * @method string getWarnPhone()
 * @method string getWarn()
 * @method string getCloseWarn()
 * @method string getWarnEmail()
 * @method string getSid()
 */
class ShopDataAlarmRequest extends \RpcAcsRequest
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
            'ShopDataAlarm',
            'cloudwf'
        );
    }

    /**
     * @param string $warnPhone
     *
     * @return $this
     */
    public function setWarnPhone($warnPhone)
    {
        $this->requestParameters['WarnPhone'] = $warnPhone;
        $this->queryParameters['WarnPhone'] = $warnPhone;

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
     * @param string $closeWarn
     *
     * @return $this
     */
    public function setCloseWarn($closeWarn)
    {
        $this->requestParameters['CloseWarn'] = $closeWarn;
        $this->queryParameters['CloseWarn'] = $closeWarn;

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
}
