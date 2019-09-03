<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeMetaList
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getPattern()
 * @method string getPageSize()
 * @method string getDBInstanceId()
 * @method string getPageIndex()
 * @method string getRestoreTime()
 * @method string getResourceOwnerAccount()
 * @method string getBackupSetID()
 * @method string getOwnerId()
 * @method string getGetDbName()
 * @method string getRestoreType()
 */
class DescribeMetaListRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'DescribeMetaList',
            'rds'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

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
     * @param string $pattern
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->requestParameters['Pattern'] = $pattern;
        $this->queryParameters['Pattern'] = $pattern;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        $this->requestParameters['PageIndex'] = $pageIndex;
        $this->queryParameters['PageIndex'] = $pageIndex;

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
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $backupSetID
     *
     * @return $this
     */
    public function setBackupSetID($backupSetID)
    {
        $this->requestParameters['BackupSetID'] = $backupSetID;
        $this->queryParameters['BackupSetID'] = $backupSetID;

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
     * @param string $getDbName
     *
     * @return $this
     */
    public function setGetDbName($getDbName)
    {
        $this->requestParameters['GetDbName'] = $getDbName;
        $this->queryParameters['GetDbName'] = $getDbName;

        return $this;
    }

    /**
     * @param string $restoreType
     *
     * @return $this
     */
    public function setRestoreType($restoreType)
    {
        $this->requestParameters['RestoreType'] = $restoreType;
        $this->queryParameters['RestoreType'] = $restoreType;

        return $this;
    }
}
