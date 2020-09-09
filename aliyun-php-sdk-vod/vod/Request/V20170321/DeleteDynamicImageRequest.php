<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteDynamicImage
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getVideoId()
 * @method string getOwnerId()
 * @method string getDynamicImageIds()
 */
class DeleteDynamicImageRequest extends \RpcAcsRequest
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
            'DeleteDynamicImage',
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
     * @param string $dynamicImageIds
     *
     * @return $this
     */
    public function setDynamicImageIds($dynamicImageIds)
    {
        $this->requestParameters['DynamicImageIds'] = $dynamicImageIds;
        $this->queryParameters['DynamicImageIds'] = $dynamicImageIds;

        return $this;
    }
}
