<?php

namespace Emr\Request\V20160408;

/**
 * Request of DescribeClusterOperationHostTaskLog
 *
 * @method string getResourceOwnerId()
 * @method string getOperationId()
 * @method string getHostId()
 * @method string getClusterId()
 * @method string getTaskId()
 * @method string getStatus()
 */
class DescribeClusterOperationHostTaskLogRequest extends \RpcAcsRequest
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
            'DescribeClusterOperationHostTaskLog',
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
     * @param string $operationId
     *
     * @return $this
     */
    public function setOperationId($operationId)
    {
        $this->requestParameters['OperationId'] = $operationId;
        $this->queryParameters['OperationId'] = $operationId;

        return $this;
    }

    /**
     * @param string $hostId
     *
     * @return $this
     */
    public function setHostId($hostId)
    {
        $this->requestParameters['HostId'] = $hostId;
        $this->queryParameters['HostId'] = $hostId;

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

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
