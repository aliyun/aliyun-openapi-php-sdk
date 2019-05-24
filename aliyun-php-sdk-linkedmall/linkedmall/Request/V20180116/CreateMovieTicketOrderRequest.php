<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateMovieTicketOrder
 *
 * @method string getBizId()
 * @method string getBizUid()
 * @method string getOutTradeId()
 * @method string getLockSeatAppKey()
 * @method string getExtJson()
 */
class CreateMovieTicketOrderRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'linkedmall',
            '2018-01-16',
            'CreateMovieTicketOrder',
            'linkedmall'
        );
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
     * @param string $outTradeId
     *
     * @return $this
     */
    public function setOutTradeId($outTradeId)
    {
        $this->requestParameters['OutTradeId'] = $outTradeId;
        $this->queryParameters['OutTradeId'] = $outTradeId;

        return $this;
    }

    /**
     * @param string $lockSeatAppKey
     *
     * @return $this
     */
    public function setLockSeatAppKey($lockSeatAppKey)
    {
        $this->requestParameters['LockSeatAppKey'] = $lockSeatAppKey;
        $this->queryParameters['LockSeatAppKey'] = $lockSeatAppKey;

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
}
