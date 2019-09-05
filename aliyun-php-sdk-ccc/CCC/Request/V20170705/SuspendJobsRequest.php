<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SuspendJobs
 *
 * @method string getAll()
 * @method array getJobReferenceIds()
 * @method string getGroupId()
 * @method array getJobIds()
 * @method string getInstanceId()
 * @method string getScenarioId()
 */
class SuspendJobsRequest extends \RpcAcsRequest
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
            'SuspendJobs'
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
     * @param array $jobReferenceId
     *
     * @return $this
     */
	public function setJobReferenceIds(array $jobReferenceId)
	{
	    $this->requestParameters['JobReferenceIds'] = $jobReferenceId;
		foreach ($jobReferenceId as $i => $iValue) {
			$this->queryParameters['JobReferenceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

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
     * @param string $scenarioId
     *
     * @return $this
     */
    public function setScenarioId($scenarioId)
    {
        $this->requestParameters['ScenarioId'] = $scenarioId;
        $this->queryParameters['ScenarioId'] = $scenarioId;

        return $this;
    }
}
