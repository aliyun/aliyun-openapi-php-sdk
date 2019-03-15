<?php

namespace rtc\Request\V20180111;

/**
 * Request of StartTask
 *
 * @method array getMixPaness()
 * @method string getIdempotentId()
 * @method string getOwnerId()
 * @method string getTemplateId()
 * @method string getAppId()
 * @method string getChannelId()
 */
class StartTaskRequest extends \RpcAcsRequest
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
            'StartTask',
            'rtc'
        );
    }

    /**
     * @param array $mixPaness
     *
     * @return $this
     */
    public function setMixPaness(array $mixPaness)
    {
        $this->requestParameters['MixPaness'] = $mixPaness;
        foreach ($mixPaness as $i => $iValue) {
            $this->queryParameters['MixPanes.' . ($i + 1) . '.PaneId'] = $mixPaness[$i]['PaneId'];
            $this->queryParameters['MixPanes.' . ($i + 1) . '.UserId'] = $mixPaness[$i]['UserId'];
            $this->queryParameters['MixPanes.' . ($i + 1) . '.SourceType'] = $mixPaness[$i]['SourceType'];
        }

        return $this;
    }

    /**
     * @param string $idempotentId
     *
     * @return $this
     */
    public function setIdempotentId($idempotentId)
    {
        $this->requestParameters['IdempotentId'] = $idempotentId;
        $this->queryParameters['IdempotentId'] = $idempotentId;

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
