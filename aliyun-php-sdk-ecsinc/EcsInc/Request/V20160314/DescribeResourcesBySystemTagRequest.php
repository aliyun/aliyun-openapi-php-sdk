<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of DescribeResourcesBySystemTag
 *
 * @method string getResourceOwnerId()
 * @method string getOwnerBid()
 * @method string getOwnerUid()
 * @method string getTagValue()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getRelatedKey()
 */
class DescribeResourcesBySystemTagRequest extends \RpcAcsRequest
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
            'DescribeResourcesBySystemTag',
            'ecs'
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
     * @param string $ownerBid
     *
     * @return $this
     */
    public function setOwnerBid($ownerBid)
    {
        $this->requestParameters['OwnerBid'] = $ownerBid;
        $this->queryParameters['OwnerBid'] = $ownerBid;

        return $this;
    }

    /**
     * @param string $ownerUid
     *
     * @return $this
     */
    public function setOwnerUid($ownerUid)
    {
        $this->requestParameters['OwnerUid'] = $ownerUid;
        $this->queryParameters['OwnerUid'] = $ownerUid;

        return $this;
    }

    /**
     * @param string $tagValue
     *
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->requestParameters['TagValue'] = $tagValue;
        $this->queryParameters['TagValue'] = $tagValue;

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
     * @param string $relatedKey
     *
     * @return $this
     */
    public function setRelatedKey($relatedKey)
    {
        $this->requestParameters['RelatedKey'] = $relatedKey;
        $this->queryParameters['RelatedKey'] = $relatedKey;

        return $this;
    }
}
