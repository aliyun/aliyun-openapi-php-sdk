<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerRefundVcpuQuery
 *
 * @method string getResourceOwnerId()
 * @method string getAliUid()
 * @method string getTimestamp()
 * @method string getIsLock()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class InnerRefundVcpuQueryRequest extends \RpcAcsRequest
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
            'InnerRefundVcpuQuery',
            'ecs'
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
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
    {
        $this->requestParameters['AliUid'] = $aliUid;
        $this->queryParameters['AliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->requestParameters['Timestamp'] = $timestamp;
        $this->queryParameters['Timestamp'] = $timestamp;

        return $this;
    }

    /**
     * @param string $isLock
     *
     * @return $this
     */
    public function setIsLock($isLock)
    {
        $this->requestParameters['IsLock'] = $isLock;
        $this->queryParameters['IsLock'] = $isLock;

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
