<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListApRadioStatus
 *
 * @method string getSearchDisabled()
 * @method string getOrderCol()
 * @method string getSearchName()
 * @method string getSearchChannelEquals()
 * @method string getLength()
 * @method string getSearchMac()
 * @method string getSearchApgroupName()
 * @method string getPageIndex()
 * @method string getOrderDir()
 * @method string getSearchApStatus()
 */
class ListApRadioStatusRequest extends \RpcAcsRequest
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
            'ListApRadioStatus',
            'cloudwf'
        );
    }

    /**
     * @param string $searchDisabled
     *
     * @return $this
     */
    public function setSearchDisabled($searchDisabled)
    {
        $this->requestParameters['SearchDisabled'] = $searchDisabled;
        $this->queryParameters['SearchDisabled'] = $searchDisabled;

        return $this;
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
     * @param string $searchChannelEquals
     *
     * @return $this
     */
    public function setSearchChannelEquals($searchChannelEquals)
    {
        $this->requestParameters['SearchChannelEquals'] = $searchChannelEquals;
        $this->queryParameters['SearchChannelEquals'] = $searchChannelEquals;

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

    /**
     * @param string $searchApStatus
     *
     * @return $this
     */
    public function setSearchApStatus($searchApStatus)
    {
        $this->requestParameters['SearchApStatus'] = $searchApStatus;
        $this->queryParameters['SearchApStatus'] = $searchApStatus;

        return $this;
    }
}
