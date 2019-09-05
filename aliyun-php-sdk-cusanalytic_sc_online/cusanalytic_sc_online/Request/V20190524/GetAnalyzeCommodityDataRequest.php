<?php

namespace cusanalytic_sc_online\Request\V20190524;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetAnalyzeCommodityData
 *
 * @method string getStoreId()
 * @method string getStartDate()
 * @method string getEndUserCount()
 * @method string getPageSize()
 * @method string getPageIndex()
 * @method string getStayPeriod()
 * @method string getStartUserCount()
 * @method string getMinSupportCount()
 * @method string getEndDate()
 */
class GetAnalyzeCommodityDataRequest extends \RpcAcsRequest
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
            'cusanalytic_sc_online',
            '2019-05-24',
            'GetAnalyzeCommodityData'
        );
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->requestParameters['StoreId'] = $storeId;
        $this->queryParameters['StoreId'] = $storeId;

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
     * @param string $endUserCount
     *
     * @return $this
     */
    public function setEndUserCount($endUserCount)
    {
        $this->requestParameters['EndUserCount'] = $endUserCount;
        $this->queryParameters['EndUserCount'] = $endUserCount;

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

    /**
     * @param string $stayPeriod
     *
     * @return $this
     */
    public function setStayPeriod($stayPeriod)
    {
        $this->requestParameters['StayPeriod'] = $stayPeriod;
        $this->queryParameters['StayPeriod'] = $stayPeriod;

        return $this;
    }

    /**
     * @param string $startUserCount
     *
     * @return $this
     */
    public function setStartUserCount($startUserCount)
    {
        $this->requestParameters['StartUserCount'] = $startUserCount;
        $this->queryParameters['StartUserCount'] = $startUserCount;

        return $this;
    }

    /**
     * @param string $minSupportCount
     *
     * @return $this
     */
    public function setMinSupportCount($minSupportCount)
    {
        $this->requestParameters['MinSupportCount'] = $minSupportCount;
        $this->queryParameters['MinSupportCount'] = $minSupportCount;

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
