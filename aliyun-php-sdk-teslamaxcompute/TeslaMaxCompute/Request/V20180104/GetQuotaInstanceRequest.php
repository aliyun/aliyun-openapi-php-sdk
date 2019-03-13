<?php

namespace TeslaMaxCompute\Request\V20180104;

/**
 * Request of GetQuotaInstance
 *
 * @method string getCluster()
 * @method string getPageSize()
 * @method string getQuotaId()
 * @method string getPageNum()
 * @method string getRegion()
 * @method string getQuotaName()
 * @method string getStatus()
 */
class GetQuotaInstanceRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaMaxCompute',
            '2018-01-04',
            'GetQuotaInstance',
            'teslamaxcompute'
        );
    }

    /**
     * @param string $cluster
     *
     * @return $this
     */
    public function setCluster($cluster)
    {
        $this->requestParameters['Cluster'] = $cluster;
        $this->queryParameters['Cluster'] = $cluster;

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
     * @param string $quotaId
     *
     * @return $this
     */
    public function setQuotaId($quotaId)
    {
        $this->requestParameters['QuotaId'] = $quotaId;
        $this->queryParameters['QuotaId'] = $quotaId;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }

    /**
     * @param string $quotaName
     *
     * @return $this
     */
    public function setQuotaName($quotaName)
    {
        $this->requestParameters['QuotaName'] = $quotaName;
        $this->queryParameters['QuotaName'] = $quotaName;

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
