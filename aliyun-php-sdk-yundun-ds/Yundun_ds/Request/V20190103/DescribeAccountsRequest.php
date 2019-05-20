<?php

namespace Yundun_ds\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeAccounts
 *
 * @method string getProductCode()
 * @method string getLoginName()
 * @method string getFeatureType()
 * @method string getColumnId()
 * @method string getPackageId()
 * @method string getCurrentPage()
 * @method string getInstanceId()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getDepartId()
 * @method string getOperationId()
 * @method string getTableId()
 * @method string getLang()
 * @method string getKey()
 * @method string getQueryType()
 */
class DescribeAccountsRequest extends \RpcAcsRequest
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
            'DescribeAccounts',
            'sddp'
        );
    }

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        $this->requestParameters['ProductCode'] = $productCode;
        $this->queryParameters['ProductCode'] = $productCode;

        return $this;
    }

    /**
     * @param string $loginName
     *
     * @return $this
     */
    public function setLoginName($loginName)
    {
        $this->requestParameters['LoginName'] = $loginName;
        $this->queryParameters['LoginName'] = $loginName;

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
     * @param string $columnId
     *
     * @return $this
     */
    public function setColumnId($columnId)
    {
        $this->requestParameters['ColumnId'] = $columnId;
        $this->queryParameters['ColumnId'] = $columnId;

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
     * @param string $departId
     *
     * @return $this
     */
    public function setDepartId($departId)
    {
        $this->requestParameters['DepartId'] = $departId;
        $this->queryParameters['DepartId'] = $departId;

        return $this;
    }

    /**
     * @param string $operationId
     *
     * @return $this
     */
    public function setOperationId($operationId)
    {
        $this->requestParameters['OperationId'] = $operationId;
        $this->queryParameters['OperationId'] = $operationId;

        return $this;
    }

    /**
     * @param string $tableId
     *
     * @return $this
     */
    public function setTableId($tableId)
    {
        $this->requestParameters['TableId'] = $tableId;
        $this->queryParameters['TableId'] = $tableId;

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
     * @param string $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->requestParameters['Key'] = $key;
        $this->queryParameters['Key'] = $key;

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
