<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetPlayInfo
 *
 * @method string getResourceOwnerId()
 * @method string getStreamType()
 * @method string getFormats()
 * @method string getResourceOwnerAccount()
 * @method string getChannel()
 * @method string getVideoId()
 * @method string getPlayerVersion()
 * @method string getOwnerId()
 * @method string getResultType()
 * @method string getRand()
 * @method string getReAuthInfo()
 * @method string getPlayConfig()
 * @method string getOutputType()
 * @method string getDefinition()
 * @method string getAuthTimeout()
 * @method string getAuthInfo()
 */
class GetPlayInfoRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'GetPlayInfo',
            'vod'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $streamType
     *
     * @return $this
     */
    public function setStreamType($streamType)
    {
        $this->requestParameters['StreamType'] = $streamType;
        $this->queryParameters['StreamType'] = $streamType;

        return $this;
    }

    /**
     * @param string $formats
     *
     * @return $this
     */
    public function setFormats($formats)
    {
        $this->requestParameters['Formats'] = $formats;
        $this->queryParameters['Formats'] = $formats;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->requestParameters['Channel'] = $channel;
        $this->queryParameters['Channel'] = $channel;

        return $this;
    }

    /**
     * @param string $videoId
     *
     * @return $this
     */
    public function setVideoId($videoId)
    {
        $this->requestParameters['VideoId'] = $videoId;
        $this->queryParameters['VideoId'] = $videoId;

        return $this;
    }

    /**
     * @param string $playerVersion
     *
     * @return $this
     */
    public function setPlayerVersion($playerVersion)
    {
        $this->requestParameters['PlayerVersion'] = $playerVersion;
        $this->queryParameters['PlayerVersion'] = $playerVersion;

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
     * @param string $resultType
     *
     * @return $this
     */
    public function setResultType($resultType)
    {
        $this->requestParameters['ResultType'] = $resultType;
        $this->queryParameters['ResultType'] = $resultType;

        return $this;
    }

    /**
     * @param string $rand
     *
     * @return $this
     */
    public function setRand($rand)
    {
        $this->requestParameters['Rand'] = $rand;
        $this->queryParameters['Rand'] = $rand;

        return $this;
    }

    /**
     * @param string $reAuthInfo
     *
     * @return $this
     */
    public function setReAuthInfo($reAuthInfo)
    {
        $this->requestParameters['ReAuthInfo'] = $reAuthInfo;
        $this->queryParameters['ReAuthInfo'] = $reAuthInfo;

        return $this;
    }

    /**
     * @param string $playConfig
     *
     * @return $this
     */
    public function setPlayConfig($playConfig)
    {
        $this->requestParameters['PlayConfig'] = $playConfig;
        $this->queryParameters['PlayConfig'] = $playConfig;

        return $this;
    }

    /**
     * @param string $outputType
     *
     * @return $this
     */
    public function setOutputType($outputType)
    {
        $this->requestParameters['OutputType'] = $outputType;
        $this->queryParameters['OutputType'] = $outputType;

        return $this;
    }

    /**
     * @param string $definition
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->requestParameters['Definition'] = $definition;
        $this->queryParameters['Definition'] = $definition;

        return $this;
    }

    /**
     * @param string $authTimeout
     *
     * @return $this
     */
    public function setAuthTimeout($authTimeout)
    {
        $this->requestParameters['AuthTimeout'] = $authTimeout;
        $this->queryParameters['AuthTimeout'] = $authTimeout;

        return $this;
    }

    /**
     * @param string $authInfo
     *
     * @return $this
     */
    public function setAuthInfo($authInfo)
    {
        $this->requestParameters['AuthInfo'] = $authInfo;
        $this->queryParameters['AuthInfo'] = $authInfo;

        return $this;
    }
}
