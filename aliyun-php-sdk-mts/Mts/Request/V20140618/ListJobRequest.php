<?php

namespace Mts\Request\V20140618;

/**
 * Request of ListJob
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getNextPageToken()
 * @method string getStartOfJobCreatedTimeRange()
 * @method string getOwnerAccount()
 * @method string getMaximumPageSize()
 * @method string getState()
 * @method string getOwnerId()
 * @method string getEndOfJobCreatedTimeRange()
 * @method string getPipelineId()
 */
class ListJobRequest extends \RpcAcsRequest
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
            'ListJob',
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
     * @param string $nextPageToken
     *
     * @return $this
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->requestParameters['NextPageToken'] = $nextPageToken;
        $this->queryParameters['NextPageToken'] = $nextPageToken;

        return $this;
    }

    /**
     * @param string $startOfJobCreatedTimeRange
     *
     * @return $this
     */
    public function setStartOfJobCreatedTimeRange($startOfJobCreatedTimeRange)
    {
        $this->requestParameters['StartOfJobCreatedTimeRange'] = $startOfJobCreatedTimeRange;
        $this->queryParameters['StartOfJobCreatedTimeRange'] = $startOfJobCreatedTimeRange;

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
     * @param string $maximumPageSize
     *
     * @return $this
     */
    public function setMaximumPageSize($maximumPageSize)
    {
        $this->requestParameters['MaximumPageSize'] = $maximumPageSize;
        $this->queryParameters['MaximumPageSize'] = $maximumPageSize;

        return $this;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->requestParameters['State'] = $state;
        $this->queryParameters['State'] = $state;

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
     * @param string $endOfJobCreatedTimeRange
     *
     * @return $this
     */
    public function setEndOfJobCreatedTimeRange($endOfJobCreatedTimeRange)
    {
        $this->requestParameters['EndOfJobCreatedTimeRange'] = $endOfJobCreatedTimeRange;
        $this->queryParameters['EndOfJobCreatedTimeRange'] = $endOfJobCreatedTimeRange;

        return $this;
    }

    /**
     * @param string $pipelineId
     *
     * @return $this
     */
    public function setPipelineId($pipelineId)
    {
        $this->requestParameters['PipelineId'] = $pipelineId;
        $this->queryParameters['PipelineId'] = $pipelineId;

        return $this;
    }
}
