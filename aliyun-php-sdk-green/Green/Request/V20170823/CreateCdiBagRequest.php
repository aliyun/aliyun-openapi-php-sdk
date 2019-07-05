<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCdiBag
 *
 * @method string getClientToken()
 * @method string getOrderNum()
 * @method string getCommodityCode()
 * @method string getOwnerId()
 * @method string getFlowOutSpec()
 * @method string getOrderType()
 */
class CreateCdiBagRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'CreateCdiBag',
            'green'
        );
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
     * @param string $orderNum
     *
     * @return $this
     */
    public function setOrderNum($orderNum)
    {
        $this->requestParameters['OrderNum'] = $orderNum;
        $this->queryParameters['OrderNum'] = $orderNum;

        return $this;
    }

    /**
     * @param string $commodityCode
     *
     * @return $this
     */
    public function setCommodityCode($commodityCode)
    {
        $this->requestParameters['CommodityCode'] = $commodityCode;
        $this->queryParameters['CommodityCode'] = $commodityCode;

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
     * @param string $flowOutSpec
     *
     * @return $this
     */
    public function setFlowOutSpec($flowOutSpec)
    {
        $this->requestParameters['FlowOutSpec'] = $flowOutSpec;
        $this->queryParameters['FlowOutSpec'] = $flowOutSpec;

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
