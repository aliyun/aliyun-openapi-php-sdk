<?php

namespace rtc\Request\V20180111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StartMPUTask
 *
 * @method array getUserPaness()
 * @method string getBackgroundColor()
 * @method string getTaskProfile()
 * @method array getLayoutIdss()
 * @method string getTaskId()
 * @method string getStreamURL()
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getMediaEncode()
 * @method string getChannelId()
 */
class StartMPUTaskRequest extends \RpcAcsRequest
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
            'rtc',
            '2018-01-11',
            'StartMPUTask',
            'rtc'
        );
    }

    /**
     * @param array $userPanes
     *
     * @return $this
     */
    public function setUserPaness(array $userPanes)
    {
        $this->requestParameters['UserPaness'] = $userPanes;
        foreach ($userPanes as $depth1 => $depth1Value) {
            $this->queryParameters['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
            $this->queryParameters['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
            $this->queryParameters['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
        }

        return $this;
    }

    /**
     * @param string $backgroundColor
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->requestParameters['BackgroundColor'] = $backgroundColor;
        $this->queryParameters['BackgroundColor'] = $backgroundColor;

        return $this;
    }

    /**
     * @param string $taskProfile
     *
     * @return $this
     */
    public function setTaskProfile($taskProfile)
    {
        $this->requestParameters['TaskProfile'] = $taskProfile;
        $this->queryParameters['TaskProfile'] = $taskProfile;

        return $this;
    }

    /**
     * @param array $layoutIds
     *
     * @return $this
     */
    public function setLayoutIdss(array $layoutIds)
    {
        $this->requestParameters['LayoutIdss'] = $layoutIds;
        foreach ($layoutIds as $i => $iValue) {
            $this->queryParameters['LayoutIds.' . ($i + 1)] = $iValue;
        }

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
     * @param string $streamURL
     *
     * @return $this
     */
    public function setStreamURL($streamURL)
    {
        $this->requestParameters['StreamURL'] = $streamURL;
        $this->queryParameters['StreamURL'] = $streamURL;

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
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $mediaEncode
     *
     * @return $this
     */
    public function setMediaEncode($mediaEncode)
    {
        $this->requestParameters['MediaEncode'] = $mediaEncode;
        $this->queryParameters['MediaEncode'] = $mediaEncode;

        return $this;
    }

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        $this->requestParameters['ChannelId'] = $channelId;
        $this->queryParameters['ChannelId'] = $channelId;

        return $this;
    }
}
