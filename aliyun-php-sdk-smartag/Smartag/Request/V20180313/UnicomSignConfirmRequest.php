<?php

namespace Smartag\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UnicomSignConfirm
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method array getTmsOrders()
 * @method string getOwnerId()
 */
class UnicomSignConfirmRequest extends \RpcAcsRequest
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
            'UnicomSignConfirm',
            'smartag'
        );
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
     * @param array $tmsOrder
     *
     * @return $this
     */
    public function setTmsOrders(array $tmsOrder)
    {
        $this->requestParameters['TmsOrders'] = $tmsOrder;
        foreach ($tmsOrder as $depth1 => $depth1Value) {
            $this->queryParameters['TmsOrder.' . ($depth1 + 1) . '.TmsCode'] = $depth1Value['TmsCode'];
            $this->queryParameters['TmsOrder.' . ($depth1 + 1) . '.SigningTime'] = $depth1Value['SigningTime'];
            $this->queryParameters['TmsOrder.' . ($depth1 + 1) . '.TmsOrderCode'] = $depth1Value['TmsOrderCode'];
            $this->queryParameters['TmsOrder.' . ($depth1 + 1) . '.TradeId'] = $depth1Value['TradeId'];
        }

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
}
