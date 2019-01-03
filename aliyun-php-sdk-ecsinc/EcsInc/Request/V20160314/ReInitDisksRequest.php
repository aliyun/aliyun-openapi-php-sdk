<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of ReInitDisks
 *
 * @method string getResourceOwnerId()
 * @method string getPassword()
 * @method string getResourceOwnerAccount()
 * @method string getAutoStartInstance()
 * @method string getOwnerAccount()
 * @method string getDiskIds()
 * @method string getSecurityEnhancementStrategy()
 * @method string getKeyPairName()
 * @method string getOwnerId()
 */
class ReInitDisksRequest extends \RpcAcsRequest
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
            'EcsInc',
            '2016-03-14',
            'ReInitDisks',
            'ecs'
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
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

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
     * @param string $autoStartInstance
     *
     * @return $this
     */
    public function setAutoStartInstance($autoStartInstance)
    {
        $this->requestParameters['AutoStartInstance'] = $autoStartInstance;
        $this->queryParameters['AutoStartInstance'] = $autoStartInstance;

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
     * @param string $diskIds
     *
     * @return $this
     */
    public function setDiskIds($diskIds)
    {
        $this->requestParameters['DiskIds'] = $diskIds;
        $this->queryParameters['DiskIds'] = $diskIds;

        return $this;
    }

    /**
     * @param string $securityEnhancementStrategy
     *
     * @return $this
     */
    public function setSecurityEnhancementStrategy($securityEnhancementStrategy)
    {
        $this->requestParameters['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;
        $this->queryParameters['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;

        return $this;
    }

    /**
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        $this->requestParameters['KeyPairName'] = $keyPairName;
        $this->queryParameters['KeyPairName'] = $keyPairName;

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
