<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateVideoAbstractTask
 *
 * @method string getTargetVideoUri()
 * @method string getProject()
 * @method string getNotifyEndpoint()
 * @method string getNotifyTopicName()
 * @method string getVideoUri()
 * @method string getAbstractLength()
 * @method string getTargetClipsUri()
 */
class CreateVideoAbstractTaskRequest extends \RpcAcsRequest
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
            'CreateVideoAbstractTask',
            'imm'
        );
    }

    /**
     * @param string $targetVideoUri
     *
     * @return $this
     */
    public function setTargetVideoUri($targetVideoUri)
    {
        $this->requestParameters['TargetVideoUri'] = $targetVideoUri;
        $this->queryParameters['TargetVideoUri'] = $targetVideoUri;

        return $this;
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

    /**
     * @param string $abstractLength
     *
     * @return $this
     */
    public function setAbstractLength($abstractLength)
    {
        $this->requestParameters['AbstractLength'] = $abstractLength;
        $this->queryParameters['AbstractLength'] = $abstractLength;

        return $this;
    }

    /**
     * @param string $targetClipsUri
     *
     * @return $this
     */
    public function setTargetClipsUri($targetClipsUri)
    {
        $this->requestParameters['TargetClipsUri'] = $targetClipsUri;
        $this->queryParameters['TargetClipsUri'] = $targetClipsUri;

        return $this;
    }
}
