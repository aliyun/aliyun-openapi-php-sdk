<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateRepoSourceCodeRepo
 *
 * @method string getCodeRepoType()
 * @method string getRepoId()
 * @method string getAutoBuild()
 * @method string getDisableCacheBuild()
 * @method string getCodeRepoId()
 * @method string getOverseaBuild()
 * @method string getInstanceId()
 * @method string getCodeRepoNamespaceName()
 * @method string getCodeRepoName()
 */
class UpdateRepoSourceCodeRepoRequest extends \RpcAcsRequest
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
            'UpdateRepoSourceCodeRepo',
            'cr'
        );
    }

    /**
     * @param string $codeRepoType
     *
     * @return $this
     */
    public function setCodeRepoType($codeRepoType)
    {
        $this->requestParameters['CodeRepoType'] = $codeRepoType;
        $this->queryParameters['CodeRepoType'] = $codeRepoType;

        return $this;
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
     * @param string $autoBuild
     *
     * @return $this
     */
    public function setAutoBuild($autoBuild)
    {
        $this->requestParameters['AutoBuild'] = $autoBuild;
        $this->queryParameters['AutoBuild'] = $autoBuild;

        return $this;
    }

    /**
     * @param string $disableCacheBuild
     *
     * @return $this
     */
    public function setDisableCacheBuild($disableCacheBuild)
    {
        $this->requestParameters['DisableCacheBuild'] = $disableCacheBuild;
        $this->queryParameters['DisableCacheBuild'] = $disableCacheBuild;

        return $this;
    }

    /**
     * @param string $codeRepoId
     *
     * @return $this
     */
    public function setCodeRepoId($codeRepoId)
    {
        $this->requestParameters['CodeRepoId'] = $codeRepoId;
        $this->queryParameters['CodeRepoId'] = $codeRepoId;

        return $this;
    }

    /**
     * @param string $overseaBuild
     *
     * @return $this
     */
    public function setOverseaBuild($overseaBuild)
    {
        $this->requestParameters['OverseaBuild'] = $overseaBuild;
        $this->queryParameters['OverseaBuild'] = $overseaBuild;

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
     * @param string $codeRepoNamespaceName
     *
     * @return $this
     */
    public function setCodeRepoNamespaceName($codeRepoNamespaceName)
    {
        $this->requestParameters['CodeRepoNamespaceName'] = $codeRepoNamespaceName;
        $this->queryParameters['CodeRepoNamespaceName'] = $codeRepoNamespaceName;

        return $this;
    }

    /**
     * @param string $codeRepoName
     *
     * @return $this
     */
    public function setCodeRepoName($codeRepoName)
    {
        $this->requestParameters['CodeRepoName'] = $codeRepoName;
        $this->queryParameters['CodeRepoName'] = $codeRepoName;

        return $this;
    }
}
