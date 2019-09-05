<?php

namespace polardb\Request\V20170801;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyDBClusterAccessWhitelist
 *
 * @method string getResourceOwnerId()
 * @method string getSecurityIps()
 * @method string getDBClusterIPArrayAttribute()
 * @method string getResourceOwnerAccount()
 * @method string getDBClusterId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDBClusterIPArrayName()
 */
class ModifyDBClusterAccessWhitelistRequest extends \RpcAcsRequest
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
            'ModifyDBClusterAccessWhitelist',
            'polardb'
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
     * @param string $dBClusterIPArrayAttribute
     *
     * @return $this
     */
    public function setDBClusterIPArrayAttribute($dBClusterIPArrayAttribute)
    {
        $this->requestParameters['DBClusterIPArrayAttribute'] = $dBClusterIPArrayAttribute;
        $this->queryParameters['DBClusterIPArrayAttribute'] = $dBClusterIPArrayAttribute;

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
     * @param string $dBClusterIPArrayName
     *
     * @return $this
     */
    public function setDBClusterIPArrayName($dBClusterIPArrayName)
    {
        $this->requestParameters['DBClusterIPArrayName'] = $dBClusterIPArrayName;
        $this->queryParameters['DBClusterIPArrayName'] = $dBClusterIPArrayName;

        return $this;
    }
}
