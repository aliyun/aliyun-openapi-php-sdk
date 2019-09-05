<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CancelPredictiveJobs
 *
 * @method string getAll()
 * @method array getJobIds()
 * @method string getInstanceId()
 * @method string getJobGroupId()
 */
class CancelPredictiveJobsRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'CancelPredictiveJobs'
        );
    }

    /**
     * @param string $all
     *
     * @return $this
     */
    public function setAll($all)
    {
        $this->requestParameters['All'] = $all;
        $this->queryParameters['All'] = $all;

        return $this;
    }

    /**
     * @param array $jobId
     *
     * @return $this
     */
	public function setJobIds(array $jobId)
	{
	    $this->requestParameters['JobIds'] = $jobId;
		foreach ($jobId as $i => $iValue) {
			$this->queryParameters['JobId.' . ($i + 1)] = $iValue;
		}

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
     * @param string $jobGroupId
     *
     * @return $this
     */
    public function setJobGroupId($jobGroupId)
    {
        $this->requestParameters['JobGroupId'] = $jobGroupId;
        $this->queryParameters['JobGroupId'] = $jobGroupId;

        return $this;
    }
}
