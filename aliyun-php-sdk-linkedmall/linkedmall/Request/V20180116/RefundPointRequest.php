<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RefundPoint
 *
 * @method string getReason()
 * @method string getSellerId()
 * @method string getLmOrderId()
 * @method string getBizId()
 */
class RefundPointRequest extends \RpcAcsRequest
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
            'RefundPoint',
            'linkedmall'
        );
    }

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->requestParameters['Reason'] = $reason;
        $this->queryParameters['Reason'] = $reason;

        return $this;
    }

    /**
     * @param string $sellerId
     *
     * @return $this
     */
    public function setSellerId($sellerId)
    {
        $this->requestParameters['SellerId'] = $sellerId;
        $this->queryParameters['SellerId'] = $sellerId;

        return $this;
    }

    /**
     * @param string $lmOrderId
     *
     * @return $this
     */
    public function setLmOrderId($lmOrderId)
    {
        $this->requestParameters['LmOrderId'] = $lmOrderId;
        $this->queryParameters['LmOrderId'] = $lmOrderId;

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
