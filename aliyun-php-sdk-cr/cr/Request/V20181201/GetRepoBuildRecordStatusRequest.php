<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetRepoBuildRecordStatus
 *
 * @method string getBuildRecordId()
 * @method string getRepoId()
 * @method string getInstanceId()
 */
class GetRepoBuildRecordStatusRequest extends \RpcAcsRequest
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
            'GetRepoBuildRecordStatus',
            'cr'
        );
    }

    /**
     * @param string $buildRecordId
     *
     * @return $this
     */
    public function setBuildRecordId($buildRecordId)
    {
        $this->requestParameters['BuildRecordId'] = $buildRecordId;
        $this->queryParameters['BuildRecordId'] = $buildRecordId;

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
}
