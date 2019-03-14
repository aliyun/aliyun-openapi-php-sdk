<?php

namespace Cbn\Request\V20170912;

/**
 * Request of UntagResources
 *
 * @method string getResourceOwnerId()
 * @method array getResourceIds()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTagOwnerUid()
 * @method string getTagOwnerBid()
 * @method string getOwnerId()
 * @method array getTagKeys()
 * @method string getResourceType()
 */
class UntagResourcesRequest extends \RpcAcsRequest
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
            'Cbn',
            '2017-09-12',
            'UntagResources',
            'cbn'
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
}
