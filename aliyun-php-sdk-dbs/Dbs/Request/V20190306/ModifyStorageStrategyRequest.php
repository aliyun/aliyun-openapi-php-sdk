<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyStorageStrategy
 *
 * @method string getDuplicationArchivePeriod()
 * @method string getClientToken()
 * @method string getBackupPlanId()
 * @method string getOwnerId()
 * @method string getBackupRetentionPeriod()
 * @method string getDuplicationInfrequentAccessPeriod()
 */
class ModifyStorageStrategyRequest extends \RpcAcsRequest
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
            'ModifyStorageStrategy',
            'cbs'
        );
    }

    /**
     * @param string $duplicationArchivePeriod
     *
     * @return $this
     */
    public function setDuplicationArchivePeriod($duplicationArchivePeriod)
    {
        $this->requestParameters['DuplicationArchivePeriod'] = $duplicationArchivePeriod;
        $this->queryParameters['DuplicationArchivePeriod'] = $duplicationArchivePeriod;

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
     * @param string $duplicationInfrequentAccessPeriod
     *
     * @return $this
     */
    public function setDuplicationInfrequentAccessPeriod($duplicationInfrequentAccessPeriod)
    {
        $this->requestParameters['DuplicationInfrequentAccessPeriod'] = $duplicationInfrequentAccessPeriod;
        $this->queryParameters['DuplicationInfrequentAccessPeriod'] = $duplicationInfrequentAccessPeriod;

        return $this;
    }
}
