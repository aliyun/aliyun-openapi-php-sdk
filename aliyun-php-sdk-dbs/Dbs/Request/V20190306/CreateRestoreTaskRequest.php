<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRestoreTask
 *
 * @method string getBackupGatewayId()
 * @method string getDestinationEndpointInstanceType()
 * @method string getClientToken()
 * @method string getBackupPlanId()
 * @method string getDestinationEndpointRegion()
 * @method string getDestinationEndpointUserName()
 * @method string getRestoreObjects()
 * @method string getRestoreTaskName()
 * @method string getDestinationEndpointOracleSID()
 * @method string getRestoreTime()
 * @method string getDestinationEndpointInstanceID()
 * @method string getDestinationEndpointPort()
 * @method string getBackupSetId()
 * @method string getOwnerId()
 * @method string getRestoreDir()
 * @method string getDestinationEndpointIP()
 * @method string getDestinationEndpointDatabaseName()
 * @method string getDuplicateConflict()
 * @method string getDestinationEndpointPassword()
 */
class CreateRestoreTaskRequest extends \RpcAcsRequest
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
            'Dbs',
            '2019-03-06',
            'CreateRestoreTask',
            'cbs'
        );
    }

    /**
     * @param string $backupGatewayId
     *
     * @return $this
     */
    public function setBackupGatewayId($backupGatewayId)
    {
        $this->requestParameters['BackupGatewayId'] = $backupGatewayId;
        $this->queryParameters['BackupGatewayId'] = $backupGatewayId;

        return $this;
    }

    /**
     * @param string $destinationEndpointInstanceType
     *
     * @return $this
     */
    public function setDestinationEndpointInstanceType($destinationEndpointInstanceType)
    {
        $this->requestParameters['DestinationEndpointInstanceType'] = $destinationEndpointInstanceType;
        $this->queryParameters['DestinationEndpointInstanceType'] = $destinationEndpointInstanceType;

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
     * @param string $backupPlanId
     *
     * @return $this
     */
    public function setBackupPlanId($backupPlanId)
    {
        $this->requestParameters['BackupPlanId'] = $backupPlanId;
        $this->queryParameters['BackupPlanId'] = $backupPlanId;

        return $this;
    }

    /**
     * @param string $destinationEndpointRegion
     *
     * @return $this
     */
    public function setDestinationEndpointRegion($destinationEndpointRegion)
    {
        $this->requestParameters['DestinationEndpointRegion'] = $destinationEndpointRegion;
        $this->queryParameters['DestinationEndpointRegion'] = $destinationEndpointRegion;

        return $this;
    }

    /**
     * @param string $destinationEndpointUserName
     *
     * @return $this
     */
    public function setDestinationEndpointUserName($destinationEndpointUserName)
    {
        $this->requestParameters['DestinationEndpointUserName'] = $destinationEndpointUserName;
        $this->queryParameters['DestinationEndpointUserName'] = $destinationEndpointUserName;

        return $this;
    }

    /**
     * @param string $restoreObjects
     *
     * @return $this
     */
    public function setRestoreObjects($restoreObjects)
    {
        $this->requestParameters['RestoreObjects'] = $restoreObjects;
        $this->queryParameters['RestoreObjects'] = $restoreObjects;

        return $this;
    }

    /**
     * @param string $restoreTaskName
     *
     * @return $this
     */
    public function setRestoreTaskName($restoreTaskName)
    {
        $this->requestParameters['RestoreTaskName'] = $restoreTaskName;
        $this->queryParameters['RestoreTaskName'] = $restoreTaskName;

        return $this;
    }

    /**
     * @param string $destinationEndpointOracleSID
     *
     * @return $this
     */
    public function setDestinationEndpointOracleSID($destinationEndpointOracleSID)
    {
        $this->requestParameters['DestinationEndpointOracleSID'] = $destinationEndpointOracleSID;
        $this->queryParameters['DestinationEndpointOracleSID'] = $destinationEndpointOracleSID;

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
     * @param string $destinationEndpointInstanceID
     *
     * @return $this
     */
    public function setDestinationEndpointInstanceID($destinationEndpointInstanceID)
    {
        $this->requestParameters['DestinationEndpointInstanceID'] = $destinationEndpointInstanceID;
        $this->queryParameters['DestinationEndpointInstanceID'] = $destinationEndpointInstanceID;

        return $this;
    }

    /**
     * @param string $destinationEndpointPort
     *
     * @return $this
     */
    public function setDestinationEndpointPort($destinationEndpointPort)
    {
        $this->requestParameters['DestinationEndpointPort'] = $destinationEndpointPort;
        $this->queryParameters['DestinationEndpointPort'] = $destinationEndpointPort;

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
     * @param string $restoreDir
     *
     * @return $this
     */
    public function setRestoreDir($restoreDir)
    {
        $this->requestParameters['RestoreDir'] = $restoreDir;
        $this->queryParameters['RestoreDir'] = $restoreDir;

        return $this;
    }

    /**
     * @param string $destinationEndpointIP
     *
     * @return $this
     */
    public function setDestinationEndpointIP($destinationEndpointIP)
    {
        $this->requestParameters['DestinationEndpointIP'] = $destinationEndpointIP;
        $this->queryParameters['DestinationEndpointIP'] = $destinationEndpointIP;

        return $this;
    }

    /**
     * @param string $destinationEndpointDatabaseName
     *
     * @return $this
     */
    public function setDestinationEndpointDatabaseName($destinationEndpointDatabaseName)
    {
        $this->requestParameters['DestinationEndpointDatabaseName'] = $destinationEndpointDatabaseName;
        $this->queryParameters['DestinationEndpointDatabaseName'] = $destinationEndpointDatabaseName;

        return $this;
    }

    /**
     * @param string $duplicateConflict
     *
     * @return $this
     */
    public function setDuplicateConflict($duplicateConflict)
    {
        $this->requestParameters['DuplicateConflict'] = $duplicateConflict;
        $this->queryParameters['DuplicateConflict'] = $duplicateConflict;

        return $this;
    }

    /**
     * @param string $destinationEndpointPassword
     *
     * @return $this
     */
    public function setDestinationEndpointPassword($destinationEndpointPassword)
    {
        $this->requestParameters['DestinationEndpointPassword'] = $destinationEndpointPassword;
        $this->queryParameters['DestinationEndpointPassword'] = $destinationEndpointPassword;

        return $this;
    }
}
