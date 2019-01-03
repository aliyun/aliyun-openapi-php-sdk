<?php

namespace live\Request\V20161101;

/**
 * Request of AddCasterLayout
 *
 * @method array getBlendLists()
 * @method array getAudioLayers()
 * @method array getVideoLayers()
 * @method string getCasterId()
 * @method array getMixLists()
 * @method string getOwnerId()
 */
class AddCasterLayoutRequest extends \RpcAcsRequest
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
            'AddCasterLayout',
            'live'
        );
    }

    /**
     * @param array $blendLists
     *
     * @return $this
     */
    public function setBlendLists(array $blendLists)
    {
        $this->requestParameters['BlendLists'] = $blendLists;
        foreach ($blendLists as $i => $iValue) {
            $this->queryParameters['BlendList.' . ($i + 1)] = $iValue;
        }

        return $this;
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
     * @param array $videoLayers
     *
     * @return $this
     */
    public function setVideoLayers(array $videoLayers)
    {
        $this->requestParameters['VideoLayers'] = $videoLayers;
        foreach ($videoLayers as $i => $iValue) {
            $this->queryParameters['VideoLayer.' . ($i + 1) . '.FillMode'] = $videoLayers[$i]['FillMode'];
            $this->queryParameters['VideoLayer.' . ($i + 1) . '.WidthNormalized'] = $videoLayers[$i]['WidthNormalized'];
            $this->queryParameters['VideoLayer.' . ($i + 1) . '.FixedDelayDuration'] = $videoLayers[$i]['FixedDelayDuration'];
            $this->queryParameters['VideoLayer.' . ($i + 1) . '.PositionRefer'] = $videoLayers[$i]['PositionRefer'];
            foreach ($videoLayers[$i]['PositionNormalizeds'] as $j => $jValue) {
                $this->queryParameters['VideoLayer.' . ($i + 1) . '.PositionNormalized.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['VideoLayer.' . ($i + 1) . '.HeightNormalized'] = $videoLayers[$i]['HeightNormalized'];
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
}
