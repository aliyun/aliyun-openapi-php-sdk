<?php

namespace ivision\Request\V20190308;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribePredictDatas
 *
 * @method string getNextPageToken()
 * @method string getPageSize()
 * @method string getProbabilityThreshold()
 * @method string getOverlapThreshold()
 * @method string getProjectId()
 * @method string getShowLog()
 * @method string getModelId()
 * @method string getTagId()
 * @method string getCurrentPage()
 * @method string getOwnerId()
 * @method string getIterationId()
 */
class DescribePredictDatasRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'ivision',
            '2019-03-08',
            'DescribePredictDatas',
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
     * @param string $overlapThreshold
     *
     * @return $this
     */
    public function setOverlapThreshold($overlapThreshold)
    {
        $this->requestParameters['OverlapThreshold'] = $overlapThreshold;
        $this->queryParameters['OverlapThreshold'] = $overlapThreshold;

        return $this;
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->requestParameters['ProjectId'] = $projectId;
        $this->queryParameters['ProjectId'] = $projectId;

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
     * @param string $tagId
     *
     * @return $this
     */
    public function setTagId($tagId)
    {
        $this->requestParameters['TagId'] = $tagId;
        $this->queryParameters['TagId'] = $tagId;

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

    /**
     * @param string $iterationId
     *
     * @return $this
     */
    public function setIterationId($iterationId)
    {
        $this->requestParameters['IterationId'] = $iterationId;
        $this->queryParameters['IterationId'] = $iterationId;

        return $this;
    }
}
