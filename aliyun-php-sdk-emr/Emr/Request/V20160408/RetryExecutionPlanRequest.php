<?php

namespace Emr\Request\V20160408;

/**
 * Request of RetryExecutionPlan
 *
 * @method string getResourceOwnerId()
 * @method string getExecutionPlanWorkNodeIds()
 * @method string getId()
 */
class RetryExecutionPlanRequest extends \RpcAcsRequest
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
            'RetryExecutionPlan',
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
     * @param string $executionPlanWorkNodeIds
     *
     * @return $this
     */
    public function setExecutionPlanWorkNodeIds($executionPlanWorkNodeIds)
    {
        $this->requestParameters['ExecutionPlanWorkNodeIds'] = $executionPlanWorkNodeIds;
        $this->queryParameters['ExecutionPlanWorkNodeIds'] = $executionPlanWorkNodeIds;

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
}
