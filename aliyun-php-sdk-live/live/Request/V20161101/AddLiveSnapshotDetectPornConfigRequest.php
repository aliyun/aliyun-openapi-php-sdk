<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddLiveSnapshotDetectPornConfig
 *
 * @method string getOssBucket()
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getOssEndpoint()
 * @method string getInterval()
 * @method string getOwnerId()
 * @method string getOssObject()
 * @method array getScenes()
 */
class AddLiveSnapshotDetectPornConfigRequest extends \RpcAcsRequest
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
            'AddLiveSnapshotDetectPornConfig',
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
     * @param string $ossObject
     *
     * @return $this
     */
    public function setOssObject($ossObject)
    {
        $this->requestParameters['OssObject'] = $ossObject;
        $this->queryParameters['OssObject'] = $ossObject;

        return $this;
    }

    /**
     * @param array $scene
     *
     * @return $this
     */
    public function setScenes(array $scene)
    {
        $this->requestParameters['Scenes'] = $scene;
        foreach ($scene as $i => $iValue) {
            $this->queryParameters['Scene.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
