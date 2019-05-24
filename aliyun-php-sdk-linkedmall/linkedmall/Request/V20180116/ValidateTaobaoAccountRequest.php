<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ValidateTaobaoAccount
 *
 * @method string getBizUid()
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getMobileNo()
 * @method string getTbUserNick()
 */
class ValidateTaobaoAccountRequest extends \RpcAcsRequest
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
            'ValidateTaobaoAccount',
            'linkedmall'
        );
    }

    /**
     * @param string $bizUid
     *
     * @return $this
     */
    public function setBizUid($bizUid)
    {
        $this->requestParameters['BizUid'] = $bizUid;
        $this->queryParameters['BizUid'] = $bizUid;

        return $this;
    }

    /**
     * @param string $extJson
     *
     * @return $this
     */
    public function setExtJson($extJson)
    {
        $this->requestParameters['ExtJson'] = $extJson;
        $this->queryParameters['ExtJson'] = $extJson;

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

    /**
     * @param string $mobileNo
     *
     * @return $this
     */
    public function setMobileNo($mobileNo)
    {
        $this->requestParameters['MobileNo'] = $mobileNo;
        $this->queryParameters['MobileNo'] = $mobileNo;

        return $this;
    }

    /**
     * @param string $tbUserNick
     *
     * @return $this
     */
    public function setTbUserNick($tbUserNick)
    {
        $this->requestParameters['TbUserNick'] = $tbUserNick;
        $this->queryParameters['TbUserNick'] = $tbUserNick;

        return $this;
    }
}
