<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetRepoTagScanStatus
 *
 * @method string getRepoId()
 * @method string getScanTaskId()
 * @method string getInstanceId()
 * @method string getTag()
 */
class GetRepoTagScanStatusRequest extends \RpcAcsRequest
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
            'GetRepoTagScanStatus',
            'acr'
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
     * @param string $scanTaskId
     *
     * @return $this
     */
    public function setScanTaskId($scanTaskId)
    {
        $this->requestParameters['ScanTaskId'] = $scanTaskId;
        $this->queryParameters['ScanTaskId'] = $scanTaskId;

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
     * @param string $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->requestParameters['Tag'] = $tag;
        $this->queryParameters['Tag'] = $tag;

        return $this;
    }
}
