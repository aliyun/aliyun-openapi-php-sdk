<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListPortalTemplate
 *
 * @method string getOrderCol()
 * @method string getLength()
 * @method string getPageIndex()
 * @method string getOrderDir()
 * @method string getSearchTempName()
 */
class ListPortalTemplateRequest extends \RpcAcsRequest
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
            'ListPortalTemplate',
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
     * @param string $searchTempName
     *
     * @return $this
     */
    public function setSearchTempName($searchTempName)
    {
        $this->requestParameters['SearchTempName'] = $searchTempName;
        $this->queryParameters['SearchTempName'] = $searchTempName;

        return $this;
    }
}
