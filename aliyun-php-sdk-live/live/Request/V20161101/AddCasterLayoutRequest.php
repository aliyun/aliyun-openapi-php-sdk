<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
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
     * @param array $blendList
     *
     * @return $this
     */
    public function setBlendLists(array $blendList)
    {
        $this->requestParameters['BlendLists'] = $blendList;
        foreach ($blendList as $i => $iValue) {
            $this->queryParameters['BlendList.' . ($i + 1)] = $iValue;
        }

        return $this;
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
     * @param array $videoLayer
     *
     * @return $this
     */
    public function setVideoLayers(array $videoLayer)
    {
        $this->requestParameters['VideoLayers'] = $videoLayer;
        foreach ($videoLayer as $depth1 => $depth1Value) {
            $this->queryParameters['VideoLayer.' . ($depth1 + 1) . '.FillMode'] = $depth1Value['FillMode'];
            $this->queryParameters['VideoLayer.' . ($depth1 + 1) . '.WidthNormalized'] = $depth1Value['WidthNormalized'];
            $this->queryParameters['VideoLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
            $this->queryParameters['VideoLayer.' . ($depth1 + 1) . '.PositionRefer'] = $depth1Value['PositionRefer'];
            foreach ($depth1Value['PositionNormalized'] as $i => $iValue) {
                $this->queryParameters['VideoLayer.' . ($depth1 + 1) . '.PositionNormalized.' . ($i + 1)] = $iValue;
            }
            $this->queryParameters['VideoLayer.' . ($depth1 + 1) . '.HeightNormalized'] = $depth1Value['HeightNormalized'];
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
}
