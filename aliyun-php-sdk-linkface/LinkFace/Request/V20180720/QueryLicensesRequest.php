<?php

namespace LinkFace\Request\V20180720;

/**
 * Request of QueryLicenses
 *
 * @method string getLicenseType()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class QueryLicensesRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'LinkFace',
            '2018-07-20',
            'QueryLicenses'
        );
    }

    /**
     * @param string $licenseType
     *
     * @return $this
     */
    public function setLicenseType($licenseType)
    {
        $this->requestParameters['LicenseType'] = $licenseType;
        $this->queryParameters['LicenseType'] = $licenseType;

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
