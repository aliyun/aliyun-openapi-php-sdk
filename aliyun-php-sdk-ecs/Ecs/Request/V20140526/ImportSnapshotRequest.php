<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ImportSnapshot
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotName()
 * @method string getOssObject()
 * @method string getOssBucket()
 * @method string getResourceOwnerAccount()
 * @method string getRoleName()
 * @method string getOwnerId()
 */
class ImportSnapshotRequest extends \RpcAcsRequest
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
            'ImportSnapshot',
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
     * @param string $snapshotName
     *
     * @return $this
     */
    public function setSnapshotName($snapshotName)
    {
        $this->requestParameters['SnapshotName'] = $snapshotName;
        $this->queryParameters['SnapshotName'] = $snapshotName;

        return $this;
    }

    /**
     * @param string $ossObject
     *
     * @return $this
     */
    public function setOssObject($ossObject)
    {
        $this->requestParameters['OssObject'] = $ossObject;
        $this->queryParameters['OssObject'] = $ossObject;

        return $this;
    }

    /**
     * @param string $ossBucket
     *
     * @return $this
     */
    public function setOssBucket($ossBucket)
    {
        $this->requestParameters['OssBucket'] = $ossBucket;
        $this->queryParameters['OssBucket'] = $ossBucket;

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
     * @param string $roleName
     *
     * @return $this
     */
    public function setRoleName($roleName)
    {
        $this->requestParameters['RoleName'] = $roleName;
        $this->queryParameters['RoleName'] = $roleName;

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
