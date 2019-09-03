<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyInstanceCrossBackupPolicy
 *
 * @method string getResourceOwnerId()
 * @method string getRetentType()
 * @method string getBackupEnabled()
 * @method string getRelService()
 * @method string getStorageType()
 * @method string getEndpoint()
 * @method string getDBInstanceId()
 * @method string getRetention()
 * @method string getResourceOwnerAccount()
 * @method string getCrossBackupType()
 * @method string getLogBackupEnabled()
 * @method string getOwnerId()
 * @method string getCrossBackupRegion()
 * @method string getStorageOwner()
 */
class ModifyInstanceCrossBackupPolicyRequest extends \RpcAcsRequest
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
            'ModifyInstanceCrossBackupPolicy',
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
     * @param string $retentType
     *
     * @return $this
     */
    public function setRetentType($retentType)
    {
        $this->requestParameters['RetentType'] = $retentType;
        $this->queryParameters['RetentType'] = $retentType;

        return $this;
    }

    /**
     * @param string $backupEnabled
     *
     * @return $this
     */
    public function setBackupEnabled($backupEnabled)
    {
        $this->requestParameters['BackupEnabled'] = $backupEnabled;
        $this->queryParameters['BackupEnabled'] = $backupEnabled;

        return $this;
    }

    /**
     * @param string $relService
     *
     * @return $this
     */
    public function setRelService($relService)
    {
        $this->requestParameters['RelService'] = $relService;
        $this->queryParameters['RelService'] = $relService;

        return $this;
    }

    /**
     * @param string $storageType
     *
     * @return $this
     */
    public function setStorageType($storageType)
    {
        $this->requestParameters['StorageType'] = $storageType;
        $this->queryParameters['StorageType'] = $storageType;

        return $this;
    }

    /**
     * @param string $endpoint
     *
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->requestParameters['Endpoint'] = $endpoint;
        $this->queryParameters['Endpoint'] = $endpoint;

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
     * @param string $retention
     *
     * @return $this
     */
    public function setRetention($retention)
    {
        $this->requestParameters['Retention'] = $retention;
        $this->queryParameters['Retention'] = $retention;

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
     * @param string $crossBackupType
     *
     * @return $this
     */
    public function setCrossBackupType($crossBackupType)
    {
        $this->requestParameters['CrossBackupType'] = $crossBackupType;
        $this->queryParameters['CrossBackupType'] = $crossBackupType;

        return $this;
    }

    /**
     * @param string $logBackupEnabled
     *
     * @return $this
     */
    public function setLogBackupEnabled($logBackupEnabled)
    {
        $this->requestParameters['LogBackupEnabled'] = $logBackupEnabled;
        $this->queryParameters['LogBackupEnabled'] = $logBackupEnabled;

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
     * @param string $crossBackupRegion
     *
     * @return $this
     */
    public function setCrossBackupRegion($crossBackupRegion)
    {
        $this->requestParameters['CrossBackupRegion'] = $crossBackupRegion;
        $this->queryParameters['CrossBackupRegion'] = $crossBackupRegion;

        return $this;
    }

    /**
     * @param string $storageOwner
     *
     * @return $this
     */
    public function setStorageOwner($storageOwner)
    {
        $this->requestParameters['StorageOwner'] = $storageOwner;
        $this->queryParameters['StorageOwner'] = $storageOwner;

        return $this;
    }
}
