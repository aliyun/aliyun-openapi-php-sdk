<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeInstances
 *
 * @method string getInnerIpAddresses()
 * @method string getResourceOwnerId()
 * @method string getPrivateIpAddresses()
 * @method string getHpcClusterId()
 * @method string getFilter2Value()
 * @method string getKeyPairName()
 * @method string getResourceGroupId()
 * @method string getLockReason()
 * @method string getFilter1Key()
 * @method string getDeviceAvailable()
 * @method array getTags()
 * @method string getFilter3Value()
 * @method string getDryRun()
 * @method string getFilter1Value()
 * @method string getNeedSaleCycle()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getInstanceName()
 * @method string getInstanceIds()
 * @method string getInternetChargeType()
 * @method string getZoneId()
 * @method string getInstanceNetworkType()
 * @method string getStatus()
 * @method string getImageId()
 * @method string getFilter4Value()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getFilter4Key()
 * @method string getPageNumber()
 * @method string getRdmaIpAddresses()
 * @method string getPageSize()
 * @method string getPublicIpAddresses()
 * @method string getInstanceType()
 * @method string getInstanceChargeType()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getInstanceTypeFamily()
 * @method string getFilter2Key()
 * @method string getEipAddresses()
 * @method string getVpcId()
 * @method string getFilter3Key()
 */
class DescribeInstancesRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'DescribeInstances',
            'ecs'
        );
    }

    /**
     * @param string $innerIpAddresses
     *
     * @return $this
     */
    public function setInnerIpAddresses($innerIpAddresses)
    {
        $this->requestParameters['InnerIpAddresses'] = $innerIpAddresses;
        $this->queryParameters['InnerIpAddresses'] = $innerIpAddresses;

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
     * @param string $privateIpAddresses
     *
     * @return $this
     */
    public function setPrivateIpAddresses($privateIpAddresses)
    {
        $this->requestParameters['PrivateIpAddresses'] = $privateIpAddresses;
        $this->queryParameters['PrivateIpAddresses'] = $privateIpAddresses;

        return $this;
    }

    /**
     * @param string $hpcClusterId
     *
     * @return $this
     */
    public function setHpcClusterId($hpcClusterId)
    {
        $this->requestParameters['HpcClusterId'] = $hpcClusterId;
        $this->queryParameters['HpcClusterId'] = $hpcClusterId;

        return $this;
    }

    /**
     * @param string $filter2Value
     *
     * @return $this
     */
    public function setFilter2Value($filter2Value)
    {
        $this->requestParameters['Filter2Value'] = $filter2Value;
        $this->queryParameters['Filter.2.Value'] = $filter2Value;

        return $this;
    }

    /**
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        $this->requestParameters['KeyPairName'] = $keyPairName;
        $this->queryParameters['KeyPairName'] = $keyPairName;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $lockReason
     *
     * @return $this
     */
    public function setLockReason($lockReason)
    {
        $this->requestParameters['LockReason'] = $lockReason;
        $this->queryParameters['LockReason'] = $lockReason;

        return $this;
    }

    /**
     * @param string $filter1Key
     *
     * @return $this
     */
    public function setFilter1Key($filter1Key)
    {
        $this->requestParameters['Filter1Key'] = $filter1Key;
        $this->queryParameters['Filter.1.Key'] = $filter1Key;

        return $this;
    }

    /**
     * @param string $deviceAvailable
     *
     * @return $this
     */
    public function setDeviceAvailable($deviceAvailable)
    {
        $this->requestParameters['DeviceAvailable'] = $deviceAvailable;
        $this->queryParameters['DeviceAvailable'] = $deviceAvailable;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function setTags(array $tag)
	{
	    $this->requestParameters['Tags'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
		}

		return $this;
    }

    /**
     * @param string $filter3Value
     *
     * @return $this
     */
    public function setFilter3Value($filter3Value)
    {
        $this->requestParameters['Filter3Value'] = $filter3Value;
        $this->queryParameters['Filter.3.Value'] = $filter3Value;

        return $this;
    }

    /**
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        $this->requestParameters['DryRun'] = $dryRun;
        $this->queryParameters['DryRun'] = $dryRun;

        return $this;
    }

    /**
     * @param string $filter1Value
     *
     * @return $this
     */
    public function setFilter1Value($filter1Value)
    {
        $this->requestParameters['Filter1Value'] = $filter1Value;
        $this->queryParameters['Filter.1.Value'] = $filter1Value;

        return $this;
    }

    /**
     * @param string $needSaleCycle
     *
     * @return $this
     */
    public function setNeedSaleCycle($needSaleCycle)
    {
        $this->requestParameters['NeedSaleCycle'] = $needSaleCycle;
        $this->queryParameters['NeedSaleCycle'] = $needSaleCycle;

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
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        $this->requestParameters['InstanceName'] = $instanceName;
        $this->queryParameters['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds($instanceIds)
    {
        $this->requestParameters['InstanceIds'] = $instanceIds;
        $this->queryParameters['InstanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        $this->requestParameters['InternetChargeType'] = $internetChargeType;
        $this->queryParameters['InternetChargeType'] = $internetChargeType;

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
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function setInstanceNetworkType($instanceNetworkType)
    {
        $this->requestParameters['InstanceNetworkType'] = $instanceNetworkType;
        $this->queryParameters['InstanceNetworkType'] = $instanceNetworkType;

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

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $filter4Value
     *
     * @return $this
     */
    public function setFilter4Value($filter4Value)
    {
        $this->requestParameters['Filter4Value'] = $filter4Value;
        $this->queryParameters['Filter.4.Value'] = $filter4Value;

        return $this;
    }

    /**
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setIoOptimized($ioOptimized)
    {
        $this->requestParameters['IoOptimized'] = $ioOptimized;
        $this->queryParameters['IoOptimized'] = $ioOptimized;

        return $this;
    }

    /**
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

        return $this;
    }

    /**
     * @param string $filter4Key
     *
     * @return $this
     */
    public function setFilter4Key($filter4Key)
    {
        $this->requestParameters['Filter4Key'] = $filter4Key;
        $this->queryParameters['Filter.4.Key'] = $filter4Key;

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
     * @param string $rdmaIpAddresses
     *
     * @return $this
     */
    public function setRdmaIpAddresses($rdmaIpAddresses)
    {
        $this->requestParameters['RdmaIpAddresses'] = $rdmaIpAddresses;
        $this->queryParameters['RdmaIpAddresses'] = $rdmaIpAddresses;

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
     * @param string $publicIpAddresses
     *
     * @return $this
     */
    public function setPublicIpAddresses($publicIpAddresses)
    {
        $this->requestParameters['PublicIpAddresses'] = $publicIpAddresses;
        $this->queryParameters['PublicIpAddresses'] = $publicIpAddresses;

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
     * @param string $instanceTypeFamily
     *
     * @return $this
     */
    public function setInstanceTypeFamily($instanceTypeFamily)
    {
        $this->requestParameters['InstanceTypeFamily'] = $instanceTypeFamily;
        $this->queryParameters['InstanceTypeFamily'] = $instanceTypeFamily;

        return $this;
    }

    /**
     * @param string $filter2Key
     *
     * @return $this
     */
    public function setFilter2Key($filter2Key)
    {
        $this->requestParameters['Filter2Key'] = $filter2Key;
        $this->queryParameters['Filter.2.Key'] = $filter2Key;

        return $this;
    }

    /**
     * @param string $eipAddresses
     *
     * @return $this
     */
    public function setEipAddresses($eipAddresses)
    {
        $this->requestParameters['EipAddresses'] = $eipAddresses;
        $this->queryParameters['EipAddresses'] = $eipAddresses;

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
     * @param string $filter3Key
     *
     * @return $this
     */
    public function setFilter3Key($filter3Key)
    {
        $this->requestParameters['Filter3Key'] = $filter3Key;
        $this->queryParameters['Filter.3.Key'] = $filter3Key;

        return $this;
    }
}
