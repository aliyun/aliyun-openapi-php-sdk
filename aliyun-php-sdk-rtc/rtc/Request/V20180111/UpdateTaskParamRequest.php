<?php

namespace rtc\Request\V20180111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateTaskParam
 *
 * @method array getMixPaness()
 * @method string getTaskId()
 * @method string getOwnerId()
 * @method string getTemplateId()
 * @method string getAppId()
 * @method string getChannelId()
 */
class UpdateTaskParamRequest extends \RpcAcsRequest
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
            'UpdateTaskParam',
            'rtc'
        );
    }

    /**
     * @param array $mixPanes
     *
     * @return $this
     */
    public function setMixPaness(array $mixPanes)
    {
        $this->requestParameters['MixPaness'] = $mixPanes;
        foreach ($mixPanes as $depth1 => $depth1Value) {
            $this->queryParameters['MixPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
            $this->queryParameters['MixPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
            $this->queryParameters['MixPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
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
     * @param string $templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->requestParameters['TemplateId'] = $templateId;
        $this->queryParameters['TemplateId'] = $templateId;

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
