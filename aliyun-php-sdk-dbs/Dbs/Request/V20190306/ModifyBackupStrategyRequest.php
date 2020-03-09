<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyBackupStrategy
 *
 * @method string getClientToken()
 * @method string getBackupPlanId()
 * @method string getOwnerId()
 * @method string getBackupPeriod()
 * @method string getBackupStartTime()
 */
class ModifyBackupStrategyRequest extends \RpcAcsRequest
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
            'ModifyBackupStrategy',
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
     * @param string $backupPeriod
     *
     * @return $this
     */
    public function setBackupPeriod($backupPeriod)
    {
        $this->requestParameters['BackupPeriod'] = $backupPeriod;
        $this->queryParameters['BackupPeriod'] = $backupPeriod;

        return $this;
    }

    /**
     * @param string $backupStartTime
     *
     * @return $this
     */
    public function setBackupStartTime($backupStartTime)
    {
        $this->requestParameters['BackupStartTime'] = $backupStartTime;
        $this->queryParameters['BackupStartTime'] = $backupStartTime;

        return $this;
    }
}
