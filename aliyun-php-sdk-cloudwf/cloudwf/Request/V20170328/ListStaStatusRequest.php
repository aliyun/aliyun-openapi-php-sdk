<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListStaStatus
 *
 * @method string getOrderCol()
 * @method string getSearchGroupName()
 * @method string getSearchStatus()
 * @method string getLength()
 * @method string getSearchUsername()
 * @method string getOrderDir()
 * @method string getSearchProtocal()
 * @method string getSearchSsid()
 * @method string getSearchApName()
 * @method string getSearchIp()
 * @method string getPageIndex()
 * @method string getSearchMac()
 * @method string getSearchDescription()
 */
class ListStaStatusRequest extends \RpcAcsRequest
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
            'ListStaStatus',
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
     * @param string $searchUsername
     *
     * @return $this
     */
    public function setSearchUsername($searchUsername)
    {
        $this->requestParameters['SearchUsername'] = $searchUsername;
        $this->queryParameters['SearchUsername'] = $searchUsername;

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
     * @param string $searchProtocal
     *
     * @return $this
     */
    public function setSearchProtocal($searchProtocal)
    {
        $this->requestParameters['SearchProtocal'] = $searchProtocal;
        $this->queryParameters['SearchProtocal'] = $searchProtocal;

        return $this;
    }

    /**
     * @param string $searchSsid
     *
     * @return $this
     */
    public function setSearchSsid($searchSsid)
    {
        $this->requestParameters['SearchSsid'] = $searchSsid;
        $this->queryParameters['SearchSsid'] = $searchSsid;

        return $this;
    }

    /**
     * @param string $searchApName
     *
     * @return $this
     */
    public function setSearchApName($searchApName)
    {
        $this->requestParameters['SearchApName'] = $searchApName;
        $this->queryParameters['SearchApName'] = $searchApName;

        return $this;
    }

    /**
     * @param string $searchIp
     *
     * @return $this
     */
    public function setSearchIp($searchIp)
    {
        $this->requestParameters['SearchIp'] = $searchIp;
        $this->queryParameters['SearchIp'] = $searchIp;

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
     * @param string $searchDescription
     *
     * @return $this
     */
    public function setSearchDescription($searchDescription)
    {
        $this->requestParameters['SearchDescription'] = $searchDescription;
        $this->queryParameters['SearchDescription'] = $searchDescription;

        return $this;
    }
}
