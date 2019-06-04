<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddLiveRecordVodConfig
 *
 * @method string getAppName()
 * @method string getAutoCompose()
 * @method string getDomainName()
 * @method string getCycleDuration()
 * @method string getOwnerId()
 * @method string getComposeVodTranscodeGroupId()
 * @method string getStreamName()
 * @method string getVodTranscodeGroupId()
 */
class AddLiveRecordVodConfigRequest extends \RpcAcsRequest
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
            'AddLiveRecordVodConfig',
            'live'
        );
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
     * @param string $autoCompose
     *
     * @return $this
     */
    public function setAutoCompose($autoCompose)
    {
        $this->requestParameters['AutoCompose'] = $autoCompose;
        $this->queryParameters['AutoCompose'] = $autoCompose;

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
     * @param string $cycleDuration
     *
     * @return $this
     */
    public function setCycleDuration($cycleDuration)
    {
        $this->requestParameters['CycleDuration'] = $cycleDuration;
        $this->queryParameters['CycleDuration'] = $cycleDuration;

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
     * @param string $composeVodTranscodeGroupId
     *
     * @return $this
     */
    public function setComposeVodTranscodeGroupId($composeVodTranscodeGroupId)
    {
        $this->requestParameters['ComposeVodTranscodeGroupId'] = $composeVodTranscodeGroupId;
        $this->queryParameters['ComposeVodTranscodeGroupId'] = $composeVodTranscodeGroupId;

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
     * @param string $vodTranscodeGroupId
     *
     * @return $this
     */
    public function setVodTranscodeGroupId($vodTranscodeGroupId)
    {
        $this->requestParameters['VodTranscodeGroupId'] = $vodTranscodeGroupId;
        $this->queryParameters['VodTranscodeGroupId'] = $vodTranscodeGroupId;

        return $this;
    }
}
