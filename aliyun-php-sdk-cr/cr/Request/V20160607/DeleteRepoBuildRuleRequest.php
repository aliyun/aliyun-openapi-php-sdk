<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteRepoBuildRule
 *
 * @method string getBuildRuleId()
 * @method string getRepoNamespace()
 * @method string getRepoName()
 */
class DeleteRepoBuildRuleRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/repos/[RepoNamespace]/[RepoName]/rules/[BuildRuleId]';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'DeleteRepoBuildRule',
            'cr'
        );
    }

    /**
     * @param string $buildRuleId
     *
     * @return $this
     */
    public function setBuildRuleId($buildRuleId)
    {
        $this->requestParameters['BuildRuleId'] = $buildRuleId;
        $this->pathParameters['BuildRuleId'] = $buildRuleId;

        return $this;
    }

    /**
     * @param string $repoNamespace
     *
     * @return $this
     */
    public function setRepoNamespace($repoNamespace)
    {
        $this->requestParameters['RepoNamespace'] = $repoNamespace;
        $this->pathParameters['RepoNamespace'] = $repoNamespace;

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
        $this->pathParameters['RepoName'] = $repoName;

        return $this;
    }
}
