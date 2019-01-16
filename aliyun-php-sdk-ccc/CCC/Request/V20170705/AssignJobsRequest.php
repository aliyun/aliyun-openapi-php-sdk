<?php

namespace CCC\Request\V20170705;

/**
 * Request of AssignJobs
 *
 * @method array getCallingNumbers()
 * @method string getInstanceId()
 * @method string getGroupId()
 * @method string getStrategyJson()
 * @method string getScenarioId()
 * @method array getJobsJsons()
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
     * @param array $callingNumbers
     *
     * @return $this
     */
    public function setCallingNumbers(array $callingNumbers)
    {
        $this->requestParameters['CallingNumbers'] = $callingNumbers;
        foreach ($callingNumbers as $i => $iValue) {
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

    /**
     * @param array $jobsJsons
     *
     * @return $this
     */
    public function setJobsJsons(array $jobsJsons)
    {
        $this->requestParameters['JobsJsons'] = $jobsJsons;
        foreach ($jobsJsons as $i => $iValue) {
            $this->queryParameters['JobsJson.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
