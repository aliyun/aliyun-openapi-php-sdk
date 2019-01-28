<?php

namespace Ess\Request\V20140828;

/**
 * Request of CreateLifecycleHook
 *
 * @method string getDefaultResult()
 * @method string getResourceOwnerAccount()
 * @method string getHeartbeatTimeout()
 * @method string getScalingGroupId()
 * @method string getOwnerAccount()
 * @method string getNotificationMetadata()
 * @method string getOwnerId()
 * @method string getLifecycleTransition()
 * @method string getLifecycleHookName()
 * @method string getNotificationArn()
 * @method array getLifecycleHooks()
 */
class CreateLifecycleHookRequest extends \RpcAcsRequest
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
            'CreateLifecycleHook',
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

    /**
     * @param array $lifecycleHooks
     *
     * @return $this
     */
    public function setLifecycleHooks(array $lifecycleHooks)
    {
        $this->requestParameters['LifecycleHooks'] = $lifecycleHooks;
        foreach ($lifecycleHooks as $i => $iValue) {
            $this->queryParameters['LifecycleHook.' . ($i + 1) . '.DefaultResult'] = $lifecycleHooks[$i]['DefaultResult'];
            $this->queryParameters['LifecycleHook.' . ($i + 1) . '.LifecycleHookName'] = $lifecycleHooks[$i]['LifecycleHookName'];
            $this->queryParameters['LifecycleHook.' . ($i + 1) . '.HeartbeatTimeout'] = $lifecycleHooks[$i]['HeartbeatTimeout'];
            $this->queryParameters['LifecycleHook.' . ($i + 1) . '.NotificationArn'] = $lifecycleHooks[$i]['NotificationArn'];
            $this->queryParameters['LifecycleHook.' . ($i + 1) . '.NotificationMetadata'] = $lifecycleHooks[$i]['NotificationMetadata'];
            $this->queryParameters['LifecycleHook.' . ($i + 1) . '.LifecycleTransition'] = $lifecycleHooks[$i]['LifecycleTransition'];
        }

        return $this;
    }
}
