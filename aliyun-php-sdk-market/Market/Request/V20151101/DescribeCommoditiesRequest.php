<?php

namespace Market\Request\V20151101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeCommodities
 *
 * @method string getCommodityGmtModifiedTo()
 * @method string getCommodityGmtModifiedFrom()
 * @method string getCommodityId()
 * @method string getCommodityGmtPublishFrom()
 * @method string getCommodityStatuses()
 * @method string getPageNumber()
 * @method string getCommodityGmtCreatedFrom()
 * @method string getCommodityIds()
 * @method string getCommodityGmtCreatedTo()
 * @method string getPageSize()
 * @method string getCommodityGmtPublishTo()
 * @method string getCommodityAuditStatuses()
 * @method string getProperties()
 * @method string getCommodityCategoryIds()
 */
class DescribeCommoditiesRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Market',
            '2015-11-01',
            'DescribeCommodities',
            'yunmarket'
        );
    }

    /**
     * @param string $commodityGmtModifiedTo
     *
     * @return $this
     */
    public function setCommodityGmtModifiedTo($commodityGmtModifiedTo)
    {
        $this->requestParameters['CommodityGmtModifiedTo'] = $commodityGmtModifiedTo;
        $this->queryParameters['CommodityGmtModifiedTo'] = $commodityGmtModifiedTo;

        return $this;
    }

    /**
     * @param string $commodityGmtModifiedFrom
     *
     * @return $this
     */
    public function setCommodityGmtModifiedFrom($commodityGmtModifiedFrom)
    {
        $this->requestParameters['CommodityGmtModifiedFrom'] = $commodityGmtModifiedFrom;
        $this->queryParameters['CommodityGmtModifiedFrom'] = $commodityGmtModifiedFrom;

        return $this;
    }

    /**
     * @param string $commodityId
     *
     * @return $this
     */
    public function setCommodityId($commodityId)
    {
        $this->requestParameters['CommodityId'] = $commodityId;
        $this->queryParameters['CommodityId'] = $commodityId;

        return $this;
    }

    /**
     * @param string $commodityGmtPublishFrom
     *
     * @return $this
     */
    public function setCommodityGmtPublishFrom($commodityGmtPublishFrom)
    {
        $this->requestParameters['CommodityGmtPublishFrom'] = $commodityGmtPublishFrom;
        $this->queryParameters['CommodityGmtPublishFrom'] = $commodityGmtPublishFrom;

        return $this;
    }

    /**
     * @param string $commodityStatuses
     *
     * @return $this
     */
    public function setCommodityStatuses($commodityStatuses)
    {
        $this->requestParameters['CommodityStatuses'] = $commodityStatuses;
        $this->queryParameters['CommodityStatuses'] = $commodityStatuses;

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
     * @param string $commodityGmtCreatedFrom
     *
     * @return $this
     */
    public function setCommodityGmtCreatedFrom($commodityGmtCreatedFrom)
    {
        $this->requestParameters['CommodityGmtCreatedFrom'] = $commodityGmtCreatedFrom;
        $this->queryParameters['CommodityGmtCreatedFrom'] = $commodityGmtCreatedFrom;

        return $this;
    }

    /**
     * @param string $commodityIds
     *
     * @return $this
     */
    public function setCommodityIds($commodityIds)
    {
        $this->requestParameters['CommodityIds'] = $commodityIds;
        $this->queryParameters['CommodityIds'] = $commodityIds;

        return $this;
    }

    /**
     * @param string $commodityGmtCreatedTo
     *
     * @return $this
     */
    public function setCommodityGmtCreatedTo($commodityGmtCreatedTo)
    {
        $this->requestParameters['CommodityGmtCreatedTo'] = $commodityGmtCreatedTo;
        $this->queryParameters['CommodityGmtCreatedTo'] = $commodityGmtCreatedTo;

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
     * @param string $commodityGmtPublishTo
     *
     * @return $this
     */
    public function setCommodityGmtPublishTo($commodityGmtPublishTo)
    {
        $this->requestParameters['CommodityGmtPublishTo'] = $commodityGmtPublishTo;
        $this->queryParameters['CommodityGmtPublishTo'] = $commodityGmtPublishTo;

        return $this;
    }

    /**
     * @param string $commodityAuditStatuses
     *
     * @return $this
     */
    public function setCommodityAuditStatuses($commodityAuditStatuses)
    {
        $this->requestParameters['CommodityAuditStatuses'] = $commodityAuditStatuses;
        $this->queryParameters['CommodityAuditStatuses'] = $commodityAuditStatuses;

        return $this;
    }

    /**
     * @param string $properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->requestParameters['Properties'] = $properties;
        $this->queryParameters['Properties'] = $properties;

        return $this;
    }

    /**
     * @param string $commodityCategoryIds
     *
     * @return $this
     */
    public function setCommodityCategoryIds($commodityCategoryIds)
    {
        $this->requestParameters['CommodityCategoryIds'] = $commodityCategoryIds;
        $this->queryParameters['CommodityCategoryIds'] = $commodityCategoryIds;

        return $this;
    }
}
