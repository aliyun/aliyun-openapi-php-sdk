<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListRepoSyncRule
 *
 * @method string getNamespaceName()
 * @method string getInstanceId()
 * @method string getTargetInstanceId()
 * @method string getRepoName()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getTargetRegionId()
 */
class ListRepoSyncRuleRequest extends \RpcAcsRequest
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
            'ListRepoSyncRule',
            'acr'
        );
    }

    /**
     * @param string $namespaceName
     *
     * @return $this
     */
    public function setNamespaceName($namespaceName)
    {
        $this->requestParameters['NamespaceName'] = $namespaceName;
        $this->queryParameters['NamespaceName'] = $namespaceName;

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
     * @param string $targetInstanceId
     *
     * @return $this
     */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->requestParameters['TargetInstanceId'] = $targetInstanceId;
        $this->queryParameters['TargetInstanceId'] = $targetInstanceId;

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
     * @param string $targetRegionId
     *
     * @return $this
     */
    public function setTargetRegionId($targetRegionId)
    {
        $this->requestParameters['TargetRegionId'] = $targetRegionId;
        $this->queryParameters['TargetRegionId'] = $targetRegionId;

        return $this;
    }
}
