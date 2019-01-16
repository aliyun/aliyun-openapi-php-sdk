<?php

namespace CCC\Request\V20170705;

/**
 * Request of CancelJobs
 *
 * @method string getAll()
 * @method array getJobIds()
 * @method string getInstanceId()
 * @method array getJobReferenceIds()
 * @method string getGroupId()
 * @method string getScenarioId()
 */
class CancelJobsRequest extends \RpcAcsRequest
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
            'CancelJobs'
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
     * @param array $jobIds
     *
     * @return $this
     */
    public function setJobIds(array $jobIds)
    {
        $this->requestParameters['JobIds'] = $jobIds;
        foreach ($jobIds as $i => $iValue) {
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
     * @param array $jobReferenceIds
     *
     * @return $this
     */
    public function setJobReferenceIds(array $jobReferenceIds)
    {
        $this->requestParameters['JobReferenceIds'] = $jobReferenceIds;
        foreach ($jobReferenceIds as $i => $iValue) {
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
