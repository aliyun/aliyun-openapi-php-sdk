<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ExportOssResult
 *
 * @method string getMinScore()
 * @method string getMaxScore()
 * @method string getStartDate()
 * @method string getScene()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getStock()
 * @method string getTotalCount()
 * @method string getSuggestion()
 * @method string getCurrentPage()
 * @method string getResourceType()
 * @method string getBucket()
 * @method string getEndDate()
 */
class ExportOssResultRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'ExportOssResult',
            'green'
        );
    }

    /**
     * @param string $minScore
     *
     * @return $this
     */
    public function setMinScore($minScore)
    {
        $this->requestParameters['MinScore'] = $minScore;
        $this->queryParameters['MinScore'] = $minScore;

        return $this;
    }

    /**
     * @param string $maxScore
     *
     * @return $this
     */
    public function setMaxScore($maxScore)
    {
        $this->requestParameters['MaxScore'] = $maxScore;
        $this->queryParameters['MaxScore'] = $maxScore;

        return $this;
    }

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->requestParameters['StartDate'] = $startDate;
        $this->queryParameters['StartDate'] = $startDate;

        return $this;
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        $this->requestParameters['Scene'] = $scene;
        $this->queryParameters['Scene'] = $scene;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

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
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $stock
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->requestParameters['Stock'] = $stock;
        $this->queryParameters['Stock'] = $stock;

        return $this;
    }

    /**
     * @param string $totalCount
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->requestParameters['TotalCount'] = $totalCount;
        $this->queryParameters['TotalCount'] = $totalCount;

        return $this;
    }

    /**
     * @param string $suggestion
     *
     * @return $this
     */
    public function setSuggestion($suggestion)
    {
        $this->requestParameters['Suggestion'] = $suggestion;
        $this->queryParameters['Suggestion'] = $suggestion;

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $bucket
     *
     * @return $this
     */
    public function setBucket($bucket)
    {
        $this->requestParameters['Bucket'] = $bucket;
        $this->queryParameters['Bucket'] = $bucket;

        return $this;
    }

    /**
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->requestParameters['EndDate'] = $endDate;
        $this->queryParameters['EndDate'] = $endDate;

        return $this;
    }
}
