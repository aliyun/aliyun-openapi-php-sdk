<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListDeployOrders
 *
 * @method string getStartTimeGreaterThanOrEqualTo()
 * @method array getStatusLists()
 * @method string getEnvId()
 * @method string getEndTimeGreaterThan()
 * @method string getPageNumber()
 * @method string getPauseType()
 * @method array getResultLists()
 * @method string getStartTimeGreaterThan()
 * @method string getStartTimeLessThan()
 * @method string getStartTimeLessThanOrEqualTo()
 * @method string getAppId()
 * @method string getEnvType()
 * @method string getPageSize()
 * @method string getEndTimeGreaterThanOrEqualTo()
 * @method string getEndTimeLessThan()
 * @method string getEndTimeLessThanOrEqualTo()
 * @method string getPartitionType()
 * @method string getDeployCategory()
 * @method string getDeployType()
 * @method string getStatus()
 */
class ListDeployOrdersRequest extends \RpcAcsRequest
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
            'ListDeployOrders',
            'retailcloud'
        );
    }

    /**
     * @param string $startTimeGreaterThanOrEqualTo
     *
     * @return $this
     */
    public function setStartTimeGreaterThanOrEqualTo($startTimeGreaterThanOrEqualTo)
    {
        $this->requestParameters['StartTimeGreaterThanOrEqualTo'] = $startTimeGreaterThanOrEqualTo;
        $this->queryParameters['StartTimeGreaterThanOrEqualTo'] = $startTimeGreaterThanOrEqualTo;

        return $this;
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
     * @param string $envId
     *
     * @return $this
     */
    public function setEnvId($envId)
    {
        $this->requestParameters['EnvId'] = $envId;
        $this->queryParameters['EnvId'] = $envId;

        return $this;
    }

    /**
     * @param string $endTimeGreaterThan
     *
     * @return $this
     */
    public function setEndTimeGreaterThan($endTimeGreaterThan)
    {
        $this->requestParameters['EndTimeGreaterThan'] = $endTimeGreaterThan;
        $this->queryParameters['EndTimeGreaterThan'] = $endTimeGreaterThan;

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
     * @param string $pauseType
     *
     * @return $this
     */
    public function setPauseType($pauseType)
    {
        $this->requestParameters['PauseType'] = $pauseType;
        $this->queryParameters['PauseType'] = $pauseType;

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

    /**
     * @param string $startTimeGreaterThan
     *
     * @return $this
     */
    public function setStartTimeGreaterThan($startTimeGreaterThan)
    {
        $this->requestParameters['StartTimeGreaterThan'] = $startTimeGreaterThan;
        $this->queryParameters['StartTimeGreaterThan'] = $startTimeGreaterThan;

        return $this;
    }

    /**
     * @param string $startTimeLessThan
     *
     * @return $this
     */
    public function setStartTimeLessThan($startTimeLessThan)
    {
        $this->requestParameters['StartTimeLessThan'] = $startTimeLessThan;
        $this->queryParameters['StartTimeLessThan'] = $startTimeLessThan;

        return $this;
    }

    /**
     * @param string $startTimeLessThanOrEqualTo
     *
     * @return $this
     */
    public function setStartTimeLessThanOrEqualTo($startTimeLessThanOrEqualTo)
    {
        $this->requestParameters['StartTimeLessThanOrEqualTo'] = $startTimeLessThanOrEqualTo;
        $this->queryParameters['StartTimeLessThanOrEqualTo'] = $startTimeLessThanOrEqualTo;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $envType
     *
     * @return $this
     */
    public function setEnvType($envType)
    {
        $this->requestParameters['EnvType'] = $envType;
        $this->queryParameters['EnvType'] = $envType;

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
     * @param string $endTimeGreaterThanOrEqualTo
     *
     * @return $this
     */
    public function setEndTimeGreaterThanOrEqualTo($endTimeGreaterThanOrEqualTo)
    {
        $this->requestParameters['EndTimeGreaterThanOrEqualTo'] = $endTimeGreaterThanOrEqualTo;
        $this->queryParameters['EndTimeGreaterThanOrEqualTo'] = $endTimeGreaterThanOrEqualTo;

        return $this;
    }

    /**
     * @param string $endTimeLessThan
     *
     * @return $this
     */
    public function setEndTimeLessThan($endTimeLessThan)
    {
        $this->requestParameters['EndTimeLessThan'] = $endTimeLessThan;
        $this->queryParameters['EndTimeLessThan'] = $endTimeLessThan;

        return $this;
    }

    /**
     * @param string $endTimeLessThanOrEqualTo
     *
     * @return $this
     */
    public function setEndTimeLessThanOrEqualTo($endTimeLessThanOrEqualTo)
    {
        $this->requestParameters['EndTimeLessThanOrEqualTo'] = $endTimeLessThanOrEqualTo;
        $this->queryParameters['EndTimeLessThanOrEqualTo'] = $endTimeLessThanOrEqualTo;

        return $this;
    }

    /**
     * @param string $partitionType
     *
     * @return $this
     */
    public function setPartitionType($partitionType)
    {
        $this->requestParameters['PartitionType'] = $partitionType;
        $this->queryParameters['PartitionType'] = $partitionType;

        return $this;
    }

    /**
     * @param string $deployCategory
     *
     * @return $this
     */
    public function setDeployCategory($deployCategory)
    {
        $this->requestParameters['DeployCategory'] = $deployCategory;
        $this->queryParameters['DeployCategory'] = $deployCategory;

        return $this;
    }

    /**
     * @param string $deployType
     *
     * @return $this
     */
    public function setDeployType($deployType)
    {
        $this->requestParameters['DeployType'] = $deployType;
        $this->queryParameters['DeployType'] = $deployType;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
