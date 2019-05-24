<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ReleaseMovieSeat
 *
 * @method string getBizUid()
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getLockSeatApplyKey()
 */
class ReleaseMovieSeatRequest extends \RpcAcsRequest
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
            'ReleaseMovieSeat',
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
     * @param string $lockSeatApplyKey
     *
     * @return $this
     */
    public function setLockSeatApplyKey($lockSeatApplyKey)
    {
        $this->requestParameters['LockSeatApplyKey'] = $lockSeatApplyKey;
        $this->queryParameters['LockSeatApplyKey'] = $lockSeatApplyKey;

        return $this;
    }
}
