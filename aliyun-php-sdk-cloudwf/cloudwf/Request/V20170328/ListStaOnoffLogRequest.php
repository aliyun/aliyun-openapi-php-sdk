<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListStaOnoffLog
 *
 * @method string getOrderCol()
 * @method string getSearchSsid()
 * @method string getSearchApName()
 * @method string getLength()
 * @method string getSearchUsername()
 * @method string getPageIndex()
 * @method string getId()
 * @method string getOrderDir()
 */
class ListStaOnoffLogRequest extends \RpcAcsRequest
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
            'ListStaOnoffLog',
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
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

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
}
