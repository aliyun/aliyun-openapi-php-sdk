<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOrUpdateJoinRule
 *
 * @method string getWarnLevel()
 * @method string getDataSourceId2()
 * @method string getDataSourceId1()
 * @method string getTimeWindow()
 * @method string getDescription()
 * @method string getRuleName()
 * @method string getExpression2()
 * @method string getExpression1()
 * @method string getSourceIp()
 * @method string getStatisticsRules()
 * @method string getJoinRelation()
 * @method string getRuleId()
 * @method string getActions()
 */
class CreateOrUpdateJoinRuleRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'CreateOrUpdateJoinRule',
            'vipaegis'
        );
    }

    /**
     * @param string $warnLevel
     *
     * @return $this
     */
    public function setWarnLevel($warnLevel)
    {
        $this->requestParameters['WarnLevel'] = $warnLevel;
        $this->queryParameters['WarnLevel'] = $warnLevel;

        return $this;
    }

    /**
     * @param string $dataSourceId2
     *
     * @return $this
     */
    public function setDataSourceId2($dataSourceId2)
    {
        $this->requestParameters['DataSourceId2'] = $dataSourceId2;
        $this->queryParameters['DataSourceId2'] = $dataSourceId2;

        return $this;
    }

    /**
     * @param string $dataSourceId1
     *
     * @return $this
     */
    public function setDataSourceId1($dataSourceId1)
    {
        $this->requestParameters['DataSourceId1'] = $dataSourceId1;
        $this->queryParameters['DataSourceId1'] = $dataSourceId1;

        return $this;
    }

    /**
     * @param string $timeWindow
     *
     * @return $this
     */
    public function setTimeWindow($timeWindow)
    {
        $this->requestParameters['TimeWindow'] = $timeWindow;
        $this->queryParameters['TimeWindow'] = $timeWindow;

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
     * @param string $expression2
     *
     * @return $this
     */
    public function setExpression2($expression2)
    {
        $this->requestParameters['Expression2'] = $expression2;
        $this->queryParameters['Expression2'] = $expression2;

        return $this;
    }

    /**
     * @param string $expression1
     *
     * @return $this
     */
    public function setExpression1($expression1)
    {
        $this->requestParameters['Expression1'] = $expression1;
        $this->queryParameters['Expression1'] = $expression1;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $statisticsRules
     *
     * @return $this
     */
    public function setStatisticsRules($statisticsRules)
    {
        $this->requestParameters['StatisticsRules'] = $statisticsRules;
        $this->queryParameters['StatisticsRules'] = $statisticsRules;

        return $this;
    }

    /**
     * @param string $joinRelation
     *
     * @return $this
     */
    public function setJoinRelation($joinRelation)
    {
        $this->requestParameters['JoinRelation'] = $joinRelation;
        $this->queryParameters['JoinRelation'] = $joinRelation;

        return $this;
    }

    /**
     * @param string $ruleId
     *
     * @return $this
     */
    public function setRuleId($ruleId)
    {
        $this->requestParameters['RuleId'] = $ruleId;
        $this->queryParameters['RuleId'] = $ruleId;

        return $this;
    }

    /**
     * @param string $actions
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->requestParameters['Actions'] = $actions;
        $this->queryParameters['Actions'] = $actions;

        return $this;
    }
}
