<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QuerySpeechModelPushJob
 *
 * @method array getStatusLists()
 * @method string getProjectCode()
 * @method string getPageId()
 * @method string getPageSize()
 * @method string getPushMode()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class QuerySpeechModelPushJobRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'QuerySpeechModelPushJob',
            'iot'
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
     * @param string $projectCode
     *
     * @return $this
     */
    public function setProjectCode($projectCode)
    {
        $this->requestParameters['ProjectCode'] = $projectCode;
        $this->queryParameters['ProjectCode'] = $projectCode;

        return $this;
    }

    /**
     * @param string $pageId
     *
     * @return $this
     */
    public function setPageId($pageId)
    {
        $this->requestParameters['PageId'] = $pageId;
        $this->queryParameters['PageId'] = $pageId;

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
     * @param string $pushMode
     *
     * @return $this
     */
    public function setPushMode($pushMode)
    {
        $this->requestParameters['PushMode'] = $pushMode;
        $this->queryParameters['PushMode'] = $pushMode;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }
}
