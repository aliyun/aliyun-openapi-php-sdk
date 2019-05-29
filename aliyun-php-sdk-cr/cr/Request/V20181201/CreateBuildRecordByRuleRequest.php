<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateBuildRecordByRule
 *
 * @method string getRepoId()
 * @method string getBuildRuleId()
 * @method string getInstanceId()
 */
class CreateBuildRecordByRuleRequest extends \RpcAcsRequest
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
            'CreateBuildRecordByRule',
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
     * @param string $buildRuleId
     *
     * @return $this
     */
    public function setBuildRuleId($buildRuleId)
    {
        $this->requestParameters['BuildRuleId'] = $buildRuleId;
        $this->queryParameters['BuildRuleId'] = $buildRuleId;

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
