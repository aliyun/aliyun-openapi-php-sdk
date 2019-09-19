<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateMergeFaceGroupsJob
 *
 * @method string getProject()
 * @method string getNotifyEndpoint()
 * @method string getGroupIdFrom()
 * @method string getNotifyTopicName()
 * @method string getGroupIdTo()
 * @method string getSetId()
 */
class CreateMergeFaceGroupsJobRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'CreateMergeFaceGroupsJob',
            'imm'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

        return $this;
    }

    /**
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function setNotifyEndpoint($notifyEndpoint)
    {
        $this->requestParameters['NotifyEndpoint'] = $notifyEndpoint;
        $this->queryParameters['NotifyEndpoint'] = $notifyEndpoint;

        return $this;
    }

    /**
     * @param string $groupIdFrom
     *
     * @return $this
     */
    public function setGroupIdFrom($groupIdFrom)
    {
        $this->requestParameters['GroupIdFrom'] = $groupIdFrom;
        $this->queryParameters['GroupIdFrom'] = $groupIdFrom;

        return $this;
    }

    /**
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function setNotifyTopicName($notifyTopicName)
    {
        $this->requestParameters['NotifyTopicName'] = $notifyTopicName;
        $this->queryParameters['NotifyTopicName'] = $notifyTopicName;

        return $this;
    }

    /**
     * @param string $groupIdTo
     *
     * @return $this
     */
    public function setGroupIdTo($groupIdTo)
    {
        $this->requestParameters['GroupIdTo'] = $groupIdTo;
        $this->queryParameters['GroupIdTo'] = $groupIdTo;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function setSetId($setId)
    {
        $this->requestParameters['SetId'] = $setId;
        $this->queryParameters['SetId'] = $setId;

        return $this;
    }
}
