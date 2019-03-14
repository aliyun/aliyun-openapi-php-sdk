<?php

namespace Emr\Request\V20160408;

/**
 * Request of RetryExecutionPlanInstance
 *
 * @method string getResourceOwnerId()
 * @method string getArguments()
 * @method string getId()
 * @method string getRerunFail()
 */
class RetryExecutionPlanInstanceRequest extends \RpcAcsRequest
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
            'RetryExecutionPlanInstance',
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

    /**
     * @param string $rerunFail
     *
     * @return $this
     */
    public function setRerunFail($rerunFail)
    {
        $this->requestParameters['RerunFail'] = $rerunFail;
        $this->queryParameters['RerunFail'] = $rerunFail;

        return $this;
    }
}
