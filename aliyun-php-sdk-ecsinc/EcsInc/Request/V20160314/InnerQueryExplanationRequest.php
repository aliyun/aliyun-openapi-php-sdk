<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerQueryExplanation
 *
 * @method string getActionType()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getFilters()
 * @method string getEntityType()
 */
class InnerQueryExplanationRequest extends \RpcAcsRequest
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
            'InnerQueryExplanation',
            'ecs'
        );
    }

    /**
     * @param string $actionType
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        $this->requestParameters['ActionType'] = $actionType;
        $this->queryParameters['ActionType'] = $actionType;

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
     * @param array $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->requestParameters['Filters'] = $filters;
        foreach ($filters as $i => $iValue) {
            $this->queryParameters['Filter.' . ($i + 1) . '.Key'] = $filters[$i]['Key'];
            $this->queryParameters['Filter.' . ($i + 1) . '.Value'] = $filters[$i]['Value'];
        }

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
