<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ProduceEditingProjectVideo
 *
 * @method string getResourceOwnerId()
 * @method string getMediaMetadata()
 * @method string getResourceOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getCoverURL()
 * @method string getUserData()
 * @method string getTimeline()
 * @method string getProduceConfig()
 * @method string getProjectId()
 */
class ProduceEditingProjectVideoRequest extends \RpcAcsRequest
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
            'ProduceEditingProjectVideo',
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
     * @param string $mediaMetadata
     *
     * @return $this
     */
    public function setMediaMetadata($mediaMetadata)
    {
        $this->requestParameters['MediaMetadata'] = $mediaMetadata;
        $this->queryParameters['MediaMetadata'] = $mediaMetadata;

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
     * @param string $coverURL
     *
     * @return $this
     */
    public function setCoverURL($coverURL)
    {
        $this->requestParameters['CoverURL'] = $coverURL;
        $this->queryParameters['CoverURL'] = $coverURL;

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
     * @param string $timeline
     *
     * @return $this
     */
    public function setTimeline($timeline)
    {
        $this->requestParameters['Timeline'] = $timeline;
        $this->queryParameters['Timeline'] = $timeline;

        return $this;
    }

    /**
     * @param string $produceConfig
     *
     * @return $this
     */
    public function setProduceConfig($produceConfig)
    {
        $this->requestParameters['ProduceConfig'] = $produceConfig;
        $this->queryParameters['ProduceConfig'] = $produceConfig;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }
}
