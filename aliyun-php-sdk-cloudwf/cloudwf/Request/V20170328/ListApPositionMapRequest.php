<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListApPositionMap
 *
 * @method string getOrderCol()
 * @method string getSearchName()
 * @method string getTotalItem()
 * @method string getLength()
 * @method string getMapType()
 * @method string getPageIndex()
 * @method string getSearchApgroupName()
 * @method string getOrderDir()
 */
class ListApPositionMapRequest extends \RpcAcsRequest
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
            'ListApPositionMap',
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
     * @param string $totalItem
     *
     * @return $this
     */
    public function setTotalItem($totalItem)
    {
        $this->requestParameters['TotalItem'] = $totalItem;
        $this->queryParameters['TotalItem'] = $totalItem;

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
     * @param string $mapType
     *
     * @return $this
     */
    public function setMapType($mapType)
    {
        $this->requestParameters['MapType'] = $mapType;
        $this->queryParameters['MapType'] = $mapType;

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
     * @param string $searchApgroupName
     *
     * @return $this
     */
    public function setSearchApgroupName($searchApgroupName)
    {
        $this->requestParameters['SearchApgroupName'] = $searchApgroupName;
        $this->queryParameters['SearchApgroupName'] = $searchApgroupName;

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
