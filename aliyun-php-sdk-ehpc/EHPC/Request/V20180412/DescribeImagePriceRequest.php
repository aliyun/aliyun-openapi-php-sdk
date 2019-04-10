<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeImagePrice
 *
 * @method string getPeriod()
 * @method string getAmount()
 * @method string getImageId()
 * @method string getPriceUnit()
 * @method string getSkuCode()
 * @method string getOrderType()
 */
class DescribeImagePriceRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'DescribeImagePrice',
            'ehs'
        );
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->requestParameters['Amount'] = $amount;
        $this->queryParameters['Amount'] = $amount;

        return $this;
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $priceUnit
     *
     * @return $this
     */
    public function setPriceUnit($priceUnit)
    {
        $this->requestParameters['PriceUnit'] = $priceUnit;
        $this->queryParameters['PriceUnit'] = $priceUnit;

        return $this;
    }

    /**
     * @param string $skuCode
     *
     * @return $this
     */
    public function setSkuCode($skuCode)
    {
        $this->requestParameters['SkuCode'] = $skuCode;
        $this->queryParameters['SkuCode'] = $skuCode;

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
