<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListJobMigrateInfo
 *
 * @method string getResourceOwnerId()
 * @method string getPageSize()
 * @method string getUserId()
 * @method string getCurrentSize()
 */
class ListJobMigrateInfoRequest extends \RpcAcsRequest
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
            'ListJobMigrateInfo',
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
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }

    /**
     * @param string $currentSize
     *
     * @return $this
     */
    public function setCurrentSize($currentSize)
    {
        $this->requestParameters['CurrentSize'] = $currentSize;
        $this->queryParameters['CurrentSize'] = $currentSize;

        return $this;
    }
}
