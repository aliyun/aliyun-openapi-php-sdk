<?php

namespace Rds\Request\V20140815;

/**
 * Request of DescribeBackupTasks
 *
 * @method string getBackupJobId()
 * @method string getResourceOwnerId()
 * @method string getFlag()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getDBInstanceId()
 * @method string getBackupMode()
 * @method string getOwnerId()
 * @method string getBackupJobStatus()
 */
class DescribeBackupTasksRequest extends \RpcAcsRequest
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
            'DescribeBackupTasks',
            'rds'
        );
    }

    /**
     * @param string $backupJobId
     *
     * @return $this
     */
    public function setBackupJobId($backupJobId)
    {
        $this->requestParameters['BackupJobId'] = $backupJobId;
        $this->queryParameters['BackupJobId'] = $backupJobId;

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
     * @param string $flag
     *
     * @return $this
     */
    public function setFlag($flag)
    {
        $this->requestParameters['Flag'] = $flag;
        $this->queryParameters['Flag'] = $flag;

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
     * @param string $backupJobStatus
     *
     * @return $this
     */
    public function setBackupJobStatus($backupJobStatus)
    {
        $this->requestParameters['BackupJobStatus'] = $backupJobStatus;
        $this->queryParameters['BackupJobStatus'] = $backupJobStatus;

        return $this;
    }
}
