<?php

namespace dms_enterprise\Request\V20181101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListInstances
 *
 * @method string getSearchKey()
 * @method string getTid()
 * @method string getInstanceState()
 * @method string getPageNumber()
 * @method string getNetType()
 * @method string getDbType()
 * @method string getEnvType()
 * @method string getInstanceSource()
 * @method string getPageSize()
 */
class ListInstancesRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'dms-enterprise',
            '2018-11-01',
            'ListInstances'
        );
    }

    /**
     * @param string $searchKey
     *
     * @return $this
     */
    public function setSearchKey($searchKey)
    {
        $this->requestParameters['SearchKey'] = $searchKey;
        $this->queryParameters['SearchKey'] = $searchKey;

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
     * @param string $instanceState
     *
     * @return $this
     */
    public function setInstanceState($instanceState)
    {
        $this->requestParameters['InstanceState'] = $instanceState;
        $this->queryParameters['InstanceState'] = $instanceState;

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
     * @param string $netType
     *
     * @return $this
     */
    public function setNetType($netType)
    {
        $this->requestParameters['NetType'] = $netType;
        $this->queryParameters['NetType'] = $netType;

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
     * @param string $instanceSource
     *
     * @return $this
     */
    public function setInstanceSource($instanceSource)
    {
        $this->requestParameters['InstanceSource'] = $instanceSource;
        $this->queryParameters['InstanceSource'] = $instanceSource;

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
}
