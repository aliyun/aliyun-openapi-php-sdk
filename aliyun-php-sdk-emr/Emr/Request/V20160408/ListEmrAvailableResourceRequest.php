<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListEmrAvailableResource
 *
 * @method string getResourceOwnerId()
 * @method string getClusterId()
 * @method string getDepositType()
 * @method string getDestinationResource()
 * @method string getClusterType()
 * @method string getSpotStrategy()
 * @method string getSystemDiskType()
 * @method string getNetType()
 * @method string getZoneId()
 * @method string getInstanceType()
 * @method string getDataDiskType()
 * @method string getInstanceChargeType()
 */
class ListEmrAvailableResourceRequest extends \RpcAcsRequest
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
            'ListEmrAvailableResource',
            'emr'
        );
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
     * @param string $depositType
     *
     * @return $this
     */
    public function setDepositType($depositType)
    {
        $this->requestParameters['DepositType'] = $depositType;
        $this->queryParameters['DepositType'] = $depositType;

        return $this;
    }

    /**
     * @param string $destinationResource
     *
     * @return $this
     */
    public function setDestinationResource($destinationResource)
    {
        $this->requestParameters['DestinationResource'] = $destinationResource;
        $this->queryParameters['DestinationResource'] = $destinationResource;

        return $this;
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
     * @param string $spotStrategy
     *
     * @return $this
     */
    public function setSpotStrategy($spotStrategy)
    {
        $this->requestParameters['SpotStrategy'] = $spotStrategy;
        $this->queryParameters['SpotStrategy'] = $spotStrategy;

        return $this;
    }

    /**
     * @param string $systemDiskType
     *
     * @return $this
     */
    public function setSystemDiskType($systemDiskType)
    {
        $this->requestParameters['SystemDiskType'] = $systemDiskType;
        $this->queryParameters['SystemDiskType'] = $systemDiskType;

        return $this;
    }

    /**
     * @param string $netType
     *
     * @return $this
     */
    public function setNetType($netType)
    {
        $this->requestParameters['NetType'] = $netType;
        $this->queryParameters['NetType'] = $netType;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $dataDiskType
     *
     * @return $this
     */
    public function setDataDiskType($dataDiskType)
    {
        $this->requestParameters['DataDiskType'] = $dataDiskType;
        $this->queryParameters['DataDiskType'] = $dataDiskType;

        return $this;
    }

    /**
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        $this->requestParameters['InstanceChargeType'] = $instanceChargeType;
        $this->queryParameters['InstanceChargeType'] = $instanceChargeType;

        return $this;
    }
}
