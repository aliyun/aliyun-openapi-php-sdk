<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListRepoBuildRule
 *
 * @method string getRepoId()
 * @method string getInstanceId()
 * @method string getPageNo()
 * @method string getPageSize()
 */
class ListRepoBuildRuleRequest extends \RpcAcsRequest
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
            'ListRepoBuildRule',
            'cr'
        );
    }

    /**
     * @param string $repoId
     *
     * @return $this
     */
    public function setRepoId($repoId)
    {
        $this->requestParameters['RepoId'] = $repoId;
        $this->queryParameters['RepoId'] = $repoId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

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
