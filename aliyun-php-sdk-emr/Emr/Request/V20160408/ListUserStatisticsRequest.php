<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListUserStatistics
 *
 * @method string getResourceOwnerId()
 * @method string getOrderMode()
 * @method string getPageSize()
 * @method string getOrderFieldName()
 * @method string getCurrentSize()
 */
class ListUserStatisticsRequest extends \RpcAcsRequest
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
            'ListUserStatistics',
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
     * @param string $orderMode
     *
     * @return $this
     */
    public function setOrderMode($orderMode)
    {
        $this->requestParameters['OrderMode'] = $orderMode;
        $this->queryParameters['OrderMode'] = $orderMode;

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
     * @param string $orderFieldName
     *
     * @return $this
     */
    public function setOrderFieldName($orderFieldName)
    {
        $this->requestParameters['OrderFieldName'] = $orderFieldName;
        $this->queryParameters['OrderFieldName'] = $orderFieldName;

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
