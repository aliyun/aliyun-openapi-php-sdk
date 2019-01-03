<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of RemoveSystemTags
 *
 * @method string getResourceOwnerId()
 * @method string getOwnerBid()
 * @method array getTags()
 * @method string getOwnerUid()
 * @method array getResourceIds()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getResourceType()
 */
class RemoveSystemTagsRequest extends \RpcAcsRequest
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
            'RemoveSystemTags',
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
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->requestParameters['Tags'] = $tags;
        foreach ($tags as $i => $iValue) {
            $this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $tags[$i]['Key'];
            $this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $tags[$i]['Value'];
        }

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
}
