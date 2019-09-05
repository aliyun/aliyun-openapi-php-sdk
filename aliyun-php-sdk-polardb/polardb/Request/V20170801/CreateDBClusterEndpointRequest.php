<?php

namespace polardb\Request\V20170801;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDBClusterEndpoint
 *
 * @method string getAutoAddNewNodes()
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getReadWriteMode()
 * @method string getEndpointType()
 * @method string getResourceOwnerAccount()
 * @method string getDBClusterId()
 * @method string getOwnerAccount()
 * @method string getEndpointConfig()
 * @method string getOwnerId()
 * @method string getNodes()
 */
class CreateDBClusterEndpointRequest extends \RpcAcsRequest
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
            'CreateDBClusterEndpoint',
            'polardb'
        );
    }

    /**
     * @param string $autoAddNewNodes
     *
     * @return $this
     */
    public function setAutoAddNewNodes($autoAddNewNodes)
    {
        $this->requestParameters['AutoAddNewNodes'] = $autoAddNewNodes;
        $this->queryParameters['AutoAddNewNodes'] = $autoAddNewNodes;

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
     * @param string $readWriteMode
     *
     * @return $this
     */
    public function setReadWriteMode($readWriteMode)
    {
        $this->requestParameters['ReadWriteMode'] = $readWriteMode;
        $this->queryParameters['ReadWriteMode'] = $readWriteMode;

        return $this;
    }

    /**
     * @param string $endpointType
     *
     * @return $this
     */
    public function setEndpointType($endpointType)
    {
        $this->requestParameters['EndpointType'] = $endpointType;
        $this->queryParameters['EndpointType'] = $endpointType;

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
     * @param string $dBClusterId
     *
     * @return $this
     */
    public function setDBClusterId($dBClusterId)
    {
        $this->requestParameters['DBClusterId'] = $dBClusterId;
        $this->queryParameters['DBClusterId'] = $dBClusterId;

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
     * @param string $endpointConfig
     *
     * @return $this
     */
    public function setEndpointConfig($endpointConfig)
    {
        $this->requestParameters['EndpointConfig'] = $endpointConfig;
        $this->queryParameters['EndpointConfig'] = $endpointConfig;

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
     * @param string $nodes
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->requestParameters['Nodes'] = $nodes;
        $this->queryParameters['Nodes'] = $nodes;

        return $this;
    }
}
