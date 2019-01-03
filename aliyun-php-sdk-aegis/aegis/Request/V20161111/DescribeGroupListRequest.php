<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeGroupList
 *
 * @method string getWarnLevel()
 * @method string getSourceIp()
 * @method string getRuleGroupId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getExGroupId()
 */
class DescribeGroupListRequest extends \RpcAcsRequest
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
            'DescribeGroupList',
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
     * @param string $ruleGroupId
     *
     * @return $this
     */
    public function setRuleGroupId($ruleGroupId)
    {
        $this->requestParameters['RuleGroupId'] = $ruleGroupId;
        $this->queryParameters['RuleGroupId'] = $ruleGroupId;

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
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

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
     * @param string $exGroupId
     *
     * @return $this
     */
    public function setExGroupId($exGroupId)
    {
        $this->requestParameters['ExGroupId'] = $exGroupId;
        $this->queryParameters['ExGroupId'] = $exGroupId;

        return $this;
    }
}
