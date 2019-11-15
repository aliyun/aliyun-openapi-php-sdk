<?php

namespace Cdn\Request\V20141111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ResumeLiveStream
 *
 * @method string getLiveStreamType()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method string getStreamName()
 */
class ResumeLiveStreamRequest extends \RpcAcsRequest
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
            'Cdn',
            '2014-11-11',
            'ResumeLiveStream'
        );
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
}
