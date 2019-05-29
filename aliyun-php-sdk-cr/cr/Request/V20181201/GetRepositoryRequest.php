<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetRepository
 *
 * @method string getRepoId()
 * @method string getInstanceId()
 * @method string getRepoNamespaceName()
 * @method string getRepoName()
 */
class GetRepositoryRequest extends \RpcAcsRequest
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
            'GetRepository',
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
}
