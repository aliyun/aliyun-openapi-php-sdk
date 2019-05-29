<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListRepository
 *
 * @method string getInstanceId()
 * @method string getRepoName()
 * @method string getRepoNamespaceName()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getRepoStatus()
 */
class ListRepositoryRequest extends \RpcAcsRequest
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
            'ListRepository',
            'cr'
        );
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
     * @param string $repoName
     *
     * @return $this
     */
    public function setRepoName($repoName)
    {
        $this->requestParameters['RepoName'] = $repoName;
        $this->queryParameters['RepoName'] = $repoName;

        return $this;
    }

    /**
     * @param string $repoNamespaceName
     *
     * @return $this
     */
    public function setRepoNamespaceName($repoNamespaceName)
    {
        $this->requestParameters['RepoNamespaceName'] = $repoNamespaceName;
        $this->queryParameters['RepoNamespaceName'] = $repoNamespaceName;

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

    /**
     * @param string $repoStatus
     *
     * @return $this
     */
    public function setRepoStatus($repoStatus)
    {
        $this->requestParameters['RepoStatus'] = $repoStatus;
        $this->queryParameters['RepoStatus'] = $repoStatus;

        return $this;
    }
}
