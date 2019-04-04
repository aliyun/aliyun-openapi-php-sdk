<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RecordLifecycleActionHeartbeat
 *
 * @method string getlifecycleActionToken()
 * @method string getResourceOwnerAccount()
 * @method string getheartbeatTimeout()
 * @method string getlifecycleHookId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class RecordLifecycleActionHeartbeatRequest extends \RpcAcsRequest
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
            'Ess',
            '2014-08-28',
            'RecordLifecycleActionHeartbeat',
            'ess'
        );
    }

    /**
     * @param string $lifecycleActionToken
     *
     * @return $this
     */
    public function setlifecycleActionToken($lifecycleActionToken)
    {
        $this->requestParameters['lifecycleActionToken'] = $lifecycleActionToken;
        $this->queryParameters['lifecycleActionToken'] = $lifecycleActionToken;

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
     * @param string $heartbeatTimeout
     *
     * @return $this
     */
    public function setheartbeatTimeout($heartbeatTimeout)
    {
        $this->requestParameters['heartbeatTimeout'] = $heartbeatTimeout;
        $this->queryParameters['heartbeatTimeout'] = $heartbeatTimeout;

        return $this;
    }

    /**
     * @param string $lifecycleHookId
     *
     * @return $this
     */
    public function setlifecycleHookId($lifecycleHookId)
    {
        $this->requestParameters['lifecycleHookId'] = $lifecycleHookId;
        $this->queryParameters['lifecycleHookId'] = $lifecycleHookId;

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
