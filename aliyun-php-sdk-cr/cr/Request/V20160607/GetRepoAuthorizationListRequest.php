<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetRepoAuthorizationList
 *
 * @method string getRepoNamespace()
 * @method string getRepoName()
 * @method string getAuthorize()
 */
class GetRepoAuthorizationListRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetRepoAuthorizationList',
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

    /**
     * @param string $authorize
     *
     * @return $this
     */
    public function setAuthorize($authorize)
    {
        $this->requestParameters['Authorize'] = $authorize;
        $this->queryParameters['Authorize'] = $authorize;

        return $this;
    }
}
