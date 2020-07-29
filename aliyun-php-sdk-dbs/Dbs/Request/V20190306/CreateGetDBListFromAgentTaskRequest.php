<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateGetDBListFromAgentTask
 *
 * @method string getSourceEndpointRegion()
 * @method string getBackupGatewayId()
 * @method string getDatabaseType()
 * @method string getClientToken()
 * @method string getOwnerId()
 * @method string getSourceEndpointPort()
 * @method string getSourceEndpointIP()
 */
class CreateGetDBListFromAgentTaskRequest extends \RpcAcsRequest
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
            'CreateGetDBListFromAgentTask',
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
     * @param string $databaseType
     *
     * @return $this
     */
    public function setDatabaseType($databaseType)
    {
        $this->requestParameters['DatabaseType'] = $databaseType;
        $this->queryParameters['DatabaseType'] = $databaseType;

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
}
