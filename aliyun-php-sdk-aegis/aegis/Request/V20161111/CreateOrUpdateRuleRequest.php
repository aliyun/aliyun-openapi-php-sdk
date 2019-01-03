<?php

namespace aegis\Request\V20161111;

/**
 * Request of CreateOrUpdateRule
 *
 * @method string getWarnLevel()
 * @method string getSourceIp()
 * @method string getDataSourceId()
 * @method string getDescription()
 * @method string getRuleName()
 * @method string getId()
 * @method string getLang()
 * @method string getExpressions()
 * @method string getRuleGroupIds()
 */
class CreateOrUpdateRuleRequest extends \RpcAcsRequest
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
            'CreateOrUpdateRule',
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
     * @param string $dataSourceId
     *
     * @return $this
     */
    public function setDataSourceId($dataSourceId)
    {
        $this->requestParameters['DataSourceId'] = $dataSourceId;
        $this->queryParameters['DataSourceId'] = $dataSourceId;

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
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $expressions
     *
     * @return $this
     */
    public function setExpressions($expressions)
    {
        $this->requestParameters['Expressions'] = $expressions;
        $this->queryParameters['Expressions'] = $expressions;

        return $this;
    }

    /**
     * @param string $ruleGroupIds
     *
     * @return $this
     */
    public function setRuleGroupIds($ruleGroupIds)
    {
        $this->requestParameters['RuleGroupIds'] = $ruleGroupIds;
        $this->queryParameters['RuleGroupIds'] = $ruleGroupIds;

        return $this;
    }
}
