<?php

namespace Smartag\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UnicomOrderConfirm
 *
 * @method string getTmsCode()
 * @method string getResourceOwnerId()
 * @method array getOrderItems()
 * @method string getOwnerUserId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOrderPostFee()
 * @method string getOwnerId()
 * @method string getTmsOrderCode()
 * @method string getTradeId()
 */
class UnicomOrderConfirmRequest extends \RpcAcsRequest
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
            'Smartag',
            '2018-03-13',
            'UnicomOrderConfirm',
            'smartag'
        );
    }

    /**
     * @param string $tmsCode
     *
     * @return $this
     */
    public function setTmsCode($tmsCode)
    {
        $this->requestParameters['TmsCode'] = $tmsCode;
        $this->queryParameters['TmsCode'] = $tmsCode;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param array $orderItem
     *
     * @return $this
     */
    public function setOrderItems(array $orderItem)
    {
        $this->requestParameters['OrderItems'] = $orderItem;
        foreach ($orderItem as $depth1 => $depth1Value) {
            $this->queryParameters['OrderItem.' . ($depth1 + 1) . '.ScItemName'] = $depth1Value['ScItemName'];
            $this->queryParameters['OrderItem.' . ($depth1 + 1) . '.ItemAmount'] = $depth1Value['ItemAmount'];
            foreach ($depth1Value['SnList'] as $i => $iValue) {
                $this->queryParameters['OrderItem.' . ($depth1 + 1) . '.SnList.' . ($i + 1)] = $iValue;
            }
            $this->queryParameters['OrderItem.' . ($depth1 + 1) . '.OrderItemId'] = $depth1Value['OrderItemId'];
            $this->queryParameters['OrderItem.' . ($depth1 + 1) . '.ScItemCode'] = $depth1Value['ScItemCode'];
            $this->queryParameters['OrderItem.' . ($depth1 + 1) . '.ItemQuantity'] = $depth1Value['ItemQuantity'];
            $this->queryParameters['OrderItem.' . ($depth1 + 1) . '.TradeId'] = $depth1Value['TradeId'];
            $this->queryParameters['OrderItem.' . ($depth1 + 1) . '.TradeItemId'] = $depth1Value['TradeItemId'];
        }

        return $this;
    }

    /**
     * @param string $ownerUserId
     *
     * @return $this
     */
    public function setOwnerUserId($ownerUserId)
    {
        $this->requestParameters['OwnerUserId'] = $ownerUserId;
        $this->queryParameters['OwnerUserId'] = $ownerUserId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $orderPostFee
     *
     * @return $this
     */
    public function setOrderPostFee($orderPostFee)
    {
        $this->requestParameters['OrderPostFee'] = $orderPostFee;
        $this->queryParameters['OrderPostFee'] = $orderPostFee;

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
     * @param string $tmsOrderCode
     *
     * @return $this
     */
    public function setTmsOrderCode($tmsOrderCode)
    {
        $this->requestParameters['TmsOrderCode'] = $tmsOrderCode;
        $this->queryParameters['TmsOrderCode'] = $tmsOrderCode;

        return $this;
    }

    /**
     * @param string $tradeId
     *
     * @return $this
     */
    public function setTradeId($tradeId)
    {
        $this->requestParameters['TradeId'] = $tradeId;
        $this->queryParameters['TradeId'] = $tradeId;

        return $this;
    }
}
