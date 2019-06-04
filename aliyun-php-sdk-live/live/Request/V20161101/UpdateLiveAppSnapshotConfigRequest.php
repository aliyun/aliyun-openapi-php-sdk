<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateLiveAppSnapshotConfig
 *
 * @method string getTimeInterval()
 * @method string getOssBucket()
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getOssEndpoint()
 * @method string getSequenceOssObject()
 * @method string getOverwriteOssObject()
 * @method string getOwnerId()
 */
class UpdateLiveAppSnapshotConfigRequest extends \RpcAcsRequest
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
            'UpdateLiveAppSnapshotConfig',
            'live'
        );
    }

    /**
     * @param string $timeInterval
     *
     * @return $this
     */
    public function setTimeInterval($timeInterval)
    {
        $this->requestParameters['TimeInterval'] = $timeInterval;
        $this->queryParameters['TimeInterval'] = $timeInterval;

        return $this;
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
     * @param string $sequenceOssObject
     *
     * @return $this
     */
    public function setSequenceOssObject($sequenceOssObject)
    {
        $this->requestParameters['SequenceOssObject'] = $sequenceOssObject;
        $this->queryParameters['SequenceOssObject'] = $sequenceOssObject;

        return $this;
    }

    /**
     * @param string $overwriteOssObject
     *
     * @return $this
     */
    public function setOverwriteOssObject($overwriteOssObject)
    {
        $this->requestParameters['OverwriteOssObject'] = $overwriteOssObject;
        $this->queryParameters['OverwriteOssObject'] = $overwriteOssObject;

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
}
