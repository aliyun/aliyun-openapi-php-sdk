<?php

namespace Emr\Request\V20160408;

/**
 * Request of MetastoreListTask
 *
 * @method string getResourceOwnerId()
 * @method string getTaskStatus()
 * @method string getTaskSourceType()
 * @method string getTaskType()
 * @method string getPageSize()
 * @method string getDataSourceId()
 * @method string getPageNumber()
 * @method string getTaskId()
 */
class MetastoreListTaskRequest extends \RpcAcsRequest
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
            'MetastoreListTask',
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
     * @param string $taskStatus
     *
     * @return $this
     */
    public function setTaskStatus($taskStatus)
    {
        $this->requestParameters['TaskStatus'] = $taskStatus;
        $this->queryParameters['TaskStatus'] = $taskStatus;

        return $this;
    }

    /**
     * @param string $taskSourceType
     *
     * @return $this
     */
    public function setTaskSourceType($taskSourceType)
    {
        $this->requestParameters['TaskSourceType'] = $taskSourceType;
        $this->queryParameters['TaskSourceType'] = $taskSourceType;

        return $this;
    }

    /**
     * @param string $taskType
     *
     * @return $this
     */
    public function setTaskType($taskType)
    {
        $this->requestParameters['TaskType'] = $taskType;
        $this->queryParameters['TaskType'] = $taskType;

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
     * @param string $dataSourceId
     *
     * @return $this
     */
    public function setDataSourceId($dataSourceId)
    {
        $this->requestParameters['DataSourceId'] = $dataSourceId;
        $this->queryParameters['DataSourceId'] = $dataSourceId;

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
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->requestParameters['TaskId'] = $taskId;
        $this->queryParameters['TaskId'] = $taskId;

        return $this;
    }
}
