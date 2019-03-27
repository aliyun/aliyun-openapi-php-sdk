<?php

namespace ivision\Request\V20190308;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeStreamPredictResult
 *
 * @method string getNextPageToken()
 * @method string getStartTime()
 * @method string getPredictId()
 * @method string getPageSize()
 * @method string getProbabilityThreshold()
 * @method string getShowLog()
 * @method string getModelId()
 * @method string getEndTime()
 * @method string getCurrentPage()
 * @method string getOwnerId()
 */
class DescribeStreamPredictResultRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ivision',
            '2019-03-08',
            'DescribeStreamPredictResult',
            'ivision'
        );
    }

    /**
     * @param string $nextPageToken
     *
     * @return $this
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->requestParameters['NextPageToken'] = $nextPageToken;
        $this->queryParameters['NextPageToken'] = $nextPageToken;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $predictId
     *
     * @return $this
     */
    public function setPredictId($predictId)
    {
        $this->requestParameters['PredictId'] = $predictId;
        $this->queryParameters['PredictId'] = $predictId;

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
     * @param string $probabilityThreshold
     *
     * @return $this
     */
    public function setProbabilityThreshold($probabilityThreshold)
    {
        $this->requestParameters['ProbabilityThreshold'] = $probabilityThreshold;
        $this->queryParameters['ProbabilityThreshold'] = $probabilityThreshold;

        return $this;
    }

    /**
     * @param string $showLog
     *
     * @return $this
     */
    public function setShowLog($showLog)
    {
        $this->requestParameters['ShowLog'] = $showLog;
        $this->queryParameters['ShowLog'] = $showLog;

        return $this;
    }

    /**
     * @param string $modelId
     *
     * @return $this
     */
    public function setModelId($modelId)
    {
        $this->requestParameters['ModelId'] = $modelId;
        $this->queryParameters['ModelId'] = $modelId;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
