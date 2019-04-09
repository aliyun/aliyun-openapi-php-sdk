<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeMetricRuleList
 *
 * @method string getEnableState()
 * @method string getRuleIds()
 * @method string getGroupId()
 * @method string getNamespace()
 * @method string getPageSize()
 * @method string getAlertState()
 * @method string getRuleName()
 * @method string getPage()
 * @method string getMetricName()
 * @method string getDimensions()
 */
class DescribeMetricRuleListRequest extends \RpcAcsRequest
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
            'DescribeMetricRuleList',
            'cms'
        );
    }

    /**
     * @param string $enableState
     *
     * @return $this
     */
    public function setEnableState($enableState)
    {
        $this->requestParameters['EnableState'] = $enableState;
        $this->queryParameters['EnableState'] = $enableState;

        return $this;
    }

    /**
     * @param string $ruleIds
     *
     * @return $this
     */
    public function setRuleIds($ruleIds)
    {
        $this->requestParameters['RuleIds'] = $ruleIds;
        $this->queryParameters['RuleIds'] = $ruleIds;

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
     * @param string $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->requestParameters['Namespace'] = $namespace;
        $this->queryParameters['Namespace'] = $namespace;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $alertState
     *
     * @return $this
     */
    public function setAlertState($alertState)
    {
        $this->requestParameters['AlertState'] = $alertState;
        $this->queryParameters['AlertState'] = $alertState;

        return $this;
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        $this->requestParameters['RuleName'] = $ruleName;
        $this->queryParameters['RuleName'] = $ruleName;

        return $this;
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->requestParameters['Page'] = $page;
        $this->queryParameters['Page'] = $page;

        return $this;
    }

    /**
     * @param string $metricName
     *
     * @return $this
     */
    public function setMetricName($metricName)
    {
        $this->requestParameters['MetricName'] = $metricName;
        $this->queryParameters['MetricName'] = $metricName;

        return $this;
    }

    /**
     * @param string $dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->requestParameters['Dimensions'] = $dimensions;
        $this->queryParameters['Dimensions'] = $dimensions;

        return $this;
    }
}
