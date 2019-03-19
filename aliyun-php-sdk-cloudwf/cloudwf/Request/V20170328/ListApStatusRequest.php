<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListApStatus
 *
 * @method string getOrderCol()
 * @method string getSearchName()
 * @method string getSearchGroupName()
 * @method string getSearchStatus()
 * @method string getSearchWanIp()
 * @method string getSearchApModelName()
 * @method string getLength()
 * @method string getOrderDir()
 * @method string getSearchBssEquals()
 * @method string getSearchSwVersion()
 * @method string getSearchCompanyName()
 * @method string getSearchMac()
 * @method string getPageIndex()
 */
class ListApStatusRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'ListApStatus',
            'cloudwf'
        );
    }

    /**
     * @param string $orderCol
     *
     * @return $this
     */
    public function setOrderCol($orderCol)
    {
        $this->requestParameters['OrderCol'] = $orderCol;
        $this->queryParameters['OrderCol'] = $orderCol;

        return $this;
    }

    /**
     * @param string $searchName
     *
     * @return $this
     */
    public function setSearchName($searchName)
    {
        $this->requestParameters['SearchName'] = $searchName;
        $this->queryParameters['SearchName'] = $searchName;

        return $this;
    }

    /**
     * @param string $searchGroupName
     *
     * @return $this
     */
    public function setSearchGroupName($searchGroupName)
    {
        $this->requestParameters['SearchGroupName'] = $searchGroupName;
        $this->queryParameters['SearchGroupName'] = $searchGroupName;

        return $this;
    }

    /**
     * @param string $searchStatus
     *
     * @return $this
     */
    public function setSearchStatus($searchStatus)
    {
        $this->requestParameters['SearchStatus'] = $searchStatus;
        $this->queryParameters['SearchStatus'] = $searchStatus;

        return $this;
    }

    /**
     * @param string $searchWanIp
     *
     * @return $this
     */
    public function setSearchWanIp($searchWanIp)
    {
        $this->requestParameters['SearchWanIp'] = $searchWanIp;
        $this->queryParameters['SearchWanIp'] = $searchWanIp;

        return $this;
    }

    /**
     * @param string $searchApModelName
     *
     * @return $this
     */
    public function setSearchApModelName($searchApModelName)
    {
        $this->requestParameters['SearchApModelName'] = $searchApModelName;
        $this->queryParameters['SearchApModelName'] = $searchApModelName;

        return $this;
    }

    /**
     * @param string $length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->requestParameters['Length'] = $length;
        $this->queryParameters['Length'] = $length;

        return $this;
    }

    /**
     * @param string $orderDir
     *
     * @return $this
     */
    public function setOrderDir($orderDir)
    {
        $this->requestParameters['OrderDir'] = $orderDir;
        $this->queryParameters['OrderDir'] = $orderDir;

        return $this;
    }

    /**
     * @param string $searchBssEquals
     *
     * @return $this
     */
    public function setSearchBssEquals($searchBssEquals)
    {
        $this->requestParameters['SearchBssEquals'] = $searchBssEquals;
        $this->queryParameters['SearchBssEquals'] = $searchBssEquals;

        return $this;
    }

    /**
     * @param string $searchSwVersion
     *
     * @return $this
     */
    public function setSearchSwVersion($searchSwVersion)
    {
        $this->requestParameters['SearchSwVersion'] = $searchSwVersion;
        $this->queryParameters['SearchSwVersion'] = $searchSwVersion;

        return $this;
    }

    /**
     * @param string $searchCompanyName
     *
     * @return $this
     */
    public function setSearchCompanyName($searchCompanyName)
    {
        $this->requestParameters['SearchCompanyName'] = $searchCompanyName;
        $this->queryParameters['SearchCompanyName'] = $searchCompanyName;

        return $this;
    }

    /**
     * @param string $searchMac
     *
     * @return $this
     */
    public function setSearchMac($searchMac)
    {
        $this->requestParameters['SearchMac'] = $searchMac;
        $this->queryParameters['SearchMac'] = $searchMac;

        return $this;
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        $this->requestParameters['PageIndex'] = $pageIndex;
        $this->queryParameters['PageIndex'] = $pageIndex;

        return $this;
    }
}
