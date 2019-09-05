<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOrder
 *
 * @method string getOrderSouce()
 * @method string getCommodity()
 * @method string getClientToken()
 * @method string getOwnerId()
 * @method string getPaymentType()
 * @method string getOrderType()
 */
class CreateOrderRequest extends \RpcAcsRequest
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
            'Market',
            '2015-11-01',
            'CreateOrder',
            'yunmarket'
        );
    }

    /**
     * @param string $orderSouce
     *
     * @return $this
     */
    public function setOrderSouce($orderSouce)
    {
        $this->requestParameters['OrderSouce'] = $orderSouce;
        $this->queryParameters['OrderSouce'] = $orderSouce;

        return $this;
    }

    /**
     * @param string $commodity
     *
     * @return $this
     */
    public function setCommodity($commodity)
    {
        $this->requestParameters['Commodity'] = $commodity;
        $this->queryParameters['Commodity'] = $commodity;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $paymentType
     *
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->requestParameters['PaymentType'] = $paymentType;
        $this->queryParameters['PaymentType'] = $paymentType;

        return $this;
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        $this->requestParameters['OrderType'] = $orderType;
        $this->queryParameters['OrderType'] = $orderType;

        return $this;
    }
}
