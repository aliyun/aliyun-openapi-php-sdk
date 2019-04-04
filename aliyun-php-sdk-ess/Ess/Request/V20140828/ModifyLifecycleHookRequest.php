<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyLifecycleHook
 *
 * @method string getDefaultResult()
 * @method string getResourceOwnerAccount()
 * @method string getHeartbeatTimeout()
 * @method string getLifecycleHookId()
 * @method string getScalingGroupId()
 * @method string getOwnerAccount()
 * @method string getNotificationMetadata()
 * @method string getOwnerId()
 * @method string getLifecycleTransition()
 * @method string getLifecycleHookName()
 * @method string getNotificationArn()
 */
class ModifyLifecycleHookRequest extends \RpcAcsRequest
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
            'ModifyLifecycleHook',
            'ess'
        );
    }

    /**
     * @param string $defaultResult
     *
     * @return $this
     */
    public function setDefaultResult($defaultResult)
    {
        $this->requestParameters['DefaultResult'] = $defaultResult;
        $this->queryParameters['DefaultResult'] = $defaultResult;

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
    public function setHeartbeatTimeout($heartbeatTimeout)
    {
        $this->requestParameters['HeartbeatTimeout'] = $heartbeatTimeout;
        $this->queryParameters['HeartbeatTimeout'] = $heartbeatTimeout;

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
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->requestParameters['ScalingGroupId'] = $scalingGroupId;
        $this->queryParameters['ScalingGroupId'] = $scalingGroupId;

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
     * @param string $notificationMetadata
     *
     * @return $this
     */
    public function setNotificationMetadata($notificationMetadata)
    {
        $this->requestParameters['NotificationMetadata'] = $notificationMetadata;
        $this->queryParameters['NotificationMetadata'] = $notificationMetadata;

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
     * @param string $lifecycleTransition
     *
     * @return $this
     */
    public function setLifecycleTransition($lifecycleTransition)
    {
        $this->requestParameters['LifecycleTransition'] = $lifecycleTransition;
        $this->queryParameters['LifecycleTransition'] = $lifecycleTransition;

        return $this;
    }

    /**
     * @param string $lifecycleHookName
     *
     * @return $this
     */
    public function setLifecycleHookName($lifecycleHookName)
    {
        $this->requestParameters['LifecycleHookName'] = $lifecycleHookName;
        $this->queryParameters['LifecycleHookName'] = $lifecycleHookName;

        return $this;
    }

    /**
     * @param string $notificationArn
     *
     * @return $this
     */
    public function setNotificationArn($notificationArn)
    {
        $this->requestParameters['NotificationArn'] = $notificationArn;
        $this->queryParameters['NotificationArn'] = $notificationArn;

        return $this;
    }
}
