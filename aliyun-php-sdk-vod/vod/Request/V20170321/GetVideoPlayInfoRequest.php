<?php

namespace vod\Request\V20170321;

/**
 * Request of GetVideoPlayInfo
 *
 * @method string getSignVersion()
 * @method string getResourceOwnerId()
 * @method string getClientVersion()
 * @method string getResourceOwnerAccount()
 * @method string getChannel()
 * @method string getPlaySign()
 * @method string getVideoId()
 * @method string getOwnerId()
 * @method string getClientTS()
 */
class GetVideoPlayInfoRequest extends \RpcAcsRequest
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
            'GetVideoPlayInfo',
            'vod'
        );
    }

    /**
     * @param string $signVersion
     *
     * @return $this
     */
    public function setSignVersion($signVersion)
    {
        $this->requestParameters['SignVersion'] = $signVersion;
        $this->queryParameters['SignVersion'] = $signVersion;

        return $this;
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
     * @param string $clientVersion
     *
     * @return $this
     */
    public function setClientVersion($clientVersion)
    {
        $this->requestParameters['ClientVersion'] = $clientVersion;
        $this->queryParameters['ClientVersion'] = $clientVersion;

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
     * @param string $playSign
     *
     * @return $this
     */
    public function setPlaySign($playSign)
    {
        $this->requestParameters['PlaySign'] = $playSign;
        $this->queryParameters['PlaySign'] = $playSign;

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
     * @param string $clientTS
     *
     * @return $this
     */
    public function setClientTS($clientTS)
    {
        $this->requestParameters['ClientTS'] = $clientTS;
        $this->queryParameters['ClientTS'] = $clientTS;

        return $this;
    }
}
