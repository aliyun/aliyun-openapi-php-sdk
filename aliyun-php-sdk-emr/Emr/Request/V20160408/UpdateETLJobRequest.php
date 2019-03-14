<?php

namespace Emr\Request\V20160408;

/**
 * Request of UpdateETLJob
 *
 * @method string getResourceOwnerId()
 * @method array getStageConnections()
 * @method string getClusterConfig()
 * @method array getTriggerRules()
 * @method array getStages()
 * @method string getAlertConfig()
 * @method string getName()
 * @method string getDescription()
 * @method string getId()
 * @method string getCheck()
 */
class UpdateETLJobRequest extends \RpcAcsRequest
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
            'UpdateETLJob',
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
     * @param array $stageConnections
     *
     * @return $this
     */
    public function setStageConnections(array $stageConnections)
    {
        $this->requestParameters['StageConnections'] = $stageConnections;
        foreach ($stageConnections as $i => $iValue) {
            $this->queryParameters['StageConnection.' . ($i + 1) . '.Port'] = $stageConnections[$i]['Port'];
            $this->queryParameters['StageConnection.' . ($i + 1) . '.From'] = $stageConnections[$i]['From'];
            $this->queryParameters['StageConnection.' . ($i + 1) . '.To'] = $stageConnections[$i]['To'];
        }

        return $this;
    }

    /**
     * @param string $clusterConfig
     *
     * @return $this
     */
    public function setClusterConfig($clusterConfig)
    {
        $this->requestParameters['ClusterConfig'] = $clusterConfig;
        $this->queryParameters['ClusterConfig'] = $clusterConfig;

        return $this;
    }

    /**
     * @param array $triggerRules
     *
     * @return $this
     */
    public function setTriggerRules(array $triggerRules)
    {
        $this->requestParameters['TriggerRules'] = $triggerRules;
        foreach ($triggerRules as $i => $iValue) {
            $this->queryParameters['TriggerRule.' . ($i + 1) . '.CronExpr'] = $triggerRules[$i]['CronExpr'];
            $this->queryParameters['TriggerRule.' . ($i + 1) . '.EndTime'] = $triggerRules[$i]['EndTime'];
            $this->queryParameters['TriggerRule.' . ($i + 1) . '.StartTime'] = $triggerRules[$i]['StartTime'];
            $this->queryParameters['TriggerRule.' . ($i + 1) . '.Enabled'] = $triggerRules[$i]['Enabled'];
        }

        return $this;
    }

    /**
     * @param array $stages
     *
     * @return $this
     */
    public function setStages(array $stages)
    {
        $this->requestParameters['Stages'] = $stages;
        foreach ($stages as $i => $iValue) {
            $this->queryParameters['Stage.' . ($i + 1) . '.StageName'] = $stages[$i]['StageName'];
            $this->queryParameters['Stage.' . ($i + 1) . '.StageConf'] = $stages[$i]['StageConf'];
            $this->queryParameters['Stage.' . ($i + 1) . '.StageType'] = $stages[$i]['StageType'];
            $this->queryParameters['Stage.' . ($i + 1) . '.StagePlugin'] = $stages[$i]['StagePlugin'];
        }

        return $this;
    }

    /**
     * @param string $alertConfig
     *
     * @return $this
     */
    public function setAlertConfig($alertConfig)
    {
        $this->requestParameters['AlertConfig'] = $alertConfig;
        $this->queryParameters['AlertConfig'] = $alertConfig;

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
     * @param string $check
     *
     * @return $this
     */
    public function setCheck($check)
    {
        $this->requestParameters['Check'] = $check;
        $this->queryParameters['Check'] = $check;

        return $this;
    }
}
