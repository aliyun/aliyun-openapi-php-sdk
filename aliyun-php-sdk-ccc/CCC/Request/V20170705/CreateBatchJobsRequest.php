<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateBatchJobs
 *
 * @method string getDescription()
 * @method string getJobFilePath()
 * @method array getCallingNumbers()
 * @method string getInstanceId()
 * @method string getSubmitted()
 * @method string getStrategyJson()
 * @method string getName()
 * @method string getScenarioId()
 */
class CreateBatchJobsRequest extends \RpcAcsRequest
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
            'CreateBatchJobs'
        );
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
     * @param string $jobFilePath
     *
     * @return $this
     */
    public function setJobFilePath($jobFilePath)
    {
        $this->requestParameters['JobFilePath'] = $jobFilePath;
        $this->queryParameters['JobFilePath'] = $jobFilePath;

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
     * @param string $submitted
     *
     * @return $this
     */
    public function setSubmitted($submitted)
    {
        $this->requestParameters['Submitted'] = $submitted;
        $this->queryParameters['Submitted'] = $submitted;

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
