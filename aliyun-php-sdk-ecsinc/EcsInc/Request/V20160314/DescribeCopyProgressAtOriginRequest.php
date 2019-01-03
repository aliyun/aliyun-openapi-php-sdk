<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of DescribeCopyProgressAtOrigin
 *
 * @method string getTag4Value()
 * @method string getResourceId()
 * @method string getResourceOwnerId()
 * @method string getTag2Key()
 * @method string getTag5Key()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getFromRegionNo()
 * @method string getTag3Key()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getTag5Value()
 * @method string getTag1Key()
 * @method string getTag1Value()
 * @method string getTag2Value()
 * @method string getTag4Key()
 * @method string getTag3Value()
 */
class DescribeCopyProgressAtOriginRequest extends \RpcAcsRequest
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
            'DescribeCopyProgressAtOrigin',
            'ecs'
        );
    }

    /**
     * @param string $tag4Value
     *
     * @return $this
     */
    public function setTag4Value($tag4Value)
    {
        $this->requestParameters['Tag4Value'] = $tag4Value;
        $this->queryParameters['Tag.4.Value'] = $tag4Value;

        return $this;
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->requestParameters['ResourceId'] = $resourceId;
        $this->queryParameters['ResourceId'] = $resourceId;

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
     * @param string $tag2Key
     *
     * @return $this
     */
    public function setTag2Key($tag2Key)
    {
        $this->requestParameters['Tag2Key'] = $tag2Key;
        $this->queryParameters['Tag.2.Key'] = $tag2Key;

        return $this;
    }

    /**
     * @param string $tag5Key
     *
     * @return $this
     */
    public function setTag5Key($tag5Key)
    {
        $this->requestParameters['Tag5Key'] = $tag5Key;
        $this->queryParameters['Tag.5.Key'] = $tag5Key;

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
     * @param string $tag3Key
     *
     * @return $this
     */
    public function setTag3Key($tag3Key)
    {
        $this->requestParameters['Tag3Key'] = $tag3Key;
        $this->queryParameters['Tag.3.Key'] = $tag3Key;

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $tag5Value
     *
     * @return $this
     */
    public function setTag5Value($tag5Value)
    {
        $this->requestParameters['Tag5Value'] = $tag5Value;
        $this->queryParameters['Tag.5.Value'] = $tag5Value;

        return $this;
    }

    /**
     * @param string $tag1Key
     *
     * @return $this
     */
    public function setTag1Key($tag1Key)
    {
        $this->requestParameters['Tag1Key'] = $tag1Key;
        $this->queryParameters['Tag.1.Key'] = $tag1Key;

        return $this;
    }

    /**
     * @param string $tag1Value
     *
     * @return $this
     */
    public function setTag1Value($tag1Value)
    {
        $this->requestParameters['Tag1Value'] = $tag1Value;
        $this->queryParameters['Tag.1.Value'] = $tag1Value;

        return $this;
    }

    /**
     * @param string $tag2Value
     *
     * @return $this
     */
    public function setTag2Value($tag2Value)
    {
        $this->requestParameters['Tag2Value'] = $tag2Value;
        $this->queryParameters['Tag.2.Value'] = $tag2Value;

        return $this;
    }

    /**
     * @param string $tag4Key
     *
     * @return $this
     */
    public function setTag4Key($tag4Key)
    {
        $this->requestParameters['Tag4Key'] = $tag4Key;
        $this->queryParameters['Tag.4.Key'] = $tag4Key;

        return $this;
    }

    /**
     * @param string $tag3Value
     *
     * @return $this
     */
    public function setTag3Value($tag3Value)
    {
        $this->requestParameters['Tag3Value'] = $tag3Value;
        $this->queryParameters['Tag.3.Value'] = $tag3Value;

        return $this;
    }
}
