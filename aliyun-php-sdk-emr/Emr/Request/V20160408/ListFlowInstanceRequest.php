<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListFlowInstance
 *
 * @method string getOwner()
 * @method string getTimeRange()
 * @method array getStatusLists()
 * @method string getOrderBy()
 * @method string getPageNumber()
 * @method string getInstanceId()
 * @method string getPageSize()
 * @method string getFlowName()
 * @method string getId()
 * @method string getFlowId()
 * @method string getProjectId()
 * @method string getOrderType()
 */
class ListFlowInstanceRequest extends \RpcAcsRequest
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
            'ListFlowInstance',
            'emr'
        );
    }

    /**
     * @param string $owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->requestParameters['Owner'] = $owner;
        $this->queryParameters['Owner'] = $owner;

        return $this;
    }

    /**
     * @param string $timeRange
     *
     * @return $this
     */
    public function setTimeRange($timeRange)
    {
        $this->requestParameters['TimeRange'] = $timeRange;
        $this->queryParameters['TimeRange'] = $timeRange;

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
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->requestParameters['OrderBy'] = $orderBy;
        $this->queryParameters['OrderBy'] = $orderBy;

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

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
     * @param string $flowName
     *
     * @return $this
     */
    public function setFlowName($flowName)
    {
        $this->requestParameters['FlowName'] = $flowName;
        $this->queryParameters['FlowName'] = $flowName;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }

    /**
     * @param string $flowId
     *
     * @return $this
     */
    public function setFlowId($flowId)
    {
        $this->requestParameters['FlowId'] = $flowId;
        $this->queryParameters['FlowId'] = $flowId;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        $this->requestParameters['OrderType'] = $orderType;
        $this->queryParameters['OrderType'] = $orderType;

        return $this;
    }
}
