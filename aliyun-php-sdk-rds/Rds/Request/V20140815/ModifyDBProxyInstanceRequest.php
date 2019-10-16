<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDBProxyInstance
 *
 * @method string getResourceOwnerId()
 * @method string getEffectiveTime()
 * @method string getEffectiveSpecificTime()
 * @method string getDBInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getDBProxyInstanceNum()
 * @method string getDBProxyInstanceType()
 */
class ModifyDBProxyInstanceRequest extends \RpcAcsRequest
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
            'ModifyDBProxyInstance',
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
     * @param string $effectiveSpecificTime
     *
     * @return $this
     */
    public function setEffectiveSpecificTime($effectiveSpecificTime)
    {
        $this->requestParameters['EffectiveSpecificTime'] = $effectiveSpecificTime;
        $this->queryParameters['EffectiveSpecificTime'] = $effectiveSpecificTime;

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
     * @param string $dBProxyInstanceNum
     *
     * @return $this
     */
    public function setDBProxyInstanceNum($dBProxyInstanceNum)
    {
        $this->requestParameters['DBProxyInstanceNum'] = $dBProxyInstanceNum;
        $this->queryParameters['DBProxyInstanceNum'] = $dBProxyInstanceNum;

        return $this;
    }

    /**
     * @param string $dBProxyInstanceType
     *
     * @return $this
     */
    public function setDBProxyInstanceType($dBProxyInstanceType)
    {
        $this->requestParameters['DBProxyInstanceType'] = $dBProxyInstanceType;
        $this->queryParameters['DBProxyInstanceType'] = $dBProxyInstanceType;

        return $this;
    }
}
