<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListJobExecutionInstances
 *
 * @method string getResourceOwnerId()
 * @method string getExecutionPlanInstanceId()
 * @method string getPageSize()
 * @method string getIsDesc()
 * @method string getPageNumber()
 */
class ListJobExecutionInstancesRequest extends \RpcAcsRequest
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
            'ListJobExecutionInstances',
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
     * @param string $executionPlanInstanceId
     *
     * @return $this
     */
    public function setExecutionPlanInstanceId($executionPlanInstanceId)
    {
        $this->requestParameters['ExecutionPlanInstanceId'] = $executionPlanInstanceId;
        $this->queryParameters['ExecutionPlanInstanceId'] = $executionPlanInstanceId;

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
