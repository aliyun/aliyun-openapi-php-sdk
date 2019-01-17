<?php

namespace Vpc\Request\V20160428;

/**
 * Request of DescribeFlowLogs
 *
 * @method string getResourceOwnerId()
 * @method string getResourceId()
 * @method string getProjectName()
 * @method string getLogStoreName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTrafficType()
 * @method string getFlowLogId()
 * @method string getFlowLogName()
 * @method string getStatus()
 */
class DescribeFlowLogsRequest extends \RpcAcsRequest
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
            'Vpc',
            '2016-04-28',
            'DescribeFlowLogs',
            'vpc'
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
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->requestParameters['ResourceId'] = $resourceId;
        $this->queryParameters['ResourceId'] = $resourceId;

        return $this;
    }

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function setProjectName($projectName)
    {
        $this->requestParameters['ProjectName'] = $projectName;
        $this->queryParameters['ProjectName'] = $projectName;

        return $this;
    }

    /**
     * @param string $logStoreName
     *
     * @return $this
     */
    public function setLogStoreName($logStoreName)
    {
        $this->requestParameters['LogStoreName'] = $logStoreName;
        $this->queryParameters['LogStoreName'] = $logStoreName;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

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

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

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
     * @param string $trafficType
     *
     * @return $this
     */
    public function setTrafficType($trafficType)
    {
        $this->requestParameters['TrafficType'] = $trafficType;
        $this->queryParameters['TrafficType'] = $trafficType;

        return $this;
    }

    /**
     * @param string $flowLogId
     *
     * @return $this
     */
    public function setFlowLogId($flowLogId)
    {
        $this->requestParameters['FlowLogId'] = $flowLogId;
        $this->queryParameters['FlowLogId'] = $flowLogId;

        return $this;
    }

    /**
     * @param string $flowLogName
     *
     * @return $this
     */
    public function setFlowLogName($flowLogName)
    {
        $this->requestParameters['FlowLogName'] = $flowLogName;
        $this->queryParameters['FlowLogName'] = $flowLogName;

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
