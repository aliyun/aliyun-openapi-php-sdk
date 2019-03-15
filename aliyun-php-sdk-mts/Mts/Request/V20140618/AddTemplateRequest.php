<?php

namespace Mts\Request\V20140618;

/**
 * Request of AddTemplate
 *
 * @method string getContainer()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getName()
 * @method string getTransConfig()
 * @method string getMuxConfig()
 * @method string getVideo()
 * @method string getAudio()
 * @method string getOwnerId()
 */
class AddTemplateRequest extends \RpcAcsRequest
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
            'AddTemplate',
            'mts'
        );
    }

    /**
     * @param string $container
     *
     * @return $this
     */
    public function setContainer($container)
    {
        $this->requestParameters['Container'] = $container;
        $this->queryParameters['Container'] = $container;

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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $transConfig
     *
     * @return $this
     */
    public function setTransConfig($transConfig)
    {
        $this->requestParameters['TransConfig'] = $transConfig;
        $this->queryParameters['TransConfig'] = $transConfig;

        return $this;
    }

    /**
     * @param string $muxConfig
     *
     * @return $this
     */
    public function setMuxConfig($muxConfig)
    {
        $this->requestParameters['MuxConfig'] = $muxConfig;
        $this->queryParameters['MuxConfig'] = $muxConfig;

        return $this;
    }

    /**
     * @param string $video
     *
     * @return $this
     */
    public function setVideo($video)
    {
        $this->requestParameters['Video'] = $video;
        $this->queryParameters['Video'] = $video;

        return $this;
    }

    /**
     * @param string $audio
     *
     * @return $this
     */
    public function setAudio($audio)
    {
        $this->requestParameters['Audio'] = $audio;
        $this->queryParameters['Audio'] = $audio;

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
