<?php

namespace Ess\Request\V20140828;

/**
 * Request of ModifyNotificationConfiguration
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getNotificationArn()
 * @method array getNotificationTypes()
 * @method string getOwnerId()
 */
class ModifyNotificationConfigurationRequest extends \RpcAcsRequest
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
            'ModifyNotificationConfiguration',
            'ess'
        );
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
     * @param array $notificationTypes
     *
     * @return $this
     */
    public function setNotificationTypes(array $notificationTypes)
    {
        $this->requestParameters['NotificationTypes'] = $notificationTypes;
        foreach ($notificationTypes as $i => $iValue) {
            $this->queryParameters['NotificationType.' . ($i + 1)] = $iValue;
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
