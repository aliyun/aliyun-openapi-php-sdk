<?php

namespace R_kvstore\Request\V20150101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyBackupPolicy
 *
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getEnableBackupLog()
 * @method string getPreferredBackupPeriod()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getPreferredBackupTime()
 * @method string getInstanceId()
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
            'R-kvstore',
            '2015-01-01',
            'ModifyBackupPolicy',
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
     * @param string $enableBackupLog
     *
     * @return $this
     */
    public function setEnableBackupLog($enableBackupLog)
    {
        $this->requestParameters['EnableBackupLog'] = $enableBackupLog;
        $this->queryParameters['EnableBackupLog'] = $enableBackupLog;

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
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
