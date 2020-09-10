<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyBackupSetDownloadRules
 *
 * @method string getFullDataFormat()
 * @method string getBackupGatewayId()
 * @method string getClientToken()
 * @method string getBackupSetDownloadTargetType()
 * @method string getBackupPlanId()
 * @method string getOwnerId()
 * @method string getOpenAutoDownload()
 * @method string getIncrementDataFormat()
 * @method string getBackupSetDownloadTargetTypeLocation()
 * @method string getBackupSetDownloadDir()
 */
class ModifyBackupSetDownloadRulesRequest extends \RpcAcsRequest
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
            'ModifyBackupSetDownloadRules',
            'cbs'
        );
    }

    /**
     * @param string $fullDataFormat
     *
     * @return $this
     */
    public function setFullDataFormat($fullDataFormat)
    {
        $this->requestParameters['FullDataFormat'] = $fullDataFormat;
        $this->queryParameters['FullDataFormat'] = $fullDataFormat;

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
     * @param string $backupSetDownloadTargetType
     *
     * @return $this
     */
    public function setBackupSetDownloadTargetType($backupSetDownloadTargetType)
    {
        $this->requestParameters['BackupSetDownloadTargetType'] = $backupSetDownloadTargetType;
        $this->queryParameters['BackupSetDownloadTargetType'] = $backupSetDownloadTargetType;

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
     * @param string $openAutoDownload
     *
     * @return $this
     */
    public function setOpenAutoDownload($openAutoDownload)
    {
        $this->requestParameters['OpenAutoDownload'] = $openAutoDownload;
        $this->queryParameters['OpenAutoDownload'] = $openAutoDownload;

        return $this;
    }

    /**
     * @param string $incrementDataFormat
     *
     * @return $this
     */
    public function setIncrementDataFormat($incrementDataFormat)
    {
        $this->requestParameters['IncrementDataFormat'] = $incrementDataFormat;
        $this->queryParameters['IncrementDataFormat'] = $incrementDataFormat;

        return $this;
    }

    /**
     * @param string $backupSetDownloadTargetTypeLocation
     *
     * @return $this
     */
    public function setBackupSetDownloadTargetTypeLocation($backupSetDownloadTargetTypeLocation)
    {
        $this->requestParameters['BackupSetDownloadTargetTypeLocation'] = $backupSetDownloadTargetTypeLocation;
        $this->queryParameters['BackupSetDownloadTargetTypeLocation'] = $backupSetDownloadTargetTypeLocation;

        return $this;
    }

    /**
     * @param string $backupSetDownloadDir
     *
     * @return $this
     */
    public function setBackupSetDownloadDir($backupSetDownloadDir)
    {
        $this->requestParameters['BackupSetDownloadDir'] = $backupSetDownloadDir;
        $this->queryParameters['BackupSetDownloadDir'] = $backupSetDownloadDir;

        return $this;
    }
}
