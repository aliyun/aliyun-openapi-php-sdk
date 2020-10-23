<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of VideoAnalyseFeedback
 *
 * @method string getNote()
 * @method string getProject()
 * @method string getTaskId()
 * @method string getFrames()
 * @method string getSuggestion()
 * @method string getUri()
 * @method string getScenes()
 */
class VideoAnalyseFeedbackRequest extends \RpcAcsRequest
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
            'VideoAnalyseFeedback',
            'imm'
        );
    }

    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->requestParameters['Note'] = $note;
        $this->queryParameters['Note'] = $note;

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
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->requestParameters['TaskId'] = $taskId;
        $this->queryParameters['TaskId'] = $taskId;

        return $this;
    }

    /**
     * @param string $frames
     *
     * @return $this
     */
    public function setFrames($frames)
    {
        $this->requestParameters['Frames'] = $frames;
        $this->queryParameters['Frames'] = $frames;

        return $this;
    }

    /**
     * @param string $suggestion
     *
     * @return $this
     */
    public function setSuggestion($suggestion)
    {
        $this->requestParameters['Suggestion'] = $suggestion;
        $this->queryParameters['Suggestion'] = $suggestion;

        return $this;
    }

    /**
     * @param string $uri
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->requestParameters['Uri'] = $uri;
        $this->queryParameters['Uri'] = $uri;

        return $this;
    }

    /**
     * @param string $scenes
     *
     * @return $this
     */
    public function setScenes($scenes)
    {
        $this->requestParameters['Scenes'] = $scenes;
        $this->queryParameters['Scenes'] = $scenes;

        return $this;
    }
}
