<?php

namespace TeslaMaxCompute\Request\V20180104;

/**
 * Request of GetQuotaHistoryInfo
 *
 * @method string getCluster()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getRegion()
 * @method string getQuotaName()
 */
class GetQuotaHistoryInfoRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaMaxCompute',
            '2018-01-04',
            'GetQuotaHistoryInfo',
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
}
