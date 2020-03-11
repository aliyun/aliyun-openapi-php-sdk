<?php

namespace Dds\Request\V20151201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDBInstanceTDE
 *
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getDBInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEncryptionKey()
 * @method string getOwnerId()
 * @method string getEncryptorName()
 * @method string getRoleARN()
 * @method string getTDEStatus()
 */
class ModifyDBInstanceTDERequest extends \RpcAcsRequest
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
            'ModifyDBInstanceTDE',
            'dds'
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
     * @param string $encryptionKey
     *
     * @return $this
     */
    public function setEncryptionKey($encryptionKey)
    {
        $this->requestParameters['EncryptionKey'] = $encryptionKey;
        $this->queryParameters['EncryptionKey'] = $encryptionKey;

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
     * @param string $encryptorName
     *
     * @return $this
     */
    public function setEncryptorName($encryptorName)
    {
        $this->requestParameters['EncryptorName'] = $encryptorName;
        $this->queryParameters['EncryptorName'] = $encryptorName;

        return $this;
    }

    /**
     * @param string $roleARN
     *
     * @return $this
     */
    public function setRoleARN($roleARN)
    {
        $this->requestParameters['RoleARN'] = $roleARN;
        $this->queryParameters['RoleARN'] = $roleARN;

        return $this;
    }

    /**
     * @param string $tDEStatus
     *
     * @return $this
     */
    public function setTDEStatus($tDEStatus)
    {
        $this->requestParameters['TDEStatus'] = $tDEStatus;
        $this->queryParameters['TDEStatus'] = $tDEStatus;

        return $this;
    }
}
