<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRepoSyncRule
 *
 * @method string getNamespaceName()
 * @method string getTargetRepoName()
 * @method string getSyncScope()
 * @method string getSyncRuleName()
 * @method string getTagFilter()
 * @method string getTargetNamespaceName()
 * @method string getInstanceId()
 * @method string getTargetInstanceId()
 * @method string getRepoName()
 * @method string getTargetRegionId()
 * @method string getSyncTrigger()
 */
class CreateRepoSyncRuleRequest extends \RpcAcsRequest
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
            'CreateRepoSyncRule',
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
     * @param string $targetRepoName
     *
     * @return $this
     */
    public function setTargetRepoName($targetRepoName)
    {
        $this->requestParameters['TargetRepoName'] = $targetRepoName;
        $this->queryParameters['TargetRepoName'] = $targetRepoName;

        return $this;
    }

    /**
     * @param string $syncScope
     *
     * @return $this
     */
    public function setSyncScope($syncScope)
    {
        $this->requestParameters['SyncScope'] = $syncScope;
        $this->queryParameters['SyncScope'] = $syncScope;

        return $this;
    }

    /**
     * @param string $syncRuleName
     *
     * @return $this
     */
    public function setSyncRuleName($syncRuleName)
    {
        $this->requestParameters['SyncRuleName'] = $syncRuleName;
        $this->queryParameters['SyncRuleName'] = $syncRuleName;

        return $this;
    }

    /**
     * @param string $tagFilter
     *
     * @return $this
     */
    public function setTagFilter($tagFilter)
    {
        $this->requestParameters['TagFilter'] = $tagFilter;
        $this->queryParameters['TagFilter'] = $tagFilter;

        return $this;
    }

    /**
     * @param string $targetNamespaceName
     *
     * @return $this
     */
    public function setTargetNamespaceName($targetNamespaceName)
    {
        $this->requestParameters['TargetNamespaceName'] = $targetNamespaceName;
        $this->queryParameters['TargetNamespaceName'] = $targetNamespaceName;

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

    /**
     * @param string $syncTrigger
     *
     * @return $this
     */
    public function setSyncTrigger($syncTrigger)
    {
        $this->requestParameters['SyncTrigger'] = $syncTrigger;
        $this->queryParameters['SyncTrigger'] = $syncTrigger;

        return $this;
    }
}
