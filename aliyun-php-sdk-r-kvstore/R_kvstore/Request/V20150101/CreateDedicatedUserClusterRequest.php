<?php

namespace R_kvstore\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDedicatedUserCluster
 *
 * @method string getResourceOwnerId()
 * @method string getClusterName()
 * @method string getSecurityToken()
 * @method string getDiskOverAllocationRatio()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getClusterId()
 * @method string getMemoryOverAllocationRatio()
 * @method string getOwnerId()
 * @method string getHostReplacePolicy()
 * @method string getAllocationPolicy()
 * @method string getZoneId()
 * @method string getCpuOverAllocationRatio()
 */
class CreateDedicatedUserClusterRequest extends \RpcAcsRequest
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
            'R-kvstore',
            '2015-01-01',
            'CreateDedicatedUserCluster',
            'redisa'
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
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $diskOverAllocationRatio
     *
     * @return $this
     */
    public function setDiskOverAllocationRatio($diskOverAllocationRatio)
    {
        $this->requestParameters['DiskOverAllocationRatio'] = $diskOverAllocationRatio;
        $this->queryParameters['DiskOverAllocationRatio'] = $diskOverAllocationRatio;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

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
     * @param string $memoryOverAllocationRatio
     *
     * @return $this
     */
    public function setMemoryOverAllocationRatio($memoryOverAllocationRatio)
    {
        $this->requestParameters['MemoryOverAllocationRatio'] = $memoryOverAllocationRatio;
        $this->queryParameters['MemoryOverAllocationRatio'] = $memoryOverAllocationRatio;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $hostReplacePolicy
     *
     * @return $this
     */
    public function setHostReplacePolicy($hostReplacePolicy)
    {
        $this->requestParameters['HostReplacePolicy'] = $hostReplacePolicy;
        $this->queryParameters['HostReplacePolicy'] = $hostReplacePolicy;

        return $this;
    }

    /**
     * @param string $allocationPolicy
     *
     * @return $this
     */
    public function setAllocationPolicy($allocationPolicy)
    {
        $this->requestParameters['AllocationPolicy'] = $allocationPolicy;
        $this->queryParameters['AllocationPolicy'] = $allocationPolicy;

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
     * @param string $cpuOverAllocationRatio
     *
     * @return $this
     */
    public function setCpuOverAllocationRatio($cpuOverAllocationRatio)
    {
        $this->requestParameters['CpuOverAllocationRatio'] = $cpuOverAllocationRatio;
        $this->queryParameters['CpuOverAllocationRatio'] = $cpuOverAllocationRatio;

        return $this;
    }
}
