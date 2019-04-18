<?php

namespace Dds\Request\V20151201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifySecurityIps
 *
 * @method string getResourceOwnerId()
 * @method string getModifyMode()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSecurityIps()
 * @method string getOwnerId()
 * @method string getSecurityIpGroupName()
 * @method string getSecurityToken()
 * @method string getDBInstanceId()
 * @method string getSecurityIpGroupAttribute()
 */
class ModifySecurityIpsRequest extends \RpcAcsRequest
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
            'ModifySecurityIps',
            'Dds'
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
     * @param string $modifyMode
     *
     * @return $this
     */
    public function setModifyMode($modifyMode)
    {
        $this->requestParameters['ModifyMode'] = $modifyMode;
        $this->queryParameters['ModifyMode'] = $modifyMode;

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
     * @param string $securityIps
     *
     * @return $this
     */
    public function setSecurityIps($securityIps)
    {
        $this->requestParameters['SecurityIps'] = $securityIps;
        $this->queryParameters['SecurityIps'] = $securityIps;

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
     * @param string $securityIpGroupName
     *
     * @return $this
     */
    public function setSecurityIpGroupName($securityIpGroupName)
    {
        $this->requestParameters['SecurityIpGroupName'] = $securityIpGroupName;
        $this->queryParameters['SecurityIpGroupName'] = $securityIpGroupName;

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
     * @param string $securityIpGroupAttribute
     *
     * @return $this
     */
    public function setSecurityIpGroupAttribute($securityIpGroupAttribute)
    {
        $this->requestParameters['SecurityIpGroupAttribute'] = $securityIpGroupAttribute;
        $this->queryParameters['SecurityIpGroupAttribute'] = $securityIpGroupAttribute;

        return $this;
    }
}
