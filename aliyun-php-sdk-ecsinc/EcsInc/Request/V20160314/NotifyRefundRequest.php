<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of NotifyRefund
 *
 * @method string getRefundExtendParams()
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getRefundType()
 * @method string getResourceOwnerAccount()
 * @method string getOrderId()
 * @method string getOwnerAccount()
 * @method array getOrderIdss()
 * @method string getOwnerId()
 * @method string getResourceType()
 */
class NotifyRefundRequest extends \RpcAcsRequest
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
            'EcsInc',
            '2016-03-14',
            'NotifyRefund',
            'ecs'
        );
    }

    /**
     * @param string $refundExtendParams
     *
     * @return $this
     */
    public function setRefundExtendParams($refundExtendParams)
    {
        $this->requestParameters['RefundExtendParams'] = $refundExtendParams;
        $this->queryParameters['RefundExtendParams'] = $refundExtendParams;

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $refundType
     *
     * @return $this
     */
    public function setRefundType($refundType)
    {
        $this->requestParameters['RefundType'] = $refundType;
        $this->queryParameters['RefundType'] = $refundType;

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
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->requestParameters['OrderId'] = $orderId;
        $this->queryParameters['OrderId'] = $orderId;

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
     * @param array $orderIdss
     *
     * @return $this
     */
    public function setOrderIdss(array $orderIdss)
    {
        $this->requestParameters['OrderIdss'] = $orderIdss;
        foreach ($orderIdss as $i => $iValue) {
            $this->queryParameters['OrderIds.' . ($i + 1)] = $iValue;
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

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }
}
