<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRepoBuildRule
 *
 * @method string getRepoId()
 * @method string getPushName()
 * @method string getDockerfileName()
 * @method string getDockerfileLocation()
 * @method string getInstanceId()
 * @method string getImageTag()
 * @method string getPushType()
 */
class CreateRepoBuildRuleRequest extends \RpcAcsRequest
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
            'CreateRepoBuildRule',
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
     * @param string $pushName
     *
     * @return $this
     */
    public function setPushName($pushName)
    {
        $this->requestParameters['PushName'] = $pushName;
        $this->queryParameters['PushName'] = $pushName;

        return $this;
    }

    /**
     * @param string $dockerfileName
     *
     * @return $this
     */
    public function setDockerfileName($dockerfileName)
    {
        $this->requestParameters['DockerfileName'] = $dockerfileName;
        $this->queryParameters['DockerfileName'] = $dockerfileName;

        return $this;
    }

    /**
     * @param string $dockerfileLocation
     *
     * @return $this
     */
    public function setDockerfileLocation($dockerfileLocation)
    {
        $this->requestParameters['DockerfileLocation'] = $dockerfileLocation;
        $this->queryParameters['DockerfileLocation'] = $dockerfileLocation;

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
     * @param string $imageTag
     *
     * @return $this
     */
    public function setImageTag($imageTag)
    {
        $this->requestParameters['ImageTag'] = $imageTag;
        $this->queryParameters['ImageTag'] = $imageTag;

        return $this;
    }

    /**
     * @param string $pushType
     *
     * @return $this
     */
    public function setPushType($pushType)
    {
        $this->requestParameters['PushType'] = $pushType;
        $this->queryParameters['PushType'] = $pushType;

        return $this;
    }
}
