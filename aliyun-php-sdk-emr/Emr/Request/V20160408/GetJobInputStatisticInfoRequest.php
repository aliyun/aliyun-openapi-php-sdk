<?php

namespace Emr\Request\V20160408;

/**
 * Request of GetJobInputStatisticInfo
 *
 * @method string getFromDatetime()
 * @method string getResourceOwnerId()
 * @method string getPageSize()
 * @method string getClusterId()
 * @method string getToDatetime()
 * @method string getPageNumber()
 */
class GetJobInputStatisticInfoRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'GetJobInputStatisticInfo',
            'emr'
        );
    }

    /**
     * @param string $fromDatetime
     *
     * @return $this
     */
    public function setFromDatetime($fromDatetime)
    {
        $this->requestParameters['FromDatetime'] = $fromDatetime;
        $this->queryParameters['FromDatetime'] = $fromDatetime;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

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
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $toDatetime
     *
     * @return $this
     */
    public function setToDatetime($toDatetime)
    {
        $this->requestParameters['ToDatetime'] = $toDatetime;
        $this->queryParameters['ToDatetime'] = $toDatetime;

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
