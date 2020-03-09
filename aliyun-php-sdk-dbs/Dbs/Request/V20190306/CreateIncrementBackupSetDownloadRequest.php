<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateIncrementBackupSetDownload
 *
 * @method string getClientToken()
 * @method string getBackupSetName()
 * @method string getBackupSetId()
 * @method string getOwnerId()
 * @method string getBackupSetDataFormat()
 */
class CreateIncrementBackupSetDownloadRequest extends \RpcAcsRequest
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
            'CreateIncrementBackupSetDownload',
            'cbs'
        );
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
     * @param string $backupSetName
     *
     * @return $this
     */
    public function setBackupSetName($backupSetName)
    {
        $this->requestParameters['BackupSetName'] = $backupSetName;
        $this->queryParameters['BackupSetName'] = $backupSetName;

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
     * @param string $backupSetDataFormat
     *
     * @return $this
     */
    public function setBackupSetDataFormat($backupSetDataFormat)
    {
        $this->requestParameters['BackupSetDataFormat'] = $backupSetDataFormat;
        $this->queryParameters['BackupSetDataFormat'] = $backupSetDataFormat;

        return $this;
    }
}
