<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteAutoProvisioningGroup
 *
 * @method string getResourceOwnerId()
 * @method string getTerminateInstances()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getAutoProvisioningGroupId()
 */
class DeleteAutoProvisioningGroupRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'DeleteAutoProvisioningGroup',
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
     * @param string $terminateInstances
     *
     * @return $this
     */
    public function setTerminateInstances($terminateInstances)
    {
        $this->requestParameters['TerminateInstances'] = $terminateInstances;
        $this->queryParameters['TerminateInstances'] = $terminateInstances;

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

    /**
     * @param string $autoProvisioningGroupId
     *
     * @return $this
     */
    public function setAutoProvisioningGroupId($autoProvisioningGroupId)
    {
        $this->requestParameters['AutoProvisioningGroupId'] = $autoProvisioningGroupId;
        $this->queryParameters['AutoProvisioningGroupId'] = $autoProvisioningGroupId;

        return $this;
    }
}
