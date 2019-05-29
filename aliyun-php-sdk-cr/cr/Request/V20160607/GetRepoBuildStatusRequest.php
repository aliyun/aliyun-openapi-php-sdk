<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetRepoBuildStatus
 *
 * @method string getBuildId()
 * @method string getRepoNamespace()
 * @method string getRepoName()
 */
class GetRepoBuildStatusRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/repos/[RepoNamespace]/[RepoName]/build/[BuildId]/status';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetRepoBuildStatus',
            'cr'
        );
    }

    /**
     * @param string $buildId
     *
     * @return $this
     */
    public function setBuildId($buildId)
    {
        $this->requestParameters['BuildId'] = $buildId;
        $this->pathParameters['BuildId'] = $buildId;

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
