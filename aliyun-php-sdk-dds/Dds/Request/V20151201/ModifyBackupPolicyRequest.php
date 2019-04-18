<?php

namespace Dds\Request\V20151201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyBackupPolicy
 *
 * @method string getPreferredBackupTime()
 * @method string getPreferredBackupPeriod()
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 */
class ModifyBackupPolicyRequest extends \RpcAcsRequest
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
            'ModifyBackupPolicy',
            'Dds'
        );
    }

    /**
     * @param string $preferredBackupTime
     *
     * @return $this
     */
    public function setPreferredBackupTime($preferredBackupTime)
    {
        $this->requestParameters['PreferredBackupTime'] = $preferredBackupTime;
        $this->queryParameters['PreferredBackupTime'] = $preferredBackupTime;

        return $this;
    }

    /**
     * @param string $preferredBackupPeriod
     *
     * @return $this
     */
    public function setPreferredBackupPeriod($preferredBackupPeriod)
    {
        $this->requestParameters['PreferredBackupPeriod'] = $preferredBackupPeriod;
        $this->queryParameters['PreferredBackupPeriod'] = $preferredBackupPeriod;

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
