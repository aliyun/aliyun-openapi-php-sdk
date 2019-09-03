<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDBInstanceProxyConfiguration
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getProxyConfigurationValue()
 * @method string getOwnerId()
 * @method string getProxyConfigurationKey()
 * @method string getDBInstanceId()
 */
class ModifyDBInstanceProxyConfigurationRequest extends \RpcAcsRequest
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
            'ModifyDBInstanceProxyConfiguration',
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
     * @param string $proxyConfigurationValue
     *
     * @return $this
     */
    public function setProxyConfigurationValue($proxyConfigurationValue)
    {
        $this->requestParameters['ProxyConfigurationValue'] = $proxyConfigurationValue;
        $this->queryParameters['ProxyConfigurationValue'] = $proxyConfigurationValue;

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
     * @param string $proxyConfigurationKey
     *
     * @return $this
     */
    public function setProxyConfigurationKey($proxyConfigurationKey)
    {
        $this->requestParameters['ProxyConfigurationKey'] = $proxyConfigurationKey;
        $this->queryParameters['ProxyConfigurationKey'] = $proxyConfigurationKey;

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
}
