<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyBackupPolicy
 *
 * @method string getResourceOwnerId()
 * @method string getLocalLogRetentionHours()
 * @method string getLogBackupFrequency()
 * @method string getArchiveBackupKeepCount()
 * @method string getBackupLog()
 * @method string getDuplicationContent()
 * @method string getHighSpaceUsageProtection()
 * @method string getDBInstanceId()
 * @method string getEnableBackupLog()
 * @method string getBackupPolicyMode()
 * @method string getPreferredBackupPeriod()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getCompressType()
 * @method string getLocalLogRetentionSpace()
 * @method string getOwnerId()
 * @method string getArchiveBackupKeepPolicy()
 * @method string getDuplication()
 * @method string getPreferredBackupTime()
 * @method string getBackupRetentionPeriod()
 * @method string getDuplicationLocation()
 * @method string getArchiveBackupRetentionPeriod()
 * @method string getLogBackupRetentionPeriod()
 */
class ModifyBackupPolicyRequest extends \RpcAcsRequest
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
            'ModifyBackupPolicy',
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
     * @param string $localLogRetentionHours
     *
     * @return $this
     */
    public function setLocalLogRetentionHours($localLogRetentionHours)
    {
        $this->requestParameters['LocalLogRetentionHours'] = $localLogRetentionHours;
        $this->queryParameters['LocalLogRetentionHours'] = $localLogRetentionHours;

        return $this;
    }

    /**
     * @param string $logBackupFrequency
     *
     * @return $this
     */
    public function setLogBackupFrequency($logBackupFrequency)
    {
        $this->requestParameters['LogBackupFrequency'] = $logBackupFrequency;
        $this->queryParameters['LogBackupFrequency'] = $logBackupFrequency;

        return $this;
    }

    /**
     * @param string $archiveBackupKeepCount
     *
     * @return $this
     */
    public function setArchiveBackupKeepCount($archiveBackupKeepCount)
    {
        $this->requestParameters['ArchiveBackupKeepCount'] = $archiveBackupKeepCount;
        $this->queryParameters['ArchiveBackupKeepCount'] = $archiveBackupKeepCount;

        return $this;
    }

    /**
     * @param string $backupLog
     *
     * @return $this
     */
    public function setBackupLog($backupLog)
    {
        $this->requestParameters['BackupLog'] = $backupLog;
        $this->queryParameters['BackupLog'] = $backupLog;

        return $this;
    }

    /**
     * @param string $duplicationContent
     *
     * @return $this
     */
    public function setDuplicationContent($duplicationContent)
    {
        $this->requestParameters['DuplicationContent'] = $duplicationContent;
        $this->queryParameters['DuplicationContent'] = $duplicationContent;

        return $this;
    }

    /**
     * @param string $highSpaceUsageProtection
     *
     * @return $this
     */
    public function setHighSpaceUsageProtection($highSpaceUsageProtection)
    {
        $this->requestParameters['HighSpaceUsageProtection'] = $highSpaceUsageProtection;
        $this->queryParameters['HighSpaceUsageProtection'] = $highSpaceUsageProtection;

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
     * @param string $enableBackupLog
     *
     * @return $this
     */
    public function setEnableBackupLog($enableBackupLog)
    {
        $this->requestParameters['EnableBackupLog'] = $enableBackupLog;
        $this->queryParameters['EnableBackupLog'] = $enableBackupLog;

        return $this;
    }

    /**
     * @param string $backupPolicyMode
     *
     * @return $this
     */
    public function setBackupPolicyMode($backupPolicyMode)
    {
        $this->requestParameters['BackupPolicyMode'] = $backupPolicyMode;
        $this->queryParameters['BackupPolicyMode'] = $backupPolicyMode;

        return $this;
    }

    /**
     * @param string $preferredBackupPeriod
     *
     * @return $this
     */
    public function setPreferredBackupPeriod($preferredBackupPeriod)
    {
        $this->requestParameters['PreferredBackupPeriod'] = $preferredBackupPeriod;
        $this->queryParameters['PreferredBackupPeriod'] = $preferredBackupPeriod;

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
     * @param string $compressType
     *
     * @return $this
     */
    public function setCompressType($compressType)
    {
        $this->requestParameters['CompressType'] = $compressType;
        $this->queryParameters['CompressType'] = $compressType;

        return $this;
    }

    /**
     * @param string $localLogRetentionSpace
     *
     * @return $this
     */
    public function setLocalLogRetentionSpace($localLogRetentionSpace)
    {
        $this->requestParameters['LocalLogRetentionSpace'] = $localLogRetentionSpace;
        $this->queryParameters['LocalLogRetentionSpace'] = $localLogRetentionSpace;

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
     * @param string $archiveBackupKeepPolicy
     *
     * @return $this
     */
    public function setArchiveBackupKeepPolicy($archiveBackupKeepPolicy)
    {
        $this->requestParameters['ArchiveBackupKeepPolicy'] = $archiveBackupKeepPolicy;
        $this->queryParameters['ArchiveBackupKeepPolicy'] = $archiveBackupKeepPolicy;

        return $this;
    }

    /**
     * @param string $duplication
     *
     * @return $this
     */
    public function setDuplication($duplication)
    {
        $this->requestParameters['Duplication'] = $duplication;
        $this->queryParameters['Duplication'] = $duplication;

        return $this;
    }

    /**
     * @param string $preferredBackupTime
     *
     * @return $this
     */
    public function setPreferredBackupTime($preferredBackupTime)
    {
        $this->requestParameters['PreferredBackupTime'] = $preferredBackupTime;
        $this->queryParameters['PreferredBackupTime'] = $preferredBackupTime;

        return $this;
    }

    /**
     * @param string $backupRetentionPeriod
     *
     * @return $this
     */
    public function setBackupRetentionPeriod($backupRetentionPeriod)
    {
        $this->requestParameters['BackupRetentionPeriod'] = $backupRetentionPeriod;
        $this->queryParameters['BackupRetentionPeriod'] = $backupRetentionPeriod;

        return $this;
    }

    /**
     * @param string $duplicationLocation
     *
     * @return $this
     */
    public function setDuplicationLocation($duplicationLocation)
    {
        $this->requestParameters['DuplicationLocation'] = $duplicationLocation;
        $this->queryParameters['DuplicationLocation'] = $duplicationLocation;

        return $this;
    }

    /**
     * @param string $archiveBackupRetentionPeriod
     *
     * @return $this
     */
    public function setArchiveBackupRetentionPeriod($archiveBackupRetentionPeriod)
    {
        $this->requestParameters['ArchiveBackupRetentionPeriod'] = $archiveBackupRetentionPeriod;
        $this->queryParameters['ArchiveBackupRetentionPeriod'] = $archiveBackupRetentionPeriod;

        return $this;
    }

    /**
     * @param string $logBackupRetentionPeriod
     *
     * @return $this
     */
    public function setLogBackupRetentionPeriod($logBackupRetentionPeriod)
    {
        $this->requestParameters['LogBackupRetentionPeriod'] = $logBackupRetentionPeriod;
        $this->queryParameters['LogBackupRetentionPeriod'] = $logBackupRetentionPeriod;

        return $this;
    }
}
