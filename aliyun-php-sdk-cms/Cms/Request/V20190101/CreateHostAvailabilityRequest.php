<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateHostAvailability
 *
 * @method array getInstanceLists()
 * @method string getTaskType()
 * @method string getTaskOptionHttpMethod()
 * @method array getAlertConfigEscalationLists()
 * @method string getGroupId()
 * @method string getTaskName()
 * @method string getAlertConfigSilenceTime()
 * @method string getTaskOptionHttpResponseCharset()
 * @method string getAlertConfigEndTime()
 * @method string getTaskOptionHttpURI()
 * @method string getTaskOptionHttpNegative()
 * @method string getTaskScope()
 * @method string getAlertConfigNotifyType()
 * @method string getAlertConfigStartTime()
 * @method string getTaskOptionTelnetOrPingHost()
 * @method string getTaskOptionHttpResponseMatchContent()
 * @method string getAlertConfigWebHook()
 */
class CreateHostAvailabilityRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'CreateHostAvailability',
            'cms'
        );
    }

    /**
     * @param array $instanceList
     *
     * @return $this
     */
    public function setInstanceLists(array $instanceList)
    {
        $this->requestParameters['InstanceLists'] = $instanceList;
        foreach ($instanceList as $i => $iValue) {
            $this->queryParameters['InstanceList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $taskType
     *
     * @return $this
     */
    public function setTaskType($taskType)
    {
        $this->requestParameters['TaskType'] = $taskType;
        $this->queryParameters['TaskType'] = $taskType;

        return $this;
    }

    /**
     * @param string $taskOptionHttpMethod
     *
     * @return $this
     */
    public function setTaskOptionHttpMethod($taskOptionHttpMethod)
    {
        $this->requestParameters['TaskOptionHttpMethod'] = $taskOptionHttpMethod;
        $this->queryParameters['TaskOption.HttpMethod'] = $taskOptionHttpMethod;

        return $this;
    }

    /**
     * @param array $alertConfigEscalationList
     *
     * @return $this
     */
    public function setAlertConfigEscalationLists(array $alertConfigEscalationList)
    {
        $this->requestParameters['AlertConfigEscalationLists'] = $alertConfigEscalationList;
        foreach ($alertConfigEscalationList as $depth1 => $depth1Value) {
            $this->queryParameters['AlertConfigEscalationList.' . ($depth1 + 1) . '.Times'] = $depth1Value['Times'];
            $this->queryParameters['AlertConfigEscalationList.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->queryParameters['AlertConfigEscalationList.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->queryParameters['AlertConfigEscalationList.' . ($depth1 + 1) . '.Operator'] = $depth1Value['Operator'];
            $this->queryParameters['AlertConfigEscalationList.' . ($depth1 + 1) . '.Aggregate'] = $depth1Value['Aggregate'];
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
     * @param string $taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->requestParameters['TaskName'] = $taskName;
        $this->queryParameters['TaskName'] = $taskName;

        return $this;
    }

    /**
     * @param string $alertConfigSilenceTime
     *
     * @return $this
     */
    public function setAlertConfigSilenceTime($alertConfigSilenceTime)
    {
        $this->requestParameters['AlertConfigSilenceTime'] = $alertConfigSilenceTime;
        $this->queryParameters['AlertConfig.SilenceTime'] = $alertConfigSilenceTime;

        return $this;
    }

    /**
     * @param string $taskOptionHttpResponseCharset
     *
     * @return $this
     */
    public function setTaskOptionHttpResponseCharset($taskOptionHttpResponseCharset)
    {
        $this->requestParameters['TaskOptionHttpResponseCharset'] = $taskOptionHttpResponseCharset;
        $this->queryParameters['TaskOption.HttpResponseCharset'] = $taskOptionHttpResponseCharset;

        return $this;
    }

    /**
     * @param string $alertConfigEndTime
     *
     * @return $this
     */
    public function setAlertConfigEndTime($alertConfigEndTime)
    {
        $this->requestParameters['AlertConfigEndTime'] = $alertConfigEndTime;
        $this->queryParameters['AlertConfig.EndTime'] = $alertConfigEndTime;

        return $this;
    }

    /**
     * @param string $taskOptionHttpURI
     *
     * @return $this
     */
    public function setTaskOptionHttpURI($taskOptionHttpURI)
    {
        $this->requestParameters['TaskOptionHttpURI'] = $taskOptionHttpURI;
        $this->queryParameters['TaskOption.HttpURI'] = $taskOptionHttpURI;

        return $this;
    }

    /**
     * @param string $taskOptionHttpNegative
     *
     * @return $this
     */
    public function setTaskOptionHttpNegative($taskOptionHttpNegative)
    {
        $this->requestParameters['TaskOptionHttpNegative'] = $taskOptionHttpNegative;
        $this->queryParameters['TaskOption.HttpNegative'] = $taskOptionHttpNegative;

        return $this;
    }

    /**
     * @param string $taskScope
     *
     * @return $this
     */
    public function setTaskScope($taskScope)
    {
        $this->requestParameters['TaskScope'] = $taskScope;
        $this->queryParameters['TaskScope'] = $taskScope;

        return $this;
    }

    /**
     * @param string $alertConfigNotifyType
     *
     * @return $this
     */
    public function setAlertConfigNotifyType($alertConfigNotifyType)
    {
        $this->requestParameters['AlertConfigNotifyType'] = $alertConfigNotifyType;
        $this->queryParameters['AlertConfig.NotifyType'] = $alertConfigNotifyType;

        return $this;
    }

    /**
     * @param string $alertConfigStartTime
     *
     * @return $this
     */
    public function setAlertConfigStartTime($alertConfigStartTime)
    {
        $this->requestParameters['AlertConfigStartTime'] = $alertConfigStartTime;
        $this->queryParameters['AlertConfig.StartTime'] = $alertConfigStartTime;

        return $this;
    }

    /**
     * @param string $taskOptionTelnetOrPingHost
     *
     * @return $this
     */
    public function setTaskOptionTelnetOrPingHost($taskOptionTelnetOrPingHost)
    {
        $this->requestParameters['TaskOptionTelnetOrPingHost'] = $taskOptionTelnetOrPingHost;
        $this->queryParameters['TaskOption.TelnetOrPingHost'] = $taskOptionTelnetOrPingHost;

        return $this;
    }

    /**
     * @param string $taskOptionHttpResponseMatchContent
     *
     * @return $this
     */
    public function setTaskOptionHttpResponseMatchContent($taskOptionHttpResponseMatchContent)
    {
        $this->requestParameters['TaskOptionHttpResponseMatchContent'] = $taskOptionHttpResponseMatchContent;
        $this->queryParameters['TaskOption.HttpResponseMatchContent'] = $taskOptionHttpResponseMatchContent;

        return $this;
    }

    /**
     * @param string $alertConfigWebHook
     *
     * @return $this
     */
    public function setAlertConfigWebHook($alertConfigWebHook)
    {
        $this->requestParameters['AlertConfigWebHook'] = $alertConfigWebHook;
        $this->queryParameters['AlertConfig.WebHook'] = $alertConfigWebHook;

        return $this;
    }
}
