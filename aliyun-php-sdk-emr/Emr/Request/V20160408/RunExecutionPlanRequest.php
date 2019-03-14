<?php

namespace Emr\Request\V20160408;

/**
 * Request of RunExecutionPlan
 *
 * @method string getResourceOwnerId()
 * @method string getArguments()
 * @method string getId()
 */
class RunExecutionPlanRequest extends \RpcAcsRequest
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
            'RunExecutionPlan',
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
     * @param string $arguments
     *
     * @return $this
     */
    public function setArguments($arguments)
    {
        $this->requestParameters['Arguments'] = $arguments;
        $this->queryParameters['Arguments'] = $arguments;

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
