<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of StartLiveIndex
 *
 * @method string getOssBucket()
 * @method string getTokenId()
 * @method string getDomainName()
 * @method string getOssEndpoint()
 * @method string getInputUrl()
 * @method string getOwnerId()
 * @method string getAppName()
 * @method string getInterval()
 * @method string getOssRamRole()
 * @method string getStreamName()
 * @method string getOssUserId()
 */
class StartLiveIndexRequest extends \RpcAcsRequest
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
            'StartLiveIndex',
            'live'
        );
    }

    /**
     * @param string $ossBucket
     *
     * @return $this
     */
    public function setOssBucket($ossBucket)
    {
        $this->requestParameters['OssBucket'] = $ossBucket;
        $this->queryParameters['OssBucket'] = $ossBucket;

        return $this;
    }

    /**
     * @param string $tokenId
     *
     * @return $this
     */
    public function setTokenId($tokenId)
    {
        $this->requestParameters['TokenId'] = $tokenId;
        $this->queryParameters['TokenId'] = $tokenId;

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
     * @param string $ossEndpoint
     *
     * @return $this
     */
    public function setOssEndpoint($ossEndpoint)
    {
        $this->requestParameters['OssEndpoint'] = $ossEndpoint;
        $this->queryParameters['OssEndpoint'] = $ossEndpoint;

        return $this;
    }

    /**
     * @param string $inputUrl
     *
     * @return $this
     */
    public function setInputUrl($inputUrl)
    {
        $this->requestParameters['InputUrl'] = $inputUrl;
        $this->queryParameters['InputUrl'] = $inputUrl;

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
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->requestParameters['Interval'] = $interval;
        $this->queryParameters['Interval'] = $interval;

        return $this;
    }

    /**
     * @param string $ossRamRole
     *
     * @return $this
     */
    public function setOssRamRole($ossRamRole)
    {
        $this->requestParameters['OssRamRole'] = $ossRamRole;
        $this->queryParameters['OssRamRole'] = $ossRamRole;

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

    /**
     * @param string $ossUserId
     *
     * @return $this
     */
    public function setOssUserId($ossUserId)
    {
        $this->requestParameters['OssUserId'] = $ossUserId;
        $this->queryParameters['OssUserId'] = $ossUserId;

        return $this;
    }
}
