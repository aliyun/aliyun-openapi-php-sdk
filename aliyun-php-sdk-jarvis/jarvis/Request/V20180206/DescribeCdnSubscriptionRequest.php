<?php

namespace jarvis\Request\V20180206;

/**
 * Request of DescribeCdnSubscription
 *
 * @method string getSourceIp()
 * @method string getSubscriptionState()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getVendorName()
 * @method string getSourceCode()
 */
class DescribeCdnSubscriptionRequest extends \RpcAcsRequest
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
            'jarvis',
            '2018-02-06',
            'DescribeCdnSubscription',
            'jarvis'
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
     * @param string $subscriptionState
     *
     * @return $this
     */
    public function setSubscriptionState($subscriptionState)
    {
        $this->requestParameters['SubscriptionState'] = $subscriptionState;
        $this->queryParameters['SubscriptionState'] = $subscriptionState;

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
     * @param string $vendorName
     *
     * @return $this
     */
    public function setVendorName($vendorName)
    {
        $this->requestParameters['VendorName'] = $vendorName;
        $this->queryParameters['VendorName'] = $vendorName;

        return $this;
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        $this->requestParameters['SourceCode'] = $sourceCode;
        $this->queryParameters['SourceCode'] = $sourceCode;

        return $this;
    }
}
