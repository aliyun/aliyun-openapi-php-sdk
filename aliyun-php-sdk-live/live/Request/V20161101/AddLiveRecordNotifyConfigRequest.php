<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddLiveRecordNotifyConfig
 *
 * @method string getOnDemandUrl()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getNotifyUrl()
 * @method string getOwnerId()
 * @method string getNeedStatusNotify()
 */
class AddLiveRecordNotifyConfigRequest extends \RpcAcsRequest
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
            'AddLiveRecordNotifyConfig',
            'live'
        );
    }

    /**
     * @param string $onDemandUrl
     *
     * @return $this
     */
    public function setOnDemandUrl($onDemandUrl)
    {
        $this->requestParameters['OnDemandUrl'] = $onDemandUrl;
        $this->queryParameters['OnDemandUrl'] = $onDemandUrl;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

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
     * @param string $needStatusNotify
     *
     * @return $this
     */
    public function setNeedStatusNotify($needStatusNotify)
    {
        $this->requestParameters['NeedStatusNotify'] = $needStatusNotify;
        $this->queryParameters['NeedStatusNotify'] = $needStatusNotify;

        return $this;
    }
}
