<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDedicatedHostGroupAttribute
 *
 * @method string getResourceOwnerId()
 * @method string getCpuAllocationRatio()
 * @method string getDedicatedHostGroupId()
 * @method string getResourceOwnerAccount()
 * @method string getDiskAllocationRatio()
 * @method string getMemAllocationRatio()
 * @method string getOwnerId()
 * @method string getHostReplacePolicy()
 * @method string getDedicatedHostGroupDesc()
 * @method string getAllocationPolicy()
 */
class ModifyDedicatedHostGroupAttributeRequest extends \RpcAcsRequest
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
            'Rds',
            '2014-08-15',
            'ModifyDedicatedHostGroupAttribute',
            'rds'
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
     * @param string $cpuAllocationRatio
     *
     * @return $this
     */
    public function setCpuAllocationRatio($cpuAllocationRatio)
    {
        $this->requestParameters['CpuAllocationRatio'] = $cpuAllocationRatio;
        $this->queryParameters['CpuAllocationRatio'] = $cpuAllocationRatio;

        return $this;
    }

    /**
     * @param string $dedicatedHostGroupId
     *
     * @return $this
     */
    public function setDedicatedHostGroupId($dedicatedHostGroupId)
    {
        $this->requestParameters['DedicatedHostGroupId'] = $dedicatedHostGroupId;
        $this->queryParameters['DedicatedHostGroupId'] = $dedicatedHostGroupId;

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
     * @param string $diskAllocationRatio
     *
     * @return $this
     */
    public function setDiskAllocationRatio($diskAllocationRatio)
    {
        $this->requestParameters['DiskAllocationRatio'] = $diskAllocationRatio;
        $this->queryParameters['DiskAllocationRatio'] = $diskAllocationRatio;

        return $this;
    }

    /**
     * @param string $memAllocationRatio
     *
     * @return $this
     */
    public function setMemAllocationRatio($memAllocationRatio)
    {
        $this->requestParameters['MemAllocationRatio'] = $memAllocationRatio;
        $this->queryParameters['MemAllocationRatio'] = $memAllocationRatio;

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
     * @param string $dedicatedHostGroupDesc
     *
     * @return $this
     */
    public function setDedicatedHostGroupDesc($dedicatedHostGroupDesc)
    {
        $this->requestParameters['DedicatedHostGroupDesc'] = $dedicatedHostGroupDesc;
        $this->queryParameters['DedicatedHostGroupDesc'] = $dedicatedHostGroupDesc;

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
}
