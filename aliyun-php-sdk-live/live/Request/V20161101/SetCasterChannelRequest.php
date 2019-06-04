<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetCasterChannel
 *
 * @method string getResourceId()
 * @method string getPlayStatus()
 * @method string getCasterId()
 * @method string getOwnerId()
 * @method string getSeekOffset()
 * @method string getChannelId()
 */
class SetCasterChannelRequest extends \RpcAcsRequest
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
            'SetCasterChannel',
            'live'
        );
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->requestParameters['ResourceId'] = $resourceId;
        $this->queryParameters['ResourceId'] = $resourceId;

        return $this;
    }

    /**
     * @param string $playStatus
     *
     * @return $this
     */
    public function setPlayStatus($playStatus)
    {
        $this->requestParameters['PlayStatus'] = $playStatus;
        $this->queryParameters['PlayStatus'] = $playStatus;

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
     * @param string $seekOffset
     *
     * @return $this
     */
    public function setSeekOffset($seekOffset)
    {
        $this->requestParameters['SeekOffset'] = $seekOffset;
        $this->queryParameters['SeekOffset'] = $seekOffset;

        return $this;
    }

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        $this->requestParameters['ChannelId'] = $channelId;
        $this->queryParameters['ChannelId'] = $channelId;

        return $this;
    }
}
