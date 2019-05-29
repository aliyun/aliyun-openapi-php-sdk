<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteRepo
 *
 * @method string getRepoNamespace()
 * @method string getRepoName()
 */
class DeleteRepoRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/repos/[RepoNamespace]/[RepoName]';

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
            'DeleteRepo',
            'cr'
        );
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
