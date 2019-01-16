<?php

namespace CCC\Request\V20170705;

/**
 * Request of CreatePredictiveJobs
 *
 * @method string getInstanceId()
 * @method string getSkillGroupId()
 * @method string getStrategyJson()
 * @method array getJobsJsons()
 */
class CreatePredictiveJobsRequest extends \RpcAcsRequest
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
            'CreatePredictiveJobs'
        );
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
