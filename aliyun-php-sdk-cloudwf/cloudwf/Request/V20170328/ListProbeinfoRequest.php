<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListProbeinfo
 *
 * @method string getOrderCol()
 * @method string getSearchUserMac()
 * @method string getSearchSensorMac()
 * @method string getLength()
 * @method string getSearchSensorName()
 * @method string getPageIndex()
 * @method string getOrderDir()
 */
class ListProbeinfoRequest extends \RpcAcsRequest
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
            'ListProbeinfo',
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
     * @param string $searchUserMac
     *
     * @return $this
     */
    public function setSearchUserMac($searchUserMac)
    {
        $this->requestParameters['SearchUserMac'] = $searchUserMac;
        $this->queryParameters['SearchUserMac'] = $searchUserMac;

        return $this;
    }

    /**
     * @param string $searchSensorMac
     *
     * @return $this
     */
    public function setSearchSensorMac($searchSensorMac)
    {
        $this->requestParameters['SearchSensorMac'] = $searchSensorMac;
        $this->queryParameters['SearchSensorMac'] = $searchSensorMac;

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
     * @param string $searchSensorName
     *
     * @return $this
     */
    public function setSearchSensorName($searchSensorName)
    {
        $this->requestParameters['SearchSensorName'] = $searchSensorName;
        $this->queryParameters['SearchSensorName'] = $searchSensorName;

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
