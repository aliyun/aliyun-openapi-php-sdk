<?php

namespace Mts\Request\V20140618;

/**
 * Request of SubmitMCJob
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getImages()
 * @method string getTexts()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getVideo()
 * @method string getOwnerId()
 * @method string getCensorConfig()
 * @method string getPipelineId()
 */
class SubmitMCJobRequest extends \RpcAcsRequest
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
            'SubmitMCJob',
            'mts'
        );
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

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
     * @param string $images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->requestParameters['Images'] = $images;
        $this->queryParameters['Images'] = $images;

        return $this;
    }

    /**
     * @param string $texts
     *
     * @return $this
     */
    public function setTexts($texts)
    {
        $this->requestParameters['Texts'] = $texts;
        $this->queryParameters['Texts'] = $texts;

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
     * @param string $censorConfig
     *
     * @return $this
     */
    public function setCensorConfig($censorConfig)
    {
        $this->requestParameters['CensorConfig'] = $censorConfig;
        $this->queryParameters['CensorConfig'] = $censorConfig;

        return $this;
    }

    /**
     * @param string $pipelineId
     *
     * @return $this
     */
    public function setPipelineId($pipelineId)
    {
        $this->requestParameters['PipelineId'] = $pipelineId;
        $this->queryParameters['PipelineId'] = $pipelineId;

        return $this;
    }
}
