<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerModifyEntityConstraints
 *
 * @method string getEntityKey()
 * @method string getResourceOwnerId()
 * @method string getEntityProperties()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getReplaceAll()
 * @method string getEntityType()
 */
class InnerModifyEntityConstraintsRequest extends \RpcAcsRequest
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
            'InnerModifyEntityConstraints',
            'ecs'
        );
    }

    /**
     * @param string $entityKey
     *
     * @return $this
     */
    public function setEntityKey($entityKey)
    {
        $this->requestParameters['EntityKey'] = $entityKey;
        $this->queryParameters['EntityKey'] = $entityKey;

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
     * @param string $entityProperties
     *
     * @return $this
     */
    public function setEntityProperties($entityProperties)
    {
        $this->requestParameters['EntityProperties'] = $entityProperties;
        $this->queryParameters['EntityProperties'] = $entityProperties;

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
     * @param string $replaceAll
     *
     * @return $this
     */
    public function setReplaceAll($replaceAll)
    {
        $this->requestParameters['ReplaceAll'] = $replaceAll;
        $this->queryParameters['ReplaceAll'] = $replaceAll;

        return $this;
    }

    /**
     * @param string $entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->requestParameters['EntityType'] = $entityType;
        $this->queryParameters['EntityType'] = $entityType;

        return $this;
    }
}
