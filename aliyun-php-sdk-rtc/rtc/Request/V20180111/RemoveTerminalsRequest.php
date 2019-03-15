<?php

namespace rtc\Request\V20180111;

/**
 * Request of RemoveTerminals
 *
 * @method array getTerminalIdss()
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getChannelId()
 */
class RemoveTerminalsRequest extends \RpcAcsRequest
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
            'RemoveTerminals',
            'rtc'
        );
    }

    /**
     * @param array $terminalIdss
     *
     * @return $this
     */
    public function setTerminalIdss(array $terminalIdss)
    {
        $this->requestParameters['TerminalIdss'] = $terminalIdss;
        foreach ($terminalIdss as $i => $iValue) {
            $this->queryParameters['TerminalIds.' . ($i + 1)] = $iValue;
        }

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
