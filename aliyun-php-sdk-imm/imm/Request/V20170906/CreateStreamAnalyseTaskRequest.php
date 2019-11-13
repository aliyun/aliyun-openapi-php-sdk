<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateStreamAnalyseTask
 *
 * @method string getGrabType()
 * @method string getProject()
 * @method string getStartTime()
 * @method string getNotifyEndpoint()
 * @method string getStreamUri()
 * @method string getNotifyTopicName()
 * @method string getEndTime()
 * @method string getSaveType()
 * @method string getInterval()
 * @method string getTgtUri()
 */
class CreateStreamAnalyseTaskRequest extends \RpcAcsRequest
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
            'CreateStreamAnalyseTask',
            'imm'
        );
    }

    /**
     * @param string $grabType
     *
     * @return $this
     */
    public function setGrabType($grabType)
    {
        $this->requestParameters['GrabType'] = $grabType;
        $this->queryParameters['GrabType'] = $grabType;

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
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

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
     * @param string $streamUri
     *
     * @return $this
     */
    public function setStreamUri($streamUri)
    {
        $this->requestParameters['StreamUri'] = $streamUri;
        $this->queryParameters['StreamUri'] = $streamUri;

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
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $saveType
     *
     * @return $this
     */
    public function setSaveType($saveType)
    {
        $this->requestParameters['SaveType'] = $saveType;
        $this->queryParameters['SaveType'] = $saveType;

        return $this;
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->requestParameters['Interval'] = $interval;
        $this->queryParameters['Interval'] = $interval;

        return $this;
    }

    /**
     * @param string $tgtUri
     *
     * @return $this
     */
    public function setTgtUri($tgtUri)
    {
        $this->requestParameters['TgtUri'] = $tgtUri;
        $this->queryParameters['TgtUri'] = $tgtUri;

        return $this;
    }
}
