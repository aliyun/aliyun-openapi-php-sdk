<?php

namespace live\Request\V20161101;

/**
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
     * @param array $episodes
     *
     * @return $this
     */
    public function setEpisodes(array $episodes)
    {
        $this->requestParameters['Episodes'] = $episodes;
        foreach ($episodes as $i => $iValue) {
            $this->queryParameters['Episode.' . ($i + 1) . '.ResourceId'] = $episodes[$i]['ResourceId'];
            foreach ($episodes[$i]['ComponentIds'] as $j => $jValue) {
                $this->queryParameters['Episode.' . ($i + 1) . '.ComponentId.' . ($j + 1)] = $jValue;
            }
            $this->queryParameters['Episode.' . ($i + 1) . '.SwitchType'] = $episodes[$i]['SwitchType'];
            $this->queryParameters['Episode.' . ($i + 1) . '.EpisodeType'] = $episodes[$i]['EpisodeType'];
            $this->queryParameters['Episode.' . ($i + 1) . '.EpisodeName'] = $episodes[$i]['EpisodeName'];
            $this->queryParameters['Episode.' . ($i + 1) . '.EndTime'] = $episodes[$i]['EndTime'];
            $this->queryParameters['Episode.' . ($i + 1) . '.StartTime'] = $episodes[$i]['StartTime'];
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
