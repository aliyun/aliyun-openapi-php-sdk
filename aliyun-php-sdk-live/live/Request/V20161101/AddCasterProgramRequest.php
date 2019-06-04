<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddCasterProgram
 *
 * @method string getCasterId()
 * @method array getEpisodes()
 * @method string getOwnerId()
 */
class AddCasterProgramRequest extends \RpcAcsRequest
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
            'AddCasterProgram',
            'live'
        );
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
     * @param array $episode
     *
     * @return $this
     */
    public function setEpisodes(array $episode)
    {
        $this->requestParameters['Episodes'] = $episode;
        foreach ($episode as $depth1 => $depth1Value) {
            $this->queryParameters['Episode.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
            foreach ($depth1Value['ComponentId'] as $i => $iValue) {
                $this->queryParameters['Episode.' . ($depth1 + 1) . '.ComponentId.' . ($i + 1)] = $iValue;
            }
            $this->queryParameters['Episode.' . ($depth1 + 1) . '.SwitchType'] = $depth1Value['SwitchType'];
            $this->queryParameters['Episode.' . ($depth1 + 1) . '.EpisodeType'] = $depth1Value['EpisodeType'];
            $this->queryParameters['Episode.' . ($depth1 + 1) . '.EpisodeName'] = $depth1Value['EpisodeName'];
            $this->queryParameters['Episode.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
            $this->queryParameters['Episode.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
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
