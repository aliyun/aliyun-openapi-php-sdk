<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyBackupSourceEndpoint
 *
 * @method string getSourceEndpointRegion()
 * @method string getBackupGatewayId()
 * @method string getSourceEndpointInstanceID()
 * @method string getSourceEndpointUserName()
 * @method string getClientToken()
 * @method string getBackupPlanId()
 * @method string getSourceEndpointDatabaseName()
 * @method string getSourceEndpointIP()
 * @method string getSourceEndpointPassword()
 * @method string getBackupObjects()
 * @method string getOwnerId()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointInstanceType()
 * @method string getSourceEndpointOracleSID()
 */
class ModifyBackupSourceEndpointRequest extends \RpcAcsRequest
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
            'ModifyBackupSourceEndpoint',
            'cbs'
        );
    }

    /**
     * @param string $sourceEndpointRegion
     *
     * @return $this
     */
    public function setSourceEndpointRegion($sourceEndpointRegion)
    {
        $this->requestParameters['SourceEndpointRegion'] = $sourceEndpointRegion;
        $this->queryParameters['SourceEndpointRegion'] = $sourceEndpointRegion;

        return $this;
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
     * @param string $sourceEndpointInstanceID
     *
     * @return $this
     */
    public function setSourceEndpointInstanceID($sourceEndpointInstanceID)
    {
        $this->requestParameters['SourceEndpointInstanceID'] = $sourceEndpointInstanceID;
        $this->queryParameters['SourceEndpointInstanceID'] = $sourceEndpointInstanceID;

        return $this;
    }

    /**
     * @param string $sourceEndpointUserName
     *
     * @return $this
     */
    public function setSourceEndpointUserName($sourceEndpointUserName)
    {
        $this->requestParameters['SourceEndpointUserName'] = $sourceEndpointUserName;
        $this->queryParameters['SourceEndpointUserName'] = $sourceEndpointUserName;

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
     * @param string $sourceEndpointDatabaseName
     *
     * @return $this
     */
    public function setSourceEndpointDatabaseName($sourceEndpointDatabaseName)
    {
        $this->requestParameters['SourceEndpointDatabaseName'] = $sourceEndpointDatabaseName;
        $this->queryParameters['SourceEndpointDatabaseName'] = $sourceEndpointDatabaseName;

        return $this;
    }

    /**
     * @param string $sourceEndpointIP
     *
     * @return $this
     */
    public function setSourceEndpointIP($sourceEndpointIP)
    {
        $this->requestParameters['SourceEndpointIP'] = $sourceEndpointIP;
        $this->queryParameters['SourceEndpointIP'] = $sourceEndpointIP;

        return $this;
    }

    /**
     * @param string $sourceEndpointPassword
     *
     * @return $this
     */
    public function setSourceEndpointPassword($sourceEndpointPassword)
    {
        $this->requestParameters['SourceEndpointPassword'] = $sourceEndpointPassword;
        $this->queryParameters['SourceEndpointPassword'] = $sourceEndpointPassword;

        return $this;
    }

    /**
     * @param string $backupObjects
     *
     * @return $this
     */
    public function setBackupObjects($backupObjects)
    {
        $this->requestParameters['BackupObjects'] = $backupObjects;
        $this->queryParameters['BackupObjects'] = $backupObjects;

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
     * @param string $sourceEndpointPort
     *
     * @return $this
     */
    public function setSourceEndpointPort($sourceEndpointPort)
    {
        $this->requestParameters['SourceEndpointPort'] = $sourceEndpointPort;
        $this->queryParameters['SourceEndpointPort'] = $sourceEndpointPort;

        return $this;
    }

    /**
     * @param string $sourceEndpointInstanceType
     *
     * @return $this
     */
    public function setSourceEndpointInstanceType($sourceEndpointInstanceType)
    {
        $this->requestParameters['SourceEndpointInstanceType'] = $sourceEndpointInstanceType;
        $this->queryParameters['SourceEndpointInstanceType'] = $sourceEndpointInstanceType;

        return $this;
    }

    /**
     * @param string $sourceEndpointOracleSID
     *
     * @return $this
     */
    public function setSourceEndpointOracleSID($sourceEndpointOracleSID)
    {
        $this->requestParameters['SourceEndpointOracleSID'] = $sourceEndpointOracleSID;
        $this->queryParameters['SourceEndpointOracleSID'] = $sourceEndpointOracleSID;

        return $this;
    }
}
