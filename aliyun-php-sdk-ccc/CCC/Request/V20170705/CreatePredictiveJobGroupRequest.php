<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreatePredictiveJobGroup
 *
 * @method string getDescription()
 * @method string getTimingSchedule()
 * @method array getJobsJsons()
 * @method string getJobFilePath()
 * @method string getInstanceId()
 * @method string getIsDraft()
 * @method string getSkillGroupId()
 * @method string getStrategyJson()
 * @method string getName()
 */
class CreatePredictiveJobGroupRequest extends \RpcAcsRequest
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
            'CreatePredictiveJobGroup'
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
     * @param string $timingSchedule
     *
     * @return $this
     */
    public function setTimingSchedule($timingSchedule)
    {
        $this->requestParameters['TimingSchedule'] = $timingSchedule;
        $this->queryParameters['TimingSchedule'] = $timingSchedule;

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
     * @param string $isDraft
     *
     * @return $this
     */
    public function setIsDraft($isDraft)
    {
        $this->requestParameters['IsDraft'] = $isDraft;
        $this->queryParameters['IsDraft'] = $isDraft;

        return $this;
    }

    /**
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function setSkillGroupId($skillGroupId)
    {
        $this->requestParameters['SkillGroupId'] = $skillGroupId;
        $this->queryParameters['SkillGroupId'] = $skillGroupId;

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
}
