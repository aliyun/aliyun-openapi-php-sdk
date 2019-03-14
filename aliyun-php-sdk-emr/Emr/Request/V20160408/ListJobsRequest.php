<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListJobs
 *
 * @method string getResourceOwnerId()
 * @method string getPageSize()
 * @method string getQueryString()
 * @method string getIsDesc()
 * @method string getPageNumber()
 * @method string getQueryType()
 */
class ListJobsRequest extends \RpcAcsRequest
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
            'ListJobs',
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
     * @param string $queryString
     *
     * @return $this
     */
    public function setQueryString($queryString)
    {
        $this->requestParameters['QueryString'] = $queryString;
        $this->queryParameters['QueryString'] = $queryString;

        return $this;
    }

    /**
     * @param string $isDesc
     *
     * @return $this
     */
    public function setIsDesc($isDesc)
    {
        $this->requestParameters['IsDesc'] = $isDesc;
        $this->queryParameters['IsDesc'] = $isDesc;

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
     * @param string $queryType
     *
     * @return $this
     */
    public function setQueryType($queryType)
    {
        $this->requestParameters['QueryType'] = $queryType;
        $this->queryParameters['QueryType'] = $queryType;

        return $this;
    }
}
