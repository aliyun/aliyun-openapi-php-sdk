<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of QueryResourceTransit
 *
 * @method string getResourceId()
 * @method string getResourceOwnerId()
 * @method array getResourceStatusLists()
 * @method string getResourceOwnerAccount()
 * @method array getResourceTypeLists()
 * @method string getOwnerAccount()
 * @method string getFromRegionNo()
 * @method string getOwnerId()
 * @method string getResourceTransitId()
 * @method string getPageNo()
 * @method string getDbId()
 * @method string getPageSize()
 * @method string getAliUid()
 * @method string getResourceName()
 * @method array getTags()
 */
class QueryResourceTransitRequest extends \RpcAcsRequest
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
            'QueryResourceTransit',
            'ecs'
        );
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
     * @param array $resourceStatusLists
     *
     * @return $this
     */
    public function setResourceStatusLists(array $resourceStatusLists)
    {
        $this->requestParameters['ResourceStatusLists'] = $resourceStatusLists;
        foreach ($resourceStatusLists as $i => $iValue) {
            $this->queryParameters['ResourceStatusList.' . ($i + 1)] = $iValue;
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
     * @param array $resourceTypeLists
     *
     * @return $this
     */
    public function setResourceTypeLists(array $resourceTypeLists)
    {
        $this->requestParameters['ResourceTypeLists'] = $resourceTypeLists;
        foreach ($resourceTypeLists as $i => $iValue) {
            $this->queryParameters['ResourceTypeList.' . ($i + 1)] = $iValue;
        }

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
     * @param string $resourceTransitId
     *
     * @return $this
     */
    public function setResourceTransitId($resourceTransitId)
    {
        $this->requestParameters['ResourceTransitId'] = $resourceTransitId;
        $this->queryParameters['ResourceTransitId'] = $resourceTransitId;

        return $this;
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        $this->requestParameters['PageNo'] = $pageNo;
        $this->queryParameters['PageNo'] = $pageNo;

        return $this;
    }

    /**
     * @param string $dbId
     *
     * @return $this
     */
    public function setDbId($dbId)
    {
        $this->requestParameters['DbId'] = $dbId;
        $this->queryParameters['DbId'] = $dbId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
    {
        $this->requestParameters['AliUid'] = $aliUid;
        $this->queryParameters['AliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->requestParameters['ResourceName'] = $resourceName;
        $this->queryParameters['ResourceName'] = $resourceName;

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
}
