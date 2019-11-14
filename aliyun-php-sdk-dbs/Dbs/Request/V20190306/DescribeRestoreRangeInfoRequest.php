<?php

namespace Dbs\Request\V20190306;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRestoreRangeInfo
 *
 * @method string getBeginTimestampForRestore()
 * @method string getEndTimestampForRestore()
 * @method string getClientToken()
 * @method string getBackupPlanId()
 * @method string getOwnerId()
 */
class DescribeRestoreRangeInfoRequest extends \RpcAcsRequest
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
            'DescribeRestoreRangeInfo',
            'cbs'
        );
    }

    /**
     * @param string $beginTimestampForRestore
     *
     * @return $this
     */
    public function setBeginTimestampForRestore($beginTimestampForRestore)
    {
        $this->requestParameters['BeginTimestampForRestore'] = $beginTimestampForRestore;
        $this->queryParameters['BeginTimestampForRestore'] = $beginTimestampForRestore;

        return $this;
    }

    /**
     * @param string $endTimestampForRestore
     *
     * @return $this
     */
    public function setEndTimestampForRestore($endTimestampForRestore)
    {
        $this->requestParameters['EndTimestampForRestore'] = $endTimestampForRestore;
        $this->queryParameters['EndTimestampForRestore'] = $endTimestampForRestore;

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
