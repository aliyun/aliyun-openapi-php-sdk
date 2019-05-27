<?php

namespace Sddp\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeRules
 *
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getName()
 * @method string getCurrentPage()
 * @method string getRiskLevelId()
 * @method string getLang()
 * @method string getCustomType()
 * @method string getCategory()
 */
class DescribeRulesRequest extends \RpcAcsRequest
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
            'Sddp',
            '2019-01-03',
            'DescribeRules',
            'sddp'
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
     * @param string $riskLevelId
     *
     * @return $this
     */
    public function setRiskLevelId($riskLevelId)
    {
        $this->requestParameters['RiskLevelId'] = $riskLevelId;
        $this->queryParameters['RiskLevelId'] = $riskLevelId;

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
     * @param string $customType
     *
     * @return $this
     */
    public function setCustomType($customType)
    {
        $this->requestParameters['CustomType'] = $customType;
        $this->queryParameters['CustomType'] = $customType;

        return $this;
    }

    /**
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->requestParameters['Category'] = $category;
        $this->queryParameters['Category'] = $category;

        return $this;
    }
}
