<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteImage
 *
 * @method string getResourceOwnerId()
 * @method string getImageType()
 * @method string getResourceOwnerAccount()
 * @method string getImageURLs()
 * @method string getVideoId()
 * @method string getOwnerId()
 * @method string getDeleteImageType()
 * @method string getImageIds()
 */
class DeleteImageRequest extends \RpcAcsRequest
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
            'DeleteImage',
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
     * @param string $imageType
     *
     * @return $this
     */
    public function setImageType($imageType)
    {
        $this->requestParameters['ImageType'] = $imageType;
        $this->queryParameters['ImageType'] = $imageType;

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
     * @param string $imageURLs
     *
     * @return $this
     */
    public function setImageURLs($imageURLs)
    {
        $this->requestParameters['ImageURLs'] = $imageURLs;
        $this->queryParameters['ImageURLs'] = $imageURLs;

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
     * @param string $deleteImageType
     *
     * @return $this
     */
    public function setDeleteImageType($deleteImageType)
    {
        $this->requestParameters['DeleteImageType'] = $deleteImageType;
        $this->queryParameters['DeleteImageType'] = $deleteImageType;

        return $this;
    }

    /**
     * @param string $imageIds
     *
     * @return $this
     */
    public function setImageIds($imageIds)
    {
        $this->requestParameters['ImageIds'] = $imageIds;
        $this->queryParameters['ImageIds'] = $imageIds;

        return $this;
    }
}
