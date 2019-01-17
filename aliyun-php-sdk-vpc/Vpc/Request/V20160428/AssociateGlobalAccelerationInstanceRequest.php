<?php

namespace Vpc\Request\V20160428;

/**
 * Request of AssociateGlobalAccelerationInstance
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getBackendServerId()
 * @method string getOwnerId()
 * @method string getGlobalAccelerationInstanceId()
 * @method string getBackendServerRegionId()
 * @method string getBackendServerType()
 */
class AssociateGlobalAccelerationInstanceRequest extends \RpcAcsRequest
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
            'Vpc',
            '2016-04-28',
            'AssociateGlobalAccelerationInstance',
            'vpc'
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
     * @param string $backendServerId
     *
     * @return $this
     */
    public function setBackendServerId($backendServerId)
    {
        $this->requestParameters['BackendServerId'] = $backendServerId;
        $this->queryParameters['BackendServerId'] = $backendServerId;

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
     * @param string $globalAccelerationInstanceId
     *
     * @return $this
     */
    public function setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
    {
        $this->requestParameters['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;
        $this->queryParameters['GlobalAccelerationInstanceId'] = $globalAccelerationInstanceId;

        return $this;
    }

    /**
     * @param string $backendServerRegionId
     *
     * @return $this
     */
    public function setBackendServerRegionId($backendServerRegionId)
    {
        $this->requestParameters['BackendServerRegionId'] = $backendServerRegionId;
        $this->queryParameters['BackendServerRegionId'] = $backendServerRegionId;

        return $this;
    }

    /**
     * @param string $backendServerType
     *
     * @return $this
     */
    public function setBackendServerType($backendServerType)
    {
        $this->requestParameters['BackendServerType'] = $backendServerType;
        $this->queryParameters['BackendServerType'] = $backendServerType;

        return $this;
    }
}
