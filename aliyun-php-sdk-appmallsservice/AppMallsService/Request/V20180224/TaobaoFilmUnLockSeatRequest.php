<?php

namespace AppMallsService\Request\V20180224;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TaobaoFilmUnLockSeat
 *
 * @method string getLockSeatApplyKey()
 * @method string getExtUserId()
 * @method string getParamsJson()
 */
class TaobaoFilmUnLockSeatRequest extends \RpcAcsRequest
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
            'AppMallsService',
            '2018-02-24',
            'TaobaoFilmUnLockSeat'
        );
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

    /**
     * @param string $extUserId
     *
     * @return $this
     */
    public function setExtUserId($extUserId)
    {
        $this->requestParameters['ExtUserId'] = $extUserId;
        $this->queryParameters['ExtUserId'] = $extUserId;

        return $this;
    }

    /**
     * @param string $paramsJson
     *
     * @return $this
     */
    public function setParamsJson($paramsJson)
    {
        $this->requestParameters['ParamsJson'] = $paramsJson;
        $this->queryParameters['ParamsJson'] = $paramsJson;

        return $this;
    }
}
