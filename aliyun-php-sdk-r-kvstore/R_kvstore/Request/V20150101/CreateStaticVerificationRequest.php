<?php

namespace R_kvstore\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateStaticVerification
 *
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getReplicaId()
 * @method string getDestinationInstanceId()
 * @method string getSourceInstanceId()
 * @method string getOwnerId()
 */
class CreateStaticVerificationRequest extends \RpcAcsRequest
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
            'R-kvstore',
            '2015-01-01',
            'CreateStaticVerification',
            'redisa'
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
     * @param string $destinationInstanceId
     *
     * @return $this
     */
    public function setDestinationInstanceId($destinationInstanceId)
    {
        $this->requestParameters['DestinationInstanceId'] = $destinationInstanceId;
        $this->queryParameters['DestinationInstanceId'] = $destinationInstanceId;

        return $this;
    }

    /**
     * @param string $sourceInstanceId
     *
     * @return $this
     */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->requestParameters['SourceInstanceId'] = $sourceInstanceId;
        $this->queryParameters['SourceInstanceId'] = $sourceInstanceId;

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
