<?php

namespace Tag_Inner\Request\V20181109;

/**
 * Request of InnerUntagResources
 *
 * @method string getResourceOwnerId()
 * @method string getTagOwnerUid()
 * @method string getDeleteAll()
 * @method string getScope()
 * @method string getTagOperator()
 * @method string getTagOwnerBid()
 * @method array getResourceIds()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method array getTagKeys()
 * @method string getCategory()
 */
class InnerUntagResourcesRequest extends \RpcAcsRequest
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
            'Tag-Inner',
            '2018-11-09',
            'InnerUntagResources',
            'tag',
            'innerAPI'
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
     * @param string $tagOwnerUid
     *
     * @return $this
     */
    public function setTagOwnerUid($tagOwnerUid)
    {
        $this->requestParameters['TagOwnerUid'] = $tagOwnerUid;
        $this->queryParameters['TagOwnerUid'] = $tagOwnerUid;

        return $this;
    }

    /**
     * @param string $deleteAll
     *
     * @return $this
     */
    public function setDeleteAll($deleteAll)
    {
        $this->requestParameters['DeleteAll'] = $deleteAll;
        $this->queryParameters['DeleteAll'] = $deleteAll;

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
     * @param string $tagOperator
     *
     * @return $this
     */
    public function setTagOperator($tagOperator)
    {
        $this->requestParameters['TagOperator'] = $tagOperator;
        $this->queryParameters['TagOperator'] = $tagOperator;

        return $this;
    }

    /**
     * @param string $tagOwnerBid
     *
     * @return $this
     */
    public function setTagOwnerBid($tagOwnerBid)
    {
        $this->requestParameters['TagOwnerBid'] = $tagOwnerBid;
        $this->queryParameters['TagOwnerBid'] = $tagOwnerBid;

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
     * @param array $tagKeys
     *
     * @return $this
     */
    public function setTagKeys(array $tagKeys)
    {
        $this->requestParameters['TagKeys'] = $tagKeys;
        foreach ($tagKeys as $i => $iValue) {
            $this->queryParameters['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->requestParameters['Category'] = $category;
        $this->queryParameters['Category'] = $category;

        return $this;
    }
}
