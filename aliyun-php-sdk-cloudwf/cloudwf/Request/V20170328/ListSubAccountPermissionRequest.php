<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListSubAccountPermission
 *
 * @method string getSearchUid()
 * @method string getLength()
 * @method string getPageIndex()
 */
class ListSubAccountPermissionRequest extends \RpcAcsRequest
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
            'ListSubAccountPermission',
            'cloudwf'
        );
    }

    /**
     * @param string $searchUid
     *
     * @return $this
     */
    public function setSearchUid($searchUid)
    {
        $this->requestParameters['SearchUid'] = $searchUid;
        $this->queryParameters['SearchUid'] = $searchUid;

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
}
