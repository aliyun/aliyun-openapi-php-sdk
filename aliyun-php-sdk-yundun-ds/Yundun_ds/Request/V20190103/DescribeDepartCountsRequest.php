<?php

namespace Yundun_ds\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDepartCounts
 *
 * @method string getTypeCode()
 * @method string getDepartName()
 * @method string getSourceIp()
 * @method string getFeatureType()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getLang()
 */
class DescribeDepartCountsRequest extends \RpcAcsRequest
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
            'DescribeDepartCounts',
            'sddp'
        );
    }

    /**
     * @param string $typeCode
     *
     * @return $this
     */
    public function setTypeCode($typeCode)
    {
        $this->requestParameters['TypeCode'] = $typeCode;
        $this->queryParameters['TypeCode'] = $typeCode;

        return $this;
    }

    /**
     * @param string $departName
     *
     * @return $this
     */
    public function setDepartName($departName)
    {
        $this->requestParameters['DepartName'] = $departName;
        $this->queryParameters['DepartName'] = $departName;

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
}
