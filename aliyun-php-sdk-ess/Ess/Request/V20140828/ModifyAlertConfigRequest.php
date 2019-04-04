<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyAlertConfig
 *
 * @method string getSuccessConfig()
 * @method string getRejectConfig()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getOwnerId()
 * @method string getFailConfig()
 */
class ModifyAlertConfigRequest extends \RpcAcsRequest
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
            'ModifyAlertConfig',
            'ess'
        );
    }

    /**
     * @param string $successConfig
     *
     * @return $this
     */
    public function setSuccessConfig($successConfig)
    {
        $this->requestParameters['SuccessConfig'] = $successConfig;
        $this->queryParameters['SuccessConfig'] = $successConfig;

        return $this;
    }

    /**
     * @param string $rejectConfig
     *
     * @return $this
     */
    public function setRejectConfig($rejectConfig)
    {
        $this->requestParameters['RejectConfig'] = $rejectConfig;
        $this->queryParameters['RejectConfig'] = $rejectConfig;

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
     * @param string $failConfig
     *
     * @return $this
     */
    public function setFailConfig($failConfig)
    {
        $this->requestParameters['FailConfig'] = $failConfig;
        $this->queryParameters['FailConfig'] = $failConfig;

        return $this;
    }
}
