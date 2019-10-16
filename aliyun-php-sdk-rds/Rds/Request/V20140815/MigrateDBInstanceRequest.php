<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of MigrateDBInstance
 *
 * @method string getResourceOwnerId()
 * @method string getSpecifiedTime()
 * @method string getTargetDedicatedHostIdForSlave()
 * @method string getEngineVersion()
 * @method string getStorage()
 * @method string getEffectiveTime()
 * @method string getDBInstanceTransType()
 * @method string getTargetDedicatedHostIdForMaster()
 * @method string getDBInstanceId()
 * @method string getDedicatedHostGroupId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getTargetDBInstanceClass()
 * @method string getVSwitchId()
 * @method string getTargetDedicatedHostIdForLog()
 * @method string getZoneId()
 */
class MigrateDBInstanceRequest extends \RpcAcsRequest
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
            'MigrateDBInstance',
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
     * @param string $specifiedTime
     *
     * @return $this
     */
    public function setSpecifiedTime($specifiedTime)
    {
        $this->requestParameters['SpecifiedTime'] = $specifiedTime;
        $this->queryParameters['SpecifiedTime'] = $specifiedTime;

        return $this;
    }

    /**
     * @param string $targetDedicatedHostIdForSlave
     *
     * @return $this
     */
    public function setTargetDedicatedHostIdForSlave($targetDedicatedHostIdForSlave)
    {
        $this->requestParameters['TargetDedicatedHostIdForSlave'] = $targetDedicatedHostIdForSlave;
        $this->queryParameters['TargetDedicatedHostIdForSlave'] = $targetDedicatedHostIdForSlave;

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
     * @param string $storage
     *
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->requestParameters['Storage'] = $storage;
        $this->queryParameters['Storage'] = $storage;

        return $this;
    }

    /**
     * @param string $effectiveTime
     *
     * @return $this
     */
    public function setEffectiveTime($effectiveTime)
    {
        $this->requestParameters['EffectiveTime'] = $effectiveTime;
        $this->queryParameters['EffectiveTime'] = $effectiveTime;

        return $this;
    }

    /**
     * @param string $dBInstanceTransType
     *
     * @return $this
     */
    public function setDBInstanceTransType($dBInstanceTransType)
    {
        $this->requestParameters['DBInstanceTransType'] = $dBInstanceTransType;
        $this->queryParameters['DBInstanceTransType'] = $dBInstanceTransType;

        return $this;
    }

    /**
     * @param string $targetDedicatedHostIdForMaster
     *
     * @return $this
     */
    public function setTargetDedicatedHostIdForMaster($targetDedicatedHostIdForMaster)
    {
        $this->requestParameters['TargetDedicatedHostIdForMaster'] = $targetDedicatedHostIdForMaster;
        $this->queryParameters['TargetDedicatedHostIdForMaster'] = $targetDedicatedHostIdForMaster;

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
     * @param string $targetDBInstanceClass
     *
     * @return $this
     */
    public function setTargetDBInstanceClass($targetDBInstanceClass)
    {
        $this->requestParameters['TargetDBInstanceClass'] = $targetDBInstanceClass;
        $this->queryParameters['TargetDBInstanceClass'] = $targetDBInstanceClass;

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
     * @param string $targetDedicatedHostIdForLog
     *
     * @return $this
     */
    public function setTargetDedicatedHostIdForLog($targetDedicatedHostIdForLog)
    {
        $this->requestParameters['TargetDedicatedHostIdForLog'] = $targetDedicatedHostIdForLog;
        $this->queryParameters['TargetDedicatedHostIdForLog'] = $targetDedicatedHostIdForLog;

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
}
