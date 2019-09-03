<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CheckCreateDdrDBInstance
 *
 * @method string getResourceOwnerId()
 * @method string getDBInstanceStorage()
 * @method string getSourceDBInstanceName()
 * @method string getHostType()
 * @method string getEngineVersion()
 * @method string getUserBakSetURL()
 * @method string getEngine()
 * @method string getBackupSetRegion()
 * @method string getBackupSetType()
 * @method string getRestoreTime()
 * @method string getBakSetName()
 * @method string getResourceOwnerAccount()
 * @method string getBackupSetId()
 * @method string getOwnerId()
 * @method string getDBInstanceClass()
 * @method string getRestoreType()
 * @method string getSourceRegion()
 */
class CheckCreateDdrDBInstanceRequest extends \RpcAcsRequest
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
            'CheckCreateDdrDBInstance',
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
     * @param string $dBInstanceStorage
     *
     * @return $this
     */
    public function setDBInstanceStorage($dBInstanceStorage)
    {
        $this->requestParameters['DBInstanceStorage'] = $dBInstanceStorage;
        $this->queryParameters['DBInstanceStorage'] = $dBInstanceStorage;

        return $this;
    }

    /**
     * @param string $sourceDBInstanceName
     *
     * @return $this
     */
    public function setSourceDBInstanceName($sourceDBInstanceName)
    {
        $this->requestParameters['SourceDBInstanceName'] = $sourceDBInstanceName;
        $this->queryParameters['SourceDBInstanceName'] = $sourceDBInstanceName;

        return $this;
    }

    /**
     * @param string $hostType
     *
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->requestParameters['HostType'] = $hostType;
        $this->queryParameters['HostType'] = $hostType;

        return $this;
    }

    /**
     * @param string $engineVersion
     *
     * @return $this
     */
    public function setEngineVersion($engineVersion)
    {
        $this->requestParameters['EngineVersion'] = $engineVersion;
        $this->queryParameters['EngineVersion'] = $engineVersion;

        return $this;
    }

    /**
     * @param string $userBakSetURL
     *
     * @return $this
     */
    public function setUserBakSetURL($userBakSetURL)
    {
        $this->requestParameters['UserBakSetURL'] = $userBakSetURL;
        $this->queryParameters['UserBakSetURL'] = $userBakSetURL;

        return $this;
    }

    /**
     * @param string $engine
     *
     * @return $this
     */
    public function setEngine($engine)
    {
        $this->requestParameters['Engine'] = $engine;
        $this->queryParameters['Engine'] = $engine;

        return $this;
    }

    /**
     * @param string $backupSetRegion
     *
     * @return $this
     */
    public function setBackupSetRegion($backupSetRegion)
    {
        $this->requestParameters['BackupSetRegion'] = $backupSetRegion;
        $this->queryParameters['BackupSetRegion'] = $backupSetRegion;

        return $this;
    }

    /**
     * @param string $backupSetType
     *
     * @return $this
     */
    public function setBackupSetType($backupSetType)
    {
        $this->requestParameters['BackupSetType'] = $backupSetType;
        $this->queryParameters['BackupSetType'] = $backupSetType;

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
     * @param string $bakSetName
     *
     * @return $this
     */
    public function setBakSetName($bakSetName)
    {
        $this->requestParameters['BakSetName'] = $bakSetName;
        $this->queryParameters['BakSetName'] = $bakSetName;

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
     * @param string $backupSetId
     *
     * @return $this
     */
    public function setBackupSetId($backupSetId)
    {
        $this->requestParameters['BackupSetId'] = $backupSetId;
        $this->queryParameters['BackupSetId'] = $backupSetId;

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
     * @param string $dBInstanceClass
     *
     * @return $this
     */
    public function setDBInstanceClass($dBInstanceClass)
    {
        $this->requestParameters['DBInstanceClass'] = $dBInstanceClass;
        $this->queryParameters['DBInstanceClass'] = $dBInstanceClass;

        return $this;
    }

    /**
     * @param string $restoreType
     *
     * @return $this
     */
    public function setRestoreType($restoreType)
    {
        $this->requestParameters['RestoreType'] = $restoreType;
        $this->queryParameters['RestoreType'] = $restoreType;

        return $this;
    }

    /**
     * @param string $sourceRegion
     *
     * @return $this
     */
    public function setSourceRegion($sourceRegion)
    {
        $this->requestParameters['SourceRegion'] = $sourceRegion;
        $this->queryParameters['SourceRegion'] = $sourceRegion;

        return $this;
    }
}
