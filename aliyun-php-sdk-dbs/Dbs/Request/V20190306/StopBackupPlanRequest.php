<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StopBackupPlan
 *
 * @method string getStopMethod()
 * @method string getClientToken()
 * @method string getBackupPlanId()
 * @method string getOwnerId()
 */
class StopBackupPlanRequest extends \RpcAcsRequest
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
            'StopBackupPlan',
            'cbs'
        );
    }

    /**
     * @param string $stopMethod
     *
     * @return $this
     */
    public function setStopMethod($stopMethod)
    {
        $this->requestParameters['StopMethod'] = $stopMethod;
        $this->queryParameters['StopMethod'] = $stopMethod;

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
}
