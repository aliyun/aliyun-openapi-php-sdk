<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetCasterConfig
 *
 * @method string getSideOutputUrl()
 * @method string getCasterId()
 * @method string getChannelEnable()
 * @method string getDomainName()
 * @method string getProgramEffect()
 * @method string getProgramName()
 * @method string getOwnerId()
 * @method string getRecordConfig()
 * @method string getUrgentMaterialId()
 * @method string getTranscodeConfig()
 * @method string getDelay()
 * @method string getCasterName()
 * @method string getCallbackUrl()
 */
class SetCasterConfigRequest extends \RpcAcsRequest
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
            'SetCasterConfig',
            'live'
        );
    }

    /**
     * @param string $sideOutputUrl
     *
     * @return $this
     */
    public function setSideOutputUrl($sideOutputUrl)
    {
        $this->requestParameters['SideOutputUrl'] = $sideOutputUrl;
        $this->queryParameters['SideOutputUrl'] = $sideOutputUrl;

        return $this;
    }

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function setCasterId($casterId)
    {
        $this->requestParameters['CasterId'] = $casterId;
        $this->queryParameters['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @param string $channelEnable
     *
     * @return $this
     */
    public function setChannelEnable($channelEnable)
    {
        $this->requestParameters['ChannelEnable'] = $channelEnable;
        $this->queryParameters['ChannelEnable'] = $channelEnable;

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
     * @param string $programEffect
     *
     * @return $this
     */
    public function setProgramEffect($programEffect)
    {
        $this->requestParameters['ProgramEffect'] = $programEffect;
        $this->queryParameters['ProgramEffect'] = $programEffect;

        return $this;
    }

    /**
     * @param string $programName
     *
     * @return $this
     */
    public function setProgramName($programName)
    {
        $this->requestParameters['ProgramName'] = $programName;
        $this->queryParameters['ProgramName'] = $programName;

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
     * @param string $recordConfig
     *
     * @return $this
     */
    public function setRecordConfig($recordConfig)
    {
        $this->requestParameters['RecordConfig'] = $recordConfig;
        $this->queryParameters['RecordConfig'] = $recordConfig;

        return $this;
    }

    /**
     * @param string $urgentMaterialId
     *
     * @return $this
     */
    public function setUrgentMaterialId($urgentMaterialId)
    {
        $this->requestParameters['UrgentMaterialId'] = $urgentMaterialId;
        $this->queryParameters['UrgentMaterialId'] = $urgentMaterialId;

        return $this;
    }

    /**
     * @param string $transcodeConfig
     *
     * @return $this
     */
    public function setTranscodeConfig($transcodeConfig)
    {
        $this->requestParameters['TranscodeConfig'] = $transcodeConfig;
        $this->queryParameters['TranscodeConfig'] = $transcodeConfig;

        return $this;
    }

    /**
     * @param string $delay
     *
     * @return $this
     */
    public function setDelay($delay)
    {
        $this->requestParameters['Delay'] = $delay;
        $this->queryParameters['Delay'] = $delay;

        return $this;
    }

    /**
     * @param string $casterName
     *
     * @return $this
     */
    public function setCasterName($casterName)
    {
        $this->requestParameters['CasterName'] = $casterName;
        $this->queryParameters['CasterName'] = $casterName;

        return $this;
    }

    /**
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->requestParameters['CallbackUrl'] = $callbackUrl;
        $this->queryParameters['CallbackUrl'] = $callbackUrl;

        return $this;
    }
}
