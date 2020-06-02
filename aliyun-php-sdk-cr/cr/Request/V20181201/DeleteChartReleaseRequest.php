<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteChartRelease
 *
 * @method string getRelease()
 * @method string getInstanceId()
 * @method string getRepoName()
 * @method string getRepoNamespaceName()
 * @method string getChart()
 */
class DeleteChartReleaseRequest extends \RpcAcsRequest
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
            'DeleteChartRelease',
            'acr'
        );
    }

    /**
     * @param string $release
     *
     * @return $this
     */
    public function setRelease($release)
    {
        $this->requestParameters['Release'] = $release;
        $this->queryParameters['Release'] = $release;

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
     * @param string $chart
     *
     * @return $this
     */
    public function setChart($chart)
    {
        $this->requestParameters['Chart'] = $chart;
        $this->queryParameters['Chart'] = $chart;

        return $this;
    }
}
