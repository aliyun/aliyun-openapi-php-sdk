<?php

namespace Rds\Request\V20140815;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDBProxyEndpoint
 *
 * @method string getResourceOwnerId()
 * @method string getDBProxyConnectString()
 * @method string getDBInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getDBProxyEndpointId()
 */
class DescribeDBProxyEndpointRequest extends \RpcAcsRequest
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
            'DescribeDBProxyEndpoint',
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
     * @param string $dBProxyConnectString
     *
     * @return $this
     */
    public function setDBProxyConnectString($dBProxyConnectString)
    {
        $this->requestParameters['DBProxyConnectString'] = $dBProxyConnectString;
        $this->queryParameters['DBProxyConnectString'] = $dBProxyConnectString;

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
}
