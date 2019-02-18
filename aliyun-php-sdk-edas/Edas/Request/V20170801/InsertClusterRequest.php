<?php

namespace Edas\Request\V20170801;

/**
 * Request of InsertCluster
 *
 * @method string getClusterType()
 * @method string getIaasProvider()
 * @method string getLogicalRegionId()
 * @method string getClusterName()
 * @method string getVpcId()
 * @method string getNetworkMode()
 * @method string getOversoldFactor()
 */
class InsertClusterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/cluster';

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
            'Edas',
            '2017-08-01',
            'InsertCluster'
        );
    }

    /**
     * @param string $clusterType
     *
     * @return $this
     */
    public function setClusterType($clusterType)
    {
        $this->requestParameters['ClusterType'] = $clusterType;
        $this->queryParameters['ClusterType'] = $clusterType;

        return $this;
    }

    /**
     * @param string $iaasProvider
     *
     * @return $this
     */
    public function setIaasProvider($iaasProvider)
    {
        $this->requestParameters['IaasProvider'] = $iaasProvider;
        $this->queryParameters['IaasProvider'] = $iaasProvider;

        return $this;
    }

    /**
     * @param string $logicalRegionId
     *
     * @return $this
     */
    public function setLogicalRegionId($logicalRegionId)
    {
        $this->requestParameters['LogicalRegionId'] = $logicalRegionId;
        $this->queryParameters['LogicalRegionId'] = $logicalRegionId;

        return $this;
    }

    /**
     * @param string $clusterName
     *
     * @return $this
     */
    public function setClusterName($clusterName)
    {
        $this->requestParameters['ClusterName'] = $clusterName;
        $this->queryParameters['ClusterName'] = $clusterName;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $networkMode
     *
     * @return $this
     */
    public function setNetworkMode($networkMode)
    {
        $this->requestParameters['NetworkMode'] = $networkMode;
        $this->queryParameters['NetworkMode'] = $networkMode;

        return $this;
    }

    /**
     * @param string $oversoldFactor
     *
     * @return $this
     */
    public function setOversoldFactor($oversoldFactor)
    {
        $this->requestParameters['OversoldFactor'] = $oversoldFactor;
        $this->queryParameters['OversoldFactor'] = $oversoldFactor;

        return $this;
    }
}
