<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDdrInstance
 *
 * @method string getResourceOwnerId()
 * @method string getDBInstanceStorage()
 * @method string getSystemDBCharset()
 * @method string getEngineVersion()
 * @method string getUserBakSetURL()
 * @method string getResourceGroupId()
 * @method string getDBInstanceDescription()
 * @method string getBackupSetRegion()
 * @method string getPeriod()
 * @method string getBackupSetId()
 * @method string getOwnerId()
 * @method string getDBInstanceClass()
 * @method string getSecurityIPList()
 * @method string getVSwitchId()
 * @method string getPrivateIpAddress()
 * @method string getTunnelId()
 * @method string getZoneId()
 * @method string getInstanceNetworkType()
 * @method string getConnectionMode()
 * @method string getSourceDBInstanceName()
 * @method string getClientToken()
 * @method string getHostType()
 * @method string getEngine()
 * @method string getDBInstanceStorageType()
 * @method string getDBInstanceNetType()
 * @method string getBackupSetType()
 * @method string getRestoreTime()
 * @method string getBakSetName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getUsedTime()
 * @method string getRestoreType()
 * @method string getVPCId()
 * @method string getPayType()
 * @method string getSourceRegion()
 */
class CreateDdrInstanceRequest extends \RpcAcsRequest
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
            'CreateDdrInstance',
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
     * @param string $systemDBCharset
     *
     * @return $this
     */
    public function setSystemDBCharset($systemDBCharset)
    {
        $this->requestParameters['SystemDBCharset'] = $systemDBCharset;
        $this->queryParameters['SystemDBCharset'] = $systemDBCharset;

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
     * @param string $userBakSetURL
     *
     * @return $this
     */
    public function setUserBakSetURL($userBakSetURL)
    {
        $this->requestParameters['UserBakSetURL'] = $userBakSetURL;
        $this->queryParameters['UserBakSetURL'] = $userBakSetURL;

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
     * @param string $backupSetRegion
     *
     * @return $this
     */
    public function setBackupSetRegion($backupSetRegion)
    {
        $this->requestParameters['BackupSetRegion'] = $backupSetRegion;
        $this->queryParameters['BackupSetRegion'] = $backupSetRegion;

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
     * @param string $backupSetId
     *
     * @return $this
     */
    public function setBackupSetId($backupSetId)
    {
        $this->requestParameters['BackupSetId'] = $backupSetId;
        $this->queryParameters['BackupSetId'] = $backupSetId;

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
     * @param string $tunnelId
     *
     * @return $this
     */
    public function setTunnelId($tunnelId)
    {
        $this->requestParameters['TunnelId'] = $tunnelId;
        $this->queryParameters['TunnelId'] = $tunnelId;

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
     * @param string $connectionMode
     *
     * @return $this
     */
    public function setConnectionMode($connectionMode)
    {
        $this->requestParameters['ConnectionMode'] = $connectionMode;
        $this->queryParameters['ConnectionMode'] = $connectionMode;

        return $this;
    }

    /**
     * @param string $sourceDBInstanceName
     *
     * @return $this
     */
    public function setSourceDBInstanceName($sourceDBInstanceName)
    {
        $this->requestParameters['SourceDBInstanceName'] = $sourceDBInstanceName;
        $this->queryParameters['SourceDBInstanceName'] = $sourceDBInstanceName;

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
     * @param string $hostType
     *
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->requestParameters['HostType'] = $hostType;
        $this->queryParameters['HostType'] = $hostType;

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
     * @param string $dBInstanceStorageType
     *
     * @return $this
     */
    public function setDBInstanceStorageType($dBInstanceStorageType)
    {
        $this->requestParameters['DBInstanceStorageType'] = $dBInstanceStorageType;
        $this->queryParameters['DBInstanceStorageType'] = $dBInstanceStorageType;

        return $this;
    }

    /**
     * @param string $dBInstanceNetType
     *
     * @return $this
     */
    public function setDBInstanceNetType($dBInstanceNetType)
    {
        $this->requestParameters['DBInstanceNetType'] = $dBInstanceNetType;
        $this->queryParameters['DBInstanceNetType'] = $dBInstanceNetType;

        return $this;
    }

    /**
     * @param string $backupSetType
     *
     * @return $this
     */
    public function setBackupSetType($backupSetType)
    {
        $this->requestParameters['BackupSetType'] = $backupSetType;
        $this->queryParameters['BackupSetType'] = $backupSetType;

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
     * @param string $bakSetName
     *
     * @return $this
     */
    public function setBakSetName($bakSetName)
    {
        $this->requestParameters['BakSetName'] = $bakSetName;
        $this->queryParameters['BakSetName'] = $bakSetName;

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
     * @param string $usedTime
     *
     * @return $this
     */
    public function setUsedTime($usedTime)
    {
        $this->requestParameters['UsedTime'] = $usedTime;
        $this->queryParameters['UsedTime'] = $usedTime;

        return $this;
    }

    /**
     * @param string $restoreType
     *
     * @return $this
     */
    public function setRestoreType($restoreType)
    {
        $this->requestParameters['RestoreType'] = $restoreType;
        $this->queryParameters['RestoreType'] = $restoreType;

        return $this;
    }

    /**
     * @param string $vPCId
     *
     * @return $this
     */
    public function setVPCId($vPCId)
    {
        $this->requestParameters['VPCId'] = $vPCId;
        $this->queryParameters['VPCId'] = $vPCId;

        return $this;
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        $this->requestParameters['PayType'] = $payType;
        $this->queryParameters['PayType'] = $payType;

        return $this;
    }

    /**
     * @param string $sourceRegion
     *
     * @return $this
     */
    public function setSourceRegion($sourceRegion)
    {
        $this->requestParameters['SourceRegion'] = $sourceRegion;
        $this->queryParameters['SourceRegion'] = $sourceRegion;

        return $this;
    }
}
