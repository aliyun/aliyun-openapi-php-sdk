<?php

namespace vod\Request\V20170321;

/**
 * Request of GetVideoPlayAuth
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getReAuthInfo()
 * @method string getPlayConfig()
 * @method string getAuthInfoTimeout()
 * @method string getVideoId()
 * @method string getOwnerId()
 */
class GetVideoPlayAuthRequest extends \RpcAcsRequest
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
            'GetVideoPlayAuth',
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
     * @param string $reAuthInfo
     *
     * @return $this
     */
    public function setReAuthInfo($reAuthInfo)
    {
        $this->requestParameters['ReAuthInfo'] = $reAuthInfo;
        $this->queryParameters['ReAuthInfo'] = $reAuthInfo;

        return $this;
    }

    /**
     * @param string $playConfig
     *
     * @return $this
     */
    public function setPlayConfig($playConfig)
    {
        $this->requestParameters['PlayConfig'] = $playConfig;
        $this->queryParameters['PlayConfig'] = $playConfig;

        return $this;
    }

    /**
     * @param string $authInfoTimeout
     *
     * @return $this
     */
    public function setAuthInfoTimeout($authInfoTimeout)
    {
        $this->requestParameters['AuthInfoTimeout'] = $authInfoTimeout;
        $this->queryParameters['AuthInfoTimeout'] = $authInfoTimeout;

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
}
