<?php

namespace Dds\Request\V20151201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDBInstance
 *
 * @method string getResourceOwnerId()
 * @method string getDBInstanceStorage()
 * @method string getClientToken()
 * @method string getCouponNo()
 * @method string getEngineVersion()
 * @method string getNetworkType()
 * @method string getReplicationFactor()
 * @method string getStorageEngine()
 * @method string getResourceGroupId()
 * @method string getDatabaseNames()
 * @method string getSecurityToken()
 * @method string getEngine()
 * @method string getDBInstanceDescription()
 * @method string getBusinessInfo()
 * @method string getPeriod()
 * @method string getRestoreTime()
 * @method string getResourceOwnerAccount()
 * @method string getSrcDBInstanceId()
 * @method string getOwnerAccount()
 * @method string getBackupId()
 * @method string getOwnerId()
 * @method string getDBInstanceClass()
 * @method string getSecurityIPList()
 * @method string getVSwitchId()
 * @method string getAccountPassword()
 * @method string getAutoRenew()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getChargeType()
 */
class CreateDBInstanceRequest extends \RpcAcsRequest
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
            'CreateDBInstance',
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
     * @param string $dBInstanceStorage
     *
     * @return $this
     */
    public function setDBInstanceStorage($dBInstanceStorage)
    {
        $this->requestParameters['DBInstanceStorage'] = $dBInstanceStorage;
        $this->queryParameters['DBInstanceStorage'] = $dBInstanceStorage;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

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
     * @param string $storageEngine
     *
     * @return $this
     */
    public function setStorageEngine($storageEngine)
    {
        $this->requestParameters['StorageEngine'] = $storageEngine;
        $this->queryParameters['StorageEngine'] = $storageEngine;

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
     * @param string $databaseNames
     *
     * @return $this
     */
    public function setDatabaseNames($databaseNames)
    {
        $this->requestParameters['DatabaseNames'] = $databaseNames;
        $this->queryParameters['DatabaseNames'] = $databaseNames;

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
     * @param string $restoreTime
     *
     * @return $this
     */
    public function setRestoreTime($restoreTime)
    {
        $this->requestParameters['RestoreTime'] = $restoreTime;
        $this->queryParameters['RestoreTime'] = $restoreTime;

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
     * @param string $securityIPList
     *
     * @return $this
     */
    public function setSecurityIPList($securityIPList)
    {
        $this->requestParameters['SecurityIPList'] = $securityIPList;
        $this->queryParameters['SecurityIPList'] = $securityIPList;

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
     * @param string $accountPassword
     *
     * @return $this
     */
    public function setAccountPassword($accountPassword)
    {
        $this->requestParameters['AccountPassword'] = $accountPassword;
        $this->queryParameters['AccountPassword'] = $accountPassword;

        return $this;
    }

    /**
     * @param string $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        $this->requestParameters['AutoRenew'] = $autoRenew;
        $this->queryParameters['AutoRenew'] = $autoRenew;

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
