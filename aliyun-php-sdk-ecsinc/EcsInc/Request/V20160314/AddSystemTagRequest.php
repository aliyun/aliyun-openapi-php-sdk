<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of AddSystemTag
 *
 * @method string getResourceOwnerId()
 * @method string getOwnerBid()
 * @method string getScope()
 * @method string getOwnerUid()
 * @method array getResourceIds()
 * @method string getTagValue()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getRelatedKey()
 */
class AddSystemTagRequest extends \RpcAcsRequest
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
            'AddSystemTag',
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
     * @param string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->requestParameters['Scope'] = $scope;
        $this->queryParameters['Scope'] = $scope;

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
     * @param array $resourceIds
     *
     * @return $this
     */
    public function setResourceIds(array $resourceIds)
    {
        $this->requestParameters['ResourceIds'] = $resourceIds;
        foreach ($resourceIds as $i => $iValue) {
            $this->queryParameters['ResourceId.' . ($i + 1)] = $iValue;
        }

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
