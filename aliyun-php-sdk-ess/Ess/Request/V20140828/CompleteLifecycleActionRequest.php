<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CompleteLifecycleAction
 *
 * @method string getLifecycleActionToken()
 * @method string getResourceOwnerAccount()
 * @method string getLifecycleHookId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getLifecycleActionResult()
 */
class CompleteLifecycleActionRequest extends \RpcAcsRequest
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
            'CompleteLifecycleAction',
            'ess'
        );
    }

    /**
     * @param string $lifecycleActionToken
     *
     * @return $this
     */
    public function setLifecycleActionToken($lifecycleActionToken)
    {
        $this->requestParameters['LifecycleActionToken'] = $lifecycleActionToken;
        $this->queryParameters['LifecycleActionToken'] = $lifecycleActionToken;

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
     * @param string $lifecycleHookId
     *
     * @return $this
     */
    public function setLifecycleHookId($lifecycleHookId)
    {
        $this->requestParameters['LifecycleHookId'] = $lifecycleHookId;
        $this->queryParameters['LifecycleHookId'] = $lifecycleHookId;

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

    /**
     * @param string $lifecycleActionResult
     *
     * @return $this
     */
    public function setLifecycleActionResult($lifecycleActionResult)
    {
        $this->requestParameters['LifecycleActionResult'] = $lifecycleActionResult;
        $this->queryParameters['LifecycleActionResult'] = $lifecycleActionResult;

        return $this;
    }
}
