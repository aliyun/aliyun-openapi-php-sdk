<?php

namespace Cbn\Request\V20170912;

/**
 * Request of DescribeCenAttachedChildInstanceAttribute
 *
 * @method string getChildInstanceId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCenId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getChildInstanceType()
 * @method string getChildInstanceRegionId()
 */
class DescribeCenAttachedChildInstanceAttributeRequest extends \RpcAcsRequest
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
            'Cbn',
            '2017-09-12',
            'DescribeCenAttachedChildInstanceAttribute',
            'cbn'
        );
    }

    /**
     * @param string $childInstanceId
     *
     * @return $this
     */
    public function setChildInstanceId($childInstanceId)
    {
        $this->requestParameters['ChildInstanceId'] = $childInstanceId;
        $this->queryParameters['ChildInstanceId'] = $childInstanceId;

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
     * @param string $cenId
     *
     * @return $this
     */
    public function setCenId($cenId)
    {
        $this->requestParameters['CenId'] = $cenId;
        $this->queryParameters['CenId'] = $cenId;

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
     * @param string $childInstanceType
     *
     * @return $this
     */
    public function setChildInstanceType($childInstanceType)
    {
        $this->requestParameters['ChildInstanceType'] = $childInstanceType;
        $this->queryParameters['ChildInstanceType'] = $childInstanceType;

        return $this;
    }

    /**
     * @param string $childInstanceRegionId
     *
     * @return $this
     */
    public function setChildInstanceRegionId($childInstanceRegionId)
    {
        $this->requestParameters['ChildInstanceRegionId'] = $childInstanceRegionId;
        $this->queryParameters['ChildInstanceRegionId'] = $childInstanceRegionId;

        return $this;
    }
}
