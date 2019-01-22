<?php

namespace ROS\Request\V20150901;

/**
 * Request of DescribeEvents
 *
 * @method string getStackId()
 * @method string getPageSize()
 * @method string getStackName()
 * @method string getResourceName()
 * @method string getResourceStatus()
 * @method string getResourceType()
 * @method string getPageNumber()
 */
class DescribeEventsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/stacks/[StackName]/[StackId]/events';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ROS',
            '2015-09-01',
            'DescribeEvents'
        );
    }

    /**
     * @param string $stackId
     *
     * @return $this
     */
    public function setStackId($stackId)
    {
        $this->requestParameters['StackId'] = $stackId;
        $this->pathParameters['StackId'] = $stackId;

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
     * @param string $stackName
     *
     * @return $this
     */
    public function setStackName($stackName)
    {
        $this->requestParameters['StackName'] = $stackName;
        $this->pathParameters['StackName'] = $stackName;

        return $this;
    }

    /**
     * @param string $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->requestParameters['ResourceName'] = $resourceName;
        $this->queryParameters['ResourceName'] = $resourceName;

        return $this;
    }

    /**
     * @param string $resourceStatus
     *
     * @return $this
     */
    public function setResourceStatus($resourceStatus)
    {
        $this->requestParameters['ResourceStatus'] = $resourceStatus;
        $this->queryParameters['ResourceStatus'] = $resourceStatus;

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
}
