<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryAddress
 *
 * @method string getDivisionCode()
 * @method string getIp()
 * @method string getBizId()
 */
class QueryAddressRequest extends \RpcAcsRequest
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
            'linkedmall',
            '2018-01-16',
            'QueryAddress',
            'linkedmall'
        );
    }

    /**
     * @param string $divisionCode
     *
     * @return $this
     */
    public function setDivisionCode($divisionCode)
    {
        $this->requestParameters['DivisionCode'] = $divisionCode;
        $this->queryParameters['DivisionCode'] = $divisionCode;

        return $this;
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->requestParameters['Ip'] = $ip;
        $this->queryParameters['Ip'] = $ip;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }
}
