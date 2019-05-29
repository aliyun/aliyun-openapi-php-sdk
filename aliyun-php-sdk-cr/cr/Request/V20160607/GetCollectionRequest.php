<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetCollection
 *
 * @method string getPageSize()
 * @method string getPage()
 */
class GetCollectionRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/collections';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetCollection',
            'cr'
        );
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
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->requestParameters['Page'] = $page;
        $this->queryParameters['Page'] = $page;

        return $this;
    }
}
