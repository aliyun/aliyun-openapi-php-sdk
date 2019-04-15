<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeJoinRuleList
 *
 * @method string getWarnLevel()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getremark()
 * @method string getCurrentPage()
 */
class DescribeJoinRuleListRequest extends \RpcAcsRequest
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
            'DescribeJoinRuleList',
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
     * @param string $remark
     *
     * @return $this
     */
    public function setremark($remark)
    {
        $this->requestParameters['remark'] = $remark;
        $this->queryParameters['remark'] = $remark;

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
}
