<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateGrabFrameTask
 *
 * @method string getProject()
 * @method string getNotifyEndpoint()
 * @method string getCustomMessage()
 * @method string getNotifyTopicName()
 * @method string getTargetList()
 * @method string getVideoUri()
 */
class CreateGrabFrameTaskRequest extends \RpcAcsRequest
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
            'CreateGrabFrameTask',
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
     * @param string $customMessage
     *
     * @return $this
     */
    public function setCustomMessage($customMessage)
    {
        $this->requestParameters['CustomMessage'] = $customMessage;
        $this->queryParameters['CustomMessage'] = $customMessage;

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
     * @param string $targetList
     *
     * @return $this
     */
    public function setTargetList($targetList)
    {
        $this->requestParameters['TargetList'] = $targetList;
        $this->queryParameters['TargetList'] = $targetList;

        return $this;
    }

    /**
     * @param string $videoUri
     *
     * @return $this
     */
    public function setVideoUri($videoUri)
    {
        $this->requestParameters['VideoUri'] = $videoUri;
        $this->queryParameters['VideoUri'] = $videoUri;

        return $this;
    }
}
