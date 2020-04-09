<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListClusterNode
 *
 * @method string getPageSize()
 * @method string getPageNum()
 * @method string getClusterInstanceId()
 */
class ListClusterNodeRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'retailcloud',
            '2018-03-13',
            'ListClusterNode',
            'retailcloud'
        );
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
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $clusterInstanceId
     *
     * @return $this
     */
    public function setClusterInstanceId($clusterInstanceId)
    {
        $this->requestParameters['ClusterInstanceId'] = $clusterInstanceId;
        $this->queryParameters['ClusterInstanceId'] = $clusterInstanceId;

        return $this;
    }
}
