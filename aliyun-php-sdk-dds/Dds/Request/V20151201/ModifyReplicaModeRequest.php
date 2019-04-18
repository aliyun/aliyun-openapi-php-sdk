<?php

namespace Dds\Request\V20151201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyReplicaMode
 *
 * @method string getDomainMode()
 * @method string getResourceOwnerId()
 * @method string getPrimaryInstanceId()
 * @method string getReplicaMode()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getReplicaId()
 * @method string getOwnerId()
 */
class ModifyReplicaModeRequest extends \RpcAcsRequest
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
            'ModifyReplicaMode',
            'Dds'
        );
    }

    /**
     * @param string $domainMode
     *
     * @return $this
     */
    public function setDomainMode($domainMode)
    {
        $this->requestParameters['DomainMode'] = $domainMode;
        $this->queryParameters['DomainMode'] = $domainMode;

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
     * @param string $primaryInstanceId
     *
     * @return $this
     */
    public function setPrimaryInstanceId($primaryInstanceId)
    {
        $this->requestParameters['PrimaryInstanceId'] = $primaryInstanceId;
        $this->queryParameters['PrimaryInstanceId'] = $primaryInstanceId;

        return $this;
    }

    /**
     * @param string $replicaMode
     *
     * @return $this
     */
    public function setReplicaMode($replicaMode)
    {
        $this->requestParameters['ReplicaMode'] = $replicaMode;
        $this->queryParameters['ReplicaMode'] = $replicaMode;

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
     * @param string $replicaId
     *
     * @return $this
     */
    public function setReplicaId($replicaId)
    {
        $this->requestParameters['ReplicaId'] = $replicaId;
        $this->queryParameters['ReplicaId'] = $replicaId;

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
}
