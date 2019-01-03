<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of CopySystemImageAtTarget
 *
 * @method string getImageCenterResourceId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getToImageName()
 * @method string getOwnerAccount()
 * @method string getToImageDesc()
 * @method array getTags()
 * @method string getOwnerId()
 * @method string getToRegionNo()
 * @method string getResourceTransitInBase64()
 */
class CopySystemImageAtTargetRequest extends \RpcAcsRequest
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
            'CopySystemImageAtTarget',
            'ecs'
        );
    }

    /**
     * @param string $imageCenterResourceId
     *
     * @return $this
     */
    public function setImageCenterResourceId($imageCenterResourceId)
    {
        $this->requestParameters['ImageCenterResourceId'] = $imageCenterResourceId;
        $this->queryParameters['ImageCenterResourceId'] = $imageCenterResourceId;

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
     * @param string $toImageName
     *
     * @return $this
     */
    public function setToImageName($toImageName)
    {
        $this->requestParameters['ToImageName'] = $toImageName;
        $this->queryParameters['ToImageName'] = $toImageName;

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
     * @param string $toImageDesc
     *
     * @return $this
     */
    public function setToImageDesc($toImageDesc)
    {
        $this->requestParameters['ToImageDesc'] = $toImageDesc;
        $this->queryParameters['ToImageDesc'] = $toImageDesc;

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
     * @param string $toRegionNo
     *
     * @return $this
     */
    public function setToRegionNo($toRegionNo)
    {
        $this->requestParameters['ToRegionNo'] = $toRegionNo;
        $this->queryParameters['ToRegionNo'] = $toRegionNo;

        return $this;
    }

    /**
     * @param string $resourceTransitInBase64
     *
     * @return $this
     */
    public function setResourceTransitInBase64($resourceTransitInBase64)
    {
        $this->requestParameters['ResourceTransitInBase64'] = $resourceTransitInBase64;
        $this->queryParameters['ResourceTransitInBase64'] = $resourceTransitInBase64;

        return $this;
    }
}
