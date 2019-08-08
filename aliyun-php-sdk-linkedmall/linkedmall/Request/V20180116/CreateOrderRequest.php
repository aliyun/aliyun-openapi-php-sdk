<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOrder
 *
 * @method string getItemId()
 * @method string getQuantity()
 * @method string getTotalAmount()
 * @method string getThirdPartyUserId()
 * @method string getBizUid()
 * @method string getExtJson()
 * @method string getBizId()
 * @method string getOutTradeId()
 * @method string getUseAnonymousTbAccount()
 * @method string getOrderExpireTime()
 * @method array getItemLists()
 * @method string getDeliveryAddress()
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
            'linkedmall',
            '2018-01-16',
            'CreateOrder',
            'linkedmall'
        );
    }

    /**
     * @param string $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->requestParameters['ItemId'] = $itemId;
        $this->queryParameters['ItemId'] = $itemId;

        return $this;
    }

    /**
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->requestParameters['Quantity'] = $quantity;
        $this->queryParameters['Quantity'] = $quantity;

        return $this;
    }

    /**
     * @param string $totalAmount
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->requestParameters['TotalAmount'] = $totalAmount;
        $this->queryParameters['TotalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * @param string $thirdPartyUserId
     *
     * @return $this
     */
    public function setThirdPartyUserId($thirdPartyUserId)
    {
        $this->requestParameters['ThirdPartyUserId'] = $thirdPartyUserId;
        $this->queryParameters['ThirdPartyUserId'] = $thirdPartyUserId;

        return $this;
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
     * @param string $outTradeId
     *
     * @return $this
     */
    public function setOutTradeId($outTradeId)
    {
        $this->requestParameters['OutTradeId'] = $outTradeId;
        $this->queryParameters['OutTradeId'] = $outTradeId;

        return $this;
    }

    /**
     * @param string $useAnonymousTbAccount
     *
     * @return $this
     */
    public function setUseAnonymousTbAccount($useAnonymousTbAccount)
    {
        $this->requestParameters['UseAnonymousTbAccount'] = $useAnonymousTbAccount;
        $this->queryParameters['UseAnonymousTbAccount'] = $useAnonymousTbAccount;

        return $this;
    }

    /**
     * @param string $orderExpireTime
     *
     * @return $this
     */
    public function setOrderExpireTime($orderExpireTime)
    {
        $this->requestParameters['OrderExpireTime'] = $orderExpireTime;
        $this->queryParameters['OrderExpireTime'] = $orderExpireTime;

        return $this;
    }

    /**
     * @param array $itemList
     *
     * @return $this
     */
    public function setItemLists(array $itemList)
    {
        $this->requestParameters['ItemLists'] = $itemList;
        foreach ($itemList as $depth1 => $depth1Value) {
            $this->queryParameters['ItemList.' . ($depth1 + 1) . '.ItemId'] = $depth1Value['ItemId'];
            $this->queryParameters['ItemList.' . ($depth1 + 1) . '.Quantity'] = $depth1Value['Quantity'];
            $this->queryParameters['ItemList.' . ($depth1 + 1) . '.SkuId'] = $depth1Value['SkuId'];
        }

        return $this;
    }

    /**
     * @param string $deliveryAddress
     *
     * @return $this
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->requestParameters['DeliveryAddress'] = $deliveryAddress;
        $this->queryParameters['DeliveryAddress'] = $deliveryAddress;

        return $this;
    }
}
