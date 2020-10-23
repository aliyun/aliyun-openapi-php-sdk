<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateVideoProduceTask
 *
 * @method string getProject()
 * @method string getMusic()
 * @method string getNotifyEndpoint()
 * @method string getTargetUri()
 * @method string getTemplateName()
 * @method string getHeight()
 * @method string getCustomMessage()
 * @method string getImages()
 * @method string getNotifyTopicName()
 * @method string getWidth()
 */
class CreateVideoProduceTaskRequest extends \RpcAcsRequest
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
            'CreateVideoProduceTask',
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
     * @param string $music
     *
     * @return $this
     */
    public function setMusic($music)
    {
        $this->requestParameters['Music'] = $music;
        $this->queryParameters['Music'] = $music;

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
     * @param string $targetUri
     *
     * @return $this
     */
    public function setTargetUri($targetUri)
    {
        $this->requestParameters['TargetUri'] = $targetUri;
        $this->queryParameters['TargetUri'] = $targetUri;

        return $this;
    }

    /**
     * @param string $templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->requestParameters['TemplateName'] = $templateName;
        $this->queryParameters['TemplateName'] = $templateName;

        return $this;
    }

    /**
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->requestParameters['Height'] = $height;
        $this->queryParameters['Height'] = $height;

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
     * @param string $images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->requestParameters['Images'] = $images;
        $this->queryParameters['Images'] = $images;

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
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->requestParameters['Width'] = $width;
        $this->queryParameters['Width'] = $width;

        return $this;
    }
}
