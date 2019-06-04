<?php

namespace live\Request\V20161101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteCasterEpisode
 *
 * @method string getCasterId()
 * @method string getOwnerId()
 * @method string getEpisodeId()
 */
class DeleteCasterEpisodeRequest extends \RpcAcsRequest
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
            'DeleteCasterEpisode',
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
     * @param string $episodeId
     *
     * @return $this
     */
    public function setEpisodeId($episodeId)
    {
        $this->requestParameters['EpisodeId'] = $episodeId;
        $this->queryParameters['EpisodeId'] = $episodeId;

        return $this;
    }
}
