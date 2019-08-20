<?php

namespace AppMallsService\Request\V20180224;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TaobaoFilmIssueOrder
 *
 * @method string getLockSeatApplyKey()
 * @method string getExtUserId()
 * @method string getExtOrderId()
 * @method string getTotalPrice()
 * @method string getParamsJson()
 */
class TaobaoFilmIssueOrderRequest extends \RpcAcsRequest
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
            'TaobaoFilmIssueOrder'
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
     * @param string $extOrderId
     *
     * @return $this
     */
    public function setExtOrderId($extOrderId)
    {
        $this->requestParameters['ExtOrderId'] = $extOrderId;
        $this->queryParameters['ExtOrderId'] = $extOrderId;

        return $this;
    }

    /**
     * @param string $totalPrice
     *
     * @return $this
     */
    public function setTotalPrice($totalPrice)
    {
        $this->requestParameters['TotalPrice'] = $totalPrice;
        $this->queryParameters['TotalPrice'] = $totalPrice;

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
