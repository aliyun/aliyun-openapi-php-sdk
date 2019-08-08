<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryOrderItemInfoByPaymentIdForAiZhanYou
 *
 * @method string getBizUid()
 * @method string getPaymentId()
 * @method string getBizId()
 */
class QueryOrderItemInfoByPaymentIdForAiZhanYouRequest extends \RpcAcsRequest
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
            'QueryOrderItemInfoByPaymentIdForAiZhanYou',
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
     * @param string $paymentId
     *
     * @return $this
     */
    public function setPaymentId($paymentId)
    {
        $this->requestParameters['PaymentId'] = $paymentId;
        $this->queryParameters['PaymentId'] = $paymentId;

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
