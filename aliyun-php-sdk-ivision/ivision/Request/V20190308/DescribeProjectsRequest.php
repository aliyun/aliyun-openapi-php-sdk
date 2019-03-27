<?php

namespace ivision\Request\V20190308;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeProjects
 *
 * @method string getNextPageToken()
 * @method string getPageSize()
 * @method string getShowLog()
 * @method string getCurrentPage()
 * @method string getProjectIds()
 * @method string getOwnerId()
 */
class DescribeProjectsRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ivision',
            '2019-03-08',
            'DescribeProjects',
            'ivision'
        );
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
     * @param string $showLog
     *
     * @return $this
     */
    public function setShowLog($showLog)
    {
        $this->requestParameters['ShowLog'] = $showLog;
        $this->queryParameters['ShowLog'] = $showLog;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $projectIds
     *
     * @return $this
     */
    public function setProjectIds($projectIds)
    {
        $this->requestParameters['ProjectIds'] = $projectIds;
        $this->queryParameters['ProjectIds'] = $projectIds;

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
}
