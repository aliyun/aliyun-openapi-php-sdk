<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListFlowNodeInstanceContainerStatus
 *
 * @method string getPageSize()
 * @method string getNodeInstanceId()
 * @method string getProjectId()
 * @method string getPageNumber()
 */
class ListFlowNodeInstanceContainerStatusRequest extends \RpcAcsRequest
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
            'ListFlowNodeInstanceContainerStatus',
            'emr'
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
     * @param string $nodeInstanceId
     *
     * @return $this
     */
    public function setNodeInstanceId($nodeInstanceId)
    {
        $this->requestParameters['NodeInstanceId'] = $nodeInstanceId;
        $this->queryParameters['NodeInstanceId'] = $nodeInstanceId;

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
