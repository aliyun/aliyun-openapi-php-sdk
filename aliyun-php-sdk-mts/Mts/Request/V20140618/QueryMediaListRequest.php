<?php

namespace Mts\Request\V20140618;

/**
 * Request of QueryMediaList
 *
 * @method string getResourceOwnerId()
 * @method string getIncludeSummaryList()
 * @method string getResourceOwnerAccount()
 * @method string getIncludeSnapshotList()
 * @method string getOwnerAccount()
 * @method string getMediaIds()
 * @method string getOwnerId()
 * @method string getIncludePlayList()
 * @method string getIncludeMediaInfo()
 */
class QueryMediaListRequest extends \RpcAcsRequest
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
            'Mts',
            '2014-06-18',
            'QueryMediaList',
            'mts'
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
     * @param string $includeSummaryList
     *
     * @return $this
     */
    public function setIncludeSummaryList($includeSummaryList)
    {
        $this->requestParameters['IncludeSummaryList'] = $includeSummaryList;
        $this->queryParameters['IncludeSummaryList'] = $includeSummaryList;

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
     * @param string $includeSnapshotList
     *
     * @return $this
     */
    public function setIncludeSnapshotList($includeSnapshotList)
    {
        $this->requestParameters['IncludeSnapshotList'] = $includeSnapshotList;
        $this->queryParameters['IncludeSnapshotList'] = $includeSnapshotList;

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
     * @param string $mediaIds
     *
     * @return $this
     */
    public function setMediaIds($mediaIds)
    {
        $this->requestParameters['MediaIds'] = $mediaIds;
        $this->queryParameters['MediaIds'] = $mediaIds;

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
     * @param string $includePlayList
     *
     * @return $this
     */
    public function setIncludePlayList($includePlayList)
    {
        $this->requestParameters['IncludePlayList'] = $includePlayList;
        $this->queryParameters['IncludePlayList'] = $includePlayList;

        return $this;
    }

    /**
     * @param string $includeMediaInfo
     *
     * @return $this
     */
    public function setIncludeMediaInfo($includeMediaInfo)
    {
        $this->requestParameters['IncludeMediaInfo'] = $includeMediaInfo;
        $this->queryParameters['IncludeMediaInfo'] = $includeMediaInfo;

        return $this;
    }
}
