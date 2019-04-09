<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of PutContact
 *
 * @method string getContactName()
 * @method string getChannelsMail()
 * @method string getChannelsAliIM()
 * @method string getChannelsDingWebHook()
 * @method string getDescribe()
 * @method string getChannelsSMS()
 */
class PutContactRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'PutContact',
            'cms'
        );
    }

    /**
     * @param string $contactName
     *
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->requestParameters['ContactName'] = $contactName;
        $this->queryParameters['ContactName'] = $contactName;

        return $this;
    }

    /**
     * @param string $channelsMail
     *
     * @return $this
     */
    public function setChannelsMail($channelsMail)
    {
        $this->requestParameters['ChannelsMail'] = $channelsMail;
        $this->queryParameters['Channels.Mail'] = $channelsMail;

        return $this;
    }

    /**
     * @param string $channelsAliIM
     *
     * @return $this
     */
    public function setChannelsAliIM($channelsAliIM)
    {
        $this->requestParameters['ChannelsAliIM'] = $channelsAliIM;
        $this->queryParameters['Channels.AliIM'] = $channelsAliIM;

        return $this;
    }

    /**
     * @param string $channelsDingWebHook
     *
     * @return $this
     */
    public function setChannelsDingWebHook($channelsDingWebHook)
    {
        $this->requestParameters['ChannelsDingWebHook'] = $channelsDingWebHook;
        $this->queryParameters['Channels.DingWebHook'] = $channelsDingWebHook;

        return $this;
    }

    /**
     * @param string $describe
     *
     * @return $this
     */
    public function setDescribe($describe)
    {
        $this->requestParameters['Describe'] = $describe;
        $this->queryParameters['Describe'] = $describe;

        return $this;
    }

    /**
     * @param string $channelsSMS
     *
     * @return $this
     */
    public function setChannelsSMS($channelsSMS)
    {
        $this->requestParameters['ChannelsSMS'] = $channelsSMS;
        $this->queryParameters['Channels.SMS'] = $channelsSMS;

        return $this;
    }
}
