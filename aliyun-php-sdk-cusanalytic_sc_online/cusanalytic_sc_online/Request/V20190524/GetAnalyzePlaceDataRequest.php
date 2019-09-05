<?php

namespace cusanalytic_sc_online\Request\V20190524;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetAnalyzePlaceData
 *
 * @method string getEndUVCount()
 * @method string getParentAmount()
 * @method string getStartDate()
 * @method string getStartUVCount()
 * @method string getStoreId()
 * @method string getEndDate()
 * @method string getLocationId()
 * @method string getParentLocationIds()
 */
class GetAnalyzePlaceDataRequest extends \RpcAcsRequest
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
            'GetAnalyzePlaceData'
        );
    }

    /**
     * @param string $endUVCount
     *
     * @return $this
     */
    public function setEndUVCount($endUVCount)
    {
        $this->requestParameters['EndUVCount'] = $endUVCount;
        $this->queryParameters['EndUVCount'] = $endUVCount;

        return $this;
    }

    /**
     * @param string $parentAmount
     *
     * @return $this
     */
    public function setParentAmount($parentAmount)
    {
        $this->requestParameters['ParentAmount'] = $parentAmount;
        $this->queryParameters['ParentAmount'] = $parentAmount;

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
     * @param string $startUVCount
     *
     * @return $this
     */
    public function setStartUVCount($startUVCount)
    {
        $this->requestParameters['StartUVCount'] = $startUVCount;
        $this->queryParameters['StartUVCount'] = $startUVCount;

        return $this;
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

    /**
     * @param string $locationId
     *
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->requestParameters['LocationId'] = $locationId;
        $this->queryParameters['LocationId'] = $locationId;

        return $this;
    }

    /**
     * @param string $parentLocationIds
     *
     * @return $this
     */
    public function setParentLocationIds($parentLocationIds)
    {
        $this->requestParameters['ParentLocationIds'] = $parentLocationIds;
        $this->queryParameters['ParentLocationIds'] = $parentLocationIds;

        return $this;
    }
}
