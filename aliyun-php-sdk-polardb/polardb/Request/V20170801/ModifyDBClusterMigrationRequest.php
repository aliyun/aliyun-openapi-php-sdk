<?php

namespace polardb\Request\V20170801;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDBClusterMigration
 *
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getNewMasterInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getDBClusterId()
 * @method string getOwnerAccount()
 * @method string getSourceRDSDBInstanceId()
 * @method string getOwnerId()
 */
class ModifyDBClusterMigrationRequest extends \RpcAcsRequest
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
            'polardb',
            '2017-08-01',
            'ModifyDBClusterMigration',
            'polardb'
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
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $newMasterInstanceId
     *
     * @return $this
     */
    public function setNewMasterInstanceId($newMasterInstanceId)
    {
        $this->requestParameters['NewMasterInstanceId'] = $newMasterInstanceId;
        $this->queryParameters['NewMasterInstanceId'] = $newMasterInstanceId;

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
     * @param string $dBClusterId
     *
     * @return $this
     */
    public function setDBClusterId($dBClusterId)
    {
        $this->requestParameters['DBClusterId'] = $dBClusterId;
        $this->queryParameters['DBClusterId'] = $dBClusterId;

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
     * @param string $sourceRDSDBInstanceId
     *
     * @return $this
     */
    public function setSourceRDSDBInstanceId($sourceRDSDBInstanceId)
    {
        $this->requestParameters['SourceRDSDBInstanceId'] = $sourceRDSDBInstanceId;
        $this->queryParameters['SourceRDSDBInstanceId'] = $sourceRDSDBInstanceId;

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
