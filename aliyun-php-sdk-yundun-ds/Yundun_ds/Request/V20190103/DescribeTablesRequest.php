<?php

namespace Yundun_ds\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeTables
 *
 * @method string getProductId()
 * @method string getFeatureType()
 * @method string getPackageId()
 * @method string getCurrentPage()
 * @method string getQueryName()
 * @method string getRiskLevelId()
 * @method string getInstanceId()
 * @method string getSourceIp()
 * @method string getName()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getRuleId()
 * @method string getQueryType()
 */
class DescribeTablesRequest extends \RpcAcsRequest
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
            'Yundun-ds',
            '2019-01-03',
            'DescribeTables',
            'sddp'
        );
    }

    /**
     * @param string $productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->requestParameters['ProductId'] = $productId;
        $this->queryParameters['ProductId'] = $productId;

        return $this;
    }

    /**
     * @param string $featureType
     *
     * @return $this
     */
    public function setFeatureType($featureType)
    {
        $this->requestParameters['FeatureType'] = $featureType;
        $this->queryParameters['FeatureType'] = $featureType;

        return $this;
    }

    /**
     * @param string $packageId
     *
     * @return $this
     */
    public function setPackageId($packageId)
    {
        $this->requestParameters['PackageId'] = $packageId;
        $this->queryParameters['PackageId'] = $packageId;

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
     * @param string $queryName
     *
     * @return $this
     */
    public function setQueryName($queryName)
    {
        $this->requestParameters['QueryName'] = $queryName;
        $this->queryParameters['QueryName'] = $queryName;

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

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
     * @param string $queryType
     *
     * @return $this
     */
    public function setQueryType($queryType)
    {
        $this->requestParameters['QueryType'] = $queryType;
        $this->queryParameters['QueryType'] = $queryType;

        return $this;
    }
}
