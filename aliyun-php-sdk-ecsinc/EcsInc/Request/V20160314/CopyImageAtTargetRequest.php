<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of CopyImageAtTarget
 *
 * @method string getResourceOwnerId()
 * @method string getFromSnapshotListBase64()
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method string getImageSnapshotMappingsBase64()
 * @method string getDestinationImageName()
 * @method string getResourceMetaMappingsBase64()
 * @method string getOwnerAccount()
 * @method string getDestinationRegionId()
 * @method string getOwnerId()
 * @method string getFromRegionId()
 * @method string getFromRegionName()
 * @method string getFromImageBase64()
 * @method string getDestinationRegionPriId()
 * @method string getDestinationDescription()
 */
class CopyImageAtTargetRequest extends \RpcAcsRequest
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
            'CopyImageAtTarget',
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
     * @param string $fromSnapshotListBase64
     *
     * @return $this
     */
    public function setFromSnapshotListBase64($fromSnapshotListBase64)
    {
        $this->requestParameters['FromSnapshotListBase64'] = $fromSnapshotListBase64;
        $this->queryParameters['FromSnapshotListBase64'] = $fromSnapshotListBase64;

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
     * @param string $imageSnapshotMappingsBase64
     *
     * @return $this
     */
    public function setImageSnapshotMappingsBase64($imageSnapshotMappingsBase64)
    {
        $this->requestParameters['ImageSnapshotMappingsBase64'] = $imageSnapshotMappingsBase64;
        $this->queryParameters['ImageSnapshotMappingsBase64'] = $imageSnapshotMappingsBase64;

        return $this;
    }

    /**
     * @param string $destinationImageName
     *
     * @return $this
     */
    public function setDestinationImageName($destinationImageName)
    {
        $this->requestParameters['DestinationImageName'] = $destinationImageName;
        $this->queryParameters['DestinationImageName'] = $destinationImageName;

        return $this;
    }

    /**
     * @param string $resourceMetaMappingsBase64
     *
     * @return $this
     */
    public function setResourceMetaMappingsBase64($resourceMetaMappingsBase64)
    {
        $this->requestParameters['ResourceMetaMappingsBase64'] = $resourceMetaMappingsBase64;
        $this->queryParameters['ResourceMetaMappingsBase64'] = $resourceMetaMappingsBase64;

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
     * @param string $destinationRegionId
     *
     * @return $this
     */
    public function setDestinationRegionId($destinationRegionId)
    {
        $this->requestParameters['DestinationRegionId'] = $destinationRegionId;
        $this->queryParameters['DestinationRegionId'] = $destinationRegionId;

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
     * @param string $fromRegionId
     *
     * @return $this
     */
    public function setFromRegionId($fromRegionId)
    {
        $this->requestParameters['FromRegionId'] = $fromRegionId;
        $this->queryParameters['FromRegionId'] = $fromRegionId;

        return $this;
    }

    /**
     * @param string $fromRegionName
     *
     * @return $this
     */
    public function setFromRegionName($fromRegionName)
    {
        $this->requestParameters['FromRegionName'] = $fromRegionName;
        $this->queryParameters['FromRegionName'] = $fromRegionName;

        return $this;
    }

    /**
     * @param string $fromImageBase64
     *
     * @return $this
     */
    public function setFromImageBase64($fromImageBase64)
    {
        $this->requestParameters['FromImageBase64'] = $fromImageBase64;
        $this->queryParameters['FromImageBase64'] = $fromImageBase64;

        return $this;
    }

    /**
     * @param string $destinationRegionPriId
     *
     * @return $this
     */
    public function setDestinationRegionPriId($destinationRegionPriId)
    {
        $this->requestParameters['DestinationRegionPriId'] = $destinationRegionPriId;
        $this->queryParameters['DestinationRegionPriId'] = $destinationRegionPriId;

        return $this;
    }

    /**
     * @param string $destinationDescription
     *
     * @return $this
     */
    public function setDestinationDescription($destinationDescription)
    {
        $this->requestParameters['DestinationDescription'] = $destinationDescription;
        $this->queryParameters['DestinationDescription'] = $destinationDescription;

        return $this;
    }
}
