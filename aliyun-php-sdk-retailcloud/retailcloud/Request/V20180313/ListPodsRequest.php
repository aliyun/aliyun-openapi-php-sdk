<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListPods
 *
 * @method array getStatusLists()
 * @method string getDeployOrderId()
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method array getResultLists()
 */
class ListPodsRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'ListPods',
            'retailcloud'
        );
    }

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function setStatusLists(array $statusList)
	{
	    $this->requestParameters['StatusLists'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->queryParameters['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $deployOrderId
     *
     * @return $this
     */
    public function setDeployOrderId($deployOrderId)
    {
        $this->requestParameters['DeployOrderId'] = $deployOrderId;
        $this->queryParameters['DeployOrderId'] = $deployOrderId;

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

    /**
     * @param array $resultList
     *
     * @return $this
     */
	public function setResultLists(array $resultList)
	{
	    $this->requestParameters['ResultLists'] = $resultList;
		foreach ($resultList as $i => $iValue) {
			$this->queryParameters['ResultList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
