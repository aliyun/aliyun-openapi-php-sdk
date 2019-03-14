<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyFlowJob
 *
 * @method string getRunConf()
 * @method string getEnvConf()
 * @method string getDescription()
 * @method string getClusterId()
 * @method string getParams()
 * @method string getParamConf()
 * @method array getResourceLists()
 * @method string getFailAct()
 * @method string getCustomVariables()
 * @method string getMode()
 * @method string getRetryInterval()
 * @method string getMonitorConf()
 * @method string getName()
 * @method string getId()
 * @method string getMaxRetry()
 * @method string getAlertConf()
 * @method string getProjectId()
 */
class ModifyFlowJobRequest extends \RpcAcsRequest
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
            'ModifyFlowJob',
            'emr'
        );
    }

    /**
     * @param string $runConf
     *
     * @return $this
     */
    public function setRunConf($runConf)
    {
        $this->requestParameters['RunConf'] = $runConf;
        $this->queryParameters['RunConf'] = $runConf;

        return $this;
    }

    /**
     * @param string $envConf
     *
     * @return $this
     */
    public function setEnvConf($envConf)
    {
        $this->requestParameters['EnvConf'] = $envConf;
        $this->queryParameters['EnvConf'] = $envConf;

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
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $params
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->requestParameters['Params'] = $params;
        $this->queryParameters['Params'] = $params;

        return $this;
    }

    /**
     * @param string $paramConf
     *
     * @return $this
     */
    public function setParamConf($paramConf)
    {
        $this->requestParameters['ParamConf'] = $paramConf;
        $this->queryParameters['ParamConf'] = $paramConf;

        return $this;
    }

    /**
     * @param array $resourceLists
     *
     * @return $this
     */
    public function setResourceLists(array $resourceLists)
    {
        $this->requestParameters['ResourceLists'] = $resourceLists;
        foreach ($resourceLists as $i => $iValue) {
            $this->queryParameters['ResourceList.' . ($i + 1) . '.Path'] = $resourceLists[$i]['Path'];
            $this->queryParameters['ResourceList.' . ($i + 1) . '.Alias'] = $resourceLists[$i]['Alias'];
        }

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

    /**
     * @param string $customVariables
     *
     * @return $this
     */
    public function setCustomVariables($customVariables)
    {
        $this->requestParameters['CustomVariables'] = $customVariables;
        $this->queryParameters['CustomVariables'] = $customVariables;

        return $this;
    }

    /**
     * @param string $mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->requestParameters['Mode'] = $mode;
        $this->queryParameters['Mode'] = $mode;

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
     * @param string $monitorConf
     *
     * @return $this
     */
    public function setMonitorConf($monitorConf)
    {
        $this->requestParameters['MonitorConf'] = $monitorConf;
        $this->queryParameters['MonitorConf'] = $monitorConf;

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
     * @param string $alertConf
     *
     * @return $this
     */
    public function setAlertConf($alertConf)
    {
        $this->requestParameters['AlertConf'] = $alertConf;
        $this->queryParameters['AlertConf'] = $alertConf;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

        return $this;
    }
}
