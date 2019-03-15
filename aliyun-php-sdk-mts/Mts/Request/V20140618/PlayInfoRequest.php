<?php

namespace Mts\Request\V20140618;

/**
 * Request of PlayInfo
 *
 * @method string getPlayDomain()
 * @method string getResourceOwnerId()
 * @method string getFormats()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getHlsUriToken()
 * @method string getTerminal()
 * @method string getOwnerId()
 * @method string getMediaId()
 * @method string getRand()
 * @method string getAuthTimeout()
 * @method string getAuthInfo()
 */
class PlayInfoRequest extends \RpcAcsRequest
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
            'Mts',
            '2014-06-18',
            'PlayInfo',
            'mts'
        );
    }

    /**
     * @param string $playDomain
     *
     * @return $this
     */
    public function setPlayDomain($playDomain)
    {
        $this->requestParameters['PlayDomain'] = $playDomain;
        $this->queryParameters['PlayDomain'] = $playDomain;

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
     * @param string $formats
     *
     * @return $this
     */
    public function setFormats($formats)
    {
        $this->requestParameters['Formats'] = $formats;
        $this->queryParameters['Formats'] = $formats;

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
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $hlsUriToken
     *
     * @return $this
     */
    public function setHlsUriToken($hlsUriToken)
    {
        $this->requestParameters['HlsUriToken'] = $hlsUriToken;
        $this->queryParameters['HlsUriToken'] = $hlsUriToken;

        return $this;
    }

    /**
     * @param string $terminal
     *
     * @return $this
     */
    public function setTerminal($terminal)
    {
        $this->requestParameters['Terminal'] = $terminal;
        $this->queryParameters['Terminal'] = $terminal;

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
     * @param string $mediaId
     *
     * @return $this
     */
    public function setMediaId($mediaId)
    {
        $this->requestParameters['MediaId'] = $mediaId;
        $this->queryParameters['MediaId'] = $mediaId;

        return $this;
    }

    /**
     * @param string $rand
     *
     * @return $this
     */
    public function setRand($rand)
    {
        $this->requestParameters['Rand'] = $rand;
        $this->queryParameters['Rand'] = $rand;

        return $this;
    }

    /**
     * @param string $authTimeout
     *
     * @return $this
     */
    public function setAuthTimeout($authTimeout)
    {
        $this->requestParameters['AuthTimeout'] = $authTimeout;
        $this->queryParameters['AuthTimeout'] = $authTimeout;

        return $this;
    }

    /**
     * @param string $authInfo
     *
     * @return $this
     */
    public function setAuthInfo($authInfo)
    {
        $this->requestParameters['AuthInfo'] = $authInfo;
        $this->queryParameters['AuthInfo'] = $authInfo;

        return $this;
    }
}
