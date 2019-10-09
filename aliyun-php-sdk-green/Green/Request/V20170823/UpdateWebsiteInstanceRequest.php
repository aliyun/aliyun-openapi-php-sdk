<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateWebsiteInstance
 *
 * @method string getIndexPage()
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getWebsiteScanInterval()
 * @method string getSiteProtocol()
 * @method string getInstanceId()
 * @method string getDomain()
 * @method string getIndexPageScanInterval()
 */
class UpdateWebsiteInstanceRequest extends \RpcAcsRequest
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
            'UpdateWebsiteInstance',
            'green'
        );
    }

    /**
     * @param string $indexPage
     *
     * @return $this
     */
    public function setIndexPage($indexPage)
    {
        $this->requestParameters['IndexPage'] = $indexPage;
        $this->queryParameters['IndexPage'] = $indexPage;

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
     * @param string $websiteScanInterval
     *
     * @return $this
     */
    public function setWebsiteScanInterval($websiteScanInterval)
    {
        $this->requestParameters['WebsiteScanInterval'] = $websiteScanInterval;
        $this->queryParameters['WebsiteScanInterval'] = $websiteScanInterval;

        return $this;
    }

    /**
     * @param string $siteProtocol
     *
     * @return $this
     */
    public function setSiteProtocol($siteProtocol)
    {
        $this->requestParameters['SiteProtocol'] = $siteProtocol;
        $this->queryParameters['SiteProtocol'] = $siteProtocol;

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

    /**
     * @param string $indexPageScanInterval
     *
     * @return $this
     */
    public function setIndexPageScanInterval($indexPageScanInterval)
    {
        $this->requestParameters['IndexPageScanInterval'] = $indexPageScanInterval;
        $this->queryParameters['IndexPageScanInterval'] = $indexPageScanInterval;

        return $this;
    }
}
