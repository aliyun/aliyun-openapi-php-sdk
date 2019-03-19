<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListPageConfigTemplate
 *
 * @method string getLength()
 * @method string getPageIndex()
 * @method string getSearchTempName()
 */
class ListPageConfigTemplateRequest extends \RpcAcsRequest
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
            'ListPageConfigTemplate',
            'cloudwf'
        );
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
