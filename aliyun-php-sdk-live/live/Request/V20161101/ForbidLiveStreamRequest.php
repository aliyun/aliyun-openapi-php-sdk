<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ForbidLiveStream
 *
 * @method string getResumeTime()
 * @method string getAppName()
 * @method string getLiveStreamType()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getOneshot()
 * @method string getStreamName()
 * @method string getControlStreamAction()
 */
class ForbidLiveStreamRequest extends \RpcAcsRequest
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
            'live',
            '2016-11-01',
            'ForbidLiveStream',
            'live'
        );
    }

    /**
     * @param string $resumeTime
     *
     * @return $this
     */
    public function setResumeTime($resumeTime)
    {
        $this->requestParameters['ResumeTime'] = $resumeTime;
        $this->queryParameters['ResumeTime'] = $resumeTime;

        return $this;
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function setAppName($appName)
    {
        $this->requestParameters['AppName'] = $appName;
        $this->queryParameters['AppName'] = $appName;

        return $this;
    }

    /**
     * @param string $liveStreamType
     *
     * @return $this
     */
    public function setLiveStreamType($liveStreamType)
    {
        $this->requestParameters['LiveStreamType'] = $liveStreamType;
        $this->queryParameters['LiveStreamType'] = $liveStreamType;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $oneshot
     *
     * @return $this
     */
    public function setOneshot($oneshot)
    {
        $this->requestParameters['Oneshot'] = $oneshot;
        $this->queryParameters['Oneshot'] = $oneshot;

        return $this;
    }

    /**
     * @param string $streamName
     *
     * @return $this
     */
    public function setStreamName($streamName)
    {
        $this->requestParameters['StreamName'] = $streamName;
        $this->queryParameters['StreamName'] = $streamName;

        return $this;
    }

    /**
     * @param string $controlStreamAction
     *
     * @return $this
     */
    public function setControlStreamAction($controlStreamAction)
    {
        $this->requestParameters['ControlStreamAction'] = $controlStreamAction;
        $this->queryParameters['ControlStreamAction'] = $controlStreamAction;

        return $this;
    }
}
