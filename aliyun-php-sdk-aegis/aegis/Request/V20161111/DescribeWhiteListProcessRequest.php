<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeWhiteListProcess
 *
 * @method string getSourceIp()
 * @method string getProcessName()
 * @method string getPageSize()
 * @method string getProcessType()
 * @method string getOrderBy()
 * @method string getStrategyId()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getDesc()
 */
class DescribeWhiteListProcessRequest extends \RpcAcsRequest
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
            'DescribeWhiteListProcess',
            'vipaegis'
        );
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
     * @param string $processName
     *
     * @return $this
     */
    public function setProcessName($processName)
    {
        $this->requestParameters['ProcessName'] = $processName;
        $this->queryParameters['ProcessName'] = $processName;

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
     * @param string $processType
     *
     * @return $this
     */
    public function setProcessType($processType)
    {
        $this->requestParameters['ProcessType'] = $processType;
        $this->queryParameters['ProcessType'] = $processType;

        return $this;
    }

    /**
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->requestParameters['OrderBy'] = $orderBy;
        $this->queryParameters['OrderBy'] = $orderBy;

        return $this;
    }

    /**
     * @param string $strategyId
     *
     * @return $this
     */
    public function setStrategyId($strategyId)
    {
        $this->requestParameters['StrategyId'] = $strategyId;
        $this->queryParameters['StrategyId'] = $strategyId;

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
     * @param string $desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->requestParameters['Desc'] = $desc;
        $this->queryParameters['Desc'] = $desc;

        return $this;
    }
}
