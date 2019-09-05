<?php

namespace polardb\Request\V20170801;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GrantAccountPrivilege
 *
 * @method string getResourceOwnerId()
 * @method string getAccountPrivilege()
 * @method string getAccountName()
 * @method string getResourceOwnerAccount()
 * @method string getDBClusterId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDBName()
 */
class GrantAccountPrivilegeRequest extends \RpcAcsRequest
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
            'GrantAccountPrivilege',
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
     * @param string $accountPrivilege
     *
     * @return $this
     */
    public function setAccountPrivilege($accountPrivilege)
    {
        $this->requestParameters['AccountPrivilege'] = $accountPrivilege;
        $this->queryParameters['AccountPrivilege'] = $accountPrivilege;

        return $this;
    }

    /**
     * @param string $accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->requestParameters['AccountName'] = $accountName;
        $this->queryParameters['AccountName'] = $accountName;

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
     * @param string $dBName
     *
     * @return $this
     */
    public function setDBName($dBName)
    {
        $this->requestParameters['DBName'] = $dBName;
        $this->queryParameters['DBName'] = $dBName;

        return $this;
    }
}
