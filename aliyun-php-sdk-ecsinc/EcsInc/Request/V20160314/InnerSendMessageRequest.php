<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerSendMessage
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getMessage()
 * @method string getShardingKey()
 */
class InnerSendMessageRequest extends \RpcAcsRequest
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
            'InnerSendMessage',
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
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->requestParameters['Message'] = $message;
        $this->queryParameters['Message'] = $message;

        return $this;
    }

    /**
     * @param string $shardingKey
     *
     * @return $this
     */
    public function setShardingKey($shardingKey)
    {
        $this->requestParameters['ShardingKey'] = $shardingKey;
        $this->queryParameters['ShardingKey'] = $shardingKey;

        return $this;
    }
}
