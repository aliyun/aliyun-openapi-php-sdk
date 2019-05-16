<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetUploadDetails
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getResourceRealOwnerId()
 * @method string getMediaIds()
 * @method string getOwnerId()
 * @method string getMediaType()
 */
class GetUploadDetailsRequest extends \RpcAcsRequest
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
            'GetUploadDetails',
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
     * @param string $resourceRealOwnerId
     *
     * @return $this
     */
    public function setResourceRealOwnerId($resourceRealOwnerId)
    {
        $this->requestParameters['ResourceRealOwnerId'] = $resourceRealOwnerId;
        $this->queryParameters['ResourceRealOwnerId'] = $resourceRealOwnerId;

        return $this;
    }

    /**
     * @param string $mediaIds
     *
     * @return $this
     */
    public function setMediaIds($mediaIds)
    {
        $this->requestParameters['MediaIds'] = $mediaIds;
        $this->queryParameters['MediaIds'] = $mediaIds;

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
     * @param string $mediaType
     *
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        $this->requestParameters['MediaType'] = $mediaType;
        $this->queryParameters['MediaType'] = $mediaType;

        return $this;
    }
}
