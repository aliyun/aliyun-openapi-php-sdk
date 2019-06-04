<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetLiveStreamsNotifyUrlConfig
 *
 * @method string getAuthKey()
 * @method string getDomainName()
 * @method string getNotifyUrl()
 * @method string getOwnerId()
 * @method string getAuthType()
 */
class SetLiveStreamsNotifyUrlConfigRequest extends \RpcAcsRequest
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
            'SetLiveStreamsNotifyUrlConfig',
            'live'
        );
    }

    /**
     * @param string $authKey
     *
     * @return $this
     */
    public function setAuthKey($authKey)
    {
        $this->requestParameters['AuthKey'] = $authKey;
        $this->queryParameters['AuthKey'] = $authKey;

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
     * @param string $notifyUrl
     *
     * @return $this
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->requestParameters['NotifyUrl'] = $notifyUrl;
        $this->queryParameters['NotifyUrl'] = $notifyUrl;

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
     * @param string $authType
     *
     * @return $this
     */
    public function setAuthType($authType)
    {
        $this->requestParameters['AuthType'] = $authType;
        $this->queryParameters['AuthType'] = $authType;

        return $this;
    }
}
