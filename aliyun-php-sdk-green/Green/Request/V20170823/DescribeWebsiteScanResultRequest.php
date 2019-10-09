<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeWebsiteScanResult
 *
 * @method string getSubServiceModule()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getTotalCount()
 * @method string getSiteUrl()
 * @method string getHandleStatus()
 * @method string getCurrentPage()
 * @method string getLabel()
 * @method string getDomain()
 */
class DescribeWebsiteScanResultRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'DescribeWebsiteScanResult',
            'green'
        );
    }

    /**
     * @param string $subServiceModule
     *
     * @return $this
     */
    public function setSubServiceModule($subServiceModule)
    {
        $this->requestParameters['SubServiceModule'] = $subServiceModule;
        $this->queryParameters['SubServiceModule'] = $subServiceModule;

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
     * @param string $totalCount
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->requestParameters['TotalCount'] = $totalCount;
        $this->queryParameters['TotalCount'] = $totalCount;

        return $this;
    }

    /**
     * @param string $siteUrl
     *
     * @return $this
     */
    public function setSiteUrl($siteUrl)
    {
        $this->requestParameters['SiteUrl'] = $siteUrl;
        $this->queryParameters['SiteUrl'] = $siteUrl;

        return $this;
    }

    /**
     * @param string $handleStatus
     *
     * @return $this
     */
    public function setHandleStatus($handleStatus)
    {
        $this->requestParameters['HandleStatus'] = $handleStatus;
        $this->queryParameters['HandleStatus'] = $handleStatus;

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
     * @param string $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->requestParameters['Label'] = $label;
        $this->queryParameters['Label'] = $label;

        return $this;
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->requestParameters['Domain'] = $domain;
        $this->queryParameters['Domain'] = $domain;

        return $this;
    }
}
