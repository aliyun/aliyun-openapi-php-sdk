<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateCasterSceneAudio
 *
 * @method array getAudioLayers()
 * @method string getCasterId()
 * @method string getSceneId()
 * @method array getMixLists()
 * @method string getOwnerId()
 * @method string getFollowEnable()
 */
class UpdateCasterSceneAudioRequest extends \RpcAcsRequest
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
            'UpdateCasterSceneAudio',
            'live'
        );
    }

    /**
     * @param array $audioLayer
     *
     * @return $this
     */
    public function setAudioLayers(array $audioLayer)
    {
        $this->requestParameters['AudioLayers'] = $audioLayer;
        foreach ($audioLayer as $depth1 => $depth1Value) {
            $this->queryParameters['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
            $this->queryParameters['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
            $this->queryParameters['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
        }

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
     * @param string $sceneId
     *
     * @return $this
     */
    public function setSceneId($sceneId)
    {
        $this->requestParameters['SceneId'] = $sceneId;
        $this->queryParameters['SceneId'] = $sceneId;

        return $this;
    }

    /**
     * @param array $mixList
     *
     * @return $this
     */
    public function setMixLists(array $mixList)
    {
        $this->requestParameters['MixLists'] = $mixList;
        foreach ($mixList as $i => $iValue) {
            $this->queryParameters['MixList.' . ($i + 1)] = $iValue;
        }

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
     * @param string $followEnable
     *
     * @return $this
     */
    public function setFollowEnable($followEnable)
    {
        $this->requestParameters['FollowEnable'] = $followEnable;
        $this->queryParameters['FollowEnable'] = $followEnable;

        return $this;
    }
}
