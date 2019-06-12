<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateBackupPlan
 *
 * @method string getBackupMethod()
 * @method string getDatabaseType()
 * @method string getPeriod()
 * @method string getClientToken()
 * @method string getRegion()
 * @method string getOwnerId()
 * @method string getUsedTime()
 * @method string getInstanceClass()
 */
class CreateBackupPlanRequest extends \RpcAcsRequest
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
            'CreateBackupPlan',
            'cbs'
        );
    }

    /**
     * @param string $backupMethod
     *
     * @return $this
     */
    public function setBackupMethod($backupMethod)
    {
        $this->requestParameters['BackupMethod'] = $backupMethod;
        $this->queryParameters['BackupMethod'] = $backupMethod;

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
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

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
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

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
     * @param string $usedTime
     *
     * @return $this
     */
    public function setUsedTime($usedTime)
    {
        $this->requestParameters['UsedTime'] = $usedTime;
        $this->queryParameters['UsedTime'] = $usedTime;

        return $this;
    }

    /**
     * @param string $instanceClass
     *
     * @return $this
     */
    public function setInstanceClass($instanceClass)
    {
        $this->requestParameters['InstanceClass'] = $instanceClass;
        $this->queryParameters['InstanceClass'] = $instanceClass;

        return $this;
    }
}
