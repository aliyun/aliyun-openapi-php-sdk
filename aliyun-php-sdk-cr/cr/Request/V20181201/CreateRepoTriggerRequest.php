<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRepoTrigger
 *
 * @method string getRepoId()
 * @method string getTriggerTag()
 * @method string getTriggerType()
 * @method string getTriggerUrl()
 * @method string getInstanceId()
 * @method string getTriggerName()
 */
class CreateRepoTriggerRequest extends \RpcAcsRequest
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
            'CreateRepoTrigger',
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
     * @param string $triggerTag
     *
     * @return $this
     */
    public function setTriggerTag($triggerTag)
    {
        $this->requestParameters['TriggerTag'] = $triggerTag;
        $this->queryParameters['TriggerTag'] = $triggerTag;

        return $this;
    }

    /**
     * @param string $triggerType
     *
     * @return $this
     */
    public function setTriggerType($triggerType)
    {
        $this->requestParameters['TriggerType'] = $triggerType;
        $this->queryParameters['TriggerType'] = $triggerType;

        return $this;
    }

    /**
     * @param string $triggerUrl
     *
     * @return $this
     */
    public function setTriggerUrl($triggerUrl)
    {
        $this->requestParameters['TriggerUrl'] = $triggerUrl;
        $this->queryParameters['TriggerUrl'] = $triggerUrl;

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
     * @param string $triggerName
     *
     * @return $this
     */
    public function setTriggerName($triggerName)
    {
        $this->requestParameters['TriggerName'] = $triggerName;
        $this->queryParameters['TriggerName'] = $triggerName;

        return $this;
    }
}
