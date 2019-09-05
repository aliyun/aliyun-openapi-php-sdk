<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribePrice
 *
 * @method string getCommodity()
 * @method string getOrderType()
 */
class DescribePriceRequest extends \RpcAcsRequest
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
            'DescribePrice',
            'yunmarket'
        );
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
