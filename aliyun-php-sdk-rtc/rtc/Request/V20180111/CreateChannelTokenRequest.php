<?php

namespace rtc\Request\V20180111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateChannelToken
 *
 * @method string getSessionId()
 * @method string getUId()
 * @method string getOwnerId()
 * @method string getNonce()
 * @method string getAppId()
 * @method string getChannelId()
 */
class CreateChannelTokenRequest extends \RpcAcsRequest
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
            'CreateChannelToken',
            'rtc'
        );
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        $this->requestParameters['SessionId'] = $sessionId;
        $this->queryParameters['SessionId'] = $sessionId;

        return $this;
    }

    /**
     * @param string $uId
     *
     * @return $this
     */
    public function setUId($uId)
    {
        $this->requestParameters['UId'] = $uId;
        $this->queryParameters['UId'] = $uId;

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
     * @param string $nonce
     *
     * @return $this
     */
    public function setNonce($nonce)
    {
        $this->requestParameters['Nonce'] = $nonce;
        $this->queryParameters['Nonce'] = $nonce;

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
