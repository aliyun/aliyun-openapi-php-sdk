<?php

namespace R_kvstore\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeInstances
 *
 * @method string getResourceOwnerId()
 * @method string getInstanceStatus()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSearchKey()
 * @method string getNetworkType()
 * @method string getEngineVersion()
 * @method string getOwnerId()
 * @method string getInstanceClass()
 * @method string getPageNumber()
 * @method string getVSwitchId()
 * @method string getExpired()
 * @method string getSecurityToken()
 * @method string getInstanceIds()
 * @method string getArchitectureType()
 * @method string getVpcId()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method string getZoneId()
 * @method string getChargeType()
 * @method array getTags()
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
            'R-kvstore',
            '2015-01-01',
            'DescribeInstances',
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
     * @param string $instanceStatus
     *
     * @return $this
     */
    public function setInstanceStatus($instanceStatus)
    {
        $this->requestParameters['InstanceStatus'] = $instanceStatus;
        $this->queryParameters['InstanceStatus'] = $instanceStatus;

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
     * @param string $searchKey
     *
     * @return $this
     */
    public function setSearchKey($searchKey)
    {
        $this->requestParameters['SearchKey'] = $searchKey;
        $this->queryParameters['SearchKey'] = $searchKey;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $engineVersion
     *
     * @return $this
     */
    public function setEngineVersion($engineVersion)
    {
        $this->requestParameters['EngineVersion'] = $engineVersion;
        $this->queryParameters['EngineVersion'] = $engineVersion;

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
     * @param string $instanceClass
     *
     * @return $this
     */
    public function setInstanceClass($instanceClass)
    {
        $this->requestParameters['InstanceClass'] = $instanceClass;
        $this->queryParameters['InstanceClass'] = $instanceClass;

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
     * @param string $expired
     *
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->requestParameters['Expired'] = $expired;
        $this->queryParameters['Expired'] = $expired;

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
     * @param string $architectureType
     *
     * @return $this
     */
    public function setArchitectureType($architectureType)
    {
        $this->requestParameters['ArchitectureType'] = $architectureType;
        $this->queryParameters['ArchitectureType'] = $architectureType;

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
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->requestParameters['ChargeType'] = $chargeType;
        $this->queryParameters['ChargeType'] = $chargeType;

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
}
