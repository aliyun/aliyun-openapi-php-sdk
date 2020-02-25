<?php

namespace dms_enterprise\Request\V20181101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListUserPermissions
 *
 * @method string getUserId()
 * @method string getTid()
 * @method string getPageNumber()
 * @method string getPermType()
 * @method string getDatabaseName()
 * @method string getEnvType()
 * @method string getDbType()
 * @method string getPageSize()
 * @method string getLogic()
 */
class ListUserPermissionsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'dms-enterprise',
            '2018-11-01',
            'ListUserPermissions'
        );
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }

    /**
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        $this->requestParameters['Tid'] = $tid;
        $this->queryParameters['Tid'] = $tid;

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

    /**
     * @param string $permType
     *
     * @return $this
     */
    public function setPermType($permType)
    {
        $this->requestParameters['PermType'] = $permType;
        $this->queryParameters['PermType'] = $permType;

        return $this;
    }

    /**
     * @param string $databaseName
     *
     * @return $this
     */
    public function setDatabaseName($databaseName)
    {
        $this->requestParameters['DatabaseName'] = $databaseName;
        $this->queryParameters['DatabaseName'] = $databaseName;

        return $this;
    }

    /**
     * @param string $envType
     *
     * @return $this
     */
    public function setEnvType($envType)
    {
        $this->requestParameters['EnvType'] = $envType;
        $this->queryParameters['EnvType'] = $envType;

        return $this;
    }

    /**
     * @param string $dbType
     *
     * @return $this
     */
    public function setDbType($dbType)
    {
        $this->requestParameters['DbType'] = $dbType;
        $this->queryParameters['DbType'] = $dbType;

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
     * @param string $logic
     *
     * @return $this
     */
    public function setLogic($logic)
    {
        $this->requestParameters['Logic'] = $logic;
        $this->queryParameters['Logic'] = $logic;

        return $this;
    }
}
