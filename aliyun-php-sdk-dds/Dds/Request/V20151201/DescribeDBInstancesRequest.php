<?php

namespace Dds\Request\V20151201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDBInstances
 *
 * @method string getResourceOwnerId()
 * @method string getEngineVersion()
 * @method string getNetworkType()
 * @method string getPageNumber()
 * @method string getReplicationFactor()
 * @method string getExpired()
 * @method string getSecurityToken()
 * @method string getEngine()
 * @method string getPageSize()
 * @method string getDBInstanceId()
 * @method string getDBInstanceDescription()
 * @method string getDBInstanceStatus()
 * @method array getTags()
 * @method string getExpireTime()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDBInstanceType()
 * @method string getDBInstanceClass()
 * @method string getVSwitchId()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getChargeType()
 */
class DescribeDBInstancesRequest extends \RpcAcsRequest
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
            'Dds',
            '2015-12-01',
            'DescribeDBInstances',
            'Dds'
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
     * @param string $replicationFactor
     *
     * @return $this
     */
    public function setReplicationFactor($replicationFactor)
    {
        $this->requestParameters['ReplicationFactor'] = $replicationFactor;
        $this->queryParameters['ReplicationFactor'] = $replicationFactor;

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
     * @param string $engine
     *
     * @return $this
     */
    public function setEngine($engine)
    {
        $this->requestParameters['Engine'] = $engine;
        $this->queryParameters['Engine'] = $engine;

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
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $dBInstanceDescription
     *
     * @return $this
     */
    public function setDBInstanceDescription($dBInstanceDescription)
    {
        $this->requestParameters['DBInstanceDescription'] = $dBInstanceDescription;
        $this->queryParameters['DBInstanceDescription'] = $dBInstanceDescription;

        return $this;
    }

    /**
     * @param string $dBInstanceStatus
     *
     * @return $this
     */
    public function setDBInstanceStatus($dBInstanceStatus)
    {
        $this->requestParameters['DBInstanceStatus'] = $dBInstanceStatus;
        $this->queryParameters['DBInstanceStatus'] = $dBInstanceStatus;

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
     * @param string $expireTime
     *
     * @return $this
     */
    public function setExpireTime($expireTime)
    {
        $this->requestParameters['ExpireTime'] = $expireTime;
        $this->queryParameters['ExpireTime'] = $expireTime;

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
     * @param string $dBInstanceType
     *
     * @return $this
     */
    public function setDBInstanceType($dBInstanceType)
    {
        $this->requestParameters['DBInstanceType'] = $dBInstanceType;
        $this->queryParameters['DBInstanceType'] = $dBInstanceType;

        return $this;
    }

    /**
     * @param string $dBInstanceClass
     *
     * @return $this
     */
    public function setDBInstanceClass($dBInstanceClass)
    {
        $this->requestParameters['DBInstanceClass'] = $dBInstanceClass;
        $this->queryParameters['DBInstanceClass'] = $dBInstanceClass;

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
}
