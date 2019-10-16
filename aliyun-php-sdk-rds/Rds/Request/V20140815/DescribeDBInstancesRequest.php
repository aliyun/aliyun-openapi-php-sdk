<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDBInstances
 *
 * @method string getTag4value()
 * @method string getResourceOwnerId()
 * @method string getTag2key()
 * @method string getTag3key()
 * @method string getEngineVersion()
 * @method string getTag1value()
 * @method string getResourceGroupId()
 * @method string getproxyId()
 * @method string getTag5key()
 * @method string getOwnerId()
 * @method string getDBInstanceType()
 * @method string getDBInstanceClass()
 * @method string getTags()
 * @method string getVSwitchId()
 * @method string getZoneId()
 * @method string getTag4key()
 * @method string getInstanceNetworkType()
 * @method string getConnectionMode()
 * @method string getClientToken()
 * @method string getSearchKey()
 * @method string getPageNumber()
 * @method string getExpired()
 * @method string getEngine()
 * @method string getPageSize()
 * @method string getDBInstanceStatus()
 * @method string getDBInstanceId()
 * @method string getDedicatedHostGroupId()
 * @method string getTag3value()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTag5value()
 * @method string getTag1key()
 * @method string getVpcId()
 * @method string getTag2value()
 * @method string getPayType()
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
            'Rds',
            '2014-08-15',
            'DescribeDBInstances',
            'rds'
        );
    }

    /**
     * @param string $tag4value
     *
     * @return $this
     */
    public function setTag4value($tag4value)
    {
        $this->requestParameters['Tag4value'] = $tag4value;
        $this->queryParameters['Tag.4.value'] = $tag4value;

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
     * @param string $tag2key
     *
     * @return $this
     */
    public function setTag2key($tag2key)
    {
        $this->requestParameters['Tag2key'] = $tag2key;
        $this->queryParameters['Tag.2.key'] = $tag2key;

        return $this;
    }

    /**
     * @param string $tag3key
     *
     * @return $this
     */
    public function setTag3key($tag3key)
    {
        $this->requestParameters['Tag3key'] = $tag3key;
        $this->queryParameters['Tag.3.key'] = $tag3key;

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
     * @param string $tag1value
     *
     * @return $this
     */
    public function setTag1value($tag1value)
    {
        $this->requestParameters['Tag1value'] = $tag1value;
        $this->queryParameters['Tag.1.value'] = $tag1value;

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
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        $this->requestParameters['proxyId'] = $proxyId;
        $this->queryParameters['proxyId'] = $proxyId;

        return $this;
    }

    /**
     * @param string $tag5key
     *
     * @return $this
     */
    public function setTag5key($tag5key)
    {
        $this->requestParameters['Tag5key'] = $tag5key;
        $this->queryParameters['Tag.5.key'] = $tag5key;

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
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->requestParameters['Tags'] = $tags;
        $this->queryParameters['Tags'] = $tags;

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
     * @param string $tag4key
     *
     * @return $this
     */
    public function setTag4key($tag4key)
    {
        $this->requestParameters['Tag4key'] = $tag4key;
        $this->queryParameters['Tag.4.key'] = $tag4key;

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
     * @param string $tag3value
     *
     * @return $this
     */
    public function setTag3value($tag3value)
    {
        $this->requestParameters['Tag3value'] = $tag3value;
        $this->queryParameters['Tag.3.value'] = $tag3value;

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
     * @param string $tag5value
     *
     * @return $this
     */
    public function setTag5value($tag5value)
    {
        $this->requestParameters['Tag5value'] = $tag5value;
        $this->queryParameters['Tag.5.value'] = $tag5value;

        return $this;
    }

    /**
     * @param string $tag1key
     *
     * @return $this
     */
    public function setTag1key($tag1key)
    {
        $this->requestParameters['Tag1key'] = $tag1key;
        $this->queryParameters['Tag.1.key'] = $tag1key;

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
     * @param string $tag2value
     *
     * @return $this
     */
    public function setTag2value($tag2value)
    {
        $this->requestParameters['Tag2value'] = $tag2value;
        $this->queryParameters['Tag.2.value'] = $tag2value;

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
