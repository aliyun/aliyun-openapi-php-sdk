<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateJob
 *
 * @method string getRunParameter()
 * @method string getRetryInterval()
 * @method string getResourceOwnerId()
 * @method string getName()
 * @method string getType()
 * @method string getMaxRetry()
 * @method string getFailAct()
 */
class CreateJobRequest extends \RpcAcsRequest
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
            'CreateJob',
            'emr'
        );
    }

    /**
     * @param string $runParameter
     *
     * @return $this
     */
    public function setRunParameter($runParameter)
    {
        $this->requestParameters['RunParameter'] = $runParameter;
        $this->queryParameters['RunParameter'] = $runParameter;

        return $this;
    }

    /**
     * @param string $retryInterval
     *
     * @return $this
     */
    public function setRetryInterval($retryInterval)
    {
        $this->requestParameters['RetryInterval'] = $retryInterval;
        $this->queryParameters['RetryInterval'] = $retryInterval;

        return $this;
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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $maxRetry
     *
     * @return $this
     */
    public function setMaxRetry($maxRetry)
    {
        $this->requestParameters['MaxRetry'] = $maxRetry;
        $this->queryParameters['MaxRetry'] = $maxRetry;

        return $this;
    }

    /**
     * @param string $failAct
     *
     * @return $this
     */
    public function setFailAct($failAct)
    {
        $this->requestParameters['FailAct'] = $failAct;
        $this->queryParameters['FailAct'] = $failAct;

        return $this;
    }
}
