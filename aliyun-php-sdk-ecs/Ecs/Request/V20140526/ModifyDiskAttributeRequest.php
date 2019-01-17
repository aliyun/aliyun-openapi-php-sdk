<?php

namespace Ecs\Request\V20140526;

/**
 * Request of ModifyDiskAttribute
 *
 * @method string getDiskName()
 * @method string getDeleteAutoSnapshot()
 * @method string getResourceOwnerId()
 * @method string getEnableAutoSnapshot()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getDiskId()
 * @method string getOwnerId()
 * @method string getDeleteWithInstance()
 */
class ModifyDiskAttributeRequest extends \RpcAcsRequest
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
            'ModifyDiskAttribute',
            'ecs'
        );
    }

    /**
     * @param string $diskName
     *
     * @return $this
     */
    public function setDiskName($diskName)
    {
        $this->requestParameters['DiskName'] = $diskName;
        $this->queryParameters['DiskName'] = $diskName;

        return $this;
    }

    /**
     * @param string $deleteAutoSnapshot
     *
     * @return $this
     */
    public function setDeleteAutoSnapshot($deleteAutoSnapshot)
    {
        $this->requestParameters['DeleteAutoSnapshot'] = $deleteAutoSnapshot;
        $this->queryParameters['DeleteAutoSnapshot'] = $deleteAutoSnapshot;

        return $this;
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
     * @param string $enableAutoSnapshot
     *
     * @return $this
     */
    public function setEnableAutoSnapshot($enableAutoSnapshot)
    {
        $this->requestParameters['EnableAutoSnapshot'] = $enableAutoSnapshot;
        $this->queryParameters['EnableAutoSnapshot'] = $enableAutoSnapshot;

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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $diskId
     *
     * @return $this
     */
    public function setDiskId($diskId)
    {
        $this->requestParameters['DiskId'] = $diskId;
        $this->queryParameters['DiskId'] = $diskId;

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
     * @param string $deleteWithInstance
     *
     * @return $this
     */
    public function setDeleteWithInstance($deleteWithInstance)
    {
        $this->requestParameters['DeleteWithInstance'] = $deleteWithInstance;
        $this->queryParameters['DeleteWithInstance'] = $deleteWithInstance;

        return $this;
    }
}
