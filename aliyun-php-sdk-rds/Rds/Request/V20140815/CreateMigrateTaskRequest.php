<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateMigrateTask
 *
 * @method string getResourceOwnerId()
 * @method string getIsOnlineDB()
 * @method string getDBInstanceId()
 * @method string getMigrateTaskId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getOssObjectPositions()
 * @method string getOSSUrls()
 * @method string getDBName()
 * @method string getBackupMode()
 * @method string getCheckDBMode()
 */
class CreateMigrateTaskRequest extends \RpcAcsRequest
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
            'CreateMigrateTask',
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
     * @param string $isOnlineDB
     *
     * @return $this
     */
    public function setIsOnlineDB($isOnlineDB)
    {
        $this->requestParameters['IsOnlineDB'] = $isOnlineDB;
        $this->queryParameters['IsOnlineDB'] = $isOnlineDB;

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
     * @param string $migrateTaskId
     *
     * @return $this
     */
    public function setMigrateTaskId($migrateTaskId)
    {
        $this->requestParameters['MigrateTaskId'] = $migrateTaskId;
        $this->queryParameters['MigrateTaskId'] = $migrateTaskId;

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
     * @param string $ossObjectPositions
     *
     * @return $this
     */
    public function setOssObjectPositions($ossObjectPositions)
    {
        $this->requestParameters['OssObjectPositions'] = $ossObjectPositions;
        $this->queryParameters['OssObjectPositions'] = $ossObjectPositions;

        return $this;
    }

    /**
     * @param string $oSSUrls
     *
     * @return $this
     */
    public function setOSSUrls($oSSUrls)
    {
        $this->requestParameters['OSSUrls'] = $oSSUrls;
        $this->queryParameters['OSSUrls'] = $oSSUrls;

        return $this;
    }

    /**
     * @param string $dBName
     *
     * @return $this
     */
    public function setDBName($dBName)
    {
        $this->requestParameters['DBName'] = $dBName;
        $this->queryParameters['DBName'] = $dBName;

        return $this;
    }

    /**
     * @param string $backupMode
     *
     * @return $this
     */
    public function setBackupMode($backupMode)
    {
        $this->requestParameters['BackupMode'] = $backupMode;
        $this->queryParameters['BackupMode'] = $backupMode;

        return $this;
    }

    /**
     * @param string $checkDBMode
     *
     * @return $this
     */
    public function setCheckDBMode($checkDBMode)
    {
        $this->requestParameters['CheckDBMode'] = $checkDBMode;
        $this->queryParameters['CheckDBMode'] = $checkDBMode;

        return $this;
    }
}
