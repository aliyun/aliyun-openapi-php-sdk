<?php

namespace Rds\Request\V20140815;

/**
 * Request of ModifySecurityIps
 *
 * @method string getDBInstanceIPArrayName()
 * @method string getResourceOwnerId()
 * @method string getModifyMode()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getSecurityIps()
 * @method string getSecurityGroupId()
 * @method string getOwnerId()
 * @method string getWhitelistNetworkType()
 * @method string getDBInstanceIPArrayAttribute()
 * @method string getSecurityIPType()
 * @method string getDBInstanceId()
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
            'Rds',
            '2014-08-15',
            'ModifySecurityIps',
            'rds'
        );
    }

    /**
     * @param string $dBInstanceIPArrayName
     *
     * @return $this
     */
    public function setDBInstanceIPArrayName($dBInstanceIPArrayName)
    {
        $this->requestParameters['DBInstanceIPArrayName'] = $dBInstanceIPArrayName;
        $this->queryParameters['DBInstanceIPArrayName'] = $dBInstanceIPArrayName;

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
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->requestParameters['SecurityGroupId'] = $securityGroupId;
        $this->queryParameters['SecurityGroupId'] = $securityGroupId;

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
     * @param string $whitelistNetworkType
     *
     * @return $this
     */
    public function setWhitelistNetworkType($whitelistNetworkType)
    {
        $this->requestParameters['WhitelistNetworkType'] = $whitelistNetworkType;
        $this->queryParameters['WhitelistNetworkType'] = $whitelistNetworkType;

        return $this;
    }

    /**
     * @param string $dBInstanceIPArrayAttribute
     *
     * @return $this
     */
    public function setDBInstanceIPArrayAttribute($dBInstanceIPArrayAttribute)
    {
        $this->requestParameters['DBInstanceIPArrayAttribute'] = $dBInstanceIPArrayAttribute;
        $this->queryParameters['DBInstanceIPArrayAttribute'] = $dBInstanceIPArrayAttribute;

        return $this;
    }

    /**
     * @param string $securityIPType
     *
     * @return $this
     */
    public function setSecurityIPType($securityIPType)
    {
        $this->requestParameters['SecurityIPType'] = $securityIPType;
        $this->queryParameters['SecurityIPType'] = $securityIPType;

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
