<?php

namespace polardb\Request\V20170801;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDBCluster
 *
 * @method string getResourceOwnerId()
 * @method string getDBClusterDescription()
 * @method string getClientToken()
 * @method string getClusterNetworkType()
 * @method string getDBNodeClass()
 * @method string getEngine()
 * @method string getCreationOption()
 * @method string getSourceResourceId()
 * @method string getPeriod()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getUsedTime()
 * @method string getVSwitchId()
 * @method string getAutoRenew()
 * @method string getVPCId()
 * @method string getDBType()
 * @method string getZoneId()
 * @method string getDBVersion()
 * @method string getCloneDataPoint()
 * @method string getPayType()
 */
class CreateDBClusterRequest extends \RpcAcsRequest
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
            'polardb',
            '2017-08-01',
            'CreateDBCluster',
            'polardb'
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
     * @param string $dBClusterDescription
     *
     * @return $this
     */
    public function setDBClusterDescription($dBClusterDescription)
    {
        $this->requestParameters['DBClusterDescription'] = $dBClusterDescription;
        $this->queryParameters['DBClusterDescription'] = $dBClusterDescription;

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
     * @param string $clusterNetworkType
     *
     * @return $this
     */
    public function setClusterNetworkType($clusterNetworkType)
    {
        $this->requestParameters['ClusterNetworkType'] = $clusterNetworkType;
        $this->queryParameters['ClusterNetworkType'] = $clusterNetworkType;

        return $this;
    }

    /**
     * @param string $dBNodeClass
     *
     * @return $this
     */
    public function setDBNodeClass($dBNodeClass)
    {
        $this->requestParameters['DBNodeClass'] = $dBNodeClass;
        $this->queryParameters['DBNodeClass'] = $dBNodeClass;

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
     * @param string $creationOption
     *
     * @return $this
     */
    public function setCreationOption($creationOption)
    {
        $this->requestParameters['CreationOption'] = $creationOption;
        $this->queryParameters['CreationOption'] = $creationOption;

        return $this;
    }

    /**
     * @param string $sourceResourceId
     *
     * @return $this
     */
    public function setSourceResourceId($sourceResourceId)
    {
        $this->requestParameters['SourceResourceId'] = $sourceResourceId;
        $this->queryParameters['SourceResourceId'] = $sourceResourceId;

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
     * @param string $dBType
     *
     * @return $this
     */
    public function setDBType($dBType)
    {
        $this->requestParameters['DBType'] = $dBType;
        $this->queryParameters['DBType'] = $dBType;

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
     * @param string $dBVersion
     *
     * @return $this
     */
    public function setDBVersion($dBVersion)
    {
        $this->requestParameters['DBVersion'] = $dBVersion;
        $this->queryParameters['DBVersion'] = $dBVersion;

        return $this;
    }

    /**
     * @param string $cloneDataPoint
     *
     * @return $this
     */
    public function setCloneDataPoint($cloneDataPoint)
    {
        $this->requestParameters['CloneDataPoint'] = $cloneDataPoint;
        $this->queryParameters['CloneDataPoint'] = $cloneDataPoint;

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
}
