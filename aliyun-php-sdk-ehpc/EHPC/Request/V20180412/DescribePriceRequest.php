<?php

namespace EHPC\Request\V20180412;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribePrice
 *
 * @method string getPriceUnit()
 * @method array getCommoditiess()
 * @method string getChargeType()
 * @method string getOrderType()
 */
class DescribePriceRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'EHPC',
            '2018-04-12',
            'DescribePrice',
            'ehs'
        );
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
     * @param array $commodities
     *
     * @return $this
     */
    public function setCommoditiess(array $commodities)
    {
        $this->requestParameters['Commoditiess'] = $commodities;
        foreach ($commodities as $depth1 => $depth1Value) {
            $this->queryParameters['Commodities.' . ($depth1 + 1) . '.Amount'] = $depth1Value['Amount'];
            $this->queryParameters['Commodities.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->queryParameters['Commodities.' . ($depth1 + 1) . '.NodeType'] = $depth1Value['NodeType'];
            $this->queryParameters['Commodities.' . ($depth1 + 1) . '.SystemDiskCategory'] = $depth1Value['SystemDiskCategory'];
            $this->queryParameters['Commodities.' . ($depth1 + 1) . '.SystemDiskSize'] = $depth1Value['SystemDiskSize'];
            $this->queryParameters['Commodities.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->queryParameters['Commodities.' . ($depth1 + 1) . '.NetworkType'] = $depth1Value['NetworkType'];
        }

        return $this;
    }

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->requestParameters['ChargeType'] = $chargeType;
        $this->queryParameters['ChargeType'] = $chargeType;

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
