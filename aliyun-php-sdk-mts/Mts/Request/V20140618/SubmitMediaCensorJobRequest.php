<?php

namespace Mts\Request\V20140618;

/**
 * Request of SubmitMediaCensorJob
 *
 * @method string getResourceOwnerId()
 * @method string getCoverImages()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getPipelineId()
 * @method string getVideoCensorConfig()
 * @method string getInput()
 * @method string getUserData()
 * @method string getBarrages()
 */
class SubmitMediaCensorJobRequest extends \RpcAcsRequest
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
            'SubmitMediaCensorJob',
            'mts'
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
     * @param string $coverImages
     *
     * @return $this
     */
    public function setCoverImages($coverImages)
    {
        $this->requestParameters['CoverImages'] = $coverImages;
        $this->queryParameters['CoverImages'] = $coverImages;

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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

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
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->requestParameters['Title'] = $title;
        $this->queryParameters['Title'] = $title;

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

    /**
     * @param string $videoCensorConfig
     *
     * @return $this
     */
    public function setVideoCensorConfig($videoCensorConfig)
    {
        $this->requestParameters['VideoCensorConfig'] = $videoCensorConfig;
        $this->queryParameters['VideoCensorConfig'] = $videoCensorConfig;

        return $this;
    }

    /**
     * @param string $input
     *
     * @return $this
     */
    public function setInput($input)
    {
        $this->requestParameters['Input'] = $input;
        $this->queryParameters['Input'] = $input;

        return $this;
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
     * @param string $barrages
     *
     * @return $this
     */
    public function setBarrages($barrages)
    {
        $this->requestParameters['Barrages'] = $barrages;
        $this->queryParameters['Barrages'] = $barrages;

        return $this;
    }
}
