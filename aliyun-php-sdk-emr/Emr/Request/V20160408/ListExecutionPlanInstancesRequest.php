<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListExecutionPlanInstances
 *
 * @method string getOnlyLastInstance()
 * @method string getResourceOwnerId()
 * @method array getExecutionPlanIdLists()
 * @method array getStatusLists()
 * @method string getPageSize()
 * @method string getIsDesc()
 * @method string getPageNumber()
 */
class ListExecutionPlanInstancesRequest extends \RpcAcsRequest
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
            'ListExecutionPlanInstances',
            'emr'
        );
    }

    /**
     * @param string $onlyLastInstance
     *
     * @return $this
     */
    public function setOnlyLastInstance($onlyLastInstance)
    {
        $this->requestParameters['OnlyLastInstance'] = $onlyLastInstance;
        $this->queryParameters['OnlyLastInstance'] = $onlyLastInstance;

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
     * @param array $executionPlanIdLists
     *
     * @return $this
     */
    public function setExecutionPlanIdLists(array $executionPlanIdLists)
    {
        $this->requestParameters['ExecutionPlanIdLists'] = $executionPlanIdLists;
        foreach ($executionPlanIdLists as $i => $iValue) {
            $this->queryParameters['ExecutionPlanIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $statusLists
     *
     * @return $this
     */
    public function setStatusLists(array $statusLists)
    {
        $this->requestParameters['StatusLists'] = $statusLists;
        foreach ($statusLists as $i => $iValue) {
            $this->queryParameters['StatusList.' . ($i + 1)] = $iValue;
        }

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
}
