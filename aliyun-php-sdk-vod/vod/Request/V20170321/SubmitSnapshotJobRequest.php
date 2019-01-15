<?php

namespace vod\Request\V20170321;

/**
 * Request of SubmitSnapshotJob
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCount()
 * @method string getVideoId()
 * @method string getOwnerId()
 * @method string getSpecifiedOffsetTime()
 * @method string getWidth()
 * @method string getInterval()
 * @method string getSpriteSnapshotConfig()
 * @method string getSnapshotTemplateId()
 * @method string getHeight()
 */
class SubmitSnapshotJobRequest extends \RpcAcsRequest
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
            'SubmitSnapshotJob',
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
     * @param string $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->requestParameters['Count'] = $count;
        $this->queryParameters['Count'] = $count;

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
     * @param string $specifiedOffsetTime
     *
     * @return $this
     */
    public function setSpecifiedOffsetTime($specifiedOffsetTime)
    {
        $this->requestParameters['SpecifiedOffsetTime'] = $specifiedOffsetTime;
        $this->queryParameters['SpecifiedOffsetTime'] = $specifiedOffsetTime;

        return $this;
    }

    /**
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->requestParameters['Width'] = $width;
        $this->queryParameters['Width'] = $width;

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
     * @param string $spriteSnapshotConfig
     *
     * @return $this
     */
    public function setSpriteSnapshotConfig($spriteSnapshotConfig)
    {
        $this->requestParameters['SpriteSnapshotConfig'] = $spriteSnapshotConfig;
        $this->queryParameters['SpriteSnapshotConfig'] = $spriteSnapshotConfig;

        return $this;
    }

    /**
     * @param string $snapshotTemplateId
     *
     * @return $this
     */
    public function setSnapshotTemplateId($snapshotTemplateId)
    {
        $this->requestParameters['SnapshotTemplateId'] = $snapshotTemplateId;
        $this->queryParameters['SnapshotTemplateId'] = $snapshotTemplateId;

        return $this;
    }

    /**
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->requestParameters['Height'] = $height;
        $this->queryParameters['Height'] = $height;

        return $this;
    }
}
