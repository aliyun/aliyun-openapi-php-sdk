<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeProducts
 *
 * @method array getFilters()
 * @method string getSearchTerm()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class DescribeProductsRequest extends \RpcAcsRequest
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
            'Market',
            '2015-11-01',
            'DescribeProducts',
            'yunmarket'
        );
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function setFilters(array $filter)
	{
	    $this->requestParameters['Filters'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			$this->queryParameters['Filter.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->queryParameters['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
		}

		return $this;
    }

    /**
     * @param string $searchTerm
     *
     * @return $this
     */
    public function setSearchTerm($searchTerm)
    {
        $this->requestParameters['SearchTerm'] = $searchTerm;
        $this->queryParameters['SearchTerm'] = $searchTerm;

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
