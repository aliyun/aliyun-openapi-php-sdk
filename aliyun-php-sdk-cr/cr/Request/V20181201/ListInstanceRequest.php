<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListInstance
 *
 * @method string getInstanceStatus()
 * @method string getInstanceName()
 * @method string getPageNo()
 * @method string getPageSize()
 */
class ListInstanceRequest extends \RpcAcsRequest
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
            'cr',
            '2018-12-01',
            'ListInstance',
            'cr'
        );
    }

    /**
     * @param string $instanceStatus
     *
     * @return $this
     */
    public function setInstanceStatus($instanceStatus)
    {
        $this->requestParameters['InstanceStatus'] = $instanceStatus;
        $this->queryParameters['InstanceStatus'] = $instanceStatus;

        return $this;
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        $this->requestParameters['PageNo'] = $pageNo;
        $this->queryParameters['PageNo'] = $pageNo;

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
