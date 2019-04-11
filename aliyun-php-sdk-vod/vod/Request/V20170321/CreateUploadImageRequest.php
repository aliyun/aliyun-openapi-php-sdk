<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateUploadImage
 *
 * @method string getResourceOwnerId()
 * @method string getImageType()
 * @method string getResourceOwnerAccount()
 * @method string getImageExt()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getTags()
 * @method string getStorageLocation()
 * @method string getUserData()
 * @method string getOriginalFileName()
 * @method string getCateId()
 * @method string getAppId()
 */
class CreateUploadImageRequest extends \RpcAcsRequest
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
            'CreateUploadImage',
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
     * @param string $imageExt
     *
     * @return $this
     */
    public function setImageExt($imageExt)
    {
        $this->requestParameters['ImageExt'] = $imageExt;
        $this->queryParameters['ImageExt'] = $imageExt;

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
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->requestParameters['Tags'] = $tags;
        $this->queryParameters['Tags'] = $tags;

        return $this;
    }

    /**
     * @param string $storageLocation
     *
     * @return $this
     */
    public function setStorageLocation($storageLocation)
    {
        $this->requestParameters['StorageLocation'] = $storageLocation;
        $this->queryParameters['StorageLocation'] = $storageLocation;

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
     * @param string $originalFileName
     *
     * @return $this
     */
    public function setOriginalFileName($originalFileName)
    {
        $this->requestParameters['OriginalFileName'] = $originalFileName;
        $this->queryParameters['OriginalFileName'] = $originalFileName;

        return $this;
    }

    /**
     * @param string $cateId
     *
     * @return $this
     */
    public function setCateId($cateId)
    {
        $this->requestParameters['CateId'] = $cateId;
        $this->queryParameters['CateId'] = $cateId;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }
}
