<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AssignJobs
 *
 * @method string getGroupId()
 * @method array getJobsJsons()
 * @method array getCallingNumbers()
 * @method string getInstanceId()
 * @method string getStrategyJson()
 * @method string getScenarioId()
 */
class AssignJobsRequest extends \RpcAcsRequest
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
            'AssignJobs'
        );
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
     * @param array $jobsJson
     *
     * @return $this
     */
	public function setJobsJsons(array $jobsJson)
	{
	    $this->requestParameters['JobsJsons'] = $jobsJson;
		foreach ($jobsJson as $i => $iValue) {
			$this->queryParameters['JobsJson.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
	public function setCallingNumbers(array $callingNumber)
	{
	    $this->requestParameters['CallingNumbers'] = $callingNumber;
		foreach ($callingNumber as $i => $iValue) {
			$this->queryParameters['CallingNumber.' . ($i + 1)] = $iValue;
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
     * @param string $strategyJson
     *
     * @return $this
     */
    public function setStrategyJson($strategyJson)
    {
        $this->requestParameters['StrategyJson'] = $strategyJson;
        $this->queryParameters['StrategyJson'] = $strategyJson;

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
