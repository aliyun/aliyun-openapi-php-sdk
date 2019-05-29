<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateRepository
 *
 * @method string getRepoType()
 * @method string getSummary()
 * @method string getRepoId()
 * @method string getInstanceId()
 * @method string getDetail()
 */
class UpdateRepositoryRequest extends \RpcAcsRequest
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
            'UpdateRepository',
            'cr'
        );
    }

    /**
     * @param string $repoType
     *
     * @return $this
     */
    public function setRepoType($repoType)
    {
        $this->requestParameters['RepoType'] = $repoType;
        $this->queryParameters['RepoType'] = $repoType;

        return $this;
    }

    /**
     * @param string $summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->requestParameters['Summary'] = $summary;
        $this->queryParameters['Summary'] = $summary;

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

    /**
     * @param string $detail
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->requestParameters['Detail'] = $detail;
        $this->queryParameters['Detail'] = $detail;

        return $this;
    }
}
