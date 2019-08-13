<?php

namespace ARMS\Request\V20190808;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SearchRetcodeAppByPage
 *
 * @method string getRetcodeAppName()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class SearchRetcodeAppByPageRequest extends \RpcAcsRequest
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
            'SearchRetcodeAppByPage',
            'arms'
        );
    }

    /**
     * @param string $retcodeAppName
     *
     * @return $this
     */
    public function setRetcodeAppName($retcodeAppName)
    {
        $this->requestParameters['RetcodeAppName'] = $retcodeAppName;
        $this->queryParameters['RetcodeAppName'] = $retcodeAppName;

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
