<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of UploadSystemImageAtOrigin
 *
 * @method string getMetaData()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOsTypeId()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getFromRegionNo()
 * @method string getOwnerId()
 * @method string getImageName()
 * @method string getImageUrl()
 * @method array getTags()
 * @method string getMD5()
 */
class UploadSystemImageAtOriginRequest extends \RpcAcsRequest
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
            'EcsInc',
            '2016-03-14',
            'UploadSystemImageAtOrigin',
            'ecs'
        );
    }

    /**
     * @param string $metaData
     *
     * @return $this
     */
    public function setMetaData($metaData)
    {
        $this->requestParameters['MetaData'] = $metaData;
        $this->queryParameters['MetaData'] = $metaData;

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
     * @param string $osTypeId
     *
     * @return $this
     */
    public function setOsTypeId($osTypeId)
    {
        $this->requestParameters['OsTypeId'] = $osTypeId;
        $this->queryParameters['OsTypeId'] = $osTypeId;

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
     * @param string $fromRegionNo
     *
     * @return $this
     */
    public function setFromRegionNo($fromRegionNo)
    {
        $this->requestParameters['FromRegionNo'] = $fromRegionNo;
        $this->queryParameters['FromRegionNo'] = $fromRegionNo;

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
     * @param string $imageName
     *
     * @return $this
     */
    public function setImageName($imageName)
    {
        $this->requestParameters['ImageName'] = $imageName;
        $this->queryParameters['ImageName'] = $imageName;

        return $this;
    }

    /**
     * @param string $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->requestParameters['ImageUrl'] = $imageUrl;
        $this->queryParameters['ImageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->requestParameters['Tags'] = $tags;
        foreach ($tags as $i => $iValue) {
            $this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $tags[$i]['Value'];
            $this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $tags[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param string $mD5
     *
     * @return $this
     */
    public function setMD5($mD5)
    {
        $this->requestParameters['MD5'] = $mD5;
        $this->queryParameters['MD5'] = $mD5;

        return $this;
    }
}
