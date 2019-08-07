<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetRdsBackUp
 *
 * @method string getBackupId()
 * @method string getPageSize()
 * @method string getDbInstanceId()
 * @method string getBackupType()
 * @method string getPageNumber()
 */
class GetRdsBackUpRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'GetRdsBackUp',
            'retailcloud'
        );
    }

    /**
     * @param string $backupId
     *
     * @return $this
     */
    public function setBackupId($backupId)
    {
        $this->requestParameters['BackupId'] = $backupId;
        $this->queryParameters['BackupId'] = $backupId;

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
     * @param string $dbInstanceId
     *
     * @return $this
     */
    public function setDbInstanceId($dbInstanceId)
    {
        $this->requestParameters['DbInstanceId'] = $dbInstanceId;
        $this->queryParameters['DbInstanceId'] = $dbInstanceId;

        return $this;
    }

    /**
     * @param string $backupType
     *
     * @return $this
     */
    public function setBackupType($backupType)
    {
        $this->requestParameters['BackupType'] = $backupType;
        $this->queryParameters['BackupType'] = $backupType;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
