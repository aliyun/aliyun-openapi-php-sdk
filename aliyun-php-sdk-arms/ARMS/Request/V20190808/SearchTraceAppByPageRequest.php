<?php

namespace ARMS\Request\V20190808;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SearchTraceAppByPage
 *
 * @method string getTraceAppName()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class SearchTraceAppByPageRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-08-08',
            'SearchTraceAppByPage',
            'arms'
        );
    }

    /**
     * @param string $traceAppName
     *
     * @return $this
     */
    public function setTraceAppName($traceAppName)
    {
        $this->requestParameters['TraceAppName'] = $traceAppName;
        $this->queryParameters['TraceAppName'] = $traceAppName;

        return $this;
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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
