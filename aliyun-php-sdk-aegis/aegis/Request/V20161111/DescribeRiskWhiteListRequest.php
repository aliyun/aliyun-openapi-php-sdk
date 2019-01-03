<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeRiskWhiteList
 *
 * @method string getRiskName()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class DescribeRiskWhiteListRequest extends \RpcAcsRequest
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
            'DescribeRiskWhiteList',
            'vipaegis'
        );
    }

    /**
     * @param string $riskName
     *
     * @return $this
     */
    public function setRiskName($riskName)
    {
        $this->requestParameters['RiskName'] = $riskName;
        $this->queryParameters['RiskName'] = $riskName;

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
