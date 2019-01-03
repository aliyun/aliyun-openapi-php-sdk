<?php

namespace live\Request\V20161101;

/**
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
     * @param array $audioLayers
     *
     * @return $this
     */
    public function setAudioLayers(array $audioLayers)
    {
        $this->requestParameters['AudioLayers'] = $audioLayers;
        foreach ($audioLayers as $i => $iValue) {
            $this->queryParameters['AudioLayer.' . ($i + 1) . '.FixedDelayDuration'] = $audioLayers[$i]['FixedDelayDuration'];
            $this->queryParameters['AudioLayer.' . ($i + 1) . '.VolumeRate'] = $audioLayers[$i]['VolumeRate'];
            $this->queryParameters['AudioLayer.' . ($i + 1) . '.ValidChannel'] = $audioLayers[$i]['ValidChannel'];
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
     * @param array $mixLists
     *
     * @return $this
     */
    public function setMixLists(array $mixLists)
    {
        $this->requestParameters['MixLists'] = $mixLists;
        foreach ($mixLists as $i => $iValue) {
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
