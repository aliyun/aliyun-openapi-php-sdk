<?php

namespace R_kvstore\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateInstance
 *
 * @method string getResourceOwnerId()
 * @method string getNodeType()
 * @method string getCouponNo()
 * @method string getNetworkType()
 * @method string getEngineVersion()
 * @method string getInstanceClass()
 * @method string getCapacity()
 * @method string getPassword()
 * @method string getSecurityToken()
 * @method string getInstanceType()
 * @method string getBusinessInfo()
 * @method string getPeriod()
 * @method string getResourceOwnerAccount()
 * @method string getSrcDBInstanceId()
 * @method string getOwnerAccount()
 * @method string getBackupId()
 * @method string getOwnerId()
 * @method string getToken()
 * @method string getVSwitchId()
 * @method string getPrivateIpAddress()
 * @method string getInstanceName()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getChargeType()
 * @method string getConfig()
 */
class CreateInstanceRequest extends \RpcAcsRequest
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
            'CreateInstance',
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
     * @param string $nodeType
     *
     * @return $this
     */
    public function setNodeType($nodeType)
    {
        $this->requestParameters['NodeType'] = $nodeType;
        $this->queryParameters['NodeType'] = $nodeType;

        return $this;
    }

    /**
     * @param string $couponNo
     *
     * @return $this
     */
    public function setCouponNo($couponNo)
    {
        $this->requestParameters['CouponNo'] = $couponNo;
        $this->queryParameters['CouponNo'] = $couponNo;

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
     * @param string $capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->requestParameters['Capacity'] = $capacity;
        $this->queryParameters['Capacity'] = $capacity;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

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
     * @param string $businessInfo
     *
     * @return $this
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->requestParameters['BusinessInfo'] = $businessInfo;
        $this->queryParameters['BusinessInfo'] = $businessInfo;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

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
     * @param string $srcDBInstanceId
     *
     * @return $this
     */
    public function setSrcDBInstanceId($srcDBInstanceId)
    {
        $this->requestParameters['SrcDBInstanceId'] = $srcDBInstanceId;
        $this->queryParameters['SrcDBInstanceId'] = $srcDBInstanceId;

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
     * @param string $backupId
     *
     * @return $this
     */
    public function setBackupId($backupId)
    {
        $this->requestParameters['BackupId'] = $backupId;
        $this->queryParameters['BackupId'] = $backupId;

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
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->requestParameters['Token'] = $token;
        $this->queryParameters['Token'] = $token;

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
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->requestParameters['PrivateIpAddress'] = $privateIpAddress;
        $this->queryParameters['PrivateIpAddress'] = $privateIpAddress;

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

    /**
     * @param string $config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->requestParameters['Config'] = $config;
        $this->queryParameters['Config'] = $config;

        return $this;
    }
}
