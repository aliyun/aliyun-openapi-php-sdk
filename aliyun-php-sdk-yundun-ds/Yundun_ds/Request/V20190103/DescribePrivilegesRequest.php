<?php

namespace Yundun_ds\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribePrivileges
 *
 * @method string getAccountId()
 * @method string getUseAccountId()
 * @method string getDataTypeIds()
 * @method string getSourceIp()
 * @method string getFeatureType()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getKey()
 */
class DescribePrivilegesRequest extends \RpcAcsRequest
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
            'DescribePrivileges',
            'sddp'
        );
    }

    /**
     * @param string $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->requestParameters['AccountId'] = $accountId;
        $this->queryParameters['AccountId'] = $accountId;

        return $this;
    }

    /**
     * @param string $useAccountId
     *
     * @return $this
     */
    public function setUseAccountId($useAccountId)
    {
        $this->requestParameters['UseAccountId'] = $useAccountId;
        $this->queryParameters['UseAccountId'] = $useAccountId;

        return $this;
    }

    /**
     * @param string $dataTypeIds
     *
     * @return $this
     */
    public function setDataTypeIds($dataTypeIds)
    {
        $this->requestParameters['DataTypeIds'] = $dataTypeIds;
        $this->queryParameters['DataTypeIds'] = $dataTypeIds;

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
}
