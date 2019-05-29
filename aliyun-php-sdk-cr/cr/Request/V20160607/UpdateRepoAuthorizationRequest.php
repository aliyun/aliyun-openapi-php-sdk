<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateRepoAuthorization
 *
 * @method string getRepoNamespace()
 * @method string getRepoName()
 * @method string getAuthorizeId()
 */
class UpdateRepoAuthorizationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/repos/[RepoNamespace]/[RepoName]/authorizations/[AuthorizeId]';

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
            '2016-06-07',
            'UpdateRepoAuthorization',
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
     * @param string $authorizeId
     *
     * @return $this
     */
    public function setAuthorizeId($authorizeId)
    {
        $this->requestParameters['AuthorizeId'] = $authorizeId;
        $this->pathParameters['AuthorizeId'] = $authorizeId;

        return $this;
    }
}
