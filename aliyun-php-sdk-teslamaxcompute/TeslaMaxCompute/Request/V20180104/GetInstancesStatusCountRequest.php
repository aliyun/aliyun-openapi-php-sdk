<?php

namespace TeslaMaxCompute\Request\V20180104;

/**
 * Request of GetInstancesStatusCount
 *
 * @method string getCluster()
 * @method string getQuotaId()
 * @method string getRegion()
 * @method string getQuotaName()
 */
class GetInstancesStatusCountRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'TeslaMaxCompute',
            '2018-01-04',
            'GetInstancesStatusCount',
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
