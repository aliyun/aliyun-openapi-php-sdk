<?php

namespace Ecs\Request\V20140526;

/**
 * Request of DescribeImageSupportInstanceTypes
 *
 * @method string getActionType()
 * @method array getFilters()
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 */
class DescribeImageSupportInstanceTypesRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'DescribeImageSupportInstanceTypes',
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
     * @param array $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->requestParameters['Filters'] = $filters;
        foreach ($filters as $i => $iValue) {
            $this->queryParameters['Filter.' . ($i + 1) . '.Value'] = $filters[$i]['Value'];
            $this->queryParameters['Filter.' . ($i + 1) . '.Key'] = $filters[$i]['Key'];
        }

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
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

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
