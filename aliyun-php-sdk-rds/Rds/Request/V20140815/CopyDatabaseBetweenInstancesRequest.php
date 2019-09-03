<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CopyDatabaseBetweenInstances
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getResourceGroupId()
 * @method string getDBInstanceId()
 * @method string getRestoreTime()
 * @method string getResourceOwnerAccount()
 * @method string getBackupId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSyncUserPrivilege()
 * @method string getDbNames()
 * @method string getTargetDBInstanceId()
 * @method string getPayType()
 */
class CopyDatabaseBetweenInstancesRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'CopyDatabaseBetweenInstances',
            'rds'
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
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

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
     * @param string $syncUserPrivilege
     *
     * @return $this
     */
    public function setSyncUserPrivilege($syncUserPrivilege)
    {
        $this->requestParameters['SyncUserPrivilege'] = $syncUserPrivilege;
        $this->queryParameters['SyncUserPrivilege'] = $syncUserPrivilege;

        return $this;
    }

    /**
     * @param string $dbNames
     *
     * @return $this
     */
    public function setDbNames($dbNames)
    {
        $this->requestParameters['DbNames'] = $dbNames;
        $this->queryParameters['DbNames'] = $dbNames;

        return $this;
    }

    /**
     * @param string $targetDBInstanceId
     *
     * @return $this
     */
    public function setTargetDBInstanceId($targetDBInstanceId)
    {
        $this->requestParameters['TargetDBInstanceId'] = $targetDBInstanceId;
        $this->queryParameters['TargetDBInstanceId'] = $targetDBInstanceId;

        return $this;
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        $this->requestParameters['PayType'] = $payType;
        $this->queryParameters['PayType'] = $payType;

        return $this;
    }
}
