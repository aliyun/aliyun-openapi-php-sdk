<?php

namespace Dds\Request\V20151201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CheckRecoveryCondition
 *
 * @method string getResourceOwnerId()
 * @method string getRestoreTime()
 * @method string getDatabaseNames()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getBackupId()
 * @method string getSourceDBInstance()
 * @method string getOwnerId()
 */
class CheckRecoveryConditionRequest extends \RpcAcsRequest
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
            'Dds',
            '2015-12-01',
            'CheckRecoveryCondition',
            'Dds'
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
     * @param string $restoreTime
     *
     * @return $this
     */
    public function setRestoreTime($restoreTime)
    {
        $this->requestParameters['RestoreTime'] = $restoreTime;
        $this->queryParameters['RestoreTime'] = $restoreTime;

        return $this;
    }

    /**
     * @param string $databaseNames
     *
     * @return $this
     */
    public function setDatabaseNames($databaseNames)
    {
        $this->requestParameters['DatabaseNames'] = $databaseNames;
        $this->queryParameters['DatabaseNames'] = $databaseNames;

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
     * @param string $backupId
     *
     * @return $this
     */
    public function setBackupId($backupId)
    {
        $this->requestParameters['BackupId'] = $backupId;
        $this->queryParameters['BackupId'] = $backupId;

        return $this;
    }

    /**
     * @param string $sourceDBInstance
     *
     * @return $this
     */
    public function setSourceDBInstance($sourceDBInstance)
    {
        $this->requestParameters['SourceDBInstance'] = $sourceDBInstance;
        $this->queryParameters['SourceDBInstance'] = $sourceDBInstance;

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
