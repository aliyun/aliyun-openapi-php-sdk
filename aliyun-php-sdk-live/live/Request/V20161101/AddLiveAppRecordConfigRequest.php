<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddLiveAppRecordConfig
 *
 * @method string getOssBucket()
 * @method string getAppName()
 * @method string getSecurityToken()
 * @method array getRecordFormats()
 * @method string getDomainName()
 * @method string getOssEndpoint()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getOnDemand()
 * @method string getStreamName()
 */
class AddLiveAppRecordConfigRequest extends \RpcAcsRequest
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
            'AddLiveAppRecordConfig',
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
     * @param array $recordFormat
     *
     * @return $this
     */
    public function setRecordFormats(array $recordFormat)
    {
        $this->requestParameters['RecordFormats'] = $recordFormat;
        foreach ($recordFormat as $depth1 => $depth1Value) {
            $this->queryParameters['RecordFormat.' . ($depth1 + 1) . '.SliceOssObjectPrefix'] = $depth1Value['SliceOssObjectPrefix'];
            $this->queryParameters['RecordFormat.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
            $this->queryParameters['RecordFormat.' . ($depth1 + 1) . '.OssObjectPrefix'] = $depth1Value['OssObjectPrefix'];
            $this->queryParameters['RecordFormat.' . ($depth1 + 1) . '.CycleDuration'] = $depth1Value['CycleDuration'];
        }

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
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

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
     * @param string $onDemand
     *
     * @return $this
     */
    public function setOnDemand($onDemand)
    {
        $this->requestParameters['OnDemand'] = $onDemand;
        $this->queryParameters['OnDemand'] = $onDemand;

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
