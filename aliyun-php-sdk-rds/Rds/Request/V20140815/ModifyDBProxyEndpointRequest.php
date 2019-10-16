<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDBProxyEndpoint
 *
 * @method string getResourceOwnerId()
 * @method string getConfigDBProxyFeatures()
 * @method string getDBInstanceId()
 * @method string getReadOnlyInstanceWeight()
 * @method string getReadOnlyInstanceMaxDelayTime()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getDBProxyEndpointId()
 * @method string getReadOnlyInstanceDistributionType()
 */
class ModifyDBProxyEndpointRequest extends \RpcAcsRequest
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
            'ModifyDBProxyEndpoint',
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
     * @param string $configDBProxyFeatures
     *
     * @return $this
     */
    public function setConfigDBProxyFeatures($configDBProxyFeatures)
    {
        $this->requestParameters['ConfigDBProxyFeatures'] = $configDBProxyFeatures;
        $this->queryParameters['ConfigDBProxyFeatures'] = $configDBProxyFeatures;

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
     * @param string $readOnlyInstanceWeight
     *
     * @return $this
     */
    public function setReadOnlyInstanceWeight($readOnlyInstanceWeight)
    {
        $this->requestParameters['ReadOnlyInstanceWeight'] = $readOnlyInstanceWeight;
        $this->queryParameters['ReadOnlyInstanceWeight'] = $readOnlyInstanceWeight;

        return $this;
    }

    /**
     * @param string $readOnlyInstanceMaxDelayTime
     *
     * @return $this
     */
    public function setReadOnlyInstanceMaxDelayTime($readOnlyInstanceMaxDelayTime)
    {
        $this->requestParameters['ReadOnlyInstanceMaxDelayTime'] = $readOnlyInstanceMaxDelayTime;
        $this->queryParameters['ReadOnlyInstanceMaxDelayTime'] = $readOnlyInstanceMaxDelayTime;

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
     * @param string $dBProxyEndpointId
     *
     * @return $this
     */
    public function setDBProxyEndpointId($dBProxyEndpointId)
    {
        $this->requestParameters['DBProxyEndpointId'] = $dBProxyEndpointId;
        $this->queryParameters['DBProxyEndpointId'] = $dBProxyEndpointId;

        return $this;
    }

    /**
     * @param string $readOnlyInstanceDistributionType
     *
     * @return $this
     */
    public function setReadOnlyInstanceDistributionType($readOnlyInstanceDistributionType)
    {
        $this->requestParameters['ReadOnlyInstanceDistributionType'] = $readOnlyInstanceDistributionType;
        $this->queryParameters['ReadOnlyInstanceDistributionType'] = $readOnlyInstanceDistributionType;

        return $this;
    }
}
