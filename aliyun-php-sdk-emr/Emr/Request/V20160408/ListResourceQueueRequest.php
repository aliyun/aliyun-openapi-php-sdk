<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListResourceQueue
 *
 * @method string getResourceOwnerId()
 * @method string getPoolId()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getPageNumber()
 * @method string getPoolType()
 */
class ListResourceQueueRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'ListResourceQueue',
            'emr'
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
     * @param string $poolId
     *
     * @return $this
     */
    public function setPoolId($poolId)
    {
        $this->requestParameters['PoolId'] = $poolId;
        $this->queryParameters['PoolId'] = $poolId;

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
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $poolType
     *
     * @return $this
     */
    public function setPoolType($poolType)
    {
        $this->requestParameters['PoolType'] = $poolType;
        $this->queryParameters['PoolType'] = $poolType;

        return $this;
    }
}
