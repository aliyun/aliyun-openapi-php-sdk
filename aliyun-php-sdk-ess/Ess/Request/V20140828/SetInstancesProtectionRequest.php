<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetInstancesProtection
 *
 * @method array getInstanceIds()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getOwnerId()
 * @method string getProtectedFromScaleIn()
 */
class SetInstancesProtectionRequest extends \RpcAcsRequest
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
            'SetInstancesProtection',
            'ess'
        );
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function setInstanceIds(array $instanceId)
    {
        $this->requestParameters['InstanceIds'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->queryParameters['InstanceId.' . ($i + 1)] = $iValue;
        }

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
     * @param string $protectedFromScaleIn
     *
     * @return $this
     */
    public function setProtectedFromScaleIn($protectedFromScaleIn)
    {
        $this->requestParameters['ProtectedFromScaleIn'] = $protectedFromScaleIn;
        $this->queryParameters['ProtectedFromScaleIn'] = $protectedFromScaleIn;

        return $this;
    }
}
