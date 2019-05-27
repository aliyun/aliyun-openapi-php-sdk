<?php

namespace Sddp\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDataHubProjects
 *
 * @method string getSourceIp()
 * @method string getFeatureType()
 * @method string getPageSize()
 * @method string getDepartId()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getKey()
 * @method string getQueryType()
 */
class DescribeDataHubProjectsRequest extends \RpcAcsRequest
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
            'DescribeDataHubProjects',
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
