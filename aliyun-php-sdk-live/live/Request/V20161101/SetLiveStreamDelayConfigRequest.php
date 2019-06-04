<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetLiveStreamDelayConfig
 *
 * @method string getFlvLevel()
 * @method string getHlsLevel()
 * @method string getRtmpDelay()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getFlvDelay()
 * @method string getRtmpLevel()
 * @method string getHlsDelay()
 */
class SetLiveStreamDelayConfigRequest extends \RpcAcsRequest
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
            'SetLiveStreamDelayConfig',
            'live'
        );
    }

    /**
     * @param string $flvLevel
     *
     * @return $this
     */
    public function setFlvLevel($flvLevel)
    {
        $this->requestParameters['FlvLevel'] = $flvLevel;
        $this->queryParameters['FlvLevel'] = $flvLevel;

        return $this;
    }

    /**
     * @param string $hlsLevel
     *
     * @return $this
     */
    public function setHlsLevel($hlsLevel)
    {
        $this->requestParameters['HlsLevel'] = $hlsLevel;
        $this->queryParameters['HlsLevel'] = $hlsLevel;

        return $this;
    }

    /**
     * @param string $rtmpDelay
     *
     * @return $this
     */
    public function setRtmpDelay($rtmpDelay)
    {
        $this->requestParameters['RtmpDelay'] = $rtmpDelay;
        $this->queryParameters['RtmpDelay'] = $rtmpDelay;

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
     * @param string $flvDelay
     *
     * @return $this
     */
    public function setFlvDelay($flvDelay)
    {
        $this->requestParameters['FlvDelay'] = $flvDelay;
        $this->queryParameters['FlvDelay'] = $flvDelay;

        return $this;
    }

    /**
     * @param string $rtmpLevel
     *
     * @return $this
     */
    public function setRtmpLevel($rtmpLevel)
    {
        $this->requestParameters['RtmpLevel'] = $rtmpLevel;
        $this->queryParameters['RtmpLevel'] = $rtmpLevel;

        return $this;
    }

    /**
     * @param string $hlsDelay
     *
     * @return $this
     */
    public function setHlsDelay($hlsDelay)
    {
        $this->requestParameters['HlsDelay'] = $hlsDelay;
        $this->queryParameters['HlsDelay'] = $hlsDelay;

        return $this;
    }
}
