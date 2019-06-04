<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetLiveLazyPullStreamInfoConfig
 *
 * @method string getPullArgs()
 * @method string getAppName()
 * @method string getPullAuthKey()
 * @method string getPullAuthType()
 * @method string getDomainName()
 * @method string getPullDomainName()
 * @method string getOwnerId()
 * @method string getPullAppName()
 * @method string getPullProtocol()
 */
class SetLiveLazyPullStreamInfoConfigRequest extends \RpcAcsRequest
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
            'SetLiveLazyPullStreamInfoConfig',
            'live'
        );
    }

    /**
     * @param string $pullArgs
     *
     * @return $this
     */
    public function setPullArgs($pullArgs)
    {
        $this->requestParameters['PullArgs'] = $pullArgs;
        $this->queryParameters['PullArgs'] = $pullArgs;

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
     * @param string $pullAuthKey
     *
     * @return $this
     */
    public function setPullAuthKey($pullAuthKey)
    {
        $this->requestParameters['PullAuthKey'] = $pullAuthKey;
        $this->queryParameters['PullAuthKey'] = $pullAuthKey;

        return $this;
    }

    /**
     * @param string $pullAuthType
     *
     * @return $this
     */
    public function setPullAuthType($pullAuthType)
    {
        $this->requestParameters['PullAuthType'] = $pullAuthType;
        $this->queryParameters['PullAuthType'] = $pullAuthType;

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
     * @param string $pullDomainName
     *
     * @return $this
     */
    public function setPullDomainName($pullDomainName)
    {
        $this->requestParameters['PullDomainName'] = $pullDomainName;
        $this->queryParameters['PullDomainName'] = $pullDomainName;

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
     * @param string $pullAppName
     *
     * @return $this
     */
    public function setPullAppName($pullAppName)
    {
        $this->requestParameters['PullAppName'] = $pullAppName;
        $this->queryParameters['PullAppName'] = $pullAppName;

        return $this;
    }

    /**
     * @param string $pullProtocol
     *
     * @return $this
     */
    public function setPullProtocol($pullProtocol)
    {
        $this->requestParameters['PullProtocol'] = $pullProtocol;
        $this->queryParameters['PullProtocol'] = $pullProtocol;

        return $this;
    }
}
